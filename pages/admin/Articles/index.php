<?php

use App\Model\Allrequests;
use App\Table\Article;

$db = new Allrequests('application_blog');
$articles = $db->listArticles();

?>

    <div class="row">
        <div class="col-md-8">
            <h1 style="margin-left:50px;">Bien venu dans votre espace admin</h1> 
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary" href="?page=ajouter">Ajouter un article</a>
        </div>
    </div>

    
</div>

<div class="row">
    <div class="col-md-8">
            <table class="table" style="margin-left:200px">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Date</th>
                    <th scope="col">Date Modification</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($articles as $article): ?>
                    <tr>
                    <td><?= $article->id ?></td>
                    <td><?= $article->titre ?></td>
                    <td><?= $article->description ?></td>
                    <td><?= $article->auteur ?></td>
                    <td><?= $article->date ?></td>
                    <td><?= $article->datemodiff ?></td>
                    <td><a href="?page=edit&id=<?= $article->id ?>" class="btn btn-primary">modifier</a></td>
                    <td>
                        <form action="?page=delete" method="post">
                            <input type="hidden" name="id" value="<?= $article->id ?>">
                            <button type="submit" href="?page=delete&id=<?= $article->id; ?>" class="btn btn-danger">supprimer</button>
                        </form>
                    </td>
                    </tr>
                    <?php endforeach ; ?>
                </tbody>
            </table>
    
    </div>

</div>

