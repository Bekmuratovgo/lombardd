<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Онлайн оценка швейцарских часов — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", "★ Онлайн оценка швейцарских часов ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Онлайн оценка швейцарских часов");
?>
<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

<div class="text-default">
	<h1 class="promo-title">Онлайн оценка швейцарских часов</h1>
</div>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_online_otsenka.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_uznai_stoimost.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_shema_raboty_online_otsenki.php', Array(), Array("MODE"=>"php"))?>

<div class="nd_block_container">
	<p>Швейцарские часы – престижный, дорогой аксессуар, а также выгодная инвестиция. Даже спустя десятки лет они будут исправно показывать время и сохранят первозданную внешнюю привлекательности. А если вам срочно потребуются деньги, вы сможете хорошо продать часы или заложить их в ломбард. </p>

	<p>Мы на протяжении многих лет занимаемся скупкой брендовых аксессуаров в Москве, имеем безупречную деловую репутацию и предлагаем клиентам выгодные условия сотрудничества. Вы всегда можете рассчитывать на адекватные цены, точную оценку, моментальную выплату денег любым удобным для вас способом.</p>

</div>	
<div class="space_50"></div><br><br><br><br>

<div class="nd_block_container">	
	<div class="nd_block_03">
		<h2>Как проводится оценка</h2>

		<p>Онлайн оценка швейцарских часов – возможность узнать реальную стоимость изделия. Услуга может потребоваться по разным причинам: вы захотите сдать вещь в ломбард, либо, наоборот, соберетесь купить аксессуар с рук. В любом случае, зная реальную стоимость изделия вы не упустите своей выгодны. Производится онлайн оценка следующим образом:</p>
		<ol>
			<li>Вы фотографируете часы и высылаете снимки на электронную почту или через <a href="/data/chto-prinimaet-lombard/ocenka-onlajn-v-lombarde/">специальную форму на сайте</a>, с указанием веса и пробы изделия.</li>
			<li>Эксперт-оценщик рассматривает фото и быстро оценивает, учитывая вес и пробу изделия.</li>
			<li>С Вами свяжутся в удобном для Вас мессенджере или по телефону.</li>
		</ol>

		<p>Если озвученная цена вас устроит, вы сможете приехать к нам в офис, а мы произведем выкуп аксессуара. При совершении сделки заключается договор, где максимально прозрачно прописываются все условия, включая сроки. При необходимости мы всегда идем навстречу клиентам и продлеваем время выкупа оригинальных аксессуаров и украшений.</p>

		<p>Обратите внимание: если вы решите заложить швейцарские часы, онлайн оценка может быть только предварительной. Точную сумму озвучит часовой эксперт после личного осмотра аксессуара.</p>
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
