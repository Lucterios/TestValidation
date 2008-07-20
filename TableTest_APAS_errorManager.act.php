<?php
// 
//     This file is part of Lucterios.
// 
//     Lucterios is free software; you can redistribute it and/or modify
//     it under the terms of the GNU General Public License as published by
//     the Free Software Foundation; either version 2 of the License, or
//     (at your option) any later version.
// 
//     Lucterios is distributed in the hope that it will be useful,
//     but WITHOUT ANY WARRANTY; without even the implied warranty of
//     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//     GNU General Public License for more details.
// 
//     You should have received a copy of the GNU General Public License
//     along with Lucterios; if not, write to the Free Software
//     Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
// 
// 	Contributeurs: Fanny ALLEAUME, Pierre-Olivier VERSCHOORE, Laurent GAY
//  // Action file write by SDK tool
// --- Last modification: Date 02 August 2007 17:11:41 By Laurent GAY ---

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

function TableTest_APAS_errorManager($Params)
{
$self=new DBObj_TestValidation_TableTest();
$xfer_result=&new Xfer_Container_Custom("TestValidation","TableTest_APAS_errorManager",$Params);
//@CODE_ACTION@

$lbl=new Xfer_Comp_LabelForm('Lbl1');
$lbl->setValue("Type d'erreur:");
$lbl->setLocation(0,1);

$xfer_result->addComponent($lbl);

$slct=new Xfer_Comp_Select('errorType');
$slct->setSelect(array('0'=>'PHP','1'=>'Critique','2'=>'Grave','3'=>'Important','4'=>'Mineur'));
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
return $xfer_result->getReponseXML();
}

?>
