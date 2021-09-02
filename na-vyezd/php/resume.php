<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
// Файлы phpmailer
require_once($_SERVER['DOCUMENT_ROOT'].'/include/mailerphp/class.phpmailer.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/include/mailerphp/class.smtp.php');
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

	$name = "Клиент";

	if ($arData["status"] == "ok")
	{
		$arEvent = array(
			"NAME" => $name,
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

		for ($ct = 0; $ct < count($_FILES['uploadfile']['name']); $ct++) {
			$ufile[] = CFile::SaveFile([
                            'name'=>$_FILES['uploadfile']['name'][$ct],
                            'tmp_name'=>$_FILES['uploadfile']['tmp_name'][$ct],
                            'type'=>$_FILES['uploadfile']['type'][$ct],
                            'size'=>$_FILES['uploadfile']['size'][$ct],
                            'error'=>$_FILES['uploadfile']['error'][$ct],
                        ], 'na_vyezd');
		}

		$arProp = array(
			"USER" => "",
			"NAME" => $name,
			"FILE" => $_FILES['uploadfile'],
			"DATE_ACTIVE_FROM" => ConvertTimeStamp(time(), "FULL"),
			"IBLOCK_NAME" => $name
		);

        $deal = CRest::call(
            'crm.lead.add',
            [
                'fields' => [
                    'UF_CRM_1589030693' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null, //ROISTAT
                    'UF_CRM_1589031190' => $_SERVER['HTTP_REFERER'],
                    'UF_CRM_1589035955710' => ['fileData' => [$file_name,$file_data]],
                    "TITLE" => 'Резюме клиента',
                    "NAME" => $name,
                    "STATUS_ID" => "4",
                    "OPENED" => "Y",
                    "ASSIGNED_BY_ID" => 1
                ],
                'params' => ["REGISTER_SONET_EVENT" => "Y"]
            ]);

		CHandler::addIblock(47, "RESUME", $arProp, '');

        $messageText = "⚖️ <strong>Резюме клиента</strong>%0A<i>Имя:</i> {$name}";
		sendMessage($messageText);
	
		$mail = new PHPMailer;  
		$from = 'noreplay@lombardd.ru';
		$to = "A.donskaya@lombardd.ru";
		$mail->AddCC('Secret@lombardd.ru');
		$mail->AddCC('ed@msk.trinet.ru');
		//$mail->AddCC('e.rumyanceva@br.trinet.ru');
		$subject = "Ломбард: Резюме клиента";		
		$body = "Здравствуйте, ".$name."!<br/>
			Резюме клиента.<br/>Имя: ".$name;

		// Прикрепление файлов
		$mail->AddAttachment($_FILES['uploadfile']['tmp_name'], $_FILES['uploadfile']['name']);
 
		// Настройки
		$mail->setFrom($from); // Ваш Email
		$mail->addAddress($to); // Email получателя
			
		// Письмо
		$mail->CharSet = "utf-8";
		$mail->isHTML(true); 
		$mail->Subject = $subject; // Заголовок письма
		$mail->Body = $body; // Текст письма	
			
		// Результат
		if(!$mail->send()) {
			$arData["status"] = "err";
			$arData["mess"] = "Извините, данные не были переданы. mail";
			return;
		} 
	}

	$APPLICATION->RestartBuffer();
	echo json_encode( $arData );
	die();
}
?>

<script src="/tpl/js/build.js" type="text/javascript"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>
