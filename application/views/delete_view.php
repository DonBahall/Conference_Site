<?php
$id = $_GET['id'];
$DB = new Model_Conf();
$data = $DB->select("DELETE FROM `conf` WHERE `conf`.`id` = '$id'");
print_r($id);
header('location: /', true, 307 );
