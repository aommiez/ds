<?php
require_once '../../controller/depratment.php';

if (empty($_POST['dep_name'])) {
    header( 'Location: ../../index.php?g=department&p=add');
} else {
    $dep_name = $_POST['dep_name'];
    $dep_root = trim($_POST['dep_root']);
    DepartmentModel::addDep($dep_name,  $dep_root);
    header( 'Location: ../../index.php?g=department&p=index');
}