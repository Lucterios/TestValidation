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
// --- Last modification: Date 05 May 2009 7:55:09 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/SuperContact.tbl.php');
//@TABLES@
//@XFER:acknowledge
require_once('CORE/xfer.inc.php');
//@XFER:acknowledge@


//@DESC@Supprimer un SuperContact
//@INDEX:SuperContact

//@TRANSACTION:

//@LOCK:2

function SuperContact_APAS_Del($Params)
{
$self=new DBObj_TestValidation_SuperContact();
$SuperContact=getParams($Params,"SuperContact",-1);
if ($SuperContact>=0) $self->get($SuperContact);

$self->lockRecord("SuperContact_APAS_Del");

global $connect;
$connect->begin();
try {
$xfer_result=&new Xfer_Container_Acknowledge("TestValidation","SuperContact_APAS_Del",$Params);
$xfer_result->Caption="Supprimer un SuperContact";
$xfer_result->m_context['ORIGINE']="SuperContact_APAS_Del";
$xfer_result->m_context['TABLE_NAME']=$self->__table;
$xfer_result->m_context['RECORD_ID']=$self->id;
//@CODE_ACTION@
if (($res=$self->canBeDelete())!=0) {
	require_once("CORE/Lucterios_Error.inc.php");
	throw new LucteriosException(IMPORTANT,"Suppression de ".$self->toText()." impossible");
}
if ($xfer_result->confirme("Voulez vous supprimer ".$self->toText()."?"))
	$self->deleteCascade();
//@CODE_ACTION@
	$xfer_result->setCloseAction(new Xfer_Action('unlock','','CORE','UNLOCK',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
	$connect->commit();
}catch(Exception $e) {
	$connect->rollback();
	$self->unlockRecord("SuperContact_APAS_Del");
	throw $e;
}
return $xfer_result;
}

?>
