<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!-- CSS CUSTOM -->
<style>
body {margin:0;}

.menu {
  overflow: hidden;
  position: fixed;
  top: 2;
  width: 10%;
}
.form-group {
    margin: 0 0 20px 0; //cima direita baixo esquerda <-- ordem dos números
}
.icon-small
{
    height:16px;
    margin:0;
    padding:0;
}

.icon-medium
{
    height:18px;
    margin:0;
    padding:0;
}


.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  .menu{
    width: 100%;
  }
}
</style>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- MENU LANGUAGE -->
<script type="text/javascript">
$(document).ready(function(){
        var engImgLink = "http://www.roemheld.de/IT/Data/Images/Address/Grossbritanien.gif";
        var portImgLink = "http://www.roemheld.de/IT/Data/Images/Address/Portugal.gif";
        var deuImgLink = "http://www.roemheld.de/IT/Data/Images/Address/Deutschland.gif";
        var chiImgLink = "http://www.roemheld.de/IT/Data/Images/Address/China.gif";

        var imgBtnEng = $('#imgBtnEng');
        var imgBtnSel = $('#imgBtnSel');
        var imgBtnPort = $('#imgBtnPort');
        var imgBtnDeu = $('#imgBtnDeu');
        var imgBtnChi = $('#imgBtnChi');

        var imgNavEng = $('#imgNavEng');
        var imgNavSel = $('#imgNavSel');
        var imgNavPort = $('#imgNavPort');
        var imgNavDeu = $('#imgNavDeu');
        var imgNavChi = $('#imgNavChi');

        var spanNavSel = $('#lanNavSel');
        var spanBtnSel = $('#lanBtnSel');

        imgBtnEng.attr("src",engImgLink);
        imgBtnSel.attr("src",engImgLink);
        imgBtnPort.attr("src",portImgLink);
        imgBtnDeu.attr("src",deuImgLink);
        imgBtnChi.attr("src",chiImgLink);

        imgNavEng.attr("src",engImgLink);
        imgNavSel.attr("src",engImgLink);
        imgNavPort.attr("src",portImgLink);
        imgNavDeu.attr("src",deuImgLink);
        imgNavChi.attr("src",chiImgLink);

        $( ".language" ).on( "click", function( event ) {
            var currentId = $(this).attr('id');

            if(currentId == "navEng") {
                imgNavSel.attr("src",engImgLink);
                spanNavSel.text("ENG");
            } else if (currentId == "navDeu") {
                imgNavSel.attr("src",deuImgLink);
                spanNavSel.text("DEU");
            } else if (currentId == "navChi") {
                imgNavSel.attr("src",chiImgLink);
                spanNavSel.text("中國");
            } else if (currentId == "navPort") {
                imgNavSel.attr("src",portImgLink);
                spanNavSel.text("PORT");
            }

            if(currentId == "btnEng") {
                imgBtnSel.attr("src",engImgLink);
                spanBtnSel.text("ENG");
            } else if (currentId == "btnDeu") {
                imgBtnSel.attr("src",deuImgLink);
                spanBtnSel.text("DEU");
            } else if (currentId == "btnChi") {
                imgBtnSel.attr("src",chiImgLink);
                spanBtnSel.text("中國");
            }else if (currentId == "btnPort") {
                imgBtnSel.attr("src",portImgLink);
                spanBtnSel.text("PORT");
            }

        });
});
</script>

<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: "Distribution of pre-mined coins:"
    },
    data: [{
        type: "pie",
        startAngle: 240,
        yValueFormatString: "##0.00\"%\"",
        indexLabel: "{label} {y}",
        dataPoints: [
            {y: 21.2, label: "Balance available"},
            {y: 10, label: "Balance Used for Listing in Exchanges"},
            {y: 16.8, label: "User Distribution (Airdrop)"},
            {y: 2, label: "Wallet Android"},
            {y: 2, label: "Wallet IOS"},
            {y: 2, label: "Wallet MAC"},
            {y: 1, label: "Translations of Topics"},
            {y: 15, label: "Study group"},
            {y: 30, label: "Sales"}
        ]
    }]
});
chart.render();

}
</script>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div id="navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img id="imgNavSel" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavSel">ENG</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                    	<li><a id="navEng" href="#" class="language"><img id="imgNavEng" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavEng">English</span></a></li>
                        <li><a id="navDeu" href="#" class="language"> <img id="imgNavDeu" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavDeu">Deutsch</span></a></li>
        			    <li><a id="navChi" href="#" class="language"><img id="imgNavChi" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavChi">中國</span></a></li>
        			    <li><a id="navPort" href="#" class="language"><img id="imgNavPort" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanNavPort">Português</span></a></li>
        	        </ul>
                </li>
            </ul>
        </div> <!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="btn-group float-right" style="padding-right:2%">
            <button type="button" class="btn btn-default btn-lg">
        	<img id="imgBtnSel" src="" alt="..." class="img-thumbnail icon-medium">  
        	<span id="lanBtnSel">ENG</span></button>
        	  <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        	    <span class="caret"></span>
        	  </button>
        	  <ul class="dropdown-menu" role="menu">
        	  	<li><a id="btnEng" href="index.php" class="language"><img id="imgBtnEng" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanBtnEng">English</span></a></li>
        	    <li><a id="btnDeu" href="index_deu.php" class="language"> <img id="imgBtnDeu" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanBtnDeu">Deutsch</span></a></li>
        	    <li><a id="btnChi" href="index_chi.php" class="language"><img id="imgBtnChi" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanBtnChi">中國</span></a></li>
        	    <li><a id="btnPort" href="index_pt.php" class="language"><img id="imgBtnPort" src="" alt="..." class="img-thumbnail icon-small">  <span id="lanBtnPort">Português</span></a></li>
        	  </ul>
        </div>
        </p>
            <title>Spero White Paper</title>
</head>
