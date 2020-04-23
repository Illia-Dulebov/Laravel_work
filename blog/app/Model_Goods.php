<?php

namespace App;

class Goods {
    public $name;
    public $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
}

class User {
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }
}
