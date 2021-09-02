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
$data		= @file_get_contents("php://input");
$dataMas = json_decode($data, true);





AddMessage2Log($dataMas, "dataMas");
$hlblPay 	= 10;

$hlblockPay 	= HL\HighloadBlockTable::getById($hlblPay)->fetch(); 
$entityPay		= HL\HighloadBlockTable::compileEntity($hlblockPay); 
$entity_data_classPay = $entityPay->getDataClass(); 








	$data1=$dataMas;
	$data2=$_REQUEST;
	$data3=$_GET;
	$data4=$_POST;


	ob_start();
	print_r($data1);
	$data1_array = ob_get_contents();
	ob_end_clean();
	
	ob_start();
	print_r($data2);
	$data2_array = ob_get_contents();
	ob_end_clean();
	
	ob_start();
	print_r($data3);
	$data3_array = ob_get_contents();
	ob_end_clean();
	
	ob_start();
	print_r($data4);
	$data4_array = ob_get_contents();
	ob_end_clean();
	
	
	$all_data = $data1_array.' || '.$data2_array.' || '.$data3_array.' || '.$data4_array.' || ';


/*
	$file = 'DataPay_log1.txt';


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
	$get1_array = ob_get_contents();
	ob_end_clean();

	$textualRepresentation = PHP_EOL.date('H:i:s').PHP_EOL.$server_array.PHP_EOL.PHP_EOL.PHP_EOL.'++Data2++'.PHP_EOL.$get_array.PHP_EOL.PHP_EOL.$server_array.PHP_EOL.PHP_EOL.$get1_array.PHP_EOL.'=========================================='.PHP_EOL;
	file_put_contents($file, $textualRepresentation, FILE_APPEND | LOCK_EX);


*/


$time = date("H");
$file2stek = 'stek_log.txt';










$dataPay = array(
	"UF_DATE_UPDATE"	=>	date('d.m.Y H:i:s'),
	"UF_ORDER_ID"		=>	$dataMas["OrderId"],
	"UF_PAYMENT_STATUS"	=>	$dataMas["Status"]
);

$rsDataPay = $entity_data_classPay::getList(array(
	"select"	=> array("ID", 'UF_DATA'),
	"order"		=> array("ID" => "ASC"),
	//добавил условие, чтобы выбирать только не оплаченные
	"filter"	=> array("UF_ORDER_ID"=>$dataPay["UF_ORDER_ID"],"UF_1C_EXPORTED"=> "N", "UF_PAYMENT_STATUS"=>"NEW")
	//	"filter"	=> array("UF_ORDER_ID"=>$dataPay["UF_ORDER_ID"])
));






	if($arDataPay = $rsDataPay->Fetch()){


		/*
		// echo "<pre>";
		// 		var_dump($arDataPay);
		// 	echo "</pre>";
		// 	die;


	$file = 'DataPay_log.txt';
	$data1=$arDataPay;
	$data2=$dataPay;
	$data3=$_SERVER;

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
	$get1_array = ob_get_contents();
	ob_end_clean();

	$textualRepresentation = PHP_EOL.date('H:i:s').PHP_EOL.$server_array.PHP_EOL.PHP_EOL.PHP_EOL.'++Data2++'.PHP_EOL.$get_array.PHP_EOL.PHP_EOL.$server_array.PHP_EOL.PHP_EOL.$get1_array.PHP_EOL.'=========================================='.PHP_EOL;
	file_put_contents($file, $textualRepresentation, FILE_APPEND | LOCK_EX);
	*/


//	if ($time==15)
		if ($time < 6 and $time>3 )
		{
			if ($data1['Status'] == 'AUTHORIZED'){	 
					$data2stek =$arDataPay["ID"].PHP_EOL;
					file_put_contents($file2stek, $data2stek, FILE_APPEND | LOCK_EX);
			}	
		}
		else
		{	

	
			if ($dataPay["UF_PAYMENT_STATUS"]!='REJECTED')
			{	


							$resultPay = $entity_data_classPay::update($arDataPay["ID"], $dataPay);
							//$url ="http://w101cpm.nixwan.ru:2080/usl_crm1/hs/API/post/payment";
							$url ="https://1cwpm.nixwan.ru/USL/hs/API/post/payment";
							$curl = curl_init();
							curl_setopt($curl, CURLOPT_URL, $url);  
							//curl_setopt($curl, CURLOPT_USERPWD, "testHTTP".":"."1qaz(OL>");
							curl_setopt($curl, CURLOPT_USERPWD, "MSU".":"."4554");
							curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
							curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
							curl_setopt($curl, CURLOPT_POSTFIELDS, $arDataPay['UF_DATA']);  
							curl_setopt($curl, CURLOPT_HTTPHEADER, array("Cache-Control: no-cache", "Content-Type: application/json"));  
							$responseData = curl_exec($curl);
							$err = curl_error($curl);
							$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
							curl_close($curl);

			}	
	
	
			if($http_code == 200){
				
				AddMessage2Log($http_code, "http_code");
				AddMessage2Log($err, "err");
				AddMessage2Log($responseData, "responseData");
				
				//$response = json_decode($responseData, true);
				$dataPay = array(
					"UF_DATE_UPDATE"	=>	date('d.m.Y H:i:s'),
					"UF_1C_STATUS"		=>	$responseData,
					"UF_1C_EXPORTED"	=>	"Y"
				);
				$resultPay = $entity_data_classPay::update($arDataPay["ID"], $dataPay);
				//die;
			}else{
		

			//отправка почты админу 1с		
			if ($data1['Status'] != 'REJECTED'){				
				$message = "Проблема в работе 1с. Время ".date("H:i:s").' Дата '.date("m.d.y").' Данные '.$all_data;
				$message = wordwrap($message, 70, "\r\n");
				mail('testerr@seo.taxi,testerr1@seo.taxi,ex@lombardd.ru', '1c - не работает', $message);
			}
							
							AddMessage2Log($http_code, "http_code");
							AddMessage2Log($err, "err");
							AddMessage2Log($responseData, "responseData");
						}
		}
	}








?>