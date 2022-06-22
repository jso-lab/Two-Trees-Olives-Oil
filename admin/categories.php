<div class="album py-5 bg-light">
    <div class="container">

        <div class="row py-5">
            <div class="col-lg-12">
                <h1>Catégories</h1>
              
                <table class="table">
                    <caption>Liste des categories</caption>
                    <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Désignation</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $c) { ?>
                        <tr>
                            <th scope="row"><?= $c['id'] ?></th>
                            <td><?= $c['name'] ?></td>
                            <td>
                                <a href="/index.php/admin/category/del?id=<?= $c['id'] ?>" class="btn btn-danger text-white">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm">
                <a class="btn btn-primary text-white" href="/index.php/admin/category/add">Ajouter</a>
                <a class="btn btn-primary text-white" href="/index.php/admin/categories/import">Importer</a>
            </div>
        </div>
    </div>
</div>
