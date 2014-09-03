<?php
require_once 'controller/account.php';
$user = AccountModel::getAccount();
?>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=department&p=index'">Back</button>
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=department&p=index'">Save</button>
<h4 class="page-header">Check User For Department</h4>
<div class="row form-group">
    <div class="col-sm-4">
        <?php
            foreach ($user as $u ) {
                echo <<<HTML
                <div class="checkbox">
                    <label>
                        <input type="checkbox" > {$u['username']}
                        <i class="fa fa-square-o small"></i>
                    </label>
                </div>
HTML;
            }
        ?>
    </div>
</div>