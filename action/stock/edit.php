<?php
require_once '../../controller/stock.php';
$dep_id = $_POST['dep_id'];
$stock_id = $_POST['stock_id'];
StockModel::editStockById($stock_id,$_POST['med_value'],$_POST['med_size'],$_POST['med_kind'],$_POST['med_packaging']);
header( 'Location: ../../index.php?g=stock&p=index&id='.$dep_id);