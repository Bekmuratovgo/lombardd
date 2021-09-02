<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Ломбард ювелирных изделий в Москве. Деньги под залог золота и серебра «Первый Ювелирный Ломбард»');
$APPLICATION->SetPageProperty("title", 'Ломбард в Москве – скупка ювелирных изделий, деньги под залог золота и серебра');
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", '★ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Продать, сдать или заложить драгметаллы, ювелирные изделия и смартфоны ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
//$APPLICATION->SetPageProperty("robots", "noindex, nofollow");

// add 20.03.2019
/*$APPLICATION->AddHeadString('<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "GXAGiUbp6OaAp18mxNE7k0_FggsnOY4t"]);
</script>
<script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>', true);
*/
?>


<? $APPLICATION->SetAdditionalCSS("/na-vyezd/css/na_vyezd.css");?>

<script type="text/javascript">
$(".izd_buy").hover(function(){
	$(this).find('.pop').show();
  }, function(){
	$(this).find('.pop').hide();
});
</script>
<style>
.izd_buy, .pop{
    border: 1px solid #ccc;
    margin: 0px 50px 20px 0px;
    padding: 10px 20px;
}
.izdelia{padding-top:0px;}
.izd_buy p, .pop p{line-height:1.2;}
.izd_left {
	width: 75%;
    display: inline-block;
}
.izd_right {
    width: 23%;
    display: inline-block;
	vertical-align: top;
}
.izd_right img{width:100%;}
.pop {
    display: none;
    position: absolute;
    max-width: 500px;
    background: #eee;
    margin-top: -100px;
    margin-left: 20px;
}
.izdelia .swiper-button-prev {
    left: -75px !important; top: -20px;
}
.izdelia .swiper-button-next {
    right: -75px !important; top: -20px;
}
.price_main_promo .price__cell, .price__name .price_main_promo {
    width: 33% !important;
}
.price_main_promo .price__names {
    width: 100% !important;
}
</style>
</div><!--end container-->

<?if ($_GET['dev'] == 'y'):?>
<?$APPLICATION->IncludeFile(
	SITE_TEMPLATE."/include_areas/lombard_zaim_form_new2.php",
	Array(),
	Array("MODE"=>"text")
);?>
<?else:?>
<?$APPLICATION->IncludeFile(
	SITE_TEMPLATE."/include_areas/lombard_zaim_form_new3.php",
	Array(),
	Array("MODE"=>"text")
);?>
<?endif?>

<div class="hero__feautures">
	<div class="container-new container-new-flex">
		<div class="hero__feautures-header">Наши преимущества</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feautures/feauture-1.svg" alt="" class="hero__feautures-item--img">
			<div class="hero__feautures-item--text">Низкая %<br>ставка</div>
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feautures/feauture-2.svg" alt="" class="hero__feautures-item--img">
			<div class="hero__feautures-item--text">Высокая оценка<br>изделий</div>
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feautures/feauture-3.svg" alt="" class="hero__feautures-item--img">
			<div class="hero__feautures-item--text">Неограниченная<br>сумма займа</div>
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feautures/feauture-4.svg" alt="" class="hero__feautures-item--img">
			<div class="hero__feautures-item--text">Оперативная<br>выдача денег</div>
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feautures/feauture-5.svg" alt="" class="hero__feautures-item--img">
			<div class="hero__feautures-item--text">Высокая оценка<br>бриллиантов</div>
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feautures/feauture-6.svg" alt="" class="hero__feautures-item--img">
			<div class="hero__feautures-item--text">Онлайн оплата<br>процентов</div>
		</div>
	</div>
</div>
<div class="hero__price">
	<div class="container-new container-new-flex">
		<h2 class="hero__price-header">Прайс-лист на прием драгоценных металлов</h2>
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
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array("PRICE","PRICE_CARD","PRICE_OTD","PRICE_CARD_OTD"),
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
<div class="hero__feautures">
	<div class="container-new container-new-flex">
		<div class="hero__feautures-header">Узнайте примерную стоимость своего изделия прямо сейчас!</div>
		<div class="hero__feautures-item-2">
			<div class="hero__feautures-item-2--img">
				<img src="/tpl/images/main_new/feautures/ico-heart.svg" alt="" class="hero__feautures-item--img">
			</div>
			<div class="hero__feautures-item-2--header">Удобно</div>
			<div class="hero__feautures-item-2--text">Узнайте стоимость вашего изделия, не выходя из дома!</div>
		</div>
		<div class="hero__feautures-item-2">
			<div class="hero__feautures-item-2--img">
				<img src="/tpl/images/main_new/feautures/ico-stopwatch.svg" alt="" class="hero__feautures-item--img">
			</div>
			<div class="hero__feautures-item-2--header">Быстро</div>
			<div class="hero__feautures-item-2--text">Онлайн-оценка займет <br>от 1 до 5 минут!</div>
		</div>
		<div class="hero__feautures-item-2">
			<div class="hero__feautures-item-2--img">
				<img src="/tpl/images/main_new/feautures/ico-gift.svg" alt="" class="hero__feautures-item--img">
			</div>
			<div class="hero__feautures-item-2--header">Бесплатно</div>
			<div class="hero__feautures-item-2--text">Оценка абсолютно бесплатна!</div>
		</div>
		<div class="hero__feautures-buttons">
			<a href="#popup:marquiz_5f731737b07fd50044d1c4a1" target="_blank" class="hero__feautures-buttons-link button-default">Оценить изделие онлайн</a>
		</div>
	</div>
