<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

//log_start
$file = 'log_payment_t.txt';
$data1=$_SERVER;
$data2=$_GET;
$data3=$_POST;

ob_start();
print_r($data1);
$server_array = ob_get_contents();
ob_end_clean();


ob_start();
print_r($data2);
$get_array = ob_get_contents();
ob_end_clean();

ob_start();
print_r($data3);
$post_array = ob_get_contents();
ob_end_clean();


$textualRepresentation = PHP_EOL.date('H:i:s').PHP_EOL.$server_array.PHP_EOL.PHP_EOL.PHP_EOL.'++GET++'.PHP_EOL.$get_array.PHP_EOL.PHP_EOL.PHP_EOL.'++POST++'.$post_array.PHP_EOL.'=========================================='.PHP_EOL;




file_put_contents($file, $textualRepresentation, FILE_APPEND | LOCK_EX);
//log_end





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
