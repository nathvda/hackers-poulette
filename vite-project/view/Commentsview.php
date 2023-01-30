<?php
include '../model/Comments.php';

class Commentsview extends Comments{

    public function showAllComments(){
        $result =  $this->getComments();

        foreach($result as $res){

            echo $res['id'] . '<br/>';
            echo $res['name'] . '<br/>';
            echo $res['firstname'] . '<br/>';
            echo $res['email'] . '<br/>';
            echo $res['comment'] . '<br/>';
            
        }
    }
}