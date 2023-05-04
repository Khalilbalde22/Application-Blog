<?php

namespace App\Titre ;

class Titre_pages{


    public static function getTitre($titre_page){

        if($titre_page === 'apropos'){

            $titre_page = 'apropos';
        
        }elseif($titre_page === 'articles'){
        
            $titre_page = 'articles';
        }elseif($titre_page === 'contact'){
            $titre_page = 'contact';
        }elseif($titre_page === 'details'){
            $titre_page = 'details';
        }elseif($titre_page === 'home'){
            $titre_page = 'home-admin';
        }
        return $titre_page;
        
    }

    public static function getDescription($description_page){

        if($description_page === 'apropos'){
        
            $description_page = '<h1>Lisez un peut à propos de moi </h1>';

        }elseif($description_page === 'articles'){
        
            $description_page = '<h1>Decouvrez nos differents article</h1>';
        }elseif($description_page === 'contact'){
        
            $description_page = '<h1>Voulez vous plus d\'information ? <br> contactez nous </h1>';
        }elseif($description_page === 'details'){
            $description_page = '<h1> Deatails de l\'article </h1>';
        }elseif($description_page === 'edit'){
            $description_page = '<h1> Modification de l\'article </h1>';
        }elseif($description_page === 'ajouter'){
            $description_page = '<h1> Ajouter Des articles </h1>';
        }elseif($description_page === 'home'){
            $description_page = '<h1> Bien venu dans votre espace d\'Administration </h1>' ;
        }

        return $description_page;
        
    }
}