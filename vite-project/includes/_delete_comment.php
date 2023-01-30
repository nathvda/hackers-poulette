<?php

if(isset($_POST['submit'])){
    include '../controller/Commentscontr.php';

    $cmt = new Commentscontr();
    $cmt = $cmt->deleteComment($_POST['id']);

    header('Location: ../public/dashboard.php');
    exit();
}