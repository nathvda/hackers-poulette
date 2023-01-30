<?php
declare(strict_types=1);
include '../model/Dbconnect.php';

class Comments extends DbConnect{

    protected function addComment(string $name, string $firstname, string $email, string $comment){

        try {
            
            $sql = "INSERT INTO commentaires (name, firstname, email, comment) VALUES (?,?,?,?)";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name,$firstname,$email,$comment]);

            // mail('mail', "confirmation", 'Commentaire bien reçu');

        } catch (exception $e){
        }

    }

    protected function getComments(){
        try {
            
            $sql = "SELECT * FROM commentaires";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
         
        return $result;

        } catch (exception $e){
        }

    }


}