<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать золото 375 пробы дорого в Москве, выгодно сдать золото 375 пробы — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка золота 375 пробы ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка золота 375 пробы");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка золота 375 пробы</h1>

	<p>Если возникает необходимость сдать золото 375, ломбард примет его по установленной цене. Этот вид золота используется для изготовления ювелирной фурнитуры при производстве изделий из полудрагоценных камней и жемчуга. Также украшения из этого материала популярны в молодежном сегменте. Милое колечко или кулончик в виде сердца на 14 февраля из золота не разорительны даже для студенческого кошелька. А в случае непредвиденных обстоятельств можно сдать подарок в ломбард. Многие откладывают подобные изделия «на черный день», однако стоит предварительно оценить их, чтобы иметь представление о денежном выражении таких накоплений.</p>

	<p>Золотой сплав 375 пробы содержит соответственно 37,5% драгоценного металла. А остальной объем занимают медь, серебро и палладий. Это серьезно удешевляет продукцию, все цепочки, кольца и сережки можно продавать как лом и не потерять в стоимости. Свойства такого сплава отличаются хорошей ковкостью, долговечностью, но сниженной ценностью. В частности, со временем изделия тускнеют.</p>

	<p>Прайс скупки определяется за грамм, это удобно и практично. В случае если точно известен вес украшения, легко определить цену еще в момент просмотра информации на сайте. В Москве для уточнения информации обратитесь по номеру +7 (495) 212-06-74. Профессиональные консультанты ответят на вопросы по сдаче изделий из ценных металлов и сориентируют по ценам и адресам ближайших отделений. Качественная оценка, безопасность и быстрый расчет - визитная карточка нашего ломбарда.</p>
	
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
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
