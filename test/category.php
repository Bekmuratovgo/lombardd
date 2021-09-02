<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

\Bitrix\Main\Loader::includeModule("iblock");

$arCsv = array_map('str_getcsv', file('module_category.csv'));
$header = array_shift($arCsv);

$arSection = array();
$arElement = array();
foreach ($arCsv as $arItem)
{
	$arTmp = explode(";", $arItem[0]);
	
	$arTmp[8] = trim($arTmp[8], "\"");
	$arTmp[1] = trim($arTmp[1], "\"");
	$arTmp[0] = trim($arTmp[0], "\"");

	$arSection[$arTmp[0]] = array(
		"ID" => $arTmp[0],
		"PARENT_ID" => $arTmp[1],
		"TYPE" => $arTmp[8],
		"NAME" => trim($arTmp[2], "\""),
		"NAMES" => trim($arTmp[3], "\""),
		"CODE" => trim($arTmp[4], "\""),
		"IMG" => trim($arTmp[7], "\""),
		"SORT" => abs(trim($arTmp[11], "\"")),
		"CHILDREN" => array(),
		//"ITEMS" => array()
	);
}

foreach ($arSection as $k => &$v) 
{
	if (isset($arElement[$v['ID']]))
	{
		$v["ITEMS"] = $arElement[$v['ID']];
	}
	
	if (isset($arSection[$v['PARENT_ID']])) 
	{
		$arSection[$v['PARENT_ID']]['CHILDREN'][$k] = &$v;
	}
	
	unset($v);
}
	
$arResult = array();
foreach ($arSection as $arItem)
{
	if ($arItem["PARENT_ID"] == 0)
	{
		$arResult = $arItem;
		break;
	}
}

echo "<pre>";
print_r($arResult);
echo "</pre>";
die();

$site = "s2";
$iblockId = 2;

function addSectionList($arResult, $sectionId = false, $site, $iblockId)
{
	$bs = new CIBlockSection;
	foreach ($arResult as $arItem)
	{
		$arFields = array(
			"ACTIVE" => "Y",
			"IBLOCK_ID" => $iblockId,
			"IBLOCK_SECTION_ID" => $sectionId,
			"NAME" => $arItem["NAME"],
			"CODE" => $arItem["CODE"],
			"SORT" => $arItem["SORT"],
			"XML_ID" => $arItem["ID"],
			"LID" => $site,
			"UF_NAMES" => $arItem["NAMES"]
		);
		
		if ($arItem["PARENT_ID"] > 0)
			$ID = $bs->Add($arFields);
		if ( ($ID > 0 && !empty($arItem["CHILDREN"])) || $arItem["PARENT_ID"] == 0)
		{
			addSectionList($arItem["CHILDREN"], $ID, $site, $iblockId);
		}
	}
}

$arResult = array($arResult);
addSectionList($arResult, false, $site, $iblockId);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>