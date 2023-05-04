<?php

namespace App\Table;

class Article {

    public static function getUrlDetails(){
    
        return "?page=details&id=" ;
     
    }

    public static function getUrlCategorie(){
        return "?page=listParcategorie&id=" ;
    }

    public static function getContenu($contenu){
    
        $html = '<p>'.substr($contenu,0, 80).'...</p>';

        return $html;
    
    }


}