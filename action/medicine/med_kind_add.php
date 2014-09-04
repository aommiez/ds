<?php
require_once '../../controller/medicine.php';
MedicineModel::medKindAdd($_POST['kind_name']);
header( 'Location: ../../index.php?g=medicine&p=unit');