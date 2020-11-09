<?php
include "./Config/Db.php";
include "./Config/Function.php";
$db = new Mysql();

$list = $db->find("oscshop_access","id=8");
d($list);

echo asJson("this string");
