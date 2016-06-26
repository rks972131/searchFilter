<?php
include_once("../../include/config.php");
require("../../Processors/class_itemManagerProcessor.php");
$itemObj = new itemManagerController();

$res = $itemObj->getAllItemList();

echo json_encode($res);
?>