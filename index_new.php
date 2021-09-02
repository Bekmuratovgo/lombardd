<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Ломбард ювелирных изделий в Москве. Деньги под залог золота и серебра «Первый Ювелирный Ломбард»');
$APPLICATION->SetPageProperty("title", 'Ломбард ювелирных изделий в Москве. Деньги под залог золота и серебра «Первый Ювелирный Ломбард»');
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", 'Честный ювелирный ломбард в Москве рядом с метро. Выгодный процент!  Адекватная оценка изделий из драгоценных металлов в Первом Ювелирном Ломбарде. Адреса филиалов.');
//$APPLICATION->SetPageProperty("robots", "noindex, nofollow");

// add 20.03.2019
/*$APPLICATION->AddHeadString('<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "GXAGiUbp6OaAp18mxNE7k0_FggsnOY4t"]);
</script>
<script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>', true);
*/
?>


<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

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
<div class="hero__feautures">
	<div class="container-new container-new-flex">
		<div class="hero__feautures-header">Наши преимущества</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feauture-1.svg" alt="" class="hero__feautures-item--img">
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feauture-2.svg" alt="" class="hero__feautures-item--img">
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feauture-3.svg" alt="" class="hero__feautures-item--img">
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feauture-4.svg" alt="" class="hero__feautures-item--img">
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feauture-5.svg" alt="" class="hero__feautures-item--img">
		</div>
		<div class="hero__feautures-item">
			<img src="/tpl/images/main_new/feauture-6.svg" alt="" class="hero__feautures-item--img">
		</div>
	</div>
</div>
<div class="hero__price">
	<div class="container-new container-new-flex">
		<div class="hero__price-header">Прайс-лист на прием драгоценных металлов</div>
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
<div class="hero__feautures">
	<div class="container-new container-new-flex">
		<div class="hero__feautures-header">Узнайте примерную стоимость своего изделия прямо сейчас!</div>
		<div class="hero__feautures-item-2">
			<img src="/tpl/images/main_new/feauture-2-1.svg" alt="" class="hero__feautures-item--img">
		</div>
		<div class="hero__feautures-item-2">
			<img src="/tpl/images/main_new/feauture-2-2.svg" alt="" class="hero__feautures-item--img">
		</div>
		<div class="hero__feautures-item-2">
			<img src="/tpl/images/main_new/feauture-2-3.svg" alt="" class="hero__feautures-item--img">
		</div>
		<div class="hero__feautures-buttons">
			<a href="/data/chto-prinimaet-lombard/ocenka-onlajn-v-lombarde/" class="hero__feautures-buttons-link button-default">Оценить изделие онлайн</a>
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
			<p>Сеть ломбардов «Первый Ювелирный» основана в 2008 году.</p>
			<p>Наша миссия — упростить доступ всех слоев населения Российской федерации к современным финансовым услугам и современным ювелирным украшениям. Предоставить широкий выбор ювелирных украшений по адекватным доступным ценам! Научить использовать эти украшения, как удобный высоко ликвидный актив!</p>
			<p>В принципы нашей работы мы заложили открытые отношения с клиентами и доступность финансовых услуг ломбарада. Поэтому изделия опечатываем при клиенте, а наши филиалы находятся рядом со многими станциями метро.</p>
		</div>
	</div>
