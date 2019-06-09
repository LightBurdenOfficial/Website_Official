<!DOCTYPE html>
<?php
include_once('arrecada.php');
//BLOCK EXPLORER
$be_blockcount = 'http://52.67.138.144:3001/api/getblockcount'; // BLOCK COUNT
$be_blockcount_api = json_decode(file_get_contents($be_blockcount), true);
$api_blockcount = $be_blockcount_api;

$be_getdifficulty = 'http://52.67.138.144:3001/api/getdifficulty'; // GET DIFFICULTY POW
$be_getdifficulty_api = json_decode(file_get_contents($be_getdifficulty), true);
$api_getdifficulty = $be_getdifficulty_api['proof-of-work'];

$be_getdifficulty2 = 'http://52.67.138.144:3001/api/getdifficulty'; // GET DIFFICULTY POS
$be_getdifficulty_api2 = json_decode(file_get_contents($be_getdifficulty2), true);
$api_getdifficulty2 = $be_getdifficulty_api2['proof-of-stake'];

$be_getmoneysupply = 'http://52.67.138.144:3001/ext/getmoneysupply'; //MONEY SUPPLY
$be_getmoneysupply_api = json_decode(file_get_contents($be_getmoneysupply), true);
$api_getmoneysupply = $be_getmoneysupply_api;
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SperoCoin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet" type="text/css">

<style type="text/css">
	.btn-space {
    margin-top: 5px;
}
</style>

  <link rel="stylesheet" type="text/css" href="css/vertical_timeline">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

<script type="text/javascript">
$(function(){
    $('.selectpicker').selectpicker();
});
</script>
  <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>
  <script src="contactform/contactform.js"></script>
  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

<meta name="norton-safeweb-site-verification" content="zlwq-tz37fainozehl0su7pvltv7g5khc1zondg-ymyhzjyxn1asv1246ca5-nbgmheunwse9x1ec0492qk5chwn1ehibldr2x24s41nxhhu8ktpu9j5fydxztz0vpad" />
</head>
<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1>
          <a href="#intro">
            <img class="img-responsive" src="img/logo.png" alt="" title="" width="45px"/>
          SPEROCOIN</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Início</a></li>
          <!-- Menu de Informações -->
            <li class="menu-has-children">
                <a href="#" title="Info">Informações:</a>
                    <ul>
                      <li><a href="#about">Sobre</a></li>
                      <li><a href="#team">Equipe</a></li>
                      <li><a href="#Technical_Characteristics">Nosso Software</a></li>
                      <li><a href="#timeline">Linha do Tempo</a></li>
                      <li><a href="#roadmap">RoadMap</a></li>
                      <li><a href="#portfolio">Onde Estamos?</a></li>
                      <li><a href="https://telegra.ph/FAQ-Proof-of-StakePoS---SPERO-03-31" target="_blank">FAQ PoS(Proof of Stake)</a></li>
                    </ul>
            </li>
            <!-- Menu de Informações -->
          <li><a href="#downloads">Downloads</a></li>
          <!-- Menu de Serviços -->
            <li class="menu-has-children">
                <a href="" title="Services">Serviços:</a>
                    <ul>
                      <li><a href="http://sperocoin.ddns.net:3001/" target="_blank">Block Explorer</a></li>
                      <li><a href="http://52.67.138.144:3001/" target="_blank">Block Explorer 2</a></li>
                      <li><a href="https://sperocoin.org/webwallet" target="_blank">WebWallet</a></li>
                      <li><a href="https://sperocoin.org/faucet" target="_blank">Faucet</a></li>
                      <li><a href="https://sperocoin.org/paperwallet" target="_blank">PaperWallet</a></li>
                      <li><a href="https://cloudmining.sperocoin.org" target="_blank">CloudMining</a></li>
                      <li><a href="https://loja.sperocoin.org" target="_blank">Loja Virtual</a></li>
                      <li><a href="https://sperocoin.org/sperogame/" target="_blank">SperoGame</a></li>
                    </ul>
            </li>
            <!-- Menu de Serviços -->
            <li><a href="#clients" target="_blank">Parceiros</a></li>
          <li><a href="listing.php" target="_blank">Exchange Oficial</a></li>
          <!-- Menu de Linguagem -->
            <li class="menu-has-children">
                <a href="" title="Language">IDIOMA:</a>
                    <ul>
                      <li><a href="index-en.php">ING</a></li>
                      <li><a href="index-es.php">ES</a></li>
                      <!-- <li><a href="index-es.php">ESP</a></li> -->
                    </ul>
            </li>
            <!-- Menu de Linguagem -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Seja Bem Vindo à Spero Coin</h2>
                <p><h3 style="color: white">Sustentabilidade em Tecnologia</h3></p>
                  <p>Somos uma criptomoeda ecologicamente correta que visa eliminar o desperdício de energia elétrica.
                </p>
                <a href="whitepaper/index.html" class="btn-get-started scrollto" target="_blank">WHITEPAPER</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 >Cotação - BRL</h2>
                <p>
                <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                <h1><coingecko-coin-price-chart-widget currency="brl" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1>
                </p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">Ver Mais</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cotação - USD</h2>
                <p>
                 <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                    <h1><coingecko-coin-price-chart-widget currency="usd" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1></p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">Ver Mais</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cotação - BTC</h2>
                <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                    <h1><coingecko-coin-price-chart-widget currency="btc" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1></p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">Ver Mais</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cotação - ETH</h2>
                <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                    <h1><coingecko-coin-price-chart-widget currency="eth" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1></p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">Ver Mais</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Downloads Section
    ============================-->

