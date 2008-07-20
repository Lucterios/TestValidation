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
// --- Last modification: Date 21 August 2007 22:41:09 By Laurent GAY ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@
//@XFER:acknowledge
require_once('CORE/xfer.inc.php');
//@XFER:acknowledge@


//@DESC@verouxSimple
//@PARAM@ SIMPLE
//@INDEX:test

function TableTest_APAS_verouxSimple($Params)
{
if (($ret=checkParams("TestValidation", "TableTest_APAS_verouxSimple",$Params ,"SIMPLE"))!=null)
	return $ret;
$SIMPLE=getParams($Params,"SIMPLE",0);
$self=new DBObj_TestValidation_TableTest();
$test=getParams($Params,"test",-1);
if ($test>=0) $self->get($test);
$xfer_result=&new Xfer_Container_Acknowledge("TestValidation","TableTest_APAS_verouxSimple",$Params);
//@CODE_ACTION@

$xfer_result->m_context['ORIGINE']="TableTest::verouxSimple";
$xfer_result->m_context['TABLE_NAME']=$self->__table;
$xfer_result->m_context['RECORD_ID']=$self->id;
$self->lockRecord("TableTest::verouxSimple")
;
try
{
	sleep(10);
	if ($SIMPLE!=1)
 {
		$xfer_result->message("Verrouyage fini : ".$self->name." - ".$self->lockRecord);
		$xfer_result->setCloseAction(new Xfer_Action('unlock','','CORE','UNLOCK',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
	} else
		$self->unlockRecord("TableTest::verouxSimple");
} catch (Exception $e) {
	$self->unlockRecord("TableTest::verouxSimple");
	throw $e;
}
//@CODE_ACTION@
return $xfer_result->getReponseXML();
}

?>
