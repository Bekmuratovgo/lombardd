<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оценка");
$APPLICATION->SetPageProperty("description", '★ Оценка ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47');
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


.rating{
    width: 400px;
    margin: 0px auto 40px;
}
.comment{
    width: 240px;
    margin: 0px auto;
}
.rating:not(:checked) > input, .comment:not(:checked) > input {
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
.comment:not(:checked) > label {
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
.comment:not(:checked) > label:after {
    content: ' \25CF';
	color:#eee;
	font-size: 300%;
	display: block;
	margin-top: 16px;
}
.comment:not(:checked) > label:first-of-type:after {
	margin-top: 0px;
}
.rating > input:checked ~ label,.comment > input:checked + label {
    color: #e21f26;
}
.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label,
.comment:not(:checked) > label:hover,
.comment:not(:checked) > label:hover + label {
    color: #e21f26;
}
.rating:not(:checked) > label:hover:after,
.rating:not(:checked) > label:hover ~ label:after,
.rating > input:checked ~ label:after,
.comment:not(:checked) > label:hover:after,
.comment > input:checked + label:after{
    content: ' \25CF';
	color:#e21f26;
}
.rating > label:active,.comment > label:active {
    position:relative;
    top:2px;
    left:2px;
}
.title_lombard{color:#e21f26;}
textarea{text-align: center;}
.ocenka_logo{width: 160px;display: inline-block;text-align: left;}
#ocenka_video{margin-bottom:50px;width:900px;height:500px;}
@media only screen and (max-width:768px){
	textarea{width: 100%;}
}
@media only screen and (max-width:980px){
	.ocenka_logo{width: auto;}
}
@media only screen and (max-width:400px){
	.rating{width: 280px;}
	.rating:not(:checked) > label {width: 18px;}
}
@media (max-width: 1065px){
	.middle_ocenka {margin-top: 45px;}
}
#callback5 .service input[name=service] {float:left; margin-right:5px;}
#callback5 .service label {display:block; margin:0; padding-left:20px;}
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
			
<p class="title mob-pad-top"><b>Благодарим Вас за визит в<br/><span class="title_lombard">Первый Ювелирный Ломбард<?if($otdel){?> отделение <?=$otdel;}?>!</span></b></p>
<p>Помогите нам сделать нас лучше. Оставьте отзыв:</p>
	<div id="callback4">
		<form id="form_callback4" action="" method="post" name="form_callback4">
			<p class="bold">Оцените работу ювелирного эксперта:</p>
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
			
			<p><b>Подскажите, откуда Вы узнали о нас?</b></p>
			<fieldset class="service">
				<input type="radio" name="service" value="Поиск в интернете" checked /> <label>Поиск в интернете</label><br/>
				<input type="radio" name="service" value="Яндекс карты" /> <label>Яндекс карты</label><br/>
				<input type="radio" name="service" value="Гугл карты" /> <label>Гугл карты</label><br/>
				<input type="radio" name="service" value="2 ГИС" /> <label>2 ГИС</label><br/>
				<input type="radio" name="service" value="Наружная реклама" /> <label>Наружная реклама</label><br/>
				<input type="radio" name="service" value="Рекомендация знакомых" /> <label>Рекомендация знакомых</label>
			</fieldset><br/>
			<p><b>Ваши варианты</b></p>
			<textarea rows="2" cols="60" name="variant" placeholder="Мой ответ"></textarea><br/><br/>
			
			<?/*<p class="bold">Что мы можем улучшить для Вас?</p>
			<textarea rows="2" cols="60" name="improve" placeholder="Мой ответ"></textarea><br/><br/>*/?>
			<p>Желаете ли Вы стать участником нашей бонусной программы?</p>
			<fieldset class="comment">
				<input type="radio" id="dont" name="comment" value="Я не знаю о программе" /><label for="dont">Я не знаю<br/>о программе</label>
				<input type="radio" id="no" name="comment" value="Нет" /><label for="no">Нет</label>
				<input type="radio" id="yes" name="comment" value="Да" checked /><label for="yes">Да</label>
			</fieldset><br/><br/>
			<input id="phone" name="phone" type="hidden" value="<?=$result[1]?>">
			<input id="otdel" name="otdel" type="hidden" value="<?=$otdel;?>">
			<input class="form_callback_submit4 btn btn_get" type="submit" value="Отправить"/>
			<div class="error_text4"></div>
		</form><br/>
		<div class="success4" style="display: none;">
			 Спасибо!<br>Ваша оценка успешно отправлена.
		</div><br/><br/>
	</div> 
	
	<!--noindex-->
	<iframe id="ocenka_video" src="https://www.youtube.com/embed/PtIfYns1KHQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<!--/noindex-->
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
