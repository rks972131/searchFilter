<?php
class itemManager {

	private $itemID_;
	private $itemTitle_;
	private $itemDescription_;
	private $categoryID_;
	private $manufcturerID_;	
	private $key_;
	private $keyVal_;

	function setItemID($val){
		$this->itemID_ = $val;
	}
	function getItemID(){
		return $this->itemID_;
	}

	function setItemTitel($val){
		$this->itemTitle_ = $val;
	}
	function getItemTitle(){
		return $this->itemTitle_;
	}
	
	function setItemDescription($val){
		$this->itemDescription_ = $val;
	}
	function getItemDescription(){
		return $this->itemDescription_;
	}
	function setItemCategoryID($val){
		$this->categoryID_ = $val;
	}
	function getItemCategoryID(){
		return $this->categoryID_;
	}
	function setItemManufactrerID($val){
		$this->manufcturerID_ = $val;
	}
	function getItemManufactrerID(){
		return $this->manufcturerID_;
	}
	
	function setKeyName($val){
		$this->key_ = $val;
	}
	function getKeyName(){
		return $this->key_;
	}
	
	function setKeyValue($val){
		$this->keyVal_ = $val;
	}
	function getKeyValue(){
		return $this->keyVal_;
	}	

}


?>