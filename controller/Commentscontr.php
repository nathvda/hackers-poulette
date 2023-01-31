<?php

include '../model/Comments.php';

class Commentscontr extends Comments
{

    public function createComment($data)
    {

        $this->addComment($data['lastNamejdke'], $data['firstNamejdke'], $data['emailjdke'], $data['commentjdke']);
    }

    public function deleteComment($id)
    {

        $this->eraseComment($id);
    }

    public function changeStatus($id, $value)
    {

        if ($value === "1") {
            $bool = false;
        }

        if ($value === "0") {
            $bool = true;
        }

        $this->updateStatus($id, $bool);
    }
}