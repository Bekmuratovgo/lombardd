<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$testMode = !empty($_REQUEST['test']);

$pay = new CZalogPayment();

$arPayments = $pay->getTinkoffPaymensFor1CExport();

$arCSVOut = array();
$arCSVOut[] = array(
  'Идентификатор Клиента',
  'Идентификатор Договора',
  'Идентификатор Предмета',
  'Дата платежа',
  'Оплачено дней',
  'Оплата по договору',
  'Оплата вне договора'
);

$arPaymentsIds = array();
foreach ($arPayments as $arPayment)
{
  $arCSVOut[] = array(
    $arPayment['UF_USER_XML_ID'],
    $arPayment['UF_CONTRACT_CODE'],
    $arPayment['UF_TOVAR_CODE'],
    $arPayment['UF_DATE_INSERT'],
    $arPayment['UF_DAYS'],
    $arPayment['UF_PRICE_PO_CONTRACT'],
    $arPayment['UF_PRICE_VNE_CONTRAC'],
  );
  $arPaymentIds[] = $arPayment['ID'];
}

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=payments.csv");
header("Pragma: no-cache");
header("Expires: 0");

$fOut = fopen('php://output', 'w');

foreach($arCSVOut as $arRow)
{
  fwrite($fOut,implode(';',$arRow)."\r\n");
}
fclose($fOut);

$fp = fopen($_SERVER['DOCUMENT_ROOT'].'/upload/tinkiff_csv_send.log','a+');
fwrite($fp,date('d.m.Y H:i:s')."\r\n");
fclose($fp);

if(!$testMode)
{
  $pay->setTinkoff1CExportFlags($arPaymentIds);
}
