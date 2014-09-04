<?php
require_once '../../controller/medicine.php';
MedicineModel::delKind($_GET['id']);
header( 'Location: ../../index.php?g=medicine&p=unit');