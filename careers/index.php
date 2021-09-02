<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
$APPLICATION->SetPageProperty("description", '★ Вакансии ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
$assets->addJs ('/tpl/js/build.js');
?>
<br/>
<h1 class="promo-title">Вакансии</h1>
<br/>
<h3 class="carrers-title">Клиентский менеджер</h3>
<p class="carrers-price">от 50 000 до 80 000 руб. до вычета НДФЛ</p>
<br><br>

<p class="carrers-name">Первый Ювелирный</p>

<p>Требуемый опыт работы: не требуется</p>
<p>Полная занятость, сменный график</p>
<br>
<p><b>Стабильная и динамично развивающаяся компания «Первый ювелирный ломбард», лидер на рынке ювелирных магазинов и ломбардов, приглашает в свою команду экспертов по оценке ювелирных изделий.</b></p>
<br>
<p><b>Если Вы:</b></p>
<p>-Любите красивые украшения</p>
<p>-Вдохновляетесь достигнутым результатом</p>
<p>-Находите баланс между семьей и работой</p>
<p>-Умеете ставить цели и добиваться их</p>
<p>-Хотите развить себя</p>
<br>
<p><b>Мы предлагаем для Вас:</b></p>
<p>-Выбор графика работы (2/2 или 3/3)</p>
<p>-Корпоративное обучение</p>
<p>-Оформление по ТК РФ с первого дня работы</p>
<p>-Удобное расположении ломбардов, в шаговой доступности от метро</p>
<p>-Безопасность на рабочем месте с грамотной охранной системой</p>
<p>-Стабильная заработная плата (оклад+%)</p>
<p>Основные обязанности:</p>
<p>-Консультирование клиентов</p>
<p>-Оценка ювелирных изделий</p>
<p>-Ведение кассы, формирование первичной документации</p>
<br>
<p><b>Требование к кандидату:</b></p>
<p>-Образование среднее специальное и выше</p>
<p>Ждем ваши резюме: <a href="mailto:l.efremova@lombardd.ru">l.efremova@lombardd.ru</a></p>
<p>Телефон: <a href="tel:+79160605746">8-916-060-57-46</a>

(Звонки принимаются в рабочее время с 09:00 до 18:00)</p>
<br>
<p><b>Ключевые навыки</b></p>
<p>Коммуникабельность Грамотная речь Деловое общение Ориентация на результат</p>
<br>
<p><b>Адрес</b></p>
<p>Тверская, Пушкинская, Москва, Малый Палашёвский переулок, 6</p>

<div class="contact_form">
	<div class="container">
		<h2 class="caption" style="text-align:center;">Прикрепить резюме</h2>
		<div class="space_30"></div>
		<form class="price__form js-resume" enctype="multipart/form-data" method="post">
			<?=bitrix_sessid_post();?>
			<div class="form-inputs__block">
				<span>Прикрепить файл: </span><input type="file" name="uploadfile" id="uploadfile">
			</div>
			<button type="submit" class="btn price__submit js-submit"> <span class="btn__text btn__text_tablet">Отправить</span> <span class="btn__text btn__text_desktop">Отправить</span> </button>
			<div class="admire">
				<br/>Нажимая на кнопку «<span class="btn__text btn__text_tablet">Отправить</span>
				<span class="btn__text btn__text_desktop">Отправить</span>»,
				я подтверждаю согласие c <a href="/data/privacy-policy/" target="_blank">политикой конфиденциальности</a>
				и даю согласие на обработку персональных данных
			</div>
		</form>
	</div>
</div><br/>
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
