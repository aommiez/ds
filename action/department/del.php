<?php
require_once '../../controller/depratment.php';
DepartmentModel::delDep($_GET['id']);
header( 'Location: ../../index.php?g=department&p=index');