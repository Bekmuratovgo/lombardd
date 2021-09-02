<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Скупка серебра без пробы");
$APPLICATION->SetPageProperty("description", "★ Скупка серебра без пробы ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка серебра без пробы");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка серебра без пробы</h1>

	<p>Серебро без пробы продать может быть достаточно трудно — проблема в том, что с первого взгляда эксперт не может оценить конечную стоимость изделия.  Понадобится специальная экспертиза, которая определит подлинность ювелирной вещи, только после этого состоится продажа. </p>

	<p>«Первый Ювелирный Ломбард» осуществляет скупку и оценку изделий из этого благородного металла в Москве. Наши профессионалы помогут оценить:</p>
	<ul>
		<li>лом;</li>
		<li>столовое серебро;</li>
		<li>посуду;</li>
		<li>статуэтки и фигурки;</li>
		<li>монеты;</li>
		<li>элементы интерьера;</li>
	</ul>

	<h2>Можно ли проверить изделие дома</h2>

	<p>В отсутствии пробы нельзя узнать точное процентное содержание серебра в грамме, однако существуют способы, с помощью которых можно понять подлинность.</p>
	<ul>
		<li>Теплопроводимость. Серебро легко проводит тепло, поэтому стоит опустить предполагаемый металл в кипяток. Вытащенное изделие должно обжигать руки, но быстро остывать и сохранять комнатную температуру.</li>
		<li>Химический способ. Если капнуть на металл йод или уксус, или нанести серную мазь, а потом быстро стереть, место контакта с веществом почернеет.</li>
		<li>Магнит. Серебро не относится к металлам-магнетикам, поэтому примагнититься не сможет.</li>
	</ul>

	<p>Домашняя оценка не даст точных результатов, не позволит получить окончательную стоимость изделия. Если вы боитесь обмана и хотите продать изделие дорого, можно провести эту «экспресс-экспертизу», чтобы знать хотя бы о подлинности украшения. В ломбарде перед покупкой специалисты проведут свои анализы и вынесут вердикт о цене.</p>

	<p>Компания «Первый Ювелирный Ломбард» занимается оценкой изделия комплексно. Мы смотрим на изделие в целом, опираясь на его художественную ценность и вес. Наши специалисты индивидуально рассматривают каждый случай и предлагают выгодные условия для клиента.</p>

	
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
