 <?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

function sendMessage($message = '') {
	$token = "690619049:AAHhXJapbFsnRmyI__n1dN4S8AqcSunv7mE";
	$chat_id = "-342768766";
	// $chat_id = "690619049";
	$result = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=HTML&text={$message}", "r");
	return $result;
}

if (check_bitrix_sessid() && $_POST['ajax'] == 'Y')
{
	global $APPLICATION;

	$arData = array("status" => "ok", "mess" => "�������. ��������� ����������.");

	$name = trim($_POST["fio"]);
	$phone = trim($_POST["phone"]);
	
	if (empty($name) || empty($phone))
	{
		$arData["status"] = "err";
		$arData["mess"] = "Извините, данные не были переданы.";
	}
	if ($arData["status"] == "ok")
	{
		$arEvent = array(
			"NAME" => $name,
			"PHONE" => $phone,
			"EMAIL_TO" => COption::GetOptionString("main", "email_from", ""),
		);

		$arProp = array(
			"USER" => "",
			"NAME" => $name,
			"PHONE" => $phone,
			"FILE" => $_FILES['uploadfile'],
			"DATE_ACTIVE_FROM" => ConvertTimeStamp(time(), "FULL"),
			"IBLOCK_NAME" => $name
		);

		CHandler::addIblock(26, "VYEZD", $arProp, $arEvent);

        $messageText = "⚖️ <strong>Вызов курьера</strong>%0A<i>Имя:</i> {$name}%0A<i>Номер телефона:</i> {$phone}";
		sendMessage($messageText);
	}

	$APPLICATION->RestartBuffer();
	echo json_encode( $arData );
	die();
}
?>

<script src="/tpl/js/build.js" type="text/javascript"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>
