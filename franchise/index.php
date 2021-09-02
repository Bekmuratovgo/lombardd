<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Первый Ювелирный - франшиза для тех кто хочет открыть ломбард, скупку и ювелирный магазин.");
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", "★ Франшиза ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetPageProperty("tags", "");
$APPLICATION->SetTitle("Франшиза");
?>

<!--start text-default-->
<div class="text-default">
	<div class="promo-title">
		Франшиза
	</div>
	<p>
		Группа компаний Первый Ювелирный предлагает всем желающим создать суперперспективный и
		успешный бизнес,
		состоящий из Ломбарда и Ювелирного магазина, приобрести Франшизу «Первый Ювелирный».
		Для каждой заявки мы составляем индивидуальное предложение, которое будет включать
		анализ региона размещения,
		возможности и пожелания приобретателя франшизы.
	</p>
	<p>Все условия и конкретное предложение Вы можете получить, оставив заявку на нашем сайте в
		специальной форме.
		Наш специалист отдела Развития свяжется с Вами для выяснения подробностей в ближайшее
		время.
		Спасибо за внимание и ждем Вас в наших рядах!</p>
</div>
<!--end text-default-->

<form action="" class="franchise__form js-franchise">
	<?=bitrix_sessid_post();?>
	<div class="franchise__form-inner">
		<div class="form-inputs__equal">
			<div class="form-inputs__block">
				<input name="org" type="text" class="form-inputs__field  js-required" data-error="Введите название"
					   placeholder="Название организации">
			</div>
			<div class="form-inputs__block">
				<input name="name" type="text" class="form-inputs__field js-required" data-error="Введите Имя" placeholder="Имя">
			</div>
			<div class="form-inputs__block">
				<input name="phone" type="tel" class="form-inputs__field js-phone js-required" data-error="Введите телефон" placeholder="Контактный телефон">
			</div>
		</div>
		<div class="form-inputs__block">
		<textarea name="message" id="" cols="30" rows="10"  data-error="Введите сообщение" class="franchise__message js-required" placeholder="Сообщение"></textarea>
		</div>
		<div>
			<button type="submit" class="btn btn_kabinet js-submit">
				Отправить заявку
			</button>
		</div>
		<div class="admire">
			Нажимая на кнопку «Отправить заявку», я подтверждаю согласие
						c<a href="/data/terms/"> договором оферты</a> и <a href="/data/privacy-policy/">политикой конфиденциальности</a> и даю согласие на обработку персональных данных
		</div>
	</div>
</form>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>