<?php
// 	This file is part of Lucterios/Diacamma, a software developped by "Le Sanglier du Libre" (http://www.sd-libre.fr)
// 	Thanks to have payed a retribution for using this module.
// 
// 	Lucterios/Diacamma is free software; you can redistribute it and/or modify
// 	it under the terms of the GNU General Public License as published by
// 	the Free Software Foundation; either version 2 of the License, or
// 	(at your option) any later version.
// 
// 	Lucterios/Diacamma is distributed in the hope that it will be useful,
// 	but WITHOUT ANY WARRANTY; without even the implied warranty of
// 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// 	GNU General Public License for more details.
// 
// 	You should have received a copy of the GNU General Public License
// 	along with Lucterios; if not, write to the Free Software
// 	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
// 
// 		Contributeurs: Fanny ALLEAUME, Pierre-Olivier VERSCHOORE, Laurent GAY// table file write by SDK tool
// --- Last modification: Date 26 October 2011 6:04:43 By  ---

require_once('CORE/DBObject.inc.php');

class DBObj_TestValidation_SuperTableTest extends DBObj_Basic
{
	public $Title="Super table test";
	public $tblname="SuperTableTest";
	public $extname="TestValidation";
	public $__table="TestValidation_SuperTableTest";

	public $DefaultFields=array();
	public $NbFieldsCheck=1;
	public $Heritage="TestValidation/TableTest";
	public $PosChild=0;

	public $time;
	public $truc;
	public $virtual;
	public $valuevirt;
	public $__DBMetaDataField=array('time'=>array('description'=>'Heure', 'type'=>5, 'notnull'=>false, 'params'=>array()), 'truc'=>array('description'=>'Truc', 'type'=>9, 'notnull'=>false, 'params'=>array('TableName'=>'TestValidation_TrucTable', 'RefField'=>'superTest')), 'virtual'=>array('description'=>'Champ virtuel', 'type'=>13, 'notnull'=>false, 'params'=>array('MethodGet'=>'getVirtuel', 'MethodSet'=>'setVirtuel', 'Min'=>0, 'Max'=>10000, 'Prec'=>3)), 'valuevirt'=>array('description'=>'Valeur du virtuel', 'type'=>0, 'notnull'=>false, 'params'=>array('Min'=>0, 'Max'=>10000)));

	public $__toText='Super $name';
}

?>
