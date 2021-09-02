<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?use Bitrix\Main,  
	Bitrix\Main\Application, 
    Bitrix\Main\Context, 
    Bitrix\Main\Request, 
	Bitrix\Main\Loader,
    Bitrix\Main\Server,
	Bitrix\Main\Localization\Loc as Loc,    
	Bitrix\Main\Config\Option,    
	Bitrix\Sale\Delivery,    
	Bitrix\Sale\PaySystem,    
	Bitrix\Sale,    
	Bitrix\Sale\Order,    
	Bitrix\Sale\DiscountCouponsManager,    
	Bitrix\Main\Mail\Event,
	Bitrix\Highloadblock as HL,
	Bitrix\Main\Entity;


\Bitrix\Main\Loader::includeModule("highloadblock");
$request = Context::getCurrent()->getRequest();

function num2word($num, $words)
{
    $num = $num % 100;
    if ($num > 19) {
        $num = $num % 10;
    }
    switch ($num) {
        case 1: {
            return($words[0]);
        }
        case 2: case 3: case 4: {
        return($words[1]);
    }
        default: {
            return($words[2]);
        }
    }
}

function dateDoc($date)
{
	$s = strtotime($date) - strtotime(date("d.m.Y"));
	if($s > 0){
		$result["status"] = true;
	}else{
		$result["status"] = false;
	}
	if ($s < 0) $s = -$s; 
	if($s != 0){
		$result["data"] = $s / 86400;
	}else{
		$result["data"] = $s;
	}
		
	return $result;
}

$productName = array();
$productSumPay = array();
$docs = array();

$hlblDoc 	= 8;
$hlblProd 	= 9;

$hlblockDoc = HL\HighloadBlockTable::getById($hlblDoc)->fetch(); 
$entityDoc 	= HL\HighloadBlockTable::compileEntity($hlblockDoc); 
$entity_data_classDoc = $entityDoc->getDataClass();

$hlblockProd 	= HL\HighloadBlockTable::getById($hlblProd)->fetch(); 
$entityProd		= HL\HighloadBlockTable::compileEntity($hlblockProd); 
$entity_data_classProd = $entityProd->getDataClass(); 

