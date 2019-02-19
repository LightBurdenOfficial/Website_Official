<!DOCTYPE html>
<?php
include_once('arrecada.php');
//SALES
$api_sales = "http://sperocoin.ddns.net:3001/ext/getbalance/SX2czsni9LUY8574eXQhsQnnz46ZU8r4sf";
$juncao_api_sales = json_decode(file_get_contents($api_sales), true);
/*$api_sales2 = "http://sperocoin.ddns.net:3001/ext/getbalance/SSi9PsXc3PUCqy9dAHfgArMDivrUuCGEbw";
$juncao_api_sales2 = json_decode(file_get_contents($api_sales2), true);
$api_sales3 = "http://sperocoin.ddns.net:3001/ext/getbalance/SSZceqUgksEQc8FLVS2gMf8Wi1n55uLSn7";
$juncao_api_sales3 = json_decode(file_get_contents($api_sales3), true);
$api_sales4 = "http://sperocoin.ddns.net:3001/ext/getbalance/SYP4LKWZoADLUe5xRLf3qn2X5Aw3kVa7eQ";
$juncao_api_sales4 = json_decode(file_get_contents($api_sales4), true);
$api_sales5 = "http://sperocoin.ddns.net:3001/ext/getbalance/Sd3gMK4buFuieAVKeGEBJHtdK4nmWbriD1";
$juncao_api_sales5 = json_decode(file_get_contents($api_sales5), true);
$api_sales6 = "http://sperocoin.ddns.net:3001/ext/getbalance/SeV5SdEJP1dJrtRvBpNud2bu5oZxNacmJ4";
$juncao_api_sales6 = json_decode(file_get_contents($api_sales6), true);*/
$sales = $juncao_api_sales;

//BLOCK EXPLORER
$be_blockcount = 'http://sperocoin.ddns.net:3001/api/getblockcount'; // BLOCK COUNT
$be_blockcount_api = json_decode(file_get_contents($be_blockcount), true);
$api_blockcount = $be_blockcount_api;

$be_getdifficulty = 'http://sperocoin.ddns.net:3001/api/getdifficulty'; // GET DIFFICULTY POW
$be_getdifficulty_api = json_decode(file_get_contents($be_getdifficulty), true);
$api_getdifficulty = $be_getdifficulty_api['proof-of-work'];

$be_getdifficulty2 = 'http://sperocoin.ddns.net:3001/api/getdifficulty'; // GET DIFFICULTY POS
$be_getdifficulty_api2 = json_decode(file_get_contents($be_getdifficulty2), true);
$api_getdifficulty2 = $be_getdifficulty_api2['proof-of-stake'];

