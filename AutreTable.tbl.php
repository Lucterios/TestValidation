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
//  // table file write by SDK tool
// --- Last modification: Date 10 January 2010 14:59:05 By  ---

require_once('CORE/DBObject.inc.php');

class DBObj_TestValidation_AutreTable extends DBObj_Basic
{
	var $Title="";
	var $tblname="AutreTable";
	var $extname="TestValidation";
	var $__table="TestValidation_AutreTable";

	var $DefaultFields=array();
	var $NbFieldsCheck=1;
	var $Heritage="";
	var $PosChild=-1;

	var $text;
	var $date;
	var $test;
	var $__DBMetaDataField=array('text'=>array('description'=>'Text', 'type'=>2, 'notnull'=>false, 'params'=>array('Size'=>50, 'Multi'=>false)), 'date'=>array('description'=>'Date', 'type'=>4, 'notnull'=>false, 'params'=>array()), 'test'=>array('description'=>'Test', 'type'=>10, 'notnull'=>false, 'params'=>array('TableName'=>'TestValidation_TableTest')));

}

?>
