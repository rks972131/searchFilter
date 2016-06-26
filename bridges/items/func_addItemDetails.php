<?php
include_once("../../include/config.php");
require("../../Processors/class_itemManagerProcessor.php");
require("../../objectManagers/itemManager.php");

if(isset($_REQUEST['formsubmit'])&& $_REQUEST['formsubmit']==1)
{
	$item_tittle        = $_REQUSET['itemTitle'];
	$itemDescription 	= $_REQUEST['itemdesc'];
	$catagoryID			= $_REQUEST['catagoryId'];
	$manufcturerID 		= $_REQUEST['manfid'];
}

$manageItem = new itemManager();
$itemObj = new itemManagerController();

        $manageItem->setItemTitel($item_tittle);
		$manageItem->setItemDescription($itemDescription);
		$manageItem->setItemCategory($catagoryID);
		$manageItem->setItemManufacturer($manufcturerID);

$res = $itemObj->addItemDetails($manageItem);

echo $res;
?>