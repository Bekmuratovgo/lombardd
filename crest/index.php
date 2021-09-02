<?php
require_once (__DIR__.'/crest.php');

var_dump($_SERVER);
$result = CRest::call('crm.lead.userfield.list');

echo '<pre>';
	print_r($result);
echo '</pre>';
