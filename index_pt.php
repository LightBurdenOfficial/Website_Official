<!doctype html>
<?php
include_once('arrecada.php');
//SALES
$api_sales = "http://192.168.0.23:3001/ext/getbalance/SN3r5zNcfSBMtzUsVTp2ps7PyYG3sxUZVf";
$juncao_api_sales = json_decode(file_get_contents($api_sales), true);
$api_sales2 = "http://192.168.0.23:3001/ext/getbalance/SSi9PsXc3PUCqy9dAHfgArMDivrUuCGEbw";
$juncao_api_sales2 = json_decode(file_get_contents($api_sales2), true);
$api_sales3 = "http://192.168.0.23:3001/ext/getbalance/SSZceqUgksEQc8FLVS2gMf8Wi1n55uLSn7";
$juncao_api_sales3 = json_decode(file_get_contents($api_sales3), true);
$api_sales4 = "http://192.168.0.23:3001/ext/getbalance/SYP4LKWZoADLUe5xRLf3qn2X5Aw3kVa7eQ";
$juncao_api_sales4 = json_decode(file_get_contents($api_sales4), true);
$api_sales5 = "http://192.168.0.23:3001/ext/getbalance/Sd3gMK4buFuieAVKeGEBJHtdK4nmWbriD1";
$juncao_api_sales5 = json_decode(file_get_contents($api_sales5), true);
$api_sales6 = "http://192.168.0.23:3001/ext/getbalance/SeV5SdEJP1dJrtRvBpNud2bu5oZxNacmJ4";
$juncao_api_sales6 = json_decode(file_get_contents($api_sales6), true);
$sales = $juncao_api_sales + $juncao_api_sales2 + $juncao_api_sales3 + $juncao_api_sales4 + $juncao_api_sales5 + $juncao_api_sales6;
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Sperocoin</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script src="contactform/contactform.js"></script>

	<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<header class="header" id="header" style="padding-top: 4%">
    <ul class="nav navbar-nav navbar-left" style="padding-left: 1%;">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle btn-default" data-toggle="dropdown" role="button" aria-expanded="false">Idioma <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="index.php"><img src="http://img.freeflagicons.com/thumb/glossy_square_icon/united_states_of_america/united_states_of_america_64.png" width="20px"> Inglês</a></li>
        <li><a href="index_pt.php"><img src="http://img.freeflagicons.com/thumb/glossy_square_icon/brazil/brazil_64.png" width="20px"> Português</a></li>
      </ul>
    </li>
  </ul>
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/logo.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Bem-vindo à Spero Coin<br>Sustentabilidade em tecnologia</h1>
			<ul class="we-create animated fadeInUp delay-1s" >
				<li>SOMOS UMA CRIPTOGRAFIA ECOLOGICAMENTE CORRETA QUE VISA ELIMINAR O DESPERDÍCIO DE ENERGIA ELÉTRICA.</li>
			</ul>
			<a class="link animated fadeInUp delay-1s servicelink" href="#info">Começar</a> <a class="link animated fadeInUp delay-1s servicelink" href="white_paper/index.php">White Paper</a>
      <br>

      <div class="row">
        <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title  animated pulse infinite" style="font-size:25px"><i class="fa fa-money" aria-hidden="true"></i> Vendas Spero</h3>
          <span class="pull-right "></span>
        </div>
        <div class="panel-body">
          <a class="link animated delay-1s servicelink animated pulse infinite" href="https://sperocoin.ddns.net/exchange" target="_blank">COMPRE AGORA!</a><br>
          <b style="color:green;font-size: 18px">Total reservado para venda:<br> 30,000.00000000</b><br>
          <b style="color:red;font-size: 18px">Total Vendido:<br><?php echo $sales - 30000; ?></b><br>
          <b style="color:blue;font-size: 18px">Total disponível à venda:<br><?php echo $sales; ?> </b><br>
          <br><b style="font-size: 18px">Total arrecadado:</b><br>
          <br><b style="font-size: 18px"><i class="fa fa-btc" aria-hidden="true"></i> Bitcoin[BTC]:<? if($BTC <= 0){echo "0.00000000 BTC";}else{echo number_format($BTC,"8",".",",")." BTC";} ?></b><br>
          <br><b style="font-size: 18px"><i class="fa fa-usd" aria-hidden="true"></i> Dolar[USD]: $ <? if($USD <= 0){echo "0.00";}else{echo $USD;} ?></b><br>
          <br><b style="font-size: 18px"><i class="fa fa-money" aria-hidden="true"></i> Real[BRL]: R$ <? if($BRL <= 0){echo "0.00";}else{echo $BRL;} ?></b><br>
          <br><b style="font-size: 18px"><i class="fa-spin fa fa-circle-o-notch" aria-hidden="true"></i> Pagamentos Digitais:</b><br>
          <b style="font-size: 18px">MERCADOPAGO: R$ <? if($MERCADOPAGO <= 0){echo "0.00";}else{echo $MERCADOPAGO;} ?></b><br>
          <b style="font-size: 18px">PAYPAL: $ <? if($PAYPAL <= 0){echo "0.00";}else{echo $PAYPAL;} ?></b><br>
          <!-- <b style="font-size: 18px">PAGSEGURO: R$ <? if($PAGSEGURO <= 0){echo "0.00";}else{echo $PAGSEGURO;} ?></b><br>
          <b style="font-size: 18px">CELCOIN: R$ <? if($CELCOIN <= 0){echo "0.00";}else{echo $CELCOIN;} ?></b><br> -->
        </div>
      </div>
    </div>
      <div class="col-md-3"></div>
  </div>

      <div class="row">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Arrecadação de Bitcoin:</h3>
          <span class="pull-right "></span>
        </div>
        <div class="panel-body">
            <b style="font-size: 18px"><i class="fa fa-btc" aria-hidden="true"></i> Bitcoin[BTC]: <? if($BTC <= 0){echo "0.00000000 BTC";}else{echo number_format($BTC,"8",".",",")." BTC";} ?></b>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Arrecadação de Dolar:</h3>
          <span class="pull-right "></span>
        </div>
        <div class="panel-body">
            <b style="font-size: 18px"><i class="fa fa-usd" aria-hidden="true"></i> Dolar[USD]: $ <? if($USD <= 0){echo "0.00";}else{echo $USD;} ?></b>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Arrecadação de Real:</h3>
          <span class="pull-right "></span>
        </div>
        <div class="panel-body">
           <b style="font-size: 18px"><i class="fa fa-money" aria-hidden="true"></i> Real[BRL]: R$ <? if($soma_brl <= 0){echo "0.00";}else{echo number_format($soma_brl,'2','.',',');} ?></b>
        </div>
      </div>
    </div>
  </div>


		</div>
	</header>
	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="#header">Início</a></li>
				<li><a href="#info">Info</a></li>
				<li><a href="#Where_we_are">Onde Estamos?</a></li>
				<li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt="" width="45" class="fa-spin"></a></li>
				<li><a href="#contact">Contato</a></li>
				<li><a href="http://exsperocoin.ddns.net:3001" target="_blank">Block Explorer</a></li>
				<li><a href="#downloads">Downloads</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->



	<section class="main-section" id="info">
		<!--main-section-start-->
		<div class="container">
			<h2>Informação</h2>
			<h6>Veja abaixo informações técnicas sobre o Spero.</h6>

      <div class="row visible-md visible-lg">
    			<div class="col-sm-12 visible-md visible-lg">
					<div class="embed-responsive embed-responsive-16by9">
    					<center><iframe class="embed-responsive-item" width="420" height="315" src="https://www.youtube.com/embed/9owZGSFnSOo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></center>
					</div>
    			</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-cubes"></i>
						</div>
						<div class="service-list-col2">
							<h3>ALGORITMO X13</h3>
							<p>Este algoritmo usa 13 rodadas de hashing com 13 diferentes funções de hash (blake, bmw, groestl, jh, keccak, skein, luffa, cubehash, etc.), o que o torna um dos mais confiáveis ​​no mundo da criptografia moderna.</p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-code-fork"></i>
						</div>
						<div class="service-list-col2">
							<h3>MINERAÇÃO HÍBRIDA de PoW e PoS</h3>
							<p>Com a Spero você minera com prova de trabalho (PoW [ASIC, GPU, CPU, etc.] e também apenas deixando sua carteira com saldo ativo online, aberta e desbloqueada, sendo conhecida prova de participação (PoS).</p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-database"></i>
						</div>
						<div class="service-list-col2">
							<h3>MOEDAS TOTAIS</h3>
							<p>Existem 7 milhões de moedas no total, e foram pré-extraídas 100.000 para aplicação em várias áreas do projeto.</p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-comments-o"></i>
						</div>
						<div class="service-list-col2">
							<h3>MENSAGEM CRIPTOGRAFADA (E2M)</h3>
							<p>Com a Spero, você pode enviar mensagens criptografadas para outros usuários, tendo em mãos apenas o endereço e a chave pública do destinatário.</p>
						</div>
					</div>
						<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-check-square-o"></i>
						</div>
						<div class="service-list-col2">
							<h3>OUTRAS INFORMAÇÃO</h3>
							<p><b>Confirmações:</b><br>
								Mineração: 05<br>
								Transações: 03<br>
								<b>Tempo de Block:</b> 60 segundos<br>
								<b>Dificuldade reiniciada a cada bloco</b><br>
								<b>Retorno PoS:</b> 25% por ano<br>

							</p>
						</div>
					</div>

				</div>
				<figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
					<img src="img/macbook-pro.png" alt="">
					<img src="https://coinsmarkets.com/api-229-SPERO-BTC.png" alt="" style="padding-right:20%">
				</figure>

			</div>
		</div>
	</section>
	<!--main-section-end-->

<!-- TIMELINE -->
<div class="container">
  <div class="page-header">
    <h2 id="timeline">CRONOGRAMA</h2>
  </div>
  <ul class="timeline">
    <li>
      <div class="timeline-badge"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">25/09/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Criação do projeto usando a cripto MarteX <br>
→ Geração de Merkle <br>
const char* pszTimestamp: "A esperanca eh a ultima que morre.";<br>
block.nTime: 1506335848;<br>
block.nNonce: 44360;<br>
Geração de GenesisBlock<br>
→ Lançamento no BitcoinTalk <br>
→ Carregar arquivos para o <a href="https://github.com/sperocoin/sperocoin">Github</a><br>
→ Entrada em Pool: pickaxe.online<br>
→ Hope finaliza o projeto</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="fa fa-code-fork"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">26/09/2017</h4>
        </div>
        <div class="timeline-body">
          <p>Fork do projeto no GitHub por DigitalCoin<br>
→ Reenvio de arquivos para o GitHub</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">01/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Atualização de código: tarquivo SperoCoin-qt.pro foi alterado para compilação no ambiente Linux<br>
→ Desligamento oficial da equipe Hope Assistência Técnica no projeto <br>
→ Criação do oficial <a href="mailto:sperocoin@gmail.com">E-mail</a><br>
→ Criação de <a href="https://superocoin.wixsite.com/sperocoin">website</a> temporário</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted"></i>
    	<div class="timeline-badge warning"><i class="fa fa-file-code-o"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">02/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Abertura do tópico em: <a href="https://cryptocurrencytalk.com/topic/88487-ann-sperocoin-x13-hybrid-powpos/">Cryptocurrencytalk</a><br>
→ Início de votação para adicionar moeda na Exchange <a href="https://tradesatoshi.com/Vote">TradeSatoshi</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge info"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">04/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Criação do Block Crawler / Explorer</p>
          <hr>
        </div>
      </div>
    </li>
    <li>
    	<div class="timeline-badge info"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">06/10/2017​</h4>
        </div>
        <div class="timeline-body">
          <p>→ Adicionado arquivo no patch "src / leveldb / Makefile"
​</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">08/10/2017​</h4>
        </div>
        <div class="timeline-body">
          <p>→ Atualização de informações sobre a fase final do PoW e PoS de fase inicial;<br>
→ Atualização de fonte da carteira qt; <br>
→ Atualização de versão;<br>
→ Atualização de protocolo e atualizações gerais<br>
​</p>
        </div>
      </div>
    </li>
        <li>
      <div class="timeline-badge danger"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">10/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Adicionado opção de limpeza de blocos de órfãos;<br>
→ Adicionado a opção de exibição "STAKE" na coluna "tipo" dentro da guia "Transações"; <br>
→ Adicionado "setban" no "add | remove "(bantime)" / "listbanned" e "clearbanned" no console RPC;</p>
        </div>
      </div>
    </li>
        <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">11/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Ban Forked Peers que estão presos em Getblocks Loop
​</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge success"><i class="fa fa-database"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">12/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Listado agora no <a href="https://coinsmarkets.com/trade-BTC-SPERO.htm">Coins Markets</a></p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-cubes"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">21/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ <a href="http://sperocoin.ddns.net:3001/">Oficial Block Explorer</a>
​</p>
        </div>
      </div>
    </li>
        <li>
      <div class="timeline-badge info"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">22/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Atualização de nomes de strings;<br>
→ Atualização de informações no README.md <br>
→ Atualização de informações de participação na Wallet QT</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="fa fa-database"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">24/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ <a href=" https://sperocoin.ddns.net/faucet">Faucet Official</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">01/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Canal criado usando <a href="httsp://sperocoin.slack.com">Slack</a></p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="fa fa-file-code-o"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">04/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Início de votação para adicionar a moeda no <a href="https://c-cex.com/?id=vote&coin=spero">C-CEX</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge warning"><i class="fa fa-file-code-o"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">11/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Parceria com o canal CURSAGRAM no aplicativo TELEGRAM com a SPERO como principal patrocinador.</p>
        </div>
      </div>
    </li>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="fa fa-file-code-o"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">12/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Modificação do Fórum Bitcointalk: Jr. Member</p>
        </div>
      </div>
    </li>
        <li>
      <div class="timeline-badge success"><i class="fa fa-database"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">21/01/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Lançamento oficial do aplicativo para Android baseado na Webwallet.</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="fa fa-database"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">26/03/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Cadastro perfil de vendedor no site brasileiro <a href="https://p2brasil.com/produto/sperocoin/" target="_blank">P2Brasil</a><br>
              → Cadastro de moeda no site brasileiro <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a><br>
              → Cadastro perfil de vendedor no site brasileiro <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge info"><i class="fa fa-code"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">28/03/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Adicionado Comando RPC "GETWALLETINFO"<br>
              → Atualização de icones de maturidade das transações<br>
              → Atualização da splash screen main<br>
              → Atualização do logo dentro da Wallet<br>
              → Adicionado hashGenesisBlockTestNet =0x00001fe23e7d6951a2a07ad684ff208fab9110fad607fabd81482a1692382f8f no arquivo main.h<br>
              → Adicionado block.nNonce testnet no arquivo main.cpp (block.nNonce   =  15547;)<br>
              → Adicionado static MapCheckpoints mapCheckpointsTestnet = ( 0, uint256("0x000006f4925ed7b889f847f24621390d4<br>943466f091c3254ca1bd8becc517f7b"))<br>  no arquivo checkpoints.cpp<br>
              → Alteração da letra inicial dos endereços em testnet no arquivo base58.h ( PUBKEY_ADDRESS_TEST = 125, // Letra inicial dos endereços( 63= s ) - TESTNET))<br>
              → Alteração da letra inicial de exemplo no arquivo qt/sendcoinsdialog.cpp<br>
              (ui->lineEditCoinControlChange->setPlaceholderText(tr("Enter a SperoCoin address (e.g. Sjz75uKHzUQJnSdzvpiigEGxseKkDhQToX)"));)<br>
              → Alterada versão para 2.6.4.3</p>
        </div>
      </div>
    </li>
  </ul>
</div>

<!-- TIMELINE -->


<!--ROADMAP -->

<div class="container">
  <div class="page-header">
    <h2 id="timeline">ROADMAP - 2018</h2>
    <h4 id="timeline"><center>
        Legenda:<br>
        <i class="fa fa-star"></i> - Tarefa Executada<br>
        <i class="fa fa-star-half-o"></i> - Tarefa em Progresso<br>
        <i class="fa fa-star-o"></i> - Proposta de Tarefa<br>
      </center></h4>
  </div>
  <ul class="timeline">
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Janeiro</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star"></i> Lançamento Oficial do Aplicativo Android</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Fevereiro</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-half-o"></i> Site de Mineração em Nuvem Oficial </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Março</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-half-o"></i> Site de Mineração em Nuvem Oficial - Fase de Testes Iniciada<br>
            <i class="fa fa-star"></i> Cadastro perfil de vendedor no site brasileiro P2Brasil<br>
            <i class="fa fa-star"></i> Cadastro de moeda no site brasileiro Catálogo P2P<br>
            <i class="fa fa-star"></i> Cadastro perfil de vendedor no site brasileiro Catálogo P2P<br>
            <i class="fa fa-star-o"></i> Liberação de sistema de recargas de celulares na casa de câmbio oficial<br>
            <i class="fa fa-star-o"></i> Participação em projetos sociais dentro da comunidade da cidade de Belo Horizonte<br>
            <i class="fa fa-star-o"></i> Ampliação do Mercado Social e Banco Social Spero</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Abril</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> Liberação de saques em Reais(BRL) na casa de câmbio oficial</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Maio</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> Entrada em Casa de Câmbio maior, preferencialmente Yobit</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Junho</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Julho</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Agosto</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> Pagamento de Boletos Bancários na Casa de Câmbio Oficial</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Setembro</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Outubro</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Novembro</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Dezembro</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
  </ul>
</div>


<!--ROADMAP -->


	<section class="main-section alabaster">
		<!--main-section alabaster-start-->
		<div class="container">
			<div class="row">
				<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
					<img src="img/mining.png" alt="">
				</figure>
				<div class="col-lg-7 col-sm-8 featured-work">
					<h2>MINERAÇÃO</h2>
					<P class="padding-b">Conheça mais sobre os dois tipos de mineração no Spero.</p>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-02s">
							<i class="fa fa-flash"></i>
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-02s">
							<h3>PROVA DE TRABALHO (PoW)</h3>
							<p>A prova do trabalho é um protocolo que tem o principal objetivo de dissuadir ataques cibernéticos, como um ataque distribuído de negação de serviço (DDoS) que tem como objetivo esgotar os recursos de um sistema informático, enviando múltiplos pedidos falsos. <br>
O conceito de Prova de trabalho existia mesmo antes do bitcoin, mas Satoshi Nakamoto aplicou essa técnica à sua moeda digital - ainda não sabemos quem realmente é Nakamoto -, revolucionando a forma como as transações tradicionais são definidas.
<br>
Na verdade, a idéia da PoW foi originalmente publicada por Cynthia Dwork e Moni Naor em 1993, mas o termo "prova de trabalho" foi cunhado por Markus Jakobsson e Ari Juels em um documento publicado em 1999.
<br>
Mas, voltando à data, a Prova de trabalho talvez seja a maior idéia por trás do white paper do Bitcoin de Nakamoto - publicado em 2008 - porque permite um consenso sem confiança e distribuído.</p>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
					<img src="img/energy.svg" alt="">
				</figure>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-04s">
							<i class="fa fa-flask"></i>
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-04s">
							<h3>PROVA DE PARTICIPAÇÃO (PoS)</h3>
							<p>A prova de participação é uma maneira diferente de validar transações baseadas e alcançar o consenso distribuído.
<br>
Ainda é um algoritmo, e o objetivo é o mesmo da prova de trabalho, mas o processo para atingir o objetivo é bastante diferente.
<br>
A primeira ideia foi sugerida no fórum bitcointalk em 2011, mas a primeira moeda digital que usou este método foi a Peercoin em 2012, juntamente com ShadowCash, Nxt, BlackCoin, NuShares / NuBits, Qora e Nav Coin.
<br>
Ao contrário da prova de trabalho, onde o algoritmo recompensa os mineiros que resolvem problemas matemáticos com o objetivo de validar transações e criar novos blocos, com a prova de participação, o criador de um novo bloco é escolhido de forma determinista, dependendo da sua riqueza, também definida como participação. <br>
Não há recompensa de bloco.
<br>
Além disso, todas as moedas digitais são criadas anteriormente no início, e seu número nunca muda.
<br>
Isso significa que no sistema PoS não há recompensa por bloco, sendo assim, os mineiros recebem as taxas de transação.
</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--main-section alabaster-end-->



	<section class="main-section paddind" id="Where_we_are">
		<!--main-section-start-->
		<div class="container">
			<h2>ONDE ESTAMOS??</h2>
			<h6>Encontre aqui nossos parceiros e prestadores de serviços que usam a Sperocoin ou que mantêm este projeto de pé:</h6>
			<div class="portfolioFilter">
				<ul class="Portfolio-nav wow fadeIn delay-02s">
					<li><a href="#" data-filter="*" class="current">Todos</a></li>
					<li><a href="#" data-filter=".exchanges">Exchanges</a></li>
					<li><a href="#" data-filter=".pool">Pool</a></li>
					<li><a href="#" data-filter=".topics">Tópicos em Fóruns</a></li>
					<li><a href="#" data-filter=".git">GitHub</a></li>
					<li><a href="#" data-filter=".official">Oficial SPERO</a></li>
				</ul>
			</div>

		</div>
		<div class="portfolioContainer wow fadeInUp delay-04s">
			<div class=" Portfolio-box topics">
				<a href="https://cryptocurrencytalk.com/topic/88487-ann-sperocoin-x13-hybrid-powpos/" target="_blank"><img src="img/cryptocurrencytalk.jpg" alt=""></a>
				<h3>CryptoCurrency Talk</h3>
				<p>Topics in forums</p>
			</div>
			<!-- <div class="Portfolio-box pool">
				<a href="http://pickaxe.online/" target="_blank"><img src="img/pickaxeonline.jpg" alt=""></a>
				<h3>PickAxe Online</h3>
				<p>Pool PoW</p>
			</div> -->
			<div class=" Portfolio-box exchanges">
				<a href="https://coinsmarkets.com/trade-BTC-SPERO.htm" target="_blank"><img src="img/coinsmarkets.jpg" alt=""></a>
				<h3>Coins Market</h3>
				<p>Exchanges</p>
			</div>
			<div class=" Portfolio-box topics">
				<a href="https://bitcointalk.org/index.php?topic=2260985.20" target="_blank"><img src="img/btctalk.jpg" alt=""></a>
				<h3>Bitcoin Talk</h3>
				<p>Topics in forums</p>
			</div>
			<!-- <div class=" Portfolio-box exchanges">
				<a href="https://tradesatoshi.com/Vote" target="_blank"><img src="img/tradesatoshi.jpg" alt=""></a>
				<h3>TradeSatoshi(In Voting)</h3>
				<p>Exchanges</p>
			</div> -->
			<div class=" Portfolio-box exchanges">
				<a href="https://c-cex.com/?id=vote&coin=spero" target="_blank"><img src="img/ccex-logo.png" alt="" width="255px"></a>
				<h3>C-CEX(In Voting)</h3>
				<p>Exchanges</p>
			</div>
			 <div class=" Portfolio-box git">
				<a href="https://github.com/DigitalCoin1/DigitalCoinBRL" target="_blank"><img src="img/github.jpg" alt=""></a>
				<h3>Source</h3>
				<p>GitHub</p>
			</div>
			<div class=" Portfolio-box official">
				<a href="/faucet" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
				<h3>Faucet</h3>
				<p>Official</p>
			</div>
			<div class=" Portfolio-box official">
				<a href="/webwallet" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
				<h3>WebWallet</h3>
				<p>Official</p>
			</div>
      <div class=" Portfolio-box official">
        <a href="/forum" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>Forum</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box official">
        <a href="https://www.youtube.com/channel/UCQQjsoCjR_THbZ4AmalzPPg/" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>Youtube Channel</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box official">
        <a href="http://exsperocoin.ddns.net:3001/network" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>Block Explorer - USA</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box official">
        <a href="http://sperocoin.ddns.net:3001/network" target="_blank"><img src="img/logo.png" alt="" width="255px"></a>
        <h3>Block Explorer - BR</h3>
        <p>Official</p>
      </div>
      <div class=" Portfolio-box exchanges">
        <a href="https://catalogop2p.com.br/sperocoin" target="_blank"><img src="https://p2brasil.com/wp-content/uploads/2018/02/catalogo-p2p-parceria-300x178.png" alt="" width="400px"></a>
        <h3>Catálogo P2P</h3>
        <p>Exchange P2P</p>
      </div>
      <div class=" Portfolio-box exchanges">
        <a href="https://p2brasil.com/produto/sperocoin/" target="_blank"><img src="https://p2brasil.com/wp-content/uploads/2018/02/P2B-1.png" alt="" width="400px"></a>
        <h3>P2Brasil</h3>
        <p>Exchange P2P</p>
      </div>
		</div>
	</section>
	<!--main-section-end-->


	<section class="main-section client-part" id="contact">
		<!--main-section client-part-start-->
		<div class="container">
			<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
			<div class="row">
				<div class="col-lg-12">
					<p class="client-part-haead wow fadeInDown delay-05">Quer ficar mais por dentro? Acesse nossas redes sociais abaixo e veja como o desenvolvimento do nosso projeto está progredindo:</p>
				</div>
			</div>
			<ul class="client wow fadeIn delay-05s">
				<li>
            	<img src="img/logo.png" alt="" width="300px">
</li>
			</ul>
		</div>
	</section>
	<!--main-section client-part-end-->
	<div class="c-logo-part">
		<!--c-logo-part-start-->
		<div class="container">
			<ul>
				<li><a href="https://www.facebook.com/Sperocoin-492498071117211/" target="_blank"><img src="img/c-liogo1.png" alt=""></a></li>
				<li><a href="https://telegram.me/joinchat/sperocoin" target="_blank"><img src="img/c-liogo2.png" alt=""></a></li>
				<li><a href="mailto:sperocoin@gmail.com" target="_blank"><img src="img/c-liogo3.png" alt=""></a></li>
				 <li><a href="https://sperocoin.slack.com" target="_blank"><img src="img/c-liogo4.png" alt="" width="130px"></a></li>
				<!-- <li><a href="#" target="_blank"><img src="img/c-liogo5.png" alt=""></a></li> -->
			</ul>
		</div>
	</div>
	 <!--c-logo-part-end-->
	<!-- TEAM
	<section class="main-section team" id="team">
		main-section team-start
		<div class="container">
			<h2>team</h2>
			<h6>Take a closer look into our amazing team. We won’t bite.</h6>
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic1.jpg" alt="">
						<ul>
							<li><a href="#" class="fa-twitter"></a></li>
							<li><a href="#" class="fa-facebook"></a></li>
							<li><a href="#" class="fa-pinterest"></a></li>
							<li><a href="#" class="fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s">Walter White</h3>
					<span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic2.jpg" alt="">
						<ul>
							<li><a href="#" class="fa-twitter"></a></li>
							<li><a href="#" class="fa-facebook"></a></li>
							<li><a href="#" class="fa-pinterest"></a></li>
							<li><a href="#" class="fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
					<span class="wow fadeInDown delay-06s">Product Manager</span>
					<p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic3.jpg" alt="">
						<ul>
							<li><a href="#" class="fa-twitter"></a></li>
							<li><a href="#" class="fa-facebook"></a></li>
							<li><a href="#" class="fa-pinterest"></a></li>
							<li><a href="#" class="fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Skyler white</h3>
					<span class="wow fadeInDown delay-09s">Accountant</span>
					<p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
			</div>
		</div>
	</section>
	main-section team-end
 TEAM-->

<!-- CONTACT
	<section class="business-talking">
		business-talking-start
		<div class="container">
			<h2>Let’s Talk Business.</h2>
		</div>
	</section>
	business-talking-end
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<h3><i class=" icon-map-marker"></i>Address:</h3>
						<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
					</div>
					<div class="contact-info-box phone clearfix">
						<h3><i class="fa-phone"></i>Phone:</h3>
						<span>1-800-BOO-YAHH</span>
					</div>
					<div class="contact-info-box email clearfix">
						<h3><i class="fa-pencil"></i>email:</h3>
						<span>hello@knightstudios.com</span>
					</div>
					<div class="contact-info-box hours clearfix">
						<h3><i class="fa-clock-o"></i>Hours:</h3>
						<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
					</div>
					<ul class="social-link">
						<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
						<li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
						<li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
						<li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
						<li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">

						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div> CONTACT -->
	<section class="main-section" id="downloads">
		<!--main-section-start-->
		<div class="container">
			<h2>DOWNLOADS</h2>
			<h6>Baixe aqui os arquivos necessários para começar no Spero.</h6>
			<div class="row">
				<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-hdd-o"></i>
						</div>
						<div class="service-list-col2">
							<a href="/files/SperoCoin-v1.1BETA.apk" target="_blank"><h3>Apk Android - V.1.1BETA</h3>
							<p>Wallet Android. Funciona como sistema Web Viewer da web wallet. Utiliza a mesma conta Web no aplicativo! Praticidade e velocidade nas suas mãos.</p></a>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-hdd-o"></i>
						</div>
						<div class="service-list-col2">
							<a href="/files/SperoCoin-v.2.6.4.3.zip" target="_blank"><h3>Windows QT - V.2.6.4.3 - 28/03/2018</h3>
							<p>Carteira com design gráfico. Modelo para aqueles que procuram conforto e conveniência para verificar o saldo, enviar e receber moedas de forma prática e rápida.</p></a>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-hdd-o"></i>
						</div>
						<div class="service-list-col2">
							<a href="/files/sperocoind-v.2.6.4.3.exe" target="_blank"><h3>Daemon Windows - V.2.6.4.3 - 28/03/2018</h3>
							<p>Carteira sem design gráfico. Modelo para aqueles que buscam praticidade e menor consumo de recursos.</p></a>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-hdd-o"></i>
						</div>
						<div class="service-list-col2">
							<a href="/files/SperoCoin-v.2.6.4.3" target="_blank"><h3>Linux QT</h3>
							<p>Carteira com design gráfico. Modelo para aqueles que procuram conforto e conveniência para verificar o saldo, enviar e receber moedas de forma prática e rápida.</p></a>
						</div>
					</div>
					<div class="row">
					<div class="col-lg-12 col-sm-12 wow fadeInLeft delay-05s">
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-comments-o"></i>
						</div>
						<div class="service-list-col2 col12">
							<a href="#" data-toggle="modal" data-target="#linuxcomp"><h3>Compilation Linux Wallet</h3>
						<p>Compile você mesmo o código Spero.</a></p>
						</div>
						</div>
					</div>
					<!-- BOOTSTRAP -->
					<div class="col-lg-12 col-sm-12 wow fadeInLeft delay-05s">
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-hdd-o"></i>
						</div>
						<div class="service-list-col2 col12">
							<a href="https://sperocoin.ddns.net/files/bootstrap.dat"><h3>BOOTSTRAP - Atualizado diariamente</h3>
						<p>Baixe a última cadeia de blocos.</a></p>
						</div>
						</div>
					</div>
					<!-- DATA FOLDER -->
					<div class="col-lg-12 col-sm-12 wow fadeInLeft delay-05s">
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa fa-hdd-o"></i>
						</div>
						<div class="service-list-col2 col12">
							<a href="https://sperocoin.ddns.net/files/SperoCoin.zip"><h3>PASTA DE DADOS - 13/03/2018</h3>
						<p>Baixe a pasta de dados completa que deve ser colocada na pasta de dados do seu usuário. Exemplo: <br>
Windows =% APPDATA% / SperoCoin<br>
Linux: /home/user./SperoCoin</a></p>
						</div>
						</div>
					</div>

					</div>
				</div>
				<figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
					<img src="img/wallet.png" alt="" width="524">
				</figure>

			</div>
		</div>
	</section>
	<!--main-section-end-->

								  <!-- Modal -->
  <div class="modal fade" id="linuxcomp" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Compilação Carteira Linux</h4>
        </div>
        <div class="modal-body">
          <p><b><i class="fa fa-code"></i> Baixe e instale as dependências:</b><br>
							sudo apt-get install build-essential libboost-all-dev libcurl4-openssl-dev libdb5.3-dev libdb5.3++-dev qt-sdk libminiupnpc-dev qrencode libqrencode-dev git libtool automake autotools-dev autoconf pkg-config libssl-dev libgmp3-dev libevent-dev bsdmainutils<br><br>
			<b><i class="fa fa-code"></i> Clone o código fonte do github para a máquina local:</b><br>
							git clone https://github.com/DigitalCoin1/DigitalCoinBRL
			<br><br>
			<b><i class="fa fa-code"></i> Compile o daemon no diretório DigitalCoinBRL/src:</b><br>
							cd DigitalCoinBRL/src<br><br>
							make -f makefile.unix USE_UPNP=- USE_IPV6=1
			<br><br>
			<b><i class="fa fa-code"></i> Execute o daemon no diretório DigitalCoinBRL/src:</b><br>
							./SperoCoind
			<br><br>
			<b><i class="fa fa-code"></i> [OPCIONAL] Compile o QT no diretório DigitalCoinBRL:</b><br>
							sudo apt-get install libqt5gui5 libqt5core5a libqt5dbus5 qttools5-dev qttools5-dev-tools libprotobuf-dev protobuf-compiler libqrencode-dev<br><br>
							qmake SperoCoin-qt.pro "USE_UPNP=-" "USE_QRCODE=1"<br><br>
							make -f Makefile</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>

    </div>
  </div>

	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><img src="img/footer-logo.png" alt=""></div>
			<span class="copyright">&copy; SperoCoin - 2017<br> Todos os direitos são reservados!</span>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

</body>

</html>
