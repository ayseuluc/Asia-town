<!DOCTYPE html>
<html>
<head>
  <title>H&K Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="style.css">

  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

a {
    color: #BF0101;
    text-decoration: none;
}
  
/*NavBar*/


.navbar-inverse .navbar-nav>li>a {
    color: #DDDDDD;
    font-size: 14pt;
    font-family: 'Merriweather', serif;
    margin-top: 45px;
    margin-left: 100px;
  }

.navbar-inverse {
  background-color: #fff;
  border-color: #fff;
  }

.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
  color: #0A2068;
  background-color: #BF0101;
  }

.navbar-inverse .navbar-nav>li>a:hover {
  color: #0A2068;
  }

.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-top: 40px;
  margin-right: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px; 
  }


.navbar-inverse .navbar-toggle {
  border-color: orange;
  }

.navbar-inverse .navbar-toggle {
  border-color: #0A2068;
  }

.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #BF0101;

  }

.navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
  background-color: #fff;
  }




.imageGrid .tile {
  width:33.33%;
  min-height:20em;
  line-height: 1.2;
  display:inline-block;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  overflow: hidden;
  position: relative;
  cursor: pointer; 
  cursor: hand;
  }


</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">   <!-- scrollspy-->
<section id="section1"> <!-- Section1-->
  <nav class="navbar navbar-inverse navbar-fixed-top"><!-- begin of navbar-->
    <img class="navbar-brand" id="png" src="img/newLogo.png" alt=""><!-- Logo-->
      <div class="navbar-header"> <!-- toggle-->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="#section1">Home</a></li>
            <li><a href="#section2">Sortiment</a></li>
            <li><a href="#section3">Kontakt</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</section>  
<section id="section1">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/banner_3.jpg" alt=" " style="width:100%;">
      </div>

      <div class="item">
        <img src="img/banner_ohne.jpg" alt=" " style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/banner_shop.jpg" alt=" " style="width:100%;">
      </div>

      <div class="item">
        <img src="img/banner_shop2.jpg" alt=" " style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<hr>
<section id="section2"> <!-- Section2-->
  <div id="sortiment" class="text-center">
    <p>Sortiment - Simply Everything<p> <!-- Headline-->
      <hr>
        <div class="imageGrid"><!-- ImageGrid1-->


            <a href="allerlei.php">
          <div class="tile" style="background-image: url('data:image/jpeg;base64,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');">
            <div class="textWrapper"><h2>Allerlei</h2>
              <div class="content">In unsere Filiale finden Sie alles was Sie brauchen</div>
            </div></a>
          </div>

        <!-- ImageGrid2-->
        <a href="kleidung.php">
        <div class="tile" style="background-image: url('https://images.unsplash.com/photo-1494578379344-d6c710782a3d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e784168841515c0083d52d85ab530408&auto=format&fit=crop&w=500&q=60');">
          <div class="textWrapper"><h2>Kleidung</h2>
            <div class="content">Wie bieten Kleidung für jederman.</div>
          </div></a>
        </div>
        <!-- ImageGrid3-->
        <a href="taschen.php">
        <div class="tile" style="background-image: url('https://images.unsplash.com/photo-1519415943484-9fa1873496d4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ca427af489b42f69370a86b910c5168f&auto=format&fit=crop&w=500&q=60');">
          <div class="textWrapper"><h2>Taschen&Schuhe</h2>
            <div class="content">Unsere Taschen und Schuhe geben Ihren Outfit den letzten Kick </div>
          </div></a>
        </div>
        <!-- ImageGrid4-->
        <a href="haushalt.php">
        <div class="tile" style="background-image: url('https://images.unsplash.com/photo-1519916954135-f7d2f2e33cb8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6a0164c1d42d4e425233258305e726a4&auto=format&fit=crop&w=500&q=60');">
          <div class="textWrapper"><h2>Haushalt</h2>
            <div class="content">Alles was Sie im Haushalt benötigen fiden sie bei uns</div>
          </div></a>
        </div>
        <!-- ImageGrid5-->
        <a href="deko.php">
        <div class="tile" style="background-image: url('https://images.unsplash.com/photo-1417037129170-06a2750eaa47?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6b83b28c50e4c5c51982fd06046cb0d8&auto=format&fit=crop&w=500&q=60');">
          <div class="textWrapper"><h2>Deko</h2>
            <div class="content">Große Auswahl an Dekoartikeln und Wohnaccessoires</div>
          </div></a>
        </div>
        <!-- ImageGrid6-->
        <a href="drogerie.php">
        <div class="tile" style="background-image: url('https://images.unsplash.com/photo-1498843053639-170ff2122f35?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=47ddd34d0c9b2c135f032ff970dc6aea&auto=format&fit=crop&w=500&q=60');">
          <div class="textWrapper"><h2>Drogerie & Kosmetik</h2>
            <div class="content">Wir achten auf Sie</div>
          </div></a>
        </div>
        <!-- ImageGrid7-->
        <!-- <a href="diskont.php">
        <div class="tile" style="background-image: url('https://images.unsplash.com/photo-1521404567986-a2c39cde0c31?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=61f97ebaf62873b70a31e991c1fa6264&auto=format&fit=crop&w=500&q=60');">
          <div class="textWrapper"><h2>Diskont</h2>
            <div class="content">Profitieren Sie von unseren täglichen Aktionen</div>
          </div></a>
        </div> -->
  </div>
</section>
<hr>

<section id="section3">
  <div id="contact" class="text-center">
    <p>Kontakt</p>
        <hr>
    </div>
      <div id="map" class="col-xs-8 col-md-6 col-md-offset-0"></div> <!--google maps-->
        <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Simmeringer%20Hauptstra%C3%9Fe%2087%2C%20Wien%2C%20%C3%96sterreich&key=AIzaSyAnWEdgT_NyNTrsVCItUghUdjCpbcubX3k" allowfullscreen></iframe>        <div align="center">
          <span class="glyphicon glyphicon-home"></span><p style="font-weight:700; color: #0A2068; ">Asiatown internet und online Dienste GmbH</p>
          <span class="glyphicon glyphicon-map-marker"></span><p>Simmeringer Hauptstraße 87, 1110 Wien</p>  
           <span class=" glyphicon glyphicon-earphone"></span><p>+43 699 198 402 0</p>  
    </div>
</section>
          
<footer>
    
    <p> Ayse Uluc, Ying, Conny&copy; </p>
  </footer>
</div>

<script src="script.js" type="text/javascript" charset="utf-8" ></script>
</body>
</html>
