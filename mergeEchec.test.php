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
// --- Last modification: Date 18 November 2009 10:24:22 By  ---


//@TABLES@
//@TABLES@

//@DESC@Echec de fusion
//@PARAM@ 

function TestValidation_mergeEchec(&$test)
{
//@CODE_ACTION@
$table=new DBObj_TestValidation_TableTest;
	$test->assertEquals(4,$table->find(),"IN TableTest nb");
	$autre=new DBObj_TestValidation_AutreTable;
	$test->assertEquals(3,$autre->find(),"IN AutreTable nb");

	try {
		$table=new DBObj_TestValidation_TableTest;
		$table->get(100);
		$autre=new DBObj_TestValidation_AutreTable;
		$autre->get(100);
		$table->merge($autre);
		$test->assertEquals(false,true,"Pas d'erreur 1");
	}catch(Exception $e){
		$test->assertEquals("LucteriosException",get_class($e),$e->getMessage());
	}

	try {
		$table1=new DBObj_TestValidation_TableTest;
		$table1->get(100);
		$table2=new DBObj_TestValidation_TableTest;
		$table1->merge($table2);
		$test->assertEquals(false,true,"Pas d'erreur 2");
	}catch(Exception $e){
		$test->assertEquals("LucteriosException",get_class($e),$e->getMessage());
	}

	try {
		$table1=new DBObj_TestValidation_TableTest;
		$table2=new DBObj_TestValidation_TableTest;
		$table2->get(100);
		$table1->merge($table2);
		$test->assertEquals(false,true,"Pas d'erreur 3");
	}catch(Exception $e){
		$test->assertEquals("LucteriosException",get_class($e),$e->getMessage());
	}

	try {
		$table=new DBObj_TestValidation_TableTest;
		$table->get(100);
		$table->merge($table);
		$test->assertEquals(false,true,"Pas d'erreur 4");
	}catch(Exception $e){
		$test->assertEquals("LucteriosException",get_class($e),$e->getMessage());
	}

	try {
		$table1=new DBObj_TestValidation_TableTest;
		$table1->merge($null);
		$test->assertEquals(false,true,"Pas d'erreur 5");
	}catch(Exception $e){
		$test->assertEquals("LucteriosException",get_class($e),$e->getMessage());
	}

	$table=new DBObj_TestValidation_TableTest;
	$test->assertEquals(4,$table->find(),"OUT TableTest nb");
	$autre=new DBObj_TestValidation_AutreTable;
	$test->assertEquals(3,$autre->find(),"OUT AutreTable nb");
//@CODE_ACTION@
}

?>
