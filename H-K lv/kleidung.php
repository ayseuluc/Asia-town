<?php
  require_once 'kleidung/actions/db_connect.php';
  $sql= "SELECT * FROM Kleidung Order by kId DESC";
  $result = mysqli_query($connect, $sql);
?>

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
            <li><a href="index.php">Home</a></li>
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

  <div id="sortiment" class="text-center">
    <p>Kleidung<p> <!-- Headline-->
      <hr>
  </div>
<div class="container">
    <div class="row">
      <?php 
        while ($row = mysqli_fetch_assoc($result)) {
          echo 
            "
            <div class='kard'>
              
                <div class='plac_img'>
                  <img src='".$row["Foto"]."' class='images'>
                </div>
                <div>
                  <h4 class='name'>".$row["hName"]."</h4>
                  <p>".$row["beschreibung"]."</p>";
                  if($row["alterPreis"]>0){
                    echo "<p>Preis: " .$row["alterPreis"]. " €</p>
                    
                  <p class='discount'>discount Preis: " .$row["neuerPreis"]. " €</p>
                </div>
              </div>
            </div>";
                  }else{
                    echo "<p>".$row["neuerPreis"]."</p>
                </div>
              </div>
            </div>";
                  };
                  
        };
      ?>
      
    </div>
  </div>

<hr>
  




            
<footer>

<p id="copyright"></p>
  </footer>
</div>
<script src="script.js" type="text/javascript" charset="utf-8" ></script>
</body>
</html>

</body>
</html>