$be_getmoneysupply = 'http://sperocoin.ddns.net:3001/ext/getmoneysupply'; //MONEY SUPPLY
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
          <li class="menu-active"><a href="#intro">Home</a></li>
          <!-- Menu de Informações -->
            <li class="menu-has-children">
                <a href="" title="Info">Information:</a>
                    <ul>
                      <li><a href="#about">About Us</a></li>
                      <li><a href="#team">Our Team</a></li>
                      <li><a href="#Technical_Characteristics">Our Soft</a></li>
                      <li><a href="#roadmap">RoadMap</a></li>
                      <li><a href="#portfolio">Where we are?</a></li>
                    </ul>
            </li>
            <!-- Menu de Informações -->
          <li><a href="#downloads">Downloads</a></li>
          <!-- Menu de Serviços -->
            <li class="menu-has-children">
                <a href="" title="Services">Services:</a>
                    <ul>
                      <li><a href="http://sperocoin.ddns.net:3001/" target="_blank">Block Explorer 2</a></li>
                      <li><a href="https://sperocoin.org/webwallet" target="_blank">WebWallet</a></li>
                      <li><a href="https://sperocoin.org/faucet" target="_blank">Faucet</a></li>
                      <li><a href="https://sperocoin.org/paperwallet" target="_blank">PaperWallet</a></li>
                    </ul>
            </li>
            <!-- Menu de Serviços -->
            <li><a href="#clients" target="_blank">Partners</a></li>
          <li><a href="listing.php" target="_blank">Exchange Official</a></li>
          <!-- Menu de Linguagem -->
            <li class="menu-has-children">
                <a href="" title="Language">LANG:</a>
                    <ul>
                      <li><a href="index.php">EN</a></li>
                      <li><a href="index-pt.php">PT</a></li>
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
                <h2>Welcome To Spero Coin</h2>
                <p><h3 style="color: white">Sustainability in technology</h3></p>
                  <p>We are an ecologically correct cryptocurrency that aims to eliminate the waste of electrical energy.
                </p>
                <a href="whitepaper/index.html" class="btn-get-started scrollto" target="_blank">WHITEPAPER</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 >Price chart - BRL</h2>
                <p>
                <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                <h1><coingecko-coin-price-chart-widget currency="brl" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1>
                </p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">See More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Price chart - USD</h2>
                <p>
                  <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                 <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                    <h1><coingecko-coin-price-chart-widget currency="usd" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1></p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">See More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Price chart - BTC</h2>
                <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                 <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                    <h1><coingecko-coin-price-chart-widget currency="btc" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1></p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">See More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Price chart - ETH</h2>
                <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                 <script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
                    <h1><coingecko-coin-price-chart-widget currency="eth" coin-id="sperocoin" locale="en" height="200" width="0"></coingecko-coin-price-chart-widget></h1></p>
                <a href="https://www.coingecko.com/en/price_charts/sperocoin/brl#panel" class="btn-get-started scrollto" target="_blank">See More</a>
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
            <p class="description">It consists of a three-stage verification of each block registered in the network, thus preventing double spend, very common in several currencies.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-cube"></i>
            <h4 class="title"><a href="#featured-services">Adaptive Block Size(ABS)</a></h4>
            <p class="description">Spero does not have a specific block size, so regardless of the number of transactions, all of them will go into the block if they are within 60 seconds of the last creation.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-clipboard"></i>
            <h4 class="title"><a href="#featured-services">OP_RETURN</a></h4>
            <p class="description">With this feature you can store up to 240 bytes of information directly in the blockchain.</p>
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
          <h3>About Us</h3>
          <p>We are a Brazilian cryptocurrencie, created in the city of Belo Horizonte / MG.<br>Know a little more about our ideas.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-android-person-add"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Reduce the social and economic differences of the underprivileged population across the globe. <br>This leads to improvement in quality of life where it is scarce or does not exist.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                We create a currency with use in a market accessible to all and a bank without charges of abusive fees, maintaining only the fixed rate of network transaction (~ 0.0001 SPERO).
                <br>With this we will have the first Bank and Social Market maintained entirely by a crypto-currency.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                With mutual help and companionship we can achieve a goal that many people try to do alone.
                <br>The little ones, when they come together, become giants.
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
          <h3>Technical Characteristics</h3>
          <p>Know the technical information of our software technology.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-code"></i></div>
            <h4 class="title"><a href="">Algorithm</a></h4>
            <p class="description">This algorithm uses 13 rounds of hashing with 13 different hash-functions (blake, bmw, groestl, jh, keccak, skein, luffa, cubehash, etc.), which makes it one of most reliable in a modern cryptocurrencies world.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bolt"></i></div>
            <h4 class="title"><a href="">Hybrid mining PoW and PoS</a></h4>
            <p class="description">With Spero you mining with proof of work(PoW[ASIC, GPU, CPU, etc]) and also mining just leaving your wallet with active balance online, open and unlocked, the well-known proof of stake(PoS).</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-cash"></i></div>
            <h4 class="title"><a href="">Total Coins</a></h4>
            <p class="description">There are 7 million coins total, and were pre-mined 100,000 for application in several areas of the project.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-chatbubbles"></i></div>
            <h4 class="title"><a href="">Encrypted Message (E2M)</a></h4>
            <p class="description">With Spero you can send encrypted messages to other users, having in hand only the address and the public key of the recipient.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-done-all"></i></div>
            <h4 class="title"><a href="">Transaction Maturity</a></h4>
            <p class="description">Mining: 05<br>Transactions: 03</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-options"></i></div>
            <h4 class="title"><a href="">Other Information</a></h4>
            <p class="description">Block time: 60 seconds<br> Difficulty reset to each block<br> Return PoS: 25% per year</p>
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
          <h3>TimeLine</h3>
          <p>Find out what has already been done to improve our system and see on what dates these improvements were made.</p>
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
          <p>→ Creation of the project using the MarteX crypto<br>
