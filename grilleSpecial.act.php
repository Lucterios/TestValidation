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
// --- Last modification: Date 10 January 2010 14:42:45 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Grille spéciale
//@PARAM@ 


//@LOCK:0

function grilleSpecial($Params)
{
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","grilleSpecial",$Params);
$xfer_result->Caption="Grille spéciale";
//@CODE_ACTION@
global $connect;
$queryId = $connect->execute("SHOW FULL FIELDS FROM `TestValidation_SuperTableTest`");

$grid=new Xfer_Comp_Grid('special');
$grid->addHeader("COLUMNS.Field","Nom du champs");
$grid->addHeader("COLUMNS.Type","Type");
$grid->addHeader("COLUMNS.Null","Obligatoire?");
$grid->setDBRows($queryId,"COLUMNS.Field",$Params);
$grid->setsize(200,300);
$xfer_result->addComponent($grid);
$xfer_result->addAction(new Xfer_Action('Fin','close.png'));
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
