<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Скупка серебра 84 пробы по выгодным ценам, продать серебро 84 пробы в Москве — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка серебра 84 пробы ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка серебра 84 пробы");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка серебра 84 пробы</h1>

	<p>Серебро – драгоценный и относительно дешевый металл с уникальными характеристиками. Широко используется в промышленности, в ювелирном производстве, для изготовления столовых приборов и кухонной утвари. Большим спросом пользуется старинное русское серебро 84 пробы. Золотниковая проба применялась в России до 1927 года. Сегодня продать серебро 84 пробы можно очень дорого, поскольку спрос на антикварные вещи не снижается.</p>

	<h2>Как осуществляется скупка</h2>

	<p>Не все, что найдено на чердаках или досталось в наследство, можно сдать в скупку по выгодной цене. Ценится старинные царские изделия, имеющие историческую, художественную и коллекционную ценность, выполненные в сложных техниках, хорошо сохранившиеся, с клеймом, указывающим на производителя – фабрику, мастерскую, именитого мастера. Антиквариат встречается редко, поэтому ценится очень высоко, цена стартует от стоимости серебра 875 пробы и может в разы превышать ее, что зависит от ценности изделия.</p>

	<p>Остальные неблагородные экземпляры придется продавать по цене обычного лома. </p>

	<p>Специалистов, способных установить истинную ценность старинных вещей, не так много. Если вы обладаете предметами старины из благородных металлов, придется потратить время на поиски профессионалов, знающих как произвести правильную оценку.</p>

	<h2>Преимущества сотрудничества с «Первым украинским ломбардом»</h2>

	<p>Специалисты «Первого ювелирного ломбарда» в Москве имеют огромный опыт работы с антиквариатом. Мы произведем профессиональную оценку с использованием современного оборудования. У нас работаю специалисты, знающие толк в антиквариате. Скупка серебра 84 пробы осуществляется по выгодной для вас цене, соответствующей рыночным условиям. Оценка и консультация клиентов предоставляются бесплатно. </p>

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
