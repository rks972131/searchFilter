<?php
require("applicationController.php");
	
/*$cc = 'my secret text';
$key = 'my secret key';
$iv = '12345678';

$cipher = mcrypt_module_open(MCRYPT_BLOWFISH,'','cbc','');

mcrypt_generic_init($cipher, $key, $iv);
$encrypted = mcrypt_generic($cipher,$cc);
mcrypt_generic_deinit($cipher);

mcrypt_generic_init($cipher, $key, $iv);
$decrypted = mdecrypt_generic($cipher,$encrypted);
mcrypt_generic_deinit($cipher);

echo "encrypted : ".$encrypted;
echo "<br>";
echo "decrypted : ".$decrypted;

	echo "<br/>".base64_encode("abhinaya");
*/
class billServerController extends applicationController {

	private function __controller(){

	}
	public function registerOrganisation($params){

		$orgName 						= $params->getOrgName();
		$orgOwnerName 					= $params->getOrgOwner();
		$orgContactPhone				= $params->getOrgOwnerPhone();
		$orgEmail						= $params->getOrgOwnerMailID();
		$orgBusinessType 				= $params->getOrgBusinessType();
		$orgLiceneceDuration 			= $params->getOrgLicenceDuration();
		$licenceAcesptance 				= $params->getLicenceAcseptance();

		// insert organization data.
		$sql_Insert_org =  "INSERT INTO ".TABLE_ORGANIZATION_MASTER." SET buz_id = ?, org_name = ?, org_owner = ?, org_email = ?, org_phone = ?, org_status = 1, i_date = NOW()";
		$statement = $this->mysqli->prepare($sql_Insert_org);

		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('issss', $orgBusinessType, $orgName, $orgOwnerName, $orgEmail, $orgContactPhone);
		$statement->execute();

		$insertID = $statement->insert_id;
		$statement->close();

		//	 TO GET LAST ORGANZATION REFERENCE NUMBER.
		$sql_maxOrgRef =  "SELECT MAX(org_ref) AS orgref FROM ".TABLE_ORGANIZATION_MASTER;
		$res_maxOrgRef = $this->mysqli->query($sql_maxOrgRef);		
		$obj_maxOrgRef = mysqli_fetch_object($res_maxOrgRef);

		//updating the organization reference number to the recentlyinserted record.
		$sql_update_orgref =  "UPDATE ".TABLE_ORGANIZATION_MASTER." SET org_ref = ? WHERE org_id = ?";
		$Ustatement = $this->mysqli->prepare($sql_update_orgref);

		$orgReferenceNumber = $obj_maxOrgRef->orgref+1;
		
		$Ustatement->bind_param('ii', $orgReferenceNumber, $insertID);
		$Ustatement->execute();
		$Ustatement->close();

	}
	public function contactUs($params){

		$contName 						= $params->getContactName();
		$contEmail 						= $params->getContacteMail();
		$contPhone						= $params->getContactPhone();
		$enqContSubj					= $params->getContactSubject();
		$enqMsg 						= $params->getContactMessage();

		$enq_detail = (empty($enqMsg))?"Client wanted to Contact You BillServer":$enqMsg;
				
		//$sql_Insert_cont =  "INSERT INTO ".TABLE_CONTACT_MASTER." SET contact_name = '".$contName."', contact_email = '".$contEmail."', cont_phone = '".$contPhone."', enq_detail = '".$enq_detail."', i_date = NOW()";
		//$res = $this->mysqli->query($sql_Insert_cont);		

		$sql_Insert_cont =  "INSERT INTO ".TABLE_CONTACT_MASTER." SET contact_name = ?, contact_email = ?, cont_phone = ?, enq_detail = ?, i_date = NOW()";
		$statement = $this->mysqli->prepare($sql_Insert_cont);

		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('ssss', $contName, $contEmail, $contPhone, $enq_detail);
		$statement->execute();
		$statement->close();

	}
	public function generateLicence($params){
		
		$orgRefNum 			= $params->getOrgReferenceNumber();
		$encOTT				= $params->getOTTfunction(); // One time token generated in the Desktop Application
		$this->encOTT 		= $encOTT;
		echo " \t\t Devic Number : ".$devicenum			= $this->getDeviceDetails();

		// insert the licence in to the table with licence status 0(initals) 
		//licence status codes 0-> generated, 1-> active, 2-> Used Licence, 3-> expired

		//send licence number to mail of organization registered mailID.
	}
}


?>