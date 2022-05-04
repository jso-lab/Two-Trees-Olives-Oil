<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Administrateurs</h1>
              
                <table class="table">
                    <caption>Liste des administrateurs</caption>
                    <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Email</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $u) { ?>
                        <tr>
                            <th scope="row"><?= $u['id'] ?></th>
                            <td><?= $u['email'] ?></td>
                            <td>
                                <a class="btn btn-danger text-white" href="/index.php/admin/admin/del?id=<?= $u['id'] ?>">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm ">
                <a href="index.php/admin/user/add" class="btn btn-primary text-white">Ajouter</a>
            </div>
            
        </div>
    </div>
</div>
