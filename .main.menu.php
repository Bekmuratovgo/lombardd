<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$aMenuLinks = Array(
	Array(
		"Филиалы", 
		SITE_SHOP."/branches/", 
		Array(), 
		Array(), 
		"" 
	),
	/*Array(
		"Контакты",
		SITE_SHOP."/branches/",
		Array(),
		Array(),
		""
	),*/
	Array(
		"Кабинет",
		SITE_SHOP."/personal/",
		Array(),
		Array(),
		"CUser::IsAuthorized()"
	),
);
?>