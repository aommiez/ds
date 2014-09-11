<?php
require_once 'controller/medicine.php';
$medName = MedicineModel::getMedicine();
$medSize = MedicineModel::getMedSize();
$medKind = MedicineModel::getMedKind();
$medPack = MedicineModel::getMedPackaging();
$dep_id = $_GET['dep_id'];
$med = MedicineModel::getMedicineById($_GET['med_id'])->fetchAll();
$r = $med[0];
$ms = MedicineModel::getMedSizeById($r['size'])->fetchAll();
$ms = $ms[0]['size_name'];
$mk = MedicineModel::getMedKindById($r['kind'])->fetchAll();
$mk = $mk[0]['kind_name'];
$mp = MedicineModel::getMedPackagingById($r['packaging'])->fetchAll();
$mp = $mp[0]['packaging_name'];
?>
<script type="application/javascript">
    function medCg () {
        var med_id = $('select[name="med_name"]').val();
        var dep_id = <?php echo $dep_id; ?>;
        Redirect("index.php?g=stock&p=add&dep_id="+ dep_id +"&med_id="+med_id);
    }
    function Redirect (url) {
        var ua        = navigator.userAgent.toLowerCase(),
            isIE      = ua.indexOf('msie') !== -1,
            version   = parseInt(ua.substr(4, 2), 10);

        // IE8 and lower
        if (isIE && version < 9) {
            var link = document.createElement('a');
            link.href = url;
            document.body.appendChild(link);
            link.click();
        }

        // All other browsers
        else { window.location.replace(url); }
    }
</script>
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
                <form class="form-horizontal" role="form" method="post" action="action/stock/add.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Medicine Name </label>
                        <div class="col-sm-4">
                            <select id="s2_with_tag"  name="med_name" class="populate placeholder" onchange="medCg()">
                                <option value="0">เลือกยา</option>
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
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">ขนาด</label>
                        <div class="col-sm-4">
                            <input type="text" name="med_size"> <?php echo $ms; ?>
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">ชนิด</label>
                        <div class="col-sm-4">
                            <input type="text" name="med_kind"> <?php echo $mk; ?>
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">ขนาดบรรจุ</label>
                        <div class="col-sm-4">
                            <input type="text" name="med_packaging"> <?php echo $mp; ?>
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