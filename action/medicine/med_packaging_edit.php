<?php
require_once '../../controller/medicine.php';
MedicineModel::editMedPackagingById($_POST['id'],$_POST['packaging_name']);
header( 'Location: ../../index.php?g=medicine&p=unit');