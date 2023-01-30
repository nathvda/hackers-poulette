<?php
include '../model/Users.php';

class Usersview extends Users{

    public function fetchUser($username,$password){
            $user =  $this->getUser($username);

            if($password === $user[0]['password']){
                session_start();

                $_SESSION['user'] = $user[0]['username'];

                header('Location: ../public/index.php');
                exit();
            } else {
                
            }
    }

}