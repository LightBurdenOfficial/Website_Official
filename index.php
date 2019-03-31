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
    Theme Name: BizPage
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
                <a href="" title="Info">Informações:</a>
                    <ul>
                      <li><a href="#about">Sobre</a></li>
                      <li><a href="#team">Equipe</a></li>
                      <li><a href="#Technical_Characteristics">Nosso Soft</a></li>
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
                      <li><a href="index.php">PT</a></li>
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
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Linha do Tempo</h3>
          <p>Descubra o que já foi feito para melhorar nosso sistema e veja em quais datas essas melhorias foram feitas.</p>
        </header>

        <div class="skills-content">
<!-- Vertical Timeline -->
<div class="container">
  <ul class="timeline">
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 25/09/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Criação do projeto usando a moeda MarteX<br>
             → Geração de Merkle<br>
                const char * pszTimestamp: "Esperança eh a ultima que morre.";
                block.nTime: 1506335848; <br>
                block.nNonce: 44360; <br>
             → Geração de GenesisBlock <br>
             → Lançamento no BitcoinTalk <br>
             → Envio de arquivos para o <a href="https://github.com/sperocoin/sperocoin"> Github </a> <br>
             → Parceria com pool's: pickaxe.online <br>
             → Hope deixou o projeto </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code-fork"></i> 26/09/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Fork do projeto no GitHub por DigitalCoin<br>
             → Reapresentação de arquivos para o GitHub</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 01/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Atualização de código: o arquivo SperoCoin-qt.pro foi alterado para compilação no ambiente Linux<br>
             → Desligamento oficial da equipe Hope assistência técnica no projeto<br>
             → Criação do <a href="mailto:sperocoin@gmail.com">E-mail</a> Oficial<br>
             → <a href="https://superocoin.wixsite.com/sperocoin">Website</a> temporário</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted"></i>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-file-code-o"></i> 02/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Abertura do Tópico em: <a href="https://cryptocurrencytalk.com/topic/88487-ann-sperocoin-x13-hybrid-powpos/">Cryptocurrencytalk</a><br>
             → Início das votações para adicionar a moeda na Exchange <a href="https://tradesatoshi.com/Vote">TradeSatoshi</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 04/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Criação do Block Crawler / Explorer</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 06/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Adicionado arquivo no patch "src/leveldb/Makefile"
​</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 08/10/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Atualização das informações sobre a fase final PoW e a fase inicial PoS;<br>
             → Atualização da fonte qt wallet;<br>
             → Atualização de versão;<br>
             → Atualização de protocolo e atualizações gerais<br>
​</p>
        </div>
      </div>
    </li>
        <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 10/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Adicionado opção de limpeza de blocos de órfãos;<br>
             → Adicionado a opção de exibição "STAKE" na coluna "tipo" dentro da guia "Transações";<br>
             → Adicionado "setban" no "add | remove "(bantime)" / "listbanned" e "clearbanned" no console RPC;</p>
        </div>
      </div>
    </li>
        <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 11/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Banimento de Forked Peers que estão presos em Getblocks Loop ​
