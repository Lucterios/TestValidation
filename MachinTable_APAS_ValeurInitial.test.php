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
// --- Last modification: Date 21 November 2008 12:14:06 By  ---


//@TABLES@
require_once('extensions/TestValidation/MachinTable.tbl.php');
//@TABLES@

//@DESC@
//@PARAM@ 

function TestValidation_MachinTable_APAS_ValeurInitial(&$test)
{
//@CODE_ACTION@
global $connect;
$connect->execute("TRUNCATE TABLE TestValidation_MachinTable");
try {

	$connect->execute("TRUNCATE TABLE TestValidation_MachinTable");
} catch(Exception $e) {
	$connect->execute("TRUNCATE TABLE TestValidation_MachinTable");
	throw $e;
}
//@CODE_ACTION@
}

?>
