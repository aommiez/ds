<?php
require_once '../../controller/account.php';
if (empty($_POST['username']) || empty($_POST['password'])) {
    header( 'Location: ../../index.php?g=account&p=add');
} else {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $level = trim($_POST['level']);
    AccountModel::addAccount($username,$password,$level);
    header( 'Location: ../../index.php?g=account&p=index');
}
