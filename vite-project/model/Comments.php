<?php
declare(strict_types=1);
include '../model/Dbconnect.php';

class Comments extends DbConnect{

    protected function addComment(string $name, string $firstname, string $email, string $comment){

        try {
            
            $sql = "INSERT INTO commentaires (name, firstname, email, comment) VALUES (?,?,?,?)";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name,$firstname,$email,$comment]);

        $_SESSION['success'] = "Your comment was sent successfully! Thanks for letting us know.";
            // mail('mail', "confirmation", 'Commentaire bien reçu');

        } catch (exception $e){

        $_SESSION['success'] = "Sorry, we couldn't add your comment to the database, please contact our support center for more information.";

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

    protected function eraseComment($id){
        try {
            
            $sql = "DELETE FROM commentaires WHERE id = ? ";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $result = $stmt->fetchAll();

        return $result;

        } catch (exception $e){
        }

    }

    protected function updateStatus($id,$bool){
        try {
            
            $sql = "UPDATE commentaires SET handled = ? WHERE id = ? ";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$bool, $id]);

        $result = $stmt->fetchAll();

        return $result;

        } catch (exception $e){
        }

    }


}