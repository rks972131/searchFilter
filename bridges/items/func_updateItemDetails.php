<?php
include_once("../../include/config.php");
require("../../Processors/class_itemManagerProcessor.php");
$itemObj = new itemManagerController();

$res = $itemObj->updateItemDetails();

echo $res;
?>