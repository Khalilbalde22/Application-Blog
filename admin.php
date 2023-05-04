 <!--================Hero Banner start =================--> 

<?php
use App\Auth\DBAuth;
use App\Autoloader ;
use App\Titre\Titre_pages;
use App\Page_Autoload;

//l'inclusion et l'appel de la class qui autoloade automatiquement les class
include 'app/Autoloader.php';
Autoloader::register();

//l'authent

$auth = new DBAuth('application_blog');
if($auth->loged()){
    
    $auth->forbidden();

}else{
if(empty($_GET)){
ob_start();
    require 'pages/admin/Articles/index.php';
$content = ob_get_clean();
}else{
//recuperation du resultat fourni par la class page_Autoload et stocker dans une variable qui sera affichée dans default.php 
ob_start();
   $page = new Page_Autoload($_GET['page']);
    $page->getPages();
$content = ob_get_clean();
    //appel de la fonction du titre de la page
    $titre = Titre_pages::getTitre($_GET['page']);
    //Dinamisation du contenu de la baniere
    $description = Titre_pages::getDescription($_GET['page']);

    }
    require 'pages/template/default.php';
}

    
?>






    