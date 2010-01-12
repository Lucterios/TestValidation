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
// --- Last modification: Date 11 January 2010 21:26:41 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@menuTab
//@PARAM@ 


//@LOCK:0

function menuTab($Params)
{
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","menuTab",$Params);
$xfer_result->Caption="menuTab";
//@CODE_ACTION@
$lab=new Xfer_Comp_LabelForm('title');
$lab->setLocation(0,0);
$lab->setValue('{[center]}{[bold]}{[underline]}Exemple de status{[/underline]}{[/bold]}{[/center]}');
$xfer_result->addComponent($lab);

$lab=new Xfer_Comp_LabelForm('time');
$lab->setLocation(0,1);
$lab->setValue("{[center]}{[italic]}Dernier rafraichissement{[/italic]}{[newline]}".date("D j M Y G:i:s")."{[/center]}");
$xfer_result->addComponent($lab);
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
