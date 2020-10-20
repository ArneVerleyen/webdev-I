<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/Webdev1ek2_ArneVerleyen/public/css/main.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
        <a class="nav-link" href="/Webdev1ek2_ArneVerleyen/public/optreden/index">Optredens</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Booking <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
  </div>
</nav>
</header>

<div class="content container">
<div class="row content-boek">
        <div class="col-md-5 col-sm-12">
            <h3>Boek ons</h3>
            <form class="content-form" action="createBook" method="GET">
                <p>Voornaam</p>
                <input class="content-input" name="voornaam" type="text" placeholder="voornaam">
                <p>Achternaam</p>
                <input class="content-input" name="achternaam" type="text" placeholder="achternaam">
                <p>Adres</p>
                <input class="content-input" name="adres" type="text" placeholder="Papegaaistraat 2345, 9000 Gent">
                <p>E-mail adres</p>
                <input class="content-input" name="email" type="email" placeholder="tablejourney@mail.com">
                <p>Date</p>
                <input name="datum" type="date">
                <button class="btn btn-secondary" name="book" type="submit">Bevestig</button>
            </form>
        </div>
        <div class="col-md-5 col-sm-12 align-self-center"> 
            <img class="content-img-logo" src="/Webdev1ek2_ArneVerleyen/public/images/logo.png" alt="Logo">
        </div>
    </div>
</div>

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