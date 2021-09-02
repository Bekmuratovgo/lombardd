<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Оценка серебрянных изделий в ломбарде, оценить серебро в Москве — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", '★ Оценка серебра в ломбарде ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Оценка серебра");
?><!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Оценка серебра в ломбарде</h1>
	<p>
		Серебро – драгоценный металл с уникальными характеристиками. Из этого драгметалла изготавливают ювелирные изделия, столовые приборы, аксессуары, предметы обихода и интерьерного декора. Особой популярностью пользуется антикварное русское серебро 84 и 88 пробы, изготовленное в период с 1711 до 1927 гг. Сегодня цена его самая высокая.
	</p>
	<p>
		Если вам достался по наследству столовый сервиз, подсвечник или портсигар, вы можете, не выходя из дома, оценить стоимость старинного предмета. Оценка серебра осуществляется онлайн на основании предоставленной клиентом информации.
	</p>
	<h2>От чего зависит стоимость серебра?</h2>
	<p>
		На цену старинных серебряных изделий влияют несколько факторов:
	</p>
	<ul>
		<li>вес</li>
		<li>проба серебра и золота, если используются золотые вставки</li>
		<li>дата изготовления</li>
		<li>изготовитель, имя мастера, мастерской</li>
		<li>состояние предмета</li>
		<li>наличие или отсутствие реставрационных работ</li>
		<li>художественная, историческая, коллекционная ценность </li>
		<li>спрос и предложение на определенный предмет в конкретный промежуток времени</li>
	</ul>
	<p>
		Грамм Ag 84 пробы имеет самую высокую стоимость. Изготовленные в известных мастерских или у именитых мастеров изделия стоят очень дорого. В этом случае цена не зависит от веса, а устанавливается с учетом культурной и духовной ценности экспоната. За грамм осуществляется скупка антиквариата с некачественным исполнением или реставрацией, со значительными поломками и дефектами. Продавать такие предметы сложнее, что и сказывается на цене.
	</p>
	<p>
		Для определения онлайн оценки, от клиента потребуется фотографии изделия или украшения, а также подробная информация о факторах, влияющих на цену. Не следует забывать, что заочная оценка всегда приблизительна и используется в качестве ориентира. Если необходимо совершить реальную сделку, обращайтесь в «Первый ювелирный ломбард» в Москве. Мы предложим вам лучшую цену и наиболее выгодные условия сотрудничества.
	</p>
	
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
		<!--end text-default--><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