<section id="downloads" class="section-bg wow fadeInUp">
    <div class="container">
        <header class="section-header">
          <h3>Downloads</h3>
        </header>
      <div class="row">
      	<div class="col-md-2 col-sm-12 btn-space">
      		<a href="#" data-toggle="modal" data-target="#androidfull"><button type="button" class="btn btn-outline-warning btn-block"><i class="fa fa-android"></i> FullNode</button></a>
      	</div>
      	<div class="col-md-2 col-sm-12 btn-space">
      		<a href="#" data-toggle="modal" data-target="#androidlite"><button type="button" class="btn btn-outline-warning btn-block"><i class="fa fa-android"></i> LITE</button></a>
      	</div>
      	<div class="col-md-2 col-sm-12 btn-space">
      		<a href="#" data-toggle="modal" data-target="#windowsqt"><button type="button" class="btn btn-outline-info btn-block"><i class="fa fa-windows"></i> QT</button></a>
      	</div>
      	<div class="col-md-2 col-sm-12 btn-space">
      		<a href="#" data-toggle="modal" data-target="#windowsdaemon"><button type="button" class="btn btn-outline-info btn-block"><i class="fa fa-windows"></i> Daemon</button></a>
      	</div>
      	<div class="col-md-2 col-sm-12 btn-space">
      		<a href="#" data-toggle="modal" data-target="#linuxcomp"><button type="button" class="btn btn-outline-secondary btn-block"><i class="fa fa-terminal"></i> Linux</button></a>
      	</div>
      	<div class="col-md-2 col-sm-12 btn-space">
      		<a href="#" data-toggle="modal" data-target="#blockchain"><button type="button" class="btn btn-outline-success btn-block"><i class="fa fa-cubes"></i> BlockChain</button></a>
      	</div>
    </div>
</div>
</section>
<br>
<!-- Modal Android FullNode-->
<div class="modal fade" id="androidfull" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Android FullNode</h4>
        </div>
        <div class="modal-body">
          <p><center>Wallet Android. Com essa wallet, você poderá realizar mineração PoS diretamente do seu aparelho.<br>
          	<br>
          	<a href="https://github.com/DigitalCoin1/SperoCoin_Android/releases/download/SperoCoin-v.2.6.4.7-BETA/SperoCoin-v.2.6.4.7-BETA.apk" target="_blank"><button class="btn"><i class="fa fa-download"></i> Download v.2.6.4.7</button></a>
          </center></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
  </div>
</div>
<!-- Modal Android LITE-->
<div class="modal fade" id="androidlite" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Android LITE</h4>
        </div>
        <div class="modal-body">
          <p><center>Wallet Android WebBased. Conectada diretamente a nossa WebWallet, assim você tem a comodidade de acessar sua conta na palma de sua mão.<br>
          	<br>
          	<a href="https://play.google.com/store/apps/details?id=appinventor.ai_sperocoin.SPEROCOIN2" target="_blank"><button class="btn"><i class="fa fa-download"></i> Download v.1.4-BETA</button></a>
          </center></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
  </div>
</div>
<!-- Modal QT Windows-->
<div class="modal fade" id="windowsqt" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">QT Windows</h4>
        </div>
        <div class="modal-body">
          <p><center>Carteira com design gráfico. Modelo para aqueles que procuram conforto e conveniência para verificar o saldo, enviar e receber moedas de forma prática e rápida.<br>
          	<br>
          	<a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.7/SperoCoin-qt-v2.6.4.7_x86.exe" target="_blank"><button class="btn"><i class="fa fa-download"></i> Download v.2.6.4.7 - 32bits</button></a>
            <br><br>
            <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.7/SperoCoin-qt-v2.6.4.7_x64.exe" target="_blank"><button class="btn"><i class="fa fa-download"></i> Download v.2.6.4.7 - 64bits</button></a>
          </center></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
  </div>
</div>
<!-- Modal Daemon Windows-->
<div class="modal fade" id="windowsdaemon" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Daemon Windows</h4>
        </div>
        <div class="modal-body">
          <p><center>Carteira sem design gráfico. Modelo para aqueles que buscam praticidade e menor consumo de recursos.<br>
          	<br>
          	<a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.7/SperoCoind-v2.6.4.7_x86.exe" target="_blank"><button class="btn"><i class="fa fa-download"></i> Download v.2.6.4.7 - 32bits</button></a>
            <br><br>
            <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.7/SperoCoind-v2.6.4.7_x64.exe" target="_blank"><button class="btn"><i class="fa fa-download"></i> Download v.2.6.4.7 - 64bits</button></a>
          </center></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
  </div>
</div>
<!-- Modal Blockchain-->
<div class="modal fade" id="blockchain" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Blockchain</h4>
        </div>
        <div class="modal-body">
          <p><center>Baixe a cadeia de blocos completa em uma data mais recente para melhor velocidade na sincronização.<br>
          	<br>
          	<a href="https://github.com/DigitalCoin1/SperoCoin/releases" target="_blank"><button class="btn"><i class="fa fa-download"></i> Download</button></a>
          </center></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
  </div>
