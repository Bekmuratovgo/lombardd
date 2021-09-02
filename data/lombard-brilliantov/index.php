<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Скупка бриллиантов и других драгоценных камней в Москве в Первом Ювелирном Ломбарде');
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", '★ Ломбард бриллиантов ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Ломбард бриллиантов");
?>


		<!--start text-default-->
		<div class="text-default mob-pad-top">
			<h1 class="promo-title">
				Ломбард бриллиантов
			</h1>
			<p>
				«Первый ювелирный ломбард» осуществляет скупку ювелирных изделий, украшенных
				бриллиантами
				и драгоценными камнями других видов в Москве по выгодным ценам. Драгоценные металлы и
				камни
				- выгодное
				финансовое вложение, не менее надёжное, чем иностранная валюта или недвижимость.
				Воспользовавшись
				услугами ломбарда, вы всегда можете без потерь решить самую сложную финансовую ситуацию.
				Наш ломбард бриллиантов - это наиболее выгодные условия кредитования для клиентов в
				столичном регионе,
				отдающих свои ювелирные украшения под залог. Преимущества сотрудничества с «Первым
				Ювелирным» ломбардом:
			</p>
			<p> – Займ в ломбарде под залог бриллиантов, драгоценных камней и металлов
				можно оформить очень быстро;</p>
			<p>– у нас очень доступные проценты по кредитам, достаточно низкие для профильного рынка;
			</p>
			<p>– опытные эксперты бесплатно оценивают ювелирные изделия;</p>
			<p>– отделения «Первого ювелирного ломбарда» наверняка имеются в шаговой доступности от
				дома,
				в котором вы проживаете, или места работы (на сегодняшний день открыто 15 филиалов);</p>
			<p>– ломбард хранит строго следит за сохранением любой информации о своих клиентах;</p>
			<p>– сумма займа для клиента не ограничена;</p>
			<p>– ломбард предоставляет клиентам услугу страхования залогов;</p>
			<p>– для постоянных клиентов мы предусмотрели программу лояльности. </p>
			<p>Рассчитать стоимость займа и срок в зависимости от реальных условий можно на сайте
				компании в
				режиме online.
				Кроме того, у нас можно купить высококачественные ювелирные изделия из благородных
				металлов
				с различными
				драгоценными камнями по доступным ценам.</p>
				
				<form class="price__form js-forsale-captcha">
				 <?=bitrix_sessid_post();?>
				<div class="form-inputs__block">
 <input name="fio" type="text" class="form-inputs__field js-required" data-error="Введите Имя" placeholder="Ваше имя">
				</div>
				<div class="form-inputs__block">
 <input name="phone" type="tel" class="form-inputs__field js-required js-phone" data-error="Введите телефон" placeholder="Ваш телефон">
				</div>
				<div class="g-recaptcha" data-sitekey="6LcEW8cUAAAAAA7GLbwMqyLByPzoiWBH-Ry0UaQl"></div>
				<br/>
				<div class="text-danger" id="recaptchaError"></div>
 <button type="submit" class="btn price__submit js-submit" onclick="yaCounter33166953.reachGoal('zayavka-na-prodaju'); return true;"> <span class="btn__text btn__text_tablet">Отправить заявку</span> <span class="btn__text btn__text_desktop">Отправить заявку на продажу</span> </button>
				<div class="admire">
					<br/>Нажимая на кнопку «<span class="btn__text btn__text_tablet">Отправить заявку</span>
					<span class="btn__text btn__text_desktop">Отправить заявку на продажу</span>»,
					я подтверждаю согласие c <a href="/data/privacy-policy/" target="_blank">политикой конфиденциальности</a>
					и даю согласие на обработку персональных данных
				</div>
			</form>
		</div>
		<!--end text-default-->

		<!--start reviews-->
		<div class="reviews reviews_about">
			<div class="promo-title">Отзывы наших клиентов</div>
			<a href="<?=HTTP.SITE_LOMBARD?>/review/" class="reviews__link-all">Все отзывы</a>
			<div class="reviews__row reviews__row_equal">
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"reviews_diamonds",
					Array(
						"ACTIVE_DATE_FORMAT" => "j F Y G:i",
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
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "N",
						"DISPLAY_PICTURE" => "N",
						"DISPLAY_PREVIEW_TEXT" => "N",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array("DATE_ACTIVE_FROM", ""),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "5",
						"IBLOCK_TYPE" => "content",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "Y",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "2",
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
						"PROPERTY_CODE" => array("MAIL", ""),
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "DESC",
						"SORT_ORDER2" => "ASC",
						"STRICT_SECTION_CHECK" => "N"
					)
				);?>
			</div>
		</div>
		<!--end reviews-->
		
<?$APPLICATION->IncludeFile(
	"/include/lombard_catalog.php",
	Array(),
	Array("MODE"=>"php") 
);?>
	
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
<script src='https://www.google.com/recaptcha/api.js'></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
