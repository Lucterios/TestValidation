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
// --- Last modification: Date 13 November 2008 20:17:22 By  ---


//@TABLES@
require_once('extensions/TestValidation/AutreTable.tbl.php');
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
require_once('extensions/TestValidation/TableTest.tbl.php');
require_once('extensions/TestValidation/TrucTable.tbl.php');
//@TABLES@

//@DESC@Test de merge avec 2 objets filles
//@PARAM@ 

function TestValidation_mergeFilleFille(&$test)
{
//@CODE_ACTION@
global $connect;
$connect->execute("TRUNCATE TABLE TestValidation_TableTest");
$connect->execute("TRUNCATE TABLE TestValidation_SuperTableTest");
$connect->execute("TRUNCATE TABLE TestValidation_AutreTable");
$connect->execute("TRUNCATE TABLE TestValidation_TrucTable");
$connect->execute("INSERT INTO TestValidation_TableTest (id,name,value) VALUES (100,'ABC',12.34)");
$connect->execute("INSERT INTO TestValidation_TableTest (id,name,value) VALUES (101,'XYZ',98.43)");
$connect->execute("INSERT INTO TestValidation_SuperTableTest (id,time,superId) VALUES (100,'23:45:36',100)");
$connect->execute("INSERT INTO TestValidation_SuperTableTest (id,time,superId) VALUES (101,'16:38:08',101)");
$connect->execute("INSERT INTO TestValidation_AutreTable (text,date,test) VALUES ('tyu','1999-04-13',100)");
$connect->execute("INSERT INTO TestValidation_AutreTable (text,date,test) VALUES ('vcx','1995-07-21',101)");
$connect->execute("INSERT INTO TestValidation_AutreTable (text,date,test) VALUES ('qsd','1992-11-06',101)");
$connect->execute("INSERT INTO TestValidation_TrucTable (id,number,superTest) VALUES (100,987,100)");
$connect->execute("INSERT INTO TestValidation_TrucTable (id,number,superTest) VALUES (101,453,101)");
try {
	$tructable=new DBObj_TestValidation_TrucTable;
	$test->assertEquals(2,$tructable->find(),"IN TrucTable nb");
	$supertable=new DBObj_TestValidation_SuperTableTest;
	$test->assertEquals(2,$supertable->find(),"IN SuperTableTest nb");
	$table=new DBObj_TestValidation_TableTest;
	$test->assertEquals(2,$table->find(),"IN TableTest nb");
	$autre=new DBObj_TestValidation_AutreTable;
	$test->assertEquals(3,$autre->find(),"IN AutreTable nb");

	$table1=new DBObj_TestValidation_SuperTableTest;
	$table1->get(100);
	$table2=new DBObj_TestValidation_SuperTableTest;
	$table2->get(101);
	$table1->merge($table2);

	$supertable=new DBObj_TestValidation_SuperTableTest;
	$test->assertEquals(1,$supertable->find(),"OUT SuperTableTest nb");
	$supertable->fetch();
	$test->assertEquals('100',$supertable->id,"OUT SuperTableTest id");
	$test->assertEquals('23:45:36',$supertable->time,"OUT SuperTableTest time");
	$test->assertEquals('100',$supertable->superId,"OUT SuperTableTest super");

	$table=new DBObj_TestValidation_TableTest;
	$test->assertEquals(1,$table->find(),"OUT TableTest nb");
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

	$tructable=new DBObj_TestValidation_TrucTable;
	$test->assertEquals(2,$tructable->find(),"OUT TrucTable nb");
	$tructable->fetch();
	$test->assertEquals('100',$tructable->id,"OUT TrucTable id 1");
	$test->assertEquals('987',$tructable->number,"OUT TrucTable number 1");
	$test->assertEquals('100',$tructable->superTest,"OUT TrucTable superTest 1");
	$tructable->fetch();
	$test->assertEquals('101',$tructable->id,"OUT TrucTable id 2");
	$test->assertEquals('453',$tructable->number,"OUT TrucTable number 2");
	$test->assertEquals('100',$tructable->superTest,"OUT TrucTable superTest 2");

	$connect->execute("TRUNCATE TABLE TestValidation_TableTest");
	$connect->execute("TRUNCATE TABLE TestValidation_SuperTableTest");
	$connect->execute("TRUNCATE TABLE TestValidation_AutreTable");
	$connect->execute("TRUNCATE TABLE TestValidation_TrucTable");
} catch(Exception $e) {
	$connect->execute("TRUNCATE TABLE TestValidation_TableTest");
	$connect->execute("TRUNCATE TABLE TestValidation_SuperTableTest");
	$connect->execute("TRUNCATE TABLE TestValidation_AutreTable");
	$connect->execute("TRUNCATE TABLE TestValidation_TrucTable");
	throw $e;
}
//@CODE_ACTION@
}

?>