</div>
<!-- Modal Linux -->
<div class="modal fade" id="linuxcomp" role="dialog">
  <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Compilação Carteira Linux</h4>
        </div>
        <div class="modal-body">
          <p><b><i class="ion-code"></i> Baixe e instale as dependências:</b><br>
              sudo apt-get install build-essential libboost-all-dev libcurl4-openssl-dev libdb5.3-dev libdb5.3++-dev qt-sdk libminiupnpc-dev qrencode libqrencode-dev git libtool automake autotools-dev autoconf pkg-config libssl-dev libgmp3-dev libevent-dev bsdmainutils<br><br>
      <b><i class="fa fa-code"></i> Clone o código fonte do github para a máquina local:</b><br>
              git clone https://github.com/DigitalCoin1/SperoCoin
      <br><br>
      <b><i class="fa fa-code"></i> Compile o daemon no diretório SperoCoin/src:</b><br>
              cd SperoCoin/src<br><br>
              make -f makefile.unix USE_UPNP=- USE_IPV6=1
      <br><br>
      <b><i class="fa fa-code"></i> Execute o daemon no diretório SperoCoin/src:</b><br>
              ./SperoCoind
      <br><br>
      <b><i class="fa fa-code"></i> [OPCIONAL] Compile o QT no diretório SperoCoin:</b><br>
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

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-shuffle"></i>
            <h4 class="title"><a href="#featured-services">Velocity</h4>
            <p class="description">Consiste em uma verificação de três estágios em cada bloco registrado na rede, evitando assim o gasto duplo, muito comum em várias moedas.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-cube"></i>
            <h4 class="title"><a href="#featured-services">Adaptive Block Size(ABS)</a></h4>
            <p class="description">A Spero não tem um tamanho de bloco específico, portanto, independentemente do número de transações, todas elas irão para o bloco se estiverem dentro dos próximos 60 segundos da última criação.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-clipboard"></i>
            <h4 class="title"><a href="#featured-services">OP_RETURN</a></h4>
            <p class="description">Com esse recurso você pode armazenar até 240 bytes de informação diretamente no blockchain.</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Sobre</h3>
          <p>Somos uma criptomoeda brasileira, criada na cidade de Belo Horizonte / MG.<br>Conheça um pouco mais sobre nossas ideias.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-android-person-add"></i></div>
              </div>
              <h2 class="title"><a href="#">Nossa Missão</a></h2>
              <p>
                Reduzir as diferenças sociais e econômicas da população desprivilegiada em todo o mundo. Isso leva à melhoria da qualidade de vida onde ela é escassa ou não existe.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Nosso Plano</a></h2>
              <p>
               Criarmos uma moeda com uso em um mercado acessível a todos e um banco sem cobrança de taxas abusivas, mantendo apenas a taxa fixa de transação de rede (~ 0.0001 SPERO).
                <br> Com isso, teremos o primeiro Banco e Mercado Social mantido inteiramente por uma moeda criptografada.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Nossa Visão</a></h2>
              <p>
               Com ajuda e companheirismo mútuos, podemos alcançar um objetivo que muitas pessoas tentam fazer sozinhas.
               <br> Os pequeninos, quando se juntam, tornam-se gigantes.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Technical Characteristics Section
    ============================-->
    <section id="Technical_Characteristics">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Características Técnicas</h3>
          <p>Conheça as informações técnicas da tecnologia de nosso software.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-code"></i></div>
            <h4 class="title"><a href="">Algoritmo</a></h4>
            <p class="description">
              Este algoritmo usa 13 rodadas de hash com 13 funções hash diferentes (blake, bmw, groestl, jh, keccak, skein, luffa, cubehash, etc.), o que o torna um dos mais confiáveis ​​em um mundo moderno de criptomoedas.
            </p>
            </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bolt"></i></div>
            <h4 class="title"><a href="">Mineração Híbrida PoW e PoS</a></h4>
            <p class="description">
              Com a Spero você minera com prova de trabalho (PoW [ASIC, GPU, CPU, etc]) e também consegue realizar a mineração apenas deixando sua carteira com saldo ativo online, aberto e desbloqueado, a conhecida prova de participação (PoS).
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-cash"></i></div>
            <h4 class="title"><a href="">Moedas Totais</a></h4>
            <p class="description">
              São 7 milhões de moedas no total e foram pré-mineradas 100.000 para aplicação em diversas áreas do projeto.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-chatbubbles"></i></div>
            <h4 class="title"><a href="">Mensagem Encriptada (E2M)</a></h4>
            <p class="description">
              Com a Spero você pode enviar mensagens criptografadas para outros usuários, tendo em mãos apenas o endereço e a chave pública do destinatário.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-done-all"></i></div>
            <h4 class="title"><a href="">Maturidade de Transação</a></h4>
            <p class="description">Mineração: 05<br>Transações: 03</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-options"></i></div>
            <h4 class="title"><a href="">Outras Informações</a></h4>
            <p class="description">
              Tempo de Bloco: 60 seconds<br> Dificuldade de mineração reiniciada a cada novo bloco<br> Retorno PoS: 25% por ano
            </p>
          </div>

        </div>

      </div>
    </section><!-- #services -->
    <!--==========================
      Call To Action Section
    ============================-->
