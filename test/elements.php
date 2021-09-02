<?
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

\Bitrix\Main\Loader::includeModule("iblock");
\Bitrix\Main\Loader::includeModule("highloadblock");

$iblockId = 2;
$priceType = 1;

function getPropList($code, $iblockId)
{
	$arResult = array();
	$res = CIBlockProperty::GetPropertyEnum(
		$code, 
		array(), 
		array("IBLOCK_ID" => $iblockId)
	);
	while ($arData = $res->Fetch())
	{
		$arResult[$arData["XML_ID"]] = $arData["ID"];
	}
	
	return $arResult;
}

function getPropLoad($hlIblockId)
{
	$arResult = array();

	$hlblock = HL\HighloadBlockTable::getById($hlIblockId)->fetch(); 
	$entity = HL\HighloadBlockTable::compileEntity($hlblock);
	$entityDataClass = $entity->getDataClass();
	$rsData = $entityDataClass::getList(array(
	   "select" => array("*"),
	   "order" => array("ID" => "ASC"),
	   //"filter" => array('UF_USER' => $USER->GetID())
	));
	while ($arData = $rsData->Fetch())
	{
		$arResult[$arData["UF_SORT"]] = $arData["UF_XML_ID"];
	}
	
	return $arResult;
}

$arSex = getPropList("WHO", $iblockId);
$arProbe = getPropList("TRY", $iblockId);
$arHoliday = getPropList("HOLIDAY", $iblockId);
$arBrand = getPropList("BRAND", $iblockId);
$arSize = getPropList("SIZE", $iblockId);
$arType = getPropList("TYPE", $iblockId);

$arInsert = getPropLoad(1);
$arMaterial = getPropLoad(2);


//связка элементов и раздела
$arCsv = array_map('str_getcsv', file('module_fk_good_category.csv'));
$header = array_shift($arCsv);

$arGoodIdCategory = array();
foreach ($arCsv as $str)
{
	$arTmp = explode(";", $str[0]);
	$arGoodIdCategory[$arTmp[1]] = $arTmp[2];
}

//связка элементов и вставок
$arCsv = array_map('str_getcsv', file('module_fk_good_insert.csv'));
$header = array_shift($arCsv);

$arGoodIdInsert = array();
foreach ($arCsv as $str)
{
	$arTmp = explode(";", $str[0]);
	$arGoodIdInsert[$arTmp[1]][] = $arTmp[2];
}
/*echo "<pre>";
print_R($arGoodIdInsert);
echo "</pre>";
die();*/

//список разделов
$arSections = array();
$arSelect = array("*");
$arFilter = array(
	"IBLOCK_ID" => $iblockId, 
	"ACTIVE" => "Y",
	"INCLUDE_SUBSECTIONS" => "Y",
);
$res = CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
while($arRes = $res->Fetch())
{
	$arSections[$arRes["XML_ID"]] = $arRes["ID"];
}

/*echo "<pre>";
print_R($arSections);
echo "</pre>";
die();
*/

$arProps = array(
	"PROP_ARTICLE" => 8,
	"PROP_SIZE" => 6,
	"PROP_MATERIAL" => 5,
	"PROP_PROBE" => 3,
	"PROP_INSERT" => 4,
	//"PROP_SUPPLIER" => ,
	"PROP_NEW" => 9,
	"PROP_IS_SALE" => 11,
	"PROP_SHOWCASE" => 12,
	"PROP_SEX" => 10,
	"PROP_TYPE" => 2,
	"PROP_HOLIDAY" => 17,
	"PROP_BRAND" => 18
);

