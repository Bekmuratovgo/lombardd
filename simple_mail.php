<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$errors = array();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$sendCallback4=0;
$sendCallback5=0;
	switch ($_POST["handler"]) {

		case 'sendCallback3':
			if (empty($_POST["phone"])) $errors["phone"] = true;
			if (sizeof($errors) > 0)
				echo json_encode(array(
					'status' => 'have_errors',
					'errors' => $errors
				));
			$phone = trim($_POST["phone"]);
			$from = "noreply@lombardd.ru";
			$to = "info@lombardd.ru";
			$subject = $_SERVER["HTTP_HOST"] . " :: Сообщение из формы \"Получить 300 000 рублей\"";
			$body = "
					Информационное сообщение сайта " . $_SERVER["HTTP_HOST"] . "
					------------------------------------------------------------

					Вам было отправлено сообщение через форму \"Получить 300 000 рублей\"

					Номер телефона / имя : " . $phone . "

					------------------------------------------------------------
					Сообщение сгенерировано автоматически.
						";
			break;
		case 'sendCallback4':
			//if (empty($_POST["comment2"])) $errors["comment2"] = true;
			if (empty($_POST["rating"])) $errors["rating"] = true;
			$sendCallback4=1;
			if (sizeof($errors) > 0)
				echo json_encode(array(
					'status' => 'have_errors',
					'errors' => $errors
				));
			$comment = trim($_POST["comment"]);
			$improve = trim($_POST["improve"]);
			$phone = trim($_POST["phone"]);
			if($phone) $p=$phone; else $p="";
			$otdel = trim($_POST["otdel"]);
			$rating = trim($_POST["rating"]);
			$service = trim($_POST["service"]);
			$variant = trim($_POST["variant"]);
			$from = "noreply@lombardd.ru";
			$to = "secret@lombardd.ru,a.donskaya@lombardd.ru,ed@msk.trinet.ru";
// 			$to = "sb@br.trinet.ru";
			$subject = $_SERVER["HTTP_HOST"] . " :: Сообщение из формы \"Оценка сервиса\"";
			$body = "
					Информационное сообщение сайта " . $_SERVER["HTTP_HOST"] . "
					------------------------------------------------------------

					Вам было отправлено сообщение через форму \"Оценка сервиса\"

					Отделение : " . $otdel . "
					Телефон : " . $phone . "
					Оценка : " . $rating . "
					Откуда узнали : " . $service . "
					Ваши варианты : " . $variant . "
					Желаете стать участником бонусной программы : " . $comment . "
					Как улучшить : " . $improve . "

					------------------------------------------------------------
					Сообщение сгенерировано автоматически.
						";

				$arProp = array(
					"PHONE" => $phone,
					"OTDEL" => $otdel,
					"RATING" => $rating,
					"REASON" => $comment,
					"SERVICE" => $service,
					"VARIANT" => $variant,
					"IMPROVE" => $improve
				);

				CHandler::addIblock(34, "", $arProp, "");
			break;
		case 'sendCallback5':
			if (empty($_POST["rating"])) $errors["rating"] = true;
			$sendCallback5=1;
			if (sizeof($errors) > 0)
				echo json_encode(array(
					'status' => 'have_errors',
					'errors' => $errors
				));
			$comment = trim($_POST["comment"]);
			$variant = trim($_POST["variant"]);
			$phone = trim($_POST["phone"]);
			if($phone) $p=$phone; else $p="";
			$otdel = trim($_POST["otdel"]);
			$rating = trim($_POST["rating"]);
			$service = trim($_POST["service"]);
			$from = "noreply@lombardd.ru";
			$to = "secret@lombardd.ru,a.donskaya@lombardd.ru,ed@msk.trinet.ru";
			$subject = $_SERVER["HTTP_HOST"] . " :: Сообщение из формы \"Оценка лояльности\"";
			$body = "
					Информационное сообщение сайта " . $_SERVER["HTTP_HOST"] . "
					------------------------------------------------------------

					Вам было отправлено сообщение через форму \"Оценка лояльности\"

					Отделение : " . $otdel . "
					Телефон : " . $phone . "
					Оценка : " . $rating . "
					Услуга : " . $service . "
					Ваши варианты : " . $variant . "
					Комментарии о бонусной программе : " . $comment . "

					------------------------------------------------------------
					Сообщение сгенерировано автоматически.
						";

				$arProp = array(
					"PHONE" => $phone,
					"OTDEL" => $otdel,
					"RATING" => $rating,
					"VARIANT" => $variant,
					"REASON" => $comment,
					"SERVICE" => $service
				);

				CHandler::addIblock(39, "", $arProp, "");
			break;
		default:
			break;
	}
if(!$sendCallback4&&!$sendCallback5){
	$messageText = "\xF0\x9F\x92\xA3 <strong>Получить 300 000 рублей</strong>%0A<i>Номер телефона/имя:</i> {$phone}";
	sendMessage($messageText);
}
	if (sendEmail($to, 'lombardd.ru', $from, $name, $email, $subject, $body)){
		echo json_encode(array('status' => 'success'));
		return;
	}

	echo json_encode(array('status' => 'have_errors'));
	return;
	}

function sendMessage($message = '') {
	$token = "690619049:AAHhXJapbFsnRmyI__n1dN4S8AqcSunv7mE";
	$chat_id = "-342768766";
	// $chat_id = "690619049";
	$result = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=HTML&text={$message}", "r");
	return $result;
}

function sendEmail(
		$To, // email получателя
		$nameFrom, // Имя отправителя
		$From, // email отправителя
		$nameReply, // Имя для ответа
		$Reply, // email для ответа
		$subject, // тема письма
		$body // текст письма
) {
	$headers = "From: =?UTF-8?B?".base64_encode($nameFrom)."?= <".$From.">\r\n";
	$headers .= "Reply-To: =?UTF-8?B?".base64_encode($nameReply)."?= <".$Reply.">\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
	$headers .= "Mime-Version: 1.0\r\n";

	return mail($To, $subject, $body, $headers);
}

?>
