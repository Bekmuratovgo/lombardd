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

<script>
document.getElementById('feedback-form').addEventListener('submit', function(evt){
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
}, false);

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
