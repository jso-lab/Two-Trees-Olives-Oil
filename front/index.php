
    <div class="diapo">
        <div class="elements">
            <div class="element active">
                <img src="/assets/img/cocktail_olives.jpg" alt="cocktail_olives">
                <div class="caption">
                    <h2>Un cocktail savoureux</h2>
                    <p>Sit amet consectetur adipisicing elit. 
                         Labore maiores perferendis.</p>
                </div>
            </div>
            <div class="element">
                <img src="/assets/img/deco_olives.jpg" alt="deco_olives">
                <div class="caption">
                    <h2>Ambiance de douceur</h2>
                    <p>Sit amet consectetur adipisicing elit. 
                         Labore maiores perferendis.</p>
                </div>
            </div>
            <div class="element">
                <img src="/assets/img/gros-plan_olives.jpg" alt="gros-plan_olives">
                <div class="caption">
                    <h2>Agréable au regard</h2>
                    <p>Sit amet consectetur adipisicing elit. 
                         Labore maiores perferendis.</p>
                </div>
            </div>
            <div class="element">
                <img src="/assets/img/bocal_olive.jpg" alt="bocal_olives">
                <div class="caption">
                    <h2>Splendeur de délices</h2>
                    <p>Sit amet consectetur adipisicing elit. 
                         Labore maiores perferendis.</p>
                </div>
            </div>
        </div>
        <i class="las la-chevron-left"id="nav-gauche" ></i>
        <i class="las la-chevron-right"  id="nav-droite"></i>
    </div>

<section class="jumbotron py-5 text-center">
    <div class="container py-5">
        <h1 class="jumbotron-heading">Une huile de prestige</h1>
        <p class="lead text-muted">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim 
            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
        </p>
        <p>
            <a href="#" class="btn btn-lg btn-primary mx-3 my-4">Les promotions</a>
            <a href="#" class="btn btn-lg btn-secondary my-4">Le magasin</a>
        </p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">

            <?php foreach ($products as $p) { ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="./uploads/<?= $p['filename']; ?>" alt="photo de produit">
                        <div class="card-body">
                            <p class="card-text"><?= $p['name']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/index.php/product?id=<?= $p['id']; ?>" class="btn btn-sm btn-outline-secondary">Voir</a>
                                </div>
                                <small class="text-muted"><?= $p['price']; ?>€</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
