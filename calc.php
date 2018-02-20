<?php
//FUNÇÕES COINS MARKETS
$api_coinsmarkets = "https://coinsmarkets.com/apicoin.php";
$juncao_api_coinsmarkets = json_decode(file_get_contents($api_coinsmarkets), true);
//BITCOIN_SPEROCOIN
$resultado_coinsmarkets = $juncao_api_coinsmarkets['BTC_SPERO'];
//Ultimo preço
$latest_pricecm = $resultado_coinsmarkets['last'];
//24h trade
$dia_pricecm = $resultado_coinsmarkets['24htrade'];
//FUNÇÕES COINS MARKETS

//FUNÇÕES BRAZILIEX
$api_braziliex = "https://braziliex.com/api/v1/public/ticker";
$juncao_api_braziliex = json_decode(file_get_contents($api_braziliex), true);
//BITCOIN_REAL BRASILEIRO
$resultado_braziliex = $juncao_api_braziliex['btc_brl'];
//Ultimo preço BRL
$latest_pricebr = $resultado_braziliex['last'];
//24h tradeBRL
$dia_pricebr = $resultado_braziliex['baseVolume24'];
//FUNÇÕES BRAZILIEX

//FUNÇÕES BITCOIN_USD
$api_bitcoin = "https://blockchain.info/pt/ticker";
$juncao_api_bitcoin = json_decode(file_get_contents($api_bitcoin), true);
//BITCOIN_DOLAR
$resultado_bitcoin_dolar = $juncao_api_bitcoin['USD'];

//Ultimo preço USD
$latest_priceusd = $resultado_bitcoin_dolar['last'];
//24h trade USD
$dia_priceusd = $resultado_bitcoin_dolar['15m'];

//DÓLAR
$api_dolar = "https://api.fixer.io/latest?symbols=USD,BRL";
$juncao_api_dolar = json_decode(file_get_contents($api_dolar), true);
$array_dolar = array_reverse($juncao_api_dolar['rates']);
$resultado_dolar = $array_dolar['BRL'];



//FEE SPERO
$fee_spero = 0.01;
$calculo_dolar = $fee_spero / $resultado_dolar;
$fee_spero_usd = $calculo_dolar;

$multi = $resultado_coinsmarkets['last'] * $resultado_braziliex['last'] + $fee_spero;
$multiusd = $resultado_coinsmarkets['last'] * $resultado_bitcoin_dolar['last'] + $fee_spero_usd + 0.008;
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
<style type="text/css">
.centered{
	text-align: center;
	padding-top: 3%;
	font-family: 'Exo 2', sans-serif;
}
</style>
	<title>Calculator Sperocoin</title>
</head>
<body style="background-color: black">
	<div class="container centered">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4" style="background-color: #ffff80">
				<font style="font-size: 25px;color: #d580ff">Unidade SPERO em Reais: <br>R$ <? echo number_format($multi, 8, ',', '.');?></font>
			</div>
			<div class="col-md-4" style="background-color: #ffaa80">
				<font style="font-size: 25px;color: green">Spero Unit in Dollar: <br>$ <? echo number_format($multiusd, 8, ',', '.');?></font>
			</div>
			<div class="col-md-2"></div>
		</div>
		<br>
<center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4" style="background-color: #d580ff">
 				<form action="" method="post" class="centered">
     			 	<font style="font-size: 25px;color: yellow">Quantidade em Spero:</font> <br><input class="centered" name="num1" type="text" value="1"><br><br>
     				 	<input class="btn btn-success" type="submit" name="resultado" value="RESULTADO">
   				</form>
   			</div>
			<?php
   				$a = $_POST['num1'];
   				$b = $resultado_coinsmarkets['last'];
   				$c = $multi;
  				$op = $_POST['resultado'];
					if( !empty($op) ) {
						if($op == 'RESULTADO')
							$d = $a * $b;
							$e = $a * $c;
								/* echo "Resultado em Bitcoin: ".number_format($d,9,".",".")."<br>";*/
								echo "<div class='col-md-4' style='font-size: 20px;background-color: #ff4d4d; padding-top:3%;'><b>Resultado em Reais: R$ ".number_format($e, 2, ',', '.'). "<br>";
								echo "Quantidade comprada: " .number_format($a, 8, '.', ',')."</b></div>";};
			?>
			<div class="col-md-2"></div>
			</div>
			<br>
			<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4" style="background-color: #d580ff">
 				<form action="" method="post" class="centered">
     			 	<font style="font-size: 25px;color: yellow">Quantidade em Reais:</font> <br><input class="centered" name="num2" type="text" value="1"><br><br>
     				 	<input class="btn btn-success" type="submit" name="resultado" value="RESULTADO">
   				</form>
   			</div>
			<?php
   				$a1 = $_POST['num2'];
   				$b1 = $resultado_coinsmarkets['last'];
   				$c1 = $multi;
  				$op1= $_POST['resultado'];
					if( !empty($op) ) {
						if($op1 == 'RESULTADO')
							$e1 = $a1 / $c1;
								echo "<div class='col-md-4' style='font-size: 20px;background-color: #ff4d4d; padding-top:3%;'><b>Quantidade comprada: ".number_format($e1, 8, '.', ','). "<br>";
								echo "Valor comprado: R$ " .number_format($a1, 2, ',', '.')."</b></div>";};
			?>
			<div class="col-md-2"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<font style="font-size: 25px;color: green">Valor Bitcoin: <? echo "R$".number_format($latest_pricebr, 2, ',', '.');?><br> Valor Dólar: <? echo "R$".number_format($resultado_dolar, 4, ',', '.'); ?></font>
				</div>
			</div>
</center>
	</div>
</body>
</html>

