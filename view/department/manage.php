<?php
require_once 'controller/account.php';
require_once 'controller/depratment.php';
$user = AccountModel::getAccount();
?>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=department&p=index'">Back</button>

<h4 class="page-header">Check User For Department</h4>
<div class="row form-group">
    <div class="col-sm-4">
        <form action="action/department/manage_save.php" method="post">
            <input name="dep_id" type="hidden" value="<?php echo $_GET['id'];?>">
            <input type="submit" value="Submit">
        <?php
            foreach ($user as $u ) {
                $res = DepartmentModel::countDepUserByDepIdAndUserId($_GET['id'],$u['id'])->fetchAll();
                if ($res[0]['COUNT(id)'] != 0 ) {
                    echo <<<HTML
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="user[]" value="{$u['id']}" checked> {$u['username']}
                        <i class="fa fa-square-o small"></i>
                    </label>
                </div>
HTML;
                } else {
                    echo <<<HTML
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="user[]" value="{$u['id']}" > {$u['username']}
                        <i class="fa fa-square-o small"></i>
                    </label>
                </div>
HTML;
                }

            }
        ?>
        </form>
    </div>
</div>