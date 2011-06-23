<?php
// Action file write by SDK tool
// --- Last modification: Date 22 June 2011 12:55:17 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:acknowledge
require_once('CORE/xfer.inc.php');
//@XFER:acknowledge@


//@DESC@Fermeture de l'action
//@PARAM@ 


//@LOCK:0

function CloseEvenement($Params)
{
try {
$xfer_result=&new Xfer_Container_Acknowledge("TestValidation","CloseEvenement",$Params);
$xfer_result->Caption="Fermeture de l'action";
//@CODE_ACTION@
$mess="";
foreach($Params as $key=>$val)
	$mess.="$key=>$val{[newline]}";

$xfer_result->message($mess,1);
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
