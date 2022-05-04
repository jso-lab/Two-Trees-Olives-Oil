<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Two Trees Olives Oil, vente d'huile de qualité d'olive en ligne ">
    <meta name="author" content="Jean Pau SOSSAH">
    <link rel="icon" href="./assets/img/logo/fav.png">

    <title>Two Trees Olive Oils - vente d'huile d'olive de qualité en ligne</title>

    <base href="http://localhost/">

    <!-- stylesheet CSS -->
    <link href="./assets/styles/app.css" rel="stylesheet"> 
  
</head>

<body>

<header>
    <div class="collapse bg-primary" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Espace de gestion</h4>
                    <?php if (isset($_SESSION['logged'])) { echo "<p>" . $_SESSION['email'] . "</p>"; } ?>
                    <ul class="list-unstyled">
                        <li><a href="index.php/admin/products" class="text-white">Produits</a></li>
                        <li><a href="index.php/admin/users" class="text-white">Utilisateurs</a></li>
                        <li><a href="index.php/admin/admins" class="text-white">Administrateurs</a></li>
                        <li><a href="index.php/admin/categories" class="text-white">Catégories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="index.php" class="navbar-brand d-flex align-items-center">
                <img src="/assets/img/logo/fav.png" alt="logo" width="40" height="40">
                <h1 class="pt-2">Two Trees Olive Oils</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">