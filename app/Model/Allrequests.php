<?php

namespace App\Model ;
use App\Table\Article;
use DatePeriod;
use PDO;

class Allrequests extends Database{
    /**retourn un tableau des articles */
    public function listArticles() {
        $req = $this->getPdo()->prepare("SELECT articles.id, articles.titre, articles.contenu, articles.auteur, articles.description, articles.date, categories.reference, articles.datemodiff 
                                        FROM application_blog.articles 
                                        LEFT JOIN application_blog.categories 
                                            ON categorie_id = categories.id 
                                        ");

        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_OBJ);
        
        return $datas;
    }
    /**
        *return un objet contenant toute les categories
     */
    public function listCategories() {
        $req = $this->getPdo()->prepare("SELECT * FROM `application_blog`.`categories` ");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
    /** @param int $id The
        *return objet
     */
    public function listArticlesParCategorie($id){
    
        $req = $this->getPdo()->prepare("SELECT articles.id, articles.titre, articles.contenu, articles.auteur, articles.description, articles.date, categories.reference 
                                        FROM application_blog.articles 
                                        LEFT JOIN application_blog.categories 
                                            ON categorie_id = categories.id 
                                            WHERE categorie_id =
                                        ".$id);
    
        $req->execute();
        $ArticlCategorie = $req->fetchAll(PDO::FETCH_OBJ);
        return $ArticlCategorie;
    }

    public function listDernierArticles(){
        $req = $this->getPdo()->prepare("SELECT * FROM application_blog.articles ORDER BY id DESC LIMIT 3 ");
        $req->execute();
        $DernierArticles = $req->fetchAll(PDO::FETCH_OBJ);
        return $DernierArticles;
    }
    /**insertion des articles dans la base de données
        *return void 
     */
    public function insertArticles(){
    
        $req = $this->getPdo()->prepare('INSERT INTO application_blog.articles SET titre = "mon titre", contenu = "mon super cntenu", date = "'.date('Y-m-d').'" ');
        $result = $req->execute();
        
        return $result ;

    }
    
    public function create(){
         if(isset($_POST['submit'])){
    
        $titre = $this->security($_POST['titre']);
        $contenu = $this->security($_POST['contenu']);
        $description = $this->security($_POST['description']);
        $auteur = $this->security($_POST['auteur']);
        $date = date('Y-m-d');
        $categorie = $this->security($_POST['categorie_id']);

        $req = $this->getPdo()->prepare("INSERT `application_blog`.`articles` SET `titre`= '$titre', `contenu`= '$contenu', `description`= '$description',`auteur`= '$auteur', `date`= '$date',`categorie_id`= '$categorie'");
        $req->execute();
        if($req){
            // header('location: admin.php?page=edit&id='.$this->getPdo()->lastInsertId());  
        ?>
        <div class="alert alert-success">article modifier avec succee !</div>
        <?php       
        }
    }
    
    }
    /** recuperation du derniere instance */
    public function lastInsertId(){
        $this->getPdo()->lastInsertId();
    }


    public function update($id){
    if(isset($_POST['submit'])){
    
        $titre = $this->security($_POST['titre']);
        $contenu = $this->security($_POST['contenu']);
        $description = $this->security($_POST['description']);
        $auteur = $this->security($_POST['auteur']);
        $datemodiff = date('Y-m-d H:i:s');
        $categorie = $this->security($_POST['categorie_id']);

        $req = $this->getPdo()->prepare("UPDATE `application_blog`.`articles` SET `titre`= '$titre', `contenu`= '$contenu', `description`= '$description',`auteur`= '$auteur', `datemodiff`= '$datemodiff',`categorie_id`= '$categorie' WHERE  `id`=$id ");
        $req->execute();
        if($req){
        ?>
        <div class="alert alert-success">article modifier avec succee !</div>
        <?php       
        }

    }   

    //     $sql_part = [];
    //     $atribut = [];
    //     foreach ($fields as $k => $v){
    //         $sql_part[]="$k = ?";
    //         $atribut[]= $v ;
    //     }
    //     $atribut[] = $id; 
    //  $sql_parts = implode(', ', $sql_part);

    //     var_dump($sql_parts);
    //     var_dump($atribut);
    //     $req = $this->getPdo()->prepare("UPDATE application_blog.articles SET $sql_part
    //                                         WHERE id =?
    //                                     ",$atribut);
    //     $req->execute();

    }

    
    public function delete($id) {
        $req = $this->getPdo()->prepare("DELETE FROM `application_blog`.`articles` WHERE  `id`=$id ");
        $req->execute();
        if($req){
            header('location:admin.php');      
        }
    }

    public function createCategorie(){
           if(isset($_POST['submit'])){
    
        $reference = $this->security($_POST['reference']);

        $req = $this->getPdo()->prepare("INSERT `application_blog`.`categories` SET `reference`= '$reference' ");
        $req->execute();
        if($req){
            // header('location: admin.php?page=edit&id='.$this->getPdo()->lastInsertId());  
        ?>
        <div class="alert alert-success">Categorie Ajouté avec succee !</div>
        <?php       
        }
    }
    }
   
    public function updateCategorie($id){
        if(isset($_POST['submit'])){
        
            $reference = $this->security($_POST['reference']);

            $req = $this->getPdo()->prepare("UPDATE `application_blog`.`categories` SET `reference`='$reference' WHERE  `id`=$id ");
            $req->execute();
            if($req){
            ?>
            <div class="alert alert-success">article modifier avec succee !</div>
            <?php       
            }

        } 
    }

    public function deleteCategorie($id){
        
        $req = $this->getPdo()->prepare("DELETE FROM `application_blog`.`categories` WHERE  `id`=$id ");
        $req->execute();
        if($req){
            header('location:admin.php?page=categories.index');      
        }
    }
    
    /** @param $id l'id de l'article
        *return un objet
     */
    public function getDetails($id){
        $req = $this->getPdo()->prepare("SELECT articles.id, articles.titre, articles.contenu, articles.auteur, articles.description, articles.date, categories.reference 
                                        FROM application_blog.articles 
                                        LEFT JOIN application_blog.categories 
                                            ON categorie_id = categories.id 
                                            WHERE articles.id =
                                        ".$id);
        $req->execute();
        $resultat = $req->fetchAll(PDO::FETCH_OBJ);
        return $resultat;
    }

    public function getCategorieId($id){
        $req = $this->getPdo()->prepare("SELECT * FROM `application_blog`.`categories` WHERE  `id`=$id ");
        $categories = $req->execute();
        return $categories;
    }

    private function security($data) {
        //securiser les données entrées
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);

        //specifier les type de données

        return $data;
   }
    /**
    * @param string 
    * @param string
    *   return data $return 
     */
   public function extract($key, $value) {
        $return = [];
        $req = $this->listCategories();
        foreach($req as $v) {
        
            $return[$v->$key] = $v->$value;
        } 
        return $return;
   }

}


