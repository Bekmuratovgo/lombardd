<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Оценка ювелирных изделий в ломбарде онлайн, оценить украшение в Москве онлайн — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", "★ Онлайн оценка в ломбарде ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Оценка онлайн в ломбарде");
$APPLICATION->SetPageProperty("robots", "noindex, nofollow");
?>
<?$APPLICATION->IncludeFile('/include/visitors_info.inc.php', Array('ALREADY'=>'y'), Array('MODE'=>'text'));?>

<div class="text-default">
	<h1 class="promo-title">Онлайн оценка в ломбарде</h1>
</div>
<div class="contact_form" style="float: right;">
	<div class="container">
		<span class="caption h2">Онлайн оценка</span>
		<div class="space_30"></div>
		<form class="price__form js-ocenka" enctype="multipart/form-data" method="post">
				 <?=bitrix_sessid_post();?>
				<div class="form-inputs__block form-small-inputs__block">
					<input name="fio" type="text" class="form-inputs__field js-required" data-error="Введите Имя" placeholder="Ваше имя">
				</div>
				<div class="form-inputs__block form-small-inputs__block">
					<?/*<input name="metal" type="text" class="form-inputs__field js-required" data-error="Металл" placeholder="Металл">*/?>
					<select name="metal" class="form-inputs__field js-required" data-error="Металл">
						<option value="Золото">Золото</option>
						<option value="Серебро">Серебро</option>
						<option value="Платина">Платина</option>
					</select>
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
					<span>Прикрепить фото: </span><input type="file" name="uploadfile"  id="uploadfile">
				</div>
				<div class="g-recaptcha" data-sitekey="6LcEW8cUAAAAAA7GLbwMqyLByPzoiWBH-Ry0UaQl"></div>
				<br/><p>Или воспользуйтесь удобным для вас мессенджером:</p>
				<div class="soc-icons-header">
					<a class="vb" href="viber://add?number=79096693140" onclick="yaCounter33166953.reachGoal('viber'); return true;"></a>
					<a class="wa" href="https://api.whatsapp.com/send?phone=79096693140" onclick="yaCounter33166953.reachGoal('whatsapp'); return true;"></a>
					<a class="tg" href="https://tele.click/Lombardd_1" onclick="yaCounter33166953.reachGoal('telegram'); return true;"></a>
				</div>
				<div class="text-danger" id="recaptchaError"></div><br/>
				<button type="submit" class="btn price__submit js-submit" onClick="ym(33166953,'reachGoal','online_ocenka');"> <span class="btn__text btn__text_tablet">Отправить заявку</span> <span class="btn__text btn__text_desktop">Отправить заявку</span> </button>
				<div class="admire">
					<br/>Нажимая на кнопку «<span class="btn__text btn__text_tablet">Отправить заявку</span>
					<span class="btn__text btn__text_desktop">Отправить заявку</span>»,
					я подтверждаю согласие c <a href="/data/privacy-policy/" target="_blank">политикой конфиденциальности</a>
					и даю согласие на обработку персональных данных
				</div>
			</form>
	</div>
	<div class="vs-center"><?$APPLICATION->IncludeFile('/include/visitors_info.inc.php', Array('IN_PROCESS'=>'y'), Array('MODE'=>'text'));?></div>
</div>
<div class="row-info text-info nd_block_container">
	<div class="block-advantages">
	<p class="caption">Узнай стоимость своего изделия<br/>прямо сейчас!</p>
	<p class="caption">Оставь заявку и получи оценку.</p>
		<div class="list-advantages">
			<div class="adg-item">
				<img src="/na-vyezd/img/ico_vyezd12.png" alt="" title="">
				<p class="name">УДОБНО</p>
				<p class="desc">Узнайте стоимость Вашего изделия не выходя из дома!</p>
			</div>
			<div class="adg-item">
				<img src="/na-vyezd/img/ico_vyezd13.png" alt="" title="">
				<p class="name">БЫСТРО</p>
				<p class="desc">Онлайн оценка займет от 1 до 5 минут!</p>
			</div>
			<div class="adg-item">
				<img src="/na-vyezd/img/ico_vyezd14.png" alt="" title="">
				<p class="name">Бесплатно</p>
				<p class="desc">Услуга абсолютно бесплатна!</p>
			</div>
		</div>
	</div>
	<div class="space_50"></div>
</div>
<div style="clear:both"></div><br/><br/><br/>

<div class="container">
	<span class="caption h2">Схема работы онлайн оценки</span>
	<div class="block-advantages">
		<div class="list-advantages list-advantages-onlajn">
			<div class="adg-item">
				<img src="/na-vyezd/img/ico_vyezd7.png" alt="" title="">
				<p class="name">Оставляете заявку на сайте</p>
			</div>
			<div class="schema-arrow">
				<img src="/na-vyezd/img/arrow2.png" alt="" title="">
			</div>
			<div class="adg-item">
				<img src="/na-vyezd/img/ico_vyezd8.png" alt="" title="">
				<p class="name">Прикладываете изображения изделия под разным ракурсом</p>
			</div>
			<div class="schema-arrow">
				<img src="/na-vyezd/img/arrow2.png" alt="" title="">
			</div>
			<div class="adg-item">
				<img src="/na-vyezd/img/ico_vyezd9.png" alt="" title="">
				<p class="name">Наши специалисты связываются с вами для уточнения веса и пробы</p>
			</div>
			<div class="adg-item">
				<img src="/na-vyezd/img/ico_vyezd10.png" alt="" title="">
				<p class="name">Специалисты проводят оценку</p>
			</div>
			<div class="schema-arrow">
				<img src="/na-vyezd/img/arrow2.png" alt="" title="">
			</div>
			<div class="adg-item">
				<img src="/na-vyezd/img/ico_vyezd11.png" alt="" title="">
				<p class="name">Вы выбираете наиболее удобное время и отделение для сдачи изделия</p>
			</div>
		</div>
	</div>
	<div class="space_50"></div>
