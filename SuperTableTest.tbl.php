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
// --- Last modification: Date 10 January 2010 13:22:28 By  ---

require_once('CORE/DBObject.inc.php');

class DBObj_TestValidation_SuperTableTest extends DBObj_Basic
{
	var $Title="Super table test";
	var $tblname="SuperTableTest";
	var $extname="TestValidation";
	var $__table="TestValidation_SuperTableTest";

	var $DefaultFields=array();
	var $NbFieldsCheck=1;
	var $Heritage="TestValidation/TableTest";
	var $PosChild=0;

	var $time;
	var $truc;
	var $virtual;
	var $valuevirt;
	var $__DBMetaDataField=array('time'=>array('description'=>'Heure', 'type'=>5, 'notnull'=>false, 'params'=>array()), 'truc'=>array('description'=>'Truc', 'type'=>9, 'notnull'=>false, 'params'=>array('TableName'=>'TestValidation_TrucTable', 'RefField'=>'superTest')), 'virtual'=>array('description'=>'Champ virtuel', 'type'=>13, 'notnull'=>false, 'params'=>array('MethodGet'=>'getVirtuel', 'MethodSet'=>'setVirtuel', 'Min'=>0, 'Max'=>10000, 'Prec'=>3)), 'valuevirt'=>array('description'=>'Valeur du virtuel', 'type'=>0, 'notnull'=>false, 'params'=>array('Min'=>0, 'Max'=>10000)));

}

?>
