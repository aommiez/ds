<?php
require_once 'controller/medicine.php';
require_once 'controller/stock.php';
$dep_id = $_GET['id'];
$stock = StockModel::getStockByDepId($dep_id);
$medName = MedicineModel::getMedicine();
$medSize = MedicineModel::getMedSize();
$medKind = MedicineModel::getMedKind();
$medPack = MedicineModel::getMedPackaging();
?>
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=stock&p=add&dep_id=<?php echo $dep_id; ?>'">Add Medicine to Stock</button>
        <button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=stock&p=borrow&dep_id=<?php echo $dep_id; ?>'">ยืม</button>
        <button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=stock&p=relate&dep_id=<?php echo $dep_id; ?>'">คืน</button>
        <div id="search" style="display: inline-block;">
            <input type="text" placeholder="search">
        </div>
        <button type="button" class="btn btn-default">Search</button>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-table"></i>
                    <span>Medicine Table</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="no-move"></div>
            </div>
            <div class="box-content no-padding">
                <table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ชื่อวัสดุ/เวชภัณฑ์</th>
                        <th>จำนวน</th>
                        <th>ขนาด</th>
                        <th>ชนิด</th>
                        <th>ขนาดบรรจุ</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($stock as $r) {
                        $mn = MedicineModel::getMedicineById($r['med_id'])->fetchAll();
                        $mn_name = $mn[0]['name'];
                        $ms = MedicineModel::getMedSizeById($mn[0]['size'])->fetchAll();
                        $ms = $ms[0]['size_name'];
                        $mk = MedicineModel::getMedKindById($mn[0]['kind'])->fetchAll();
                        $mk = $mk[0]['kind_name'];
                        $mp = MedicineModel::getMedPackagingById($mn[0]['packaging'])->fetchAll();
                        $mp = $mp[0]['packaging_name'];
                        echo <<<HTML
                        <tr>
                        <td>{$r['id']}</td>
                        <td>{$mn_name}</td>
                        <td>{$r['med_value']}</td>
                        <td>{$r['med_size']} {$ms}</td>
                        <td>{$r['med_kind']} {$mk}</td>
                        <td>{$r['med_packaging']} {$mp}</td>
                        <th>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#"> Medicine </a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?g=stock&p=edit&id={$r['id']}&dep_id={$dep_id}"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                                    <li><a href="action/stock/del.php?id={$r['id']}&dep_id={$dep_id}"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
                                </ul>
                            </div>
                        </th>
                    </tr>
HTML;

                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>