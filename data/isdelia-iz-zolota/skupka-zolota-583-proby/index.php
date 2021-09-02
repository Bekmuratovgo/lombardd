<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать золото 583 пробы дорого в Москве, выгодно сдать золото 583 пробы — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка золота 583 пробы ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка золота 583 пробы");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка золота 583 пробы</h1>

	<p>В разных жизненных ситуациях может понадобиться продать золото 583, ломбард примет его по цене за грамм в процентах относительно ставки Центробанка за 999 пробу. Числовое значение расшифровывается, как 58,3% золота в сплаве. Стоимость определяется исходя именно из содержания драгоценного металла.</p>

	<p>Маркировка 583 чаще всего встречается на украшениях времен СССР. Они обычно устаревшие и не интересуют своих хозяев в качестве декоративных, их часто несут на оценку и собираются продавать. Изделия, или лом - все можно выгодно сдать, если обратиться в компанию «Первый Ювелирный Ломбард».</p>

	<p>Чаще всего попадаются обручальные кольца, которые достаются по наследству от бабушек. Не в нашей традиции повторное использование обручальных колец. Поэтому обычно их либо хоронят вместе с усопшим, либо относят в ломбард. Родственников прайс за грамм может приятно удивить и стать подспорьем в траурных расходах.</p>

	<p>Скупка золотых ювелирных изделий 583 пробы соответствует законодательству, оформляется соответствующими документами. Для оформления нужен паспорт гражданина не младше 18 лет, который лично присутствует при операции оценки. Все это происходит при наличии специального метрического оборудования со всеми сертификатами. Компания обеспечивает клиентам безопасность, конфиденциальность и адекватную оценку.</p>

	<p>Если Вас интересует скупка золота 583 в Москве дорого по выгодной цене, то звоните +7 (495) 212-06-74. Наши опытные сотрудники подскажут где территориально ближайшее отделение, какая цена на грамм и точно распишут всю процедуру оценки и получения денег.</p>
	
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
