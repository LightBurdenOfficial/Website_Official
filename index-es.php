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
    Theme name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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
                <a href="" title="Info">Información:</a>
                    <ul>
                      <li><a href="#about">Sobre</a></li>
                      <li><a href="#team">Equipo</a></li>
                      <li><a href="#Technical_Characteristics">Nuestro Software</a></li>
                      <li><a href="#timeline">Linha do Tempo</a></li>
                      <li><a href="#roadmap">RoadMap</a></li>
                      <li><a href="#portfolio">Donde Estamos?</a></li>
                      <li><a href="https://telegra.ph/FAQ-Proof-of-StakePoS---SPERO-03-31" target="_blank">FAQ PoS(Proof of Stake)</a></li>
                    </ul>
            </li>
            <!-- Menu de Informações -->

          <li><a href="#downloads">Downloads</a></li>
          <!-- Menu de Serviços -->
            <li class="menu-has-children">
                <a href="" title="Services">Serviços:</a>
                    <ul>
                      <li><a href="http://sperocoin.ddns.net:3001/" target="_blank">Block Explorer </a></li>
                      <li><a href="http://52.67.138.144:3001/" target="_blank">Block Explorer 2</a></li>
                      <li><a href="https://sperocoin.org/webwallet" target="_blank">WebWallet</a></li>
                      <li><a href="https://sperocoin.org/faucet" target="_blank">Faucet</a></li>
                      <li><a href="https://sperocoin.org/paperwallet" target="_blank">PaperWallet</a></li>
                      <li><a href="https://cloudmining.sperocoin.org" target="_blank">CloudMining</a></li>
                      <li><a href="https://loja.sperocoin.org" target="_blank">WebShop</a></li>
                    </ul>
            </li>
            <!-- Menu de Serviços -->
            <li><a href="#clients" target="_blank">Socios</a></li>
          <li><a href="listing.php" target="_blank">Exchange Oficial</a></li>
          <!-- Menu de Linguagem -->
            <li class="menu-has-children">
                <a href="" title="Language">IDIOMA:</a>
                    <ul>
                      <li><a href="index-en.php">EN</a></li>
                      <li><a href="index.php">PT</a></li>
                      <li><a href="index-es.php">ES</a></li>
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
                <h2>Bienvenido a Spero Coin</h2>
                <p><h3 style="color: white">Sustentabilidade en Tecnología</h3></p>
                  <p>Somos una criptomoneda ecologicamente correta que visa elimienar el desperdício de energia elétrica.
                </p>
                <a href="whitepaper/index.html" class="btn-get-started scrollto" target="_blank">WHITEPAPER</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 >Cotización - BRL</h2>
                <p>
                <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                <h1><coingecko-coin-price-chart-widget currency="brl" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1>
                </p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">Ver Más</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cotización - USD</h2>
                <p>
                 <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                    <h1><coingecko-coin-price-chart-widget currency="usd" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1></p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">Ver Más</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cotización - BTC</h2>
                <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                    <h1><coingecko-coin-price-chart-widget currency="btc" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1></p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">Ver Más</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cotización - ETH</h2>
                <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                    <h1><coingecko-coin-price-chart-widget currency="eth" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1></p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">Ver Más</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Prévio</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-shuffle"></i>
            <h4 class="title"><a href="#featured-services">Velocity</h4>
            <p class="description">Consiste en una verificación de tres etapas en cada bloque registrado en la red, evitando así el gasto duplicado, muy comúm en várias monedas.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-cube"></i>
            <h4 class="title"><a href="#featured-services">Adaptive Block Size(ABS)</a></h4>
            <p class="description">Spero no tiene un tamaño de bloque específico, por lo tanto, independientenente del número de transacciones, todas iran para el bloque si están dentro de los próximos 60 segundos de la ultima creación.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-clipboard"></i>
            <h4 class="title"><a href="#featured-services">OP_RETURN</a></h4>
            <p class="description">Con este recurso usted puede almazenar hasta 240 bytes de información directamente en la blockchain.</p>
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
          <p>Somos una criptomoneda Brasilera, criada en la ciudad de Belo Horizonte / MG.<br>Conoce un pouco mas sobre nuestras idéas.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-android-person-add"></i></div>
              </div>
              <h2 class="title"><a href="#">Nuestra misión</a></h2>
              <p>
                Reduzir las diferencias sociales y economicas de la población desfavorecidas en todo el mundo. Esto lleva a mejoria de la calidad de vida donde, o es escasa o no existe.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Nuestro Plan</a></h2>
              <p>
               Creamos una moneda con uso en un mercado accesíble a todos en un banco sin cobro de tasas abusivas, manteniendo apenas la tasa fija de transacción de rede (~ 0.0001 SPERO).
                <br> Con esto, tendrenos el primer Banco y Mercado Social mantenido enteramente por una moneda criptografada.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Nuestra Visión</a></h2>
              <p>
               Con ayuda y compañerismo mútuo, podemos alcanzar un objetivo que muchas personas intentan hacer solas.
               <br> Los pequeñitos, cuando se juntan, se vuelven gigantes.
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
          <p>Conozcan las informaciones técnicas y tecnologicas de nuestro software.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-code"></i></div>
            <h4 class="title"><a href="">Algoritmo</a></h4>
            <p class="description">
              Este algoritmo usa 13 rodadas de hash con 13 funciones hash diferentes (blake, bmw, groestl, jh, keccak, skein, luffa, cubehash, etc.), lo que lo toren la uen la de los mas confiábles ​​en el mundo moderen la de criptomonedas.
            </p>
            </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bolt"></i></div>
            <h4 class="title"><a href="">Mineración Híbrida PoW y PoS</a></h4>
            <p class="description">
              Con  Spero mineras con prueba de trabajo (PoW [ASIC, GPU, CPU, etc]) y también conseguis realizar mineración apenas dejando tu cartera con saldo ativo online, abierto y desbloqueado, la conocida prueba de participación (PoS).
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-cash"></i></div>
            <h4 class="title"><a href="">Monedas Totales</a></h4>
            <p class="description">
              Son un total de 7 millones de monedas y fueron pre-mineradas 100.00 para aplicaciónes en diversas áreas del projecto.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-chatbubbles"></i></div>
            <h4 class="title"><a href="">Mensaje encriptada (E2M)</a></h4>
            <p class="description">
              Con Spero puedes enviar mensajes criptografadas para otros usuários, solamente con la direccion y la llave pública del destinatário.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-done-all"></i></div>
            <h4 class="title"><a href="">Maturidad de Transacción</a></h4>
            <p class="description">Mineración: 05<br>transacciones: 03</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-options"></i></div>
            <h4 class="title"><a href="">Otras informaciones</a></h4>
            <p class="description">
              Tienpo de Bloque: 60 segundos<br> Dificultad de mineracion reiniciada a cada nuevo bloque<br> Retorno PoS: 25% por año
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
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat en lan proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section> --><!-- #call-to-action -->

    <!--==========================
      Timeline Section
    ============================-->
