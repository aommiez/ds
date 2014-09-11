<?php
require_once "Manager.php";
class StockModel extends Manager {

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



}
?>