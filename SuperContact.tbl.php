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
// --- Last modification: Date 05 May 2009 7:54:42 By  ---

require_once('CORE/DBObject.inc.php');

class DBObj_TestValidation_SuperContact extends DBObj_Basic
{
	var $Title="Super-contact";
	var $tblname="SuperContact";
	var $extname="TestValidation";
	var $__table="TestValidation_SuperContact";

	var $DefaultFields=array();
	var $NbFieldsCheck=1;
	var $Heritage="org_lucterios_contacts/personnePhysique";
	var $PosChild=0;

	var $value;
	var $__DBMetaDataField=array('value'=>array('description'=>'Valeur', 'type'=>0, 'notnull'=>false, 'params'=>array('Min'=>0, 'Max'=>1000)));

	var $__toText='$nom $prenom';
}

?>
