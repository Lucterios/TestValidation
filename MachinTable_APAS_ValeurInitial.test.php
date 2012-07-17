<?php
// This file is part of Lucterios, a software developped by "Le Sanglier du Libre" (http://www.sd-libre.fr)
// Thanks to have payed a donation for using this module.
// 
// Lucterios is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
// 
// Lucterios is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with Lucterios; if not, write to the Free Software
// Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
// Test file write by Lucterios SDK tool


//@TABLES@
require_once('extensions/TestValidation/MachinTable.tbl.php');
//@TABLES@

//@DESC@valeur initial
//@PARAM@ 

function TestValidation_MachinTable_APAS_ValeurInitial(&$test)
{
//@CODE_ACTION@
global $connect;
$connect->execute("DELETE FROM TestValidation_MachinTable",true);

$Machin=new DBObj_TestValidation_MachinTable;
$test->assertEquals(0,$Machin->find(),"MachinTable nb 1");

require_once("CORE/extensionManager.inc.php");
$ext=new Extension('TestValidation','./extensions/TestValidation/');
$ret=$ext->upgradeDefaultValueTable();
$msg=$ext->message;
$test->assertEquals(true,$ret,"upgradeDefaultValueTable 1:$msg");
$Machin=new DBObj_TestValidation_MachinTable;
$test->assertEquals(3,$Machin->find(),"MachinTable nb 2:".$ext->message);

$ext=new Extension('TestValidation','./extensions/TestValidation/');
$ret=$ext->upgradeDefaultValueTable();
$msg=$ext->message;
$test->assertEquals(true,$ret,"upgradeDefaultValueTable 2:$msg");
$Machin=new DBObj_TestValidation_MachinTable;
$test->assertEquals(3,$Machin->find(),"MachinTable nb 3:".$ext->message);
//@CODE_ACTION@
}

?>
