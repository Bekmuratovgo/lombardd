<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Онлайн оценка часов — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", "★ Онлайн оценка часов ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Онлайн оценка часов");
?>
<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

<div class="text-default">
	<h1 class="promo-title">Онлайн оценка часов</h1>
</div>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_online_otsenka.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_uznai_stoimost.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_shema_raboty_online_otsenki.php', Array(), Array("MODE"=>"php"))?>

<div class="nd_block_container">
	<p>Качественные брендовые часы – хорошая инвестиция. Они высоко ценятся, считаются престижными, а если возникнут временные материальные трудности, их можно хорошо продать или заложить в ломбард. Но для этого неплохо бы предварительно узнать их оценочную стоимость, чтобы не потерять свою выгоду.</p>

	<p>Сделать это очень просто – воспользуйтесь услугой нашего ломбарда по бесплатной оценке онлайн. У нас работают лучшие оценщики Москвы, которые выполняют работу быстро, точно и качественно.</p>
</div>	
<div class="space_50"></div><br><br><br><br>

<div class="nd_block_container">	
	<div class="nd_block_03">
		<h2>Как проводится оценка стоимости</h2>

		<p>Если вам нужно узнать, сколько стоят брендовые часы, оценка онлайн поможет сделать это без потери времени и финансов. Просто сделайте фотографию аксессуара, заполните простую заявку и отправьте по электронной почте или через <a href="/data/chto-prinimaet-lombard/ocenka-onlajn-v-lombarde/">форму на сайте</a>. Мы оцениваем часы из драгоценных металлов по весу и пробе изделия. При наличии драгоценных камней производится отдельная оценка камней.</p>

		<p>Обратите внимание: наш ломбард принимает аксессуары с документами и без, в любом состоянии, с дефектами. Но в этом случае стоимость изделия снижается. Можете также написать цену, которую хотели бы получить за аксессуар. Обязательно укажите контактные данные, чтобы специалист смог связаться с вами и озвучить результат online оценки. Если озвученная стоимость вас устроит, мы заключим договор и предоставим деньги любым удобным для вас способом.</p>

		<p>«Первый ювелирный ломбард» на протяжении многих лет занимается выкупом брендовых часов и имеет безупречную деловую репутацию. У нас вы можете оценить часы онлайн совершенно бесплатно!</p>
	</div>
	
	 <?$APPLICATION->IncludeFile(
		"/include/lombard_catalog.php",
		Array(),
		Array("MODE"=>"php") 
	);?>
</div>

<?//$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_question_answer.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_thank_you.php', Array(), Array("MODE"=>"php"))?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
