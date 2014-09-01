<div class="row">
    <div class="col-xs-12 col-sm-6">
<button type="button" class="btn btn-default" onclick="window.location.href='index.php?g=medicine&p=add'">Add Medicine</button>
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
                    <span>Medicine Table</span>
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
                        <th>ชื่อวัสดุ/เวชภัณฑ์</th>
                        <th>ขนาด</th>
                        <th>ชนิด</th>
                        <th>ขนาดบรรจุ</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Oracle</td>
                        <td>OracleDB</td>
                        <td>http://oracle.com</td>
                        <td>SQL server</td>
                        <th>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#"> Medicine </a>
                                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                                    <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
                                </ul>
                            </div>
                        </th>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>