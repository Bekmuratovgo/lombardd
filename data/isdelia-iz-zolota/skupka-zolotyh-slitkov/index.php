<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать золотой слиток дорого в Москве, выгодно сдать золотые слитки — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка золотых слитков ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка золотых слитков");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка золотых слитков</h1>

	<p>Популярным видом инвестировать деньги остается скупка золотых слитков. Это защищает от финансовых кризисов, надежно хранит крупные капиталы, превращает золото в реальные деньги (достаточно сдать слиток в ломбард). </p>

	<h2>Покупка золота в слитке</h2>

	<p>Учитывайте наши советы:</p>
	<ul>
		<li>приобретать изделия необходимо в надежном банке, обладающем разрешением на операции с драгметаллами;</li>
		<li>вес слиткового золота стандартный (10, 50, 100 г), количество благородного металла, определяющее пробу, - 999;</li>
		<li>юридическое сопровождение сделки: сертификат подлинности желтого металла, наличие на изделии товарного знака завода-изготовителя, клейма пробы.   </li>
	</ul>

	<p>При росте цены за 1 грамм чистого золота на мировом рынке продавать такое приобретение выгодно: получаете высокую прибыль.</p>

	<h2>Продажа – предложения от «Первого Ювелирного Ломбарда»</h2>

	<p>Парадокс продажи золотого слитка в том, что не каждый банк выкупает его или выдвигает требования, не учтенные при покупке. В поисках решения, куда сдать слитковое золото и получить за него деньги, часто останавливаются на скупке. </p>

	<p>Выгодные предложения «Первого Ювелирного Ломбарда»:</p>
	<ul>
		<li>принимаем дорого слитки, лом драгоценного металла, золотые монеты, ювелирные украшения;</li>
		<li>оперативно оформляем сделки: не более десяти минут, расчет на месте;</li>
		<li>квалифицированная оценка, быстрое обслуживание, высокая цена 1 грамма драгметалла;</li>
		<li>удобное расположение отделений. </li>
	</ul>

	<p>Компания покупает мерные изделия в Москве, соответствующие стандартам, при наличии сертификата, пробы. Самородки не принимаются. Процедура купли-продажи проводится с оформлением кассовых документов. Для наших клиентов: консультация ювелира-эксперта, профессиональная оценка ювелирного украшения, оформление займа по тарифному плану, акции и многое другое.</p>
	
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