$rsDataDoc = $entity_data_classDoc::getList(array(
	"select"	=> array("*"),
	"order"		=> array("UF_DATE_START" => "DESC"),
	"filter"	=> array("ID"=>$request["id"])
));
if($doc = $rsDataDoc->Fetch()){
	$products = $entity_data_classProd::getList(array(
		"select"	=> array("*"),
		"order"		=> array("UF_NAME" => "ASC"),
		"filter"	=> array("ID"=>$doc["UF_PRODUCT"])
	));
	$minPay = 0;
	$maxPay = 0;
	while($product = $products->Fetch()){
		$minPay += $product["UF_MIN_PAY"];
		$maxPay += $product["UF_MAX_PAY"];
	}
	if($minPay > $maxPay){
		$maxPay = $minPay;
	}
	$maxBonus = $doc["UF_BONUS_ALL"] - $doc["UF_BONUS_DISABLED"];
	?>

<div class="modal__close"></div>
<div class="modal__title">Оплата по договору <br> № <?=$doc["UF_NAME"]?> <br> от <?=$doc["UF_DATE_START"]->format("d.m.Y");?></div>

<form id="pyaformt">
	<div class="form-group">
		<span style="    display: none;">Сумма платежа:</span>
		<input style="    display: none;" id="slider-range-value" type="text" name="slider-range-value" value="<?=$minPay?>" data-min="<?=$minPay?>" data-max="<?=$maxPay?>" disabled>
		<span class="error-text">Можно выбрать одну из сумм платежа</span>
		<div id="slider-range2" style="    display: none;"></div>









<div id='min_max_btn'>
<div class='flex_min_max_el'><button id='pay_min_ajax_button' class='btn btn-outline flex_min_max' type="button" onclick="manualStep('b')"><?=$minPay?> руб.</button><br><span>Мин</span></div>
<div class='flex_min_max_el'><button id='pay_max_ajax_button' class='btn btn-outline flex_min_max' type="button" onclick="manualStep('f')"><?=$maxPay?> руб.</button><br><span>Макс</span></div>
</div>







<style>
#min_max_btn
	{
		 display: flex;
		 justify-content: center;
		 align-items: flex-end;
		 align-content: center;
		 padding-bottom: 30px;
	}
button.flex_min_max
	{
		margin: auto;
		padding: auto;
	
		margin-top: 5px !important;
		margin-button: 25px !important;
		min-height: 66px;
		margin-bottom: 12px;
	}
	
div.flex_min_max_el
	{
		margin: auto;
		padding: auto;
		flex: 0 1 100px;
		margin-top: 5px !important;
		margin-button: 25px !important;
		min-height: 66px;
		text-align: center;
	}	
	
	
	
	
	
	
	

</style>





	</div>
	<?if($maxBonus > 0){?>
		<div class="form-group">
			<input type="checkbox" id="bonus-checkbox">
			<label for="bonus-checkbox">Оплатить бонусами</label>
		</div>

		<div class="hidden2">
			<div class="form-group">
				<span>Укажите сумму оплаты бонусами:</span>
				<input id="bonus-value" name="bonus-value" type="text" value="0" data-min="0" data-max="<?=round($maxPay/4)?>" disabled>
				<span class="error-text">Бонусами оплатить можно не более 25%  суммы чека</span>
				<div id="bonus"></div>
			</div>

			<div class="notification">
				<div class="notification__col">
					<div class="notification__row">
						<div class="notification__item">
							<div>Начислено</div>
							<span class="blue"><?=$doc["UF_BONUS_ALL"]?></span>
							<div>бонусов</div>
						</div>
						<div class="notification__item">
							<div>Заморожено</div>
							<span class="red"><?=$doc["UF_BONUS_DISABLED"]?></span>
							<div>бонусов</div>
						</div>
						<div class="notification__item">
							<div>Доступно</div>
							<span class="green"><?=$maxBonus?></span>
							<div>бонусов</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?}?>
	<div class="price">
		Итого к оплате рублями:
		<span id="itog"><?=$minPay?> ₽</span>
		<input type="hidden" id="sumt" name="sum" value="<?=$minPay?>">
		<input type="hidden" id="payt" name="pay" value="<?=$minPay?>">
		<input type="hidden" id="bonust" name="bonus" value="0">
		<input type="hidden" name="id" value="<?=$doc["ID"]?>">
	</div>
	

	<button class="btn">Оплатить</button>
</form>
			
	
	
<script>
$('#pay').attr("data-bac", "<?=$request['bac']?>")

<?if($maxBonus > 0){?>
	var bonus = document.getElementById('bonus');
	var bonusMax = <?=round($maxPay/4)?>;
	if(<?=$maxBonus?> < bonusMax){
		bonusMax = <?=$maxBonus?>;
	}
	noUiSlider.create(bonus, {
		start: [0],
		connect: [true, false],
		range: {
			'min': [0],
			'max': [bonusMax]
		},
		pips: {
			mode: 'steps',
			density: 1
		},
		format: wNumb({
			decimals: 0
		}),
	});





	var rangeSlider = document.getElementById('slider-range2');

	noUiSlider.create(rangeSlider, {
		start: [<?=$minPay?>],
		connect: [true, false],
		range: {
			'min': [<?=$minPay?>],
			'max': [<?=$maxPay?>]
		},
		step: <?=$maxPay - $minPay?>,
		pips: {
			mode: 'steps',
			density:1
		},
		format: wNumb({
			decimals: 0
		}),
	});








	var rangeSliderValueElement = document.getElementById('slider-range-value');
	var sumt = <?=$minPay?>, bonust = 0, itogt = <?=$minPay?>;
	rangeSlider.noUiSlider.on('update', (values, handle) => {
		rangeSliderValueElement.value = values[handle] + ' руб.';

		if(bonusMax > ((values[handle]/4) - 1)){
			bonusMaxNew = ((values[handle]/4) - 1);
		}else{
			bonusMaxNew = bonusMax;
		}
		bonus.noUiSlider.updateOptions({
			range: {
				'min': [0],
				'max': bonusMaxNew
			},
		});
		
		sumt = values[handle];
		bonust = bonus.noUiSlider.get();
		itogt = sumt - bonust;
		$("#bonus-value").attr("data-max",bonusMaxNew)
		$("#itog").html(itogt.toString() + ' руб.');
		$("#payt").val(itogt);
		$("#sumt").val(sumt);
		$("#bonust").val(bonust);
	});

	rangeSliderValueElement.addEventListener('change', () => {
		rangeSlider.noUiSlider.set([null, this.value]);
	});
	var bonusValue = document.getElementById('bonus-value');

	bonus.noUiSlider.on('update', (values, handle) => {
		bonusValue.value = values[handle] + ' руб.';
		sumt = rangeSlider.noUiSlider.get();
		bonust = values[handle];
		itogt = sumt - bonust;
		$("#itog").html(itogt.toString() + ' руб.');
		$("#payt").val(itogt);
		$("#sumt").val(sumt);
		$("#bonust").val(bonust);
	});

	rangeSliderValueElement.addEventListener('change', () => {
	   // bonusValue.noUiSlider.set([null, this.value]);
	});


	$("#pyaformt").submit(function(e) {
		var forma = $(this);
		e.preventDefault();
		var actionurl = e.currentTarget.action;
		$.ajax({
			url: '/personal/ajaxpayt.php',
			type: 'post',
			dataType: 'html',
			data: forma.serialize(),
			success: function(data) {
				forma.html(data);
			},error: function(data){console.log(data);
				console.log("4");}
		});

	});
	
<?}else{?>
	



	var rangeSlider = document.getElementById('slider-range2');

	noUiSlider.create(rangeSlider, {
		start: [<?=$minPay?>],
		connect: [true, false],
		range: {
			'min': [<?=$minPay?>],
			'max': [<?=$maxPay?>]
		},
		step: <?=$maxPay - $minPay?>,
		tooltips: wNumb({decimals: 0, suffix: 'K'}),
		pips: {
			mode: 'steps',
			density:1
		},
		format: wNumb({
			decimals: 0
		}),
	});

	var rangeSliderValueElement = document.getElementById('slider-range-value');
	var sumt = <?=$minPay?>, itogt = <?=$minPay?>;
	rangeSlider.noUiSlider.on('update', (values, handle) => {
		rangeSliderValueElement.value = values[handle] + ' руб.';

		
		
		sumt = values[handle];
		itogt = sumt;
		$("#itog").html(itogt.toString() + ' руб.');
		$("#payt").val(itogt);
		$("#sumt").val(sumt);
	});

	rangeSliderValueElement.addEventListener('change', () => {
		rangeSlider.noUiSlider.set([null, this.value]);
	});


	rangeSliderValueElement.addEventListener('change', () => {
	   // bonusValue.noUiSlider.set([null, this.value]);
	});


	$("#pyaformt").submit(function(e) {
		var forma = $(this);
		e.preventDefault();
		var actionurl = e.currentTarget.action;
		$.ajax({
			url: '/personal/ajaxpayt.php',
			type: 'post',
			dataType: 'html',
			data: forma.serialize(),
			success: function(data) {
				forma.html(data);
			},error: function(data){console.log(data);
				console.log("4");}
		});

	});
<?}?>












rangeSlider.noUiSlider.on('update', function (values, handle) {
    document.getElementById('event-start').innerHTML = values[0] + "K";
    
    //var myVal = rangeSlider.noUiSlider.get();
    
    
});

function manualStep (direction){

    	var minButtonClasses = document.getElementById("pay_min_ajax_button").classList;
		var maxButtonClasses = document.getElementById("pay_max_ajax_button").classList;
		var currentPosition = parseInt(rangeSlider.noUiSlider.get());
    var stepSize = <?=$maxPay - $minPay?>;
    
    if(direction == 'f'){
    	currentPosition += stepSize;
		maxButtonClasses.remove("btn-outline");
		minButtonClasses.add("btn-outline");
    }
    if(direction == 'b'){
    	currentPosition -= stepSize;
		minButtonClasses.remove("btn-outline");
		maxButtonClasses.add("btn-outline");
    }
    
  	currentPosition = (Math.round(currentPosition / stepSize) * stepSize);
    
    
    	rangeSlider.noUiSlider.set(currentPosition);
    
}










</script>	
	
<?}?>