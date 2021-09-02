<?
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;
use Bitrix\Main\Type\Collection;

set_time_limit(0);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/upload/import_log.txt','a+');
fwrite($fp,'START:' . date('d.m.Y H:i:s')."\r\n");
fwrite($fp,print_r($_REQUEST,true));
fwrite($fp,"\r\n");

if (isset($_REQUEST["set_payment_lock"]))
{
	COption::SetOptionString("main", "payment_lock", "Y");
	fwrite($fp,'PAYMENT_LOCK:' . date('d.m.Y H:i:s')."\r\n");
	die("set_payment_lock");
}

if (isset($_REQUEST["submit"]) && $_REQUEST["message"] == "finish")
{
	COption::SetOptionString("main", "payment_lock", "N");
	fwrite($fp,'PAYMENT_UNLOCK:' . date('d.m.Y H:i:s')."\r\n");
	die("remove_payment_lock");
}

while (ob_get_level()) {
	ob_end_flush();
}

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/csv_data.php");

\Bitrix\Main\Loader::includeModule("iblock");
\Bitrix\Main\Loader::includeModule("catalog");

$iBlockId = ZAIM_IBLOCK_ID;

$fileFeed = '/var/www/lombard1.trinet32.ru/web/upload/exchange/data_14.09.2018-23:00:42.csv';
if(!empty($_FILES['datafile'])) {
	$fileFeed = $_SERVER['DOCUMENT_ROOT'] . "/upload/exchange/data_" . date('d.m.Y-H:i:s').'.csv';
	if(!move_uploaded_file($_FILES['datafile']["tmp_name"], $fileFeed)) {
		die('Ошибка при загрузке файла');
	}
}

if (!file_exists($fileFeed))	{
	die('Ошибка при загрузке файла');
}

//элементы из фида

$arFeedElements = array();
$csvFile = new CCSVData('R', true);
$csvFile->LoadFile($fileFeed);
$csvFile->SetDelimiter('|');
while ($arRes = $csvFile->Fetch())	{
	$arFeedElements[] = $arRes;
}

fwrite($fp,'COUNT:' . count($arFeedElements)."\r\n");

fwrite($fp,print_r($arFeedElements,true));
fwrite($fp,"\r\n");

$hlblock = HL\HighloadBlockTable::getById(HI_UPLOAD_ID)->fetch();
$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entityData = $entity->getDataClass();


