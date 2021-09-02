<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", 'Скупка золота и серебра в Москве - сдать ювелирные украшения по лучшим ценам за грамм! | «Первый Ювелирный Ломбард»');
$APPLICATION->SetPageProperty("description", '★ Скупка золота в ломбарде ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Скупка золота в ломбарде");
?><h1 class="promo-title">
	Скупка золота в ломбарде</h1>
<!--start price-->
<div class="price">
	<div class="title">Цены на драгоценные металлы</div>
	<div class="price__blocks">
		<div class="price__block">
			<div class="price__gold">
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"buy_metall",
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
						"IBLOCK_ID" => "13",
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
						"PROPERTY_CODE" => array("PRICE",""),
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
						"STRICT_SECTION_CHECK" => "N",
						"TITLE" => "Золото"
					)
				);?>
			</div>
		</div>
		<div class="price__block">
			<div class="price__silver">
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"buy_metall",
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
						"IBLOCK_ID" => "7",
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
						"PROPERTY_CODE" => array("PRICE",""),
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
						"STRICT_SECTION_CHECK" => "N",
						"TITLE" => "Серебро"
					)
				);?>
			</div>
		</div>
		<div class="price__block">
			<div class="price__platinum">
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"buy_metall",
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
						"IBLOCK_ID" => "8",
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
						"PROPERTY_CODE" => array("PRICE",""),
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
						"STRICT_SECTION_CHECK" => "N",
						"TITLE" => "Платина"
					)
				);?>
			</div>
			<br/><p>Итоговая стоимость изделия зависит от его ликвидности.</p>
			<p>Указанные на сайте цены не являются публичной офертой (ст. 435 ГК РФ, cт. 437 ГК РФ). Для уточнения стоимости услуг обращайтесь на наш  единый номер тел.: +7 (495) 128 68 05.</p>
		</div>
		<div class="price__block">
			<form class="price__form js-forsale">
				 <?=bitrix_sessid_post();?>
				<div class="form-inputs__block">
 <input name="fio" type="text" class="form-inputs__field js-required" data-error="Введите Имя" placeholder="Ваше имя">
				</div>
				<div class="form-inputs__block">
 <input name="phone" type="tel" class="form-inputs__field js-required js-phone" data-error="Введите телефон" placeholder="Ваш телефон">
				</div>
 <button type="submit" class="btn price__submit js-submit" onclick="yaCounter33166953.reachGoal('zayavka-na-prodaju'); return true;"> <span class="btn__text btn__text_tablet">Отправить заявку</span> <span class="btn__text btn__text_desktop">Отправить заявку на продажу</span> </button>
				<div class="admire">
					<br/>Нажимая на кнопку «<span class="btn__text btn__text_tablet">Отправить заявку</span>
					<span class="btn__text btn__text_desktop">Отправить заявку на продажу</span>»,
					я подтверждаю согласие c <a href="/data/privacy-policy/" target="_blank">политикой конфиденциальности</a>
					и даю согласие на обработку персональных данных
				</div>
			</form>
		</div>
	</div>
</div>
 <!--end price--> 

<?/*
<div class="text-default" style="font-size: 14px;">
	<p>Общество с ограниченной ответственностью «Первый ювелирный ломбард», ОГРН 1147746123436, ИНН 7703805756 предоставляет потребительские займы физическим лицам на срок до 31 календарного дня (с возможностью дальнейшей пролонгации на срок не более одного года в общей сложности) в размере от 100 рублей, процентная ставка по займу: от 116,435 до 126,679 % годовых, под залог ювелирных изделий (при этом оценка одного грамма золота, содержащегося в ювелирном изделии (предмете залога), составляет: до 3940 руб. в зависимости от качества изделия (пробы, состояния и прочих характеристик предмета залога).
	<a href="obshie_uslovia.pdf" target="_blank">Общие условия Первого Ювелирного Ломбарда</a>.</p>
</div>
*/?>

 <!--start merit-->
<div class="merit">
	<?$APPLICATION->IncludeFile(
		SITE_DIR."include/loan_desc.php",
		Array(),
		Array("MODE"=>"text")
	);?>
