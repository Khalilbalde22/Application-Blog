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

<form  method="post">

    <?= $form->input('username', 'username') ?>
    <?= $form->input('password', 'password', 'password') ?>
    <?= $form->submit()?>

</form>