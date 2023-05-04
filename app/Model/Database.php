<?php

namespace App\Model ;

use PDO ;

class Database{

    private $db_hote;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $pdo ;

    public function __construct($db_name ,$db_hote='localhost' , $db_user='root', $db_pass=''){
        $this->db_name = $db_name;
        $this->db_hote = $db_hote;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
      
        }


    protected function getPdo() {

            $pdo = new PDO('mysql:host = localhost; dbname = gestion_budget', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $count = $pdo->exec('INSERT INTO application_blog.articles SET titre = "mon titre", contenu = "mon super cntenu", date = "'.date('Y-m-d').'" ' );

            $this->pdo = $pdo;

        return $pdo ;
    
    
    }

}