<!--    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section> --><!-- #call-to-action -->

    <!--==========================
      Timeline Section
    ============================-->
<section id="timeline">
	<div class="container">

<header class="section-header">
    <h3>Linha do Tempo</h3>
    <p>Descubra o que já foi feito para melhorar nosso sistema e veja em quais datas essas melhorias foram feitas.</p>
</header>

<div class="skills-content">
<!-- Vertical Timeline -->
<div id="accordion">
<!-- CODE -->
<div class="card">
    <div class="card-header">
    	<h5 class="mb-0">
    		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#codes">
    			<i class="fa fa-code"></i> DESENVOLVIMENTO - CÓDIGOS
    		</button>
    	</h5>
    </div>
<div id="codes" class="collapse">

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#25092017">
        			<i class="fa fa-code"></i> 25/09/2017
        		</button>
        	</h5>
        </div>
        <div id="25092017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Criação do projeto usando a moeda MarteX<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Geração de Merkle<br>
                const char * pszTimestamp: "Esperança eh a ultima que morre.";
                block.nTime: 1506335848; <br>
                block.nNonce: 44360; <br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Geração de GenesisBlock <br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Envio de arquivos para o <a href="https://github.com/sperocoin/sperocoin"> Github </a> <br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#01102017">
        			<i class="fa fa-code"></i> 01/10/2017
        		</button>
        	</h5>
        </div>
        <div id="01102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização de código: o arquivo SperoCoin-qt.pro foi alterado para compilação no ambiente Linux<br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#04102017">
        			<i class="fa fa-code"></i> 04/10/2017
        		</button>
        	</h5>
        </div>
        <div id="04102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Criação do Block Crawler / Explorer</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#06102017">
        			<i class="fa fa-code"></i> 06/10/2017
        		</button>
        	</h5>
        </div>
        <div id="06102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado arquivo no patch "src/leveldb/Makefile"</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#08102017">
        			<i class="fa fa-code"></i> 08/10/2018
        		</button>
        	</h5>
        </div>
        <div id="08102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização das informações sobre a fase final PoW e a fase inicial PoS;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização da fonte qt wallet;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização de versão;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização de protocolo e atualizações gerais<br>​</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#10102017">
        			<i class="fa fa-code"></i> 10/10/2017
        		</button>
        	</h5>
        </div>
        <div id="10102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado opção de limpeza de blocos de órfãos;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado a opção de exibição "STAKE" na coluna "tipo" dentro da guia "Transações";<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado "setban" no "add | remove "(bantime)" / "listbanned" e "clearbanned" no console RPC;</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#11102017">
        			<i class="fa fa-code"></i> 11/10/2017
        		</button>
        	</h5>
        </div>
        <div id="11102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Banimento de Forked Peers que estão presos em Getblocks Loop​</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#21102017">
        			<i class="fa fa-code"></i> 21/10/2017
        		</button>
        	</h5>
        </div>
        <div id="21102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> <a href="http://sperocoin.ddns.net:3001/">Oficial Block Explorer</a>​</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#22102017">
        			<i class="fa fa-code"></i> 22/10/2017
        		</button>
        	</h5>
        </div>
        <div id="22102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização de nomes de strings;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização de informações no README.md <br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização de informações de participação na Wallet QT</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#28032018">
        			<i class="fa fa-code"></i> 28/03/2018
        		</button>
        	</h5>
        </div>
        <div id="28032018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado Comando RPC "GETWALLETINFO"<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização de icones de maturidade das transações<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização da splash screen main<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização do logo dentro da Wallet<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado hashGenesisBlockTestNet no arquivo main.h<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado testnet block.nNonce no arquivo main.cpp<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado static MapCheckpoints no arquivo checkpoints.cpp<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Alteração da letra inicial dos endereços em testnet no arquivo base58.h<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> CAlteração da letra inicial de exemplo no arquivo qt/sendcoinsdialog.cpp<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Alterada versão para 2.6.4.3</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#15072018">
        			<i class="fa fa-code"></i> 15/07/2018
        		</button>
        	</h5>
        </div>
        <div id="15072018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado comando RPC "getnetworkinfo" - Alteração nos arquivos: bitcoinrpc.cpp; bitcoinrpc.h; rpcblockchain.cpp; rpcnet.cpp<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado comando RPC "getblockchaininfo" - Alteração nos arquivos: bitcoinrpc.cpp; bitcoinrpc.h; rpcblockchain.cpp; rpcnet.cpp<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionada Informação de Status da Wallet(Bloqueada ou Desbloqueada) no comando RPC "getinfo"<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado novos pontos no mapa de rede atualizando o mapeamento até o bloco 130000- Alteração no arquivo: checkpoints.cpp<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Alteração dos direitos de cópia, sendo atualizada a data de início dos trabalhos da SperoCoin, ficando: "Copyright © 2017 The SperoCoin developers" - Alteração em arquivos ".ts" da pasta "src\qt\locale"<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Atualização de imagens "splashscreen" da QT<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Alteração das fontes da QT para "Century Gothic"<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Clear Orphans com atualização de página de transações automática, sem a necessidade de reiniciar a carteira<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Alterada versão para 2.6.4.4</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#27102018">
        			<i class="fa fa-code"></i> 27/10/2018
        		</button>
        	</h5>
        </div>
        <div id="27102018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado novos pontos no mapa da rede atualizando o mapeamento até o bloco 165962<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Melhorias no desempenho - Maior velocidade na sincronização<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado novos ícones<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Alterar o estilo da barra de progresso de download de blocos de "QWindowsXPStyle" para "QWindowsVistaStyle"<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Alterando o tamanho dos ícones em "STATUSBAR_ICONSIZE" de 16 a 64<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionando a abertura do arquivo SperoCoin.conf no menu da janela do console<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Descrição alterada do tipo de mineração PoW<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Descrição alterada do tipo de mineração PoS<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Novo ícone de Mineração de PoS<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Versão alterada para 2.6.4.5</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#08122018">
        			<i class="fa fa-code"></i> 08/12/2018
        		</button>
        	</h5>
        </div>
        <div id="08122018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Alterada Versão para 2.6.4.6;<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Altercada versão do protocolo para mínimo 700001;<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionada Introdução;<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Adicionado pontos de checagem de blocos até o bloco 180000<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> AAgradecimento ao usuário vinnystifler pela contribuição na correção de
