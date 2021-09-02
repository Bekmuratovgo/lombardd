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
<!--start column-->
<div class="column main-hidden">
	<div class="column__text">
		<p>Ювелирные изделия по праву считаются лучшим украшением.
			Кроме того, это отличное вложение денег, поскольку золото
			с драгоценными камнями остаётся ценным приобретением во все
			времена, с которым всегда можно пойти в ювелирный ломбард.
			Имея заветную шкатулку с «золотым запасом», человек ощущает
			определённую защищённость, своеобразную финансовую
			«подушку безопасности».
		</p>
		<p>Мы принимаем следующие изделия:
		</p>
		<ul>
			<li><a href="/data/chto-prinimaet-lombard/sdat-braslet-v-lombard/">Браслеты</a></li>
			<li><a href="/data/chto-prinimaet-lombard/sdat-kolco-v-lombard/">Кольца</a></li>
			<li><a href="/data/chto-prinimaet-lombard/sdat-cep-v-lombard/">Цепи</a></li>
			<li><a href="/data/chto-prinimaet-lombard/sdat-obruchalnoe-kolco-v-lombard/">Обручальные кольца</a></li>
			<li><a href="/data/chto-prinimaet-lombard/sergi/">Серьги</a></li>
		</ul>
		<p>Концепция работы «Первого ювелирного ломбарда» в Москве
			– честные и открытые отношения с клиентами, профессионализм
			экспертов, прозрачные условия получения денег под залог
			изделий из золота и драгоценных камней, филиалы рядом
			с многими станциями метро.</p>
		<p>Ломбард «Первый ювелирный» – деньги под залог золотых
			и серебряных изделий здесь и сейчас. Острая необходимость
			в деньгах может возникнуть в самый неожиданный момент.
			Для современного экономически нестабильного мира это
			стало почти нормой. Сегодня сложно найти человека, ни разу
			не занимавшего некоторую сумму или не обременённого
			банковским кредитом. Однако получить заем у банка не всегда
			возможно и всегда – долго. Преимущество ломбарда
			– получение займа быстро и без лишней волокиты.</p>
	</div>
</div>
<!--end column-->

<div class="promo-title"><a href="/news/">Новости</a></div>
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
<div class="conditions">
<a name="zaim"></a>
	<div class="promo-title">Условия займа</div>
	<?$APPLICATION->IncludeFile(
		SITE_DIR."include/loan_conditions.php",
		Array(),
		Array("MODE"=>"text")
	);?>
</div>
<!--end conditions-->