<section id="timeline">
  <div class="container">

<header class="section-header">
    <h3>Linea del Tiempo</h3>
    <p>Descubre lo que ya se ha hecho para mejorar nuestro sistema y ver en qué fechas se han realizado estas mejoras.</p>
</header>

<div class="skills-content">
<!-- Vertical Timeline -->
<div id="accordion">
<!-- CODE -->
<div class="card">
    <div class="card-header">
      <h5 class="mb-0">
        <button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#codes">
          <i class="fa fa-code"></i> DESARROLLO - CÓDIGOS
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Creación del proyecto usando la moneda MarteX<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Generación de Merkle<br>
                const char * pszTimestamp: "Esperança eh a ultima que morre.";
                block.nTime: 1506335848; <br>
                block.nNonce: 44360; <br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Generación de GenesisBlock <br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Envío de archivos a <a href="https://github.com/sperocoin/sperocoin"> Github </a> <br></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de código: el archivo SperoCoin-qt.pro se ha cambiado para la compilación en el entorno Linux<br></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Creación de Block Crawler / Explorer</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido el archivo en la revisión "src/leveldb/Makefile"</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de la información sobre la fase final PoW y la fase inicial de PoS;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de la fuente qt wallet;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de la versión;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de protocolo y actualizaciones generales<br>​</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido opción de limpieza de bloques de huérfanos;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido la opción de visualización "STAKE" en la columna "tipo" dentro de la pestaña "Transacciones";<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido "setban" en el "add | remove" (bantime) "/" listbanned "y" clearbanned "en la consola RPC;</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Baneo de los Pepinillos que están atrapados en Getblocks Loop</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de nombres de cadenas;<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de información en README.md <br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de información de participación en Wallet QT</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido Comando RPC "GETWALLETINFO"<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de iconos de madurez de las transacciones<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de splash screen main<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización del logo dentro de Wallet<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido hashGenesisBlockTestNet en el archivo main.h<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido testnet block.nNonce en el archivo main.cpp<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido static MapCheckpoints en el archivo checkpoints.cpp<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Cambio de la letra inicial de las direcciones en testnet en el archivo base58.h<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Cambio de la letra inicial de ejemplo en el archivo qt / sendcoinsdialog.cpp<br>
              <i class="fa fa-check-square-o" aria-hidden="true"></i> Cambió la versión a 2.6.4.3</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido comando RPC "getnetworkinfo" - Cambio en los archivos: bitcoinrpc.cpp; bitcoinrpc.h; rpcblockchain.cpp; rpcnet.cpp<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido comando RPC "getblockchaininfo" - Cambio en los archivos: bitcoinrpc.cpp; bitcoinrpc.h; rpcblockchain.cpp; rpcnet.cpp<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Agregar información de estado de Wallet (bloqueado o desbloqueado) en el comando RPC "getinfo"<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido nuevos puntos en el mapa de red actualizando la asignación hasta el bloque 130000- Cambio en el archivo: checkpoints.cpp<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> En el caso de que se produzca un cambio en los archivos de la carpeta "src \ qt \ locale", se actualizará la fecha de inicio de los trabajos de SperoCoin, quedando: "Copyright © 2017 The SperoCoin Developer"<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Actualización de imágenes "splashscreen" de QT<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Cambio de las fuentes de QT para "Century Gothic"<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Clear Orphans con actualización de página de transacciones automática, sin necesidad de reiniciar la cartera<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Cambió la versión a 2.6.4.4</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido nuevos puntos en el mapa de la red actualizando la asignación hasta el bloque 165962<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Mejoras en el rendimiento - Mayor velocidad en la sincronización<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido nuevos iconos<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Cambiar el estilo de la barra de progreso de descarga de bloques de "QWindowsXPStyle" a "QWindowsVistaStyle"<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Cambiando el tamaño de los iconos en "STATUSBAR_ICONSIZE" de 16 a 64<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Agregar la apertura del archivo SperoCoin.conf en el menú de la ventana de la consola<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Descripción modificada del tipo de minería PoW<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Descripción modificada del tipo de minería PoS<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Nuevo icono de minería de PoS<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Versión modificada a 2.6.4.5</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Cambiado Versión para 2.6.4.6;<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Cambió la versión del protocolo a mínimo 700001;<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido introducción;<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Añadido puntos de chequeo de bloques hasta el bloque 180000<br>
            <i class="fa fa-check-square-o" aria-hidden="true"></i> Agradecimiento al usuario vinnystifler por la contribución en la corrección de
