<?php

use App\Bootstrap;
use App\Model\Allrequests;

    $post = new Allrequests('application_blog');
    
    $categories = $post->getCategorieId($_GET['id']);
    
    $update = $post->updateCategorie($_GET['id']);
    $form = new Bootstrap($categories);

?>

    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
      
            <form  method="post">

                <?= $form->input('reference', 'reference') ?>
                <?= $form->submit()?>

            </form>
        </div>
        <div class="col-md-4">
        </div>
    </div>