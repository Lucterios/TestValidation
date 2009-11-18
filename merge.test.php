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
// --- Last modification: Date 18 November 2009 10:23:20 By  ---


//@TABLES@
require_once('extensions/TestValidation/AutreTable.tbl.php');
require_once('extensions/TestValidation/TableTest.tbl.php');
//@TABLES@

//@DESC@Test de merge de 2 objets simples
//@PARAM@ 

function TestValidation_merge(&$test)
{
//@CODE_ACTION@
$table=new DBObj_TestValidation_TableTest;
	$test->assertEquals(4,$table->find(),"IN TableTest nb");
	$autre=new DBObj_TestValidation_AutreTable;
	$test->assertEquals(3,$autre->find(),"IN AutreTable nb");

	$table1=new DBObj_TestValidation_TableTest;
	$table1->get(100);
	$table2=new DBObj_TestValidation_TableTest;
	$table2->get(101);
	$table1->merge($table2);

	$table=new DBObj_TestValidation_TableTest;
	$test->assertEquals(3,$table->find(),"OUT TableTest nb");
	$table->fetch();
	$table->fetch();
	$table->fetch();
	$test->assertEquals('100',$table->id,"OUT TableTest id");
	$test->assertEquals('ABC',$table->name,"OUT TableTest name");
	$test->assertEquals('12.34',$table->value,"OUT TableTest value");

	$autre=new DBObj_TestValidation_AutreTable;
	$test->assertEquals(3,$autre->find(),"OUT AutreTable nb");
	$autre->fetch();
	$test->assertEquals('tyu',$autre->text,"OUT AutreTable text 1");
	$test->assertEquals('1999-04-13',$autre->date,"OUT AutreTable date 1");
	$test->assertEquals('100',$autre->test,"OUT AutreTable test 1");
	$autre->fetch();
	$test->assertEquals('vcx',$autre->text,"OUT AutreTable text 2");
	$test->assertEquals('1995-07-21',$autre->date,"OUT AutreTable date 2");
	$test->assertEquals('100',$autre->test,"OUT AutreTable test 2");
	$autre->fetch();
	$test->assertEquals('qsd',$autre->text,"OUT AutreTable text 3");
	$test->assertEquals('1992-11-06',$autre->date,"OUT AutreTable date 3");
	$test->assertEquals('100',$autre->test,"OUT AutreTable test 3");
//@CODE_ACTION@
}

?>
