<?php
require_once 'controller/account.php';
$account = AccountModel::getAccount();

?>
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=account&p=add'">Add Acount</button>
        <div id="search" style="display: inline-block;">
            <input type="text" placeholder="search">
        </div>
        <button type="button" class="btn btn-default"  >Search</button>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-table"></i>
                    <span>Account Table</span>
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
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (AccountModel::getAccount() as $r) {
                        if ($r['levels'] == 1 ) {
                            $l = "Admin";
                        } else {
                            $l = "User";
                        }
                        echo <<<HTML
                        <tr>
                        <td>{$r['id']}</td>
                        <td>{$r['username']}</td>
                        <td>{$r['password']}</td>
                        <td>{$l}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?g=account&p=edit&id={$r['id']}"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                                    <li><a href="action/account/del.php?id={$r['id']}"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
                                    <li><a href="#"><i class="fa fa-ban fa-fw"></i> Disable</a></li>
                                </ul>
                            </div>
                        </td>
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
