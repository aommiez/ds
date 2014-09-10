<?php
require_once '../../controller/depratment.php';
DepartmentModel::updateUserDep($_POST['dep_id'],$_POST['user']);
header( 'Location: ../../index.php?g=department&p=index');