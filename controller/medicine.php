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

    public static function medSizeAdd ($size_name) {
        $cn = self::getCn();
        $sql = "INSERT INTO med_size (size_name) VALUES(:size_name)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "size_name" =>$size_name
        ));
    }

    public static function getMedSize () {
        $cn = self::getCn();
        $sql = "SELECT * FROM med_size";
        return $cn->query($sql);
    }

    public static function delMedSize ($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM med_size WHERE id = ".$id;
        $cn->query($sql);
    }

    public static function editMedSizeById ($med_size_id,$med_size_name) {
        $cn = self::getCn();
        $sql = "UPDATE med_size SET size_name = '{$med_size_name}' WHERE id = ".$med_size_id;
        $cn->query($sql);
    }

    public static function getMedSizeById ($id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM med_size WHERE id = ".$id;
        return $cn->query($sql);
    }
    // kind
    public static function getMedKind () {
        $cn = self::getCn();
        $sql = "SELECT * FROM med_kind";
        return $cn->query($sql);
    }

    public static function medKindAdd ($kind_name) {
        $cn = self::getCn();
        $sql = "INSERT INTO med_kind (kind_name) VALUES(:kind_name)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "kind_name" =>$kind_name
        ));
    }

    public static function delKind ($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM med_kind WHERE id = ".$id;
        $cn->query($sql);
    }

    public static function editMedKindById ($id,$kind_name) {
        $cn = self::getCn();
        $sql = "UPDATE med_kind SET kind_name = '{$kind_name}' WHERE id = ".$id;
        $cn->query($sql);
    }

    public static function getMedKindById ($id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM med_kind WHERE id = ".$id;
        return $cn->query($sql);
    }

    // packaging
    public static function getMedPackaging () {
        $cn = self::getCn();
        $sql = "SELECT * FROM packaging";
        return $cn->query($sql);
    }

    public static function medPackagingAdd ($packaging_name) {
        $cn = self::getCn();
        $sql = "INSERT INTO packaging (packaging_name) VALUES(:packaging_name)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "packaging_name" =>$packaging_name
        ));
    }

    public static function delPackaging ($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM packaging WHERE id = ".$id;
        $cn->query($sql);
    }

    public static function editMedPackagingById ($id,$packaging_name) {
        $cn = self::getCn();
        $sql = "UPDATE packaging SET packaging_name = '{$packaging_name}' WHERE id = ".$id;
        $cn->query($sql);
    }

    public static function getMedPackagingById ($id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM packaging WHERE id = ".$id;
        return $cn->query($sql);
    }
}
?>