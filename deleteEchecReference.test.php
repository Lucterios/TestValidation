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
//  // Test file write by SDK tool
// --- Last modification: Date 20 December 2010 17:14:11 By  ---


//@TABLES@
require_once('extensions/TestValidation/AutreTable.tbl.php');
require_once('extensions/TestValidation/MachinTable.tbl.php');
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
require_once('extensions/TestValidation/TableTest.tbl.php');
require_once('extensions/TestValidation/TrucTable.tbl.php');
//@TABLES@

//@DESC@Echec de suppression sur recherche de reference
//@PARAM@ 

function TestValidation_deleteEchecReference(&$test)
{
//@CODE_ACTION@
global $connect;
$connect->execute("INSERT INTO TestValidation_SuperTableTest (id,time,superId) VALUES (101,'16:38:08',101)");

	$atest=new DBObj_TestValidation_AutreTable;
	$test->assertEquals(3,$atest->find(),"IN AutreTable nb");
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
	$test->assertEquals(1,$ttest->canBeDelete(),'ttest->canBeDelete');
	try {
		$ttest->deleteCascade();
		$test->assertEquals(false,true,"ttest->deleteCascade");
	}catch(Exception $e){
		$test->assertEquals("LucteriosException",get_class($e),$e->getMessage());
	}

	$stest=new DBObj_TestValidation_SuperTableTest;
	$stest->get(100);
	$test->assertEquals(1,$stest->canBeDelete(),'stest->canBeDelete');
	try {
		$stest->deleteCascade();
		$test->assertEquals(false,true,"stest->deleteCascade");
	}catch(Exception $e){
		$test->assertEquals("LucteriosException",get_class($e),$e->getMessage());
	}

	$atest=new DBObj_TestValidation_AutreTable;
	$test->assertEquals(3,$atest->find(),"OUT AutreTable nb");
	$atest->fetch();
	$test->assertEquals('100',$atest->id,"OUT TableTest id 1");
	$atest->fetch();
	$test->assertEquals('101',$atest->id,"OUT TableTest id 2");
	$atest->fetch();
	$test->assertEquals('102',$atest->id,"OUT TableTest id 3");

	$ttest=new DBObj_TestValidation_TableTest;
	$test->assertEquals(4,$ttest->find(),"OUT TableTest nb");
	$ttest->fetch();
	$ttest->fetch();
	$ttest->fetch();
	$test->assertEquals('100',$ttest->id,"OUT TableTest id 1");
	$ttest->fetch();
	$test->assertEquals('101',$ttest->id,"OUT TableTest id 2");

	$stest=new DBObj_TestValidation_SuperTableTest;
	$test->assertEquals(2,$stest->find(),"OUT SuperTableTest nb");
	$stest->fetch();
	$test->assertEquals('100',$stest->id,"OUT SuperTableTest id 1");
	$stest->fetch();
	$test->assertEquals('101',$stest->id,"OUT SuperTableTest id 2");

	$truc=new DBObj_TestValidation_TrucTable;
	$test->assertEquals(3,$truc->find(),"OUT TrucTable nb");
	$truc->fetch();
	$test->assertEquals('100',$truc->id,"OUT TrucTable id 1");
	$truc->fetch();
	$test->assertEquals('101',$truc->id,"OUT TrucTable id 2");
	$truc->fetch();
	$test->assertEquals('102',$truc->id,"OUT TrucTable id 3");

	$machin=new DBObj_TestValidation_MachinTable;
	$test->assertEquals(7,$machin->find(),"OUT MachinTable nb");
	$machin->fetch();
	$machin->fetch();
	$machin->fetch();
	$machin->fetch();
	$test->assertEquals('110',$machin->id,"OUT MachinTable id 1");
	$machin->fetch();
	$test->assertEquals('111',$machin->id,"OUT MachinTable id 2");
	$machin->fetch();
	$test->assertEquals('112',$machin->id,"OUT MachinTable id 3");
	$machin->fetch();
	$test->assertEquals('113',$machin->id,"OUT MachinTable id 4");
//@CODE_ACTION@
}

?>
