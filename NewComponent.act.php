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
// --- Last modification: Date 21 August 2007 21:48:20 By Laurent GAY ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:custom
require_once('CORE/xfer_custom.inc.php');
//@XFER:custom@


//@DESC@Nouveau composants
//@PARAM@ metaText

function NewComponent($Params)
{
if (($ret=checkParams("TestValidation", "NewComponent",$Params ,"metaText"))!=null)
	return $ret;
$metaText=getParams($Params,"metaText",0);
$xfer_result=&new Xfer_Container_Custom("TestValidation","NewComponent",$Params);
//@CODE_ACTION@


$lbl=new Xfer_Comp_LabelForm('Lbl1');
$lbl->setValue('metaText');
$lbl->setLocation(0,0);
$xfer_result->addComponent($lbl);
$edt=new Xfer_Comp_MemoForm('metaText');
$edt->setValue($metaText);
$edt->setLocation(1,0);
$xfer_result->addComponent($edt);

$lbl=new Xfer_Comp_LabelForm('Lbl2');
$lbl->setValue($metaText);
$lbl->setLocation(0,1,2);
$xfer_result->addComponent($lbl);

$lbl=new Xfer_Comp_LinkLabel('link1');
$lbl->setValue('Liens Web');
$lbl->setLink('http://localhost');
$lbl->setLocation(0,2,2);
$xfer_result->addComponent($lbl);

$lbl=new Xfer_Comp_LinkLabel('link2');
$lbl->setValue('Liens Email');
$lbl->setLink('mailto:truc@lucterios.org');
$lbl->setLocation(0,3,2);
$xfer_result->addComponent($lbl);

$img=new Xfer_Comp_Image('img1');
$img->setValue('image.png');
$img->setLocation(0,4);
$xfer_result->addComponent($img);

$file_name="extensions/TestValidation/images/image.png";
$file_type = filetype($file_name);
$file_size = filesize($file_name);

$handle = fopen($file_name, 'r');
$content = fread($handle, $file_size);
$content = chunk_split(base64_encode($content));
$f = fclose($handle);

$img=new Xfer_Comp_Image('img2');
$img->setValue($content,$file_type);
$img->setLocation(1,4);
$xfer_result->addComponent($img);

$xfer_result->addAction(new Xfer_Action('OK','ok.png','TestValidation','NewComponent',FORMTYPE_REFRESH,CLOSE_NO,SELECT_NONE));
$xfer_result->addAction(new Xfer_Action('Fin','close.png','','',FORMTYPE_MODAL,CLOSE_YES,SELECT_NONE));
//@CODE_ACTION@
return $xfer_result->getReponseXML();
}

?>
