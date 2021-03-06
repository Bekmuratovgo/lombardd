<?
// prolog
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

set_time_limit(60);

// check access
if(!((isset($bCron) && $bCron == true) || $USER->IsAdmin())) die();

// check working directories
$WORK_DIR = dirname(__file__);
//include "../config.php";
include $WORK_DIR . "/tmp/class.php";
include $WORK_DIR . "/tmp/class_k.php";
include $WORK_DIR . "/tmp/config.php";

if( !isset($notShowProp) ){
	$notShowProp = array();
}


if(!file_exists($WORK_DIR."/tmp"))
{
	if(!mkdir($WORK_DIR."/tmp", BX_DIR_PERMISSIONS))
		die("unable to create directory ".$WORK_DIR."/tmp");
}

if(!file_exists($WORK_DIR."/tmp/log"))
{
	if(!mkdir($WORK_DIR."/tmp/log", BX_DIR_PERMISSIONS))
		die("unable to create directory ".$WORK_DIR."/tmp/log");
}

// options
$STATE_FILE = $WORK_DIR."/tmp/state.txt";
$UPDATE_FILE = $WORK_DIR."/tmp/update.txt";
$READY_XML_FILE = $_SERVER["DOCUMENT_ROOT"]."/yml_file/ym.xml";
$READY_XML_MRC_FILE = $WORK_DIR."/tmp/export_mrc.xml"; //MRC-file creates
$LOG_FILE = $WORK_DIR."/tmp/log/log_ymarket_".date("Y.m").".txt";

//$UPDATE_TIMEOUT = "21600"; // 6 часов
$UPDATE_TIMEOUT = "3600";

$SITE_ID = $GLOBALS["SITE_ID"];
$IBLOCK_TYPE = $GLOBALS["IBLOCK_TYPE"];
$CATALOG_GROUP_ID = $GLOBALS["CATALOG_GROUP_ID"];
$CATALOG_STORE_CODE = $GLOBALS["CATALOG_STORE_CODE"];

$localDeliveryCostDefault = 700;

$TYPEPREFIX_CODE = $GLOBALS["TYPEPREFIX_CODE"];
$BRAND_CODE = $GLOBALS["BRAND_CODE"];
$MODEL_CODE = $GLOBALS["MODEL_CODE"];
$ART_CODE = $GLOBALS["ART_CODE"];
//$WARRANTY_CODE = $GLOBALS["SITE_CONFIG"]["PRODUCT_PARAMS"]["WARRANTY"];

$BRANDS_IBLOCK_ID = $GLOBALS["BRANDS_IBLOCK_ID"];
$COLORS_IBLOCK_ID = $GLOBALS["COLORS_IBLOCK_ID"];
$CATEGORIES_IBLOCK_ID = $GLOBALS["CATEGORIES_IBLOCK_ID"];
$LABELS_IBLOCK_ID = $GLOBALS["LABELS_IBLOCK_ID"];



$arMetals = CStatic::HBGetList(2);


//$OFFER_URL_MARKER = "utm_source=yandex.market&amp;utm_medium=cpc&amp;utm_campaign=whirlpool_campaign";

// description params
$arDescriptionPropsDefault = array(
	"HEIGHT",
	"WIDTH",
	"DEPTH",
	"COLOR",
);
/*
$arDescriptionProps = array(
	"485" => array(
		"HEIGHT",
		"WIDTH",
		"DEPTH",
		"COLOR",
		"COLOR_HOB",
		"FRAME_COLOR",
	),
);
*/

// work mode
$workMode = "manual";
$bStartProcessing = false;

if((isset($_REQUEST["mode"]) && $_REQUEST["mode"] == "cron") || (isset($bCron) && $bCron == true))
{
	$workMode = "cron";
	$bStartProcessing = true;
}

if(isset($_REQUEST["start"]))
	$bStartProcessing = true;

// проверка необходимости обновления
$arUpdateStatus = CMNTStateFile::Read($UPDATE_FILE);

$bNoUpdateStatus = empty($arUpdateStatus) ? true : false;
$bUpdateTimeout = false;

