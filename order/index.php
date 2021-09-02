<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Скупка лома драгоценных металлов. Выгодно продать золото, серебро, платину в Москве «Первый Ювелирный»");
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", "★ Покупка драгоценных металлов ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Покупка драгоценных металлов");
?>

<div class="basket">
	<div class="basket__inner">
		<div class="basket__row">
			<div class="basket__col basket__col_price">
				<div class="basket-price">
					<div class="basket-price__section">
						<div class="basket-price__field basket-price__field_top">
							<div class="basket-price__term">5-100г, наличными</div>
							<div class="basket-price__value">
								<img src="<?=SITE_TEMPLATE?>/images/alloy.png" alt="" class="basket-price__alloy">
								1330 руб.
							</div>
						</div>
						<div class="basket-price__field basket-price__field_top">
							<div class="basket-price__term">>100г, наличными</div>
							<div class="basket-price__value">
								<img src="<?=SITE_TEMPLATE?>/images/alloy.png" alt="" class="basket-price__alloy">
								1350 руб.
							</div>
						</div>
						<div class="basket-price__field basket-price__field_top">
							<div class="basket-price__term">Перевод на карту</div>
							<div class="basket-price__value">
								<img src="<?=SITE_TEMPLATE?>/images/alloy.png" alt="" class="basket-price__alloy">
								1370 руб.
							</div>
						</div>
						<div class="basket-price__field basket-price__field_top">
							<div class="basket-price__term">Расчетный счет</div>
							<div class="basket-price__value">
								<img src="<?=SITE_TEMPLATE?>/images/alloy.png" alt="" class="basket-price__alloy">
								1395 руб.
							</div>
						</div>
					</div>
					<?
					$arRate = CHandler::getCurrencyUsd();
					?>
					<div class="basket-price__section">
						<div class="basket-price__field basket-price__field_bottom">
							<div class="basket-price__text">$,USD</div>
							<div class="basket-price__text">
								<div class="basket-price__summ"><?=$arRate["PRINT_RATE"]?></div>
							</div>
						</div>
						<div class="basket-price__field basket-price__field_bottom">
							<div class="basket-price__text">Золото</div>
							<div class="basket-price__text">
								<div class="basket-price__summ basket-price__summ_up">2355.07 руб.</div>
							</div>
						</div>
						<div class="basket-price__field basket-price__field_bottom">
							<div class="basket-price__text">USD</div>
							<div class="basket-price__text">
								<div class="basket-price__summ basket-price__summ_down">30.97 руб.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="basket__col basket__col_form">
				<?$APPLICATION->IncludeComponent(
					"feedback",
					"buy",
					Array(
						"EMAIL_TO" => COption::GetOptionString("sale", "order_email", ""),
						"EVENT_MESSAGE_ID" => array("46"),
						"OK_TEXT" => "Спасибо, ваше сообщение принято.",
						"REQUIRED_FIELDS" => array("NAME","EMAIL","PHONE"),
						"USE_CAPTCHA" => "N"
					)
				);?>
			</div>
			<div class="basket__col basket__col_address">
				<div class="basket-address">
					<a href="tel:+74991105054" class="basket-address__tel">+7(499) 110-50-54</a>
					<span class="basket-address__sep"></span>
					<a href="tel:+79687649222" class="basket-address__tel">+7(968) 764-92-22</a>
					<span class="basket-address__sep basket-address__sep_last"></span>
					<div class="basket-address__block">
						<a href="mailto:skupka@zolotodm.ru" class="basket-address__email">skupka@zolotodm.ru</a>
					</div>
					<div class="basket-address__address">
						Улица Пресненский Вал, 27 строение 15 (офис 13)
					</div>
					<div class="basket-address__time">По будням с 9:00 до 19:00</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>