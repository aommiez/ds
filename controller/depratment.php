<?php
require_once "Manager.php";
class DepartmentModel extends Manager {

    protected static $cn, $setting;

    public static function  addDep ($dep_name,$dep_root) {
        $cn = self::getCn();
        $sql = "INSERT INTO department(dep_name,dep_root) VALUES(:dep_name,:dep_root)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "dep_name" =>$dep_name,
            "dep_root" => $dep_root
        ));
    }

    public static function editDepById ($dep_id,$dep_name,$dep_root) {
        $cn = self::getCn();
        $sql = "UPDATE department SET dep_name = '{$dep_name}',dep_root = '{$dep_root}' WHERE id = ".$dep_id;
        $cn->query($sql);
    }


    public static function getDep () {
        $cn = self::getCn();
        $sql = "SELECT * FROM department";
        return $cn->query($sql);
    }

    public static function delDep ($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM department WHERE id = ".$id;
        $cn->query($sql);
    }

    public static function getDepById ($id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM department WHERE id = ".$id;
        return $cn->query($sql);
    }

    public static function countDepUserByDepIdAndUserId ($dep_id,$user_id) {
        $cn = self::getCn();
        $sql = "SELECT COUNT(id) FROM dep_user WHERE dep_id = ".$dep_id." AND user_id = ".$user_id;
        return $cn->query($sql);
    }

    public static function getDepByUserId ($user_id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM dep_user WHERE user_id = ".$user_id;
        return $cn->query($sql);
    }

    public static function updateUserDep ($dep_id,$user) {
        $cn = self::getCn();
        $sql = "DELETE FROM dep_user WHERE dep_id = ".$dep_id;
        $cn->query($sql);
        foreach ($user as $u ) {
            $sql1 = "INSERT INTO dep_user(dep_id,user_id) VALUES(:dep_id,:user_id)";
            $st = $cn->prepare($sql1);
            $st->execute(array(
                "dep_id" => $dep_id,
                "user_id" => $u
            ));
        }
    }
}
?>