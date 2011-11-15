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
// --- Last modification: Date 15 November 2011 0:17:02 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/org_lucterios_contacts/personneAbstraite.tbl.php');
require_once('extensions/org_lucterios_contacts/personneMorale.tbl.php');
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Envoyer par courriel
//@PARAM@ 
//@INDEX:SuperTableTest


//@LOCK:0

function SuperTableTest_APAS_SendMail($Params)
{
$self=new DBObj_TestValidation_SuperTableTest();
$SuperTableTest=getParams($Params,"SuperTableTest",-1);
if ($SuperTableTest>=0) $self->get($SuperTableTest);
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","SuperTableTest_APAS_SendMail",$Params);
$xfer_result->Caption="Envoyer par courriel";
//@CODE_ACTION@
$DBMoral=new DBObj_org_lucterios_contacts_personneMorale;
$DBMoral->get(1);
$DBMoral->prepareSendReport($xfer_result, "SuperTableTest_APAS_rapport","Rapport",1,$self->id, 'rapport.pdf', "Ci-joint, votre rapport{[newline]}Salutations{[newline]}");
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
