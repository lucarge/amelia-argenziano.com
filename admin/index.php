<?php
  $absolute_path = dirname(dirname(__FILE__));
  $file_name = 'opening_hours.txt';
  $alert = false;

  if($_POST['opening_hours']) {
    $sanitized_string = filter_var(
      $_POST['opening_hours'],
      FILTER_SANITIZE_STRING
    );
    $result = file_put_contents(
      $absolute_path . '/admin/' . $file_name,
      $sanitized_string
    );
    if($result === false) {
      $alert = 'error';
    } else {
      $alert = 'success';
    }
    $opening_hours = $sanitized_string;
  } else {
    $opening_hours = file_get_contents(
      $absolute_path . '/admin/' . $file_name
    );
    if($opening_hours === false) {
      $opening_hours = '';
    }
  }
?>

<!DOCTYPE html>
<html lang="it">
  <head>

    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Amelia Alba Argenziano - Amministrazione</title>

    <!-- CSS files -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic|Montserrat:400,700' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS file -->
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>

    <section class="section pt20 pb0 mb0 text-center">
      <div class="container">
        <div class="row">
          <h2 class="mb10">Amministrazione</h2>
          <p>Per aggiornare gli orari della scuola in autonomia.</p>
        </div>
      </div>
    </section>

    <?php if($alert !== false): ?>
      <?php if($alert === 'success'): ?>
        <div class="alert alert-success text-center mt50 mb0" role="alert">
          <b>Ottimo!</b> Modifiche salvate correttamente.
        </div>
      <?php elseif($alert === 'error'): ?>
        <div class="alert alert-danger text-center mt50 mb0" role="alert">
          <b>Ooops!</b> Qualcosa è andato storto. Ti spiace riprovare a salvare?
        </div>
      <?php endif; ?>
    <?php endif; ?>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <form
              accept-charset="utf-8"
              action="/admin/index.php"
              method="post">
              <div class="form-group">
                <label for="opening_hours">Orari</label>
                <textarea
                  class="form-control"
                  id="opening_hours"
                  name="opening_hours"
                  placeholder="Inserisci gli orari della scuola..."
                  rows="3"><?php echo $opening_hours; ?></textarea>
              </div>
              <button
                class="btn btn-success"
                type="submit">Salva</button>
            </form>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>
