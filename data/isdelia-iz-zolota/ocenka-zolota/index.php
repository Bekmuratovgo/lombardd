<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Оценка золота");
$APPLICATION->SetPageProperty("description", "★ Оценка золота ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Оценка золота");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Оценка золота</h1>

	<p>Случаи подделки золота на рынке увеличиваются год от года: людей обманывают, продавая вместо качественного украшения поддельную бижутерию. Способов смастерить обманку много: замес примесей в изначальный сплав, позолота, подкрашивание конечного продукта или банальное анодирование. Оценка золотых изделий на предмет подлинности, благодаря работе таких мошенников, стала необходимой услугой.</p>

	<p>Экспертиза проводится мастером, только профессиональный оценщик скажет вам точную стоимость ювелирного изделия. Цена за эту услугу разнится в салонах Москвы, а в «Первом Ювелирном Ломбарде» можно предварительно оценить украшение бесплатно.</p>

	<h2>Факторы, влияющие на стоимость</h2>

	<p>Для того, чтобы самому примерно понять сколько стоит вещь и определить её подлинность, следует разобраться в некоторых важных моментах. Первый из них — маркировка, она одна из важнейших характеристик золотого изделия. Ставят пробу в незаметном для чужих глаз месте, чтобы не портить общий вид продукта. Она определяет процентное содержание в сплаве чистого золота, иногда рядом с ней стоит клеймо мастерской или завода-производителя.</p>

	<p>Но не на одном составе сплава базируется окончательная оценка золота. В цену входит и ряд других факторов:</p>
	<ul>
		<li>масса украшения;</li>
		<li>имя мастерской-изготовителя;</li>
		<li>отсутствие потертостей и общее качество;</li>
		<li>ограниченность партии;</li>
		<li>коллекционная ценность.</li>
	</ul>

	<p>Не всегда более увесистое украшение будет стоить дороже. Также наивно полагать, что кольцо 999 пробы, пробы чистого золота, будет самым дорогим. Зачастую цена выше на эксклюзивные вещицы, принадлежащие рукам мастеров из прославленных мест. Наиболее значимым будет украшение, несущее более ценный культурный код.</p>

	<p>«Первый Ювелирный ломбард» поможет вам определиться с конечной стоимостью изделия. У нас вы можете заказать экспертизу. Наши профессиональные оценщики учтут все нюансы конкретного случая и предложат клиенту наилучшую цену и самые удобные условия сотрудничества.</p>

	
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
<!--end text-default-->
<br /><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
