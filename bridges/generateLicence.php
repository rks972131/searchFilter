<?php

require_once("Processors/billServerController.php");
//echo "002556C2C860";

$arrTemp = array("002556C2C860-v01","086056C2C025-v02","06C25860C025-v03","00255860C6C2-v04","06C25025C860-v05","08605025C6C2-v06");
$OTT 				= $arrTemp[rand(0,5)];
$objContact 		= new billServerController();
$licenceObjMngr 	= new licenceManager();


$licenceObjMngr->setOTTfunction($OTT);
$objContact->generateLicence($licenceObjMngr);



?>