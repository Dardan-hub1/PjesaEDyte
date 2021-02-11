<?php
require_once 'personClass.php';

class SimpleUser extends Person
{
    public function __construct($username, $password, $role)
    {
        parent::__construct($username, $password,$role);
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
}
