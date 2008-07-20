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
// --- Last modification: Date 17 August 2007 23:46:25 By Laurent GAY ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Editer
//@PARAM@ Option
//@PARAM@ List

function TableTest_APAS_editer($Params)
{
if (($ret=checkParams("TestValidation", "TableTest_APAS_editer",$Params ,"Option","List"))!=null)
	return $ret;
$Option=getParams($Params,"Option",0);
$List=getParams($Params,"List",0);
$self=new DBObj_TestValidation_TableTest();
$xfer_result=&new Xfer_Container_Custom("TestValidation","TableTest_APAS_editer",$Params);
//@CODE_ACTION@

if ($Option=='o')
	$self->get('99');
else
	$self->get($List);

$xfer_result->setDBObject($self);

$lb=new Xfer_Comp_Label('lbl');
$lb->m_description='Label';
$lb->setValue('Option');
$lb->setLocation(0,2);
$xfer_result->addComponent($lb);

$check=new Xfer_Comp_Check('Option');
$check->m_description='Option';
$check->setValue(0);
$check->setNeeded(0);
$check->setLocation(1,2);
$xfer_result->addComponent($check);

$lb=new Xfer_Comp_Label('lbl2');
$lb->setValue('Error');
$lb->setLocation(0,3);
$xfer_result->addComponent($lb);

$check=new Xfer_Comp_Check('Error');
$check->setValue(0);
$check->setNeeded(0);
$check->setLocation(1,3);
$xfer_result->addComponent($check);

$xfer_result->addAction($self->NewAction("_Valider", "OK.png","valider"));
$xfer_result->addAction(new Xfer_Action("_Fermer", "close.png"));
//@CODE_ACTION@
return $xfer_result->getReponseXML();
}

?>
