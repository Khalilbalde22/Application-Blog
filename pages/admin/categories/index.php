<?php

use App\Model\Allrequests;
use App\Table\Article;

$db = new Allrequests('application_blog');
$categories = $db->listCategories();

?>

    <div class="row">
        <div class="col-md-8">
            <h1 style="margin-left:50px;">Administrer les categories</h1> 
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary" href="?page=categories.ajouter">Ajouter une Categorie</a>
        </div>
    </div>

    
</div>

<div class="row">
    <div class="col-md-8">
            <table class="table" style="margin-left:200px">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">reference</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($categories as $categorie): ?>
                    <tr>
                    <td><?= $categorie->id ?></td>
                    <td><?= $categorie->reference ?></td>
                    <td><a href="?page=categories.edit&id=<?= $categorie->id ?>" class="btn btn-primary">modifier</a></td>
                    <td>
                        <form action="?page=categories.delete" method="post">
                            <input type="hidden" name="id" value="<?= $categorie->id ?>">
                            <button type="submit" href="?page=categories.delete&id=<?= $categorie->id; ?>" class="btn btn-danger">supprimer</button>
                        </form>
                    </td>
                    </tr>
                    <?php endforeach ; ?>
                </tbody>
            </table>
    
    </div>

</div>

