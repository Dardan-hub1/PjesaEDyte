<?php

include_once 'userMapper.php';
include_once 'simpleUserClass.php';
if (isset($_GET['username'])) {
    $userId = $_GET['id'];
    $username = $_GET['username'];
    $lastname = $_GET['lastName'];
    $simpleUser = new SimpleUser($username,"", 1, 1,$lastname);
    $mapper = new UserMapper();
    $mapper->edit($simpleUser, $userId);
    header("Location:../Pages/Dashboard.php");
}
