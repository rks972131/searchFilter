<?php
include_once("../../include/config.php");
require("../../Processors/class_catagoryManagerProcessor.php");
$itemObj = new catagoryManagerController();

$res = $itemObj->getcatagoryTitle();

echo $res;
?>