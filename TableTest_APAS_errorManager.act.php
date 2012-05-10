<?php
// Action file write by SDK tool
// --- Last modification: Date 22 June 2011 13:00:10 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Ecran des erreurs
//@PARAM@ 


//@LOCK:0

function TableTest_APAS_errorManager($Params)
{
$self=new DBObj_TestValidation_TableTest();
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","TableTest_APAS_errorManager",$Params);
$xfer_result->Caption="Ecran des erreurs";
//@CODE_ACTION@
$lbl=new Xfer_Comp_LabelForm('Lbl1');
$lbl->setValue("Type d'erreur:");
$lbl->setLocation(0,1);

$xfer_result->addComponent($lbl);

$slct=new Xfer_Comp_Select('errorType');
$slct->setSelect(array('0'=>'PHP','1'=>'MySQL','2'=>'Critique','3'=>'Grave','4'=>'Important','5'=>'Mineur'));
$slct->setValue('0');
$slct->setAction($act_modif);
$slct->setLocation(1,1);
$xfer_result->addComponent($slct);

$btn= new  Xfer_Comp_Button('btn1');
$btn->setAction($self->NewAction('_Créer',"","ValiderErreur",FORMTYPE_MODAL,CLOSE_NO,SELECT_NONE));
$btn->setLocation(2,1);
$xfer_result->addComponent($btn);

$xfer_result->addAction($self->NewAction("_Fermer","close.png"));
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