//элементы
$arCsv = array_map('str_getcsv', file('module_good.csv'));
$header = array_shift($arCsv);
die();
$i = 0;
$el = new CIBlockElement;
$arElements= array();
foreach ($arCsv as $str)
{
	$arTmp = explode(";", $str[0]);
	
	$catId = $arGoodIdCategory[$arTmp[0]];
	/*$arElements[$arTmp[0]] = array(
		"NAME" => $arTmp[1],
		"CODE" => $arTmp[2],
		"XML_ID" => $arTmp[0],
		"DESCRIPTION" => $arTmp[4],
		"PRICE" => $arTmp[16],
		"DETAIL_PICTURE" => $arTmp[14],
		"PROP_ARTICLE" => $arTmp[3],
		
		"PROP_SIZE" => $arSize[$arTmp[5]],
		"PROP_MATERIAL" => $arMaterial[$arTmp[6]],
		"PROP_PROB" => $arProbe[$arTmp[7]],
		"PROP_INSERT" => $arInsert[$arTmp[8]],
		"PROP_HOLIDAY" => $arHoliday[$arTmp[9]],
		"PROP_BRAND" => $arBrand[$arTmp[10]],
		"PROP_NEW" => ($arTmp[22])?"18":"",
		"PROP_SALE" => ($arTmp[23])?"21":"",
		//"PROP_SHOWCASE" => ($arTmp[24])?"22":"",
		"PROP_SEX" => $arSex[$arTmp[26]],
		"PROP_TYPE" => $arType[$catId]
	);*/
	
	
	$arProp = array();
	$arProp[$arProps["PROP_ARTICLE"]] = $arTmp[3];
	$arProp[$arProps["PROP_SIZE"]] = $arSize[$arTmp[5]];
	$arProp[$arProps["PROP_MATERIAL"]] = $arMaterial[$arTmp[6]];
	$arProp[$arProps["PROP_PROBE"]] = $arProbe[$arTmp[7]];
	
	$arInstProp = array();
	if (isset($arGoodIdInsert[$arTmp[0]]))
	{
		foreach ($arGoodIdInsert[$arTmp[0]] as $insertId)
		{
			$arInstProp[] = $arInsert[$insertId];
		}
	}
	$arProp[$arProps["PROP_INSERT"]] = $arInstProp;
	
	$arProp[$arProps["PROP_NEW"]] = ($arTmp[22])?"18":"";
	$arProp[$arProps["PROP_IS_SALE"]] = ($arTmp[23])?"21":"";
	//$arProp[$arProps["PROP_SHOWCASE"]] = ($arItem["PROP_SHOWCASE"])?"22":"";
	$arProp[$arProps["PROP_SEX"]] = $arSex[$arTmp[26]];
	$arProp[$arProps["PROP_TYPE"]] = $arType[$catId];
	$arProp[$arProps["PROP_HOLIDAY"]] = $arHoliday[$arTmp[9]];
	$arProp[$arProps["PROP_BRAND"]] = $arBrand[$arTmp[10]];
	
	$arProductArray = array( 
		"IBLOCK_SECTION_ID" => $arSections[$catId],
		"IBLOCK_ID"      => $iblockId,  
		"PROPERTY_VALUES"=> $arProp,
		"NAME"           => $arTmp[1],
		"ACTIVE"         => ($arTmp[18])?"Y":"N",
		"DETAIL_TEXT"    => $arTmp[4],
		//"SORT"    => $arItem["SORT"],
		"CODE"    => $arTmp[2],
		"XML_ID"    => $arTmp[0],
		"DETAIL_PICTURE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/test/good/".$arTmp[14])
	);
	
	if($PRODUCT_ID = $el->Add($arProductArray))
	{
		echo $arTmp[0]." = New ID: ".$PRODUCT_ID."<br>";
		
		$arFields = array(
			"ID" => $PRODUCT_ID, 
			"AVAILABLE" => "Y",
			"QUANTITY" => 10
		);
		if (CCatalogProduct::Add($arFields))
		{
			$arFields = Array(
				"PRODUCT_ID" => $PRODUCT_ID,
				"CATALOG_GROUP_ID" => $priceType,
				"PRICE" => floatval($arTmp[16]),
				"CURRENCY" => "RUB",
			);
			$res = CPrice::GetList(
				array(),
				array(
					"PRODUCT_ID" => $PRODUCT_ID,
					"CATALOG_GROUP_ID" => $priceType
				)
			);

			if ($arr = $res->Fetch())
				CPrice::Update($arr["ID"], $arFields);
			else
				CPrice::Add($arFields);
		}
	}
	else  
		echo $arTmp[0]." = Error: ".$el->LAST_ERROR."<br>";
	
	
	/*if ($arTmp[0] == 33)
	{
		echo "<pre>";
		print_R($arProductArray);
		echo "</pre>";
		die();
	}*/
	
	if ($i > 5)
		die();
	
	$i++;
}





echo "<pre>";
print_R($arElements);
echo "</pre>";
die();


$iblockId = 2;
$arSetting = array(
	"ACTIVE" => 18,
	"ID" => 0,
	"NAME" => 1,
	"CODE" => 2,
	"SORT" => 19,
	"DETAIL" => 4,
	"IMAGE" => 14,
	"PROP_ARTICLE" => 3,
	"PROP_SIZE" => 5,
	"PROP_MATERIAL" => 6,
	"PROP_PROBE" => 7,
	"PROP_INSERT" => 8,
	"PROP_SUPPLIER" => 13,
	"PROP_NEW" => 22,
	"PROP_IS_SALE" => 23,
	"PROP_SHOWCASE" => 24,
	"PROP_SEX" => 26,
	"PRICE" => 16
);

$arProps = array(
	"PROP_ARTICLE" => 8,
	"PROP_SIZE" => 6,
	"PROP_MATERIAL" => 5,
	"PROP_PROBE" => 3,
	"PROP_INSERT" => 4,
	//"PROP_SUPPLIER" => ,
	"PROP_NEW" => 9,
	"PROP_IS_SALE" => 11,
	"PROP_SHOWCASE" => 12,
	"PROP_SEX" => 10,
);


