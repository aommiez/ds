<?php
require_once 'controller/medicine.php';
$medSize = MedicineModel::getMedSize();
$medKind = MedicineModel::getMedKind();
$medPack = MedicineModel::getMedPackaging();
?>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=medicine&p=index'">Back</button>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Add Medicine form</span>
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
                            <input type="text" name="med_name" class="form-control" placeholder="Medicine Name" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">ขนาด</label>
                        <div class="col-sm-4">
                            <select id="s2_with_tag"  name="med_size" class="populate placeholder">
                            <?php
                                foreach ($medSize as $ms ) {
                                    echo <<<HTML
                                    <option value="{$ms['id']}">{$ms['size_name']}</option>
HTML;
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">ชนิด</label>
                        <div class="col-sm-4">
                            <select id="s2_with_tag" name="med_kind" class="populate placeholder">
                                <?php
                                foreach ($medKind as $mk ) {
                                    echo <<<HTML
                                    <option value="{$mk['id']}">{$mk['kind_name']}</option>
HTML;
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">ขนาดบรรจุ</label>
                        <div class="col-sm-4">
                            <select id="s2_with_tag"  name="med_packaging"class="populate placeholder">
                                <?php
                                foreach ($medPack as $mp ) {
                                    echo <<<HTML
                                    <option value="{$mp['id']}">{$mp['packaging_name']}</option>
HTML;
                                }
                                ?>
                            </select>
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