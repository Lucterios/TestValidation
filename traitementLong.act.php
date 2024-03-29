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
// --- Last modification: Date 14 July 2009 16:35:26 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:acknowledge
require_once('CORE/xfer.inc.php');
//@XFER:acknowledge@


//@DESC@Traitement long
//@PARAM@ 


//@LOCK:0

function traitementLong($Params)
{
try {
$xfer_result=&new Xfer_Container_Acknowledge("TestValidation","traitementLong",$Params);
$xfer_result->Caption="Traitement long";
//@CODE_ACTION@
if($xfer_result->traitment("image.png","Message pour patienter...","Traitement fini!")) {
	// sleep for 10 seconds
	sleep(5);
	$val=rand(1,100);
	$xfer_result->traitment[2]="{[center]}Result final:{[newline]}{[/center]} -> $val schtroupfs";
}
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
