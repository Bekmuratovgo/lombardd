<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оценка лояльности");
$APPLICATION->SetPageProperty("description", '★ Оценка лояльности ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
?>
<style type="text/css">
#ocenka{text-align:center;}
#ocenka .title {
    font-size: 18px;
    margin: 20px 0px 10px;
}
#ocenka ul {
    text-align: left;
    display: block;
    width: 270px;
    margin: 0px auto;
    list-style: none;
}
#ocenka ul span {
    color: #e21f26;
    font-weight: bold;
}
#ocenka .btn {
    width: 150px;
    height: 40px;
    font-size: 16px;
    padding: 0px;
}
#ocenka textarea {
    padding: 10px;
}

rating {
    float:left;
}
.rating {
    width: 400px;
    margin: 0px auto 40px;
}
.share{
    width: 120px;
    margin: 0px auto;
}
.rating:not(:checked) > input, .share:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}
.rating:not(:checked) > label {
    float:right;
    cursor:pointer;
    color:#000;
	width: 30px;
    margin: 0px 5px;
	font-weight: bold;
}
.share:not(:checked) > label {
    float:right;
    cursor:pointer;
    color:#000;
    margin: 0px 15px;
	font-weight: bold;
}
.rating:not(:checked) > label:after {
    content: ' \25CF';
	color:#eee;
	font-size: 300%;
	display: inline-block;
}
.share:not(:checked) > label:after {
    content: ' \25CF';
	color:#eee;
	font-size: 300%;
	display: block;
}
.share:not(:checked) > label:first-of-type:after {
	margin-top: 0px;
}
.rating > input:checked ~ label,.share > input:checked + label {
    color: #e21f26;
}
.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label,
.share:not(:checked) > label:hover,
.share:not(:checked) > label:hover + label {
    color: #e21f26;
}
.rating:not(:checked) > label:hover:after,
.rating:not(:checked) > label:hover ~ label:after,
.rating > input:checked ~ label:after,
.share:not(:checked) > label:hover:after,
.share > input:checked + label:after{
    content: ' \25CF';
	color:#e21f26;
}
.rating > label:active,.share > label:active {
    position:relative;
    top:2px;
    left:2px;
}
.title_lombard{color:#e21f26;}
textarea{text-align: center;}
.ocenka_logo{width: 160px;display: inline-block;text-align: left;}
#ocenka_video{margin-bottom:50px;width:900px;height:500px;}
#callback5 .service input[name=service] {float:left; margin-right:5px;}
#callback5 .service label {display:block; margin:0; padding-left:20px;}
@media only screen and (max-width:980px){
	.ocenka_logo{width: auto;}
	#ocenka_video{height:400px;width: 100%;}
}
@media only screen and (max-width:768px){
	#ocenka_video{height:300px;width: 100%;}
}
@media only screen and (max-width:400px){
	.rating{width: 280px;}
	.rating:not(:checked) > label {width: 18px;}
}
@media (max-width: 1065px){
	.middle_ocenka {margin-top: 45px;}
}
.service {
    text-align: left;
    max-width: 470px;
    margin: 0px auto;
}
@media only screen and (max-width:470px){
	.service, #ocenka textarea{width: 90%;}
}
</style>
<script src="/tpl/js/ocenka-form.js"></script>
<div id="ocenka">
<? $delimiter = array('?','&');
$replace = str_replace($delimiter, $delimiter[0], $_SERVER['REQUEST_URI']);
$result = explode($delimiter[0], $replace);
$otdel=urldecode($result[2]);
if(urldecode($result[2])=='АКАД') $otdel='Академическая';
elseif(urldecode($result[2])=='АЛЕК') $otdel='Алексеевская';
elseif(urldecode($result[2])=='АЛТУ') $otdel='Алтуфьево';
elseif(urldecode($result[2])=='АЭРО') $otdel='Аэропорт';
elseif(urldecode($result[2])=='БРАТ') $otdel='Братиславская';
elseif(urldecode($result[2])=='МОЛО') $otdel='Молодежная';
elseif(urldecode($result[2])=='ЧЕРЕ') $otdel='Новые Черемушки';
elseif(urldecode($result[2])=='ОТРА') $otdel='Отрадное';
elseif(urldecode($result[2])=='ВЕРН') $otdel='Проспект Вернадского';
elseif(urldecode($result[2])=='ПРОФ') $otdel='Профсоюзная';
elseif(urldecode($result[2])=='РЕЧН') $otdel='Речной Вокзал';
elseif(urldecode($result[2])=='РИМС') $otdel='Римская';
?>
			
<p class="title mob-pad-top"><b>Благодарим Вас за то, что воспользовались нашими услугами!</b></p>
	<div id="callback5">
		<form id="form_callback5" action="" method="post" name="form_callback5">
			<p>Какая вероятность того, что Вы порекомендуете наши услуги своим друзьям?</p>
			<fieldset class="rating">
				<input type="radio" id="star10" name="rating" value="10" /><label for="star10">10</label>
				<input type="radio" id="star9" name="rating" value="9" /><label for="star9">9</label>
				<input type="radio" id="star8" name="rating" value="8" /><label for="star8">8</label>
				<input type="radio" id="star7" name="rating" value="7" /><label for="star7">7</label>
				<input type="radio" id="star6" name="rating" value="6" /><label for="star6">6</label>
				<input type="radio" id="star5" name="rating" value="5" /><label for="star5">5</label>
				<input type="radio" id="star4" name="rating" value="4" /><label for="star4">4</label>
				<input type="radio" id="star3" name="rating" value="3" /><label for="star3">3</label>
				<input type="radio" id="star2" name="rating" value="2" /><label for="star2">2</label>
				<input type="radio" id="star1" name="rating" value="1" /><label for="star1">1</label>
			</fieldset>
			<p><b>Что нам сделать, чтобы Вы вернулись к нам еще раз?</b></p>
			<textarea rows="2" cols="60" name="comment" placeholder="Мой ответ"></textarea><br/><br/>
			<p><b>Вы хотели бы видеть у нас эти услуги?</b></p>
			<fieldset class="service">
				<input type="radio" name="service" value="Получить деньги без залога (микрозайм)" checked /> <label>Получить деньги без залога (микрозайм)</label><br/>
				<input type="radio" name="service" value="Ремонт изделия" /> <label>Ремонт изделия</label><br/>
				<input type="radio" name="service" value="Чистка изделия" /> <label>Чистка изделия</label><br/>
				<input type="radio" name="service" value="Хранение любых (в том числе не драгоценных) изделий" /> <label>Хранение любых (в том числе не драгоценных) изделий</label><br/>
				<input type="radio" name="service" value="Выкуп изделия из другого ломбарда (перезалог в наш ломбард)" /> <label>Выкуп изделия из другого ломбарда (перезалог в наш ломбард)</label><br/>
				<input type="radio" name="service" value="Доставка изделий на дом курьером" /> <label>Доставка изделий на дом курьером</label>
			</fieldset><br/>
			<p><b>Ваши варианты</b></p>
			<textarea rows="2" cols="60" name="variant" placeholder="Мой ответ"></textarea><br/><br/>
			<input id="phone" name="phone" type="hidden" value="<?=$result[1]?>">
			<input id="otdel" name="otdel" type="hidden" value="<?=$otdel;?>"><br/>
			<input class="form_callback_submit5 btn btn_get" type="submit" value="Отправить"/>
			<div class="error_text5"></div>
		</form><br/>
		<div class="success5" style="display: none;">
			 Спасибо!<br>Ваша оценка успешно отправлена.
		</div><br/><br/>
	</div>
	<!--noindex-->
	<iframe id="ocenka_video" src="https://www.youtube.com/embed/PtIfYns1KHQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<!--/noindex-->
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
