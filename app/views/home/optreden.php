<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/Webdev1ek2_ArneVerleyen/public/css/main.css">
    <link rel="stylesheet" href="/Webdev1ek2_ArneVerleyen/public/css/optreden.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/Webdev1ek2_ArneVerleyen/public/home/index">Table Journey</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/Webdev1ek2_ArneVerleyen/public/home/index">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Optredens <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Webdev1ek2_ArneVerleyen/public/book/index">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
  </div>
</nav>
</header>

<?php

    foreach ($data as $optreden)
    {
        ?>
            <div class="content container">
                <div class="optreden-container row bg-dark">
                    <div class="optreden-text-container col-12">
                        <h3><?php echo $optreden['title']; ?></h3>
                        <p><?php echo $optreden['text']; ?></p>
                        <!-- Actie = toevoegen bij knop -->
                        <a href="<?php $optreden['id'] ?>" class="center-btn btn btn-secondary">lees meer</a>
                    </div>
                </div>
            </div>   
        <?php
    }
?>

<footer class="flex-row bg-dark">
    <div>

    </div>
    <div>
        <ul>
            <h3 class="footer-item">Contact:</h3>
            <p class="footer-item">mail: arneverl@student.arteveldehs.be</p>
            <p class="footer-item">GSM: 0499999999</p>
            <p class="footer-item">Adres: Papegaaistraat 83728, Gent</p>
        </ul>
    </div>
</footer>
</body>
</html>