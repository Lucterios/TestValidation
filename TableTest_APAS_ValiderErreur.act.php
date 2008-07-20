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
// --- Last modification: Date 02 August 2007 17:46:54 By Laurent GAY ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@
//@XFER:dialogbox
require_once('CORE/xfer_dialogBox.inc.php');
//@XFER:dialogbox@


//@DESC@Valider une erreur
//@PARAM@ errorType

function TableTest_APAS_ValiderErreur($Params)
{
if (($ret=checkParams("TestValidation", "TableTest_APAS_ValiderErreur",$Params ,"errorType"))!=null)
	return $ret;
$errorType=getParams($Params,"errorType",0);
$self=new DBObj_TestValidation_TableTest();
$xfer_result=&new Xfer_Container_DialogBox("TestValidation","TableTest_APAS_ValiderErreur",$Params);
//@CODE_ACTION@

$xfer_result->setTypeAndText("Pas d'érreur!!",XFER_DBOX_WARNING);

$xfer_result->addAction($self->NewAction("_Fermer","close.png"));

switch ($errorType) {
	case 0: // PHP
        		$val="";
		$val->doSomething();
		break;
	case 1: // Critique

		throw new LucteriosException(CRITIC,"Critique");
		break;
	case 2: // grave
		throw new LucteriosException(GRAVE,"grave");
		break;
	case 3: // important
		throw new LucteriosException(IMPORTANT,"Important");
		break;
	case 4: // Mineur
		throw new LucteriosException(MINOR,"Mineur");
		break;
}
//@CODE_ACTION@
return $xfer_result->getReponseXML();
}

?>
