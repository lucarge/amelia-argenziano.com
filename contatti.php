<?php
  $absolute_path = dirname(__FILE__);
  $opening_hours = file_get_contents(
    $absolute_path . '/admin/opening_hours.txt'
  );
  if($opening_hours === false) {
    $opening_hours = 'Per conoscere gli orari sempre aggiornati, contattami telefonicamente o via email.';
  }
?>

<!DOCTYPE html>
<html lang="en-us">
<head>

  <meta charset="utf-8" >
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Amelia Alba Argenziano - Contatti</title>

  <meta name="author" content="Amelia Alba Argenziano">
  <meta name="description" content="Tutti i modi per contattare Amelia Alba Argenziano e la scuola impArAlArte.">




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

  <!-- Do not remove this class -->
  <div class="push-top mt0"></div>



  <section class="section-intro bg-img bg03 stellar" data-stellar-background-ratio="0.4">
    <div class="bg-overlay op6"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-8">
          <h1 class="intro-title mb20">Contatti</h1>
          <p class="intro-p mb40">Se hai la possibilità, passa a trovarmi in Atelier; parlarsi a quattr'occhi è molto meglio di una mail.</p>
          <ul class="social-icon intro-share">
            <li><a href="https://www.facebook.com/amelia.argenziano?fref=ts" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="section mt30 page-contact mb50">
    <div class="container">
      <div class="row mb70">
        <div class="col-md-5 sm-box2">
          <h3 class="title-small br-bottom">In alternativa...</h3>
          <p>Puoi usare questo form per inviarmi una mail. Trovi anche, di seguito, il mio indirizzo di posta, così da poterlo salvare nel caso volessi scrivermi in un secondo momento. In entrambi i casi, risponderò il prima possibile.</p>
        </div>
        <div class="col-md-7">
          <div class="contact-map-wrapper form">
            <div class="contact-map">
              <form class="form ajax-contact-form" method="post" action="php/contact.php">
                <div class="alert alert-success hidden" id="contact-success">
                  <span class="glyphicon glyphicon-ok "></span> &nbsp;
                  <strong>Inviato!</strong> Grazie per avermi scritto.
                </div>
                <div class="alert alert-danger hidden" id="contact-error">
                  <span class="glyphicon glyphicon-remove "></span> &nbsp;
                  <strong>Errore!</strong> Oops, qualcosa è andato storto.
                </div>
                <div class="row col-p10">
                  <div class="col-sm-6">
                    <label class="mb10"><input type="text" name="val_fname" id="val_fname" class="form-control" placeholder=" Nome"></label>
                  </div>
                  <div class="col-sm-6">
                    <label class="mb10"><input type="text" name="val_lname" id="val_lname" class="form-control" placeholder=" Cognome"></label>
                  </div>
                </div>
                <div class="row col-p10">
                  <div class="col-sm-6">
                    <label class="mb10"><input type="text" name="val_subject" id="val_subject" required class="form-control" placeholder=" Oggetto *"></label>
                  </div>
                  <div class="col-sm-6">
                    <label class="mb10"><input type="email" name="val_email" id="val_email" required class="form-control" placeholder=" Indirizzo email *"></label>
                  </div>
                </div>
                <label>
                  <textarea name="val_message" id="val_message"  cols="30" rows="10" required class="form-control" placeholder=" Messaggio *"></textarea>
                </label>
                <div class="mt20 clearfix">
                  <button type="submit" class="btn btn-d">Invia</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row col-p30">
        <div class="col-sm-8 sm-box3">
          <div class="overlay" onClick="style.pointerEvents='none'"></div>
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2817.810257345423!2d7.5172!3d45.069359999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4788401fa741baf3%3A0x710f3bedad180f97!2sVia+Romb%C3%B2%2C+22%2C+10098+Rivoli+TO!5e0!3m2!1sit!2sit!4v1439742828970" allowfullscreen></iframe>
        </div>
        <div class="col-sm-4">
          <div class="mt10"></div>
          <div class="box-left"><i class="fa fa-map-marker"></i></div>
          <div class="box-right">
            <p>Via Rombò 22/A <br> 10098, Rivoli (TO)</p>
          </div>

          <div class="mb40"></div>
          <div class="box-left"><i class="fa fa-envelope-o"></i></div>
          <div class="box-right">
            <p>Se vuoi scrivermi più tardi, salvati:<br>amelia.argenziano@libero.it</p>
          </div>

          <div class="mb40"></div>
          <div class="box-left"><i class="fa fa-phone"></i></div>
          <div class="box-right">
            <p>011 9564202 <br> 347 9321982</p>
          </div>

          <div class="mb40"></div>
          <div class="box-left"><i class="fa fa-clock-o"></i></div>
          <div class="box-right">
            <p><?php echo $opening_hours; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>


</div> <!-- END Global Wrapper -->




<!-- Javascript files -->
<script src="plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/jquery.appear.js"></script>
<script src="plugins/retina.min.js"></script>
<script src="plugins/stellar.min.js"></script>
<script src="plugins/sticky.min.js"></script>



<script src="plugins/jquery.validate.min.js"></script>

<!-- Google captcha code -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- Main javascript file -->
<script src="js/script.js"></script>





</body>
</html>
