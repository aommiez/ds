<?php
require_once '../../controller/medicine.php';
$med_name = $_POST['med_name'];
$med_size = $_POST['med_size'];
$med_kind = $_POST['med_kind'];
$med_packaging = $_POST['med_packaging'];
MedicineModel::addMedicine($med_name,$med_size,$med_kind,$med_packaging);
header( 'Location: ../../index.php?g=medicine&p=index');
