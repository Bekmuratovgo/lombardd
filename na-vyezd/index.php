<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "★ Ломбард с выездом ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetPageProperty("title", "Ломбард с выездом на дом – выездной ломбард в Москве");
$APPLICATION->SetTitle("Ломбард с выездом");
?>
<link href="./css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

<table width="100%" cellspacing="0" class="promo-table"><tr>
<td><div class="text-default">
	<h1 class="promo-title">Ломбард с выездом</h1>
	<p>Деньги на карту за пару часов!</p>
	<p>Уникальная услуга выездного ломбарда</p>
</div></td>
<td><img src="img/banner.png" class="banner" alt="Ломбард с выездом" title="Ломбард с выездом фото"/></td>
</tr></table>
<!--<div class="container">
	<div class="block-advantages">
		<div class="list-advantages">
			<div class="adg-item">
				<img src="img/ico_vyezd4.png" alt="" title="">
				<p class="name">Работаем с 2008 года</p>
			</div>
			<div class="adg-item">
				<img src="img/ico_vyezd5.png" alt="" title="">
				<p class="name">Клиентов - свыше <span id="client">150000</span></p>

			</div>
			<div class="adg-item">
				<img src="img/ico_vyezd6.png" alt="" title="">
				<p class="name">Займов - свыше <span id="zaim">600000</span></p>

			</div>

		</div>
	</div>
</div>-->
<div class="row-info text-info">
	<p>Первый Ювелирный Ломбард заботиться комфорте своих клиентов, поэтому разработал уникальную услугу – «Ломбард с выездом».</p>
	<p>Суть данной услуги заключается в том, что Вы можете оперативно получить необходимую сумму денег, не выходя из дома! Наш специалист прибудет к Вам в любую точку Москвы и в удобное для Вас время! Эта услуга абсолютно бесплатна вне зависимости от того заключите Вы в итоге с нами сделку или нет.</p>
	<p>Мы ориентированы на клиента, поэтому у нас абсолютно прозрачные условия для займа, без скрытых платежей и комиссий.</p>
	<p>Отправьте нам заявку и наш менеджер свяжется с Вами для уточнения места и времени, а также ответит на все интересующие Вас вопросы!</p>
</div>
<div class="contact_form">
	<div class="container">
		<h2 class="caption">Вызвать курьера</h2>
		<div class="space_30"></div>
		<form class="price__form js-vyezd" enctype="multipart/form-data" method="post">
				 <?=bitrix_sessid_post();?>
				<div class="form-inputs__block form-small-inputs__block">
 <input name="fio" type="text" class="form-inputs__field js-required" data-error="Введите Имя" placeholder="Ваше имя">
				</div>
				<div class="form-inputs__block form-small-inputs__block">
 <input name="phone" type="tel" class="form-inputs__field js-required js-phone" data-error="Введите телефон" placeholder="Ваш телефон">
				</div>
				<div class="form-inputs__block">
 <span>Прикрепить файл: </span><input type="file" name="uploadfile" id="uploadfile">
				</div>
 <button type="submit" class="btn price__submit js-submit" onClick="ym(33166953,'reachGoal','vyzvat_kurjera');"> <span class="btn__text btn__text_tablet">Отправить заявку</span> <span class="btn__text btn__text_desktop">Отправить заявку</span> </button>
				<div class="admire">
					<br/>Нажимая на кнопку «<span class="btn__text btn__text_tablet">Отправить заявку</span>
					<span class="btn__text btn__text_desktop">Отправить заявку</span>»,
					я подтверждаю согласие c <a href="/data/privacy-policy/" target="_blank">политикой конфиденциальности</a> 
					и даю согласие на обработку персональных данных
				</div>
			</form>
	</div>
</div>

