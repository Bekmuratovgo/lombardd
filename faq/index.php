<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", '★ Вопросы и ответы ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Вопросы и ответы");
?>
<style type="text/css">
summary {
    cursor: pointer;
	font-weight: bold;
}
details {
    border: 1px solid #bfbfbf;
    padding: 10px 15px;
    margin-bottom: 10px;
}
.accordion ul ul {
    padding: 0px 50px 0px 80px;
    list-style: disc;
	margin-bottom: 1rem;
}
.accordion ul ul ul {
    padding: 0px 50px 0px 30px;
    list-style: disc;
}
</style>
<h1 class="promo-title">Вопросы и ответы</h1>
<link href="/skupka-tekhniki/css/skupka.css" type="text/css" data-template-style="true" rel="stylesheet"> 
<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

<script src="/tpl/js/build.js" type="text/javascript"></script>

<img src="/skupka-tekhniki/img/top_m.png" class="top_banner_mobile"/>
		<div class="top_banner_left">
			<p class="top_banner_title_big">Задать вопрос</p>
			<form class="price__form js-faq" enctype="multipart/form-data" method="post">
				 <?=bitrix_sessid_post();?>
				<div class="form-inputs__block form-small-inputs__block">
					<input name="fio" type="text" class="form-inputs__field js-required" data-error="Введите имя" placeholder="Ваше имя">
				</div>
				<div class="form-inputs__block form-small-inputs__block">
					<input name="phone" type="tel" class="form-inputs__field js-required js-phone" data-error="Введите телефон" placeholder="Ваш телефон">
				</div>
				<div class="form-inputs__block">
					<textarea name="text" id="" cols="30" rows="10" data-error="Введите вопрос" class="form-inputs__message js-required" placeholder="Ваш вопрос"></textarea>
				</div>
				<button type="submit" class="btn price__submit js-submit" style="margin-top: 0px;"> <span class="btn__text btn__text_tablet">Задать вопрос</span> <span class="btn__text btn__text_desktop">Задать вопрос</span> </button>
				<div class="admire">
					<br/>Нажимая кнопку «<span class="btn__text btn__text_tablet">Задать вопрос</span><span class="btn__text btn__text_desktop">Задать вопрос</span>»,
					вы соглашаетесь с условиями «<a href="/data/privacy-policy/" target="_blank">Политики конфиденциальности</a>»
				</div>
			</form>
		</div>
<img src="/skupka-tekhniki/img/top.png" class="top_banner"/>

<div class="text-default">
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"faq", 
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
		"IBLOCK_ID" => "41",
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
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Вопросы и ответы",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/faq/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
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
</div>


<div class="thankYou">
<div class="form-popup">
	<div class="form-popup__inner">
		<div class="form-popup__header">
			<span class="day">
				<span class="form-popup__default">Спасибо за Ваше обращение.</span>
				<br/><br/><span>Наши специалисты постараются ответить на Ваш вопрос в ближайшее время.</span>
			</span>
			<span class="night">
				<span class="form-popup__default">Спасибо за Ваше обращение. </span>
				<br/><br/><span>Наши специалисты постараются ответить на Ваш вопрос в ближайшее время.</span>
			</span>
			<br/><br/><br/><button type="text" class="btn close" onClick="globalPopup.close();">Закрыть</button>
		</div>
	</div>
	<!-- /.form-popup__inner -->
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>