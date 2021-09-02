<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", 'Поиск');
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", '');
$APPLICATION->SetTitle("Поиск");
?>
<form action="/catalog/">
	<input name="q" class="search-mobile__input" type="text" placeholder="что вы ищете?">

	<button type="submit" name="s" class="search-mobile__submit"><span class="icon icon_header-search"> </span>
	</button>
</form>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>