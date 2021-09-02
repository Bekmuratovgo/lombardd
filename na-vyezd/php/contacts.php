 <?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require($_SERVER["DOCUMENT_ROOT"]."/crest/crest.php");
function sendMessage($message = '') {
	$token = "690619049:AAHhXJapbFsnRmyI__n1dN4S8AqcSunv7mE";
	$chat_id = "-1001158383155";
	$result = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=HTML&text={$message}", "r");
	return $result;
}

if (check_bitrix_sessid() && $_POST['ajax'] == 'Y')
{
	global $APPLICATION;

	$arData = array("status" => "ok", "mess" => "Спасибо. Заявка отправлена...");

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

        if(isset($_FILES['uploadfile']))
        {
            $file_name = $_FILES['uploadfile']['name'];
            $file_ext = strtolower( end(explode('.',$file_name)));

            $file_tmp= $_FILES['uploadfile']['tmp_name'];

            $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
            $data = file_get_contents($file_tmp);
            // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            $file_data = base64_encode($data);
        }

		if ($_FILES['uploadfile']['tmp_name']){
			$ufile = CFile::SaveFile($_FILES['uploadfile'], 'na_vyezd');
		}



		$arProp = array(
			"USER" => "",
			"NAME" => $name.' - '.$_FILES['uploadfile'],
			"PHONE" => $phone,
			"FILE" => $ufile,	//$_FILES['uploadfile'],
			"DATE_ACTIVE_FROM" => ConvertTimeStamp(time(), "FULL"),
			"IBLOCK_NAME" => $name
		);

		CHandler::addIblock(26, "VYEZD", $arProp, $arEvent);

        $deal = CRest::call(
            'crm.lead.add',
            [
                'fields' => [
                    'UF_CRM_1589030693' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null, //ROISTAT
                    'UF_CRM_1589031190' => $_SERVER['HTTP_REFERER'],
                    'UF_CRM_1589035955710' => ['fileData' => [$file_name,$file_data]],//Страница
                    "TITLE" => 'Вызвать курьера',
                    "NAME" => $name,
                    "STATUS_ID" => "4",
                    "OPENED" => "Y",
                    "ASSIGNED_BY_ID" => 1,
                    "PHONE" => array(array(
                        "VALUE" => $phone,
                        "VALUE_TYPE" => 'HOME'
                    ))
                ],
                'params' => ["REGISTER_SONET_EVENT" => "Y"]
            ]);

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
