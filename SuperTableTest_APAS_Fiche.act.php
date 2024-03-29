<?php
// 	This file is part of Diacamma, a software developped by "Le Sanglier du Libre" (http://www.sd-libre.fr)
// 	Thanks to have payed a retribution for using this module.
// 
// 	Diacamma is free software; you can redistribute it and/or modify
// 	it under the terms of the GNU General Public License as published by
// 	the Free Software Foundation; either version 2 of the License, or
// 	(at your option) any later version.
// 
// 	Diacamma is distributed in the hope that it will be useful,
// 	but WITHOUT ANY WARRANTY; without even the implied warranty of
// 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// 	GNU General Public License for more details.
// 
// 	You should have received a copy of the GNU General Public License
// 	along with Lucterios; if not, write to the Free Software
// 	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
// 
// 		Contributeurs: Fanny ALLEAUME, Pierre-Olivier VERSCHOORE, Laurent GAY
// Action file write by SDK tool
// --- Last modification: Date 14 November 2011 23:47:36 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Fiche d'un SuperTableTest
//@PARAM@ 
//@INDEX:SuperTableTest


//@LOCK:2

function SuperTableTest_APAS_Fiche($Params)
{
$self=new DBObj_TestValidation_SuperTableTest();
$SuperTableTest=getParams($Params,"SuperTableTest",-1);
if ($SuperTableTest>=0) $self->get($SuperTableTest);

$self->lockRecord("SuperTableTest_APAS_Fiche");
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","SuperTableTest_APAS_Fiche",$Params);
$xfer_result->Caption="Fiche d'un SuperTableTest";
$xfer_result->m_context['ORIGINE']="SuperTableTest_APAS_Fiche";
$xfer_result->m_context['TABLE_NAME']=$self->__table;
$xfer_result->m_context['RECORD_ID']=$self->id;
//@CODE_ACTION@
$xfer_result=$self->show(1,0,$xfer_result);
$xfer_result->addAction($self->NewAction('edit','edit.png','AddModify',FORMTYPE_MODAL,CLOSE_YES));
$xfer_result->addAction($self->NewAction('_envoyer','extensions/org_lucterios_contacts/images/sendmail.png','SendMail',FORMTYPE_MODAL,CLOSE_NO));
$xfer_result->addAction(new Xfer_Action("_Fermer", "close.png"));
//@CODE_ACTION@
	$xfer_result->setCloseAction(new Xfer_Action('unlock','','CORE','UNLOCK',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
}catch(Exception $e) {
	$self->unlockRecord("SuperTableTest_APAS_Fiche");
	throw $e;
}
return $xfer_result;
}

?>
