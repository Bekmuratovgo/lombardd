<?
$file2stek = 'stek_log.txt';
$lines = file($file2stek);



foreach ($lines as $value) {
	  
$url = 'https://lombardd.ru/exchange/manual_pay.php?id_pay='.$value;
$get = file_get_contents($url);
echo $get;
  }
  
file_put_contents($file2stek, '');  

echo 'Y';
?>