erros  com a QT: https://github.com/vinnystifler<br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#17122018">
        			<i class="fa fa-code"></i> 17/12/2018
        		</button>
        	</h5>
        </div>
        <div id="17122018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Correção de hash de transação incorreto<br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#11032019">
              <i class="fa fa-code"></i> 11/03/2019
            </button>
          </h5>
        </div>
        <div id="11032019" class="collapse">
          <div class="card-body">
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> [RPC] Implementação do comando -zapwallettxes e do sistema FILE_DESCRIPTORS
<br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#16032019">
              <i class="fa fa-code"></i> 16/03/2019
            </button>
          </h5>
        </div>
        <div id="16032019" class="collapse">
          <div class="card-body">
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Backup automáticos do arquivo wallet.dat<br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#09042019">
              <i class="fa fa-code"></i> 09/04/2019
            </button>
          </h5>
        </div>
        <div id="09042019" class="collapse">
          <div class="card-body">
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Ativação da conta Foundation SPERO em PoW<br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#17042019">
              <i class="fa fa-code"></i> 17/04/2019
            </button>
          </h5>
        </div>
        <div id="17042019" class="collapse">
          <div class="card-body">
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Adição do Sistema Charity PoS<br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#22052019">
              <i class="fa fa-code"></i> 22/05/2019
            </button>
          </h5>
        </div>
        <div id="22052019" class="collapse">
          <div class="card-body">
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Lançamento da versão 2.6.4.7<br></p>
        <br></p>
        </div>
      </div>
  </div>

</div>
</div>
<!-- FORKS -->
<div class="card">
    <div class="card-header">
    	<h5 class="mb-0">
    		<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#forks">
    			<i class="fa fa-code-fork"></i> HARD E SOFT FORKS
    		</button>
    	</h5>
    </div>
<div id="forks" class="collapse">

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#26092017">
        			<i class="fa fa-code-fork"></i> 26/09/2017
        		</button>
        	</h5>
        </div>
        <div id="26092017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Fork do projeto no GitHub por DigitalCoin<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Reapresentação de arquivos para o GitHub</p>
        </div>
      </div>
  </div>

</div>
</div>
<!-- MÍDIA E SOCIAL -->
<div class="card">
    <div class="card-header">
    	<h5 class="mb-0">
    		<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#midiasocial">
    			<i class="fa fa-thumbs-up"></i> MÍDIAS E SOCIAL
    		</button>
    	</h5>
    </div>
<div id="midiasocial" class="collapse">

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#25092017a">
        			<i class="fa fa-thumbs-up"></i> 25/09/2017
        		</button>
        	</h5>
        </div>
        <div id="25092017a" class="collapse">
        	<div class="card-body">
          		<p>             <i class="fa fa-check-square-o" aria-hidden="true"></i> Lançamento no BitcoinTalk <br></p>
        </div>
      </div>
  </div>


    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#01102017b">
        			<i class="fa fa-thumbs-up"></i> 01/10/2017
        		</button>
        	</h5>
        </div>
        <div id="01102017b" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Criação do <a href="mailto:sperocoin@gmail.com">E-mail</a> Oficial<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> <a href="https://superocoin.wixsite.com/sperocoin">Website</a> temporário</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#02102017">
        			<i class="fa fa-thumbs-up"></i> 02/10/2017
        		</button>
        	</h5>
        </div>
        <div id="02102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Abertura do Tópico em: <a href="https://cryptocurrencytalk.com/topic/88487-ann-sperocoin-x13-hybrid-powpos/">Cryptocurrencytalk</a><br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#11112017">
        			<i class="fa fa-thumbs-up"></i> 11/11/2017
        		</button>
        	</h5>
        </div>
        <div id="11112017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Parceria com o canal CURSAGRAM no aplicativo TELEGRAM com a SPERO como principal patrocinador.</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#12112017">
        			<i class="fa fa-thumbs-up"></i> 12/11/2017
        		</button>
        	</h5>
        </div>
        <div id="12112017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Modificação do Fórum Bitcointalk: Jr. Member</p>
        </div>
      </div>
  </div>

</div>
</div>
<!-- INFORMAÇÕES GERAIS -->
<div class="card">
    <div class="card-header">
    	<h5 class="mb-0">
    		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#infogeneral">
    			<i class="fa fa-info"></i> INFORMAÇÕES GERAIS
    		</button>
    	</h5>
    </div>
