<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Скупка технического серебра по выгодным ценам, продать техническое серебро в Москве — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка технического серебра ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка технического серебра");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка технического серебра</h1>

	<p>Серебро широко используется в промышленности. Металл и его сплавы применяются в производстве бытовой техники, электроники, входит в состав микросхем, радиодеталей, блоков, при изготовлении припоя. Для физических лиц и предпринимателей скупка технического серебра в Москве может стать дополнительным источником дохода, поскольку позволяет получить приличные деньги.</p>

	<p>Под техническим серебром понимаются сплавы, в составе которых присутствует драгоценный металл, и до этого использующиеся в промышленности. Это радиодетали, проволока, кабеля, припой, микросхемы м прочие детали.</p>

	<p>Чтобы продать техническое серебро, необходимо обращаться в компании, получившие соответствующие разрешительные документы. Процесс находится под контролем государства, поскольку получаемое сырье имеет стратегическое значение, так как использование лома позволяет минимизировать добычу природных ресурсов. Серебро, выделенное из вторсырья, имеет меньшую стоимость, чем полученное при первичном освоении месторождений. Также, утилизация некоторых металлосодержащих элементов требует специальных условий и процедур, поэтому в целях сохранения окружающей среды производить ее могут только специалисты.</p>

	<p>Цена за грамм технического драгметалла зависит от его процентного содержания в сплаве, а также от веса сдаваемой лигатуры.</p>

	<p>Перед скупкой производится оценка сырья. Клиентам должен предоставляться прозрачный отчет, на основании которого выполнен расчет. Цены на этот вид лома достаточно высокие.</p>

	<p>Чтобы застраховать себя от мошенников необходимо обращаться только в лицензированные организации. В этом случае вам гарантирована рыночная цена, безопасность сделки и быстрый расчет.</p>

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
