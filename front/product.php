<div class="album py-5 bg-light">
    <div class="container py-5">

        <div class="row">

            <div class="col-lg-4 pb-4">
                <img class="card-img-top" src="./uploads/<?= $product['filename']; ?>" alt="">
            </div>

            <div class="col-lg-8 text-white">
                <h1><?= $product['name']; ?> <a href="/index.php/panier/add?id=<?= $product['id']; ?>" class="btn btn-primary m-3 text-white">Ajouter au panier</a></h1>

                <h2>
                    Prix : <?= $product['price']; ?>€
                </h2>
                <p class="py-3">
                    <?= $product['description']; ?>
                </p>
            </div>
        </div>
       
</div>
</div>
