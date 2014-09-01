<?php
require_once "Manager.php";
class AccountModel extends Manager {

    protected static $cn, $setting;

    public static function  addAccount ($username,$password,$level) {
        $cn = self::getCn();
        $sql = "INSERT INTO account(username,password,levels) VALUES(:username,:password,:levels)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "username" =>$username,
            "password" => $password,
            "levels" => $level
        ));
    }

    public static function getAccount () {
        $cn = self::getCn();
        $sql = "SELECT * FROM account";
        return $cn->query($sql);
    }

    public static function getAccountById ($id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM account WHERE id = ".$id;
        return $cn->query($sql);
    }

    public static function delAccount ($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM account WHERE id = ".$id;
        $cn->query($sql);
    }

}
?>