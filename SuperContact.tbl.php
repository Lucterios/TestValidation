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

class DBObj_TestValidation_SuperContact extends DBObj_Basic
{
	public $Title="Super-contact";
	public $tblname="SuperContact";
	public $extname="TestValidation";
	public $__table="TestValidation_SuperContact";

	public $DefaultFields=array();
	public $NbFieldsCheck=1;
	public $Heritage="org_lucterios_contacts/personnePhysique";
	public $PosChild=0;

	public $value;
	public $__DBMetaDataField=array('value'=>array('description'=>'Valeur', 'type'=>0, 'notnull'=>false, 'params'=>array('Min'=>0, 'Max'=>1000)));

	public $__toText='$nom $prenom';
}

?>
