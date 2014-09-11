<?php
require_once 'controller/medicine.php';
$medName = MedicineModel::getMedicine();
$medSize = MedicineModel::getMedSize();
$medKind = MedicineModel::getMedKind();
$medPack = MedicineModel::getMedPackaging();
$dep_id = $_GET['id'];
?>
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=stock&p=add&dep_id=<?php echo $dep_id; ?>'">Add Medicine to Stock</button>
        <div id="search" style="display: inline-block;">
            <input type="text" placeholder="search">
        </div>
        <button type="button" class="btn btn-default">Search</button>
    </div>
</div>
