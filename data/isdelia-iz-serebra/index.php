<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Скупка серебра по выгодным ценам, продать лом серебра дорого в Москве — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", '★ Скупка серебра в Москве ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Скупка серебра в Москве");
?><!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка серебра в Москве</h1>
	<p>
		 Серебро – металл, обладающий уникальной эстетикой и устойчивостью к коррозии. Его повсеместно используют ювелиры, привлекают к изготовлению коллекционных монет, техники и посуды. Драгметалл считают разумным капиталовложением, ведь продать столовое серебро и даже сломанные серебряные украшения можно в любой момент.
	</p>
 <br>
	<div class="price">
		<div class="price__blocks">
			<div class="price__block" style="width: 100%">
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
		"TITLE" => "Цены на серебро"
	)
);?>
				</div>
			</div>
		</div>
	</div>
	<h3>Скупка серебра в Москве</h3>
	<p>Залог и скупка изделий из серебра &ndash; одно из основных направлений деятельности нашего ломбарда.</p>
	<p>15 отделений, работающих в разных точках города, принимают:</p>
	<ul>
		<li>ювелирные изделия &ndash; новые и старые серебряные украшения;</li>
		<li>серебряные монеты разного года выпуска;</li>
		<li>предметы быта и интерьера из серебра &ndash; посуду, статуэтки;</li>
		<li>лом из серебра.</li>
	</ul>
	<p>По выбору клиента, изделия из драгоценного металла можно оставить &laquo;в займ&raquo; или продать без права обратного выкупа. В первом случае вы передаете драгоценность в хранилище ломбарда до того момента, пока не сможете погасить взятую сумму. Если в течении времени, прописанного договором, клиент оказывается не в состоянии погасить займ, ломбард готов идти на уступки &ndash; мы продлим кредитное время или же реализуем изделия, в зависимости от желания клиента.</p>
	
	<h3>Особенности оценки и стоимость серебра за грамм</h3>
	<p>Главное преимущество &laquo;Первого ювелирного ломбарда&raquo; заключается в честных, прозрачных условиях сотрудничества. Обращаясь к представителям компании, клиент может рассчитывать на объективную оценку металла. Экспертиза изделия ориентируется на ряд факторов:</p>
	<ul>
		<li>Качество пробы: мы принимаем как стандартное серебро 875 пробы, так и чистейшее серебро 999 пробы и другие пробы;</li>
		<li>Актуальная ценовая политика биржи;</li>
		<li>Состояние и вес драгметалла.</li>
	</ul>

	<h3>Преимущества «Первого ювелирного ломбарда»</h3>
 <br>
	<br>
	 <!--start merit-->
	<div class="merit">
		 <?$APPLICATION->IncludeFile(
		SITE_DIR."include/loan_desc.php",
		Array(),
		Array("MODE"=>"text")
	);?>
	</div>
	 <!--end merit-->
	<p>
		 Наша компания стремительно развивается, расширяет клиентскую базу, открывает на территории Москвы новые филиалы. Залог успеха ломбарда объясняется выгодной ценовой политикой, честностью экспертных оценок, готовностью договариваться и не ущемлять интересы клиента.
	</p>
	<p>
		 Сотрудничество с нами предполагает:
	</p>
	<ul>
		<li>моментальные выплаты денежных средств;</li>
		<li>низкие процентные ставки по займам;</li>
		<li>полную конфиденциальность сделок;</li>
		<li>надежную сохранность драгоценностей, переданных под залог;</li>
		<li>удобные месторасположения и график работы отделений.</li>
	</ul>
	<p>
		 Детальную информацию о залоге и скупке серебра предоставят менеджеры фирмы. Посетите наш филиал или свяжитесь с ломбардом по указанным контактным данным!⁠
	</p>
	 <?$APPLICATION->IncludeFile(
	"/include/lombard_catalog.php",
	Array(),
	Array("MODE"=>"php") 
);?>
</div>
		<!--end text-default--><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>