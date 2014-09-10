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
        <!--<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=stock&p=add'">Add Medicine to Stock</button>
        <div id="search" style="display: inline-block;">
            <input type="text" placeholder="search">
        </div>
        <button type="button" class="btn btn-default">Search</button>-->
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Add Medicine to Stock</span>
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
                <form class="form-horizontal" role="form" method="post" action="action/medicine/add.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Medicine Name</label>
                        <div class="col-sm-4">
                            <select id="s2_with_tag"  name="med_name" class="populate placeholder">
                                <?php
                                foreach ($medName as $mn ) {
                                    echo <<<HTML
                                    <option value="{$mn['id']}">{$mn['name']}</option>
HTML;
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">จำนวน</label>
                        <div class="col-sm-4">
                            <input type="text" name="med_value">
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-2">
                            <button type="submit" class="btn btn-primary btn-label-left">
                                <span><i class="fa fa-clock-o"></i></span>
                                Submit
                            </button>
                        </div>
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>