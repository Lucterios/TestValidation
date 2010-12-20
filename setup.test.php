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
// --- Last modification: Date 20 December 2010 17:09:11 By  ---


//@TABLES@
//@TABLES@

//@DESC@Initialisation
//@PARAM@ 

function TestValidation_setup(&$test)
{
//@CODE_ACTION@
global $connect;
$connect->execute("INSERT INTO TestValidation_TableTest (id,name,value) VALUES (100,'ABC',12.34)",true);
$connect->execute("INSERT INTO TestValidation_TableTest (id,name,value) VALUES (101,'XYZ',98.43)",true);
$connect->execute("INSERT INTO TestValidation_AutreTable (id,text,date,test) VALUES (100,'tyu','1999-04-13',100)",true);
$connect->execute("INSERT INTO TestValidation_AutreTable (id,text,date,test) VALUES (101,'vcx','1995-07-21',101)",true);
$connect->execute("INSERT INTO TestValidation_AutreTable (id,text,date,test) VALUES (102,'qsd','1992-11-06',101)",true);

$connect->execute("INSERT INTO TestValidation_SuperTableTest (id,time,superId) VALUES (100,'23:45:36',100)");
$connect->execute("INSERT INTO TestValidation_TrucTable (id,number,superTest) VALUES (100,123,100)",true);
$connect->execute("INSERT INTO TestValidation_TrucTable (id,number,superTest) VALUES (101,876,null)",true);
$connect->execute("INSERT INTO TestValidation_TrucTable (id,number,superTest) VALUES (102,382,100)",true);

$connect->execute("INSERT INTO TestValidation_MachinTable (id,mode,truc) VALUES (110,0,100)",true);
$connect->execute("INSERT INTO TestValidation_MachinTable (id,mode,truc) VALUES (111,2,101)",true);
$connect->execute("INSERT INTO TestValidation_MachinTable (id,mode,truc) VALUES (112,1,100)",true);
$connect->execute("INSERT INTO TestValidation_MachinTable (id,mode,truc) VALUES (113,1,101)",true);
//@CODE_ACTION@
}

?>
