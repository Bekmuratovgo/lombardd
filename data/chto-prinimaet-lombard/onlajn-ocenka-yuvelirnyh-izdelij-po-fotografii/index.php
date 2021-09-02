<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Онлайн оценка ювелирных изделий по фотографии — «Первый ювелирный ломбард»');
$APPLICATION->SetPageProperty("description", "★ Онлайн оценка ювелирных изделий по фотографии ✔ Первый Ювелирный Ломбард в Москве ✔ Скупка золота, серебра и платины ✔ Сдать или продать драгметаллы и ювелирные изделия ✔ Дорого ✔ Скупка драгоценных камней ✔ Онлайн оценка стоимости ☎ Звоните: +7 (495) 128-69-47");
$APPLICATION->SetTitle("Онлайн оценка ювелирных изделий по фотографии");
// $APPLICATION->SetAdditionalCSS('/na-vyezd/css/na_vyezd.css');
?>
<link href="/na-vyezd/css/na_vyezd.css" type="text/css" data-template-style="true" rel="stylesheet">

<div class="text-default">
	<h1 class="promo-title">Онлайн оценка ювелирных изделий по фотографии</h1>
</div>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_online_otsenka.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_uznai_stoimost.php', Array(), Array("MODE"=>"php"))?>

<?$APPLICATION->IncludeFile('/data/chto-prinimaet-lombard/__include/block_shema_raboty_online_otsenki.php', Array(), Array("MODE"=>"php"))?>

<div class="nd_block_container">
	<p>Если вы хотите заложить украшение в ломбард, онлайн оценка ювелирных изделий по фотографии – оптимальное решение. Таким способом вы сможете, не выходя из дома узнать реальную цену вещи, причем совершенно бесплатно!</p>

	<p>Заказать online оценку по фото вы можете в нашем ломбарде. У нас работают опытные оценщики, которые имеют солидный практический опыт, прекрасно разбираются в антикварных и современных украшениях, а также отлично знают особенности обработки драгоценных металлов и камней, что позволяет гарантировать 100% точность и объективность результатов.</p>
</div>
<div class="space_50"></div><br><br><br><br>

<div class="nd_block_container">	
	<div class="nd_block_03">
		<h2>Что влияет на оценочную стоимость</h2>

		<p>Профессиональная оценка ювелирных украшений позволяет определить не только реальную стоимость изделия по фотографии, но и узнать его настоящую ценность. Как показывает практика, далеко не все, что покупается в качестве ювелирного изделия соответствует данному статусу. Подтвердить или опровергнуть его поможет эксперт-оценщик. При проведении процедуру учитываются множественные факторы, но основными являются следующие:</p>
		<ol>
			<li>Внешние данные изделия (наличие сколов, трещин и других дефектов снижает стоимость).</li>
			<li>Год производства.</li>
			<li>Состав драгоценного сплава (наличие различных примесей тоже влияет на цену).</li>
			<li>Проба.</li>
			<li>Комплектность (если оценивается набор украшений).</li>
			<li>Дизайн.</li>
			<li>Торговая марка.</li>
			<li>Коллекция.</li>
			<li>Декор (драгоценные и полудрагоценные камни).</li>
		</ol>

		<p>Наличие сопроводительных документов положительно влияет на итоговую цену изделия. Офис нашего ломбарда находится в Москве. Просто пришлите фотографию изделия с разных ракурсов по почте или <a href="/data/chto-prinimaet-lombard/ocenka-onlajn-v-lombarde/">через форму на сайте</a> (с указанием веса и пробы изделия), чтобы опытный специалист определил предварительную стоимость и предоставил ответ онлайн. Оперативность и точность гарантируем!</p>
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
