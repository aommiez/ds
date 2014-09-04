<?php
require_once '../../controller/depratment.php';
DepartmentModel::editDepById($_POST['dep_id'],$_POST['dep_name'],$_POST['dep_root']);
header( 'Location: ../../index.php?g=department&p=index');