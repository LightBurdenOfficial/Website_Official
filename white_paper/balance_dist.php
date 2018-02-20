<?
//WALLET ANDROID
$api_wandroid = "http://192.168.0.23:3001/ext/getbalance/SdFNte8eomKRGrecuP1zezBtVhLfzzpmM8";
$juncao_api_w_android = json_decode(file_get_contents($api_wandroid), true);
$w_android = $juncao_api_w_android;
//WALLET IOS
$api_wios = "http://192.168.0.23:3001/ext/getbalance/SjcPW5pCZy97q94QYwu5nrJZh58otURA7p";
$juncao_api_w_ios = json_decode(file_get_contents($api_wios), true);
$w_ios = $juncao_api_w_ios;
//WALLET MAC
$api_wmac = "http://192.168.0.23:3001/ext/getbalance/SNGaehWAaZ51qishJMhwqgQcBQvFfqaSJD";
$juncao_api_w_mac = json_decode(file_get_contents($api_wmac), true);
$w_mac = $juncao_api_w_mac;
//Translations of Topics
$api_trad = "http://192.168.0.23:3001/ext/getbalance/Sk1vJ5PKiXoQKwFYVwQTm6sXb4DFWpUDL4";
$juncao_api_trad = json_decode(file_get_contents($api_trad), true);
$trad = $juncao_api_trad;
//1º Study Group
$api_groupone = "http://192.168.0.23:3001/ext/getbalance/Sghyv6hSBhbAJoupYx9RnV3z4T4oSJfrAF";
$juncao_api_groupone = json_decode(file_get_contents($api_groupone), true);
$groupone = $juncao_api_groupone;
//2º Study Group
$api_grouptwo = "http://192.168.0.23:3001/ext/getbalance/SZenx1RhCeEcBBnqnUZm7d33tWNS4JFNUx";
$juncao_api_grouptwo = json_decode(file_get_contents($api_grouptwo), true);
$grouptwo = $juncao_api_grouptwo;
//3º Study Group
$api_groupthree = "http://192.168.0.23:3001/ext/getbalance/Sh1poCxVfph2x1ZPt1RwcH9kMTaj7abZy3";
$juncao_api_groupthree = json_decode(file_get_contents($api_groupthree), true);
$groupthree = $juncao_api_groupthree;
//Aidrop
$api_aidrop = "http://192.168.0.23:3001/ext/getbalance/Sjy8g4rXe6Bdrb7qSz7Pm4pgZZFCG141NS";
$juncao_api_airdrop = json_decode(file_get_contents($api_aidrop), true);
$airdrop = $juncao_api_airdrop;
//SALES
$api_sales = "http://192.168.0.23:3001/ext/getbalance/SN3r5zNcfSBMtzUsVTp2ps7PyYG3sxUZVf";
$juncao_api_sales = json_decode(file_get_contents($api_sales), true);
$api_sales2 = "http://192.168.0.23:3001/ext/getbalance/SSi9PsXc3PUCqy9dAHfgArMDivrUuCGEbw";
$juncao_api_sales2 = json_decode(file_get_contents($api_sales2), true);
$sales = $juncao_api_sales + $juncao_api_sales2;

?>