<?php include("quadri.php"); ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="utf-8" >
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Amelia Alba Argenziano - Opere</title>
  <meta name="author" content="Amelia Alba Argenziano">
  <meta name="description" content="Le opere di Amelia Alba Argenziano">
  <meta property="og:image" content="http://www.amelia-argenziano.com/images/profilosocial.jpg">
  <meta property="og:title" content="Amelia Alba Argenziano - Scuola di pittura impArAlArte - Rivoli">
  <meta property="og:description" content="Le opere di Amelia Alba Argenziano">
  <meta property="og:url" content="http://www.amelia-argenziano.com/opere.php">
  <meta name="twitter:image" content="http://www.amelia-argenziano.com/images/profilosocial.jpg">
  <meta name="twitter:title" content="Amelia Alba Argenziano - Scuola di pittura impArAlArte - Rivoli">
  <meta name="twitter:description" content="Le opere di Amelia Alba Argenziano">
  <meta name="twitter:site" content="http://www.amelia-argenziano.com/opere.php">

  <!-- CSS files -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic|Montserrat:400,700' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/elegant_font/html_css/style.css">
  <!-- Main CSS file -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <?php include('navbar.php'); echo $navbar; ?>

  <section class="section-intro bg-img bg01 stellar" data-stellar-background-ratio="0.4">
    <div class="bg-overlay op6"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-8">
          <h1 class="intro-title mb20"><span class="color-main">A</span>melia <span class="color-main">A</span>lba <span class="color-main">A</span>rgenziano</h1>
          <p class="intro-p mb20 animated hinge fadeInRight"><i>"Impara le regole come un professionista, affinché tu possa infrangerle come un artista."</i><br>Pablo Picasso</p>
        </div>
      </div>
    </div>
  </section>

  <div class="portfolio-filter-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="pull-right">
            <nav class="portfolio-filter">
              <ul>
                <li><a href="#" data-filter="*" class="active">Tutte<!--<i class="fa fa-bars"></i>--></a></li>
                <li><a href="#" data-filter=".olioSuTela_">Olio, acrilico, malta su tela</a></li>
                <li><a href="#" data-filter=".disegno_">Copia dal vero</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="portfolio-isotope">
            <div class="row col-p5">
              <div class="portfolio portfolio-animation-off columns-3">
                <?php
                shuffle($products);
                foreach($products as $product_id => $product) {
                  echo get_list_view_html($product_id, $product);
                }
                ?>
              </div> <!-- END portfolio -->
            </div>
          </div> <!-- END Portfolio Isotope -->
          <div class="mb30"></div>
        </div>
      </div>
    </div>
  </section> <!-- END Projects Sections -->
</div> <!-- END Global Wrapper -->

<!-- Javascript files -->
<script src="plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/jquery.appear.js"></script>
<script src="plugins/retina.min.js"></script>
<script src="plugins/stellar.min.js"></script>
<script src="plugins/sticky.min.js"></script>
<script src="plugins/isotope/isotope.pkgd.min.js"></script>
<script src="plugins/isotope/imagesloaded.pkgd.min.js"></script>
<!-- Main javascript file -->
<script src="js/script.js"></script>
</body>
</html>
