<?
set_time_limit(0);

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

\Bitrix\Main\Loader::includeModule("iblock");
\Bitrix\Main\Loader::includeModule("highloadblock");

$iblockId = 2;
$priceType = 1;

//1)выбрать элементы с нулевой ценой
//2)выбрать элементы с файла
//3)обновить цену


//элементы из файла
$arCsv = array_map('str_getcsv', file('module_good_update.csv'));
$header = array_shift($arCsv);

$i = 0;
$arElements = array();
foreach ($arCsv as $str)
{
	$arTmp = explode(";", $str[0]);

	$arElements[$arTmp["0"]] = $arTmp["2"];
}

/*
echo "<pre>";
print_R($arElements);
echo "</pre>";
die();
*/

//обновление цены
/*
$arEl = array();
$arSelect = array("ID", "NAME", "XML_ID");
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
		if ($arPrice["PRICE"] < 1000000)
		{
			$arRes["PRICE"] = $arPrice["PRICE"];
			
			$arFields = Array(
				"PRODUCT_ID" => $arRes["ID"],
				"CATALOG_GROUP_ID" => $priceType,
				"PRICE" => floatval($arElements[$arRes["XML_ID"]]),
				"CURRENCY" => "RUB",
			);
			//CPrice::Update($arPrice["ID"], $arFields);
			$arEl[] = $arRes;
		}
	}
}*/

echo "<pre>";
print_R($arEl);
echo "</pre>";
die();

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