<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Скупка серебряных украшений по выгодным ценам, продать серебряные украшения в Москве — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка серебряных украшений ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка серебряных украшений");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка серебряных украшений</h1>

	<p>Украшения из серебра во все времена пользовались повышенным спросом и популярностью. Серебро прекрасно выглядит в ювелирных изделиях, относительно не дорого стоит, если сравнивать с золотом и платиной, обладает антибактериальными свойствами. Серьги, кольца, браслеты, цепочки из серебра может позволить себе каждый. Если же драгоценность наскучила, сломалась, перестала радовать или срочно понадобились деньги, продать серебряные украшения не составит труда. Сегодня эту услугу предоставляют многие скупки, ломбарды, ювелирные мастерские и магазины, поэтому вопрос, куда сдавать украшения, не возникнет.</p>

	<h2>Как осуществляется скупка?</h2>

	<p>Прежде чем продать украшения, определитесь со своими желаниями. Необходимо понимать, вы хотите навсегда избавиться от изделий или вам необходимы деньги, но с драгоценностями или антикварными вещами навсегда расставаться жалко. В первом случае вам подойдет скупка украшений из серебра, во втором – ломбард. В скупку принимаю металл без права последующего выкупа. Ломбард будет хранить ваши изделия до того времени, пока вы не будете в состоянии выкупить ваши драгоценности. За это необходимо платить заведению определенный процент.</p>

	<p>Цена за грамм зависит от пробы или содержания чистого металла в сплаве. Принимаются изделия 875, 925, 999 проб. Серьезные компании всегда осуществляют оценку с применением специальных приборов и способов в присутствии продавца. Такой подход исключает мошенничество и ошибки.</p>

	<p>«Первый ювелирный ломбард» гарантирует лучшие условия для сотрудничества в Москве:</p>
	<ul>
		<li>точное определение пробы</li>
		<li>честный вес</li>
		<li>законность и конфиденциальность</li>
		<li>моментальный расчет</li>
	</ul>
	
	<p>Принятые изделия используются как лом или для дальнейшей продажи. Если ваши украшения находятся в отличном состоянии, вы всегда можете рассчитывать продать их дорого.</p>
	
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

<?$APPLICATION->IncludeFile(
	"/include/lombard_catalog.php",
	Array(),
	Array("MODE"=>"php") 
);?>
</div>
<!--end text-default-->
<br /><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
