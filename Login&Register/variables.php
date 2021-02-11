<?php
class VariablesExample
{
    private static $loginAdminUser = array("username" => "dardan", "password" => "shabani", 'role' => '1');
    private static $loginSimpleUser = array("username" => "test", "password" => "test", 'role' => '0');
    private static $loginSimpleUser1 = array("username" => "simple", "password" => "simple", 'role' => '0');
    private static $loginSimpleUser2 = array("username" => "first", "password" => "first", 'role' => '0');
    private static $loginSimpleUser3 = array("username" => "second", "password" => "second", 'role' => '0');
    private static $loginSimpleUser4 = array("username" => "third", "password" => "third", 'role' => '0');

    private static $users;
    public static function getUsers()
    {
        self::$users = array(self::$loginAdminUser, self::$loginSimpleUser, self::$loginSimpleUser1, self::$loginSimpleUser2, self::$loginSimpleUser3, self::$loginSimpleUser4);
        return self::$users;
    }
}
