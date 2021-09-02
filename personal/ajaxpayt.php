<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?use Bitrix\Main,  
	Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
	Bitrix\Main\Loader,
    Bitrix\Main\Server,
	Bitrix\Main\Localization\Loc as Loc,    
	Bitrix\Main\Config\Option,    
	Bitrix\Sale\Delivery,    
	Bitrix\Sale\PaySystem,    
	Bitrix\Sale,    
	Bitrix\Sale\Order,    
	Bitrix\Sale\DiscountCouponsManager,    
	Bitrix\Main\Mail\Event,
	Bitrix\Highloadblock as HL,
	Bitrix\Main\Entity;


\Bitrix\Main\Loader::includeModule("highloadblock");
$request = Context::getCurrent()->getRequest();

function num2word($num, $words)
{
    $num = $num % 100;
    if ($num > 19) {
        $num = $num % 10;
    }
    switch ($num) {
        case 1: {
            return($words[0]);
        }
        case 2: case 3: case 4: {
        return($words[1]);
    }
        default: {
            return($words[2]);
        }
    }
}

function dateDoc($date)
{
	$s = strtotime($date) - strtotime(date("d.m.Y"));
	if($s > 0){
		$result["status"] = true;
	}else{
		$result["status"] = false;
	}
	if ($s < 0) $s = -$s; 
	if($s != 0){
		$result["data"] = $s / 86400;
	}else{
		$result["data"] = $s;
	}
		
	return $result;
}

$productName = array();
$productSumPay = array();
$docs = array();

$hlblDoc 	= 8;
$hlblProd 	= 9;
$hlblPay 	= 10;

$hlblockDoc = HL\HighloadBlockTable::getById($hlblDoc)->fetch(); 
$entityDoc 	= HL\HighloadBlockTable::compileEntity($hlblockDoc); 
$entity_data_classDoc = $entityDoc->getDataClass();

$hlblockProd 	= HL\HighloadBlockTable::getById($hlblProd)->fetch(); 
$entityProd		= HL\HighloadBlockTable::compileEntity($hlblockProd); 
$entity_data_classProd = $entityProd->getDataClass(); 

$hlblockPay 	= HL\HighloadBlockTable::getById($hlblPay)->fetch(); 
$entityPay		= HL\HighloadBlockTable::compileEntity($hlblockPay); 
$entity_data_classPay = $entityPay->getDataClass(); 

$rsDataDoc = $entity_data_classDoc::getList(array(
	"select"	=> array("*"),
	"order"		=> array("UF_DATE_START" => "DESC"),
	"filter"	=> array("ID"=>$request["id"])
));

$pay = array();

