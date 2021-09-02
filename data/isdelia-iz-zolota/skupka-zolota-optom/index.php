<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Скупка золота оптом в Москве, выгодно сдать золото оптом — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка золота оптом ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка золота оптом");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка золота оптом</h1>

	<p>Скупка золота оптом в Москве – распространенное занятие многих специализированных компаний. Однако, если речь идет об оптовых партиях вышедших из моды ювелирных украшений,  старинных монет, слитков, лома комплектующих промышленного оборудования, использованных стоматологических коронок и прочих изделий из драгоценного металла, выбирать  фирму нужно тщательно, а не довольствоваться ближайшим ломбардом у метро.</p>

	<h2>Как выбрать компанию для оптовой продажи?</h2>

	<p>Прежде чем продавать золотой лом, произведите следующие действия:</p>
	<ul>
		<li>Исследуйте рынок, определите, какие фирмы в Москве занимаются скупкой золота и серебра, по какой цене.</li>
		<li>Сравните цену покупки с ценой биржевых котировок, определите ее адекватность.</li>
		<li>Получите консультацию специалиста относительно пробы, чистоты сплава, потерь при переработке, определите точный вес золота в граммах, произведите его оценку.</li>
		<li>Выясните, какими юридическими документами оформляется сделка, возможные способы расчета и взаимодействия с юридическими или физическими лицами.</li>
	</ul>

	<p>Для сотрудничества стоит выбирать заведения с хорошей репутацией, длительным сроком присутствия на рынке и прозрачными условиями. У солидных игроков рынка скупка золота оптом осуществляется дорого и выгодно для продавца и покупателя. </p>

	<h2>Преимущества сотрудничества с компанией «Первый ювелирный ломбард»</h2>

	<p>В «Первый ювелирный ломбард» всегда можно сдать изделия из золота и серебра выгодно. Цены устанавливается индивидуально, учитывает внешний вид и состояние изделий, используется гибкая система скидок. </p>

	<p>У нас можно также покупать драгоценный металл любого назначения по выгодной цене.</p>

	<p>Оптовая сделка сопровождается профессиональной оценкой пробы сплава, которая осуществляется с использование современного оборудования и реактивов, не разрушающих изделие, исключающих любые ошибки. Оценка производится бесплатно. </p>

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
