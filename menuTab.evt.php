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
//  // library file write by SDK tool
// --- Last modification: Date 11 January 2010 21:44:31 By  ---

function TestValidation_APAS_menuTab(&$menuTabs,$xfer)
{
//@CODE_ACTION@
	$new_Menu=new Xfer_Menu_Item("menu_validation",'Exemple �tat','image.png','TestValidation',"menuTab",0,"","");
	if ($xfer->checkActionRigth($new_Menu))
		$menuTabs->addSubMenu($new_Menu);
	return true;
//@CODE_ACTION@
}
?>
