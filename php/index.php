<?php

require './inc/datas.php';

if (!empty($_POST)) {
  $valueToConvert = floatval($_POST['value1']);
  $currentCurrency = $_POST['currency1'];
  $currencyToConvert = $_POST['currency2'];
} else {
  $valueToConvert = 1;
  $currentCurrency = "EUR";
  $currencyToConvert = "USD";
}


$valueConverted = $valueToConvert * $currencies[$currentCurrency][$currencyToConvert];


include './inc/templates/index-tpl.php';
?>

