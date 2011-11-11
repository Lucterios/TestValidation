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
//  // Method file write by SDK tool
// --- Last modification: Date 23 November 2008 13:16:41 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/MachinTable.tbl.php');
require_once('extensions/TestValidation/TableTest.tbl.php');
require_once('extensions/TestValidation/TrucTable.tbl.php');
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
//@TABLES@

//@DESC@Recherche un SuperTableTest
//@PARAM@ posY
//@PARAM@ simple
//@PARAM@ xfer_result

function SuperTableTest_APAS_findFields(&$self)
{
//@CODE_ACTION@
return array("name","value","time","truc[number]","truc[machin[mode]]");
//@CODE_ACTION@
}

?>
