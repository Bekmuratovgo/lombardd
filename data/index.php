<?
if($_SERVER['REQUEST_URI']=='/data/sdat-braslet-v-lombard/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/sdat-braslet-v-lombard/');
}elseif($_SERVER['REQUEST_URI']=='/data/sdat-kolco-v-lombard/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/sdat-kolco-v-lombard/');
}elseif($_SERVER['REQUEST_URI']=='/data/sdat-kresty-v-lombard/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/sdat-kresty-v-lombard/');
}elseif($_SERVER['REQUEST_URI']=='/data/sdat-obruchalnoe-kolco-v-lombard/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/sdat-obruchalnoe-kolco-v-lombard/');
}elseif($_SERVER['REQUEST_URI']=='/data/sdat-cep-v-lombard/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/sdat-cep-v-lombard/');
}elseif($_SERVER['REQUEST_URI']=='/data/sdat-stolovoe-serebro/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/sdat-stolovoe-serebro/');
}elseif($_SERVER['REQUEST_URI']=='/data/sdat-monety/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/sdat-monety/');
}elseif($_SERVER['REQUEST_URI']=='/data/skupka-antikvarnykh-yuvelirnykh-izdeliy/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/skupka-antikvarnykh-yuvelirnykh-izdeliy/');
}elseif($_SERVER['REQUEST_URI']=='/data/skupka-dragotsennykh-kamney/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/skupka-dragotsennykh-kamney/');
}elseif($_SERVER['REQUEST_URI']=='/data/zolotye-koltsa/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/zolotye-koltsa/');
}elseif($_SERVER['REQUEST_URI']=='/data/zolotye-monety/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/zolotye-monety/');
}elseif($_SERVER['REQUEST_URI']=='/data/zolotye-sergi/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/zolotye-sergi/');
}elseif($_SERVER['REQUEST_URI']=='/data/zolotye-koltsa-s-brilliantom/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/zolotye-koltsa-s-brilliantom/');
}elseif($_SERVER['REQUEST_URI']=='/data/zolotye-monety-georgiy-pobedonosets/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/zolotye-monety-georgiy-pobedonosets/');
}elseif($_SERVER['REQUEST_URI']=='/data/serebryanye-tsepochki/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/serebryanye-tsepochki/');
}elseif($_SERVER['REQUEST_URI']=='/data/serebryanye-koltsa/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/serebryanye-koltsa/');
}elseif($_SERVER['REQUEST_URI']=='/data/serebryanye-lozhki/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/serebryanye-lozhki/');
}elseif($_SERVER['REQUEST_URI']=='/data/serebryanye-monety/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/serebryanye-monety/');
}elseif($_SERVER['REQUEST_URI']=='/data/sergi/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/sergi/');
}elseif($_SERVER['REQUEST_URI']=='/data/ckupka-dragotsennostey/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/ckupka-dragotsennostey/');
}elseif($_SERVER['REQUEST_URI']=='/data/skupka-rubinov/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/skupka-rubinov/');
}elseif($_SERVER['REQUEST_URI']=='/data/tsarskie-serebryanye-monety/'){ 
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://lombardd.ru/data/chto-prinimaet-lombard/tsarskie-serebryanye-monety/');
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отделение");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"metro_detail",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array("PREVIEW_TEXT","PREVIEW_PICTURE",""),
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("ADRES","PHONE","TIME","CORDS","URL_OFFICE",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
