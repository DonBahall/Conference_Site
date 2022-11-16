<?php
require_once 'D:\AMPPS\Ampps\www\application\core\model.php';
include "D:\AMPPS\Ampps\www\application\models\model_conf.php";
$DB = new Model_Conf();
$Title = $_POST['name'];
$id = $_POST['id'];
$data = $DB->select("update `conf` set `Title` = '$Title' where `conf`.`id` = '$id'");
header('location: /', true, 307 );
