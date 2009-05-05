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
//  // Action file write by SDK tool
// --- Last modification: Date 04 May 2009 23:55:12 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/org_lucterios_contacts/personneAbstraite.tbl.php');
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@
//@PARAM@ classname='org_lucterios_contacts/personneMorale'


//@LOCK:0

function selectContact($Params)
{
$classname=getParams($Params,"classname",'org_lucterios_contacts/personneMorale');
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","selectContact",$Params);
$xfer_result->Caption="";
//@CODE_ACTION@
$img=new  Xfer_Comp_Image("img");
$img->setLocation(0,0);
$img->setValue("extensions/org_lucterios_contacts/images/contacts.png");
$xfer_result->addComponent($img);
$lbl=new  Xfer_Comp_LabelForm("titre");
$lbl->setLocation(1,0,2);
$xfer_result->addComponent($lbl);
$lbl->setValue("{[newline]}{[center]}{[bold]}Rechercher et séléctionnez un contact{[/bold]}{[/center]}");

$DBcontact=new DBObj_org_lucterios_contacts_personneAbstraite;
$xfer_result=$DBcontact->searchContact(1, $xfer_result);

$btn=new Xfer_Comp_Button('refresh');
$btn->setLocation(0,49,3);
$btn->setAction(new Xfer_Action('_Rafraichir le fitrage','','TestValidation','selectContact',FORMTYPE_REFRESH,CLOSE_NO,SELECT_NONE));
$xfer_result->addComponent($btn);

$lbl=new  Xfer_Comp_LabelForm("list");
$lbl->setLocation(0,50,3);
$xfer_result->addComponent($lbl);

list($grid,$query_txt)=$DBcontact->contactFoundGrid($classname,$xfer_result->m_context);
$grid->setLocation(0,51,3);
$grid->addAction(new Xfer_Action('_Sélection','ok.png','TestValidation','NewComponent',FORMTYPE_MODAL,CLOSE_YES,SELECT_SINGLE),0);
$grid->addAction(new Xfer_Action("_Annuler", "cancel.png"));
$xfer_result->addComponent($grid);

$lbl->setValue("{[bold]}{[center]}Liste [$query_txt]{[/center]}{[/bold]}");


$lbl = new Xfer_Comp_LabelForm("nb");
$lbl->setLocation(0,60,2);
$lbl->setValue("Nombre total : ".$grid->mNbLines);
$xfer_result->addComponent($lbl);
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
