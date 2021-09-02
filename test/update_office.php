<?
set_time_limit(0);

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

\Bitrix\Main\Loader::includeModule("iblock");
\Bitrix\Main\Loader::includeModule("highloadblock");

$hlOfficeId = 3;
$iblockId = 2;
$priceType = 1;

//1)выбрать элементы с нулевой ценой
//2)выбрать элементы с файла
//3)обновить цену


//связка раздел элементы
$arCsv = array_map('str_getcsv', file('module_fk_good_office.csv'));
$header = array_shift($arCsv);

$arGoodOffice = array();
foreach ($arCsv as $str)
{
	$arTmp = explode(";", $str[0]);

	$arGoodOffice[$arTmp["2"]][] = $arTmp["1"];
}


/*echo "<pre>";
print_R($arGoodOffice);
echo "</pre>";
die();*/


//товары каталога
$arEl = array();
$arSelect = array("ID", "XML_ID");
$arFilter = array(
	"IBLOCK_ID" => $iblockId, 
);
$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
while($arRes = $res->Fetch())
{
	$arEl[$arRes["XML_ID"]] = $arRes["ID"];
}

/*echo "<pre>";
print_R($arEl);
echo "</pre>";
die();*/


//отделения
$arOffice = array();
$hlblock = HL\HighloadBlockTable::getById($hlOfficeId)->fetch(); 
$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entityDataClass = $entity->getDataClass();
$rsData = $entityDataClass::getList(array(
   "select" => array("*"),
   "order" => array("ID" => "ASC"),

));
while ($arData = $rsData->Fetch())
{
	$arData["UF_COUNT_EL"] = 0;
	$arOffice[$arData["UF_XML_ID"]] = $arData;
}

/*echo "<pre>";
print_R($arOffice);
echo "</pre>";
die('-');*/

/*
foreach ($arGoodOffice as $officGoodeId => $arGoodId)
{
	if (is_array($arGoodId))
	{
		$i = 0;
		foreach ($arGoodId as $goodId)
		{
			$id = $arEl[$goodId];
			
			//CIBlockElement::SetPropertyValues($id, $iblockId, $officGoodeId, "OFFICE");
			
			echo $id."=".$goodId.":".$officGoodeId."<br>";
			if ($i > 10)
				die('=');
			
			$i++;
		}
	}
}
*/

$hlblock = HL\HighloadBlockTable::getById($hlOfficeId)->fetch(); 
$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entityDataClass = $entity->getDataClass();
foreach ($arGoodOffice as $officGoodeId => $arGoodId)
{
	if (is_array($arGoodId))
	{
		$ID = $arOffice[$officGoodeId]["ID"];
		
		echo $officGoodeId."=".$ID."=".count($arGoodId);
		
		//$result = $entityDataClass::update($ID, array("UF_COUNT_EL" => count($arGoodId)));
		//die();
	}
}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>