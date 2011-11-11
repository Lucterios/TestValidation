<?php
// Event file write by SDK tool
// --- Last modification: Date 21 October 2011 1:18:32 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@

//@DESC@Evenement relatif au signal 'Exemple de signal' de 'TestValidation'
//@PARAM@ xfer_result
//@PARAM@ Value

function TestValidation_APAS_TEST_SIGNAL(&$xfer_result,$Value)
{
//@CODE_ACTION@
$lab=new Xfer_Comp_LabelForm('time');
$lab->setLocation(0,$xfer_result->getComponentCount());
$lab->setValue("{[center]}{[italic]}Dernier rafraichissement{[/italic]}{[newline]}".$Value."{[/center]}");
$xfer_result->addComponent($lab);
return true;
//@CODE_ACTION@
}

?>
