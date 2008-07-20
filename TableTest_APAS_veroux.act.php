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
// --- Last modification: Date 21 August 2007 23:21:35 By Laurent GAY ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@veroux
//@PARAM@ 

function TableTest_APAS_veroux($Params)
{
$self=new DBObj_TestValidation_TableTest();
$xfer_result=&new Xfer_Container_Custom("TestValidation","TableTest_APAS_veroux",$Params);
//@CODE_ACTION@

$xfer_result->m_context['test']=1
;

$lbl=new Xfer_Comp_LabelForm('Lbl1');
$lbl->setValue('Veroux');
$lbl->setLocation(0,0);
$xfer_result->addComponent($lbl);

$xfer_result->addAction($self->NewAction('Simple','','verouxSimple',FORMTYPE_MODAL,CLOSE_NO,SELECT_NONE));
$xfer_result->addAction($self->NewAction('Dlg','','verouxDlg',FORMTYPE_MODAL,CLOSE_NO,SELECT_NONE));
$xfer_result->addAction(new Xfer_Action('Fin','close.png','','',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
//@CODE_ACTION@
return $xfer_result->getReponseXML();
}

?>
