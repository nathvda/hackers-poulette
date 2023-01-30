<?php
include '../view/Commentsview.php';

function displayComments(){

    $cmts = new Commentsview();
    $cmts = $cmts->showAllComments();

}

displayComments();