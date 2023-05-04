<?php

use App\Bootstrap;
use App\Model\Allrequests;

    $post = new Allrequests('application_blog');
    
    $categories = $post->getCategorieId($_GET['id']);
    
    $update = $post->updateCategorie($_GET['id']);
    $form = new Bootstrap($categories);

?>


<form  method="post">

    <?= $form->input('reference', 'reference') ?>
    <?= $form->submit()?>

</form>