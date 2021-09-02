<?
set_time_limit(0);

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

\Bitrix\Main\Loader::includeModule("iblock");
\Bitrix\Main\Loader::includeModule("highloadblock");

$iblockId = 2;
$priceType = 1;

//1) выбрать элементы с файла good_id => category_Id
//2) выбрать разделы, справочник xml_id -> id
//2) выбрать элементы без раздела
//3) обновить раздел


//элементы из файла
$arCategory = array();
$arCsv = array_map('str_getcsv', file('module_fk_good_category.csv'));
$header = array_shift($arCsv);
foreach ($arCsv as $str)
{
	$arTmp = explode(";", $str[0]);

	$arCategory[$arTmp["1"]] = $arTmp["2"];
}

/*
echo "<pre>";
print_R($arCategory);
echo "</pre>";
die();
*/

//выбрать разделы
$arSection = array();
$arFilter = array(
	"ACTIVE" => "Y",
	"IBLOCK_ID" => $iblockId
);
$arSelect = array("ID", "XML_ID");
$list = CIBlockSection::GetList(
	array($by=>$order), 
	$arFilter,
	false,
	$arSelect
);  
while($arData = $list->Fetch())
{
	$arSection[$arData["XML_ID"]] = $arData["ID"];
}

/*echo "<pre>";
print_R($arSection);
echo "</pre>";
die();*/


//выбрать элементы
$arEl = array();
$arSelect = array("ID", "NAME", "XML_ID", "IBLOCK_SECTION_ID");
$arFilter = array(
	"IBLOCK_ID" => $iblockId, 
	"ACTIVE" => "Y",
	"SECTION_ID" => 25,
	//"INCLUDE_SUBSECTIONS" => "Y",
	"NAME" => "%лопатка%"
);
$arSort = array("NAME" => "DESC");
$res = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
$el = new CIBlockElement;
while($arRes = $res->Fetch())
{
	//$categoryId = $arCategory[$arRes["XML_ID"]];
	//$sectionId = $arSection[$categoryId];
	//$sectionId = 21;//кольцо
	//$sectionId = 47;//серьги
	//$sectionId = 39;//подвеска
	//$sectionId = 51;//стакан
	$sectionId = 57;

	$arField = array(
		"IBLOCK_SECTION" => $sectionId,
	);
	//$rs = $el->Update($arRes["ID"], $arField);
	$arEl[] = $arRes;
}

echo count($arEl);
echo "<pre>";
print_R($arEl);
echo "</pre>";
die();

//обновление цены
/*$arSelect = array("ID", "NAME", "XML_ID");
$arFilter = array(
	"IBLOCK_ID" => $iblockId, 
	"ACTIVE" => "Y",
);
$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
while($arRes = $res->Fetch())
{
	$list = CPrice::GetList(
		array(),
		array(
			"PRODUCT_ID" => $arRes["ID"],
		)
	);
	if ($arPrice = $list->Fetch())
	{
		if ($arPrice["PRICE"] <= 0)
		{
			$arFields = Array(
				"PRODUCT_ID" => $arRes["ID"],
				"CATALOG_GROUP_ID" => $priceType,
				"PRICE" => floatval($arElements[$arRes["XML_ID"]]),
				"CURRENCY" => "RUB",
			);
			//CPrice::Update($arPrice["ID"], $arFields);
		}
	}
}*/



//обновление весов
$arWieght1 = array(
	"янв",
	"фев",
	"марта",
	"апр",
	"мая",
	"июня",
	"июля",
	"авг",
	"окт",
	"ноя"
);
$arWieght2 = array(
	"1",
	"2",
	"3",
	"4",
	"5",
	"6",
	"7",
	"8",
	"10",
	"11"
);

/*
Cmodule::IncludeModule('catalog');
$arTmp = array();
$arSelect = array("ID", "NAME", "XML_ID");
$arFilter = array(
	"IBLOCK_ID" => $iblockId, 
	"ACTIVE" => "Y",
	//"ID" => 470
);
$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
while($arRes = $res->Fetch())
{
	$weight = strtolower($arElements[$arRes["XML_ID"]]);
	
	$arRes["WEIGHT"] = str_replace($arWieght1, $arWieght2, $weight);
	$arRes["WEIGHT"] = floatval($arRes["WEIGHT"]);
	
	if ($arRes["WEIGHT"] > 0)
	{
		$arFields = array(
			"WEIGHT" => $arRes["WEIGHT"]
		);
		CCatalogProduct::Update($arRes["ID"], $arFields);
	}
	$arTmp[] = $arRes;
}
*/

echo "<pre>";
print_R($arTmp);
echo "</pre>";
die('-');


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>