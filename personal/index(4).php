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

<?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"profile_new",
	Array(
		"CHECK_RIGHTS" => "Y",
		"SEND_INFO" => "N",
		"SET_TITLE" => "N",
		"USER_PROPERTY" => array("UF_METRO","UF_OTDEL","UF_FAMILY", "UF_CHILDREN", "UF_HOBI", "UF_WORK"),
		"USER_PROPERTY_NAME" => ""
	)
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





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
