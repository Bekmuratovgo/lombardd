<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать золото 999 пробы дорого в Москве, выгодно сдать золото 999 пробы — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка золота 999 пробы ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка золота 999 пробы");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка золота 999 пробы</h1>

	<p>Золото 999 - высшей пробы, чистый сплав, самое ценное и дорогое. Хранится в виде слитков, является долгосрочным вложением, которые возможно активировать в ломбарде. Для желающих превратить ценности в большие наличные деньги такую возможность предоставляет скупка золота 999 пробы. Продажа слитка в Москве выгодна тем, что в столице предлагают самую высокую цену. </p>

	<h2>Как все происходит</h2>

	<p>Стоимость драгметалла, определяемая Лондонской биржей, зависит главным образом от курса доллара. Когда на мировых биржах курс доллара снижается, цена на желтый металл автоматически повышается. Такая тенденция сохраняется десятки лет. Колебания, изменения курсов происходят ежедневно. Благородный металл является самой дорогой стабильной «валютой», хорошим долгосрочным вложением, поэтому его покупка, продажа становится надежной инвестицией. </p>

	<p>В ломбардах предлагают разные расценки за слиток. Прицениться, сравнить предложения, выбрать тарифный план в случае займа возможно по прайсам компаний. </p>

	<p>Процедура скупки благородного металла включает несколько этапов:</p>
	<ul>
		<li>посещение ломбарда, куда клиент приносит изделие;</li>
		<li>экспертная оценка с применением щадящих реактивов, современного спецоборудования, определение стоимости за 1 грамм драгметалла;</li>
		<li>выбор тарифного плана, если золотой предмет сдается под заем, или условий сделки, если изделие собираетесь продавать;</li>
		<li>оформление договора;</li>
		<li>оперативное получение денег.</li>
	</ul>

	<p>Ломбард дорого скупает лом или слитковое золото 999 пробы – продать выгодно золотые предметы легко, обратившись в одно из отделений «Первого Ювелирного Ломбарда». Высоко оцениваются ювелирные украшения из чистого золота (таких немного, поскольку чистый драгметалл недостаточно прочный, это свойство компенсируется толщиной изделия), украшенные вставками серебра.</p>

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
