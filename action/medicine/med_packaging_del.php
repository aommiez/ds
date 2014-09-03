<?php
require_once '../../controller/medicine.php';
MedicineModel::delPackaging($_GET['id']);
header( 'Location: ../../index.php?g=medicine&p=unit');