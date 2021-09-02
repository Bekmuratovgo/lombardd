<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");?>

<div class="page-not">
	<div class="page-not__wrapper">

		<div class="page-not__image">
			<img src="/tpl/images/404.png" alt="">
		</div>
	</div>

	<div class="page-not__text">Похоже, такой страницы нет. Но можно посмотреть <a href="http://my-uvelir.ru/">новинки ювелирного каталога</a> или <a href="<?=HTTP.SITE_LOMBARD?>/data/lombard/">получить заём</a></div>
</div>
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>