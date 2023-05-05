<?php

use App\Bootstrap;
use App\Model\Allrequests;

    $post = new Allrequests('application_blog');
    
    $update = $post->createCategorie();

    $form = new Bootstrap($_POST);

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
