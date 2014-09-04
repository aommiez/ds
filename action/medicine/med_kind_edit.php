<?php
require_once '../../controller/medicine.php';
MedicineModel::editMedKindById($_POST['id'],$_POST['kind_name']);
header( 'Location: ../../index.php?g=medicine&p=unit');