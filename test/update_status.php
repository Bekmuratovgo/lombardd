<?
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;
use Bitrix\Main\Type\Collection;

set_time_limit(0);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/csv_data.php");

\Bitrix\Main\Loader::includeModule("iblock");
\Bitrix\Main\Loader::includeModule("catalog");




$iblockId = 2;

$fileUrlUpdate = "http://calin.ru/status_export.txt";
$fileUrlFeed = "http://calin.ru/ALL/ALL.csv";
$fileFeed = "module_good_code.csv";

if (!file_exists($fileFeed))
	die('Файл не существует');
die();
//элементы из фида
$arFidElement = array();
$csvFile = new CCSVData('R', false);
$csvFile->LoadFile($fileFeed);
$csvFile->SetDelimiter(';');
$k = 0;
while ($arRes = $csvFile->Fetch())
{
	if ($k == 0)
	{
		$k = 1;
		continue;
	}

	$arFidElement[$arRes["0"]] = $arRes["29"];
}
//debug($arFidElement);die();

//выборка элементов каталога
$arCatalogElement = array();
$arSelect = array("ID", "NAME", "XML_ID", "IBLOCK_ID");
$arFilter = array(
	"IBLOCK_ID" => $iblockId, 
);
$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
while($arRes = $res->Fetch())
{
	$arCatalogElement[$arRes["XML_ID"]] = $arRes;
}
//debug($arCatalogElement);die();

$el = new CIBlockElement;
foreach ($arCatalogElement as $arItem)
{
	if (isset($arFidElement[$arItem["XML_ID"]]))
	{
		$status = 176;
		if ($arFidElement[$arItem["XML_ID"]] == 1)
			$status = 177;
		CIBlockElement::SetPropertyValues($arItem["ID"], 2, $status, "STATUS");
		
		//echo $arItem["ID"]."=".$status;
		//die();
	}
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>