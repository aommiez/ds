<?php
require_once '../../controller/medicine.php';
MedicineModel::editMedSizeById($_POST['med_size_id'],$_POST['med_size_name']);
header( 'Location: ../../index.php?g=medicine&p=unit');