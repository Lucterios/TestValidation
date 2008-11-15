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
// --- Last modification: Date 13 November 2008 21:26:36 By  ---

require_once('CORE/DBObject.inc.php');

class DBObj_TestValidation_MachinTable extends DBObj_Basic
{
	var $Title="";
	var $tblname="MachinTable";
	var $extname="TestValidation";
	var $__table="TestValidation_MachinTable";

	var $DefaultFields=array();
	var $NbFieldsCheck=1;
	var $Heritage="";
	var $PosChild=-1;

	var $mode;
	var $truc;
	var $__DBMetaDataField=array('mode'=>array('description'=>'Mode', 'type'=>8, 'notnull'=>false, 'params'=>array('Enum'=>array('aaa', 'bbb', 'ccc'))), 'truc'=>array('description'=>'Truc', 'type'=>10, 'notnull'=>false, 'params'=>array('TableName'=>'TestValidation_TrucTable')));

}

?>