<div id="infogeneral" class="collapse">

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#25092017b">
        			<i class="fa fa-info"></i> 25/09/2017
        		</button>
        	</h5>
        </div>
        <div id="25092017b" class="collapse">
        	<div class="card-body">
          		<p>             <i class="fa fa-check-square-o" aria-hidden="true"></i> Parceria com pool's: pickaxe.online <br>
          			             <i class="fa fa-check-square-o" aria-hidden="true"></i> Hope deixou o projeto </p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#01102017a">
        			<i class="fa fa-info"></i> 01/10/2017
        		</button>
        	</h5>
        </div>
        <div id="01102017a" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Desligamento oficial da equipe Hope assistência técnica no projeto<br></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#02102017a">
        			<i class="fa fa-info"></i> 02/10/2017
        		</button>
        	</h5>
        </div>
        <div id="02102017a" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Início das votações para adicionar a moeda na Exchange <a href="https://tradesatoshi.com/Vote">TradeSatoshi</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#12102017">
        			<i class="fa fa-info"></i> 12/10/2017
        		</button>
        	</h5>
        </div>
        <div id="12102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado agora na <a href="https://coinsmarkets.com/trade-BTC-SPERO.htm">Coins Markets</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#24102017">
        			<i class="fa fa-info"></i> 24/10/2017
        		</button>
        	</h5>
        </div>
        <div id="24102017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> <a href=" https://sperocoin.ddns.net/faucet">Faucet Oficial</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#01112017">
        			<i class="fa fa-info"></i> 01/11/2017
        		</button>
        	</h5>
        </div>
        <div id="01112017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Canal criado usando <a href="httsp://sperocoin.slack.com">Slack</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#04112017">
        			<i class="fa fa-info"></i> 04/11/2017
        		</button>
        	</h5>
        </div>
        <div id="04112017" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Início de votação para adicionar a moeda na <a href="https://c-cex.com/?id=vote&coin=spero">C-CEX</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#24012018">
        			<i class="fa fa-info"></i> 24/01/2018
        		</button>
        	</h5>
        </div>
        <div id="24012018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Lançamento oficial do aplicativo para Android baseado na Webwallet.</p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#26032018">
        			<i class="fa fa-info"></i> 26/03/2018
        		</button>
        	</h5>
        </div>
        <div id="26032018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Cadastro perfil de vendedor no site brasileiro <a href="https://p2brasil.com/produto/sperocoin/" target="_blank">P2Brasil</a><br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Cadastro de moeda no site brasileiro <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a><br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Cadastro perfil de vendedor no site brasileiro <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#25082018">
        			<i class="fa fa-info"></i> 25/08/2018
        		</button>
        	</h5>
        </div>
        <div id="25082018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Adiconada na exchange Altilly nos pares SPERO/BTC, SPERO/ETH e SPERO/DOGE: <a href="https://www.altilly.com/market">ALTILLY</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#05102018">
        			<i class="fa fa-info"></i> 05/10/2018
        		</button>
        	</h5>
        </div>
        <div id="05102018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listagem na <a href="https://cryptostake.es">CryptoStake</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#06102018">
        			<i class="fa fa-info"></i> 06/10/2018
        		</button>
        	</h5>
        </div>
        <div id="06102018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listagem na <a href="https://staking.world/Pages/index.aspx">Staking World</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#06122018">
        			<i class="fa fa-info"></i> 06/12/2018
        		</button>
        	</h5>
        </div>
        <div id="06122018" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listagem na <a href="https://nanu.exchange/exchange#btc_spero">Nanu Exchange</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#08012019">
        			<i class="fa fa-info"></i> 08/01/2019
        		</button>
        	</h5>
        </div>
        <div id="08012019" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listagem no aplicativo <a href="https://blockfolio.com/#get-app">Blockfolio</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#11012019">
        			<i class="fa fa-info"></i> 11/01/2019
        		</button>
        	</h5>
        </div>
        <div id="11012019" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listagem no aplicativo <a href="https://delta.app/">Delta</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#14012019">
        			<i class="fa fa-info"></i> 14/01/2019
        		</button>
        	</h5>
        </div>
        <div id="14012019" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listagem no site <a href="https://coincodex.com/crypto/sperocoin">CoinCodex</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#31012019">
        			<i class="fa fa-info"></i> 31/01/2019
        		</button>
        	</h5>
        </div>
        <div id="31012019" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listagem na <a href="https://bitsahani.com/exchange/SPERO-DOGE">Bitsahani</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
        	<h5 class="mb-0">
        		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#18022019">
        			<i class="fa fa-info"></i> 18/02/2019
        		</button>
        	</h5>
        </div>
        <div id="18022019" class="collapse">
        	<div class="card-body">
          		<p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listagem na <a href="https://www.4stake.com/sperocoin">4Stake</a></p>
        </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#24052019">
              <i class="fa fa-info"></i> 24/05/2019
            </button>
          </h5>
        </div>
        <div id="24052019" class="collapse">
          <div class="card-body">
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listagem na <a href="https://app.troca.ninja/detail/SPERO">Troca.Ninja</a></p>
        </div>
      </div>
  </div>



</div>
</div>
<!-- Vertical Timeline -->

