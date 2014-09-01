<?php
require_once "Manager.php";
class AccountModel extends Manager {

    protected static $cn, $setting;

    public static function  addAccount () {
        $cn = self::getCn();
    }
}
?>