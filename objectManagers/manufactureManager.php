<?php
class manufactureManager{

	private $manf_Id_;
	private $manf_Name_;
	private $manf_contactName_;
	private $manf_contactNumber_;
	private $manf_contactEmail_;
	private $manf_address_;

	function setManfID($val){
		$this->$manf_Id_=$val;
	}
	function getManfID(){
		return $this->manf_Id_;
	}
	function setManfName($val){
		$this->$manf_Name_=$val;
	}
	function getManfName(){
		return $this->manf_Name_;
	}
	function setManfContactName($val){
		$this->$manf_contactName_=$val;
	}
	function getManfContactName(){
		return $this->manf_contactname_;
	}
	function setManfContactNumber($val){
		$this->$manf_contactNumber_=$val;
	}
	function getManfContactNumber(){
		return $this->manf_contactnumber_;
	}
	function setManfContactEmail($val){
		$this->$manf_contactEmail_=$val;
	}
	function getManfContactEmail(){
		return $this->manf_contactEmail_;
	}
	function setManfAddress($val){
		$this->$manf_address_=$val;
	}
	function getManfAddress(){
		return $this->manf_address_;
	}
}
?>