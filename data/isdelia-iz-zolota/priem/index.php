<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Прием золота в ломбарде");
$APPLICATION->SetPageProperty("description", "★ Прием золота в ломбарде ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Прием золота в ломбарде");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Прием золота в ломбарде</h1>

	<p>С учетом высокой стоимости металла, в Москве часто ведется невыгодный прием золота в ломбарде. Украшения скупают по цене лома, не учитывают стоимость камней, а золотые обручальные кольца и вовсе могут отказаться принять. «Первый Ювелирный Ломбард» учитывает все нюансы украшения клиента и ведет скупку всех видов золота:</p>
	<ul>
		<li>золотой посуды;</li>
		<li>ювелирных украшений;</li>
		<li>золотого лома.</li>
	</ul>

	<p>Сдать украшение в скупку вы можете в любом из отделений нашей компании. Мы дорого оценим не только вес и пробу изделия, но и камни, инкрустированные в него, бренд и потребность потребителя. Наша система формирования цены включает в себя все факторы, которые могут её увеличить. Процедура эта бесплатная и не отнимающая много времени.</p>

	<h2>Факторы оценки</h2>

	<p>Почем обойдется конечная стоимость изделия зависит от ряда характеристик изделия:</p>
	<ul>
		<li>Проба. Показывает процент содержания золота в грамме сплаве. Чем она выше, тем стоимость украшения больше.</li>
		<li>Состояние. Изношенные, сломанные украшения ценятся меньше.</li>
		<li>Драгоценные камни. Эксперт отдельно оценит каждый вставленный кристалл и добавит их цену к цене изделия.</li>
		<li>Мастерская-изготовитель. Особенно ценны украшения, сделанные известными марками: Фаберже или Овчинниковыми.</li>
		<li>Спрос. Привлекательность украшения.</li>
	</ul>

	<p>Несмотря на то, что золотой лом не имеет перечисленных факторов, продать его по высокой цене тоже можно. Его прием ведется наряду с приемом украшений. Он пользуется спросом у ювелиров и мастерских. Возможно, ваши сломанные серьги или кольцо сможет обрести вторую жизнь в руках опытного ювелира.</p>

	<p>Мы бережно относимся к нашим клиентам и их времени, поэтому у нас вы можете заказать онлайн оценку изделия. Обращение в ближайший ломбард тоже не займет много времени: наш эксперт совершенно бесплатно в течение пяти минут назовет выгодную цену. Существует возможность не только продавать, но и оставить украшение под залог.</p>
	
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
