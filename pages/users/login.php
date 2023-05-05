<?php

use App\Auth\DBAuth;
use App\Bootstrap;

    if(!empty($_POST)){
    
        $auth = new DBAuth('application_blog');
        $connexion = $auth->login($_POST['username'], $_POST['password']); 
        if($connexion){
            
                header('location:admin.php');
        }else{
            header('location:?page=login');
        }

    }

    $form = new Bootstrap($_POST);

?>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <h1>Connexion</h1>
        <form  method="post">

            <?= $form->input('username', 'username') ?>
            <?= $form->input('password', 'password', 'password') ?>
            <?= $form->submit()?>

        </form>
    </div>
    <div class="col-md-4">
    </div>
</div>