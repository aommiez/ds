<?php
require_once '../../controller/stock.php';
$med_id = $_POST['med_id'];
$med_value = $_POST['med_value'];
$med_size = $_POST['med_size'];
$med_kind = $_POST['med_kind'];
$med_packaging = $_POST['med_packaging'];
$dep_id = $_POST['dep_id'];
StockModel::addMedToStock($dep_id,$med_id,$med_value,$med_size,$med_kind,$med_packaging);
header( 'Location: ../../index.php?g=stock&p=index&id='.$dep_id);