</div>
 <!--end merit--> <!--start conditions-->
<div class="conditions">
	<div class="promo-title">
		Условия займа
	</div>
	<?$APPLICATION->IncludeFile(
		SITE_DIR."include/loan_conditions.php",
		Array(),
		Array("MODE"=>"text")
	);?>
</div>
 <!--end conditions-->
<div class="text-default">

	<p>
		Нередко в офисы «Первого ювелирного» обращаются клиенты, у которых дома скопилось некоторое количество невостребованных ювелирных изделий, которые они предпочитают сдать в ломбард. Это происходит по разным причинам: <br>
	</p>
	<p>
		– украшение сломалось так, что ремонт экономически невыгоден; <br>
		 – вышедший из моды дизайн; <br>
		 – навевает неприятные воспоминания и др.
	</p>
	<p>
		 Впрочем, в большинстве случаев в скупку золота обращаются по вполне определённой причине – нужны деньги, а ломбард – это то место в Москве, куда обращаться безопасно, где можно каждый грамм металла сдать дорого. И это правильное решение, ведь официальная деятельность подобных организаций находится под контролем государственных органов. То есть, человек гарантированно не попадёт в руки мошенников по скупке золота, предлагающих за грамм 585 пробы минимальную цену, а таковых не только в Москве, но и в любом другом городе можно встретить в каждом людном месте.
	</p>
	<p>
 <a href="/data/skupka-dragocennyh-metallov/">Драгоценные металлы</a> – хороший актив, со временем только возрастающий в цене. Поэтому многие люди вкладывают в них свои накопления – инвестируют в золото, платину и другие драгметаллы, обеспечивая себе и своим близким надежную финансовую поддержку в случае необходимости. При этом дорогая скупка золота в ломбарде – это наиболее выгодный и безопасный источник наличных денег.
	</p>
</div>

<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">
<div class="container block-docs">
	<h2 class="caption">Документы</h2>
	<p class="center">Скупку осуществляет ИП Евстратов А.Д. ИНН 540698769425. ОГРНИП 318774600410923</p>
	
	<div class="docs-list">
		<div class="doc-item pdf">
			<p>Учетная карточка ИП Евстратов А.Д</p>
			<p class="link"><a href="/upload/docs/skupka/учетная_карточка_ИП_Евстратов_А_Д_Альфа_банк.doc">учетная_карточка_ИП_Евстратов_А_Д_Альфа_банк.doc</a> <span class="size">38.5 KB</span></p>
		</div>
		<div class="doc-item pdf">
			<p>Уведомление о постановке на спецучет  ИП Евстратов А.Д</p>
			<p class="link"><a href="/upload/docs/skupka/Уведомление_о_постановке_на_спецучет_Пробирка_ИП_Евстратов.pdf">Уведомление_о_постановке_на_спецучет_Пробирка_ИП_Евстратов.pdf</a> <span class="size">224.5 KB</span></p>
		</div>
		<div class="doc-item pdf">
			<p>Свидетельство о постановке на учет в ФНС  ИП Евстратов А.Д</p>
			<p class="link"><a href="/upload/docs/skupka/свидетельство_о_постановке_на_учет_в_ФНС_ИП_Евстратов.pdf">свидетельство_о_постановке_на_учет_в_ФНС_ИП_Евстратов.pdf</a> <span class="size">151.2 KB</span></p>
		</div>
	</div>
</div>

<? /* FOR QUESTIONS-ANSWERS { */ ?>
</div>	<!-- end text-default priem -->

<!--start questions/answers-->
<?$APPLICATION->IncludeFile(SITE_DIR."include/block_questions_answers.php",Array(),Array("MODE"=>"text"));?>
<!--end questions/answers-->

<div class="container">
<? /* } */ ?>

<?/*
<div class="container faq">
	<h2 class="caption">Вопрос-Ответ</h2><br>
	<p style="text-align:center">Не нашли нужный ответ?<br><br><span class="btn js-questions-popup" style="padding: 5px;">Задать вопрос</span></p>
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
*/?>

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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
