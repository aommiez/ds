<?php
require_once 'controller/medicine.php';
$med = MedicineModel::getMedSizeById($_GET['id'])->fetchAll();
?>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=medicine&p=unit'">Back</button>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Medicine Size</span>
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
                <form class="form-horizontal" role="form" method="post" action="action/medicine/med_size_edit.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Medicine Size</label>
                        <div class="col-sm-4">
                            <input type="hidden" name="med_size_id" value="<?php echo $med[0]['id']; ?>">
                            <input type="text" name="med_size_name" value="<?php echo $med[0]['size_name']; ?>" class="form-control" placeholder="Medicine Size Name" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
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