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
// --- Last modification: Date 03 February 2010 9:22:12 By  ---

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
$queryId = $connect->execute("SELECT * FROM mysql.help_topic");

$grid=new Xfer_Comp_Grid('special');
$grid->addHeader("help_topic.help_topic_id","Id");
$grid->addHeader("help_topic.name","Nom");
$grid->addHeader("help_topic.help_category_id","Category");
$grid->addHeader("help_topic.description","Description");
$grid->addHeader("help_topic.example","Example");
$grid->addHeader("help_topic.url","Url");
$grid->setDBRows($queryId,"help_topic.help_topic_id",$Params);
$grid->setsize(200,300);
$xfer_result->addComponent($grid);
$xfer_result->addAction(new Xfer_Action('Fin','close.png'));

logAutre("attributs:".$grid->_attributs()." mPageMax:".$grid->mPageMax);
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