<!-- BARRAS - PODEM SER ÚTEIS
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>-->
      </div>
    </section>
<!-- ROADMAP -->
  <section class="main-section" id="roadmap">

<div class="container">
          <header class="section-header">
          <h3>ROADMAP</h3>
          <p><center>
            Legenda:<br>
        <i class="fa fa-star"></i> - Tarefa Executada<br>
        <i class="fa fa-star-half-o"></i> - Tarefa em Progresso<br>
        <i class="fa fa-star-o"></i> - Proposta de Tarefa<br></center></p>
        </header>
  <ul class="timeline">
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-cogs"></i> Desenvolvimento Multiplataformas</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star"></i> Lançamento Oficial do Aplicativo Android </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-shopping-basket"></i> Usabilidade</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star"></i> Site de Mineração em Nuvem Oficial<br>
            <i class="fa fa-star"></i> Loja Virtual<br>
            <i class="fa fa-star-o"></i> Liberação de sistema de recargas de celulares na casa de câmbio oficial<br>
            <i class="fa fa-star-o"></i> Pagamento de Boletos Bancários na Casa de Câmbio Oficial
        </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-handshake-o"></i> Exchanges e Serviços P2P - Serviços de Terceiros</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star"></i> Cadastro perfil de vendedor no site brasileiro P2Brasil<br>
            <i class="fa fa-star"></i> Cadastro de moeda no site brasileiro Catálogo P2P<br>
            <i class="fa fa-star"></i> Cadastro perfil de vendedor no site brasileiro Catálogo P2P<br>
            <i class="fa fa-star-o"></i> Entrada em Casa de Câmbio maior
            </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-handshake-o"></i> Exchanges e Serviços P2P - Serviços Oficiais Spero</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star-half-o"></i> Criação de Exchange própria<br>
            <i class="fa fa-star-o"></i> Liberação de saques em Reais(BRL) na exchange oficial<br>
            </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-heart"></i> Serviços Sociais</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star-o"></i> Participação em projetos sociais dentro da comunidade da cidade de Belo Horizonte<br>
            <i class="fa fa-star-o"></i> Criação do Mercado Social<br>
            <i class="fa fa-star-o"></i> Criação do Banco Social Spero
          </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-group"></i> Comunidade</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-sign-in"></i> Marketing Interno</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-sign-out"></i> Marketing Externo</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i></p>
        </div>
      </div>
    </li>
    <!--<li class="timeline-inverted">
      <div class="timeline-badge danger"><i class="fa fa-tasks
"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Octuber</h4>
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
          <h4 class="timeline-title">November</h4>
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
          <h4 class="timeline-title">December</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>-->
  </ul>
</div>
</section>

