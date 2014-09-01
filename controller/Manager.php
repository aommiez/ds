<?php
/**
 * Created by PhpStorm.
 * User: p2
 * Date: 7/30/14
 * Time: 3:23 PM
 */

class Manager {
    protected static $cn, $setting;
    public static function getSetting(){
        if(is_null(self::$setting)){
            self::$setting = include(dirname(__FILE__).'/setting.php');
        }
        return self::$setting;
    }

    public static function getCn(){
        if(is_null(self::$cn)){
            $setting = self::getSetting();
            $db_setting = $setting['db'];

            $db_host = $db_setting['host'];
            $db_name = $db_setting['database'];
            $db_user = $db_setting['username'];
            $db_pass = $db_setting['password'];

            self::$cn = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_pass);
        }
        return self::$cn;
    }

}