//выборка элементов. производим по полям ИдентификаторДоговора и ИдентификаторПредмета
//если находим - обновляем остальное. если нет - создаем новый элемент
$k = 1;
foreach ($arFeedElements as $arFeedElement)
{
	$contractId = $arFeedElement[4];
	$itemId = $arFeedElement[21];

	$rsData = $entityData::getList(array(
		'select' => array('ID'),
		'order' => array(),
		'filter' => array(
			"UF_CONTRACT_CODE" => $contractId,
			"UF_TOVAR_CODE" => $itemId,
		)
	));
	while($arData = $rsData->fetch())
	{
		$entityData::update($arData['ID'], array(
			'UF_1C_COMPLETE' => 'Y'
		));
	}


	$arFilter = array(
		'IBLOCK_ID' => $iBlockId,
		'PROPERTY_IDENTIFIKATOR_DOGOVORA' => $contractId,
		'PROPERTY_IDENTIFIKATOR_PREDMETA' => $itemId
	);

	$arProps = array(
		'IDENTIFICATOR_USER' => $arFeedElement[1],
		'FIO' => $arFeedElement[2],
		'PHONE' => $arFeedElement[3],
		'DOGOVOR_ZAYMA' => $arFeedElement[5],

		'DATA_VYDACHI' => $arFeedElement[6],
		'DATA_VOZVRATA' => $arFeedElement[7],
		'SUMMA_ZAYMA' => str_replace(" ","",$arFeedElement[8]),
		'DOLG_OBSHCHIY' => str_replace(" ","",$arFeedElement[9]),

		'DOLG_OBSHCHIY_DNI' => $arFeedElement[10],
		'DOLG_PO_DOGOVORU' => str_replace(" ","",$arFeedElement[11]),
		'DOLG_PO_DOGOVORU_DNI' => $arFeedElement[12],
		'DOLG_VNE_DOGOVORA' => str_replace(" ","",$arFeedElement[13]),

		'DOLG_VNE_DOGOVORA_DNI' => $arFeedElement[14],
		'STAVKA_RUB_PO_DOGOVORU' => str_replace(" ","",$arFeedElement[15]),
		'STAVKA_RUB_VNE_DOGOVORA' => str_replace(" ","",$arFeedElement[16]),
		'STAVKA_PO_DOGOVORU' => $arFeedElement[17],

		'STAVKA_VNE_DOGOVORA' => $arFeedElement[18],
		'MINIMALNAYA_OPLATA' => str_replace(" ","",$arFeedElement[19]),
		'MAKSIMALNAYA_OPLATA' => str_replace(" ","",$arFeedElement[20]),
		'METOD_OKRUGLENIYA' => $arFeedElement[23],
		'MENAT_STAVKU_DO' => $arFeedElement[24]
	);
	$rsEl = CIBlockElement::GetList(
		array(),
		$arFilter,
		false,
		false,
		array(
			'ID',
			'PROPERTY_IDENTIFICATOR_USER',
			'PROPERTY_FIO',
			'PROPERTY_PHONE',
			'PROPERTY_DOGOVOR_ZAYMA',
			'PROPERTY_DATA_VYDACHI',
			'PROPERTY_DATA_VOZVRATA',
			'PROPERTY_SUMMA_ZAYMA',
			'PROPERTY_DOLG_OBSHCHIY',
			'PROPERTY_DOLG_OBSHCHIY_DNI',
			'PROPERTY_DOLG_PO_DOGOVORU',
			'PROPERTY_DOLG_PO_DOGOVORU_DNI',
			'PROPERTY_DOLG_VNE_DOGOVORA',
			'PROPERTY_DOLG_VNE_DOGOVORA_DNI',
			'PROPERTY_STAVKA_RUB_PO_DOGOVORU',
			'PROPERTY_STAVKA_RUB_VNE_DOGOVORA',
			'PROPERTY_STAVKA_PO_DOGOVORU',
			'PROPERTY_STAVKA_VNE_DOGOVORA',
			'PROPERTY_MINIMALNAYA_OPLATA',
			'PROPERTY_MAKSIMALNAYA_OPLATA',
			'PROPERTY_METOD_OKRUGLENIYA',
			"PROPERTY_MENAT_STAVKU_DO"
		)
	);
	if($arEl = $rsEl->Fetch())
	{
		if(empty($arProps['DOGOVOR_ZAYMA']))
		{
			CIBlockElement::Delete($arEl['ID']);
		}
		else
		{
			$arPropsToUpdate = array();
			foreach($arProps as $key => $value)
			{
				if($arEl['PROPERTY_'.$key.'_VALUE'] != $value) {
					$arPropsToUpdate[$key] = $value;
				}
			}

			if(count($arPropsToUpdate) > 0)
			{
				CIBlockElement::SetPropertyValuesEx(
					$arEl['ID'],
					$iBlockId,
					$arPropsToUpdate
				);
			}
			$el = new CIBlockElement;
			$el->Update($arEl['ID'],array());
		}
	}
	else
	{
		$arProps['IDENTIFIKATOR_DOGOVORA'] = $contractId;
		$arProps['IDENTIFIKATOR_PREDMETA'] = $itemId;

		if(!empty($arProps['DOGOVOR_ZAYMA']))
		{
			$arFields = array(
			  'IBLOCK_ID' => $iBlockId,
			  'NAME' => $contractId,
			  'ACTIVE' => 'Y',
			  'PROPERTY_VALUES'=> $arProps
			);

			$obEl = new CIBlockElement;
			if(!$obEl->Add($arFields))
			{
			  die($obEl->LAST_ERROR);
			}
		}
	}
}
fwrite($fp,'END:' . date('d.m.Y H:i:s')."\r\n\r\n");
fclose($fp);

// удаляем старые договора
$ob = CIBlockElement::GetList([], ['IBLOCK_ID' => ZAIM_IBLOCK_ID, '<TIMESTAMP_X' => date('d.m.Y H:i:s', strtotime('-24 hours'))], false, false, ['ID', 'IBLOCK_ID']);
while ($item = $ob->GetNext()) {
	CIBlockElement::Delete($item['ID']);
}

echo 'success';
?>
