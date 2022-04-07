<?php

class User
{
    public $id;
    public $username;
    public $email;
    public $password;
    public $role;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->email, 'string');
        settype($this->password, 'string');
    }
}

?>