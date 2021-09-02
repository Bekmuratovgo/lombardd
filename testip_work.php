<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");





$filter = Array
(
    "ACTIVE"              => "Y",
	// "!=GROUPS_ID"           => '3',
);

$order = array('sort' => 'asc');
$tmp = 'id'; 
$rsUsers = CUser::GetList($order, $tmp, $filter);

$i=0;
while($us_arr = $rsUsers->Fetch()) 
  {

$arGroups = CUser::GetUserGroup($us_arr['ID']);
$arGroups[] = 6;
CUser::SetUserGroup($us_arr['ID'], $arGroups);


echo $i.' - '.$us_arr['ID'].'<br>';
$i=$i+1;

  }










  $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,'http://taskasdfasdf.abc.b2442.dhpage.net/ip.php');
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
  $buffer = curl_exec($curl_handle);
  curl_close($curl_handle);
  if (empty($buffer)){
      print "Nothing returned from url.<p>";
  }
  else{
      print $buffer;
  }




    $url ="http://w101cpm.nixwan.ru";
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_PORT => "2080",
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 5,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPAUTH => CURLAUTH_ANY,
        CURLOPT_POSTFIELDS => $arDataPay["UF_DATA"],
        CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "Content-Type: application/json",
        ),
    ));

    $responseData = curl_exec($curl);
    $err = curl_error($curl);
    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
echo $responseData.$err.$http_code;
    curl_close($curl);










require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?> 