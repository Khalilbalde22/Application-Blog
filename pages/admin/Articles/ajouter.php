<?php

use App\Bootstrap;
use App\Model\Allrequests;

    $post = new Allrequests('application_blog');
    
    $update = $post->create();
    $categories = $post->extract('id', 'reference');

    $form = new Bootstrap($_POST);

?>


<form  method="post">

    <?= $form->input('titre', 'username') ?>
    <?= $form->input('contenu', 'contenu', ['type' => 'textarea']) ?>
    <?= $form->input('description', 'description') ?>
    <?= $form->input('auteur', 'auteur') ?>
    <?= $form->input('date', 'date', ['type' => 'date']) ?>
    <?= $form->select('categorie_id', 'categorie', $categories) ?>
    <?= $form->submit()?>

</form>