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
// --- Last modification: Date 04 June 2009 21:05:32 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/MachinTable.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Fiche d'un MachinTable
//@PARAM@ 
//@INDEX:MachinTable


//@LOCK:2

function MachinTable_APAS_Fiche($Params)
{
$self=new DBObj_TestValidation_MachinTable();
$MachinTable=getParams($Params,"MachinTable",-1);
if ($MachinTable>=0) $self->get($MachinTable);

$self->lockRecord("MachinTable_APAS_Fiche");
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","MachinTable_APAS_Fiche",$Params);
$xfer_result->Caption="Fiche d'un MachinTable";
$xfer_result->m_context['ORIGINE']="MachinTable_APAS_Fiche";
$xfer_result->m_context['TABLE_NAME']=$self->__table;
$xfer_result->m_context['RECORD_ID']=$self->id;
//@CODE_ACTION@
$xfer_result=$self->show(1,0,$xfer_result);
$xfer_result->addAction($self->newAction("_Modifier", "edit.png", "AddModify", FORMTYPE_MODAL,CLOSE_YES));
$xfer_result->addAction(new Xfer_Action("_Fermer", "close.png"));
//@CODE_ACTION@
	$xfer_result->setCloseAction(new Xfer_Action('unlock','','CORE','UNLOCK',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
}catch(Exception $e) {
	$self->unlockRecord("MachinTable_APAS_Fiche");
	throw $e;
}
return $xfer_result;
}

?>
