<?php
require_once '../../controller/medicine.php';
MedicineModel::delMedSize($_GET['id']);
header( 'Location: ../../index.php?g=medicine&p=unit');