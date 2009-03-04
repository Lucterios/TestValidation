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
// --- Last modification: Date 04 March 2009 19:15:22 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Téléchargement
//@PARAM@ typeFile='txt'


//@LOCK:0

function UpAndDownLoad($Params)
{
$typeFile=getParams($Params,"typeFile",'txt');
try {
$xfer_result=&new Xfer_Container_Custom("TestValidation","UpAndDownLoad",$Params);
$xfer_result->Caption="Téléchargement";
//@CODE_ACTION@
global $rootPath;
if(!isset($rootPath))
	$rootPath = "";

$lbl=new Xfer_Comp_LabelForm('lbltypeFile');
$lbl->setValue('Type de fichier');
$lbl->setLocation(0,1);
$xfer_result->addComponent($lbl);
$slct=new Xfer_Comp_Select('typeFile');
$slct->setSelect(array('txt'=>'*.txt','zip'=>'*.zip','pdf'=>'*.pdf','doc'=>'*.doc','mpg'=>'*.mpg'));
$slct->setValue($typeFile);
$slct->setAction(new Xfer_Action('','','TestValidation','UpAndDownLoad',FORMTYPE_REFRESH,CLOSE_NO));
$slct->setLocation(1,1);
$xfer_result->addComponent($slct);

$load_action=new Xfer_Action('','','TestValidation','LoadFile',FORMTYPE_MODAL,CLOSE_NO);

$up=new Xfer_Comp_UpLoad('up');
$up->compress=true;
$up->HttpFile=true;
$up->setValue('LoadFile');
$up->addFilter($typeFile);
$up->setLocation(0,2,2);
$xfer_result->addComponent($up);

$load_action=new Xfer_Action('Load','edit.png','TestValidation','LoadFile',FORMTYPE_MODAL,CLOSE_NO);
$btn= new  Xfer_Comp_Button('btn2');
$btn->setAction($load_action);
$btn->setLocation(2,2);
$xfer_result->addComponent($btn);

$down=new Xfer_Comp_DownLoad('down');
$down->compress=true;
$down->HttpFile=true;
$down->setValue("FileName.$typeFile");
$down->setFileName($rootPath."usr/TestValidation/FileName.$typeFile");
$down->setAction($load_action);
$down->setLocation(0,3,3);
$xfer_result->addComponent($down);

$xfer_result->addAction(new Xfer_Action('Fin','close.png','','',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