<div class="schema">
	<div class="container">
		<h2 class="caption">Схема работы</h2>
		<p class="small_caption">просто, быстро и безопасно</p>
		<div class="list-schema">
			<div class="schema-item">
				<img src="img/ico_schema1.png" alt="" title="">
				<p class="name">Заявка от клиента</p>
				<p class="desc">Вы оставляете заявку на сайте</p>
			</div>
			<div class="schema-arrow">
				<img src="img/arrow.png" alt="" title="">
			</div>
			<div class="schema-item">
				<img src="img/ico_schema2.png" alt="" title="">
				<p class="name">Звонок менеджера </p>
				<p class="desc">Менеджер перезванивает Вам для уточнения деталей </p>
			</div>
			<div class="schema-arrow">
				<img src="img/arrow.png" alt="" title="">
			</div>
			<div class="schema-item">
				<img src="img/ico_schema3.png" alt="" title="">
				<p class="name">Выезд курьера</p>
				<p class="desc">К Вам выезжает курьер и забирает изделие для оценки</p>
			</div>
			<div class="schema-arrow">
				<img src="img/arrow.png" alt="" title="">
			</div>
			<div class="schema-item">
				<img src="img/ico_schema4.png" alt="" title="">
				<p class="name">Оценка изделия</p>
				<p class="desc">Производиться оценка изделия</p>
			</div>
			<div class="schema-arrow">
				<img src="img/arrow.png" alt="" title="">
			</div>
			<div class="schema-item js-lombard-viezd">
				<img src="img/ico_schema5.png" alt="" title="">
				<p class="name">Перевод денег </p>
				<p class="desc">Деньги переводятся на Вашу карту</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="block-advantages">
	<h2 class="caption">Преимущества ломбарда на выезд</h2>
		<div class="list-advantages">
			<div class="adg-item">
				<img src="img/ico_vyezd1.png" alt="" title="">
				<p class="name">Мобильность</p>
				<p class="desc">Наш курьер приедет к вам в любую точку Москвы</p>
			</div>
			<div class="adg-item">
				<img src="img/ico_vyezd2.png" alt="" title="">
				<p class="name">Оперативность </p>
				<p class="desc">Оценка, экспертиза и зачисление наличных средств в течение 1-1,5 часа</p>
			</div>
			<div class="adg-item">
				<img src="img/ico_vyezd3.png" alt="" title="">
				<p class="name">Безопасность</p>
				<p class="desc">Ваша ценность будет находится в надежном хранилище до конца срока займа</p>
			</div>
		</div>
		<!--<div class="list-advantages">
			<div class="adg-item">
				<img src="img/ico_vyezd4.png" alt="" title="">
				<p class="name">Работаем с 2008 года</p>

			</div>
			<div class="adg-item">
				<img src="img/ico_vyezd5.png" alt="" title="">
				<p class="name">Клиентов - свыше 150 000</p>

			</div>
			<div class="adg-item">
				<img src="img/ico_vyezd6.png" alt="" title="">
				<p class="name">Займов - свыше 600 000</p>

			</div>

		</div>-->
	</div>
	<div class="space_50"></div>
</div>

<div class="row-info text-info">
	<div class="container">
		<p>Если нет времени или возможности приехать в ломбард, тогда воспользуйтесь услугами выездного. Ломбард на выезд в Москве готов предложить оптимальные условия займа денег и залога изделий из драгоценных металлов. Чтобы воспользоваться услугой, достаточно позвонить по телефону и оставить заявку. Сотрудник ломбарда свяжется с вами и оформит выезд по указанному адресу. Вы получите следующие услуги:</p>
		<ul>
			<li>профессиональную оценку ювелирных изделий;</li>
			<li>оценку часов и антиквариата;</li>
			<li>бесплатное консультирование.</li>
		</ul>

		<h2>Преимущества ломбарда</h2>

		<p>Ломбард с выездом на дом – это уникальная возможность для людей, которые не могут покинуть свой дом или квартиру по состоянию здоровья или личным причинам. Также если вы боитесь, что можете не довести вещь до оценщика или опасаетесь за ее сохранность. </p>

		<p>«Первый ювелирный ломбард» это сеть, имеющая отделения по всей Москве. Все эксперты – люди с опытом работы, которые дадут реальную оценку любому изделию и предложат хорошую сумму денег. Сеть имеет более 15 офисов по городу Москва. Работает ломбард ежедневно без перерывов, поэтому вы можете оставить заявку на выезд в любое удобное время. </p>

		<h2>Услуги ломбарда на дому</h2>

		<p>Доверьте оценку своего имущества профессионалам. За все время работы было заключено более 12 тысяч успешных сделок. Заключение сделки купли-продажи или залога производится на месте. На оценку у эксперта уходит до 5 минут. Любое консультирование проходит на бесплатной основе. Цены на драгоценные металлы выше, чем на рынке. </p>

		<p>Выездной ломбард в Москве – это совершенно новая услуга, которую вы можете заказать, всего лишь оставив заявку на сайте. На оформление вызова может уйти максимум до тридцати минут. Оценщик приедет без опозданий по указанному адресу. При необходимости все документы и реквизиты будут предоставлены на месте.</p>

	</div>
</div>

<!--start questions/answers-->
<?$APPLICATION->IncludeFile(SITE_DIR."include/block_questions_answers.php",Array(),Array("MODE"=>"text"));?>
<!--end questions/answers-->

