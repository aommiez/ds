<?php
require_once "Manager.php";
class MedicineModel extends Manager {

    protected static $cn, $setting;

    public static function  addMedicine ($med_name,$med_size,$med_kind,$med_packaging) {
        $cn = self::getCn();
        $sql = "INSERT INTO medicine (name,size,kind,packaging) VALUES(:name,:size,:kind,:packaging)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "name" =>$med_name,
            "size" => $med_size ,
            "kind" => $med_kind,
            "packaging" => $med_packaging
        ));
    }

    public static function getMedicine () {
        $cn = self::getCn();
        $sql = "SELECT * FROM medicine";
        return $cn->query($sql);
    }

    public static function delMedicine ($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM medicine WHERE id = ".$id;
        $cn->query($sql);
    }

}
?>