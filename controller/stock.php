<?php
require_once "Manager.php";
class StockModel extends Manager {

    protected static $cn, $setting;

    public static function  addMedToStock ($dep_id,$med_id,$med_value,$med_size,$med_kind,$med_packaging) {
        $cn = self::getCn();
        $sql = "INSERT INTO dep_stock (dep_id,med_id,med_value,med_size,med_kind,med_packaging) VALUES(:dep_id,:med_id,:med_value,:med_size,:med_kind,:med_packaging)";
        $st = $cn->prepare($sql);
        $st->execute(array(
            "dep_id" =>$dep_id,
            "med_id" => $med_id,
            "med_value" => $med_value,
            "med_size" => $med_size,
            "med_kind" => $med_kind,
            "med_packaging" => $med_packaging
        ));
    }

    public static function  getStockByDepId ($dep_id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM dep_stock Where dep_id = ".$dep_id;
        return $cn->query($sql);
    }

    public static function  delMedStockById ($id) {
        $cn = self::getCn();
        $sql = "DELETE FROM dep_stock WHERE id = ".$id;
        $cn->query($sql);
    }

    public static function getStockById ($id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM dep_stock Where id = ".$id;
        return $cn->query($sql);
    }

    public static function editStockById ($id,$med_value,$med_size,$med_kind,$med_packaging) {
        $cn = self::getCn();
        $sql = "UPDATE dep_stock SET med_value = '{$med_value}' , med_size = '{$med_size}' , med_kind = '{$med_kind}' , med_packaging = '{$med_packaging}'  WHERE id = ".$id;
        $cn->query($sql);
    }
}
?>