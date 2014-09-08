<?php
session_start();
require_once '../../controller/account.php';
if ($_POST['username'] == null || $_POST['password'] == null) {
    header("Location: ../../login.php");
} else {
    $res = AccountModel::loginAccount(trim($_POST['username']),trim($_POST['password']))->fetchAll();
    $row = count($res);
    //var_dump($res[0]['COUNT(id)']);
    if ($res[0]['COUNT(id)'] != 0 ) {
        $_SESSION['user'] = trim($_POST['username']);
        $_SESSION['user_id'] = $res[0]['COUNT(id)'];
        header("Location: ../../index.php");
    } else {
        header("Location: ../../login.php");
    }
}