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

class DBObj_TestValidation_TableTest extends DBObj_Basic
{
	public $Title="";
	public $tblname="TableTest";
	public $extname="TestValidation";
	public $__table="TestValidation_TableTest";

	public $DefaultFields=array(array('@refresh@'=>true, 'id'=>'2', 'name'=>'Machin', 'value'=>'98.65'), array('@refresh@'=>true, 'id'=>'1', 'name'=>'Truc', 'value'=>'12.34'));
	public $NbFieldsCheck=1;
	public $Heritage="";
	public $PosChild=-1;

	public $name;
	public $value;
	public $__DBMetaDataField=array('name'=>array('description'=>'Nom', 'type'=>2, 'notnull'=>false, 'params'=>array('Size'=>75, 'Multi'=>false)), 'value'=>array('description'=>'Valeur', 'type'=>1, 'notnull'=>false, 'params'=>array('Min'=>0, 'Max'=>99.99, 'Prec'=>2)));

}

?>