<div class="container">
	<h2 class="caption">Вопрос-Ответ</h2><br>
	<p style="text-align:center">Не нашли нужный ответ?<br><br><span onClick="ym(33166953,'reachGoal','zadat-vopros');" class="btn js-questions-popup" style="padding: 5px;">Задать вопрос</span></p>
	<div class="accordion">
		<ul>
			<li class="li_show">
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Какая сейчас цена на золото?</span>
				<div class="msg">
					<p>Актуальные цены Вы можете узнать на нашем сайте или позвонив по общему номеру <a href="tel:+74951286805">+7 (495) 212 06 74</a></p>
				</div>
			</li>
			<li class="li_show">
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Оцениваете ли вы камни?</span>
				<div class="msg">
					<p>Да! Бриллианты оцениваются дополнительно!</p>
				</div>
			</li>
			<li class="li_show">
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">По каким критериям оценивается камень?</span>
				<div class="msg">
					<p>Оценка бриллианта зависит от характеристик самого камня, а именно от его размера, цвета и чистоты.</p>
				</div>
			</li>
			<li class="li_show">
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Имеются ли у Вас изделия для продажи?</span>
				<div class="msg">
					<p>Да, ознакомиться с нашим ассортиментом Вы можете в интернет-каталоге my-uvelir.ru, а так же на отделениях м. Новые Черемушки ( ул. Профсоюзная,56) и м. Речной вокзал (ул. Фестивальная,7).</p>
				</div>
			</li>
			<li class="li_show">
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Как выгоднее: продать изделие или заложить? </span>
				<div class="msg">
					<p>В зависимости от того хотите ли вы в дальнейшем выкупить свое изделие. Цена на скупку немного выше.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Есть ли у Вас ювелир, который занимается ремонтом изделий?</span>
				<div class="msg">
					<p>В отделениях нет ювелирной мастерской, но Вы можете воспользоваться нашей услугой «Ювелирный TRADE IN» и обменять Ваше сломанное украшение на новое по выгодным условиям!</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Что нужно, чтобы получить займ? </span>
				<div class="msg">
					<p>Удостоверение личности (паспорт) и ваше залоговое имущество</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Какая разница между скупкой и залогом?</span>
				<div class="msg">
					<p>Скупка – это когда Вы продаете свое изделие. При оформлении залога, изделие можете вернуть, в любой удобный для Вас день, погасив при этом сумму займа с процентами.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Что будет, если я не заберу изделие?</span>
				<div class="msg">
					<p>По условиям договора займа, по истечению льготного  срока, ломбард имеет право реализовать Ваше изделие.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Есть ли штрафы после окончания срока займа?</span>
				<div class="msg">
					<p>Нет, проценты будут начисляться по процентной ставке второго месяца, указанной в залоговом билете.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Подошел срок платежа, а я далеко нахожусь территориально, что делать?</span>
				<div class="msg">
					<p>Вы можете оплатить % онлайн в личном кабинете на нашем сайте. Если  такой возможности нет, то Вы всегда можете связаться с экспертами по номеру телефону, указанному на залоговом билете, и предупредить о задержке платежа.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Могу ли я выкупить или оплатить проценты по карте?</span>
				<div class="msg">
					<p>Да. с 11-го дня залога</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Могут ли родственники забрать мои изделия?</span>
				<div class="msg">
					<p>Имущество может забрать только залогодатель при наличии удостоверения личности, либо родственник с доверенностью  заверенной нотариусом.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Могу ли я забрать свое изделие, если потерял залоговый билет?</span>
				<div class="msg">
					<p>Да, по паспорту</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Есть ли какие-то льготы для пенсионеров?</span>
				<div class="msg">
					<p>Да, специальная социальная программа, под 0,23% в день</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">У меня есть займ в другом Вашем отделении, могу ли я получить займ у вас?</span>
				<div class="msg">
					<p>Да, конечно</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Как воспользоваться кредитными каникулами?</span>
				<div class="msg">
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
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Что можно сдать в ломбард?</span>
				<div class="msg">
					<p>Мы принимаем ювелирные изделия, изделия из драгоценных металлов (зубные коронки, монеты, старинные изделия из драгоценных металлов), лом с вставками и без.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Сколько по времени оформляется займ?</span>
				<div class="msg">
					<p>Оформление займа занимает не более 10-15 минут.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Почему отличается оценка изделия в ломбарде от цены в магазине?</span>
				<div class="msg">
					<p>Ценовая политика магазинных изделий включает в себя большое количество затрат - аренда, заработная плата персонала, обслуживание и т.д.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Почему мы не оцениваем полудрагоценные камни?</span>
				<div class="msg">
					<p>Оценка полудрагоценных камней требует крупных измерительных приборов, что не позволяют небольшие помещения ломбардов.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Почему оплата выкупа возможна по безналичному расчёту только на 11 день?</span>
				<div class="msg">
					<p>Мы работаем в строгом соответствие с законодательством. Данное распоряжение принято Центробанком,в связи с борьбой с нелегальным обналичиваем денег, мошенничество, терроризм.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Оцениваете ли изделия по фото?</span>
				<div class="msg">
					<p>Мы можем назвать Вам <u>ориентировочную</u> стоимость изделия при наличии фото и информации о весе, пробе, вставках и их характеристиках. При оценке изделия в наших отделениях сумма может измениться как в большую, так и в меньшую сторону.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Сертифицируете товар?</span>
				<div class="msg">
					<p>проводить сертификацию качества могут те организации, которые получили аккредитацию по проведению контроля качест в лабораториях. В этих центрах можно зарегистрировать декларацию  и тот пакет документов, который нужен для распростр. И оформления у нас отделения ломбард!</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Принимаете платину?</span>
				<div class="msg">
					<p>Принимаем ликвидные изделия из платины  с обязательным наличием пробы РФ.</p>
				</div>
			</li>
		</ul>
	</div>
</div>
<div id="clickme" class="btn">&darr; Раскрыть полностью &darr;</div>
<div id="clickme2" class="btn">&uarr; Свернуть &uarr;</div>
<script type="text/javascript">
$("#clickme").click(function() {
  $(".accordion ul li").show();
  $("#clickme").hide();
  $("#clickme2").show();
});
$("#clickme2").click(function() {
  $(".accordion ul li").hide();
  $(".accordion ul .li_show").show();
  $("#clickme").show();
  $("#clickme2").hide();
});
</script>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
