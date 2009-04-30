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
// --- Last modification: Date 29 April 2009 23:15:38 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@
//@XFER:acknowledge
require_once('CORE/xfer.inc.php');
//@XFER:acknowledge@


//@DESC@Valider
//@PARAM@ Option
//@PARAM@ Error
//@PARAM@ List


//@LOCK:0

function TableTest_APAS_valider($Params)
{
if (($ret=checkParams("TestValidation", "TableTest_APAS_valider",$Params ,"Option","Error","List"))!=null)
	return $ret;
$Option=getParams($Params,"Option",0);
$Error=getParams($Params,"Error",0);
$List=getParams($Params,"List",0);
$self=new DBObj_TestValidation_TableTest();
try {
$xfer_result=&new Xfer_Container_Acknowledge("TestValidation","TableTest_APAS_valider",$Params);
$xfer_result->Caption="Valider";
//@CODE_ACTION@
global $connect;
$connect->begin();
try {
	if ($Option=='n')
		$self->get($List);
	$self->setFrom($Params);
	$self->update();

	if ($Error=='o')
		throw new LucteriosException(CRITIC,"Grosse erreur");
	$connect->commit();
}
catch(Exception $e) {
	$connect->rollback();
	throw $e;
}
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
