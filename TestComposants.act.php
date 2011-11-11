<?php
// Action file write by SDK tool
// --- Last modification: Date 22 June 2011 12:56:17 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Action de validation des composants
//@PARAM@ edt1='aaa'
//@PARAM@ flt1='3.14'
//@PARAM@ mm1='xyz'
//@PARAM@ dt1='2007-04-23'
//@PARAM@ tm1='12:34:00'
//@PARAM@ ck1='n'
//@PARAM@ slct1='1'
//@PARAM@ flt2='5'
//@PARAM@ cl1='1;2'
//@PARAM@ stm1='2008-07-12 23:47:31'


//@LOCK:0

function TestComposants($Params)
{
$edt1=getParams($Params,"edt1",'aaa');
$flt1=getParams($Params,"flt1",'3.14');
$mm1=getParams($Params,"mm1",'xyz');
$dt1=getParams($Params,"dt1",'2007-04-23');
$tm1=getParams($Params,"tm1",'12:34:00');
$ck1=getParams($Params,"ck1",'n');
$slct1=getParams($Params,"slct1",'1');
$flt2=getParams($Params,"flt2",'5');
$cl1=getParams($Params,"cl1",'1;2');
$stm1=getParams($Params,"stm1",'2008-07-12 23:47:31');
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","TestComposants",$Params);
$xfer_result->Caption="Action de validation des composants";
//@CODE_ACTION@
$xfer_result->Caption='Fiche de controle des composants';

$act_modif=new Xfer_Action('Modifier','','TestValidation','TestComposants',FORMTYPE_REFRESH,CLOSE_NO,SELECT_NONE);

$lbl=new Xfer_Comp_LabelForm('Lbl2');
$lbl->setValue('editeur='.$edt1);
$lbl->setLocation(0,1);
$xfer_result->addComponent($lbl);
$edt=new Xfer_Comp_Edit('edt1');
$edt->setValue($edt1);

$edt->setAction($act_modif);
$edt->setLocation(1,1);

$xfer_result->addComponent($edt);

$lbl=new Xfer_Comp_LabelForm('Lbl3');
$lbl->setValue('Réel='.$flt1);
$lbl->setLocation(0,2);
$xfer_result->addComponent($lbl);
$flt=new Xfer_Comp_Float('flt1');
$flt->setValue($flt1);
$flt->setAction($act_modif);
$flt->setLocation(1,2);
$xfer_result->addComponent($flt);

$lbl=new Xfer_Comp_LabelForm('Lbl4');
$lbl->setValue('Memo='.$mm1);
$lbl->setLocation(0,3);
$xfer_result->addComponent($lbl);
$mm=new Xfer_Comp_Memo('mm1');
$mm->setValue($mm1);
$mm->setAction($act_modif);
$mm->setLocation(1,3);
$xfer_result->addComponent($mm);

$lbl=new Xfer_Comp_LabelForm('Lbl5');
$lbl->setValue('Date='.$dt1);
$lbl->setLocation(0,4);
$xfer_result->addComponent($lbl);
$dt= new Xfer_Comp_Date('dt1');
$dt->setValue($dt1);
$dt->setAction($act_modif);
$dt->setLocation(1,4);
$xfer_result->addComponent($dt);

$lbl=new Xfer_Comp_LabelForm('Lbl6');
$lbl->setValue('Heure='.$tm1);
$lbl->setLocation(0,5);
$xfer_result->addComponent($lbl);
$tm=new  Xfer_Comp_Time('tm1');
$tm->setValue($tm1);
$tm->setAction($act_modif);
$tm->setLocation(1,5);
$xfer_result->addComponent($tm);

$lbl=new Xfer_Comp_LabelForm('Lbl7');
$lbl->setValue('Date Heure='.$stm1);
$lbl->setLocation(0,6);
$xfer_result->addComponent($lbl);
$tm=new  Xfer_Comp_DateTime('stm1');
$tm->setValue($stm1);
$tm->setAction($act_modif);
$tm->setLocation(1,6);
$xfer_result->addComponent($tm);

$lbl=new Xfer_Comp_LabelForm('Lbl8');
$lbl->setValue('Coche='.$ck1);
$lbl->setLocation(0,7);
$xfer_result->addComponent($lbl);
$ck=new Xfer_Comp_Check('ck1');
$ck->setValue($ck1=='o');
$ck->setAction($act_modif);
$ck->setLocation(1,7);
$xfer_result->addComponent($ck);

$lbl=new Xfer_Comp_LabelForm('Lbl9');
$lbl->setValue('Select='.$slct1);
$lbl->setLocation(0,8);
$xfer_result->addComponent($lbl);
$slct=new Xfer_Comp_Select('slct1');
if ($flt2<2)
	$slct->setSelect(array('1'=>'abc','2'=>'def'));
elseif ($flt2<10)
	$slct->setSelect(array('1'=>'abc','2'=>'def','3'=>'ghij'));
else
	$slct->setSelect(array('1'=>'abc','2'=>'def','3'=>'ghij','4'=>'klmn'));
$slct->setValue($slct1);
$slct->setAction($act_modif);
$slct->setLocation(1,8);
$xfer_result->addComponent($slct);

$lbl=new Xfer_Comp_LabelForm('Lbl10');
$lbl->setValue('Entier='.$flt2);
$lbl->setLocation(0,9);
$xfer_result->addComponent($lbl);
$flt=new Xfer_Comp_Float('flt2',0,100,0);
$flt->setValue($flt2);
$flt->setAction($act_modif);
$flt->setLocation(1,9);
$xfer_result->addComponent($flt);

$lbl=new Xfer_Comp_LabelForm('Lbl11');
$lbl->setValue('CheckList='.$cl1);
$lbl->setLocation(0,10);
$xfer_result->addComponent($lbl);
$cl=new Xfer_Comp_CheckList('cl1');
$cl->setSelect(array('1'=>'abc','2'=>'def','3'=>'ghij','4'=>'klmn'));
$cl->setValue(explode(";",$cl1));
$cl->setAction($act_modif);
$cl->setLocation(1,10);
$xfer_result->addComponent($cl);

$lbl=new Xfer_Comp_LabelForm('Lbl12');
$lbl->setValue('Bouton');
$lbl->setLocation(0,20);
$xfer_result->addComponent($lbl);
$btn= new  Xfer_Comp_Button('btn1');
$btn->setAction($act_modif);
$btn->setLocation(1,20);
$xfer_result->addComponent($btn);

$xfer_result->addAction(new Xfer_Action('Fin','close.png','','',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));

$xfer_result->setCloseAction(new Xfer_Action('fermeture','','TestValidation','CloseEvenement',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
