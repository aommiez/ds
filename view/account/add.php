<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=account&p=index'">Back</button>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Add Account form</span>
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
                <form class="form-horizontal" role="form" action="action/account/add.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-4">
                            <input type="text" name="username" class="form-control" placeholder="Username" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
                        </div>
                        <label class="col-sm-2 control-label">Passwrd</label>
                        <div class="col-sm-4">
                            <input type="text" name="password" class="form-control" placeholder="password" data-toggle="tooltip" data-placement="bottom" title="Tooltip for last name">
                        </div>
                    </div>
                    <div class="form-group has-warning has-feedback">
                        <label class="col-sm-2 control-label">Select Account Level</label>
                        <div class="col-sm-4">
                            <select id="s2_with_tag"  class="populate placeholder" name="level">
                                <option value="1">Admin</option>
                                <option value="2">user</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-2">
                            <button type="submit" class="btn btn-primary btn-label-left">

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