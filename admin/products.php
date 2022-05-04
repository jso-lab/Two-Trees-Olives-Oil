<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Produits</h1>
               
                <table class="table">
                    <caption>Liste des produits</caption>
                    <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Désignation</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $p) { ?>
                        <tr>
                            <th scope="row"><?= $p['id'] ?></th>
                            <td><?= $p['name'] ?></td>
                            <td>
                                <a href="/index.php/admin/product/del?id=<?= $p['id'] ?>" class="btn btn-danger text-white">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm">
                <a class="btn btn-primary text-white" href="/index.php/admin/products/add">Ajouter un produit</a>
            </div>
        </div>
    </div>
</div>
