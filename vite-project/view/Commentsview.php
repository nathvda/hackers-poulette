<?php
include '../model/Comments.php';

class Commentsview extends Comments{

    public function showAllComments(){
        $result =  $this->getComments();

        foreach($result as $res){

            echo '<div class="comment__box">';
            
            echo '<b>Comment id</b> : ' . $res['id'] . '<br/>';
            echo '<b>Commenter</b>: ' . $res['name'] . ' ' . $res['firstname'] . '<br/>';
            echo '<b>Email adress</b> : ' . $res['email'] . '<br/>';
            if ($res['handled'] === 0){
                echo '<b class="pending">Status</b> : Pending';
                        } else { 
                echo '<b class="handled">Status</b> : Handled';         
                        }

            echo '<div class="comment__display">' . $res['comment'] . '</div><br/>';

            echo '<div class="comment__toolbar">
                    <form method="post" action="../includes/_delete_comment.php" id="delete__comment">
                        <input name="id" style="display:none" type="number" value="' . $res['id'] . '">
                        <button class="delete__comment" name="submit" value="delete" type="submit">x</button>
                    </form>
                    <form method="post" action="../includes/_change_status.php" id="change__comment">
                        <input name="id" style="display:none" type="number" value="' . $res['id'] . '">
                        <input name="handled" style="display:none" type="number" value="' . $res['handled'] . '">
                        <button class="change__comment" name="submit" value="change" type="submit">Change status</button>
                    </form>
                </div>';
            
            echo '</div>';
        }
    }
}