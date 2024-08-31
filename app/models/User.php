<?php
namespace YipTest\models;

class User {
    public $username;
    public $email;
    public $password;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function validateUsername() {
        return preg_match('/^[a-zA-Z0-9]{3,20}$/', $this->username);
    }

    public function validateEmail() {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    public function validatePassword() {
        // Password must be at least 8 characters long and contain letters and numbers
        return preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $this->password);
    }

    public function isValid() {
        return $this->validateUsername() && $this->validateEmail() && $this->validatePassword();
    }

    // public function getUserName(){
    //     return $this->
    // }
}
