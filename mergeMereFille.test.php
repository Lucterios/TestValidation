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
// --- Last modification: Date 18 November 2009 11:11:19 By  ---


//@TABLES@
//@TABLES@

//@DESC@Test de merge entre 1 objet mere et 1 fille
//@PARAM@ 

function TestValidation_mergeMereFille(&$test)
{
//@CODE_ACTION@
global $connect;
$connect->execute("TRUNCATE TABLE TestValidation_SuperTableTest",true);
$connect->execute("INSERT INTO TestValidation_SuperTableTest (id,time,superId) VALUES (101,'16:38:08',101)",true);

	$supertable=new DBObj_TestValidation_SuperTableTest;
	$test->assertEquals(1,$supertable->find(),"IN SuperTableTest nb");
	$table=new DBObj_TestValidation_TableTest;
	$test->assertEquals(4,$table->find(),"IN TableTest nb");
	$autre=new DBObj_TestValidation_AutreTable;
	$test->assertEquals(3,$autre->find(),"IN AutreTable nb");

	$table1=new DBObj_TestValidation_TableTest;
	$table1->get(100);
	$table2=new DBObj_TestValidation_SuperTableTest;
	$table2->get(101);
	$table1->merge($table2);

	$supertable=new DBObj_TestValidation_SuperTableTest;
	$test->assertEquals(1,$supertable->find(),"OUT SuperTableTest nb");
	$supertable->fetch();
	$test->assertEquals('101',$supertable->id,"OUT SuperTableTest id");
	$test->assertEquals('16:38:08',$supertable->time,"OUT SuperTableTest time");
	$test->assertEquals('100',$supertable->superId,"OUT SuperTableTest super");

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
