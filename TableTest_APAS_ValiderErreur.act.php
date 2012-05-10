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
require_once('extensions/TestValidation/MachinTable.tbl.php');
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
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
	case 1: // MySQL
		$DBTT=new DBObj_TestValidation_TableTest();
		list($fields1,$tables1,$wheres1)=$DBTT->prepQuery(true,true);
		$DBMT=new DBObj_TestValidation_MachinTable();
		list($fields2,$tables2,$wheres2)=$DBMT->prepQuery(true,true);
		$DBSTT=new DBObj_TestValidation_SuperTableTest();
		list($fields3,$tables3,$wheres3)=$DBSTT->prepQuery(true,true);
		$fields=array_merge($fields1,$fields2,$fields3);
		$tables=array_merge($tables1,$tables2,$tables3);
		$wheres=array_merge($wheres1,$wheres2,$wheres3);
		$Q="SELECT ".implode(',',$fields)." FROM ".implode(',',$tables)." WHERE ".implode(' AND ',$wheres);
		global $connect;
		$connect->execute($Q,true);
		break;
	case 2: // Critique
		throw new LucteriosException(CRITIC,"Critique");
		break;
	case 3: // grave
		throw new LucteriosException(GRAVE,"grave");
		break;
	case 4: // important
		throw new LucteriosException(IMPORTANT,"Important");
		break;
	case 5: // Mineur
		throw new LucteriosException(MINOR,"Mineur");
		break;
}
//@CODE_ACTION@
return $xfer_result->getReponseXML();
}

?>
