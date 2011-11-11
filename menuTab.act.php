<?php
// Action file write by SDK tool
// --- Last modification: Date 21 October 2011 1:53:40 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@menuTab
//@PARAM@ 


//@LOCK:0

function menuTab($Params)
{
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","menuTab",$Params);
$xfer_result->Caption="menuTab";
//@CODE_ACTION@
global $SECURITY_LOCK;
if ($SECURITY_LOCK->isLock()==0) {
	$lab=new Xfer_Comp_LabelForm('title');
	$lab->setLocation(0,0);
	$lab->setValue('{[center]}{[bold]}{[underline]}Exemple de status{[/underline]}{[/bold]}{[/center]}');
	$xfer_result->addComponent($lab);

	$signalRet=$xfer_result->signal("TEST_SIGNAL",$xfer_result,date("D j M Y G:i:s"));
	echo "<!-- signalRet=".print_r($signalRet,true)." -->\n";
}
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