<!-- ROADMAP -->
    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Informação em Tempo Real</h3>
        </header>

        <div class="row counters">

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo $api_blockcount; ?></span>
            <p>Blocos</p>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo "263251"-$api_blockcount; ?></span>
            <p>Blocos restantes para início da mineração híbrida</p>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo $api_getdifficulty2; ?></span>
            <p>Dificuldade PoS</p>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo number_format($api_getmoneysupply, 2, '.', ','); ?></span>
            <p>Moedas Distribuídas</p>
          </div>

        </div>

        <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Onde Estamos?</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-exchange">Exchanges</li>
              <li data-filter=".filter-pool">Pool</li>
              <li data-filter=".filter-topics">Assuntos Gerais</li>
              <li data-filter=".filter-git">GitHub</li>
              <li data-filter=".filter-official">Official SPERO</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-topics wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/cryptocurrencytalk.jpg" class="img-fluid img-responsive" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://cryptocurrencytalk.com/topic/88487-ann-sperocoin-x13-hybrid-powpos" target="_blank">CryptoCurrency Talk</a></h4>
                <p>Topics in Forums</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pool wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/logo.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://cloudmining.sperocoin.org/" target="_blank">SperoCoin Cloud Mining</a></h4>
                <p>Pool Cloud Mining</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-exchange wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/altilly.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.altilly.com/market/SPERO_BTC">Altilly - BTC Pair</a></h4>
                <p>Exchanges</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-exchange wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/altilly.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.altilly.com/market/SPERO_ETH" target="_blank">Altilly - ETH Pair</a></h4>
                <p>Exchanges</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-exchange wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/altilly.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.altilly.com/market/SPERO_DOGE" target="_blank">Altilly - DOGE Pair</a></h4>
                <p>Exchanges</p>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-exchange wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/probitex.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.probitex.com/trade/index/market/spero_btc" target="_blank">ProBitExchanger - BTC Pair</a></h4>
                <p>Exchanges</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-exchange wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/aiodex.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://aiodex.com/vote/spero" target="_blank">Aiodex(In Voting)</a></h4>
                <p>Exchanges</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-exchange wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/nanu-exchange.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://nanu.exchange/exchange#btc_spero" target="_blank">NANU EXCHANGE</a></h4>
                <p>Exchanges</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-exchange wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/monex.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://ico.monexexchange.com/voting" target="_blank">MONEX(In Voting)</a></h4>
                <p>Exchanges</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-git wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/github.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://github.com/DigitalCoin1/SperoCoin" target="_blank">Source</a></h4>
                <p>Github</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-official wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/logo.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.youtube.com/channel/UCQQjsoCjR_THbZ4AmalzPPg/" target="_blank">Youtube Channel</a></h4>
                <p>Official</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-topics wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/youtube.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.youtube.com/watch?v=ipe4AKA4U0E" target="_blank">BITCOIN & ALTCOINS GRÁTIS</a></h4>
                <p>Youtube Channel</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-topics wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/youtube.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.youtube.com/channel/UCuWq5QRkmO09WyNsowovQwQ" target="_blank">MAMMUHTE COLETOR DE</a></h4>
                <p>Youtube Channel</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-official wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/logo.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="http://sperocoin.ddns.net:3001/" target="_blank">Block Explorer</a></h4>
                <p>Github</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-exchange wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/catalogop2p.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a></h4>
                <p>Exchange P2P</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-exchange wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/trocanj.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://app.troca.ninja/offer/SPERO" target="_blank">Troca.Ninja</a></h4>
                <p>Exchange P2P</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pool wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/staking-world.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://staking.world/" target="_blank">Staking world</a></h4>
                <p>Pool Stake</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-topics wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/fanaticosfm.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://fanaticosfaucet.com/" target="_blank">Fanáticos Faucet FM</a></h4>
                <p>Faucet</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pool wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/4stake.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://www.4stake.com/5c6cc62defb2ef0004e2cf6f" target="_blank">4Stake</a></h4>
                <p>Pool Stake</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Nossos Parceiros</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <!-- ALTILLY --><a href="https://www.altilly.com/?a=f46ba" target="_blank"><img src="img/clients/client-1.png" alt=""></a>
          <!-- CATALOGO P2P --><a href="https://catalogop2p.com.br" target="_blank"><img src="img/clients/client-2.png" alt=""></a>
          <!-- STAKING WORLD --><a href="https://staking.world" target="_blank"><img src="img/clients/client-3.png" alt=""></a>
          <!-- HOPE ASSISTENCIA --><a href="" target="_blank"><img src="img/clients/client-5.png" alt=""></a>
          <!-- MDINVEST --><a href="https://mdinvest.nl" target="_blank"><img src="img/clients/client-6.png" alt=""></a>
          <!-- FANATICOS CRIPTOSFM --><a href="http://fanaticoscriptosfm.com" target="_blank"><img src="img/clients/client-7.png" alt=""></a>
          <!-- IDEALCASH --><a href="https://idealcash.io" target="_blank"><img src="img/clients/client-8.png" alt=""></a>
          <!-- 4STAKE --><a href="https://www.4stake.com/5c6cc62defb2ef0004e2cf6f" target="_blank"><img src="img/clients/client-9.png" alt=""></a>
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!--<section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section>--><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Equipe SperoCoin</h3>
          <p>Conheça os membros da Fundação SperoCoin e suas funções dentro do projeto</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Francis Santana</h4>
                  <span>Desenvolvedor / CEO</span>
                  <div class="social">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Douglas Aquino</h4>
                  <span>Relações Públicas e Assessoria</span>
                  <div class="social">
                    <a href="https://twitter.com/akino600"><i class="fa fa-twitter"></i></a>
                    <a href="https://facebook.com/akino6000"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/douglas-akino-b2b33b160"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!--
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Viviane Vieira</h4>
                  <span>Redes Sociais e Promoções</span>
                  <div class="social">
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Leonardo Pereira</h4>
                  <span>Desenvolvimento de Projetos</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contatos</h3>
        </div>

        <div><center>
              <a class="twitter-timeline" data-width="300" data-height="400" data-dnt="true" href="https://twitter.com/Spero_Official?ref_src=twsrc%5Etfw">Tweets by Spero_Official</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              <iframe src="https://discordapp.com/widget?id=386676506199588864&theme=dark" width="300" height="400" allowtransparency="true" frameborder="0"></iframe>
          </center>
        </div>
      </div>
    </section>
    <section id="social" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Redes Sociais</h3>
        </header>

        <div class="owl-carousel clients-carousel">
        <a href="https://www.facebook.com/Sperocoin-492498071117211/" target="_blank"><img src="img/c-liogo1.png" alt=""></a>
        <a href="https://telegram.me/joinchat/sperocoin" target="_blank"><img src="img/c-liogo2.png" alt=""></a>
        <a href="mailto:sperocoin@gmail.com" target="_blank"><img src="img/c-liogo3.png" alt=""></a>
         <a href="https://sperocoin.slack.com" target="_blank"><img src="img/c-liogo4.png" alt=""></a>
         <a href="https://twitter.com/Spero_Official" target="_blank"><img src="img/c-liogo5.png" alt=""></a>
         <a href="https://trello.com/b/jYZvXKDs/sperocoin" target="_blank"><img src="img/c-liogo6.png" alt=""></a>
         <a href="https://chat.whatsapp.com/8WmXf5ujFD7AtQgdwkUtVN" target="_blank"><img src="img/c-liogo7.png" alt=""></a>
         <a href="https://discord.gg/CVRFwC7" target="_blank"><img src="img/c-liogo8.png" alt=""></a>
        </div>

      </div>
    </section>
    <!-- #contact -->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container"><center>
      <div class="footer-logo"><img src="img/footer-logo.png" alt="" width="160px"></div>
      <span class="copyright">&copy; SperoCoin - 2017<br> All Rights Reserved</span>
      </center></div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
