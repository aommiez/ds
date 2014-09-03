<?php
require_once 'controller/depratment.php';
$dep = DepartmentModel::getDepById($_GET['id'])->fetchAll();
if ( $dep[0]['dep_root'] == 0 ) {
    $dep_root = "Root";
} else {
    $depp = DepartmentModel::getDepById($dep[0]['dep_root'])->fetchAll();
    $dep_root = $depp[0]['dep_name'];
}


?>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=department&p=index'">Back</button>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Add Department form</span>
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
                <form class="form-horizontal" role="form" method="post" action="action/department/add.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Department Name</label>
                        <div class="col-sm-4">
                            <input type="hidden" value="<?php echo $dep[0]['id']; ?>" name="dep_id">
                            <input type="text" name="dep_name" value="<?php echo $dep[0]['dep_name']; ?>" class="form-control" placeholder="Department Name" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
                        </div>
                    </div>
                    <div class="form-group  has-feedback">
                        <label class="col-sm-2 control-label">Select Root Dep</label>
                        <div class="col-sm-4">
                            <select id="s2_with_tag" name="dep_root"  class="populate placeholder">
                                <option value="0">root</option>
                                <?php
                                echo <<<HTML
                                <option value="{$dep[0]['dep_root']}" selected>{$dep_root}</option>
HTML;
                                foreach (DepartmentModel::getDep() as $d ) {
                                    echo <<<HTML
                                    <option value="{$d['id']}">{$d['dep_name']}</option>
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