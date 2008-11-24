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
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Lister des TrucTable


//@LOCK:0

function TrucTable_APAS_List($Params)
{
$self=new DBObj_TestValidation_TrucTable();
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","TrucTable_APAS_List",$Params);
$xfer_result->Caption="Lister des TrucTable";
//@CODE_ACTION@
$lbl=new  Xfer_Comp_LabelForm("titre");
$lbl->setLocation(0,0,2);
$xfer_result->addComponent($lbl);
	$lbl->setValue("{[center]}{[bold]}Lister des TrucTable{[/bold]}{[/center]}");
	$self->find();
$grid = $self->getGrid("TrucTable");
$grid->setLocation(0,1,2);
$xfer_result->addComponent($grid);
$lbl=new Xfer_Comp_LabelForm("nb");
$lbl->setLocation(0, 2,2);
$lbl->setValue("Nombre affichés : ".count($grid->m_records));
$xfer_result->addComponent($lbl);
$xfer_result->addAction(new Xfer_Action("_Fermer", "close.png"));
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
