<?php
require_once '../../controller/medicine.php';
MedicineModel::medPackagingAdd($_POST['packaging_name']);
header( 'Location: ../../index.php?g=medicine&p=unit');