</div>

<div class="nd_block_container">
	<p>Первый ювелирный ломбард оказывает услугу по ОНЛАЙН ОЦЕНКЕ ИЗДЕЛИЯ.</p>
	<p>Онлайн оценка позволяет узнать ориентировочную стоимость изделия, которую мы готовы предложить за Ваше украшение, не выходя из дома! Эта услуга поможет сэкономить Вам много времени!</p>
	<p>Для ОНЛАЙН ОЦЕНКИ Вам следует заполнить нашу форму ниже, прикрепив фото и указав вес и пробу изделия, и указав удобную форму связи с Вами.</p>
	<p>После заполнения данной формы, ювелирный эксперт проведет оценку Вашего ювелирного изделия, а наш менеджер свяжется с Вами по телефону или мессенджере (WhatsApp, Viber, Telegram) и сообщит примерную сумму, на которую Вы можете рассчитывать, обратившись к нам в ломбард.</p>
	<p>Обращаем Ваше внимание, что если указанные вами данные предмета оценки не будут совпадать при его проверке, то цена может измениться, относительно ранее озвученной, как в меньшую, так и в большую сторону.  Ювелирные вставки в виде бриллиантов требуют тщательного осмотра через специальные приборы, поэтому бриллианты оцениваются только в отделении ломбарда. Если в Вашем изделии присутствуют бриллианты, Вы можете рассчитывать на дополнительную сумму за бриллиант!</p>
</div>
<div class="space_50"></div><br><br><br><br>

<div class="nd_block_container">
	<div class="nd_block_03">
		<h2>Как осуществить оценку online?</h2>
		<p>
			Процедура оценки онлайн проста. Для этого необходимо на сайте заполнить заявку, указав необходимую информацию:
		</p>
		<ul>
			<li>фото изделия в разных ракурсах, чтобы оценщик мог хорошо его рассмотреть</li>
			<li>вид металла, проба, вес</li>
			<li>вид и каратность камней (при наличии)</li>
			<li>информация о производителе, ювелире (если известна)</li>
			<li>наличие упаковки, чеков, сертификатов, иных документов, подтверждающих качество изделия</li>
			<li>информация о дефектах, поломках (при наличии)</li>
			<li>контактные данные заказчика для связи (телефон, e-mail)</li>
		</ul>
		<p>
			Чем больше информации об изделии предоставлено, тем точнее предварительная online оценка. Если какая-то информация отсутствует, не страшно. Опытные оценщики сделают вывод на основании богатого практического опыта.
		</p>
		<p>
			«Первый ювелирный ломбард» в Москве гарантирует конфиденциальность сделки. Информация, полученная от клиента, не разглашается третьим лицам. Услуга предоставляется бесплатно и ни к чему не обязывает клиента.
		</p>
		<p>
			В то же время, важно понимать, что онлайн оценка является ориентиром, а не экспертным заключением. Информацию о реальной стоимости изделия можно получить только после визуального осмотра и диагностики изделия экспертом.
		</p>
	</div>
	 <?$APPLICATION->IncludeFile(
	"/include/lombard_catalog.php",
	Array(),
	Array("MODE"=>"php")
);?>
</div><br><br><br><br>
<?/*
<div class="space_50"></div>
<div class="nd_block_container">
	<span class="caption h2">Вопрос-Ответ</span>

	<div class="accordion">
		<ul>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Как происходит онлайн-оценка?</span>
				<div class="msg">
					<p>Вы заполняете форму заявки или сразу высылаете фото, вес и пробу изделия в удобный для Вас мессенджер! Менеджер пересылает информацию ювелирному эксперту и ждет заключения. Далее менеджер связывается с Вами и оглашает  предварительную оценку изделия.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Сколько по времени занимает онлайн-оценка?</span>
				<div class="msg">
					<p>Онлайн оценка занимает от 1 до 10 минут!</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Это окончательная оценка?</span>
				<div class="msg">
					<p>Онлайн оценка является предварительной. Если указанные вами характеристики предмета оценки не будут совпадать при его проверке, то цена может измениться, относительно ранее озвученной, как в меньшую, так и в большую сторону.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Как происходит оценка камня по фото?</span>
				<div class="msg">
					<p>Предварительная оценка камня по фото возможна, если Вы пришлете характеристики данного камня. Точную стоимость камня возможно определить только после личного осмотра экспертом!</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Онлайн оценка бесплатная?</span>
				<div class="msg">
					<p>Да, это услуга абсолютно бесплатна!</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Что можно оценить онлайн?</span>
				<div class="msg">
					<p>Мы можем дать предварительную оценку абсолютно любому изделию, если Вы укажите все параметры изделия.</p>
				</div>
			</li>
			<li>
				<input type="checkbox" checked>
				<i></i>
				<span class="title_block h2">Для чего нужно указывать вес и пробу изделия?</span>
				<div class="msg">
					<p>Вес и проба необходимы для предварительной оценки изделия. Чем больше данных об изделии Вы укажите, тем точнее будет предварительная оценка!</p>
				</div>
			</li>
		</ul>
	</div>
</div>
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
*/?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
