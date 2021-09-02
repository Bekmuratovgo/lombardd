<?
//начало работы скрипта
$firstTime = microtime(true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main,  
	Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
	Bitrix\Main\Loader,
    Bitrix\Main\Server,
	Bitrix\Main\Localization\Loc as Loc,    
	Bitrix\Main\Config\Option, 
	Bitrix\Main\Mail\Event,
	Bitrix\Highloadblock as HL,
	Bitrix\Main\Type\DateTime,
	Bitrix\Main\Type as FieldType,
	Bitrix\Main\Entity;

\Bitrix\Main\Loader::includeModule('iblock');
\Bitrix\Main\Loader::includeModule("highloadblock");
$request	= Context::getCurrent()->getRequest();

//переменные настроек
$key 		= "edb88276-a";
$hlblLog 	= 7;
$hlblDoc 	= 8;
$hlblProd 	= 9;

//инициализация переменных
$error 		= array();
$error["status"] = 1;
$uAdd 		= 0;
$uUpdate	= 0;
$dAdd 		= 0;
$dUpdate 	= 0;
$pAdd 		= 0;
$pUpdate 	= 0;

//Получение json
$data		= @file_get_contents("php://input");

//log start
$hlblockLog = HL\HighloadBlockTable::getById($hlblLog)->fetch(); 
$entityLog 	= HL\HighloadBlockTable::compileEntity($hlblockLog); 
$entity_data_classLog = $entityLog->getDataClass(); 
$dataLog = array(
   "UF_TIME_START"	=>	date('d.m.Y H:i:s', $firstTime),
   "UF_DATA"		=>	$data,
);
$resultLog = $entity_data_classLog::add($dataLog);

if ($resultLog->isSuccess()) {         
	$idLog = $resultLog->getId();
	
	//декодирование json
	$dataMas = json_decode($data, true);
	
	$hlblockDoc = HL\HighloadBlockTable::getById($hlblDoc)->fetch(); 
	$entityDoc 	= HL\HighloadBlockTable::compileEntity($hlblockDoc); 
	$entity_data_classDoc = $entityDoc->getDataClass(); 
		
	$hlblockProd 	= HL\HighloadBlockTable::getById($hlblProd)->fetch(); 
	$entityProd		= HL\HighloadBlockTable::compileEntity($hlblockProd); 
	$entity_data_classProd = $entityProd->getDataClass(); 
	
	
	if(count($dataMas) > 0){
		foreach($dataMas as $docElKey => $doc){

			// Новый вид ключа для экспорта ошибки
				$docElKeyNew='_'.$docElKey;

			//проверка ключа интеграции
			if($doc["key"] == $key){
				//добовление/обновление пользователей
				$idUser = 0;
				$user 	= new CUser;
				$pass 	= randString(7, array(
					"abcdefghijklnmopqrstuvwxyz",
					"ABCDEFGHIJKLNMOPQRSTUVWX­YZ",
					"0123456789",
					"!@#\$%^&*()",
				));
				$dataUser = array(
					"DATE_UPDATE"		=>	date('d.m.Y H:i:s', $firstTime),
					"XML_ID"			=>	$doc["ИдентификаторКлиента"],
					"NAME"				=>	$doc["ФИО"],
					"PERSONAL_PHONE"	=>	$doc["Телефон"],
					"LOGIN"				=>	$doc["Телефон"],
					"ACTIVE" 			=> 'Y',
					"GROUP_ID"          => array(6, 3, 4),
					"PASSWORD" 			=> $pass,
					"CONFIRM_PASSWORD"	=> $pass
				);
				$elementsUser = CUser::GetList(($by="ID"), ($order="ASC"), array("XML_ID" => $dataUser["XML_ID"]));
				if($rsUser = $elementsUser->Fetch()){
					$idUser = $rsUser["ID"];
					$user->Update($idUser, $dataUser);
					if($user->LAST_ERROR){
						$error["error"][$docElKeyNew]["U"] = $user->LAST_ERROR;
						$error["status"] = 0;
					}
					$uUpdate++;
				}else{
					$elementsUser = CUser::GetList(($by="ID"), ($order="ASC"), array("LOGIN" => $dataUser["LOGIN"]));
					if($rsUser = $elementsUser->Fetch()){
						$idUser = $rsUser["ID"];
						$user->Update($idUser, $dataUser);
						if($user->LAST_ERROR){
							$error["error"][$docElKeyNew]["U"] = $user->LAST_ERROR;
							$error["status"] = 0;
						}
						$uUpdate++;
					}else{
						$idUser = $user->Add($dataUser);
						if($user->LAST_ERROR){
							$error["error"][$docElKeyNew]["U"] =  $user->LAST_ERROR;
							$error["status"] = 0;
						}
						$uAdd++;
					}
				}
				
				if($idUser > 0){
					//добовление/обновление предметов
					$idProd = array();
					$prodStatsus = true;
					foreach($doc["Предметы"] as $prodElKey => $prod){
						$dataProd = array(
							"UF_DATE_UPDATE"	=>	date('d.m.Y H:i:s', $firstTime),
							"UF_CODE"			=>	$prod["ИдентификаторПредмета"],
							"UF_NAME"			=>	$prod["КраткоеОписаниеИзделия"],
							"UF_SUM"			=>	$prod["СуммаЗайма"],
							"UF_O_DOLG"			=>	$prod["ДолгОбщийРуб"],
							"UF_DOLG_DOC"		=>	$prod["ДолгПоДоговоруРуб"],
							"UF_DOLG_NOT_DOC" 	=>	$prod["ДолгВнеДоговораРуб"],
							"UF_STAVKA_DOC" 	=>	$prod["СтавкаРубПоДоговору"],
							"UF_STAVKA_NOT_DOC"	=>	$prod["СтавкаРубВнеДоговора"],
							"UF_MIN_PAY" 		=>	$prod["МинимальнаяОплата"],
							"UF_MAX_PAY" 		=>	$prod["МаксимальнаяОплата"],
							"UF_SUM_PAY" 		=>	$prod["СуммаОплаты"]
						);
						$rsDataProd = $entity_data_classProd::getList(array(
							"select"	=> array("ID"),
							"order"		=> array("ID" => "ASC"),
							"filter"	=> array("UF_CODE"=>$dataProd["UF_CODE"])
						));

						if($arDataProd = $rsDataProd->Fetch()){
							$idProd[] = $arDataProd["ID"];
							$resultProd = $entity_data_classProd::update($arDataProd["ID"], $dataProd);
							if ($resultProd->isSuccess()) {
								$pUpdate++;
							}else{
								$error["error"][$docElKeyNew]["P"][$prodElKey] = "Ошибка обновления предмета " .$prod["ИдентификаторПредмета"];
								$error["status"] = 0;
								$prodStatsus = false;
							}
						}else{
							$resultProd = $entity_data_classProd::add($dataProd);
							if ($resultProd->isSuccess()) {
								$idProd[] = $resultProd->getId();
								$pAdd++;
							}else{

								$error["error"][$docElKeyNew]["P"][$prodElKey] = "Ошибка добaвления предмета " .$prod["ИдентификаторПредмета"];
								$error["error"][$docElKeyNew]["P"][$prodElKey] = 0;
								$prodStatsus = false;
							}
						}
					}
					if($prodStatsus){
						//добовление/обновление договоров
						$dataDoc = array(
							"UF_DATE_UPDATE"		=>	date('d.m.Y H:i:s', $firstTime),
							"UF_PRODUCT"			=>	$idProd,
							"UF_USER_ID"			=>	$idUser,
							"UF_CODE"				=>	$doc["ИдентификаторДоговора"],
							"UF_NAME"				=>	$doc["ДоговорЗайма"],
							"UF_DATE_START"			=>	date('d.m.Y H:i:s', strtotime($doc["ДатаВыдачи"])),
							"UF_DATE_END"			=>	date('d.m.Y H:i:s', strtotime($doc["ДатаВозврата"])),
							"UF_DOLG_DAY"			=>	$doc["ДолгОбщийДни"],
							"UF_DOLG_DOC_DAY" 		=>	$doc["ДолгПоДоговоруДни"],
							"UF_DOLG_NOT_DOC_DAY"	=>	$doc["ДолгВнеДоговораДни"],
							"UF_STAVKA_DOC"			=>	$doc["ПроцентПоДоговору"],
							"UF_STAVKA_NOT_DOC"		=>	$doc["ПроцентВнеДоговора"],
							"UF_STATUS" 			=>	$doc["СтатусДоговора"],
							"UF_STATUS_PL" 			=>	$doc["СтатусПЛ"],
							"UF_BONUS_ALL" 			=>	$doc["НачисленоБонусовВсего"],
							"UF_BONUS_DISABLED"		=>	$doc["ЗамороженоБонусов"],
							"UF_DATE_PROD"			=>	date('d.m.Y', strtotime($doc["ДатаПродления"]))
						);

						$rsDataDoc = $entity_data_classDoc::getList(array(
							"select"	=> array("ID"),
							"order"		=> array("ID" => "ASC"),
							"filter"	=> array("UF_CODE"=>$dataDoc["UF_CODE"])
						));
		
						if($arDataDoc = $rsDataDoc->Fetch()){
							$resultDoc = $entity_data_classDoc::update($arDataDoc["ID"], $dataDoc);
							if ($resultDoc->isSuccess()) {
								$dUpdate++;
							}else{
								$error["error"][$docElKeyNew][] = "Ошибка обновления договора " .$doc["ИдентификаторПредмета"];
								$error["status"] = 0;
							}
						}else{
							$resultDoc = $entity_data_classDoc::add($dataDoc);
							if ($resultDoc->isSuccess()) {
								$dAdd++;
							}else{
								$error["error"][$docElKeyNew][] = "Ошибка добавления договора " .$doc["ИдентификаторПредмета"];
								$error["status"] = 0;
							}
						}

					}else{
						$error["error"][$docElKeyNew]['contract'] = $doc["ИдентификаторДоговора"];
						$error["error"][$docElKeyNew]['text'] = "Договор " .$doc["ИдентификаторДоговора"]. " не создан/обновлен из-за ошибок в предметах";
						$error["status"] = 0;
					}
				}else{
					$error["error"][$docElKeyNew]['contract'] = $doc["ИдентификаторДоговора"];
					$error["error"][$docElKeyNew]['text'] = "Пользователь не определен для договора " .$doc["ИдентификаторДоговора"]. ", договор не создан/обновлен";
					$error["status"] = 0;
				}
			}else{
				$error["error"][$docElKeyNew]['contract'] = $doc["ИдентификаторДоговора"];
				$error["error"][$docElKeyNew]['text'] = "Источник не определен для договора " .$doc["ИдентификаторДоговора"]. ", договор не создан/обновлен";
				$error["status"] = 0;
			}
		}
	}else{
		$error["error"]["N"][] = "Не верная структура данных";
		$error["status"] = 0;
	}
	
	
	//log update
	$lastTime = microtime(true);
	$time = $lastTime - $firstTime;
	$dataLog = array(
		"UF_TIME_END"	=>	date('d.m.Y H:i:s', $lastTime),
		"UF_TIME"		=>	$time,
		"UF_STATUS"		=>	$error["status"],
		"UF_EROR"		=>	json_encode($error),
		"UF_USER"		=>	$uAdd."/".$uUpdate,
		"UF_DOC"		=>	$dAdd."/".$dUpdate,
		"UF_PRODUCT" 	=>	$pAdd."/".$pUpdate
	);
	$resultLog = $entity_data_classLog::update($idLog, $dataLog);
	if($error["status"] == 1){
		echo "OK";
	}else{
		echo json_encode($error);
	}
}else{ 
	$error["error"]["N"][] = "Не верная структура данных";
	$error["status"] = 0;
	echo json_encode($error);
}
?>