<?php

if(isset($_POST['submit'])){
    include '../controller/Commentscontr.php';

    $cmt = new Commentscontr();
    $cmt = $cmt->changeStatus($_POST['id'],$_POST['handled']);

    header('Location: ../public/dashboard.php');
    exit();
}