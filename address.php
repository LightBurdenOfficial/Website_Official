<?
$arrecadacao_total = 1500;
$arrecadacao_total_br = 500;
//SALDO DA WALLET RIPPED
$address1 = "ScwSFYDqyApk7i38Pk5PbwT42coH5Zjyjo";
$dados_api_address1 = 'http://52.67.138.144:3001/ext/getbalance/ScwSFYDqyApk7i38Pk5PbwT42coH5Zjyjo'; //SALDO DA WALLET
$decode_address1 = json_decode(file_get_contents($dados_api_address1), true);
$remaining1 = $arrecadacao_total_br - $decode_address1;

$percentual1 = $decode_address1 * 100 / $arrecadacao_total_br;

//SALDO DA WALLET CALURA
$address2 = "SQek1hJ8Ve3R7RGdors3bxZYdRY99AzRo9";
$dados_api_address2 = 'http://52.67.138.144:3001/ext/getbalance/SQek1hJ8Ve3R7RGdors3bxZYdRY99AzRo9'; //SALDO DA WALLET
$decode_address2 = json_decode(file_get_contents($dados_api_address2), true);
$remaining2 = $arrecadacao_total_br - $decode_address2;

$percentual2 = $decode_address2 * 100 / $arrecadacao_total_br;
?>
