<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Онлайн оценка часов по фотографии — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", "★ Онлайн оценка часов по фотографии ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Онлайн оценка часов по фотографии");
?>
<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

<div class="text-default">
	<h1 class="promo-title">Онлайн оценка часов по фотографии</h1>
</div>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_online_otsenka.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_uznai_stoimost.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_shema_raboty_online_otsenki.php', Array(), Array("MODE"=>"php"))?>

<div class="nd_block_container">
	<p>«Первый ювелирный ломбард» на протяжении многих лет занимается скупкой качественных швейцарских часов в Москве, предлагая клиентам выгодные условия сотрудничества. У нас высокие цены, прозрачные условия выплат, гарантия надежного хранения ценных вещей в течение срока, обозначенного договора.</p>

	<p>Также у нас вы можете оценить часы онлайн по фото и узнать точную, объективную стоимость, не отрываясь от повседневных дел. Чтобы воспользоваться услугой профессионального эксперта-оценщика, вам нужно прислать фото часов с указанием веса и пробы, после чего отправить снимки по электронной почте или воспользоваться <a href="/data/chto-prinimaet-lombard/ocenka-onlajn-v-lombarde/">формой на сайте</a>. Не забудьте указать в письме с фотографиями контактную информацию – имя, номер телефона, email. Информация нужна только для связи!</p>
</div>	
<div class="space_50"></div><br><br><br><br>

<div class="nd_block_container">	
	<div class="nd_block_03">
		<h2>Как производится оценка</h2>

		<p>В нашем ломбарде работают профессиональные эксперты, которые имеют солидный практический опыт оценивания драгоценных изделий. В их распоряжении современные технологии и навыки, полученные за многие годы работы. Оценка по фото позволяет рассчитать предварительную стоимость вещей. Чтобы узнать точную сумму часовой специалист должен осмотреть прибор вживую</p>

		<p>Аксессуары с большим содержанием драгоценных металлов ценятся намного выше. Услуга оказывается онлайн совершенно бесплатно!</p>
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
