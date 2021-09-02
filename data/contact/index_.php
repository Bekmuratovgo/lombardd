<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Адреса ломбардов Первый Ювелирный. Ломбарды рядом с метро в Москве - Адреса скупок золота');
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", 'Сеть лицензированных ювелирных ломбардов рядом со станциями метро. Удобное расположение подробное описание проезда к ломбарду. Карта и адреса ломбардов различных районах Москвы');
$APPLICATION->SetTitle("Адреса отделений ломбарда");
?>

<div class="office__blocks">
	<div class="office__block office__block_left js-fixed-left">
		<div class="tabs tabs_office">
			<div class="tabs__list" role="tablist" aria-label="Office">
				<button class="tabs__button" role="tab"
						aria-selected="true"
						aria-controls="tab1"
						id="first">
						На карте города
				</button>
				<button class="tabs__button" role="tab"
						aria-selected="false"
						aria-controls="tab2"
						id="second"
						tabindex="-1">
					На схеме метро
				</button>
			</div>
			<div class="tabs__content" tabindex="0"
				 role="tabpanel"
				 id="tab1"
				 aria-labelledby="first">
				<div class="office__map" id="js-office-map" data-center="55.7722533, 37.5714684" data-zoom="10"></div>
			</div>
			<div class="tabs__content" tabindex="-1"
				 role="tabpanel"
				 id="tab2"
				 aria-labelledby="first" hidden>
				<div class="office__karta">
					<a href="/tpl/images/metro_map.png" data-fancybox>
						<img src="/tpl/images/metro_map.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="office__block office__block_right js-office-right">

		<div class="tabs tabs_map">
			<ul class="tabs__links">
				<li>
					<a href="#js-tabs__item-1" class="tabs__link  js-tabs__link  active" data-title="Отделения ломбардов Первый ювелирный в Москве"data-icon="icon_star"><span class="icon icon_star"></span><span>В Москве</span></a>
				</li>
				<li>
					<a href="#js-tabs__item-2" class="tabs__link  js-tabs__link" data-title="Отделения ломбардов Первый ювелирный в Новосибирске" data-icon="icon_nn"><span class="icon icon_nn"></span><span>В Новосибирске</span></a>
				</li>
				<li>
					<a href="#js-tabs__item-3" class="tabs__link  js-tabs__link" data-title="Отделения ломбардов Первый ювелирный в Краснодаре" data-icon="icon_kk"><span class="icon icon_kk"></span><span>В Краснодаре</span></a>
				</li>
			</ul>
			<div class="tabs__content">
				<div class="tabs__item  js-tabs__item  active" id="js-tabs__item-1">
					<div class="office__items">
						<?
						$GLOBALS["arrFilter"] = array("SECTION_ID" => 74);
						?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"metro",
							Array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"CACHE_FILTER" => "Y",
								"CACHE_GROUPS" => "Y",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "N",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(""),
								"FILTER_NAME" => "arrFilter",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "1",
								"IBLOCK_TYPE" => "content",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "Y",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "50",
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
								"PROPERTY_CODE" => array("CORDS",""),
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
								"SORT_ORDER2" => "ASC",
								"STRICT_SECTION_CHECK" => "N"
							)
						);?>
					</div>
				</div>
				<div class="tabs__item  js-tabs__item" id="js-tabs__item-2">
					<div class="office__items">
						<?
						$GLOBALS["arrFilter"] = array("SECTION_ID" => 75);
						?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"metro",
							Array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"CACHE_FILTER" => "Y",
								"CACHE_GROUPS" => "Y",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "N",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(""),
								"FILTER_NAME" => "arrFilter",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "1",
								"IBLOCK_TYPE" => "content",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "Y",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "50",
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
								"PROPERTY_CODE" => array("CORDS",""),
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
								"SORT_ORDER2" => "ASC",
								"STRICT_SECTION_CHECK" => "N",
								"ANOTHER" => "Y"
							)
						);?>
					</div>
				</div>
				<div class="tabs__item  js-tabs__item" id="js-tabs__item-3">
					<div class="office__items">
						<?
						$GLOBALS["arrFilter"] = array("SECTION_ID" => 76);
						?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"metro",
							Array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"CACHE_FILTER" => "Y",
								"CACHE_GROUPS" => "Y",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "N",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(""),
								"FILTER_NAME" => "arrFilter",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "1",
								"IBLOCK_TYPE" => "content",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "Y",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "50",
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
								"PROPERTY_CODE" => array("CORDS",""),
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
								"SORT_ORDER2" => "ASC",
								"STRICT_SECTION_CHECK" => "N",
								"ANOTHER" => "Y"
							)
						);?>
					</div>
				</div>
			</div>
		</div>



	</div>
	<div class="office__about js-about">
		<div class="office__item">
			<div class="office__left">
				<span class="icon icon_first"></span>
				<div class="office__title">
					Офис компании
				</div>
				<ul class="office__list">
					<li class="office__list-item">
						<a href="tel:+74952120674">+74952120674</a>
					</li>
					<li class="office__list-item">
						<a href="mailto:info@lombardd.ru">info@lombardd.ru</a>
					</li>
					<li class="office__list-item ">Москва, ул. Пресненский вал, 27, стр.
						15
					</li>
				</ul>
			</div>
			<div class="office__right">
				<ul class="office__list office__list_red">
					<li class="office__list-item">10.00 - 19.00</li>
					<li class="office__list-item">СБ, ВС - выходной</li>
				</ul>
			</div>
		</div>
		<div class="office__item">
			<div class="office__left">
				<div class="office__title">
					Реквизиты
				</div>
				<ul class="office__list">
					<li class="office__list-item">
						<strong>ООО «Первый ювелирный ломбард»</strong> <br>
						ОГРН 1147746123436 <br>
						ИНН 7703805756 <br>
						Номер свидетельства о постановке на специальный учет: 0160025346
					</li>
					<br>
					<li class="office__list-item">
						<strong>ООО «Первый ювелирный»</strong> <br>
						ОГРН 1147746414639 <br>
						ИНН 7703809447
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>