<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Скупка аффинированного золота в Москве, выгодно сдать аффинажное золото — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Аффинаж золота ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Аффинаж золота");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Аффинаж золота</h1>

	<p>Очищенное от примесей и взвесей золото - это аффинажное золото. Переработкой (аффинажем) благородного металла занимаются организации-переработчики, включенные в утвержденный правительством РФ список. Такое золото используют в электротехнике (создают высокоточные схемы), в стоматологии (изготавливают золотые коронки), в ювелирном искусстве (творят украшения оригинального дизайна). Внесением лигатуры серебра и других металлов в чистое золото получается сплав необходимого оттенка и пробы. Расскажем об основных способах аффинирования, сырье, возможностях продажи.</p>

	<h2>Аффинажное сырье</h2>

	<p>Аффинаж золота начинается с подготовки сырья. В этом качестве могут использоваться содержащие драгоценный металл изделия:</p>
	<ul>
		<li>ювелирный и технологический лом;</li>
		<li>самородки, шлиховое золото, серебряная пена; </li>
		<li>позолоченные предметы;</li>
		<li>радиодетали, др.</li>
	</ul>

	<p>Аффинируют металл разного вида и состояния. </p>

	<h2>Технология</h2>

	<p>Существует 3 основных способа очистки золота от примесей:</p>

		<li>химический: метод характерен применением одного из химических элементов – цинка, меди, хлорного железа и т.д.;</li>
		<li>сухой способ: в нем используется хлор;</li>
		<li>метод электролиза.</li>
	<p>В зависимости от рабочей цели, компания-переработчик золота выбирает аффинированный метод. Сам процесс трудоемок, длителен, в нем участвуют квалифицированные специалисты, владеющие новыми технологиями и профессиональным оборудованием.</p>

	<p>«Первый Ювелирный Ломбард» скупает аффинированное золото, на котором стоит клеймо компании-переработчика, в любом виде по выгодной цене. В наших отделениях в Москве подробно консультируем, бесплатно оцениваем изделия из благородного металла, оперативно оформляем заем. С нами оперативно, выгодно, надежно решаются финансовые проблемы!</p>
	
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
