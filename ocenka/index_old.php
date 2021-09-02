<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оценка");
$APPLICATION->SetPageProperty("robots", "noindex, nofollow");
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
    width: 235px;
    margin: 0px auto;
}
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}
.rating:not(:checked) > label {
    float:right;
    width:47px;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:300%;
    line-height:1.2;
    color:#ea0;
}
.rating:not(:checked) > label:before {
    content: '☆ ';
}
.rating > input:checked ~ label {
    color: #ea0;
}
.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: #ea0;
}
.rating:not(:checked) > label:hover:before,
.rating:not(:checked) > label:hover ~ label:before,
.rating > input:checked ~ label:before{
    content: '★ ';
}
.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
</style>
<script src="/tpl/js/ocenka-form.js"></script>
<div id="ocenka">
<p class="title"><b>Пожалуйста, оцените наш сервис</b></p>
<ul>
	<li><span>1</span> - Полная катастрофа</li>
	<li><span>2</span> - Плохо</li>
	<li><span>3</span> - Средне. Могло быть лучше</li>
	<li><span>4</span> - Все хорошо</li>
	<li><span>5</span> - Отлично! Буду вас рекомендовать</li>
</ul>
<p class="title"><b>Выбрать оценку</b></p>
	<div id="callback4">
		<form id="form_callback4" action="" method="post" name="form_callback4">
			<fieldset class="rating">
				<input type="radio" id="star5" name="rating" value="5" /><label for="star5">5 stars</label>
				<input type="radio" id="star4" name="rating" value="4" /><label for="star4">4 stars</label>
				<input type="radio" id="star3" name="rating" value="3" /><label for="star3">3 stars</label>
				<input type="radio" id="star2" name="rating" value="2" /><label for="star2">2 stars</label>
				<input type="radio" id="star1" name="rating" value="1" /><label for="star1">1 star</label>
			</fieldset>
			<textarea rows="7" cols="40" name="comment" placeholder="Можете добавить комментарий"></textarea><br/><br/>
			<? $delimiter = array('?','&');
			$replace = str_replace($delimiter, $delimiter[0], $_SERVER['REQUEST_URI']);
			$result = explode($delimiter[0], $replace); ?>
			<input id="phone" name="phone" type="hidden" value="<?=$result[1]?>">
			<input id="otdel" name="otdel" type="hidden" value="<?=urldecode($result[2]);?>">
			<input class="form_callback_submit4 btn btn_get" type="submit" value="Отправить"/>
			<div class="error_text4"></div>
		</form><br/>
		<div class="success4" style="display: none;">
			 Спасибо!<br>Ваша оценка успешно отправлена.
		</div><br/><br/>
	</div> 
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>