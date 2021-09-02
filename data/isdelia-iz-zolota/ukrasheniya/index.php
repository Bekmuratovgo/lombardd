<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать золотые украшения дорого");
$APPLICATION->SetPageProperty("description", "★ Продать золотые украшения дорого ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Продать золотые украшения дорого");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Продать золотые украшения дорого</h1>

	<p>Эксклюзивное, дорогое украшение с драгоценным камнем и высокой пробой — это не только статусный аксессуар, но и хорошее вложение в свое будущее. Продать золотое украшение в Москве дорого можно практически везде, так что проблем с получением денег в трудной жизненной ситуации у вас никогда не возникнет. Изделия не дешевеют годами, они не подвержены инфляции, а их обладатели всегда могут найти покупателя.</p>

	<p>Скупка золотых изделий в Москве дорого осуществляется сетью ломбардов «Первый Ювелирный Ломбард». Мы произведем выкуп и украшений в хорошем состоянии, и лома, и антикварных вариантов. В данный момент покупка аксессуаров из золота ведется по нескольким направлениям:</p>
	<ul>
		<li>подвески;</li>
		<li>серьги;</li>
		<li>кольца;</li>
		<li>браслеты;</li>
		<li>золотой лом.</li>
	</ul>

	<h2>Критерии оценки</h2>

	<p>Мастер, проводя оценку, обязательно учитывает не только явные параметры изделия: пробу и вес, но и вторичные. Ко вторичным относят обычно ценность камня, вставленного в вещь и бренд, который ювелирное украшение выпустил. Многие оценщики опускают эти критерии, хотя из-за них цена продукта может увеличиться в разы.</p>

	<p>Продать золотое изделие в Москве дорого сложно из-за возрастающего числа случаев мошенничества. Частные конторы занижают ценник, покупая полноценное украшение по цене лома. Они же могут оценить изделие и не выплатить денег совсем. Наша компания имеет лицензию на ведение деятельности, поэтому выкуп будет быстрым, честным и конфиденциальным.</p>

	<p>Эксперты «Первого Ювелирного Ломбарда» оценивают каждое изделие отдельно, принимая во внимание не только его вес и пробу, но и историческую ценность, уникальность. На сайте lombardd.ru вы можете заказать онлайн оценку, и специалист назовет ориентировочную стоимость по фотографии перед продажей. Это делает компанию доступной и ориентированной на интересы клиента.</p>
	
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
