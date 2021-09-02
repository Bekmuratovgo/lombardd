<?
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

\Bitrix\Main\Loader::includeModule("iblock");
\Bitrix\Main\Loader::includeModule("highloadblock");

$hlOfficeId = 3;

//офисы
$arCsv = array_map('str_getcsv', file('module_1c_department.csv'));
$header = array_shift($arCsv);

$arOffice = array();
foreach ($arCsv as $str)
{
	$arTmp = explode(";", $str[0]);
	$arOffice[] = array(
		"ID" => trim($arTmp["1"], "\""),
		"NAME" => trim($arTmp["2"], "\""),
		"ACTIVE" => trim($arTmp["5"], "\""),
		"SORT" => abs(trim($arTmp["6"], "\""))
	);
}

echo "<pre>";
print_R($arOffice);
echo "</pre>";
die();

$arResult = array();
foreach ($arOffice as $arItem)
{
	$arFields = array(
		"UF_NAME" => $arItem["NAME"],
		"UF_XML_ID" => $arItem["ID"],
		"UF_SORT" => $arItem["SORT"],
		"UF_ACTIVE" => $arItem["ACTIVE"]
	);
	$hlblock = HL\HighloadBlockTable::getById($hlOfficeId)->fetch(); 
	$entity = HL\HighloadBlockTable::compileEntity($hlblock);
	$entityData = $entity->getDataClass();
	//$result = $entityData::add($arFields);
	if ($result->isSuccess())
	{
		$arResult[] = $arItem["ID"];
	}
	else
	{
		print_r($result->getErrorMessages());
	}
	//die('1');
}

echo "<pre>";
print_R($arResult);
echo "</pre>";
die();

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>