$curTime = getmicrotime();
if(!empty($arUpdateStatus["MICROTIME"]) && $curTime - $arUpdateStatus["MICROTIME"] > $UPDATE_TIMEOUT)
	$bUpdateTimeout = true;

// если обновление не требуется, то обработка не запускается при вызове скрипта по крон
if($workMode == "cron" && !$bNoUpdateStatus && !$arUpdateStatus["UPDATE"] && !$bUpdateTimeout)
	$bStartProcessing = false;

if($workMode == "cron" && !$bStartProcessing)
	CMNTLog::Add("\nMODE: cron\nОбновление не требуется", $LOG_FILE);

$arMessages = array();
$arErrors = array();

// export xml data
if($bStartProcessing)
{
	// processing timer
	$startTime = getmicrotime();
	
	if(!CModule::IncludeModule("iblock") || !CModule::IncludeModule("catalog"))
		die();
	
	require_once($WORK_DIR."/tmp/options.php");
	
	// site info
	$resSite = CSite::GetByID($SITE_ID);
	$arFieldsSite = $resSite->Fetch();
	
	$arSiteInfo = array();
	//$arSiteInfo["COMPANY"] = htmlspecialcharsbx(COption::GetOptionString("main", "site_name", ""));
	//$arSiteInfo["NAME"] = htmlspecialcharsbx($arFieldsSite["SITE_NAME"]);
	//$arSiteInfo["SITE_URL"] = preg_match("~^www\..+$~", $arFieldsSite["SERVER_NAME"]) ? "http://".htmlspecialcharsbx($arFieldsSite["SERVER_NAME"]) : "http://www.".htmlspecialcharsbx($arFieldsSite["SERVER_NAME"]);

	
	$arSiteInfo["SITE_URL"] = $GLOBALS["SITE_URL"];
	$arSiteInfo["NAME"] = $GLOBALS["SITE_NAME"];
	$arSiteInfo["COMPANY"] = $GLOBALS["SITE_COMPANY"];
	
	// exceptions from options.php
	if(!isset($arFilterSectionNot))
		$arFilterSectionNot = array();
	if(!isset($arFilterElNot))
		$arFilterElNot = array();
	
	$arIblocksNot = $arFilterElNot["!IBLOCK_ID"];
	unset($arFilterElNot["!IBLOCK_ID"]);
	
	// iblocks by IBLOCK_TYPE
	$arIblocks = array();
	$arLinkedIblockIDs = array();
	$resIb = CIBlock::GetList(array("sort" => "asc"), array("TYPE" => $IBLOCK_TYPE, "ACTIVE" => "Y", "CNT_ACTIVE" => "Y"), false);
	while($arFieldsIb = $resIb->Fetch())
	{
		if(!in_array($arFieldsIb["ID"], $arIblocksNot))
		{
			// check if it's a SKU iblock
			$mxResult = CCatalogSKU::GetInfoByOfferIBlock($arFieldsIb["ID"]);
			if(is_array($mxResult) && $mxResult["PRODUCT_IBLOCK_ID"] > 0)
				continue;
			
			// sections
			$arFieldsIb["SECTIONS"] = array();
			$resSec = CIBlockSection::GetList(array("left_margin" => "asc"), array("IBLOCK_ID" => $arFieldsIb["ID"], "ACTIVE" => "Y", "GLOBAL_ACTIVE" => "Y"), false, array("UF_*"));
			while($arFieldsSec = $resSec->GetNext())
				$arFieldsIb["SECTIONS"][$arFieldsSec["ID"]] = $arFieldsSec;
			
			// SKU iblock
			$arFieldsIb["SKU_IBLOCK_ID"] = 0;
			$mxResult = CCatalogSKU::GetInfoByProductIBlock($arFieldsIb["ID"]);
			if(is_array($mxResult) && $mxResult["IBLOCK_ID"] > 0)
			{
				$arFieldsIb["SKU_IBLOCK_ID"] = $mxResult["IBLOCK_ID"];
				
				$arFieldsIb["SKU_ITEMS"] = array();
				$resSku = CIBlockElement::GetList(
					array(),
					array(
						"IBLOCK_ID" => $arFieldsIb["SKU_IBLOCK_ID"],
						"ACTIVE" => "Y",
						"!PROPERTY_CML2_LINK" => false,
						"PROPERTY_".$CATALOG_STORE_CODE."_VALUE" => array("В наличии"),
					),
					false,
					false,
					array("ID", "IBLOCK_ID", "NAME", "CATALOG_GROUP_".$CATALOG_GROUP_ID)
				);
				while($obSku = $resSku->GetNextElement())
				{
					$arFieldsSku = $obSku->GetFields();
					$arFieldsSku["PROPERTIES"] = $obSku->GetProperties();
					$arFieldsIb["SKU_ITEMS"][$arFieldsSku["PROPERTIES"]["CML2_LINK"]["VALUE"]][] = $arFieldsSku;
				}
			}
			// properties type E
			$resProp = CIBlockProperty::GetList(array(), array("ACTIVE" => "Y", "IBLOCK_ID" => $arFieldsIb["ID"], "PROPERTY_TYPE" => "E"));
			while($arFieldsProp = $resProp->GetNext())
			{
				if(!empty($arFieldsProp["LINK_IBLOCK_ID"]))
					$arLinkedIblockIDs[] = $arFieldsProp["LINK_IBLOCK_ID"];
			}
			
			if($arFieldsIb["SKU_IBLOCK_ID"] > 0)
			{
				$resProp = CIBlockProperty::GetList(array(), array("ACTIVE" => "Y", "IBLOCK_ID" => $arFieldsIb["SKU_IBLOCK_ID"], "PROPERTY_TYPE" => "E"));
				while($arFieldsProp = $resProp->GetNext())
				{
					if(!empty($arFieldsProp["LINK_IBLOCK_ID"]))
						$arLinkedIblockIDs[] = $arFieldsProp["LINK_IBLOCK_ID"];
				}
			}

			$arIblocks[$arFieldsIb["ID"]] = $arFieldsIb;
		}
	}
	
	// LOCAL_DELIVERY_COST
	$arDeliveryCostCategories = array();
	$resEl = CIBlockElement::GetList(array(), array("IBLOCK_ID" => $CATEGORIES_IBLOCK_ID, "ACTIVE" => "Y"), false, false, array("ID", "IBLOCK_ID", "PROPERTY_IBLOCKID", "PROPERTY_DELIVERY_COST"));
	while($arFieldsEl = $resEl->Fetch())
		$arDeliveryCostCategories[$arFieldsEl["PROPERTY_IBLOCKID_VALUE"]] = $arFieldsEl["PROPERTY_DELIVERY_COST_VALUE"];
	
	$arLabelExceptions = CMNTCached::GetLabelExceptions();	
	
	// free delivery label
	$freeDeliveryLabelID = 0;
	$resEl = CIBlockElement::GetList(array(), array("IBLOCK_ID" => $LABELS_IBLOCK_ID, "ACTIVE" => "Y", "CODE" => "free-delivery"), false, array("nTopCount" => 1), array("ID", "IBLOCK_ID"));
	if($arFieldsEl = $resEl->Fetch())
		$freeDeliveryLabelID = intval($arFieldsEl["ID"]);

	$xmlOut = "<?xml version=\"1.0\" encoding=\"".SITE_CHARSET."\"?>\n";
	$xmlOut .= "<!DOCTYPE yml_catalog SYSTEM \"shops.dtd\">\n";

	$xmlOut .= "<yml_catalog date=\"".date("Y-m-d H:i")."\">\n";
	$xmlOut .= "<shop>\n";
	$xmlOut .= "<name>".$arSiteInfo["NAME"]."</name>\n";
	$xmlOut .= "<company>".$arSiteInfo["COMPANY"]."</company>\n";
	$xmlOut .= "<url>".$arSiteInfo["SITE_URL"]."</url>\n\n";

	$xmlOut .= "<currencies>\n";
	$xmlOut .= "<currency id=\"RUR\" rate=\"1\" />\n";
	$xmlOut .= "</currencies>\n\n";
	
	/*
	$xmlOut .= "<delivery-options>\n";
	$xmlOut .= "<option cost=\"0\" days=\"1-2\" order-before=\"16\" />\n";
	$xmlOut .= "</delivery-options>\n";	
	*/
	// categories
	if(!empty($arIblocks))
	{
		$xmlOut .= "<categories>\n";

		foreach($arIblocks as $arIblock)
		{
			//$xmlOut .= "<category id=\"".$arIblock["ID"]."\">".$arIblock["NAME"]."</category>\n";
			
			
			if(!empty($arIblock["SECTIONS"]))
			{
				foreach($arIblock["SECTIONS"] as $arSection)
				{
					if(is_array($arFilterSectionNot["!ID"]) && in_array($arSection["ID"], $arFilterSectionNot["!ID"]))
						continue;
					
					if($arSection["DEPTH_LEVEL"] == "1")
						$xmlOut .= "<category id=\"".$arSection["ID"]."\">".$arSection["NAME"]."</category>\n";
					else
						$xmlOut .= "<category id=\"".$arSection["ID"]."\" parentId=\"".$arSection["IBLOCK_SECTION_ID"]."\">".$arSection["NAME"]."</category>\n";
				}
			}
			
		}
		
		$xmlOut .= "</categories>\n\n";
	}
	
	// linked iblock elements
	$arLinkedIblockIDs = array_unique($arLinkedIblockIDs);
	
	$arLinkedElements = array();
	foreach($arLinkedIblockIDs as $linkIblockID)
	{
		$arLinkedElements[$linkIblockID] = array();
		$resEl = CIBlockElement::GetList(array(), array("IBLOCK_ID" => $linkIblockID, "ACTIVE" => "Y"), false, array("nTopCount" => 500), array("ID", "NAME"));
		while($arFieldsEl = $resEl->GetNext())
			$arLinkedElements[$linkIblockID][$arFieldsEl["ID"]] = $arFieldsEl["~NAME"];
	}
	
	// offers
	$xmlOut .= "<offers>\n";
	
	foreach($arIblocks as $IBLOCK_ID => $arIblock)
	{
		// получаем доп. хар-ки инфоблока
				$arBlockPols = $GLOBALS['USER_FIELD_MANAGER']->GetUserFields(
					 'ASD_IBLOCK',
					 $IBLOCK_ID
				);				
				$DELIVERY_COST = $arBlockPols["UF_DELIVERY_COST"]["VALUE"];
				$TYPE_PREFIX = $arBlockPols["UF_NAME_ONE"]["VALUE"];
		
		
		$arFilterEl = array(
			"IBLOCK_ID" => $IBLOCK_ID,
			"ACTIVE" => "Y",
			"PROPERTY_".$CATALOG_STORE_CODE."_VALUE" => array("В наличии", "Под заказ"),
		);

		$resEl = CIBlockElement::GetList(
			array("sort" => "asc"),
			array_merge($arFilterEl, $arFilterElNot),
			false,
			false,
			array(
				"ID",
				"IBLOCK_ID",
				"IBLOCK_SECTION_ID",
				"NAME",
				"DETAIL_PAGE_URL",
				"PREVIEW_TEXT",
				"PREVIEW_PICTURE",
				"DETAIL_PICTURE",
				"PREVIEW_TEXT",
				"PREVIEW_TEXT_TYPE",
				"DETAIL_TEXT",
				"DETAIL_TEXT_TYPE",
				"CATALOG_GROUP_".$CATALOG_GROUP_ID,
			)
		);
		
		$counterEl = 0;
		$counterBase = 0;
		$counterSku = 0;
		while($obEl = $resEl->GetNextElement())
		{
			$arFieldsEl = $obEl->GetFields();
			$arFieldsEl["PROPERTIES"] = $obEl->GetProperties();	
			
			
			
			$pictureUrl = "";
			if($arFieldsEl["PREVIEW_PICTURE"]) {			
				$pictureUrl = CFile::GetPath($arFieldsEl["PREVIEW_PICTURE"]);	
			}
			else if($arFieldsEl["DETAIL_PICTURE"]) {				
				$pictureUrl = CFile::GetPath($arFieldsEl["DETAIL_PICTURE"]);
			}
			else if($arFieldsEl["PROPERTIES"]["MORE_PHOTO"]["VALUE"]) {	
				$pictureUrl = CFile::GetPath($arFieldsEl["PROPERTIES"]["MORE_PHOTO"]["VALUE"]);					
			}
			
			

			if(!$pictureUrl) continue;
			
			
			$arFieldsCommon = array(
				"PICTURE" => !empty($pictureUrl) ? $arSiteInfo["SITE_URL"].$pictureUrl : "",
				"CATEGORY_ID" => !empty($arIblock["SECTIONS"][$arFieldsEl["IBLOCK_SECTION_ID"]]) ? $arFieldsEl["IBLOCK_SECTION_ID"] : "10000".$arFieldsEl["IBLOCK_ID"],				
				//"TYPEPREFIX" => htmlspecialcharsbx($arFieldsEl["NAME"]),
				"TYPEPREFIX" => htmlspecialcharsbx($arIblock["SECTIONS"][$arFieldsEl["IBLOCK_SECTION_ID"]]["NAME"]),
				//"MODEL" => htmlspecialcharsbx($arMetals[$arFieldsEl["PROPERTIES"]["METALL"]["VALUE"]]["UF_NAME"]).' '.htmlspecialcharsbx($arFieldsEl["PROPERTIES"]["TRY"]["VALUE"]),
				"MODEL" => htmlspecialcharsbx($arFieldsEl["PROPERTIES"][$ART_CODE]["VALUE"]),
				//"VENDOR" => htmlspecialcharsbx($arFieldsEl["PROPERTIES"][$BRAND_CODE]["VALUE"]),
				"VENDOR" => htmlspecialcharsbx('Первый Ювелирный'),
			);
			
			
			// description
			$arFieldsCommon["DESCRIPTION"] = "";
			if(!empty($arFieldsEl["~DETAIL_TEXT"]))
			{
				$arFieldsCommon["DESCRIPTION"] = $arFieldsEl["~DETAIL_TEXT"];
				
				
				$arFieldsCommon["DESCRIPTION"] = preg_replace("~<.+?>~s", " ", $arFieldsCommon["DESCRIPTION"]);
				$arFieldsCommon["DESCRIPTION"] = preg_replace("~\s\s+~", " ", $arFieldsCommon["DESCRIPTION"]);
				$arFieldsCommon["DESCRIPTION"] = html_entity_decode(trim($arFieldsCommon["DESCRIPTION"]));
				$arFieldsCommon["DESCRIPTION"] = htmlspecialcharsbx(trim($arFieldsCommon["DESCRIPTION"]));
				
			}
			
			//if(empty($arFieldsCommon["DESCRIPTION"]))
			//	$arFieldsCommon["DESCRIPTION"] = htmlspecialcharsbx($arFieldsEl["PROPERTIES"]["DESCRIPTION"]["~VALUE"]);
			
			if(empty($arFieldsCommon["DESCRIPTION"]))
			{
				if(!empty($arDescriptionProps[$arFieldsEl["IBLOCK_ID"]]))
					$arPropCodes = $arDescriptionProps[$arFieldsEl["IBLOCK_ID"]];
				elseif(!empty($arDescriptionPropsDefault))
					$arPropCodes = $arDescriptionPropsDefault;
				
				if(!empty($arPropCodes) && is_array($arPropCodes))
				{
					$strDescription = "";
					foreach($arPropCodes as $propCode)
					{
						$arProp = $arFieldsEl["PROPERTIES"][$propCode];
						if(!empty($arProp["~VALUE"]))
						{
							if($arProp["PROPERTY_TYPE"] == "E")
							{
								if(empty($arProp["LINK_IBLOCK_ID"]) || empty($arLinkedElements[$arProp["LINK_IBLOCK_ID"]]))
									continue;
								
								$arProp["~VALUE"] = $arLinkedElements[$arProp["LINK_IBLOCK_ID"]][$arProp["~VALUE"]];
							}
							
							$strDescription .= (strlen($strDescription) > 0 ? ", " : "") . $arProp["~NAME"].": ".$arProp["~VALUE"];
						}
					}
					
					if(!empty($strDescription))
						$arFieldsCommon["DESCRIPTION"] = htmlspecialcharsbx($strDescription).".";
				}
			}			
			
			if( !empty($arFieldsCommon["DESCRIPTION"]) )
				$arFieldsCommon["DESCRIPTION"] = "<![CDATA[" . $arFieldsCommon["DESCRIPTION"] . "]]>";			
			
			$arFieldsCommon["PARAMS"] = array();
			foreach($arFieldsEl["PROPERTIES"] as $propCode => $arProp)
			{
				if($arProp["DEFAULT_VALUE"] == "+")
				{
					$arProp["~VALUE"] = ":";
					$arProp["VALUE"] = ":";
					
					continue;
				}
				
				if(
					//$arProp["SORT"] < 5000 || 
					in_array($propCode, $notShowProp) ||
					empty($arProp["~VALUE"]) ||
					in_array($arProp["PROPERTY_TYPE"], array("F", "G")) || 
					$arProp["USER_TYPE"] == "HTML" || 
					($arProp["PROPERTY_TYPE"] == "E" && empty($arProp["LINK_IBLOCK_ID"]))
				) {
					continue;
				}
				
				if($arProp["PROPERTY_TYPE"] == "L" && $arProp["VALUE"] == "Y")
				{
					$arProp["~VALUE"] = "Да";
					$arProp["VALUE"] = "Да";
				}
				
				$arProp["~PRINT_VALUE"] = $arProp["~VALUE"];
				if($arProp["PROPERTY_TYPE"] == "E")
				{
					if(empty($arLinkedElements[$arProp["LINK_IBLOCK_ID"]]))
						continue;
					
					if(is_array($arProp["~VALUE"]))
					{
						$arProp["~PRINT_VALUE"] = array();
						foreach($arProp["~VALUE"] as $k => $v)
							$arProp["~PRINT_VALUE"][$k] = $arLinkedElements[$arProp["LINK_IBLOCK_ID"]][$v];
					}
					else
					{
						$arProp["~PRINT_VALUE"] = $arLinkedElements[$arProp["LINK_IBLOCK_ID"]][$arProp["~VALUE"]];
					}
				}
				
				$arPropSave = array();
				
				if(!is_array($arProp["~PRINT_VALUE"]))
				{
					$arPropSave["NAME"] = htmlspecialcharsbx(trim($arProp["~NAME"]));
					$arPropSave["VALUE"] = htmlspecialcharsbx(trim($arProp["~PRINT_VALUE"]));
				}
				else
				{
					if(count($arProp["~PRINT_VALUE"]) == 1)
					{
						$strVal = $arProp["~PRINT_VALUE"][0];
					}
					else
					{
						$strVal = "";
						foreach($arProp["~PRINT_VALUE"] as $k => $v)
							$strVal .= ($k > 0 ? ", " : "") . $v;
					}
					
					if(strlen($strVal) > 0)
					{
						$arPropSave["NAME"] = htmlspecialcharsbx(trim($arProp["~NAME"]));
						$arPropSave["VALUE"] = htmlspecialcharsbx(trim($strVal));
					}
				}
				
				$arFieldsCommon["PARAMS"][$propCode] = $arPropSave;
			}
			
			
			
			
			$OFFER_URL_MARKER = "utm_source=ymarket&amp;utm_medium=cpc&amp;utm_content=".$arIblock["SECTIONS"][$arFieldsEl["IBLOCK_SECTION_ID"]]["NAME"]."&amp;utm_campaign=".$GLOBALS["YM_TAG"]."&amp;utm_term=" . $arFieldsEl["ID"];
			$arFieldsXml = $arFieldsCommon;
			$arFieldsXml["ID"] = $arFieldsEl["ID"];
			$arFieldsXml["URL"] = $arSiteInfo["SITE_URL"].str_replace(" ", "%20", $arFieldsEl["DETAIL_PAGE_URL"])."?".$OFFER_URL_MARKER;			
			$arFieldsXml["AVAILABLE"] = $arFieldsEl["PROPERTIES"][$CATALOG_STORE_CODE]["VALUE"] == "В наличии" ? "true" : "false";
			$arFieldsXml["PRICE"] = floatval($arFieldsEl["CATALOG_PRICE_".$CATALOG_GROUP_ID]);
			
			if($arFieldsXml["PRICE"] <= 0)
				continue;
			
			$commission = (int) $arFieldsEl["PROPERTIES"]["COMMISSION"]["VALUE"];
			if( $commission > 0 )
				$arFieldsXml["PURCHASE_PRICE"] = $arFieldsXml["PRICE"] - $commission;
			
			
			
			$arFieldsXml["DELIVERY_COST"] = $DELIVERY_COST;

	
			$arFieldsXml["SALES_NOTES"] = "Резерв изделия с сохранением скидки на 72 часа";
	
		
			// xml offer
			$xmlOut .= "<offer type=\"vendor.model\" id=\"".$arFieldsXml["ID"]."\" available=\"".$arFieldsXml["AVAILABLE"]."\">\n";
			
			$xmlOut .= "<url>".$arFieldsXml["URL"]."</url>\n";
			$xmlOut .= "<price>".$arFieldsXml["PRICE"]."</price>\n";
			if( $arFieldsXml["PURCHASE_PRICE"] > 0 ){
				$xmlOut .= "<purchase_price>".$arFieldsXml["PURCHASE_PRICE"]."</purchase_price>\n";
			}
			$xmlOut .= "<currencyId>RUR</currencyId>\n";
			$xmlOut .= "<categoryId>".$arFieldsXml["CATEGORY_ID"]."</categoryId>\n";
			
			if(!empty($arFieldsXml["PICTURE"]))
				$xmlOut .= "<picture>".$arFieldsXml["PICTURE"]."</picture>\n";
			
			//$xmlOut .= "<delivery>true</delivery>\n";
			//$xmlOut .= "<local_delivery_cost>".$arFieldsXml["DELIVERY_COST"]."</local_delivery_cost>\n";
			
			$xmlOut .= "<delivery>false</delivery>\n";			
			$xmlOut .= "<pickup>true</pickup>\n";
			$xmlOut .= "<store>true</store>\n";
			
			/*
				
			
			$days = '1-2';		
			$xmlOut .= "<delivery-options>\n";		
			$xmlOut .= "<option cost=\"" . $arFieldsXml["DELIVERY_COST"] . "\" days=\"".$days."\" order-before=\"16\" />\n";
			$xmlOut .= "</delivery-options>\n";			
			*/
			if(!empty($arFieldsXml["TYPEPREFIX"])) {
				$xmlOut .= "<typePrefix>".htmlspecialcharsbx($arFieldsXml["TYPEPREFIX"])."</typePrefix>\n";
			}
			else {
				$xmlOut .= "<typePrefix>".htmlspecialcharsbx($TYPE_PREFIX)."</typePrefix>\n";				
			}
			
			$xmlOut .= "<vendor>".htmlspecialcharsbx($arFieldsXml["VENDOR"])."</vendor>\n";
			
			//pre($arFieldsEl["PROPERTIES"]["ARTIKUL"]);
			/*
			if($arFieldsEl["PROPERTIES"][$ART_CODE]["VALUE"]) {				
				$xmlOut .= "<vendorCode>".htmlspecialcharsbx($arFieldsEl["PROPERTIES"][$ART_CODE]["VALUE"])."</vendorCode>\n";
			}*/
			$xmlOut .= "<model>".$arFieldsXml["MODEL"]."</model>\n";
			
			if(!empty($arFieldsXml["DESCRIPTION"]))
				$xmlOut .= "<description>".htmlspecialcharsbx($arFieldsXml["DESCRIPTION"])."</description>\n";
			
			if(!empty($arFieldsXml["SALES_NOTES"]))
				$xmlOut .= "<sales_notes>".$arFieldsXml["SALES_NOTES"]."</sales_notes>\n";
			
			//$xmlOut .= "<manufacturer_warranty>true</manufacturer_warranty>\n";
			
			foreach($arFieldsXml["PARAMS"] as $arParam)
				$xmlOut .= "<param name=\"".$arParam["NAME"]."\">".htmlspecialcharsbx($arParam["VALUE"])."</param>\n";
			
			$xmlOut .= "</offer>\n\n";
			
			$counterEl++;
			
        }

		$arMessages[] = "Processing iblock '".$arIblock["CODE"]."' (usual: ".$counterEl.", base: ".$counterBase." )";
	}
	
	$arMessages[] = "Processing complete";
	
	$xmlOut .= "</offers>\n\n";
	$xmlOut .= "</shop>\n";
	$xmlOut .= "</yml_catalog>\n";
	
	// saving xml file
	$handle = fopen($READY_XML_FILE, "w+");
	if(fwrite($handle, $xmlOut) === FALSE)
		$arErrors[] = "Processing complete / Error saving xml";
	
	fclose($handle);
	
	if(file_exists($READY_XML_FILE))
	{
		$fileSize = CMNTGeneral::FileSizeFormatEn(filesize($READY_XML_FILE));
		$arMessages[] = "File size: ".$fileSize;
	}
	
   	// saving xml mrc file
	$handle = fopen($READY_XML_MRC_FILE, "w+");
	if(fwrite($handle, $xmlOut) === FALSE)
		$arErrors[] = "Processing complete / Error saving xml";
	
	fclose($handle);
	
	if(file_exists($READY_XML_MRC_FILE))
	{
		$fileSize = CMNTGeneral::FileSizeFormatEn(filesize($READY_XML_MRC_FILE));
		$arMessages[] = "File size: ".$fileSize;
	}	
	
	// saving state
	$arState = array(
		"NAME" => "Processing complete",
		"MODE" => $workMode,
		"ERRORS" => $arErrors,
		"FILE_SIZE" => $fileSize,
	);
	
	if(!CMNTStateFile::Save($STATE_FILE, $arState))
		$arErrors[] = "Processing complete / Error saving current state.";
	
	// если статус обновления не изменился за время создания xml файла, устанавливаем "обновление не требуется"
	if(empty($arErrors))
	{
		$arUpdateStatusCur = CMNTStateFile::Read($UPDATE_FILE);
		if($arUpdateStatusCur["TIME"] == $arUpdateStatus["TIME"])
		{
			if(!CMNTStateFile::Save($UPDATE_FILE, array("UPDATE" => 0, "EVENT" => "YML_GENERATOR")))
				$arErrors[] = "Processing complete / Error saving update status";
		}
	}
	
	$arMessages[] = "Processing time: ".round(getmicrotime()-$startTime, 3)." sec.";
	
	// запись в лог
	$strLog = "";
	
	if(is_array($arUpdateStatus) && !empty($arUpdateStatus))
	{
		$strLog .= "\nNEED_UPDATE: ".$arUpdateStatus["UPDATE"]."\n";
		$strLog .= "UPDATE_EVENT: ".$arUpdateStatus["EVENT"]."\n";
		
		if($arUpdateStatus["UPDATE"])
			$strLog .= "Статус обновления: требуется обновление по событию '".$arUpdateStatus["EVENT"]."'\n";
		elseif($bUpdateTimeout)
			$strLog .= "Статус обновления: требуется обновление по таймауту (".$UPDATE_TIMEOUT." сек)\n";
		else
			$strLog .= "Статус обновления: обновление не требуется\n";
	}
	else
	{
		$strLog .= "\nСтатус обновления: не найден\n";
	}
	
	$strLog .= "\nMODE: ".$workMode."\n";
	
	foreach($arMessages as $v)
		$strLog .= $v."\n";
	
	if(!empty($arErrors))
	{
		$strLog .= "\nErrors:"."\n";
		foreach($arErrors as $v)
			$strLog .= $v."\n";
	}
	
	$strLog = preg_replace("~^(.+)\n+$~s", "$1", $strLog);
	
	CMNTLog::Add($strLog, $LOG_FILE);
}

if($workMode == "manual")
	include($WORK_DIR."/index_html.php");

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>