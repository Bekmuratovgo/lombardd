<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Цены за грамм золота в ломбарде в Москве - сколько стоит заложить золото в ломбард');
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", '★ Займы в ломбарде ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Займы в ломбарде");
?>
<br />
<?$APPLICATION->IncludeFile('/include/visitors_info.inc.php', Array('ALREADY'=>'y'), Array('MODE'=>'text'));?>

	<!--start advantages-->
	<div class="conditions advantages">
		<div class="promo-title">Наши преимущества</div>
		<div class="conditions__row">
			<div class="conditions__col">
				<div class="conditions__item">
					<div class="conditions__image conditions__image5"></div>
					<div class="conditions__desc">
						Низкий процент
					</div>
				</div>
			</div>
			<div class="conditions__col">
				<div class="conditions__item">
					<div class="conditions__image conditions__image6"></div>
					<div class="conditions__desc">
						Высокая оценка с учетом драгоценного камня
					</div>
				</div>
			</div>
			<div class="conditions__col">
				<div class="conditions__item">
					<div class="conditions__image conditions__image7"></div>
					<div class="conditions__desc">
						Займ за 5 минут - мгновенно, без справок и очередей
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end advantages-->

	<!--start rates-->
	<div class="rates">
		<a name="tarifs"></a>
		<h1 class="title">Тарифы займов</h1>
		<div class="rates__blocks">
			<div class="rates__block rates__block_price">
				<div class="rates__heading">Сумма займа</div>
				<div class="rates__price" style="height: 32px; padding: 0px;"></div>
				<div class="rates__price">от 0 до 30 000 р.</div>
				<div class="rates__price">от 30 000 до 60 000 р.</div>
				<div class="rates__price">от 60 000 до 100 000 р.</div>
				<div class="rates__price">от 100 000 р.</div>
			</div>
			<div class="rates__block rates__block_table">
				<table class="rates__table">
					<tr>
						<th class="rates__heading">Основной</th>
						<th class="rates__heading">Социальный</th>
						<th class="rates__heading">Молодежный</th>
						<th class="rates__heading">Утренний</th>
						<?/*<th class="rates__heading">Тариф VIP</th>*/?>
					</tr>
					<tr>
						<td>Неограниченная сумма займа</td>
						<td>Максимальная сумма займа 20000₽</td>
						<td>Максимальная сумма займа 7000₽</td>
						<td>Максимальная сумма займа 30000₽</td>
					</tr>
					<tr>
						<td class="rates__cell">0.329%</td>
						<td class="rates__cell rates__cell_big">0.23%</td>
						<td class="rates__cell rates__cell_big">0.233%</td>
						<td class="rates__cell rates__cell_big">0.30%</td>
						<?/*<td class="rates__cell rates__cell_big" rowspan="4">6.99%</td>*/?>
					</tr>
					<tr>
						<td class="rates__cell">0.320%</td>
						<td class="rates__cell rates__cell_big" rowspan="3"></td>
						<td class="rates__cell rates__cell_big" rowspan="3"></td>
						<td class="rates__cell rates__cell_big" rowspan="3"></td>
					</tr>
					<tr>
						<td class="rates__cell ">0.315%</td>
					</tr>
					<tr>
						<td class="rates__cell ">0.310%</td>
					</tr>
				</table>
			</div>
		</div>

		<?$APPLICATION->IncludeFile('/include/visitors_info.inc.php', Array('IN_PROCESS'=>'y'), Array('MODE'=>'text'));?>
	</div>
	<!--end rates-->
	
	<!--start advantages-->
	<div class="conditions advantages">
		<div class="promo-title">Наша гордость</div>
		<div class="conditions__row">
			<div class="conditions__col">
				<div class="conditions__item">
					<div class="conditions__image conditions__image8"></div>
					<div class="conditions__desc">
						Работаем с 2008 года
					</div>
				</div>
			</div>
			<div class="conditions__col">
				<div class="conditions__item">
					<div class="conditions__image conditions__image9"></div>
					<div class="conditions__desc">
						Тысячи довольных клиентов
					</div>
				</div>
			</div>
			<div class="conditions__col">
				<div class="conditions__item">
					<div class="conditions__image conditions__image10"></div>
					<div class="conditions__desc">
						12 отделений в Москве, а также в Краснодаре и Новосибирске
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end advantages-->

	<!-- start price -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"reception_metals_all",
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
			"IBLOCK_ID" => "15",
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
			"STRICT_SECTION_CHECK" => "N"
		)
	);?>
	<!-- end price -->
	
	<div class="text-default" style="font-size: 14px;">
		<p>Общество с ограниченной ответственностью «Первый ювелирный ломбард», ОГРН 1147746123436, ИНН 7703805756 предоставляет потребительские займы физическим лицам на срок до 31 календарного дня (с возможностью дальнейшей пролонгации на срок не более одного года в общей сложности) в размере от 100 рублей, процентная ставка по займу: от 116,435 до 126,679 % годовых, под залог ювелирных изделий (при этом оценка одного грамма золота, содержащегося в ювелирном изделии (предмете залога), составляет: до 3940 руб. в зависимости от качества изделия (пробы, состояния и прочих характеристик предмета залога).
		<a href="obshie_uslovia.pdf" target="_blank">Общие условия Первого Ювелирного Ломбарда</a>.</p>
	</div>
	
	<!--start advantages-->
	<div class="conditions advantages">
		<div class="promo-title">Мы - лучшие в оценке</div>
		<div class="conditions__row">
			<div class="conditions__col">
				<div class="conditions__item">
					<div class="conditions__image conditions__image11"></div>
					<div class="conditions__desc">
						Вес, размер изделия
					</div>
				</div>
			</div>
			<div class="conditions__col">
				<div class="conditions__item">
					<div class="conditions__image conditions__image12"></div>
					<div class="conditions__desc">
						Природу происхождения камня
					</div>
				</div>
			</div>
			<div class="conditions__col">
				<div class="conditions__item">
					<div class="conditions__image conditions__image13"></div>
					<div class="conditions__desc">
						Материал камня
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end advantages-->
	
	<div class="price__block" style="margin:0px auto">
		<div class="promo-title">Получить консультацию</div>
			<form class="price__form js-consult">
				 <?=bitrix_sessid_post();?>
				<div class="form-inputs__block">
					<input name="fio" type="text" class="form-inputs__field js-required" data-error="Введите Имя" placeholder="Ваше имя">
				</div>
				<div class="form-inputs__block">
					<input name="phone" type="tel" class="form-inputs__field js-required js-phone" data-error="Введите телефон" placeholder="Ваш телефон">
				</div>
				<button type="submit" class="btn price__submit js-submit" onClick="ym(33166953,'reachGoal','poluchit-konsultaciyu');"> <span class="btn__text btn__text_tablet">Получить консультацию</span> <span class="btn__text btn__text_desktop">Получить консультацию</span> </button>
				<div class="admire">
					<br/>Нажимая на кнопку «<span class="btn__text btn__text_tablet">Получить консультацию</span>
					<span class="btn__text btn__text_desktop">Получить консультацию</span>»,
					я подтверждаю согласие c <a href="/data/privacy-policy/" target="_blank">политикой конфиденциальности</a>
					и даю согласие на обработку персональных данных
				</div>
			</form>
	</div>
	
	<!--start conditions-->
	<div class="conditions">
		<a name="zaim"></a>
		<div class="promo-title">Условия займа</div>
		<?$APPLICATION->IncludeFile(
			SITE_DIR."include/loan_conditions.php",
			Array(),
			Array("MODE"=>"text")
		);?>
	</div>
	<!--end conditions-->

<div class="thankYou">
<div class="form-popup">
	<div class="form-popup__inner">
		<div class="form-popup__header">
			<span class="day">
				<span class="form-popup__default">Спасибо за заявку!</span>
				<br/><br/><span>Наши менеджеры перезвонят в ближайшее время</span>
			</span>
			<span class="night">
				<span class="form-popup__default">Благодарим Вас за обращение!</span>
				<br/><br/><span>Мы сразу же свяжемся с Вами в наше рабочее время с 9:00 до 21:00!</span>
			</span>
			<br/><br/><br/><button type="text" class="btn close" onClick="globalPopup.close();">Закрыть</button>
		</div>
	</div>
	<!-- /.form-popup__inner -->
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