→ Generation of Merkle<br>
const char* pszTimestamp: "A esperanca eh a ultima que morre.";<br>
block.nTime: 1506335848;<br>
block.nNonce: 44360;<br>
Generation of GenesisBlock<br>
→ Launching on BitcoinTalk<br>
→ Upload files to <a href="https://github.com/sperocoin/sperocoin">Github</a><br>
→ Pool Partnership: pickaxe.online<br>
→ Hope closing project</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"<i class="fa fa-code-fork"></i> 26/09/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→Project Fork on GitHub by DigitalCoin<br>
→ Resubmission of files to GitHub</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 01/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Code update: SperoCoin-qt.pro file has been changed for
compilation in the Linux environment<br>
→ Official team shutdown Hope technical assistance in the project<br>
→ Creation of the official <a href="mailto:sperocoin@gmail.com">E-mail</a><br>
→ Temporary <a href="https://superocoin.wixsite.com/sperocoin">website</a> creation</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted"></i>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-file-code-o"></i> 02/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Topic opening at: <a href="https://cryptocurrencytalk.com/topic/88487-ann-sperocoin-x13-hybrid-powpos/">Cryptocurrencytalk</a><br>
→ Start voting to add currency in Exchange <a href="https://tradesatoshi.com/Vote">TradeSatoshi</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 04/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Block Crawler / Explorer creation</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 06/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Added file in patch "src / leveldb / Makefile"
​</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 08/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Update infos about end phase of PoW and start phase PoS;<br>
→ Update font of qt wallet;<br>
→ Update version;<br>
→ Update Protocol Others general's updates<br>
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
          <p>→ Added option of cleaning of orphans blocks;<br>
→ Added display option "STAKE" in the "type" column inside the "Transactions" tab;<br>
→ Added "setban" node "" add | remove "(bantime)" / "listbanned" and "clearbanned" in the RPC console;</p>
        </div>
      </div>
    </li>
        <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> /10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Ban Forked Peers who are stuck in a Getblocks Loop.
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
          <p>→ Listed right now at <a href="https://coinsmarkets.com/trade-BTC-SPERO.htm">Coins Markets</a></p>
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
          <p>→ Update of strings names;<br>
