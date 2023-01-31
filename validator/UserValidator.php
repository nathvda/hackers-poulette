<?php

class Uservalidator {

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

        $this->validateUsername();
        $this->validatePassword();

        if(count($this->errors) === 0){

            include '../view/Usersview.php';

            $user = new Usersview();
            $user->fetchUser($this->data['usernamejdke'], $this->data['passwordjdke']);

        }

        
        return $this->errors;
    }

    private function validateUsername(){
        $val = trim($this->data['usernamejdke']);
        $val = htmlspecialchars($val);
        $val = stripslashes($val);

        if (empty($val))
        { 
            $this->addError('usernamejdke', "Username cannot be empty");
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{2,10}$/', $val)){
                $this->addError('usernamejdke', "Username must be between 2 and 10 characters and alphanumeric");
            } else {
                $this->data['usernamejdke'] = $val;
            }
        }
    }

    private function validatePassword(){
        $val = trim($this->data['passwordjdke']);
        $val = htmlspecialchars($val);
        $val = stripslashes($val);

        if (empty($val))
        { 
            $this->addError('passwordjdke', "Password cannot be empty");
        } else {
            if(!preg_match('/^[a-zA-Z0-9]{2,18}$/', $val)){
                $this->addError('passwordjdke', "Password must be between 2 and 18 characters and alphanumeric");
            } else {
                $this->data['passwordjdke'] = $val;
            }
        }
    }


    private function addError($key,$value){
        $this->errors[$key] = $value;
    }
}