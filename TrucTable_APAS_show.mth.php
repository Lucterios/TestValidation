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
//  // Method file write by SDK tool
// --- Last modification: Date 10 January 2010 13:29:31 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TrucTable.tbl.php');
//@TABLES@

//@DESC@Voir un TrucTable
//@PARAM@ posX
//@PARAM@ posY
//@PARAM@ xfer_result

function TrucTable_APAS_show(&$self,$posX,$posY,$xfer_result)
{
//@CODE_ACTION@
$xfer_result->setDBObject($self,"number",true,$posY++,$posX);
$xfer_result->setDBObject($self,"superTest",true,$posY++,$posX);
$xfer_result->setDBObject($self,"nbMachin",true,$posY++,$posX);
$lbl = new Xfer_Comp_LabelForm("machinlbl");
$lbl->setValue("{[bold]}Machin{[/bold]}");
$lbl->setLocation($posX,$posY++);
$xfer_result->addComponent($lbl);
$machin=$self->getField("machin");
$grid = $machin->getGrid();
$grid->setLocation($posX+1,$posY++);
$xfer_result->addComponent($grid);
return $xfer_result;
//@CODE_ACTION@
}

?>