</div>
<!--end about-->
<?
$GLOBALS["arrFilterView"] = array ("PROPERTY_MAIN_VALUE" => "Да");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"reviews_about_promo",
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
$GLOBALS["arrFilter"] = array ("!ID" => 289873);
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
);?>
<!--start conditions-->
<?$APPLICATION->IncludeFile(SITE_DIR."include/loan_conditions_new.php",Array(),Array("MODE"=>"text"));?>
<!--end conditions-->
<div class="hero__faq">
	<div class="container-new container-new-flex">
		<div class="hero__faq-header">Вопрос-ответ</div>
		<div class="hero__faq-column">
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Какая сейчас цена на золото?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Актуальные цены Вы можете узнать на нашем сайте или позвонив по общему номеру <a href="tel:+74951286805">+7 (495) 212 06 74</a>
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Оцениваете ли вы камни?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Да! Бриллианты оцениваются дополнительно!
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					По каким критериям оценивается камень?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Оценка бриллианта зависит от характеристик самого камня, а именно от его размера, цвета и чистоты.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Имеются ли у Вас изделия для продажи?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Да, ознакомиться с нашим ассортиментом Вы можете в интернет-каталоге my-uvelir.ru, а так же на отделениях м. Новые Черемушки ( ул. Профсоюзная,56) и м. Речной вокзал (ул. Фестивальная,7).
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Как выгоднее: продать изделие или заложить?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					В зависимости от того хотите ли вы в дальнейшем выкупить свое изделие. Цена на скупку немного выше.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Есть ли у Вас ювелир, который занимается ремонтом изделий?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					В отделениях нет ювелирной мастерской, но Вы можете воспользоваться нашей услугой «Ювелирный TRADE IN» и обменять Ваше сломанное украшение на новое по выгодным условиям!
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Что нужно, чтобы получить займ?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Удостоверение личности (паспорт) и ваше залоговое имущество
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Какая разница между скупкой и залогом?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Скупка – это когда Вы продаете свое изделие. При оформлении залога, изделие можете вернуть, в любой удобный для Вас день, погасив при этом сумму займа с процентами.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Что будет, если я не заберу изделие?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					По условиям договора займа, по истечению льготного  срока, ломбард имеет право реализовать Ваше изделие.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Есть ли штрафы после окончания срока займа?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Нет, проценты будут начисляться по процентной ставке второго месяца, указанной в залоговом билете.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Подошел срок платежа, а я далеко нахожусь территориально, что делать?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Вы можете оплатить % онлайн в личном кабинете на нашем сайте. Если  такой возможности нет, то Вы всегда можете связаться с экспертами по номеру телефону, указанному на залоговом билете, и предупредить о задержке платежа.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Могу ли я выкупить или оплатить проценты по карте?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Да. с 11-го дня залога
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Могут ли родственники забрать мои изделия?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Имущество может забрать только залогодатель при наличии удостоверения личности, либо родственник с доверенностью  заверенной нотариусом.
				</div>
			</div>
		</div>
		<div class="hero__faq-column">
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Могу ли я забрать свое изделие, если потерял залоговый билет?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Да, по паспорту
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Есть ли какие-то льготы для пенсионеров?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Да, специальная социальная программа, под 0,23% в день
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					У меня есть займ в другом Вашем отделении, могу ли я получить займ у вас?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Да, конечно
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Как воспользоваться кредитными каникулами?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					<p>Настоящим информируем вас, что согласно положениям Федерального закона от 03.04.2020 № 106-ФЗ &laquo;О внесении изменений в Федеральный закон &laquo;О Центральном банке Российской Федерации (Банке России)&raquo; и отдельные законодательные акты Российской Федерации в части особенностей изменения условий кредитного договора, договора займа&raquo; и принятым в его развитие нормативно-правовым актам, в том числе, Постановлению Правительства от 3 апреля 2020 г. № 435 &laquo;Об установлении максимального размера кредита (займа) для кредитов (займов), по которому заемщик вправе обратиться к кредитору с требованием об изменении условий кредитного договора (договора займа), предусматривающим приостановление исполнения заемщиком своих обязательств&raquo;, Информационному письму Банка России от 05.04.2020 № ИН-06-59/49 &laquo;Об особенностях применения Федерального закона от 03.04.2020 № 106-ФЗ&raquo;, заёмщики ломбарда имеют право на предоставление каникул по потребительским кредитам. Заемщик может обратиться за кредитными каникулами до 30 сентября 2020, по каждому договору займа такая возможность дается один раз.</p>
					<p>Заявку на кредитные каникулы заемщик может подать способом, предусмотренным в договоре, в том числе по телефону, указанному заемщиком при его оформлении.</p>
					<p>Кредитные каникулы можно будет оформить только по тем договорам, которые были заключены до 03.04.2020.</p>
					<p>Кредитные каникулы можно оформить на любой необходимый срок до 6 месяцев. При этом дата начала кредитных каникул не должна быть не позже 14 дней после подачи заявки.</p>
					<p>Одним из условий предоставления каникул является снижение дохода за месяц, предшествующий обращению, более чем на 30% от среднемесячного дохода заемщиков за 2019 год.</p>
					<p>Заемщик должен предоставить ломбарду в течение 90 дней после подачи заявки для подтверждения снижения дохода любой из следующих документов:</p>
					<ul style="list-style: disc;line-height: 1.5;font-size: 16px;padding: 0px 50px 10px 90px;">
						<li>справку по форме 2-НДФЛ за 2019-2020 гг.,</li>
						<li>справку о статусе безработного,</li>
						<li>больничный лист на срок 1 месяц и более.</li>
					</ul>
					<p>Для целей получения документов, подтверждающих снижение дохода, в электронной форме (если предоставление их из бухгалтерии организации-работодателя затруднительна) рекомендуем руководствоваться Письмом Минфина России от 27.05.2020 № 05-06-06/3/44742 и использовать следующие электронные сервисы: <noindex><a href="https://www.gosuslugi.ru/" rel="nofollow" target="_blank">https://www.gosuslugi.ru/</a></noindex> (для получения справки по форме 2-НДФЛ и сведений о состоянии индивидуального лицевого счета из ПФР - для работающих по трудовому договору), <noindex><a href="http://www.npd.nalog.ru/" rel="nofollow" target="_blank">www.npd.nalog.ru</a></noindex> (для получения справки о состоянии расчетов (доходах) по налогу на профессиональный доход (КНД 1122036) - для самозанятых).</p>
					<p>Статус безработного можно получить на сайте: <noindex><a href="https://trudvsem.ru/" rel="nofollow" target="_blank">https://trudvsem.ru</a></noindex></p>
					<p>Обращаем Ваше внимание также, что в льготный период (во время кредитных каникул) на сумму основного долга начисляются проценты по льготной ставке в 2/3 от ставки по договору займа. Таким образом, отсрочка не является бесплатной.</p>
					<p>Также обращаем ваше внимание, что ломбард вправе отказать в предоставлении кредитных каникул, если при проверке документов выяснят, что заемщик не соответствует установленным критериям. В таком случае отсрочка по платежам отменяется, и заемщик должен будет возместить пропущенные платежи в полном размере за весь срок.</p>
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Что можно сдать в ломбард?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Мы принимаем ювелирные изделия, изделия из драгоценных металлов (зубные коронки, монеты, старинные изделия из драгоценных металлов), лом с вставками и без.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Сколько по времени оформляется займ?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Оформление займа занимает не более 10-15 минут.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Почему отличается оценка изделия в ломбарде от цены в магазине?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Ценовая политика магазинных изделий включает в себя большое количество затрат - аренда, заработная плата персонала, обслуживание и т.д.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Почему мы не оцениваем полудрагоценные камни?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Оценка полудрагоценных камней требует крупных измерительных приборов, что не позволяют небольшие помещения ломбардов.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Почему оплата выкупа возможна по безналичному расчёту только на 11 день?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Мы работаем в строгом соответствие с законодательством. Данное распоряжение принято Центробанком,в связи с борьбой с нелегальным обналичиваем денег, мошенничество, терроризм.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Оцениваете ли изделия по фото?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Мы можем назвать Вам <u>ориентировочную</u> стоимость изделия при наличии фото и информации о весе, пробе, вставках и их характеристиках. При оценке изделия в наших отделениях сумма может измениться как в большую, так и в меньшую сторону.
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Сертифицируете товар?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Проводить сертификацию качества могут те организации, которые получили аккредитацию по проведению контроля качест в лабораториях. В этих центрах можно зарегистрировать декларацию  и тот пакет документов, который нужен для распростр. И оформления у нас отделения ломбард!
				</div>
			</div>
			<div class="hero__faq-row">
				<div class="hero__faq-row--text">
					Принимаете платину?
				</div>
				<div class="hero__faq-row--button">+</div>
				<div class="hero__faq-row--hidden">
					Принимаем ликвидные изделия из платины с обязательным наличием пробы РФ.
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hero__quest">
	<div class="container-new container-new-flex">
		<div class="hero__quest-header">Остались вопросы?</div>
		<div class="hero__quest-header-2">Оставьте контакты, и мы свяжемся с вами в ближайшее время!</div>
		<form class="hero__quest-form js-questions" enctype="multipart/form-data" method="post">
			<input class="hero__quest-form--input js-required" type="text" name="fio2" value="" placeholder="Ваше имя">
			<input class="hero__quest-form--input js-required js-phone" type="phone" name="name" value="" placeholder="Номер телефона">
			<button class="hero__quest-form--submit button-default js-submit" type="submit" name="button">Задать вопрос</button>
			<div class="hero__quest-form--policy">
				Нажимая на кнопку «Задать вопрос», я подтверждаю согласие <a href="#">c политикой конфиденциальности</a> и даю согласие на обработку персональных данных
			</div>
		</form>
	</div>
</div>
<div class="container">
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
