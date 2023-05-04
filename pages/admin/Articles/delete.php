<?php

use App\Bootstrap;
use App\Model\Allrequests;

    $post = new Allrequests('application_blog');
    
    $update = $post->delete($_POST['id']);

?>
