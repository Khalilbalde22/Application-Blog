<?php

use App\Bootstrap;
use App\Model\Allrequests;

    $post = new Allrequests('application_blog');
    
    $articles = $post->getDetails($_GET['id']);
    $update = $post->update($_GET['id']);
    $categories = $post->extract('id', 'reference');

    $form = new Bootstrap($articles);

?>

<div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            
            <form  method="post">

                <?= $form->input('titre', 'username') ?>
                <?= $form->input('contenu', 'contenu', ['type' => 'textarea']) ?>
                <?= $form->input('description', 'description') ?>
                <?= $form->input('auteur', 'auteur') ?>
                <?= $form->select('categorie_id', 'categorie', $categories) ?>
                <?= $form->submit()?>

            </form>
        </div>
        <div class="col-md-4">
        </div>
    </div>