<?/*
<div class="space_50"></div>
<div class="container">
	<h2 class="caption">Вопрос-Ответ</h2>

	<div class="accordion">
		<ul>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Как оставить заявку на вызов курьера?</span>
				<div class="msg">
					<p>Оставить заявку Вы можете на сайте, либо позвонить нам по телефону +7 (495) 212-06-74. Заявка на выезд формируется только после звонка нашего менеджера.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Куда осуществляется выезд курьера?</span>
				<div class="msg">
					<p>Выезд осуществляется только в офис, квартиру, производственные помещения или загородный дом. Мы не проводим встречу с клиентами у метро, в кафе, в автомобиле, на проходной или на улице в целях всеобщей безопасности.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Когда приедет курьер? За какой срок проводится оценка?</span>
				<div class="msg">
					<p>Курьер приедет в течение часа с момента оформления заявки. Оценка осуществляется в течение 2-х часов с момента оформления документов курьером.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Есть ли ограничения по предварительной оценки стоимости изделия?</span>
				<div class="msg">
					<p>Оценочная стоимость изделия должна составлять не менее 10 000 рублей</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Выезд курьера бесплатный?</span>
				<div class="msg">
					<p>Да! Выезд курьера абсолютно бесплатный. Время работы курьера с 09:00 - 16:00.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Обязательно ли нужны фотографии?</span>
				<div class="msg">
					<p>Желательно. Фотографии помогут  оперативно сориентировать Вас по предварительной оценочной стоимости изделия.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Есть ли ограничения оформления займа?</span>
				<div class="msg">
					<p>Да. Лицо, на которое оформляется займ должно быть старше 18-ти лет.</p>
				</div>
			</li>
		</ul>
	</div>
</div>
*/?>

<div class="row-info text-info">
	<div class="container">
		<div class="lombard_catalog" style="margin:0 0 30px 0">
			<ul>
				<li><b>Выездной ломбард:</b></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-bulvar-rokossovskogo/">Бульвар Рокоссовского</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-cherkizovskaya/">Черкизовская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-na-preobrazhenskoj-ploshchadi/">на Преображенской Площади</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-v-sokolnikah/">в Сокольниках</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-na-krasnoselskoj/">на Красносельской</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-na-komsomolskoj/">на Комсомольской</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-krasnye-vorota/">Красные Ворота</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-chistye-prudy/">Чистые Пруды</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-chistye-prudy/">Чистые Пруды</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-lubyanka/">Лубянка</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-ohotnyj-ryad/">Охотный Ряд</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-park-kultury/">Парк Культуры</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-frunzenskaya/">Фрунзенская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-sportivnaya/">Спортивная</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-universitet/">Университет</a></li>

				<li><a href="/na-vyezd/vyezdnoj-lombard-yugo-zapadnaya/">Юго-Западная</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-hovrino/">Ховрино</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-vodnyj-stadion/">Водный стадион</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-vojkovskaya/">Войковская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-dinamo/">Динамо</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-belorusskaya/">Белорусская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-mayakovskaya/">Маяковская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-tverskaya/">Тверская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-teatralnaya/">Театральная</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-novokuzneckaya/">Новокузнецкая</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-paveleckaya/">Павелецкая</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-avtozavodskaya/">Автозаводская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-kolomenskaya/">Коломенская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-kashirskaya/">Каширская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-kantemirovskaya/">Кантемировская</a></li>

				<li><a href="/na-vyezd/vyezdnoj-lombard-tsaritsyno/">Царицыно</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-orekhovo/">Орехово</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-domodedovskaya/">Домодедовская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-krasnogvardejskaya/">Красногвардейская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-alma-atinskaya/">Алма-Атинская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-pyatnitskoe-shosse/">Пятницкое шоссе</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-mitino/">Митино</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-myakinino/">Мякинино</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-strogino/">Строгино</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-krylatskoe/">Крылатское</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-molodezhnaya/">Молодежная</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-kuntsevskaya/">Кунцевская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-slavyanskij-bulvar/">Славянский бульвар</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-park-pobedy/">Парк Победы</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-kievskaya/">Киевская</a></li>

				<li><a href="/na-vyezd/vyezdnoj-lombard-pionerskaya/">Пионерская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-filevskij-park/">Филевский парк</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-bagrationovskaya/">Багратионовская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-fili/">Фили</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-studencheskaya/">Студенческая</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-oktyabrskaya/">Октябрьская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-dobryninskaya/">Добрынинская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-taganskaya/">Таганская</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-prospekt-mira/">Проспект Мира</a></li>
				<li><a href="/na-vyezd/vyezdnoj-lombard-novoslobodskaya/">Новослободская</a></li>
			</ul>
		</div>
	</div>
</div>

<script>
/*document.getElementById('feedback-form').addEventListener('submit', function(evt){
  var http = new XMLHttpRequest(), f = this;
  evt.preventDefault();
  http.open("POST", "php/contacts.php", true);
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
      //alert(http.responseText);
	  $('.response').html(http.responseText);
      if (http.responseText.indexOf(f.nameFF.value) == 0) { // очистить поле сообщения, если в ответе первым словом будет имя отправителя
        f.messageFF.removeAttribute('value');
        f.messageFF.value='';
      }
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
  http.send(new FormData(f));
}, false);*/

/*$(document).ready(function() {
	setInterval(function() {
		$t=$('#client').html();
		$('#client').html(parseInt($t)+1);
	}, 5000);
	setInterval(function() {
		$t=$('#zaim').html();
		$('#zaim').html(parseInt($t)+1);
	}, 7000);
});*/
</script>
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
