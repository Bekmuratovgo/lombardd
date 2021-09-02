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
$hlblPay 	= 10;

$hlblockPay 	= HL\HighloadBlockTable::getById($hlblPay)->fetch(); 
$entityPay		= HL\HighloadBlockTable::compileEntity($hlblockPay); 
$entity_data_classPay = $entityPay->getDataClass();

$dataPay = array(
	"UF_DATE_UPDATE"	=>	date('d.m.Y H:i:s'),
	"UF_ORDER_ID"		=>	$dataMas["OrderId"],
	"UF_PAYMENT_STATUS"	=>	$dataMas["Status"]
);

$rsDataPay = $entity_data_classPay::getList(array(
	"select"	=> array("*"),
	"order"		=> array("ID" => "ASC"),
	//"filter"	=> array("UF_1C_EXPORTED"=>"N", "UF_PAYMENT_STATUS"=>"CONFIRMED"),
	"filter"	=> array("ID"=>"51")
));




while($arDataPay = $rsDataPay->Fetch()){
		$arResult = json_decode($arDataPay['UF_DATA']); 
		$username = "testHTTP";
		$password = "1qaz(OL>";
		

		//$url ="http://w101cpm.nixwan.ru:2080/usl_crm1/hs/API/post/payment?operation='test'&key=999";
		//$url ="https://1cwpm.nixwan.ru/USL_CRM/";
		$url ="https://1cwpm.nixwan.ru/USL/hs/API/post/payment";
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);  
		curl_setopt($curl, CURLOPT_USERPWD, "MSU".":"."4554");
		curl_setopt($curl, CURLOPT_USERPWD, "testHTTP".":"."1qaz(OL>");
		curl_setopt($curl, CURLOPT_URL, $url);  
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($curl, CURLOPT_POSTFIELDS, $arDataPay['UF_DATA']);  
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Cache-Control: no-cache", "Content-Type: application/json"));  


		$responseData = curl_exec($curl);
		$err = curl_error($curl);
		$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		curl_close($curl);
		if($http_code == 200){
			
			AddMessage2Log($http_code, "http_code");
			AddMessage2Log($err, "err");
			AddMessage2Log($responseData, "responseData");
			
			$response = json_decode($responseData, true);
			$dataPay = array(
				"UF_DATE_UPDATE"	=>	date('d.m.Y H:i:s'),
				"UF_1C_STATUS"		=>	$responseData,
				"UF_1C_EXPORTED"	=>	"Y"
			);
			$resultPay = $entity_data_classPay::update($arDataPay["ID"], $dataPay);
		}else{
			AddMessage2Log($http_code, "http_code");
			AddMessage2Log($err, "err");
			AddMessage2Log($responseData, "responseData");
		}

		echo "<pre>";
		var_dump($http_code);
		echo "</pre>";
}



		




?>
