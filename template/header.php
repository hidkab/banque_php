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

<header>
  <div class="card text-center">
    <div class="card-body">
      <h1 class="card-title">Responsable Banque</h1>
      <p class="card-text">Notre responsabilité est de vous acompagner avec confiance dans vos projets</p>
    </div>

    <?php if(isset($_SESSION["customer"])): ?>
        <a class="btn btn-dark w-25 mx-2 mb-2 text-danger " href="logout.php">Déconnexion</a>
    <?php endif; ?>

  </div>
</header>
  <main class="container my-5">