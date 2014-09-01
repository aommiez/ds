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

}
?>