<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
use Bitrix\Main\Loader;
Loader::includeSharewareModule( "bit.telegramhelper" );
$bot = new \THBot();
$bot->webHook();