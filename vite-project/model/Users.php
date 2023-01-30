<?php
declare(strict_types=1);
include '../model/Dbconnect.php';

class Users extends DbConnect{

    protected function getUser(string $username){

       try { $sql = "SELECT * FROM users WHERE username = ?";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);

        $result = $stmt->fetchAll();

        return $result;

        } catch (exception $e) {

        var_dump('This user does not exist');
        
        } 

        }


}