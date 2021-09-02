<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Кредиты, займы под залог золота в Москве в Первом Ювелирном Ломбарде. Низкие проценты по займу!');
$APPLICATION->SetPageProperty("description", '★ Золото под залог ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$APPLICATION->SetTitle("Золото под залог");
?>	<!--start conditions-->
	<div class="conditions">
		<a name="zaim"></a>
		<h1 class="promo-title">
			Золото под залог
		</h1>
		<div class="promo-title">Условия займа</div>
		
		<?$APPLICATION->IncludeFile(
			SITE_DIR."include/loan_conditions.php",
			Array(),
			Array("MODE"=>"text")
		);?>
		
		<div class="vs-center"><?$APPLICATION->IncludeFile('/include/visitors_info.inc.php', Array('IN_PROCESS'=>'y'), Array('MODE'=>'text'));?></div>
	</div>
	<!--end conditions-->

	<!--start text-default-->
	<div class="text-default">
		<p>
			Золото под залог – быстрый и безопасный способ получить наличные «Первый ювелирный ломбард»
			выдает займы
			крупных денежных сумм частным лицам под залог ювелирных изделий из драгоценных металлов.
			«Первый ювелирный ломбард» более 6 лет успешно функционирует на столичном рынке ювелирных
			изделий
			и драгоценных металлов. «Первый ювелирный ломбард» принимает золото в залог на самых
			выгодных
			условиях
			для столичного региона. Мы предлагаем своим клиентам и покупателям самые выгодные цены на
			ювелирные
			изделия из благородных металлов как в случае покупки, так и в случае продажи или заключения
			залоговых сделок.
		</p>
		<p> «Первый ювелирный ломбард» сотрудничает с крупнейшими отечественными производителями
			ювелирных
			изделий.
			Мы дорожим доверием каждого клиента и заинтересованы в долгосрочном сотрудничестве.</p>
		<p>Перед тем, как взять изделие в залог, мы проводим бесплатную и качественную оценку золота для
			того, чтобы вы
			могли извлечь из сделки максимальную выгоду. Сдать под залог ювелирные украшения из золота
			вы
			сможете
			в любом из отделений «Первого ювелирного ломбарда».</p>
			
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