errores con QT: https://github.com/vinnystifler<br></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Corrección de hash de transacción incorrecta
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
          <i class="fa fa-code-fork"></i> HARD Y SOFT FORKS
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Fork del proyecto en GitHub por DigitalCoin<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Reenvío de archivos para GitHub</p>
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
          <i class="fa fa-thumbs-up"></i> MEDIDAS Y SOCIAL
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
              <p>             <i class="fa fa-check-square-o" aria-hidden="true"></i> Lanzamiento en BitcoinTalk <br></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Creación del <a href="mailto:sperocoin@gmail.com">E-mail</a> Oficial<br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Temporal <a href="https://superocoin.wixsite.com/sperocoin">Website</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> No hay nuevos mensajes: <a href="https://cryptocurrencytalk.com/topic/88487-ann-sperocoin-x13-hybrid-powpos/">Cryptocurrencytalk</a><br></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Asociación con el canal CURSAGRAM en la aplicación TELEGRAM con SPERO como principal patrocinador.</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Modificación del foro Bitcointalk: Jr. Member</p>
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
          <i class="fa fa-info"></i> INFORMACIONES GENERALES
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
              <p>             <i class="fa fa-check-square-o" aria-hidden="true"></i> Asociación con piscina: pickaxe.online <br>
                             <i class="fa fa-check-square-o" aria-hidden="true"></i> Hope dejó el proyecto </p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Apagado oficial del equipo Hope asistencia técnica en el proyecto<br></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Inicio de las votaciones para agregar la moneda en Exchange <a href="https://tradesatoshi.com/Vote">TradeSatoshi</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado ahora en <a href="https://coinsmarkets.com/trade-BTC-SPERO.htm">Coins Markets</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Canal creado usando <a href="httsp://sperocoin.slack.com">Slack</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Inicio de votación para añadir la moneda a la moneda <a href="https://c-cex.com/?id=vote&coin=spero">C-CEX</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Lanzamiento oficial de la aplicación para Android basado en WebwalletRegreso a la página de inicio.</p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Regreso a la página de inicio <a href="https://p2brasil.com/produto/sperocoin/" target="_blank">P2Brasil</a><br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Registro de moneda en el sitio brasileño <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a><br>
             <i class="fa fa-check-square-o" aria-hidden="true"></i> Regreso a la página de inicio <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Adicción en la exchange Altilly en los pares SPERO/BTC, SPERO/ETH e SPERO/DOGE: <a href="https://www.altilly.com/market">ALTILLY</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado en <a href="https://cryptostake.es">CryptoStake</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado en <a href="https://staking.world/Pages/index.aspx">Staking World</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado en <a href="https://nanu.exchange/exchange#btc_spero">Nanu Exchange</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado en <a href="https://blockfolio.com/#get-app">Blockfolio</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado en <a href="https://delta.app/">Delta</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado en <a href="https://coincodex.com/crypto/sperocoin">CoinCodex</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado en <a href="https://bitsahani.com/exchange/SPERO-DOGE">Bitsahani</a></p>
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
              <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Listado en <a href="https://www.4stake.com/sperocoin">4Stake</a></p>
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
            Subtítulo:<br>
        <i class="fa fa-star"></i> - Taréa ejecutada<br>
        <i class="fa fa-star-half-o"></i> - Tarea en progreso<br>
        <i class="fa fa-star-o"></i> - Propuesta de Taréa<br></center></p>
        </header>
  <ul class="timeline">
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-cogs"></i> Desarrollo Multiplataformas</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star"></i> Lanzamiento Oficial del Aplicativo Android </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-shopping-basket"></i> Usabilidad</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star"></i> Página de mineracion en Nuven Oficial<br>
            <i class="fa fa-star"></i> Oficial WebShop<br>
            <i class="fa fa-star-o"></i> Liberación de sistema de recargas de celulares en casa de cambio oficial<br>
            <i class="fa fa-star-o"></i> Pagamento de Boletos Bancários en Casa de Cambio Oficial
        </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-handshake-o"></i> Exchanges e Servicios P2P - Servicios de Terceros</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star"></i> Cadastro perfil de vendedor en la página Brasilera P2Brasil<br>
            <i class="fa fa-star"></i> Cadastro de moneda en la págien la Brasilera Catálogo P2P<br>
            <i class="fa fa-star"></i> Cadastro perfil de vendedor en la página Brasilera Catálogo P2P<br>
            <i class="fa fa-star-o"></i> Entrada en Casa de cambio mayor
            </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-handshake-o"></i> Exchanges y Servicios P2P - Servicios Oficiales Spero</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star-o"></i> Liberación de saques en Reais(BRL) en la casa de cambio oficial<br>
            <i class="fa fa-star"></i> Troca de SPERO ←→ DOGE en la casa de cambio oficial<br>
            <i class="fa fa-star"></i> Troca de SPERO ←→ MERCADOPAGO en la casa de cambio oficial<br>
            </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-heart"></i> Servicios sociales</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star-o"></i> Participación en projectos sociales dentro de la comunidad de la ciudad de Belo Horizonte<br>
            <i class="fa fa-star-o"></i> Creacion del Mercado Social<br>
            <i class="fa fa-star-o"></i> Creacion del Banco Social Spero
          </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-group"></i> Comunidad</h4>
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
          <h4 class="timeline-title">en lavenber</h4>
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
          <h3>Informaciones en Tiempo Real</h3>
        </header>

        <div class="row counters">

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo $api_blockcount; ?></span>
            <p>Bloques</p>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo "263251"-$api_blockcount; ?></span>
            <p>Bloques Restantes para Início de la Mineración Híbrida</p>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo $api_getdifficulty2; ?></span>
            <p>Dificuldad PoS</p>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo $api_getmoneysupply; ?></span>
            <p>Monedas Distribuídas</p>
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
          <h3 class="section-title">Donde Estamos?</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-exchange">Exchanges</li>
              <li data-filter=".filter-pool">Pool</li>
              <li data-filter=".filter-topics">Asuntos Generales</li>
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
                <img src="img/portfolio/p2brasil.png" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://p2brasil.com/produto/sperocoin/" target="_blank">P2Brasil</a></h4>
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

          <div class="col-lg-4 col-md-6 portfolio-item filter-pool wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/cryptostake.jpg" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://cryptostake.es/" target="_blank">Crypto Stake</a></h4>
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
          <h3>Nuestros socios</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <!-- ALTILLY --><a href="https://www.altilly.com/?a=f46ba" target="_blank"><img src="img/clients/client-1.png" alt=""></a>
          <!-- CATALOGO P2P --><a href="https://catalogop2p.com.br" target="_blank"><img src="img/clients/client-2.png" alt=""></a>
          <!-- STAKING WORLD --><a href="https://staking.world" target="_blank"><img src="img/clients/client-3.png" alt=""></a>
          <!-- CRYPTOSTAKE --><a href="https://cryptostake.es?__wallets_faucet_ref=6412684e6793ba02" target="_blank"><img src="img/clients/client-4.png" alt=""></a>
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
              Proin iaculis purus consequat sen cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at senper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export Tiempor illum tamen malis malis eram quae irure esse labore quen cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua en laster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jeen la Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              enim nisi quen export duis labore cillum quae magen la enim sint quorum nulla quen veniam duis minim Tiempor labore quen eram duis en laster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magen la sunt elit fore quen dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quen legam fore sunt eram irure aliqua veniam Tiempor en laster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
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
          <h3>Equipo SperoCoin</h3>
          <p>Conozca a los miembros de la Fundación SperoCoin y sus funciones dentro del proyecto</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Francis Santana</h4>
                  <span>Revelador / CEO</span>
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
                  <span>Relaciones públicas y asesoría</span>
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
                  <span>Redes Sociales y Promociones</span>
                  <div class="social">
                  </div>
                </div>
              </div>
            </div>
          </div>
