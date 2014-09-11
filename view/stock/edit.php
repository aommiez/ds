<?php
require_once 'controller/medicine.php';
require_once 'controller/stock.php';
$dep_id = $_GET['dep_id'];
$stock_id = $_GET['id'];
$stock = StockModel::getStockById($stock_id)->fetchAll();
$stock = $stock[0];

$med = MedicineModel::getMedicineById($stock['med_id'])->fetchAll();
$r = $med[0];
$med_name = $r['name'];
$ms = MedicineModel::getMedSizeById($r['size'])->fetchAll();
$ms = $ms[0]['size_name'];
$mk = MedicineModel::getMedKindById($r['kind'])->fetchAll();
$mk = $mk[0]['kind_name'];
$mp = MedicineModel::getMedPackagingById($r['packaging'])->fetchAll();
$mp = $mp[0]['packaging_name'];
?>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=stock&p=index&id=<?php echo $_GET['dep_id'];?>'">Back</button>
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
                <form class="form-horizontal" role="form" method="post" action="action/stock/edit.php">
                    <input type="hidden" name="dep_id" value="<?php echo $dep_id; ?>">
                    <input type="hidden" name="stock_id" value="<?php echo $stock_id; ?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Medicine Name </label>
                        <div class="col-sm-4">
                            <input name="med_name" value="<?php echo $med_name; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">จำนวน</label>
                        <div class="col-sm-4">
                            <input type="text" name="med_value" value="<?php echo $stock['med_value'];?>">
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">ขนาด</label>
                        <div class="col-sm-4">
                            <input type="text" name="med_size" value="<?php echo $stock['med_size'];?>"> <?php echo $ms; ?>
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">ชนิด</label>
                        <div class="col-sm-4">
                            <input type="text" name="med_kind" value="<?php echo $stock['med_kind'];?>"> <?php echo $mk; ?>
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">ขนาดบรรจุ</label>
                        <div class="col-sm-4">
                            <input type="text" name="med_packaging" value="<?php echo $stock['med_packaging'];?>"> <?php echo $mp; ?>
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