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
// --- Last modification: Date 23 November 2008 12:51:03 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TrucTable.tbl.php');
//@TABLES@
//@XFER:acknowledge
require_once('CORE/xfer.inc.php');
//@XFER:acknowledge@


//@DESC@Valider un TrucTable
//@PARAM@ TrucTable=

//@TRANSACTION:

//@LOCK:2

function TrucTable_APAS_AddModifyAct($Params)
{
$TrucTable=getParams($Params,"TrucTable");
$self=new DBObj_TestValidation_TrucTable();

$self->lockRecord("TrucTable_APAS_AddModifyAct");

global $connect;
$connect->begin();
try {
$xfer_result=&new Xfer_Container_Acknowledge("TestValidation","TrucTable_APAS_AddModifyAct",$Params);
$xfer_result->Caption="Valider un TrucTable";
$xfer_result->m_context['ORIGINE']="TrucTable_APAS_AddModifyAct";
$xfer_result->m_context['TABLE_NAME']=$self->__table;
$xfer_result->m_context['RECORD_ID']=$self->id;
//@CODE_ACTION@
if($TrucTable>0)
	$find=$self->get($TrucTable);
$self->setFrom($Params);
if ($find)
	$self->update();
else
	$self->insert();
if (TrucTable<=0)
{
  $xfer_result->m_context=array("TrucTable"=>$self->id);
  $xfer_result->redirectAction($self->NewAction("editer","","Fiche"));
}
//@CODE_ACTION@
	$xfer_result->setCloseAction(new Xfer_Action('unlock','','CORE','UNLOCK',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
	$connect->commit();
}catch(Exception $e) {
	$connect->rollback();
	$self->unlockRecord("TrucTable_APAS_AddModifyAct");
	throw $e;
}
return $xfer_result;
}

?>
