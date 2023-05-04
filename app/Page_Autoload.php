<?php

namespace App ;

class Page_Autoload{

    private $pages;

    public function __construct($pages = ''){
        if(!empty($pages)){
            $this->pages = $pages;
        }
    }

    public function getPages(){
    if(!empty($this->pages)){
            if($this->pages  === 'articles'){
                require 'pages/listeArticles.php';
            }elseif($this->pages === 'apropos'){
                require 'pages/apropos.php';
            }elseif($this->pages === 'details'){
                require 'pages/detailsArticles.php';
            }elseif($this->pages === 'contact'){
                require 'pages/contact.php';
            }elseif($this->pages === 'listParcategorie'){
                require 'pages/listeParCategorie.php';
            }elseif($this->pages === 'login'){
                require 'pages/users/login.php';
            }elseif($this->pages === 'home'){
                require 'pages/admin/Articles/index.php';
            }elseif($this->pages === 'edit'){
                require 'pages/admin/Articles/edit.php';
            }elseif($this->pages === 'ajouter'){
                require 'pages/admin/Articles/ajouter.php';
            }elseif($this->pages === 'delete'){
                require 'pages/admin/Articles/delete.php';
            }elseif($this->pages === 'categories.index'){
                require 'pages/admin/categories/index.php';
            }elseif($this->pages === 'categories.edit'){
                require 'pages/admin/categories/edit.php';
            }elseif($this->pages === 'categories.ajouter'){
                require 'pages/admin/categories/ajouter.php';
            }elseif($this->pages === 'categories.delete'){
                require 'pages/admin/categories/delete.php';
            }
        }else{
            header('HTTP/1.1 403 Forbidden'); 
            die('access interdit ! ');
        }
    }

    // public function getPagesAdmin(){
    // if(!empty($this->pages)){
    //         if($this->pages  === 'login'){
    //             require 'pages/users/login.php';
    //         }elseif($this->$page === 'home'){
    //             require 'pages/admin/index.php';
    //         }elseif($this->$page === 'post.edit'){
    //             require 'pages/admin/edit.php';
    //         }
    //     }
    // }

}