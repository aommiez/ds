<?php
require_once '../../controller/account.php';
AccountModel::editAccountById($_POST['id'],$_POST['username'],$_POST['password'],$_POST['level']);
header( 'Location: ../../index.php?g=account&p=index');