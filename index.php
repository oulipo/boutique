<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("lib/connexion.php");

function totalPanier() {
  $panier = $_SESSION["panier"] ?? [];
  $total = 0;
  foreach ($panier as $item) {
    $total += $item[3];
  }
  return $total;
}

  $page = $_REQUEST["page"] ?? "accueil";
  $fichier = "";
  switch ($page) {
    case 'accueil':
      $fichier = "accueil.php";
      break;
    case 'faq':
      $fichier = "faq.php";
      break;
    case 'inscription':
      $fichier = "inscription.php";
      break;
    case 'connexion':
      $fichier = "connexion.php";
      break;
    case 'resultats':
      $fichier = "resultats.php";
      break;
    case 'profils':
      $fichier = "profils.php";
      break;
    case 'fiche':
      $fichier = "fiche.php";
      break;
    case 'catalogue':
      $fichier = 'catalogue.php';
      break;
    case 'logout':
      $_SESSION = [];
      session_destroy();
      $fichier = "accueil.php";
      break;
    case 'vider_panier':
      if(isset($_SESSION["panier"])) {
        $_SESSION["panier"] = [];
      }
      $fichier = "accueil.php";
      break;
    case 'ajout_panier':
      // CODE
      $id = $_GET["id"] ?? "";
      $titre = $_GET["titre"] ?? "";
      $type = $_GET["type"] ?? "";
      $prix = $_GET["prix"] ?? "";
      if(!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = [];
        if(!empty($id)) {
          $_SESSION["panier"][] = [$id, $titre, $type, $prix];
        // array_push($_SESSION["panier"], [1, "Test", "Chanson", 0.99]);
        } 
      } else {
        if(!empty($id)) {
          $_SESSION["panier"][] = [$id, $titre, $type, $prix];
        } 
      }
      $fichier = 'catalogue.php';
      break;
    default:
      $fichier = "404.php";
      break;
  }
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Boutique Zic</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/carousel.css">
    <style>
        .erreur {
             border: 1px solid red;
        }
    </style>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Boutique Zic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php?page=accueil">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <?php if(!isset($_SESSION["utilisateur"])): ?>
            <li class="nav-item">
              <a class="nav-link" href="?page=inscription">Inscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=connexion">Se connecter</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
              <a class="nav-link">Bonjour <?= $_SESSION["utilisateur"] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=logout">Se déconnecter</a>
            </li>
            <?php endif ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=catalogue">Catalogue</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0" action="" method="GET">
            <input type="hidden" name="page" value="resultats">
            <input class="form-control mr-sm-2" type="text" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

      <!-- ici, on réalise l'include... -->
      <?php include("pages/$fichier"); ?>
      <pre>
      <?php 
      if(isset($_SESSION["panier"]) && !empty($_SESSION["panier"])) {
        print_r($_SESSION["panier"]);
        echo "TOTAL = " . totalPanier();
      } else {
        echo "Panier vide...";
      }
        ?>
      </pre>
      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
