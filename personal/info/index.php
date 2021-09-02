<?
//define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>
<?
global $USER;
/*if (!$USER->IsAuthorized())
{?>
	<script>
		document.cookie = "dn=false";
	</script>
<?}*/?>












 



<?$APPLICATION->IncludeComponent("bitrix:main.profile", "info", Array(
	"CHECK_RIGHTS" => "Y",	// Проверять права доступа
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => array(	// Показывать доп. свойства
			0 => "UF_METRO",
			1 => "UF_OTDEL",
			2 => "UF_FAMILY",
			3 => "UF_CHILDREN",
			4 => "UF_HOBI",
			5 => "UF_WORK",
		),
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
	),
	false
);?>
<style>	
	.baner_user
	{
		position: fixed;
    z-index: 10000;
    right: -400px;
    bottom: 0;
    width: 400px;
	}
	.baner_user .close
	{
		cursor: pointer;
		position: absolute;
		z-index: 1000;
		font-size: 35px;
		right: 5px;
		margin-top: -33px;
	}
	.baner_user a img
	{
		
	}
</style>

<div class="baner_user">
	<div class="close"id="close_t">
		x
	</div>
	<?
		$arSelect = Array("PREVIEW_PICTURE","PROPERTY_LINK");
		$arFilter = Array("IBLOCK_ID"=>28, "ID"=>284722, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
		if(CModule::IncludeModule("iblock")):
		$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
		endif;
		while($ob = $res->GetNextElement())
		{
		 $arFields = $ob->GetFields();
		 
			$IMG_URL = CFile::GetPath($arFields["PREVIEW_PICTURE"]);

			?>
				<a href="<?=$arFields["PROPERTY_LINK_VALUE"]?>">
					<img src="<?=$IMG_URL?>" alt="">
				</a>
			<?
		}
	?> 
</div>
<script>

	$("#close_t").click(
		function()
		{
			$(".baner_user").css("display","none");
			document.cookie = "dn=tru";
		}
	)

	function getCookie(name) {
	  let matches = document.cookie.match(new RegExp(
	    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	  ));
	  return matches ? decodeURIComponent(matches[1]) : undefined;
	}
	var kuk=getCookie("dn");
	if(kuk=="tru")
	{
		$(".baner_user").css("display","none");
	}
</script>
<script>
	
setTimeout(function () {

	 $('.baner_user').animate(
	  {
	    right: 0,
	  },
	2000);
	}, 1000);
</script>
<script>
// $(window).on('load', function () {
// 	$('button[aria-controls="tab3"]').click();
// })

//aria-controls="tab3"
</script>





<? if ($_GET['status']=='ok')
	{?> 







<div class="modal">
   <div class="modal__content">
	   <h2>Мы приняли ваш платёж.</h2>
			Обновление данных в системе обычно занимает менее 15 минут.
	<br>
<br>



<a href="/personal/" class="btn btn-outline" style="display: inherit;">Понятно</a>


   </div>
</div>

<style>

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1000;
  background: #b2b2b291;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  overflow-y: scroll;
  padding: 60px 15px;
}
 
.modal__content {
  width: 100%;
  max-width: 400px;
  padding: 20px;
  background: #f9f9f9;
  border-radius: 3px;
  position: relative;
  box-shadow: 0 5px 15px black;
min-height: 200px;
}
 
.modal__close-button {
  background: #ff0000;
  height: 30px;
  width: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  border: none;
  position: absolute;
  right: 0;
  top: 0;
  background: none;
  cursor: pointer;
  transition: .3s;
  outline: none;
}
 
.modal__close-button:hover {
  transition: .3s;
  transform: rotate(180deg);
}
 
.modal__title {
  font-size: 1.8rem;
  text-transform: uppercase;
  margin: 0 0 15px;
}
 
.modal__description {
  font-size: 1.125rem;
}

</style>
<?}
 ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
