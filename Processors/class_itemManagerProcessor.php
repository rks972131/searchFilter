<?php
include_once("class_applicationProcessor.php");

class itemManagerController extends applicationController{
	private $itemID;
	private $itemTitle;
	private $itemDescription;
	private $categoryID;
	private $manufcturerID;

	public function getAllItemList(){
		
		$itemquery = "SELECT * FROM ".TABLE_ITEM_MASTER." WHERE 1 = ?";

		$statement = $this->mysqli->prepare($itemquery);

		//$orgReferenceNumber = $obj_maxOrgRef->orgref+1;
		$param2 = 1;
		$statement->bind_param('i', $param2);
		$statement->execute();
		$result = $statement->get_result();
		$statement->close();

		$itemList = array();
		while($rowObj = $result->fetch_object()){
			array_push($itemList,$rowObj);
		}
		return array("itemList"=>$itemList);
	}

	public function getItemDetailsByID($params){
		$idname =$param->getId();
		if($idname){
			$itemquery="SELECT * FROM".TABLE_ITEM_MASTER."WHERE item_id = 1";
		}
		
	}	 

	public function getAllItemsByKeys($params){
		//by key name and value
		$keyname 	= $params->getKeyName();
		$keyvalue 	= $params->getKeyValue();
		$itemquery	= "";

		switch($keyname){
			case "category":
				$itemquery = "SELECT * FROM ".TABLE_ITEM_MASTER." WHERE cat_id = ?";
			break;
			case "manufacturer":
				$itemquery = "SELECT * FROM ".TABLE_ITEM_MASTER." WHERE manf_id = ?";
			break;



		}
	}

	public function addItemDetails($params){
		//details to be Added
		$item_title 		= $params->getItemTitle();
		$itemDescription 	= $params->getItemDescription();
		$categoryID 		= $params->getItemCategory();
		$manufcturerID 		= $params->getItemManufacturer();

		$itemquery =  "INSERT INTO ".TABLE_ITEM_MASTER." SET  item_title = ?, item_description = ?, cat_id = 1, manf_id = 1, i_by = 1, i_date = NOW(),u_by=1 , u_date= NOW()";
		$statement = $this->mysqli->prepare($itemquery);

		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('ssii',$itemTitle, $itemDescription, $categoryID, $manufcturerID);
		$statement->execute();

		$itemID = $statement->inserted_id;
		$statement->close();

		return array("itemID"=>$itemID);
	}

	public function updateItemDetails($params){
		//by key value and details to be updated

		$itemId           = $param->getItemId();
		$item_title		  = $param->getItemTitle();
		$itemDescription  = $param->getItemDescription();
		$categoryID 	  = $param->getItemCategoryID();
		$manufacturerID   = $param->getItemManufactrerID();

		//by key value and details to be update
		$itemUpdateQuery =  "UPDATE ".TABLE_ITEM_MASTER." SET item_title = ?, item_description = ?, cat_id = ?, manf_id = ?, u_by=1 , u_date= NOW() WHERE item_id= ?";
		$updateStatement = $this->mysqli->prepare($itemUpdateQuery);		
		$updateStatement->bind_param('ssiii',$itemTitle, $itemDescription, $categoryID, $manufcturerID, $itemID);
		$updateStatement->execute();
		
		$updateStatement->close();
		
		return array("isUpdated"=>"true");
		
	}

}

?>