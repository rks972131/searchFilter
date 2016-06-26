<?php
class applicationController {
	protected $mysqli;
	protected $encOTT;

	public function __construct(){
		$this->dbConnection();
	}
	public function isAuthenticated($params){
		if(!empty($_COOKIE['authID'])){
			if($this->getauthID() == $_SESSION['userID'])
			return true;
		}
	}
	private function dbConnection(){
		$this->mysqli = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);
	}
	private function getauthID(){
		// decode the ID from $_COOKIE['authID'] and return the ID.
	}
	private function geneateAuthID(){
		
	}
	private function getTNL(){
		// get the Token Num Logic from OTT
		$tempArr 	= array();
		$token 		= $this->encOTT;
		$tempArr 	= explode("-",$token);
		$tempArr 	= array("pos"=>str_replace("v", "", strtolower($tempArr[1])),"token"=>strtolower($tempArr[0]),"key"=>"");
		return $tempArr;
	}
	protected function getDeviceDetails(){
		
		$arrTNL = $this->getTNL();
		$tmpOTT = $arrTNL["token"];

echo "Original Passed Token Number : ".$tmpOTT;
echo "encryption Type : ". $arrTNL['pos'];

$pos1 = substr($tmpOTT, 1, 3);
$pos2 = substr($tmpOTT, 5, 3);
$pos3 = substr($tmpOTT, 9, 3);

str_replace($pos1, replace, subject);
echo "<br/> pos 1 : --- ".$pos1 ." ---<br/>";
echo "<br/> pos 1 : --- ".$pos2 ." ---<br/>";
echo "<br/> pos 1 : --- ".$pos3 ." ---<br/>";

		switch($arrTNL['pos']){
			case "01":
				//str_replace($arrTNL['key'], "", $tmpOTT);

			break;
			case "02":
					$pos1 = substr($tmpOTT, 1, 3);
					$pos2 = substr($tmpOTT, 5, 3);
					$pos3 = substr($tmpOTT, 9, 3);
					echo str_replace($pos1, '###', $tmpOTT);
			break;
			case "03":
				

			break;
			case "04":

			break;
			case "05":

			break;
			case "06":

			break;
			case 7:

			break;
			case 8:

			break;
			case 9:

			break;
			default:
				str_replace($arrTNL['key'], "", $tmpOTT);
			break;

		}
		return ;
	}
}

?>