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
// Method file write by SDK tool
// --- Last modification: Date 02 March 2011 19:12:04 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
//@TABLES@

//@DESC@getList de SuperTableTest
//@PARAM@ 

function SuperTableTest_APAS_getGrid(&$self)
{
//@CODE_ACTION@
$grid = new Xfer_Comp_Grid("SuperTableTest");
$grid->setDBObject($self, array('name','value','virtual'));
$grid->addAction($self->newAction("_Editer", "edit.png", "Fiche",FORMTYPE_MODAL,CLOSE_NO, SELECT_SINGLE));
$grid->addAction($self->newAction("_Supprimer", "suppr.png", "Del", FORMTYPE_MODAL,CLOSE_NO, SELECT_SINGLE));
$grid->addAction($self->newAction("_Ajouter", "add.png", "AddModify",FORMTYPE_MODAL,CLOSE_NO, SELECT_NONE));
$grid->addAction($self->NewAction('_Impression','print.png','print',FORMTYPE_MODAL,CLOSE_NO,SELECT_SINGLE));
$grid->setSize(200,750);
return $grid;
//@CODE_ACTION@
}

?>
