<?php
class orgManager {

	private $orgID_ = "";
	private $orgName_ = "";
	private $orgOwner_ = "";
	private $orgOwnerPhone_ = "";
	private $orgOwnerMailID_ = "";
	private $orgBusinessType_ = "";
	private $orgLicenceDuration_ = "";
	private $licenceAsceptance_ = "";
	private $orgrefNumber_ = "";



	function setOrgID($val){
		$this->orgID_ = $val;
	}
	function getOrgID(){
		return $this->orgID_;
	}
	function setOrgName($val){
		$this->orgName_ = $val;
	}
	function getOrgName(){
		return $this->orgName_;
	}
	function setOrgOwner($val){
		$this->orgOwner_ = $val;
	}
	function getOrgOwner(){
		return $this->orgOwner_;
	}
	function setOrgOwnerPhone($val){
		$this->orgOwnerPhone_ = $val;
	}
	function getOrgOwnerPhone(){
		return $this->orgOwnerPhone_;
	}
	function setOrgOwnerMailID($val){
		$this->orgOwnerMailID_ = $val;
	}
	function getOrgOwnerMailID(){
		return $this->orgOwnerMailID_;
	}
	function setOrgBusinessType($val){
		$this->orgBusinessType_ = $val;
	}
	function getOrgBusinessType(){
		return $this->orgBusinessType_;
	}
	function setOrgLicenceDuration($val){
		$this->orgLicenceDuration_ = $val;
	}
	function getOrgLicenceDuration(){
		return $this->orgLicenceDuration_;
	}
	function setLicenceAcseptance($val){
		$this->licenceAsceptance_ = $val;
	}
	function getLicenceAcseptance(){
		return $this->licenceAsceptance_;
	}
	function setOrgReferenceNumber($val){
		$this->orgrefNumber_ = $val;
	}
	function getOrgReferenceNumber(){
		return $this->orgrefNumber_;
	}

}


class licenceManager extends orgManager{

	private $licenceNumber_ = "";
	private $licenceForDevice_ = "";
	private $licenceActivationDate_ = "";
	private $licenceActiveDays_ = "";
	private $licenceStatus_ = "";
	private $OTTNumber_ = "";

	function setLicenceNumber($val){
		$this->licenceNumber_ = $val;
	}
	function getLicenceNumber(){
		return $this->licenceNumber_;
	}
	function setLicenceForDevice($val){
		$this->licenceForDevice_ = $val;
	}
	function getLicenceForDevice(){
		return $this->licenceForDevice_;
	}
	function setLicenceActivationDate($val){
		$this->licenceActivationDate_ = $val;
	}
	function getLicenceActivationDate(){
		return $this->licenceActivationDate_;
	}
	function setLicenceActiveDays($val){
		$this->licenceActiveDays_ = $val;
	}
	function getLicenceActiveDays(){
		return $this->licenceActiveDays_;
	}
	function setLicenceStatus($val){
		$this->licenceStatus_ = $val;
	}
	function getLicenceStatus(){
		return $this->licenceStatus_;
	}
	function setOTTfunction($val){
		$this->OTTNumber_ = $val;
	}
	function getOTTfunction(){
		return $this->OTTNumber_;
	}	
}
?>