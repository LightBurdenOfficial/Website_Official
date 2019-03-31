<?
include_once "coin_listing.php";
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<!-- Include the above in your HEAD tag -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?
include_once ("address.php");
?>
<div class="container" style="padding-top: 1%">
    <div class="well well-sm" style="padding-top: 3%">
        <center><strong><h3>Listing System - Spero Exchange</h3></strong><br>
        To list your currency in our exchange simply deposit at the address indicated below the description of your currency the total amount of <strong>1500 SPERO(500 SPERO for Brazilian currencies)</strong>.
After full payment of the listing amount, the currency will be available for exchanges within 72 hours.<br>
Thank you all for participating in our listing!<br><br>
<strong>To purchase SPERO, access one of the exchange:<br>
<a href="https://altilly.com/" target="_blank"> ALTILLY</a><br>
<a href="https://www.probitex.com/trade/index/market/spero_btc.html" target="_blank"> PROBITEX</a><br>
<a href="https://nanu.exchange/" target="_blank"> NANU EXCHANGE</a>
</strong></center>
    </div>
    <div id="products" class="row list-group">
<!-- COIN 1 -->
        <div class="item list-group-item col-xs-12 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="https://http2.mlstatic.com/100-moedas-ripped-coin-paccoin-bitcoin-dogecoin-D_NQ_NP_618918-MLB27589321648_062018-F.jpg" alt="" width="150px" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <? echo $name_coin1; ?></h4>
                    <p class="group inner list-group-item-text">
                        What is <? echo $name_coin1; ?>?<br>
                        <? echo $text_coin1; ?> <br><br>
                        <strong>Algorithm:</strong> <? echo $algo_coin1; ?><br>
                        <strong>Total Coins:</strong> <? echo $total_coin1; ?><br>
                        <strong>Website:</strong> <a href="<? echo $website_coin1; ?>" target="_blank"><? echo $website_coin1; ?></a><br>
                        <strong>BTCTalk Topic:</strong> <a href="<? echo $btctalk_coin1; ?>" target="_blank"><? echo $btctalk_coin1; ?></a><br>
                    </p>
<div class="row">
<div class="col-xs-12 col-md-12">
<p></p></div>
</div>

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <p class="lead">
                                Address: <a href="http://52.67.138.144:3001/address/<?echo $address1;?>" target="_blank" style="font-size: 0.7em"><? echo $address1;?></a> <br>
                                Collected: <? echo number_format($decode_address1, 9, ',', '.');?> SPERO<br>
                                Remaining: <? if($decode_address1 >= $arrecadacao_total ){
                                                echo "<font style='color: green;''>".number_format($remaining1, 9, ',', '.')."SPERO</font>"; }
                                                else{
                                                echo "<font style='color: red;''>".number_format($remaining1, 9, ',', '.')."SPERO</font>"; }
                                            ?><br>
                                </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <center><span><? echo $percentual1."%";?></span></center>
                            <div class="progress">
                              <center><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentual1;?>%">
                            </center>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- COIN 2 -->
        <div class="item list-group-item col-xs-12 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="https://assets.coingecko.com/coins/images/5547/large/Calura.png?1545704278" alt="" width="150px" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <? echo $name_coin2; ?></h4>
                    <p class="group inner list-group-item-text">
                        What is <? echo $name_coin2; ?>?<br>
                        <? echo $text_coin2; ?> <br><br>
                        <strong>Algorithm:</strong> <? echo $algo_coin2; ?><br>
                        <strong>Total Coins:</strong> <? echo $total_coin2; ?><br>
                        <strong>Website:</strong> <a href="<? echo $website_coin2; ?>" target="_blank"><? echo $website_coin2; ?></a><br>
                        <strong>BTCTalk Topic:</strong> <a href="<? echo $btctalk_coin2; ?>" target="_blank"><? echo $btctalk_coin2; ?></a><br>
                    </p>
<div class="row">
<div class="col-xs-12 col-md-12">
<p></p></div>
</div>

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <p class="lead">
                                Address: <a href="http://52.67.138.144:3001/address/<?echo $address2;?>" target="_blank" style="font-size: 0.7em"><? echo $address2;?></a> <br>
                                Collected: <? echo number_format($decode_address2, 9, ',', '.');?> SPERO<br>
                                Remaining: <? if($decode_address2 >= $arrecadacao_total ){
                                                echo "<font style='color: green;''>".number_format($remaining2, 9, ',', '.')."SPERO</font>"; }
                                                else{
                                                echo "<font style='color: red;''>".number_format($remaining2, 9, ',', '.')."SPERO</font>"; }
                                            ?><br>
                                </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <center><span><? echo $percentual2."%";?></span></center>
                            <div class="progress">
                              <center><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentual2;?>%">
                            </center>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- COIN 2 -->
    </div>
</div>
