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
// --- Last modification: Date 23 November 2008 12:17:02 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Rechercher un TableTest


//@LOCK:0

function TableTest_APAS_Search($Params)
{
$self=new DBObj_TestValidation_TableTest();
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","TableTest_APAS_Search",$Params);
$xfer_result->Caption="Rechercher un TableTest";
//@CODE_ACTION@
$img=new  Xfer_Comp_LabelForm("title");
$img->setValue("{[center]}{[underline]}{[bold]}Séléctionnez vos critères de recherche{[/bold]}{[/underline]}{[/center]}");
$img->setLocation(0,0,3);
$xfer_result->addComponent($img);
$xfer_result->m_context["IsSearch"]=1;
$Fields=$xfer_result=$self->findFields();
$xfer_result->setSearchGUI($self,$Fields,1);
$xfer_result->addAction($self->NewAction("_Rechercher","search.png","List",FORMTYPE_NOMODAL,CLOSE_YES));
$xfer_result->addAction($self->NewAction("_Annuler","cancel.png"));
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
