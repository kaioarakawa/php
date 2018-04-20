<?php

class User {

    private $username;
    private $password;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->password = sha1($password);
    }

    public function getPassword() {
        return $this->password;
    }

}