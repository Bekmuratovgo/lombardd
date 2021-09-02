<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать золото 750 пробы дорого в Москве, выгодно сдать золото 750 пробы — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка золота 750 пробы ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка золота 750 пробы");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка золота 750 пробы</h1>

	<p>Золото было и остается самой надежной и стабильной «валютой» в мире. Принесенное в ломбард золото 750 или другой пробы помогает поправить материальное положение «здесь и сейчас». «Первый Ювелирный Ломбард» предлагает воспользоваться услугами по покупке изделий из благородного металла в Москве.</p>

	<h2>Наши выгодные предложения:</h2>
	<ul>
		<li>выдача только наличных. В отделениях бесплатно консультирует ювелирный эксперт, производится профессиональная оценка изделия, быстро оформляется заем;</li>
		<li>высокие расценки за грамм драгметалла;</li>
		<li>оперативность: оформление сделки в офисе, выдача денег занимает не более 10 минут;</li>
		<li>прозрачность условий для клиента: клиент получает на руки полный пакет документов, наличные без удержаний - по заявленной стоимости изделия;</li>
		<li>удобство: погашать проценты возможно через Личный кабинет на нашем сайте. Тут же можно ознакомиться с прайсом, актуальным для посетителей, которые собираются продавать золотые украшения. Оценщик онлайн поможет приблизительно оценить драгоценность;</li>
		<li>постоянные акции.</li>
	</ul>
	
	<p>Продать золото 750 пробы или любой другой в наших отделениях – выгодно, надежно, безопасно. </p>

	<h2>О ценообразовании</h2>

	<p>При продаже изделий из желтого металла, в том числе лома, первоначальное значение имеет вес: чем тяжелее, тем выгоднее оформляется скупка золота 750 за 1 грамм. Дорого возможно сдавать ювелирные украшения, представляющие художественную и историческую ценность, с фрагментами-вставками серебра, новые изделия. В скупку принимаются украшения, на которых не стоит проба. Цена на них зависит от веса, от состава сплава. </p>

	<p>Чтобы узнать, насколько выгодно вы можете реализовать золото, какие изделия из драгметалла покупает наш ломбард, позвоните нам. Консультируем подробно, отвечаем на интересующие вопросы, работаем в режиме "НОН СТОП", без перерывов и выходных.</p>
	
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
