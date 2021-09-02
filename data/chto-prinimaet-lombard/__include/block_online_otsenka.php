<div class="contact_form" style="float: right;">
	<div class="container">
		<h2 class="caption">Онлайн оценка</h2>
		<div class="space_30"></div>
		<form class="price__form js-ocenka" enctype="multipart/form-data" method="post">
				 <?=bitrix_sessid_post();?>
				<div class="form-inputs__block form-small-inputs__block">
					<input name="fio" type="text" class="form-inputs__field js-required" data-error="Введите Имя" placeholder="Ваше имя">
				</div>
				<div class="form-inputs__block form-small-inputs__block">
					<input name="metal" type="text" class="form-inputs__field js-required" data-error="Металл" placeholder="Металл">
				</div>
				<div class="form-inputs__block form-small-inputs__block">
					<input name="proba" type="text" class="form-inputs__field js-required" data-error="Проба" placeholder="Проба">
				</div>
				<div class="form-inputs__block form-small-inputs__block">
					<input name="ves" type="text" class="form-inputs__field js-required" data-error="Вес, гр." placeholder="Вес, гр.">
				</div>
				<div class="form-inputs__block form-small-inputs__block">
					<input name="phone" type="tel" class="form-inputs__field js-required js-phone" data-error="Введите телефон" placeholder="Ваш телефон">
				</div>
				<div class="form-inputs__block">
					<span>Прикрепить фото: </span><input type="file" name="uploadfile" id="uploadfile">
				</div>
				<div class="g-recaptcha" data-sitekey="6LcEW8cUAAAAAA7GLbwMqyLByPzoiWBH-Ry0UaQl"></div>
				<br/><p>Или воспользуйтесь удобным для вас мессенджером:</p>
				<div class="soc-icons-header">
					<a class="vb" href="viber://add?number=79096693140" onclick="yaCounter33166953.reachGoal('viber'); return true;"></a>
					<a class="wa" href="https://api.whatsapp.com/send?phone=79096693140" onclick="yaCounter33166953.reachGoal('whatsapp'); return true;"></a>
					<a class="tg" href="https://tele.click/Lombardd_1" onclick="yaCounter33166953.reachGoal('telegram'); return true;"></a>
				</div>				
				<div class="text-danger" id="recaptchaError"></div><br/>
				<button type="submit" class="btn price__submit js-submit"> <span class="btn__text btn__text_tablet">Отправить заявку</span> <span class="btn__text btn__text_desktop">Отправить заявку</span> </button>
				<div class="admire">
					<br/>Нажимая на кнопку «<span class="btn__text btn__text_tablet">Отправить заявку</span>
					<span class="btn__text btn__text_desktop">Отправить заявку</span>»,
					я подтверждаю согласие c <a href="/data/privacy-policy/" target="_blank">политикой конфиденциальности</a>
					и даю согласие на обработку персональных данных
				</div>
			</form>
	</div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