$arSection = array();
$arSection2 = array();
$arElement = array();
foreach ($arCsv as $arItem)
{
	$arEl = explode(";", $arItem[0]);
	
	$arElement[] = array(
		"ID" => $arEl[$arSetting["ID"]],
		//"PARENT_ID" => $arEl[1],
		//"TYPE" => $arEl[8],
		"NAME" => $arEl[$arSetting["NAME"]],
		//"NAMES" => trim($arEl[3], "\""),
		"CODE" => $arEl[$arSetting["CODE"]],
		"ACTIVE" => $arEl[$arSetting["ACTIVE"]],
		"SORT" => abs($arEl[$arSetting["SORT"]]),
		"DETAIL_TEXT" => $arEl[$arSetting["DETAIL"]],
		"IMAGE" => $arEl[$arSetting["IMAGE"]],
		"PRICE" => $arEl[$arSetting["PRICE"]],
		"PROP_ARTICLE" => $arEl[$arSetting["PROP_ARTICLE"]],
		"PROP_SIZE" => $arEl[$arSetting["PROP_SIZE"]],
		"PROP_MATERIAL" => $arEl[$arSetting["PROP_MATERIAL"]],
		"PROP_PROBE" => $arEl[$arSetting["PROP_PROBE"]],
		"PROP_INSERT" => $arEl[$arSetting["PROP_INSERT"]],
		"PROP_SUPPLIER" => $arEl[$arSetting["PROP_SUPPLIER"]],
		"PROP_NEW" => $arEl[$arSetting["PROP_NEW"]],
		"PROP_IS_SALE" => $arEl[$arSetting["PROP_IS_SALE"]],
		"PROP_SHOWCASE" => $arEl[$arSetting["PROP_SHOWCASE"]],
		"PROP_SEX" => $arEl[$arSetting["PROP_SEX"]]
	);
}

/*
foreach ($arSection2 as $k => &$v) 
{
	if (isset($arElement[$v['ID']]))
	{
		$v["ITEMS"] = $arElement[$v['ID']];
	}
	
	if (isset($arSection2[$v['PARENT_ID']])) 
	{
		$arSection2[$v['PARENT_ID']]['CHILDREN'][$k] = &$v;
	}
	
	unset($v);
}
	
$arResult = array();
foreach ($arSection2 as $arItem)
{
	if ($arItem["PARENT_ID"] == 0)
	{
		$arResult = $arItem;
		break;
	}
}
*/

/*echo "<pre>";
print_r($arElement);
echo "</pre>";*/

$el = new CIBlockElement;
foreach ($arElement as $arItem)
{
	$arProp = array();
	$arProp[$arProps["PROP_ARTICLE"]] = $arItem["PROP_ARTICLE"];
	$arProp[$arProps["PROP_SIZE"]] = $arItem["PROP_SIZE"];
	$arProp[$arProps["PROP_MATERIAL"]] = $arItem["PROP_MATERIAL"];
	$arProp[$arProps["PROP_PROBE"]] = $arItem["PROP_PROBE"];
	$arProp[$arProps["PROP_INSERT"]] = $arItem["PROP_INSERT"];
	$arProp[$arProps["PROP_NEW"]] = ($arItem["PROP_NEW"])?"18":"";
	$arProp[$arProps["PROP_IS_SALE"]] = ($arItem["PROP_IS_SALE"])?"21":"";
	$arProp[$arProps["PROP_SHOWCASE"]] = ($arItem["PROP_SHOWCASE"])?"22":"";
	$arProp[$arProps["PROP_SEX"]] = $arItem["PROP_SEX"];
	
	$arLoadProductArray = array( 
		"IBLOCK_SECTION_ID" => false,
		"IBLOCK_ID"      => $iblockId,  
		"PROPERTY_VALUES"=> $arProp,
		"NAME"           => $arItem["NAME"],
		"ACTIVE"         => ($arItem["ACTIVE"])?"Y":"N",
		"DETAIL_TEXT"    => $arItem["DETAIL_TEXT"],
		"SORT"    => $arItem["SORT"],
		"CODE"    => $arItem["CODE"],
		"XML_ID"    => $arItem["ID"],
		"DETAIL_PICTURE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/test/img/".$arItem["IMAGE"])
	);
	
	/*if($PRODUCT_ID = $el->Add($arLoadProductArray))  
		echo $arItem["ID"]." = New ID: ".$PRODUCT_ID."<br>";
	else  
		echo $arItem["ID"]." = Error: ".$el->LAST_ERROR."<br>";*/
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>