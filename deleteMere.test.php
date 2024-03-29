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
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
require_once('extensions/TestValidation/TableTest.tbl.php');
require_once('extensions/TestValidation/TrucTable.tbl.php');
//@TABLES@

//@DESC@Suppression cascade d'un objet mere
//@PARAM@ 

function TestValidation_deleteMere(&$test)
{
//@CODE_ACTION@
global $connect;
$connect->execute("DELETE FROM TestValidation_AutreTable",true);
$connect->execute("INSERT INTO TestValidation_SuperTableTest (id,time,superId) VALUES (101,'16:38:08',101)",true);

	$ttest=new DBObj_TestValidation_TableTest;
	$test->assertEquals(4,$ttest->find(),"IN TableTest nb");
	$stest=new DBObj_TestValidation_SuperTableTest;
	$test->assertEquals(2,$stest->find(),"IN SuperTableTest nb");
	$truc=new DBObj_TestValidation_TrucTable;
	$test->assertEquals(3,$truc->find(),"IN TrucTable nb");
	$machin=new DBObj_TestValidation_MachinTable;
	$test->assertEquals(7,$machin->find(),"IN MachinTable nb");

	$ttest=new DBObj_TestValidation_TableTest;
	$ttest->get(100);
	$test->assertEquals(0,$ttest->canBeDelete(),'ttest->canBeDelete');
	$ttest->deleteCascade();

	$ttest=new DBObj_TestValidation_TableTest;
	$test->assertEquals(3,$ttest->find(),"IN TableTest nb");
	$ttest->fetch();
	$ttest->fetch();
	$ttest->fetch();
	$test->assertEquals('101',$ttest->id,"OUT TableTest id 1");

	$stest=new DBObj_TestValidation_SuperTableTest;
	$test->assertEquals(1,$stest->find(),"IN SuperTableTest nb");
	$stest->fetch();
	$test->assertEquals('101',$stest->id,"OUT SuperTableTest id 1");

	$truc=new DBObj_TestValidation_TrucTable;
	$test->assertEquals(1,$truc->find(),"OUT TrucTable nb");
	$truc->fetch();
	$test->assertEquals('101',$truc->id,"OUT TrucTable id 1");

	$machin=new DBObj_TestValidation_MachinTable;
	$test->assertEquals(5,$machin->find(),"OUT MachinTable nb");
	$machin->fetch();
	$machin->fetch();
	$machin->fetch();
	$machin->fetch();
	$test->assertEquals('111',$machin->id,"OUT MachinTable id 1");
	$machin->fetch();
	$test->assertEquals('113',$machin->id,"OUT MachinTable id 2");
//@CODE_ACTION@
}

?>
