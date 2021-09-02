<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать белое золото дорого в Москве, выгодно сдать белое золото — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка белого золота ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка белого золота");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка белого золота</h1>

	<p>Желающие сдать белое золото в ломбард должны знать ряд особенностей, важных для оформления сделки.</p>

	<h2>Состав</h2>

	<p>В составе белого золота могут присутствовать в разных пропорциях добавочные металлы – от никеля, палладия до платины, серебра, которые и придают изделиям белый оттенок, прочность, износостойкость. Процентное количество драгметалла в сплаве определяет пробу ювелирного украшения.</p>

	<p>Ювелиры высоко ценят материал, позволяющий создавать сложные по форме и дизайну ювелирные шедевры. Кольца с бриллиантами из благородного металла стали символом высокого статуса в обществе, величия, успеха. Такие изделия всегда в тренде, их возможно дорого сдать в ломбарде.  </p>

	<h2>Особенности продажи</h2>

	<p>Из-за сложности оценки изделий из белого золота не каждый ломбард их берет в скупку. Определить процент чистого благородного металла в нестандартном сплаве требует от специалиста высокого профессионализма, специального оборудования и реактивов. Помимо этого, при сдаче драгоценного изделия может выясниться несоответствие указанной пробе, что создает некоторые трудности для оформления сделки.</p>

	<p>Стоимость 1 грамма</p>

	<p>Цена золотых украшений, лома зависит от нескольких факторов:</p>
	<ul>
		<li>от пробы (обычно 585, 750): чем выше проба – тем дороже изделие. Исключение – драгметалл с добавлением платины: стоимость украшения пробы 585 будет намного дороже 1 грамма пробы 750. При покупке такой драгоценности важно быть уверенным в репутации производителя;</li>
		<li>скупка белого золота предполагает оценку в том числе внешнего вида изделия и т.д.</li>
	</ul>

	<p>Чтобы узнать, насколько выгодно вы можете продавать золото в Москве, какие изделия из драгметалла покупает «Первый Ювелирный Ломбард», позвоните нам. Консультируем подробно, отвечаем на интересующие вопросы, актуальный прайс поможет прицениться.</p>

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
