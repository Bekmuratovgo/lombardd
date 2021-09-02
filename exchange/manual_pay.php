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

$hlblPay 	= 10;

$hlblockPay 	= HL\HighloadBlockTable::getById($hlblPay)->fetch(); 
$entityPay		= HL\HighloadBlockTable::compileEntity($hlblockPay); 
$entity_data_classPay = $entityPay->getDataClass(); 





/*
	$data1=$request;
	$data2=$data;
	$data3=$dataMas;



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


$dataMas["Status"]  		= 'AUTHORIZED';
$dataMas["OrderId"] = $_GET['id_pay'];

echo $dataMas["OrderId"].'++';


$dataPay = array(
//	"UF_DATE_UPDATE"	=>	date('d.m.Y H:i:s'),
	"UF_ORDER_ID"		=>	$dataMas["OrderId"],
//	"UF_PAYMENT_STATUS"	=>	$dataMas["Status"],
);



//getById($hlbl)->fetch(); 

/*
$rsDataPay = $entity_data_classPay::getList(
	array(
		"select"	=> array("ID", 'UF_DATA'),
		"order"		=> array("ID" => "ASC"),
		//		"filter"	=> array("UF_ORDER_ID"=>$dataPay["UF_ORDER_ID"],"UF_1C_EXPORTED"=> "N", "UF_PAYMENT_STATUS"=>"NEW")
		"filter"	=> array("UF_ORDER_ID"=>"2060",)
	)
);

*/


$rsDataPay = $entity_data_classPay::getById($_GET['id_pay']);

	if($arDataPay = $rsDataPay->Fetch()){
	
//	if($arDataPay = HL\HighloadBlockTable::getById($_GET['id_pay'])->fetch()){
 

echo '+++';
//echo $_GET['id_pay'];
//$arDataPay["ID"] = $_GET['id_pay'];
//echo $arDataPay["ID"];
////print_r($arDataPay);
////echo '+++';
////print_r($dataPay);
////echo '+++';
////echo $dataPay["UF_ORDER_ID"];


	
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
					"UF_1C_EXPORTED"	=>	"Y",
					"UF_PAYMENT_STATUS"	=>	"MANUAL",
					 
				);
				$resultPay = $entity_data_classPay::update($arDataPay["ID"], $dataPay);
				//die;
			}else{
				AddMessage2Log($http_code, "http_code");
				AddMessage2Log($err, "err");
				AddMessage2Log($responseData, "responseData");
			}

	}








?>