→ Updating information in README.md<br>
→ Update Stake Info in QT Wallet</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-database"></i> 24/10/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ <a href=" https://sperocoin.ddns.net/faucet">Faucet Official</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 01/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Channel created using <a href="httsp://sperocoin.slack.com">Slack</a></p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-file-code-o"></i> 04/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Start voting to add currency in <a href="https://c-cex.com/?id=vote&coin=spero">C-CEX</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-file-code-o"></i> 11/11/2017</h4>
        </div>
        <div class="timeline-body">
          <p>→ Partnership with the CURSAGRAM channel in the TELEGRAM application with SPERO as the main sponsor.</p>
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
          <p>→ Forum Modification Bitcointalk: Jr. Member</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-database"></i> 24/01/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Official release of the Android application based on Webwallet.</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-database"></i> 26/03/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Register seller profile on the brazilian site <a href="https://p2brasil.com/produto/sperocoin/" target="_blank">P2Brasil</a><br>
              → Currency register on the Brazilian site <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a><br>
              → Register seller profile on the brazilian site <a href="https://catalogop2p.com.br/sperocoin" target="_blank">Catálogo P2P</a></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> 28/03/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Add RPC Command "GETWALLETINFO":<br>
              → Update of transaction maturity icons<br>
              → splash screen main update<br>
              → Updating the logo inside the Wallet<br>
              → Added hashGenesisBlockTestNet in main.h file<br>
              → Added testnet block.nNonce in main.cpp file<br>
              → Added static MapCheckpoints in the checkpoints.cpp file<br>
              → Change the initial letter of the testnet addresses in the base58.h<br>
              → Change the example initial letter in the file qt/sendcoinsdialog.cpp<br>
              → Changed version to 2.6.4.3</p>
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
            → Added RPC command "getnetworkinfo" - Change in files: bitcoinrpc.cpp; bitcoinrpc.h; rpcblockchain.cpp; rpcnet.cpp<br>
            → Added RPC command "getblockchaininfo" - Change in files: bitcoinrpc.cpp; bitcoinrpc.h; rpcblockchain.cpp; rpcnet.cpp<br>
            → Added Wallet Status Information (Locked or Unlocked) in the RPC command "getinfo"<br>
            → Added new points in the network map updating the mapping up to block 130000- Change in file: checkpoints.cpp<br>
            → Changing copyrights, updating the start date of SperoCoin works, being: "Copyright © 2017 The SperoCoin developers" - Change in ".ts" files in the "src \ qt \ locale" folder<br>
            → Update of QT splashscreen images<br>
            → Changing QT fonts for "Century Gothic"<br>
            → Clear Orphans with automatic transaction page refresh, no need to restart wallet<br>
            → Changed version to 2.6.4.4
          </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-database"></i> 25/08/2018</h4>
        </div>
        <div class="timeline-body">
          <p>→ Add in exchange Altilly in pairs SPERO/BTC, SPERO/ETH and SPERO/DOGE: <a href="https://www.altilly.com/market">ALTILLY</a></p>
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
            → Added new points in the network map updating the mapping up to block 165962<br>
            → Performance Enhancements - Increased Speed ​​in Synchronization<br>
            → Added new icons<br>
            → Change style of block download progress bar from "QWindowsXPStyle" to "QWindowsVistaStyle"<br>
            → Changing the size of the icons in "STATUSBAR_ICONSIZE" from 16 to 64<br>
            → Adding SperoCoin.conf file opening from the Console Window menu<br>
            → Changed description of mining type PoW<br>
            → Changed description of mining type PoS<br>
            → New PoS Mining Icon<br>
            → Changed version to 2.6.4.5
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
            Subtitle:<br>
        <i class="fa fa-star"></i> - Task Executed<br>
        <i class="fa fa-star-half-o"></i> - Task In Progress<br>
        <i class="fa fa-star-o"></i> - Task Proposal<br></center></p>
        </header>
  <ul class="timeline">
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-cogs"></i> Multiplatform Development</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star"></i> Official Android Application Launch </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-shopping-basket"></i> Usability</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star"></i> Official Cloud Mining Website<br>
            <i class="fa fa-star-o"></i> Release of cellular recharging system at the official exchange office<br>
            <i class="fa fa-star-o"></i> Payment of Bank Tickets at the Official Exchange Office
        </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-handshake-o"></i> Exchanges and P2P Services - Third Party Services</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star"></i> Register seller profile on the brazilian site P2Brasil<br>
            <i class="fa fa-star"></i> Currency register on the Brazilian site Catálogo P2P<br>
            <i class="fa fa-star"></i> Register seller profile on the brazilian site Catálogo P2P<br>
            <i class="fa fa-star-o"></i> Larger Currency Entry
            </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-handshake-o"></i> Exchanges and Services P2P - Official Services Spero</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star-o"></i> Release of withdrawals in Reais (BRL) at the official exchange office<br>
            <i class="fa fa-star"></i> Trade SPERO ←→ DOGE at the official exchange office<br>
            <i class="fa fa-star"></i> Trade de SPERO ←→ MERCADOPAGO at the official exchange office<br>
            </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-heart"></i> Social Services</h4>
        </div>
        <div class="timeline-body">
          <p>
            <i class="fa fa-star-o"></i> Participation in social projects within the community of the city of Belo Horizonte<br>
            <i class="fa fa-star-o"></i> Creation of the Social Market<br>
            <i class="fa fa-star-o"></i> Creation of the Spero Social Bank
          </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-group"></i> Community</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-sign-in"></i> Internal Marketing</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-sign-out"></i> External Marketing</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i></p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title"><i class="fa fa-code"></i> Changes in Core</h4>
        </div>
        <div class="timeline-body">
          <p><i class="fa fa-star-o"></i> </p>
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
          <h3>Real Time Information</h3>
        </header>

        <div class="row counters">

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo $api_blockcount; ?></span>
            <p>Blocks</p>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo "263251"-$api_blockcount; ?></span>
            <p>Remaining Blocks to Start Hybrid Mining</p>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo $api_getdifficulty2; ?></span>
            <p>PoS Difficulty</p>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-toggle="counter-up"><?echo number_format($api_getmoneysupply, 2, '.', ','); ?></span>
            <p>Money Supply</p>
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
          <h3 class="section-title">Where we are?</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-exchange">Exchanges</li>
              <li data-filter=".filter-pool">Pool</li>
              <li data-filter=".filter-topics">General Subjects</li>
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
                <h4><a href="http://sperocloudmining.tk/" target="_blank">SperoCoin Cloud Mining</a></h4>
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
          <h3>Our partners</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <!-- ALTILLY --><img src="img/clients/client-1.png" alt="">
          <!-- CATALOGO P2P --><img src="img/clients/client-2.png" alt="">
          <!-- STAKING WORLD --><img src="img/clients/client-3.png" alt="">
          <!-- CRYPTOSTAKE --><img src="img/clients/client-4.png" alt="">
          <!-- HOPE ASSISTENCIA --><img src="img/clients/client-5.png" alt="">
          <!-- MDINVEST --><img src="img/clients/client-6.png" alt="">
          <!-- FANATICOS CRIPTOSFM --><img src="img/clients/client-7.png" alt="">
          <!-- IDEALCASH --><img src="img/clients/client-8.png" alt="">
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
          <h3>SperoCoin Team</h3>
          <p>Meet the members of the SperoCoin Foundation and its functions within the project</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Francis Santana</h4>
                  <span>Developer/CEO</span>
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
                  <span>Public Relations and Consultancy</span>
                  <div class="social">
                    <a href="https://twitter.com/akino600"><i class="fa fa-twitter"></i></a>
                    <a href="https://facebook.com/akino6000"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/douglas-akino-b2b33b160"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Viviane Vieira</h4>
                  <span>Social Networks and Promotions</span>
                  <div class="social">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Leonardo Pereira</h4>
                  <span>Project Development</span>
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
          <h3>Contact Us</h3>
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
          <h3>Social</h3>
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
          <p>Download here the files needed to start at Spero.</p>
        </header>
      <div class="row">
        <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin_Android/releases/download/SperoCoin-v.2.6.4.6-BETA/SperoCoin-v.2.6.4.6-BETA.apk" target="_blank"><h3><i class="fa fa-android"></i> Apk Android - Version Full Node(v.2.6.4.6-BETA)</h3>
              <p>Wallet Android. With this wallet, you can conduct PoS mining directly from your device.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://sperocoin.org/files/SperoCoin-Version-LITE.apk" target="_blank"><h3><i class="fa fa-android"></i> Apk Android - Version Lite</h3>
              <p>Wallet Android WebBased. Connected directly to our WebWallet, so you have the convenience of accessing your account in the palm of your hand.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.6/SperoCoin-v.2.6.4.6.exe" target="_blank"><h3><i class="fa fa-windows"></i> Windows QT - V.2.6.4.6 - 08/12/2018</h3>
              <p>Wallet with graphic design. Model for those who seek comfort and convenience to check their balance, send and receive coins in a practical and fast.</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/SperoCoin-v.2.6.4.6/SperoCoind-v.2.6.4.6.exe" target="_blank"><h3><i class="fa fa-windows"></i> Daemon Windows - V.2.6.4.6 - 08/12/2018</h3>
              <p>Wallet without graphic design. Model for those who seek practicality and less consumption of resources.</p></a>
            </div>
          </div>
          <!--<div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases/download/v.2.6.4.5/SperoCoin-v.2.6.4.5.-.Raspberry.5" target="_blank"><h3><i><img src="img/portfolio/raspberry.png" width="40px"/></i> Raspberry PI 3</h3>
              <p>Wallet with graphic design. Model for those who seek comfort and convenience to check their balance, send and receive coins in a practical and fast.</p></a>
            </div>
          </div>-->
            <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="#" data-toggle="modal" data-target="#linuxcomp"><h3><i class="fa fa-terminal"></i> Compilation Linux Wallet</h3>
              <p>Compile Yourself Spero Code</p></a>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1">
            </div>
            <div class="service-list-col2">
              <a href="https://github.com/DigitalCoin1/SperoCoin/releases" target="_blank"><h3><i class="fa fa-cubes"></i> BlockChain</h3>
              <p>Download the complete blockchain at a later date for better speed in the synchronization.</p></a>
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
          <h4 class="modal-title">Compilation Linux Wallet</h4>
        </div>
        <div class="modal-body">
          <p><b><i class="ion-code"></i> Download and install the dependencies:</b><br>
              sudo apt-get install build-essential libboost-all-dev libcurl4-openssl-dev libdb5.3-dev libdb5.3++-dev qt-sdk libminiupnpc-dev qrencode libqrencode-dev git libtool automake autotools-dev autoconf pkg-config libssl-dev libgmp3-dev libevent-dev bsdmainutils<br><br>
      <b><i class="fa fa-code"></i> Clone the github source code for the local machine:</b><br>
              git clone https://github.com/DigitalCoin1/SperoCoin
      <br><br>
      <b><i class="fa fa-code"></i> Compile the daemon in the SperoCoin/src directory:</b><br>
              cd SperoCoin/src<br><br>
              make -f makefile.unix USE_UPNP=- USE_IPV6=1
      <br><br>
      <b><i class="fa fa-code"></i> Run daemon in the SperoCoin/src directory:</b><br>
              ./SperoCoind
      <br><br>
      <b><i class="fa fa-code"></i> [OPTIONAL]Compile the QT in the SperoCoin directory:</b><br>
              sudo apt-get install libqt5gui5 libqt5core5a libqt5dbus5 qttools5-dev qttools5-dev-tools libprotobuf-dev protobuf-compiler libqrencode-dev<br><br>
              qmake SperoCoin-qt.pro "USE_UPNP=-" "USE_QRCODE=1"<br><br>
              make -f Makefile</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
