<?php
class User {
    private $username;
    private $read;
    private $write;
    private $access;


    public function User($username, $read, $write, $access) {
        $this->username = $username;
        $this->read = $read;
        $this->write = $write;
        $this->access = $access;
        
    }
    public function getUserName() {
        return $this->username;
    }

    public function setUserName($username) {
        $this->username = $username;
    }

    public function getRead() {
        return $this->read;
    }

    public function setRead($read) {
        $this->read = $read;
    }

    public function getWrite() {
        return $this->write;
    }

    public function setWrite($write) {
        $this->write = $write;
    }

    public function getAccess() {
        return $this->access;
    }

    public function setAccess($access) {
        $this->access = $access;
    }

    public function __toString() {
 

        return "Имя пользователя: $this->username<br>
                Право на чтение: $this->read<br>   
                Право на запись: $this->write<br>
                Доступ к корню: $this->access<br>";
    
    } 
}

