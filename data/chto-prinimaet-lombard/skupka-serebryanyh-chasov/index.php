<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Скупка серебряных часов дорого, выгодно продать серебряные часы в Москве — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", '★ Скупка серебряных часов в Москве ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Скупка серебряных часов в Москве");
?><!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка серебряных часов в Москве</h1>
</div>
<div class="nd_block_container">
	<p>
		Серебряные часы – статусный и стильный аксессуар, над которым не властно время. Наручные и карманные часы пользовались популярностью в XIX-XX веках, а сегодня являются распространенным предметом коллекционирования. Купить серебряное изделие – мечта многих коллекционеров и инвесторов. А для обладателя антикварного украшения – скупка серебряных часов – это возможность быстро и без дополнительных сложностей продать актив и поправить свое финансовое положение.
	</p>
	<p>
		«Первый ювелирный ломбард» осуществляет скупку серебра в Москве на выгодных условиях. Преимущества сотрудничества с компанией:
	</p>
	<ul>
		<li>объективная оценка изделия, учитывается не только проба и вес металла, но также историческая и художественная ценность часов</li>
		<li>принимается серебро любой пробы </li>
		<li>цена грамма металла соответствует его рыночной стоимости</li>
		<li>серебряные часы можно оставить под залог, получив в заем необходимую сумму денег, или сдать без права выкупа, в любом случае клиент получает справедливую цену за антикварную вещь</li>
		<li>условия сотрудничества честные и прозрачные </li>
		<li>моментальный расчет</li>
		<li>индивидуальный подход к каждому клиенту</li>
		<li>конфиденциальность сделки</li>
		<li>сохранность переданных под залог изделий</li>
	</ul>
	<p>
		Ломбард выстраивает отношение с клиентами на взаимовыгодных условиях, рассчитывая на долгое сотрудничество. Наши специалисты окажут помощь в оценке изделия, предоставят необходимые консультации. При этом нет необходимости принимать решение моментально.
	</p>
	<p>
		Мы сохраняем тайну сделки. Клиенты могут демонстрировать изделие, не опасаясь разглашения информации. Нам важна репутация, поскольку лучшая реклама – это высокая оценка нашей работы довольных клиентов.
	</p>
	<p>
		Если необходимы дорого продать старинные серебряные часы, отделения «Первого ювелирного ломбарда» всегда к вашим услугам.
	</p>
	<div class="nd_block_01">
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
		"TITLE" => "Стоимость серебра"
	)
);?>
		</div>
	</div>
	 <?$APPLICATION->IncludeFile(
	"/include/lombard_catalog.php",
	Array(),
	Array("MODE"=>"php") 
);?>
</div>
		<!--end text-default--><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>