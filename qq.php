<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule('iblock');

$ob = CIBlockElement::GetList([], ['IBLOCK_ID' => 21, '<TIMESTAMP_X' => date('d.m.Y H:i:s', strtotime('-36 hours'))], false, false, ['ID', 'IBLOCK_ID', 'TIMESTAMP_X']);

while ($item = $ob->GetNext()) {
    ?><pre><?print_r($item);?></pre><?
}