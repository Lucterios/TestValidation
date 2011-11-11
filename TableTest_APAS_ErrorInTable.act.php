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
// --- Last modification: Date 29 April 2009 23:35:24 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Erreurs en Base
//@PARAM@ 


//@LOCK:0

function TableTest_APAS_ErrorInTable($Params)
{
$self=new DBObj_TestValidation_TableTest();
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","TableTest_APAS_ErrorInTable",$Params);
$xfer_result->Caption="Erreurs en Base";
//@CODE_ACTION@
list($usec, $sec) = explode(" ", microtime());

$self->find();
$grid = $self->getGrid("TableTest");
$grid->addAction($self->newAction("_Ajouter", "add.png", "ajouter", FORMTYPE_MODAL, CLOSE_NO, SELECT_NONE));
$grid->addAction($self->newAction("_Editer", "edit.png", "editer", FORMTYPE_MODAL, CLOSE_NO, SELECT_SINGLE));
$grid->addAction($self->newAction("_Suppr.", "del.png", "suppr", FORMTYPE_MODAL, CLOSE_NO, SELECT_SINGLE));
$grid->setLocation(0,0,2);
$xfer_result->addComponent($grid);

$lb=new Xfer_Comp_Label('lbl');
$lb->setValue('Option');
$lb->setLocation(0,1);
$xfer_result->addComponent($lb);

$check=new Xfer_Comp_Check('Option');
$check->setValue(0);
$check->setLocation(1,1);
$xfer_result->addComponent($check);

list($usec2, $sec2) = explode(" ", microtime());
$t = ($sec2-$sec)+(($usec2-$usec)/10);

$time=new Xfer_Comp_LabelForm('time');
$time->setValue("Time=$t");
$time->setLocation(0,2,2);
$xfer_result->addComponent($time);

$xfer_result->addAction(new Xfer_Action("_Fermer", "close.png"));
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
