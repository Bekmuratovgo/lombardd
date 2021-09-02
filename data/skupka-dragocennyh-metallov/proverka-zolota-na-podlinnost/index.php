<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Проверить золото на подлинность, проверка золота в Москве — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", '★ Проверка золота на подлинность ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Проверка золота на подлинность");
?><!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Проверка золота на подлинность</h1>

	<p>Покупать золотые украшения рекомендуется в специализированных ювелирных магазинах. Это застрахует вас от подделок. Однако, в жизни нередко случаются ситуации, когда выгоднее купить золото с рук. В этом случае возможна проверка золота на подлинность в домашних условиях. Достаточно знать несколько проверенных способов.</p>

	<h2>Как проверить подлинность золота в домашних условиях?</h2>

	<p>Проверка подлинности золотого изделия основана на знании свойств благородного металла.</p>
	<ul>
		<li>Золото – мягкий металл. В процессе эксплуатации колец, браслетов, серег, реже цепочек на поверхности образуются царапины и вмятины. Попробуйте царапнуть изделие или надкусить. На золоте обязательно останется след. </li>
		<li>Золото не притягивается к магниту. Найти под рукой магнит не сложно – магнитные части есть в динамике, дома и в офисе имеются сувенирные магниты. </li>
		<li>Золото не имеет характерного запаха металла. Потрите золотое изделие в руках, а затем понюхайте. Если уловите металлический запах, перед вами подделка. </li>
		<li>Нанесите на золотую поверхность йод. Золото вступит в реакцию с йодом, в результате чего образуется пятно. Ни один другой металл с йодом не взаимодействует. Убрать пятна поможет обычная «Coca Cola». Достаточно выдержать изделие в напитке в течение получаса. </li>
		<li>Оригинальность и пробу изделия подтверждает клеймо – официальный государственный знак, который проставляется на украшении. Оттиск должен быть четким. Если это не так, стоит начать сомневаться.</li>
	</ul>

	<p>Попробуйте несколько методов. Если хотя бы один из них укажет на подделку, лучше отложить сделку и проверить изделие у профессиональных оценщиков. В нашем ломбарде вы всегда можете проверить ваше украшение и узнать его реальную цену.</p>
	
	<div class="price">
		<div class="price__blocks">
			<div class="price__block" style="width: 100%">
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
							"TITLE" => "Цены на золото"
						)
					);?>
				</div>
			</div>
		</div>
	</div>
	
<?$APPLICATION->IncludeFile(
	"/include/lombard_catalog.php",
	Array(),
	Array("MODE"=>"php") 
);?>
</div>

		<!--end text-default--><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
