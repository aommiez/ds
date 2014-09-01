<?php
require_once '../../controller/account.php';
AccountModel::delAccount($_GET['id']);
header( 'Location: ../../index.php?g=account&p=index');