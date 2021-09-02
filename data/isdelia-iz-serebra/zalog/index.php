<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Залог серебра");
$APPLICATION->SetPageProperty("description", "★ Залог серебра ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Залог серебра");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Залог серебра</h1>

	<p>Никто не застрахован от непредвиденных ситуаций, когда приходиться заложить серебро в ломбард. «Первый Ювелирный Ломбард» предлагает выгодный клиенту прайс и быстрое оформление займа. Ломбарды расположены по всей Москве, в пешей доступности от метро.</p>

	<p>Стоимость сданной вещи рассчитывается в основном исходя из пробы за грамм веса. Немаловажным фактором станет принадлежность украшения к известному бренду или мастерской. Нужно быть готовым к тому, что цена, предложенная в ломбарде, будет намного ниже рыночной. Дело в том, что магазин делает большую наценку, да и в тариф в итоге входит работа мастера, эксклюзивность украшения и общий вид изделия. Когда происходит залог серебра, эти факторы не учитываются.</p>

	<h2>Где могут взять серебро под залог</h2>

	<p>Если вам необходимо заложить драгоценность или столовое серебро, следует оценить свою возможную прибыль. В «Первом Ювелирном Ломбарде» вы можете получить оценку онлайн. Для этого следует написать экспертам, приложив к письму:</p>
	<ul>
		<li>хорошие фото изделия с разных ракурсов;</li>
		<li>проба;</li>
		<li>вес;</li>
		<li>информацию о производителе.</li>
	</ul>

	<p>После этого наши эксперты огласят предварительную стоимость изделия, которая в итоге может немного отличаться от фактической. После этого вы также можете рассмотреть другие цены на данные услуги по Москве. Не стоит сдавать частным лицам, у них сильно заниженная стоимость по сравнению с официальными компаниями.</p>

	<p>При покупке стоит понимать, что реальная цена серебра будет гораздо ниже заявленной.  И хоть год от года стоимость ювелирных работ не падает, купите изделие за явно большие деньги, чем продадите. Поэтому важно выбрать ломбард, который сделает действительно выгодное предложение и сможет максимально возместить ваши убытки.</p>
	
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
