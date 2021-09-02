<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>



<?

        $resultPay = '';
$url ="http://taskasdfasdf.abc.b2442.dhpage.net/ip.php";
        //$url ="https://1cwpm.nixwan.ru/USL/hs/API/post/payment";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);  
		// curl_setopt($curl, CURLOPT_USERPWD, "testHTTP".":"."1qaz(OL>");
        //curl_setopt($curl, CURLOPT_USERPWD, "MSU".":"."4554");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $arDataPay['UF_DATA']);  
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Cache-Control: no-cache", "Content-Type: application/json"));  


        $responseData = curl_exec($curl);
        $err = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

echo 'Проверка сокета - code:'.$http_code.' Какой IP= '.$responseData.'<BR>';




?>

<?


        $resultPay = '';
$url ="http://w101cpm.nixwan.ru:2080/usl_crm1/hs/API/post/payment";
        //$url ="https://1cwpm.nixwan.ru/USL/hs/API/post/payment";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);  
        curl_setopt($curl, CURLOPT_USERPWD, "testHTTP".":"."1qaz(OL>");
        //curl_setopt($curl, CURLOPT_USERPWD, "MSU".":"."4554");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $arDataPay['UF_DATA']);  
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Cache-Control: no-cache", "Content-Type: application/json"));  


        $responseData = curl_exec($curl);
        $err = curl_error($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

echo 'code:'.$http_code.'err '.$err.'<BR>Data- '.$responseData;

        if($http_code == 200){
            
            AddMessage2Log($http_code, "http_code");
            AddMessage2Log($err, "err");
            AddMessage2Log($responseData, "responseData");
            
            //$response = json_decode($responseData, true);
            $dataPay = array(
                "UF_DATE_UPDATE"    =>    date('d.m.Y H:i:s'),
                "UF_1C_STATUS"        =>    $responseData,
                "UF_1C_EXPORTED"    =>    "Y"
            );
            $resultPay = $entity_data_classPay::update($arDataPay["ID"], $dataPay);
            //die;
        }else{
            AddMessage2Log($http_code, "http_code");
            AddMessage2Log($err, "err");
            AddMessage2Log($responseData, "responseData");
        }










?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>