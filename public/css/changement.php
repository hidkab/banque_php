<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <title>Responsable Banque</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Actualités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Statistiques</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Opérations
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Créer un compte</a></li>
              <li><a class="dropdown-item" href="#">Dépôt et Rettait</a></li>
              <li><a class="dropdown-item" href="#">Virement</a></li>
              <li><a class="dropdown-item" href="#">Clôturer un compte</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="card text-center">
    <div class="card-body">
      <h1 class="card-title">Responsable Banque</h1>
      <p class="card-text">Notre responsabilité est de vous acompagner avec confiance dans vos projets</p>
    </div>
  </div>

  <main class="container my-5">
    <h2>contenu du main</h2>
  </main>

  <footer class="bg-dark text-white text-center py-5">
    <div class="container">
      <p>Mentions légales</p>
    </div>
  </footer>

    <!-- Add your site or application content here -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/layer.js"></script>
  <script src="js/news.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>

<?php include('template/head.php'); ?>
<?php include('template/nav.php'); ?>
<?php include('template/header.php'); ?>

<main class="container text-center py-5">

    <h2>Vos comptes bancaires</h2>
    <div class="row mt-5">
    <?php include('createAccounts.php'); ?>
       
</main>


<?php include('template/footer.php'); ?>

