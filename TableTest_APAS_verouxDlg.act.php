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
// --- Last modification: Date 21 August 2007 22:39:57 By Laurent GAY ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@verouxDlg
//@PARAM@ 
//@INDEX:test

function TableTest_APAS_verouxDlg($Params)
{
$self=new DBObj_TestValidation_TableTest();
$test=getParams($Params,"test",-1);
if ($test>=0) $self->get($test);
$xfer_result=&new Xfer_Container_Custom("TestValidation","TableTest_APAS_verouxDlg",$Params);
//@CODE_ACTION@
$xfer_result->m_context['ORIGINE']="TableTest::verouxDlg";
$xfer_result->m_context['TABLE_NAME']=$self->__table;
$xfer_result->m_context['RECORD_ID']=$self->id;
$xfer_result->m_context['SIMPLE']=1;
$self->lockRecord("TableTest::verouxDlg");

$xfer_result->setDBObject($self,null,true);

$xfer_result->addAction($self->NewAction('Simple','','verouxSimple',FORMTYPE_MODAL,CLOSE_NO,SELECT_NONE));
$xfer_result->addAction(new Xfer_Action('Fin','close.png','','',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));

$xfer_result->setCloseAction(new Xfer_Action('unlock','','CORE','UNLOCK',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
//@CODE_ACTION@
return $xfer_result->getReponseXML();
}

?>
