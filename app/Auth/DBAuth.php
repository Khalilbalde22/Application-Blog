<?php

namespace App\Auth;
use App\Model\Database;

class DBAuth extends Database{

        /**
            *@param username
            *@param password
            *return boolean
         */
        public function login($username, $password){
            $user = $this->getPdo()->prepare("SELECT * FROM application_blog.user WHERE username = '".$username."' AND password ='".$password."'  ");
            $user->execute();

            if($user->rowCount() > 0){
            
                $_SESSION['auth'] = $username  ;
                return true;
            }else{
                header('location:?page=login');
                return false;
            }
        }

        public function loged():bool{
            return isset($_SESSION['auth']);
        }

        public function logout(){
            return session_destroy();
        }

        public function forbidden(){
            header('HTTP/1.1 403 Forbidden'); 
            die('access interdit ! ');
        }

        public function notfound(){
        header('HTTP/1.1 404 Not found');
            die('page introuvalbe ! ');
        }

}