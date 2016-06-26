<?php
class catagoryManager{
		Private $catagoryId_;
		Private $catagoryTitle_;

		function setCatagoryId($val){
		$this->catagoryId_ = $val;
         }
        function getCatagoryId(){
        return $this->catagoryId_;
         }
         function setCatagoryTitle($val){
		$this->catagoryTitle_ = $val;
         }
        function getCatagoryTitle(){
        return $this->catagoryTitle_;
         }
}

?>