if($doc = $rsDataDoc->Fetch()){
	foreach($doc["UF_PRODUCT"] as $por_id)
	{

		$product = $entity_data_classProd::getList(array(
			"select"	=> array("*"),
			"order"		=> array("UF_NAME" => "ASC"),
			"filter"	=> array("ID"=>$por_id)
		));
		while($product_item = $product->Fetch())
		{
			$res = $product_item;
		}
		$products[] = $res;
	}
	
	
	$minPay = 0;
	$maxPay = 0;
	$doc["STAVKA_DOC"] = 0;
	$doc["SUM"] = 0;
	foreach($products as $product){
		$minPay += $product["UF_MIN_PAY"];
		$maxPay += $product["UF_MAX_PAY"];
		$doc["STAVKA_DOC"] += $product["UF_STAVKA_DOC"];
		$doc["SUM"] += $product["UF_SUM"];
	}
	if($minPay > $maxPay){
		$maxPay = $minPay;
	}
	
	if($doc["SUM"] == 0){
		$pay["error"][] = "Не верная сумма займа";
	}
	if($doc["STAVKA_DOC"] == 0){
		$pay["error"][] = "Не верная ставка";
	}
	if($minPay > $request["sum"]){
		$pay["error"][] = "Сумма меньше минимальной! ";
	}
	if($maxPay < $request["sum"]){
		$pay["error"][] = "Сумма больше максимальной! ";
	}
	if($request["bonus"] > ($doc["UF_BONUS_ALL"] - $doc["UF_BONUS_DISABLED"])){
		$pay["error"][] = "Использованно больше бонусов, чем доступно! ";
	}
	if(($request["sum"]/4) < $request["bonus"]){
		$pay["error"][] = "Бонусов больше 25%! ";
	}
	if(($request["bonus"] + $request["pay"]) < $request["sum"]){
		$pay["error"][] = "Ошибка оплаты! ";
	}
	if($pay["error"]){
		$pay["text"] = "Ошибки оплаты: ";
		foreach($pay["error"] as $val){
			$pay["text"] .= $val;
		}
		$pay["text"] .= " Попробуйте оплатить позже или свяжитесь с менеджером";
	}else{
		
		$mas = array();
		$mas["0"]["key"]="edb88276-a";
		$mas["0"]["ИдентификаторДоговора"] = $doc["UF_CODE"];
		$mas["0"]["ДатаПлатежа"] = date('d.m.Y H:i:s');
		$mas["0"]["СписаноБонусов"] = $request["bonus"];
		
		
		
		
		
		if($doc["UF_DOLG_NOT_DOC_DAY"] > 0){
			if($request["sum"] == $minPay){
				$mas["0"]["ОплаченоДней"] = $doc["UF_DOLG_NOT_DOC_DAY"] + 1 + 1 ;
				$i = 0;
				foreach($products as $product){
					$mas["0"]["Предметы"][$i]["ИдентификаторПредмета"] = $product["UF_CODE"];
					$mas["0"]["Предметы"][$i]["ОплатаПоДоговору"] = $product["UF_STAVKA_DOC"] + $product["UF_STAVKA_NOT_DOC"];
					$mas["0"]["Предметы"][$i]["ОплатаВнеДоговора"] = $product["UF_DOLG_NOT_DOC"];
					$i++;
				}
			}else{
				$mas["0"]["ОплаченоДней"] = $doc["UF_DOLG_DAY"];
				$i = 0;
				foreach($products as $product){
					$mas["0"]["Предметы"][$i]["ИдентификаторПредмета"] = $product["UF_CODE"];
					$mas["0"]["Предметы"][$i]["ОплатаПоДоговору"] = $product["UF_DOLG_DOC"];
					$mas["0"]["Предметы"][$i]["ОплатаВнеДоговора"] = $product["UF_DOLG_NOT_DOC"];
					$i++;
				}
			}
		}else{
			$mas["0"]["ОплаченоДней"] = round( $request["sum"] / $doc["STAVKA_DOC"]);
			$i = 0;
			foreach($products as $product){
				$mas["0"]["Предметы"][$i]["ИдентификаторПредмета"] = $product["UF_CODE"];
				//$mas["0"]["Предметы"][$i]["ОплатаПоДоговору"] = $product["UF_SUM"] / $doc["SUM"] * $request["pay"];
				$mas["0"]["Предметы"][$i]["ОплатаПоДоговору"] = $product["UF_SUM"] / $doc["SUM"] * $request["sum"];
				$mas["0"]["Предметы"][$i]["ОплатаВнеДоговора"] = 0;
				$i++;
			}
		}
	// 	echo "<pre>";
	// 	var_dump($mas);
	// echo "</pre>";
	//die;
		global $USER;
		$rsUser = CUser::GetByID($USER->GetId()); 
		$arUser = $rsUser->Fetch(); 
		$OrderId = $doc["UF_NAME"]."_".date('Y-m-d H:i:s');
		
		$dataT = array();
		$dataT["TerminalKey"] = "1572522058015";
		$dataT["Amount"] = $request["pay"]*100;
		$dataT["OrderId"] = $OrderId;
		$dataT["Description"] = "Оплата договора займа ".$doc["UF_NAME"];
		
		$dataT["NotificationURL"] = "https://" . $_SERVER['HTTP_HOST'] . '/exchange/pay-t.php';
		$dataT["SuccessURL"] = "https://" . $_SERVER['HTTP_HOST'] . '/personal/?status=ok';
		$dataT["PayType"] = "O";
		$dataT["CustomerKey"] = $USER->GetID();
		
		$dataTP = $dataT;
		$dataTP["password"] = "djjdbn8stdu3cj6c";
		ksort($dataTP);
		$key = "";
		foreach($dataTP as $value){
			$key = $key.$value;
		}
		$token = hash('sha256', $key);
		
		$dataT["Token"] = $token;
		
		
		$dataT["DATA"] = array();
		if($arUser["PERSONAL_PHONE"])
		{
			$dataT["DATA"]["Phone"] = $arUser["PERSONAL_PHONE"];
		}
		if($USER->GetEmail())
		{
			$dataT["DATA"]["Email"] = $USER->GetEmail();
		}
		$dataT["DATA"]["Name"] = $USER->GetFullName();
		$dataT["DATA"]["order_number"] = $doc["UF_NAME"];
		
		$dataT["Receipt"] = array();
		if($arUser["PERSONAL_PHONE"])
		{
			$dataT["Receipt"]["Phone"] = $arUser["PERSONAL_PHONE"];
		}
		if($USER->GetEmail())
		{
			$dataT["Receipt"]["Email"] = $USER->GetEmail();
		}
		$dataT["Receipt"]["EmailCompany"] = "market@lombardd.ru";
		$dataT["Receipt"]["Taxation"] = "osn";
		$dataT["Receipt"]["Items"] = array();
		
		$serviceItem = array();
		$serviceItem["Name"] = "Оплата процентов по договору ". $doc["UF_NAME"];
		$serviceItem["Price"] = $request["pay"]*100;
		$serviceItem["Quantity"] = 1;
		$serviceItem["Amount"] = $request["pay"]*100;
		$serviceItem["PaymentMethod"] = "credit_payment";
		$serviceItem["PaymentObject"] = "payment";
		$serviceItem["Tax"] = "none";
		
		$dataT["Receipt"]["Items"][] = $serviceItem;

		$requestData = json_encode($dataT);

		$url = 'https://securepay.tinkoff.ru/v2/Init';
	//$url = 'https://rest-api-test.tinkoff.ru/v2/Init';
		//		$url = 'https://lombard-test.ru/exchange/pay-t_1.php';


		

		
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_PORT => "443",
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 300,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_HTTPAUTH => CURLAUTH_ANY,
			CURLOPT_POSTFIELDS => $requestData,
			CURLOPT_HTTPHEADER => array(
				"Cache-Control: no-cache",
				"Content-Type: application/json",
			),
		));

		$responseData = curl_exec($curl);
		$err = curl_error($curl);
		$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		curl_close($curl);
		if($http_code == 200){
			$response = json_decode($responseData, true);

			if($response["Success"]){
				
				$pay = array(
					"UF_USER_ID"			=>	$USER->GetID(),
					"UF_CONTRACT_CODE"		=>	$request["id"],
					"UF_DATE_INSERT"		=>	date('d.m.Y H:i:s'),
					"UF_BONUS"				=>	$request["bonus"],
					"UF_SUM_PAY"			=>	$request["pay"],
					"UF_DATA"				=>	json_encode($mas),
					"UF_ORDER_ID"			=>	$OrderId,
					"UF_1C_EXPORTED"		=>	"N",
					"UF_PAYMENT_STATUS"		=>	$response["Status"],
					"UF_PAYMENT_ID"			=>	$response["PaymentId"],
					"UF_PAYMENT_LINCK"		=>	$response["PaymentURL"],
				);
				$resultPay = $entity_data_classPay::add($pay);
				if ($resultPay->isSuccess()) {
					$pay["text"] = "Сейчас Вас перенаправит на платежную систему, если этого не произашло в течение 5с перейдите по ссылке <a style='font-weight: bold;' target='_blank' id='link_to_pay_auto' class='paylinck' href='".$response["PaymentURL"]."'>Оплатить</a>";
				}else{
					$pay["text"] = "Произошла ошибка, попробуйте повторить платеж через 5 минут!";
				}
			}else{
				$pay["text"] = "Произошла ошибка платежной системы, попробуйте повторить платеж через 5 минут!";
			}
		}else{
			$pay["text"] = "Произошла ошибка платежной системы, попробуйте повторить платеж через 5 минут!";
		}		
	}


		
}

echo $pay["text"];
	?>
	
<script>
	
	setTimeout(function(){document.getElementById('link_to_pay_auto').click();}, 600);
	
</script>