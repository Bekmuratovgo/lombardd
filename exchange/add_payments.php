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
	Bitrix\Main\Entity;

\Bitrix\Main\Loader::includeModule('sale');
\Bitrix\Main\Loader::includeModule('catalog');
\Bitrix\Main\Loader::includeModule('iblock');
$request = Context::getCurrent()->getRequest();
?>
<?AddMessage2Log($_REQUEST, "PAY_1");?>
<?$body = @file_get_contents("php://input");?>
<?AddMessage2Log($body, "PAY2_1");?>
<?echo "OK";?>