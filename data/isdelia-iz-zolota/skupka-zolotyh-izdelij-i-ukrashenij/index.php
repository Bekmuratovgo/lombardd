<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продать золотые украшения в Москве, выгодно сдать золотые изделия — «Первый ювелирный ломбард»");
$APPLICATION->SetPageProperty("description", "★ Скупка золотых изделий и украшений ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Скупка золотых изделий и украшений");
?>
<!--start text-default-->
<div class="text-default">
	<h1 class="promo-title">Скупка золотых изделий и украшений</h1>

	<p>Золото и изделия из него на протяжении веков остается мерилом богатства и благополучия. Обладатели ювелирных украшений, монет, золотых слитков всегда могут превратить их в денежные знаки, чтобы решить насущные финансовые проблемы. При этом важно знать, куда сдать золотые украшения в Москве, поскольку от этого зависит выгода сделки.</p>

	<h2>Куда продать золото?</h2>

	<p>Продать золото в Москве не сложно. Объявления о покупке драгоценных металлов встречаются повсеместно. Вопрос, куда продать золотые украшения, возникает, когда продавец преследует цель продать золото дорого и максимально выгодно.</p>

	<p>Золото можно сдать в ювелирный магазин, ломбард или скупку. В каждом случае золото обменивается на денежные знаки, но форма сделки и его цена отличается.</p>

	<p class="bold">Ювелирный магазин</p>

	<p>Может покупать изделия для дальнейшей переработки и производства новых товаров. В этом случае кольцо, серьги или цепочка будут оценены по наименьшей стоимости как лом. Наличие драгоценных камней, эстетическая ценность, состояние в учет не берутся. Способ подходит в случаях, когда необходимо сдать сломанные, старые, надоевшие драгоценности.</p>

	<p>Магазин может принять изделие на комиссию. Деньги владельцу будут возвращены после продажи драгоценности. Сдать изделие можно дороже. При оценке учитывается состояние золотого кольца, цепочки, сережек, наличие пробы, бренд и другие нюансы. Однако, придется заплатить магазину комиссию, которая составит 30%-40% цены реализации драгоценности.</p>

	<p class="bold">Ломбард </p>

	<p>Место, куда можно заложить драгоценности, если возникла временная потребность в деньгах. Залогом при получении кредита выступают украшения. Преимущество сдачи золота с ломбард – это быстрое решение вопросов кредитования, отсутствие необходимости предоставления документов, подтверждающих уровень дохода, возможность получить украшения назад, когда появятся деньги. Недостаток – высокие комиссии, низкая цена скупки, если выкупить изделие не удается.</p>

	<p class="bold">Компании, занимающиеся скупкой</p>

	<p>Не возвращают изделия. Выкупить вещицы обратно не возможно. Цена зависит от пробы металла и, обычно, выше, чем в ломбарде.</p>

	<p>Для продажи золота гражданину должно исполниться 18 лет. Из документов потребуется только паспорт. </p>
	
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
