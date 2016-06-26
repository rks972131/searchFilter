<?php
include_once("class_applicationProcessor.php");

class catagoryManagerController extends applicationController{
     private $catagoryID;
     private $catagoryTitle;

     public function getcatagoryId($params){
     	$idname =$param->getId();
		if($idname){
			$itemquery="SELECT * FROM".TABLE_CATEGORY_MASTER."WHERE cat_id = ?";
		}

     }
    public function getcatagoryTitle($params){
    	$itemquery = "SELECT * FROM".TABLE_CATEGORY_MASTER."WHERE cat_title=?";
    	$statement = $this->mysqli->prepare($itemquery);

    	$statement->bind_param('s', abc);
    	$statement->execute();
		$result = $statement->get_result();
		$statement->close();

		$itemList = array();
		while($rowObj = $result->fetch_object()){
			array_push($itemList,$rowObj);
		}
		return array("itemList"=>$itemList);

		}
	}

?>