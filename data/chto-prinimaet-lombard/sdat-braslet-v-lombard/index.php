<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "продать золотой браслет в москве, продать золотой браслет, продам серебряный браслет, сдать золотой браслет в ломбард");
$APPLICATION->SetPageProperty("description", '★ Сдать золотой браслет в ломбард ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Скупка золотых браслетов в Москве по высоким ценам, дорого продать браслеты из золота и серебра - «Первый ювелирный ломбард»");
?><div class="text-default">
	<h1 class="promo-title">Сдать золотой браслет в ломбард</h1>
</div>
<div class="nd_block_container">
	<div class="nd_block_01">
		<p>
			Наш ломбард принимает различные виды мужских и женских браслетов - жесткие и мягкие браслеты из золота, серебра или платины.
		</p>
		<p>
			Среди преимуществ сотрудничества с ломбардом можно отметить:
		</p>
		<ul>
			<li>быстроту выдачи займа</li>
			<li>честную оценку изделия</li>
			<li>отсутствие скрытых комиссионных сборов.</li>
		</ul>
		<p>
		</p>
		<p>
		</p>
	</div>
	<div class="nd_block_03">
		<h2>Особенности залога браслетов</h2>
		<p>
			После того, как вы решите сдать золотой или серебряный браслет, оценщик установит стоимость изделия методом объективной оценки характеристик браслета в соответствии с Российскими и Международными нормативными актами. В основе оценки стоимости изделия лежит цена лома. Специалист оценит подлинность драгоценного металла, его пробу, наличие или отсутствие камней.
		</p>
		<p>
			Информация о выводах специалиста будет отражена в залоговом билете, один экземпляр которого передается клиенту, а второй остается в ломбарде. Этот документ необходимо сохранить, так как получить обратно браслеты без него будет практически невозможно.
		</p>
		<p>
			Выдача займа происходит на выгодных условиях - определяйте сами период времени, на который вам необходимы денежные средства, однако рассчитывайте его таким образом, чтобы обязательства по возврату средств были исполнены надлежащим образом.
		</p>
		<p>
			В ломбарде не проявляют интереса к вашим предшествующим кредитным обязательствам. Даже если у вас была плохая кредитная история, займ будет выдаваться на основе оценочной стоимости браслета.
		</p>
		<p>
			Переданное изделие находится под охраной, каждый браслет помещается в ячейку с сигнализацией. В ломбарде гарантируют сохранность переданного в заклад имущества - после выплаты прописанной в залоговом билете вы получите своё украшение в неизменном виде.
		</p>
	</div>
	<div class="nd_block_01">
		 <!-- start price --> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reception_metals_all_rub", 
	array(
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
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
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
		"PROPERTY_CODE" => array(
			0 => "PRICE",
			1 => "",
		),
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
		"TITLE" => "Стоимость драгметаллов",
		"COMPONENT_TEMPLATE" => "reception_metals_all_rub"
	),
	false
);?> <!-- end price -->
	</div>
<?$APPLICATION->IncludeFile(
	"/include/lombard_catalog.php",
	Array(),
	Array("MODE"=>"php") 
);?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>