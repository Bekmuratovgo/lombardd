<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать золото без пробы дорого в Москве, выгодно сдать золото низкой пробы — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка золота без пробы ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка золота без пробы");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка золота без пробы</h1>

	<p>Золото приходит в нашу жизнь не только через ювелирные магазины. Его получают по наследству, в качестве подарка, приобретают у приватных ювелиров. В таких случаях на изделиях может не быть характерного клейма - пробы. О том, как и куда сдать золото без пробы, когда возникает потребность в улучшении материального положения, расскажем дальше. </p>

	<h2>Причины отсутствия пробы на золотом украшении</h2>

	<p>Причин, по которым изделие из благородного металла не имеет пробы, может быть много. Перечисляем основные:</p>
	<ul>
		<li>антикварное украшение, изготовленное во времена, когда не существовало специальных требований к маркировке;</li>
		<li>фрагмент изделия, на котором нет пробирования;</li>
		<li>деформация драгоценности, при которой проба не распознается;</li>
		<li>стоматологическое золото, которое изначально без клейма;</li>
		<li>реставрированное изделие, ручное изготовление, куплено в странах, где немаркированное золото не запрещено, др. </li>
	</ul>

	<p>Кроме того, клеймо на старинных драгоценных предметах стирается из-за свойств металла.</p>

	<h2>Продажа</h2>

	<p>В ломбард возможно сдавать золото без пробы от 200 граммов. Таковы условия скупки желтого металла. Продавать лом можно ювелирному заводу, мастерской, законно работающим на этом рынке, имеющим соответствующие разрешения и лицензии. </p>

	<p>Прием изделия в ломбарде сопровождается определенной процедурой: производится оценка внешнего вида, марки, наличия камней. Под залог выдают деньги – сумму, установленную оценщиком. </p>

	<p>На цену 1 г золота без пробы влияют:</p>
	<ul>
		<li>регион, где находится ломбард: в Москве возможно сдать желтый металл наиболее дорого;</li>
		<li>стоимость золота на мировых биржах, курс доллара;</li>
		<li>внешний вид украшения, др.</li>
	</ul>

	<p>В отделениях «Первого Ювелирного Ломбарда» принимают золото под заем, без выкупа. Сделка оформляется документально в офисе компании.</p>
	
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
