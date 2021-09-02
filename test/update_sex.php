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
$arCsv = array_map('str_getcsv', file('module_fk_good_sex.csv'));
$header = array_shift($arCsv);

$i = 0;
$arSex = array();
foreach ($arCsv as $str)
{
	$arTmp = explode(";", $str[0]);

	$arSex[$arTmp["1"]] = $arTmp["2"];
}

/*
echo "<pre>";
print_R($arSex);
echo "</pre>";
die();
*/

//обновление пола
$arEl = array();
$arSelect = array("ID", "NAME", "XML_ID");
$arFilter = array(
	"IBLOCK_ID" => $iblockId, 
	"ACTIVE" => "Y",
);
$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
while($arRes = $res->Fetch())
{
	$sex = "";
	if ($arSex[$arRes["ID"]] == 2)
		$sex = 19;
	elseif ($arSex[$arRes["ID"]] == 1)
		$sex = 20;
	elseif ($arSex[$arRes["ID"]] == 3)
		$sex = 24;

	/*if ($sex != "")
	{
		CIBlockElement::SetPropertyValues($arRes["ID"], $iblockId, $sex, "WHO");
		echo "OK=".$arRes["ID"]."=".$sex."<br>";
	}
	else
		echo "NO=".$arRes["ID"]."<br>";*/
	
	//die("-");
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>