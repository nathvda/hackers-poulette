<?php
class Commentvalidator {

    private $fields;
    private $data;
    private $errors = [];

    public function __construct($post_fields, $post_data){
    $this->fields = $post_fields;
    $this->data = $post_data;
    }

    public function validate(){
        foreach($this->fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field doesn't exist in data");
                return;
            }
        }

        $this->validateLastName();
        $this->validateFirstName();
        $this->validateEmail();
        $this->validateComment();

        if(count($this->errors) === 0){

            include '../controller/Commentscontr.php';

            $cmt = new Commentscontr();
            $cmt->createComment($this->data);

        }

        
        return $this->errors;
    }

    private function validateLastName(){
        $val = trim($this->data['lastNamejdke']);
        $val = htmlspecialchars($val);
        $val = stripslashes($val);

        if (empty($val))
        { 
            $this->addError('lastNamejdke', "Name cannot be empty");
        } else {
            if(!preg_match('/^[a-zA-ZÀ-ù-]{2,255}$/', $val)){
                $this->addError('lastNamejdke', "Lastname must be between 2 and 255 characters and cannot contain numbers");
            } else {
                $this->data['lastNamejdke'] = $val;
            }
        }
    }

    private function validateFirstName(){
        $val = trim($this->data['firstNamejdke']);
        $val = htmlspecialchars($val);
        $val = stripslashes($val);

        if (empty($val))
        { 
            $this->addError('firstNamejdke', "Firstname cannot be empty");
        } else {
            if(!preg_match('/^[a-zA-ZÀ-ù-]{2,255}$/', $val)){
                $this->addError('firstNamejdke', "Firstname must be between 2 and 255 characters and cannot contain numbers");
            } else {
                $this->data['firstNamejdke'] = $val;
            }
        }
    }

    private function validateEmail(){
        $val = trim($this->data['emailjdke']);
        $val = htmlspecialchars($val);
        $val = stripslashes($val);

        if (empty($val))
        { 
            $this->addError('emailjdke', "Email cannot be empty");
        } else {

            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->addError('emailjdke', "Email must be a valid email");
            } else {
                if(!preg_match('/^[a-zA-Z0-9@.-_]{2,255}$/', $val)){
                    $this->addError('emailjdke', "Email must be 2 to 255 characters");
                } else {
                    $this->data['emailjdke'] = $val;
                }
            }

        }
    }

    private function validateComment(){
        $val = trim($this->data['commentjdke']);
        $val = htmlspecialchars($val);
        $val = stripslashes($val);

        if (empty($val))
        { 
            $this->addError('commentjdke', "Comment cannot be empty");
        } else {
                if(!preg_match('/^.{250,1000}$/', $val)){
                    $this->addError('commentjdke', "comment must be between 250 and 1000 characters");
                } else {
                    $this->data['commentjdke'] = $val;
                }

        }
    }

    private function addError($key,$value){
        $this->errors[$key] = $value;
    }
}