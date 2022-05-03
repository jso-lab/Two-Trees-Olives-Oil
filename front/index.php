<section class="jumbotron py-5 text-center">
    <div class="container py-5">
        <h1 class="jumbotron-heading">Porro quisquam.</h1>
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
