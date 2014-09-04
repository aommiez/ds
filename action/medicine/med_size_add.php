<?php
require_once '../../controller/medicine.php';
MedicineModel::medSizeAdd($_POST['med_size']);
header( 'Location: ../../index.php?g=medicine&p=unit');