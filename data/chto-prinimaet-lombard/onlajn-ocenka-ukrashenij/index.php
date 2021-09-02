<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Онлайн оценка украшений — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", "★ Онлайн оценка украшений ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Онлайн оценка украшений");
?>
<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

<div class="text-default">
	<h1 class="promo-title">Онлайн оценка украшений</h1>
</div>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_online_otsenka.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_uznai_stoimost.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_shema_raboty_online_otsenki.php', Array(), Array("MODE"=>"php"))?>

<div class="nd_block_container">
	<p>При необходимости решить временные финансовые трудности совсем необязательно брать кредит в банке. Если вы владеете ювелирным украшением, можно заложить его в ломбард, а потом благополучно выкупить.</p>

	<p>Мы принимаем различные драгоценные изделия, комплекты, сувенирные и антикварные вещи, предлагая клиентам высокие цены и объективную оценку онлайн. В ломбарде работают профессиональные оценщики, которые владеют глубокими знаниями в своей отрасли, используют инновационные метода и оборудование, а также прекрасно разбираются в особенностях украшений, произведенных в разное время.</p>
</div>	
<div class="space_50"></div><br><br><br><br>

<div class="nd_block_container">	
	<div class="nd_block_03">
		<h2>Что нужно, чтобы воспользоваться услугой</h2>

		<p>Оценка украшений онлайн в нашем ломбарде производится совершенно бесплатно! Чтобы воспользоваться услугой опытного специалиста, вам нужно сделать следующее:</p>
		<ol>
			<li>Сделать несколько фотографий изделий с разных ракурсов (если изделие инкрустировано бриллиантом или другим драгоценным камнем, его нужно снять в увеличенном виде).</li>
			<li>Отправить полученные фото по электронной почте нашему эксперту-оценщику или через <a href="/data/chto-prinimaet-lombard/ocenka-onlajn-v-lombarde/">форму на сайте</a> (предварительно указав вес и пробу изделия)</li>
			<li>Дождаться заключения специалиста (заявки обрабатываем в максимально сжатые сроки).</li>
		</ol>
		
		<p>Если итоговая стоимость вас устроит, можете прийти к нам в офис, чтобы заключить договор и получить деньги. При online оценке учитываются разные факторы, включая внешний вид изделия, дизайн, декор, год выпуска, тип и состав драгоценного металла, наличие и отсутствие документов. Расчет предоставляется удобным для вас способом: наличными в офисе или банковским переводом (необходимо предоставить реквизиты). Принимаем ювелирные украшения всех видов и гарантируем безопасность их хранения на протяжении предусмотренного договором срока. При необходимости дату выкупа можно изменить!</p>

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
