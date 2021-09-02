<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Онлайн оценка карманных часов — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", "★ Онлайн оценка карманных часов ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Онлайн оценка карманных часов");
?>
<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

<div class="text-default">
	<h1 class="promo-title">Онлайн оценка карманных часов</h1>
</div>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_online_otsenka.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_uznai_stoimost.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_shema_raboty_online_otsenki.php', Array(), Array("MODE"=>"php"))?>

<div class="nd_block_container">
	<p>Многие владельцы карманных часов даже не догадываются, какой ценностью они обладают. Существует огромный спрос на старинные хронометры, а также на современные модели, которые скупают коллекционеры и торговцы по очень высоким ценам. Поэтому, если у вас есть такой аксессуар, закажите оценку карманных часов онлайн в нашем ломбарде.</p>

	<p>Оценка производится опытными экспертами. У специалистов большая практика, что позволяет гарантировать высокую точность результатов.</p>
</div>	
<div class="space_50"></div><br><br><br><br>

<div class="nd_block_container">	
	<div class="nd_block_03">
		<h2>Как узнать, сколько стоят карманные часы</h2>

		<p>Зачем оценивать карманные часы? Для этого есть несколько причин. Во-первых, далеко не все продавцы аксессуаров честны с покупателями – часто под видом оригиналов предлагаются подделки. Во-вторых, если потребуется заложить аксессуар в ломбард или продать, вы точно будете знать его стоимость. Оценка карманных часов онлайн выполняется бесплатно! Чтобы заказать услугу, вам нужно сделать следующее:</p>
		<ul>
			<li>Заполните онлайн форму на сайте (обязательно укажите контактные данные);</li>
			<li>Приложите качественные фото аксессуара (желательно с разных ракурсов), а также вес и пробу часов;</li>
			<li>Дождитесь обратной связи.</li>
		</ul>

		<p>По указанному номеру телефона вам позвонит квалифицированный эксперт, который озвучит примерную стоимость аксессуара. Обратите внимание: цена по фотографии ориентировочная. Чтобы определить окончательную цену, специалист должен осмотреть изделие в одном из наших отделений. Если озвученная сумма вас устроит, мы выкупим хронометры – расчет предоставляем моментально наличными, либо банковским переводом.</p>
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
