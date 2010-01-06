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
// --- Last modification: Date 07 January 2010 0:10:43 By  ---


//@TABLES@
require_once('extensions/TestValidation/SuperContact.tbl.php');
//@TABLES@

//@DESC@Tests sur la base de donnée et le SETUP
//@PARAM@ 

function TestValidation_checkDB(&$test)
{
//@CODE_ACTION@
require_once('CORE/DBSetup.inc.php');

$DBobj=new DBObj_TestValidation_SuperContact;
$setup=new DBObj_Setup($DBobj);
$val=$setup->describeSQLTable();

echo "<!-- showCreateTable=\n$val -->";

$val=$setup->CurrentContraints();

echo "<!-- Contraints=\n".print_r($val,true)." -->";
//@CODE_ACTION@
}

?>