</div>
<!--start about-->
<div class="hero__about">
	<div class="container-new container-new-flex">
		<div class="hero__about-left">
			<img src="/tpl/images/main_new/about.png" alt="" class="hero__about-left--img">
		</div>
		<div class="hero__about-right">
			<p class="hero__about-header">О компании</p>
			<p>«Первый Ювелирный» — это крупная и успешная сеть ломбардов в Москве. Мы — за прозрачность и надежность: состоим в реестре ломбардов Центробанка РФ. С 2008 года мы оказываем услуги скупки и займа под залог ювелирных украшений. Наша команда абсолютно всегда поможет оперативно обеспечить вас любой необходимой суммой — мы подберем для вас ценные решения со 100%-м одобрением.</p>
			<p>Наша цель — полноценная, финансово продуманная жизнь наших клиентов. Мы готовы подстраховать в самой сложной ситуации, помочь с оценкой изделия и предложить наилучшее решение.</p>
			</div>
	</div>
</div>
<!--end about-->
<?
$GLOBALS["arrFilterView"] = array ("PROPERTY_MAIN_VALUE" => "Да");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"new_reviews_about_promo",
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
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "arrFilterView",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "8",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("MAIL","FOTO"),
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
<?
//$GLOBALS["arrFilter"] = array ("!ID" => 289873);
//$GLOBALS["arrFilter"] = array ("ID" => array(543022,543025,543028,543029,543030,543024,544072));
/*
$APPLICATION->IncludeComponent(
	"bitrix:news",
	"slider_news",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
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
		"NEWS_COUNT" => "",
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
		"SET_STATUS_404" => "N",
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
);

*/


$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"slider_news", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
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
		"NEWS_COUNT" => "5",
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
		"SET_STATUS_404" => "N",
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
		"COMPONENT_TEMPLATE" => "slider_news",
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
);


?>
<!--start conditions-->
<?$APPLICATION->IncludeFile(SITE_DIR."include/loan_conditions_new.php",Array(),Array("MODE"=>"text"));?>
<!--end conditions-->

<!--start questions/answers-->
<?$APPLICATION->IncludeFile(SITE_DIR."include/block_questions_answers.php",Array(),Array("MODE"=>"text"));?>
<!--end questions/answers-->

<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="hero__quest" id="more-questions">
	<div class="container-new container-new-flex">
		<div class="hero__quest-header">Остались вопросы?</div>
		<div class="hero__quest-header-2">Оставьте контакты, и мы свяжемся с вами в ближайшее время!</div>
		<form id="home-questions" class="hero__quest-form js-homepage-form" enctype="multipart/form-data" method="post">
			<input class="hero__quest-form--input js-required" type="text" name="call_name" value="" placeholder="Ваше имя">
			<input class="hero__quest-form--input js-required js-phone" type="phone" name="call_phone" value="" placeholder="Номер телефона">
			<div class="g-recaptcha" data-sitekey="6LcEW8cUAAAAAA7GLbwMqyLByPzoiWBH-Ry0UaQl"></div>
			<div class="text-danger" id="recaptchaError"></div><br/>
			<button class="hero__quest-form--submit button-default js-submit" type="submit" name="button">Задать вопрос</button>
			<div class="hero__quest-form--policy">
				Нажимая на кнопку «Задать вопрос», я подтверждаю согласие <a href="/data/privacy-policy/">c политикой конфиденциальности</a> и даю согласие на обработку персональных данных
			</div>
		</form>
	</div>
	<div class="thankYou">
		<div class="form-popup">
			<div class="form-popup__inner">
				<div class="form-popup__header">
					<span class="day">
						<span class="form-popup__default">Спасибо за заявку!</span>
						<br><br><span>Наши менеджеры перезвонят в ближайшее время</span>
					</span>
					<span class="night">
						<span class="form-popup__default">Благодарим Вас за обращение!</span>
						<br><br><span>Мы сразу же свяжемся с Вами в наше рабочее время с 9:00 до 21:00!</span>
					</span>
					<br><br><br><button type="text" class="btn close" onclick="globalPopup.close();">Закрыть</button>
				</div>
			</div>
			<!-- /.form-popup__inner -->
		</div>
	</div>
</div>
<div class="container">
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
