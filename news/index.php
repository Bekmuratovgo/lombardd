<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
$APPLICATION->SetPageProperty("description", '★ Новости ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"promotions_news2", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "DATE_ACTIVE_TO",
			4 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_FIELD_CODE" => array(
			0 => "DATE_ACTIVE_TO",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "23",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DATE_CREATE",
			3 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "15",//"20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/news/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "flat",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>

<?if($_SERVER['REQUEST_URI'] == "/news/daem-eshche-bolshe/"){?>
<!-- start price -->
<div class="price price_max price_main price_promo">
	<div class="container">
		<div class="price__bigTitle">Прайс-лист <span class="break"></span>на приём золота</div>
		
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"reception_metals_new",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("",""),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "15",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "20",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "77",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array("PRICE","PRICE_CARD"),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "SORT",
				"SORT_BY2" => "ID",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "DESC",
				"STRICT_SECTION_CHECK" => "N"
			)
		);?>
		
	</div>
</div>
<!-- end price -->
<?}?>

<?if($_SERVER['REQUEST_URI'] == "/news/maksimalno-vysokaya-otsenka-v-pervom-yuvelirnom-lombarde/"){?>
<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">
<div class="container">
	<h2 class="caption">Онлайн оценка</h2>
	<div class="space_30"></div>
	<form class="price__form js-ocenka" enctype="multipart/form-data" method="post">
		<?=bitrix_sessid_post();?>
		<div class="form-inputs__block form-small-inputs__block">
			<input name="fio" type="text" class="form-inputs__field js-required" data-error="Введите Имя" placeholder="Ваше имя">
		</div>
		<div class="form-inputs__block form-small-inputs__block">
		<?/*<input name="metal" type="text" class="form-inputs__field js-required" data-error="Металл" placeholder="Металл">*/?>
			<select name="metal" class="form-inputs__field js-required" data-error="Металл">
				<option value="Золото">Золото</option>
				<option value="Серебро">Серебро</option>
				<option value="Платина">Платина</option>
			</select>
		</div>
		<div class="form-inputs__block form-small-inputs__block">
			<input name="proba" type="text" class="form-inputs__field js-required" data-error="Проба" placeholder="Проба">
		</div>
		<div class="form-inputs__block form-small-inputs__block">
			<input name="ves" type="text" class="form-inputs__field js-required" data-error="Вес, гр." placeholder="Вес, гр.">
		</div>
		<div class="form-inputs__block form-small-inputs__block">
			<input name="phone" type="tel" class="form-inputs__field js-required js-phone" data-error="Введите телефон" placeholder="Ваш телефон">
		</div>
		<div class="form-inputs__block">
			<span>Прикрепить фото: </span><input type="file" name="uploadfile"  id="uploadfile">
		</div>
		<div class="g-recaptcha" data-sitekey="6LcEW8cUAAAAAA7GLbwMqyLByPzoiWBH-Ry0UaQl"></div>
		<br/><p>Или воспользуйтесь удобным для вас мессенджером:</p>
		<div class="soc-icons-header">
			<a class="vb" href="viber://add?number=79096693140" onclick="yaCounter33166953.reachGoal('viber'); return true;"></a>
			<a class="wa" href="https://api.whatsapp.com/send?phone=79096693140" onclick="yaCounter33166953.reachGoal('whatsapp'); return true;"></a>
			<a class="tg" href="https://tele.click/Lombardd_1" onclick="yaCounter33166953.reachGoal('telegram'); return true;"></a>
		</div>				
		<div class="text-danger" id="recaptchaError"></div><br/>
		<button type="submit" class="btn price__submit js-submit" onClick="ym(33166953,'reachGoal','online_ocenka');"> <span class="btn__text btn__text_tablet">Отправить заявку</span> <span class="btn__text btn__text_desktop">Отправить заявку</span> </button>
		<div class="admire">
			<br/>Нажимая на кнопку «<span class="btn__text btn__text_tablet">Отправить заявку</span>
			<span class="btn__text btn__text_desktop">Отправить заявку</span>»,
			я подтверждаю согласие c <a href="/data/privacy-policy/" target="_blank">политикой конфиденциальности</a>
			и даю согласие на обработку персональных данных
		</div>
	</form>
</div>
<div class="thankYou">
<div class="form-popup">
	<div class="form-popup__inner">
		<div class="form-popup__header">
			<span class="day">
				<span class="form-popup__default">Спасибо за заявку!</span>
				<br/><br/><span>Наши менеджеры перезвонят в ближайшее время</span>
			</span>
			<span class="night">
				<span class="form-popup__default">Благодарим Вас за обращение!</span>
				<br/><br/><span>Мы сразу же свяжемся с Вами в наше рабочее время с 9:00 до 21:00!</span>
			</span>
			<br/><br/><br/><button type="text" class="btn close" onClick="globalPopup.close();">Закрыть</button>
		</div>
	</div>
	<!-- /.form-popup__inner -->
</div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<br/>
<?}?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>