<?php
require_once 'controller/medicine.php';
$medSize = MedicineModel::getMedSize();
$medKind = MedicineModel::getMedKind();
$medPack = MedicineModel::getMedPackaging();
?>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=medicine&p=add_unit_size'">เพิ่มข้อมูลขนาด</button>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=medicine&p=add_unit_kind'">เพิ่มข้อมูลชนิด</button>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=medicine&p=add_unit_packaging'">เพิ่มข้อมูลขนาดบรรจุ</button>
<div class="row">
    <div class="col-xs-12 col-sm-4">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-table"></i>
                    <span>Size Table</span>
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
            <div class="box-content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($medSize as $ms ) {
                            $id = $ms['id'];
                            echo <<<HTML
                        <tr>
                        <td>{$ms['id']}</td>
                        <td>{$ms['size_name']}</td>
                        <td><button type="button" class="btn btn-primary" onclick="window.location.href='index.php?g=medicine&p=edit_unit_size&id={$id}'">Edit</button> <button type="button" class="btn btn-danger" onclick="window.location.href='action/medicine/med_size_del.php?id={$ms['id']}'">Del</button></td>
                    </tr>
HTML;
                        }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-table"></i>
                    <span>Kind Table</span>
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
            <div class="box-content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($medKind as $mk ) {
                        $mkid = $mk['id'];
                        echo <<<HTML
                        <tr>
                        <td>{$mk['id']}</td>
                        <td>{$mk['kind_name']}</td>
                        <td><button type="button" class="btn btn-primary" onclick="window.location.href='index.php?g=medicine&p=edit_unit_kind&id={$mkid}'">Edit</button> <button type="button" class="btn btn-danger" onclick="window.location.href='action/medicine/med_kind_del.php?id={$mkid}'">Del</button></td>
                    </tr>
HTML;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="box ui-draggable ui-droppable">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-table"></i>
                    <span>Packaging Table</span>
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
            <div class="box-content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($medPack as $mp ) {
                        $mpid = $mp['id'];
                        echo <<<HTML
                        <tr>
                        <td>{$mp['id']}</td>
                        <td>{$mp['packaging_name']}</td>
                        <td><button type="button" class="btn btn-primary" onclick="window.location.href='index.php?g=medicine&p=edit_unit_packaging&id={$mpid}'">Edit</button> <button type="button" class="btn btn-danger" onclick="window.location.href='action/medicine/med_packaging_del.php?id={$mpid}'">Del</button></td>
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