<?php
require_once '../../controller/stock.php';
StockModel::delMedStockById($_GET['id']);
header( 'Location: ../../index.php?g=stock&p=index&id='.$_GET['dep_id']);