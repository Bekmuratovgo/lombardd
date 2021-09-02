<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать лом золота дорого");
$APPLICATION->SetPageProperty("description", "★ Продать лом золота дорого ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Продать лом золота дорого");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Продать лом золота дорого</h1>

	<p>Продать лом золота дорого в Москве гораздо сложнее, чем продать полноценное украшение. Дело в том, что при оценке учитываются не только вес изделия и его проба, но и качество изготовления, производитель и эксклюзивность конечного продукта.</p>

	<p>Скупкой лома занимаются ювелирные мастерские и заводы, которым больше важен материал, нежели искусность выполнения. «Первый Ювелирный Ломбард» осуществляет выгодный выкуп золота у клиентов. Наши мастера быстро, точно и бесплатно определят пробу изделия и назовут сумму, которую тут же выплатят, если клиента она устроит.</p>

	<h2>От чего зависит стоимость лома</h2>

	<p>Так как эстетической привлекательности золотой лом уже не имеет, основная его цена складывается от пробы. Ломбард принимает золото:</p>
	<ul>
		<li>без пробы;</li>
		<li>375;</li>
		<li>583;</li>
		<li>585;</li>
		<li>750;</li>
		<li>999.</li>
	</ul>

	<p>Чем выше проба, тем большее содержание чистого золота в сплаве. Расценки формируются соответствующе: так, за грамм золота 375 пробы ломбард заплатит около 1000 рублей, а за грамм драгоценного металла 999 — 1600 рублей. Бывает, что маркировка на изделии попросту отсутствует, например, когда у вас в руках есть только часть золотого предмета или он относится к старинному антиквариату. Не имеет клейма и стоматологической золото или украшение, созданное частным мастером. В этом случае ломбард может принять только от 200гр драгоценного металла, оценка осуществляется по внешнему виду изделия.</p>

	<p>Предварительную оценку изделия наши мастера могут провести по фотографии, если клиент хочет знать стоимость драгоценного изделия немедленно. Для этого фото золотого предмета со всех ракурсов, а также информацию о весе нужно отправить через форму на сайте lombardd.ru.</p>

	<p>Компания «Первый Ювелирный Ломбард» осуществляет скупку золота и выдачу денег под залог в 15 филиалах по всей Москве. Наши специалисты на месте быстро и бесплатно оценят украшения и определят условия, выгодные и оптимальные для каждого клиента. Также осуществляется прием золота под заем без выкупа.</p>
	
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
