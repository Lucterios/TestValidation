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
// --- Last modification: Date 02 March 2011 19:10:27 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
//@TABLES@
//@XFER:print
require_once('CORE/xfer_printing.inc.php');
//@XFER:print@


//@DESC@Impression
//@PARAM@ 
//@INDEX:SuperTableTest


//@LOCK:0

function SuperTableTest_APAS_print($Params)
{
$self=new DBObj_TestValidation_SuperTableTest();
$SuperTableTest=getParams($Params,"SuperTableTest",-1);
if ($SuperTableTest>=0) $self->get($SuperTableTest);
try {
$xfer_result=&new Xfer_Container_Print("TestValidation","SuperTableTest_APAS_print",$Params);
$xfer_result->Caption="Impression";
//@CODE_ACTION@
$xfer_result->withTextExport=1;
if ($xfer_result->showSelector(0)) {
	$self->PrintReport($xfer_result,"rapport","Rapport",WRITE_MODE_WRITE,$self->id);
}
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
