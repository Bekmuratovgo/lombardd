<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Оценка ювелирных изделий онлайн, оценить золотое изделие в Москве онлайн — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", "★ Онлайн оценка ювелирных изделий ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Онлайн оценка ювелирных изделий");
?>
<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

<div class="text-default">
	<h1 class="promo-title">Онлайн оценка ювелирных изделий</h1>
</div>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_online_otsenka.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_uznai_stoimost.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_shema_raboty_online_otsenki.php', Array(), Array("MODE"=>"php"))?>

<div class="nd_block_container">
	<p>Принесите ценные украшения и получите наличные деньги на руки моментально после оценки! Мы предоставляем наличные под залог ювелирных изделий и производим расчет стоимости, опираясь на состояние и ценность изделий. Точность и справедливость оценки гарантируем!</p>

	<p>Оцениваем эксклюзивные дизайнерские украшения: Cartier, Tiffany & Co, Bulgari, Chaumet, Boucheron, Buccellati, Bulgary и van Cheef & Arperls, а также ювелирные изделия массового производства.</p>
</div>	
<div class="space_50"></div><br><br><br><br>

<div class="nd_block_container">	
	<div class="nd_block_03">
		<h2>Зачем делать оценку</h2>

		<p>Оценка ювелирных изделий онлайн поможет определить реальную цену украшения. Допустим, вам срочно потребовались деньги, и вы планируете получить определенную сумму от продажи ценной вещи. В этом случае опытный эксперт-оценщик поможет узнать за сколько вы сможете это сделать. </p>

		<p>Аналогичная ситуация, если вы хотите купить украшение с рук – профессиональная оценка поможет не переплатить. Также оценить ювелирное изделий онлайн можно, когда вы хотите сдать его в ломбард. От стоимости украшения зависит сумма, которую вам предоставят под залог.</p>

		<h2>Преимущества онлайн-оценки</h2>

		<p>В «Первом ювелирном ломбарде» вы можете заказать профессиональную оценку драгоценностей онлайн совершенно бесплатно! У нас работают опытные ювелиры, которые прекрасно разбираются в современных и старинных украшениях, что позволяет объективно оценивать изделия. Клиентам мы предлагаем следующие преимущества:</p>
		<ul>
			<li>Всегда точная и объективная оценка стоимости изделий;</li>
			<li>Моментальная выплата наличными при согласии с оценочной стоимостью;</li>
			<li>Возможность продлить срок выкупа украшения;</li>
			<li>Гарантия безопасности изделия на период хранения в ломбарде.</li>
		</ul>
		
		<p>Наш ломбард находится в Москве, но мы принимаем заказы на оценку из других городов России. Результаты предоставляем online или по телефону – обращайтесь!</p>
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
