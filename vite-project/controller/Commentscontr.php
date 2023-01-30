<?php

include '../model/Comments.php';

class Commentscontr extends Comments{

    public function createComment($data){

        $this->addComment($data['lastNamejdke'], $data['firstNamejdke'], $data['emailjdke'], $data['commentjdke']);

    }

}