​</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-database"></i> 12/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Listado agora na <a href="https://coinsmarkets.com/trade-BTC-SPERO.htm">Coins Markets</a></p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-cubes"></i> 21/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ <a href="http://sperocoin.ddns.net:3001/">Oficial Block Explorer</a>
​</p>
        </div>
      </div>
    </li>
        <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 22/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Atualização de nomes de strings;<br>
             → Atualização de informações no README.md <br>
             → Atualização de informações de participação na Wallet QT</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-database"></i> 24/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ <a href=" https://sperocoin.ddns.net/faucet">Faucet Oficial</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 01/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Canal criado usando <a href="httsp://sperocoin.slack.com">Slack</a></p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-file-code-o"></i> 04/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Início de votação para adicionar a moeda na <a href="https://c-cex.com/?id=vote&coin=spero">C-CEX</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-file-code-o"></i> 11/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Parceria com o canal CURSAGRAM no aplicativo TELEGRAM com a SPERO como principal patrocinador.</p>
        </div>
      </div>
    </li>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-file-code-o"></i> 12/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Modificação do Fórum Bitcointalk: Jr. Member</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-database"></i> 24/01/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Lançamento oficial do aplicativo para Android baseado na Webwallet.</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-database"></i> 26/03/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Cadastro perfil de vendedor no site brasileiro <a href="https://p2brasil.com/produto/sperocoin/" target="_blank">P2Brasil</a><br>
             → Cadastro de moeda no site brasileiro <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a><br>
             → Cadastro perfil de vendedor no site brasileiro <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 28/03/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Adicionado Comando RPC "GETWALLETINFO"<br>
              → Atualização de icones de maturidade das transações<br>
              → Atualização da splash screen main<br>
              → Atualização do logo dentro da Wallet<br>
              → Adicionado hashGenesisBlockTestNet no arquivo main.h<br>
              → Adicionado testnet block.nNonce no arquivo main.cpp<br>
              → Adicionado static MapCheckpoints no arquivo checkpoints.cpp<br>
              → Alteração da letra inicial dos endereços em testnet no arquivo base58.h<br>
              → CAlteração da letra inicial de exemplo no arquivo qt/sendcoinsdialog.cpp<br>
              → Alterada versão para 2.6.4.3</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 15/07/2018</h4>
        </div>
        <div class="timeline-body">
          <p>
            → Adicionado comando RPC "getnetworkinfo" - Alteração nos arquivos: bitcoinrpc.cpp; bitcoinrpc.h; rpcblockchain.cpp; rpcnet.cpp<br>
            → Adicionado comando RPC "getblockchaininfo" - Alteração nos arquivos: bitcoinrpc.cpp; bitcoinrpc.h; rpcblockchain.cpp; rpcnet.cpp<br>
            → Adicionada Informação de Status da Wallet(Bloqueada ou Desbloqueada) no comando RPC "getinfo"<br>
            → Adicionado novos pontos no mapa de rede atualizando o mapeamento até o bloco 130000- Alteração no arquivo: checkpoints.cpp<br>
            → Alteração dos direitos de cópia, sendo atualizada a data de início dos trabalhos da SperoCoin, ficando: "Copyright © 2017 The SperoCoin developers" - Alteração em arquivos ".ts" da pasta "src\qt\locale"<br>
            → Atualização de imagens "splashscreen" da QT<br>
            → Alteração das fontes da QT para "Century Gothic"<br>
            → Clear Orphans com atualização de página de transações automática, sem a necessidade de reiniciar a carteira<br>
            → Alterada versão para 2.6.4.4
          </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 25/08/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Adiconada na exchange Altilly nos pares SPERO/BTC, SPERO/ETH e SPERO/DOGE: <a href="https://www.altilly.com/market">ALTILLY</a></p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 27/10/2018</h4>
        </div>
        <div class="timeline-body">
          <p>
            → Adicionado novos pontos no mapa da rede atualizando o mapeamento até o bloco 165962<br>
            → Melhorias no desempenho - Maior velocidade na sincronização<br>
            → Adicionado novos ícones<br>
            → Alterar o estilo da barra de progresso de download de blocos de "QWindowsXPStyle" para "QWindowsVistaStyle"<br>
            → Alterando o tamanho dos ícones em "STATUSBAR_ICONSIZE" de 16 a 64<br>
            → Adicionando a abertura do arquivo SperoCoin.conf no menu da janela do console<br>
            → Descrição alterada do tipo de mineração PoW<br>
            → Descrição alterada do tipo de mineração PoS<br>
            → Novo ícone de Mineração de PoS<br>
            → Versão alterada para 2.6.4.5
          </p>
        </div>
      </div>
    </li>
  </ul>
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
          <h3>Nossos Parceiros</h3>
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

    <!--main-section-start-->
<section id="downloads" class="section-bg wow fadeInUp">
    <div class="container">
        <header class="section-header">
          <h3>Downloads</h3>
          <p>Baixe aqui os arquivos necessários para começar no Spero.</p>
        </header>
      <div class="row">
        <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin_Android/releases/download/SperoCoin-v.2.6.4.6-BETA/SperoCoin-v.2.6.4.6-BETA.apk" target="_blank"><h3><i class="fa fa-android"></i> Apk Android - Versão Full Node(v.2.6.4.6-BETA)</h3>
              <p>Wallet Android. Com essa wallet, você poderá realizar mineração PoS diretamente do seu aparelho.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://sperocoin.org/files/SperoCoin-Version-LITE.apk" target="_blank"><h3><i class="fa fa-android"></i> Apk Android - Versão Lite</h3>
              <p>Wallet Android WebBased. Conectada diretamente a nossa WebWallet, assim você tem a comodidade de acessar sua conta na palma de sua mão.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.6/SperoCoin-v.2.6.4.6.exe" target="_blank"><h3><i class="fa fa-windows"></i> Windows QT - V.2.6.4.6 - 08/12/2018</h3>
              <p>Carteira com design gráfico. Modelo para aqueles que procuram conforto e conveniência para verificar o saldo, enviar e receber moedas de forma prática e rápida.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.6/SperoCoind-v.2.6.4.6.exe" target="_blank"><h3><i class="fa fa-windows"></i> Daemon Windows - V.2.6.4.6 - 08/12/2018</h3>
              <p>Carteira sem design gráfico. Modelo para aqueles que buscam praticidade e menor consumo de recursos.</p></a>
            </div>
          </div>
          <!--<div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/v.2.6.4.5/SperoCoin-v.2.6.4.5.-.Raspberry.5" target="_blank"><h3><i><img src="img/portfolio/raspberry.png" width="40px"/></i> Raspberry PI 3</h3>
              <p>Carteira com design gráfico. Modelo para aqueles que procuram conforto e conveniência para verificar o saldo, enviar e receber moedas de forma prática e rápida.</p></a>
            </div>
          </div>-->
            <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="#" data-toggle="modal" data-target="#linuxcomp"><h3><i class="fa fa-terminal"></i> Compilation Linux Wallet</h3>
              <p>Compile você mesmo o código Spero.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases" target="_blank"><h3><i class="fa fa-cubes"></i> BlockChain</h3>
              <p>Baixe a cadeia de blocos completa em uma data mais recente para melhor velocidade na sincronização.</p></a>
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
