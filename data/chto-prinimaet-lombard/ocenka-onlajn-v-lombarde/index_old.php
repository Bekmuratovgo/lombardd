<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Оценка ювелирных изделий в ломбарде онлайн, оценить украшение в Москве онлайн — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", "Оценить ювелирное изделие онлайн в ломбарде Москвы. «Первый ювелирный ломбард» проводит оценку ювелирных украшений онлайн. Экспертная оценка, выгодные цены, быстрое получение денег, филиалы рядом с метро.");
$APPLICATION->SetTitle("Оценка онлайн в ломбарде");
?><div class="text-default">
	<h1 class="promo-title">Онлайн оценка в ломбарде</h1>
</div>
<div class="nd_block_container">
	<div class="nd_block_01">
		<p>
			Драгоценные металлы и ювелирные изделия из них – проверенный веками способ сохранения и преумножения капиталов. Золото, серебро, платина, драгоценные камни дорожают с годами, причем темпы роста их стоимости опережают инфляцию, что позволяет уберечь накопления от обесценения. При возникновении потребности в деньгах, украшения можно продать или отдать в залог, быстро выручив необходимую сумму.
		</p>
		<p>
			Услуга «ломбард оценка онлайн» позволяет каждому владельцу ценных вещей – техники, швейцарских часов, драгоценностей – предварительно оценить их стоимость, не выходя из дома. Современные технологии и средства связи позволяют делать это оперативно и максимально объективно. Зная ценность активов, проще получить выгодный заем или адекватную сумму в скупке.
		</p>
	</div>
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
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>