<?php

use App\Bootstrap;
use App\Model\Allrequests;

    $post = new Allrequests('application_blog');
    
    $update = $post->createCategorie();

    $form = new Bootstrap($_POST);

?>


<form  method="post">

    <?= $form->input('reference', 'reference') ?>
    <?= $form->submit()?>

</form>