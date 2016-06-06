<?php
class contactManager {

	private $contactName_ = "";
	private $contacteMail_ = "";
	private $contactPhone_ = "";
	private $contactSubject_ = "";
	private $contactMessage_ = "";

	function setContactName($val){
		$this->contactName_ = $val;
	}
	function getContactName(){
		return $this->contactName_;
	}
	function setContacteMail($val){
		$this->contacteMail_ = $val;
	}
	function getContacteMail(){
		return $this->contacteMail_;
	}
	function setContactPhone($val){
		$this->contactPhone_ = $val;
	}
	function getContactPhone(){
		return $this->contactPhone_;
	}
	function setContactSubject($val){
		$this->contactSubject_ = $val;
	}
	function getContactSubject(){
		return $this->contactSubject_;
	}
	function setContactMessage($val){
		$this->contactMessage_ = $val;
	}
	function getContactMessage(){
		return $this->contactMessage_;
	}

}
?>