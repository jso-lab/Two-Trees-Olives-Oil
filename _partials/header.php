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

    <!-- Bootstrap core CSS -->
    <link href="./assets/styles/app.css" rel="stylesheet"> 

    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<body>

<header>
    <div class="collapse bg-info" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Menu</h4>
                    <ul class="list-unstyled">
                        <li><a href="index.php/panier" class="text-white">Panier</a></li>
                        <li><a href="index.php/register" class="text-white">Créer un compte</a></li>
                        <li><a href="index.php/login" class="text-white">Connexion</a></li>
                        <li><a href="index.php/logout" class="text-white">Déconnexion</a></li>
                        <li><a href="index.php/admin/index" class="text-white">Admin</a></li>
                    </ul>
                </div>
                 <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Catégories</h4>
                <ul class="list-unstyled">
                    <?php foreach ($header_categories as $hc) { ?>
                        <li><a href="index.php/products?id=<?= $hc['id']; ?>" class="text-white"><?= $hc['name']; ?></a></li>
                    <?php } ?>
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