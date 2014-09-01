<?php
require_once '../../controller/medicine.php';
MedicineModel::delMedicine($_GET['id']);
header( 'Location: ../../index.php?g=medicine&p=index');