-->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="menber">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="menber-info">
                <div class="menber-info-content">
                  <h4>Leonardo Pereira</h4>
                  <span>Desarrollo de Proyectos</span>
                  <div class="social">
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
          <h3>Contactos</h3>
        </div>

        <div><center>
              <a class="twitter-timeline" data-width="450" data-height="400" data-dnt="true" href="https://twitter.com/Spero_Official?ref_src=twsrc%5Etfw">Tweets by Spero_Official</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              <iframe src="https://discordapp.com/widget?id=386676506199588864&theme=dark" width="400" height="400" allowtransparency="true" frameborder="0"></iframe>
          </center>
        </div>
      </div>
    </section>
    <section id="social" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Redes sociales</h3>
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

    <!--main-section-start-->
<section id="downloads" class="section-bg wow fadeInUp">
    <div class="container">
        <header class="section-header">
          <h3>Downloads</h3>
          <p>Baje aqui los archivos necesarios para iniciar con Spero.</p>
        </header>
      <div class="row">
        <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin_Android/releases/download/SperoCoin-v.2.6.4.6-BETA/SperoCoin-v.2.6.4.6-BETA.apk" target="_blank"><h3><i class="fa fa-android"></i> Apk Android - Versión Full Node(v.2.6.4.6-BETA)</h3>
              <p>Wallet Android. Con esta wallet, podrás realizar mineración PoS directamente desde tu celular/tablet.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://sperocoin.org/files/SperoCoin-Version-LITE.apk" target="_blank"><h3><i class="fa fa-android"></i> Apk Android - Versión Lite</h3>
              <p>Wallet Android WebBased. Conectada directamente a nuestra WebWallet, así que tienes la comodidad de acceder a tu cuenta en la palma de tu mano.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.6/SperoCoin-v.2.6.4.6.exe" target="_blank"><h3><i class="fa fa-windows"></i> Windows QT - V.2.6.4.6 - 08/12/2018</h3>
              <p>Wallet designer con gráfico. Modelo para aquellos que buscan confort y conveniencia para verificar saldo, enviar y recibir monedas de forma prática y rápida.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.6/SperoCoind-v.2.6.4.6.exe" target="_blank"><h3><i class="fa fa-windows"></i> Daemon Windows - V.2.6.4.6 - 08/12/2018</h3>
              <p>Wallet designer sin graficos.  Modelo para aquellos que buscan praticidad y menor consumo de recursos.</p></a>
            </div>
          </div>
          <!--<div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/v.2.6.4.5/SperoCoin-v.2.6.4.5.-.Raspberry.5" target="_blank"><h3><i><img src="img/portfolio/raspberry.png" width="40px"/></i> Raspberry PI 3</h3>
              <p>Wallet designer con gráfico. Modelo para aquellos que buscan confort y conveniencia para verificar saldo, enviar y recibir monedas de forma prática y rápida</p></a>
            </div>
          </div>-->
            <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="#" data-toggle="modal" data-target="#linuxcomp"><h3><i class="fa fa-termien lal"></i> Compilation Linux Wallet</h3>
              <p>Compile usted mismo su código Spero.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases" target="_blank"><h3><i class="fa fa-cubes"></i> BlockChain</h3>
              <p>Baje la cadena de bloques completa en una fecha mas reciente para mejorar la velocidad de la sincronización.</p></a>
            </div>
          </div>
        <!--<figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
          <img src="img/wallet.png" alt="" width="524">
        </figure>-->
      </div>
    </div>
</div>
</section>
<!-- Modal -->
  <div class="modal fade" id="linuxcomp" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title">Compilación Wallet Linux</h4>
        </div>
        <div class="modal-body">
          <p><b><i class="ion-code"></i> Baje e instale las dependencias:</b><br>
              sudo apt-get install build-essential libboost-all-dev libcurl4-openssl-dev libdb5.3-dev libdb5.3++-dev qt-sdk libminiupnpc-dev qrencode libqrencode-dev git libtool automake autotools-dev autoconf pkg-config libssl-dev libgmp3-dev libevent-dev bsdmainutils<br><br>
      <b><i class="fa fa-code"></i> Clone el código fuente del github para la maquina local:</b><br>
              git clone https://github.com/DigitalCoin1/SperoCoin
      <br><br>
      <b><i class="fa fa-code"></i> Compile el Daemon en el diretório SperoCoin/src:</b><br>
              cd SperoCoin/src<br><br>
              make -f makefile.unix USE_UPNP=- USE_IPV6=1
      <br><br>
      <b><i class="fa fa-code"></i> Ejecute el Daemon en el diretório SperoCoin/src:</b><br>
              ./SperoCoind
      <br><br>
      <b><i class="fa fa-code"></i> [OPCIONAL] Compile el QT en el diretório SperoCoin:</b><br>
              sudo apt-get install libqt5gui5 libqt5core5a libqt5dbus5 qttools5-dev qttools5-dev-tools libprotobuf-dev protobuf-compiler libqrencode-dev<br><br>
              qmake SperoCoin-qt.pro "USE_UPNP=-" "USE_QRCODE=1"<br><br>
              make -f Makefile</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
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

  <!-- Tenplate Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
