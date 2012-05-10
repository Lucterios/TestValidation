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
// --- Last modification: Date 04 March 2009 19:22:22 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:acknowledge
require_once('CORE/xfer.inc.php');
//@XFER:acknowledge@


//@DESC@
//@PARAM@ typeFile='txt'


//@LOCK:0

function LoadFile($Params)
{
$typeFile=getParams($Params,"typeFile",'txt');
try {
$xfer_result=&new Xfer_Container_Acknowledge("TestValidation","LoadFile",$Params);
$xfer_result->Caption="";
//@CODE_ACTION@
require_once "CORE/Lucterios_Error.inc.php";
global $rootPath;
if(!isset($rootPath))
	$rootPath = "";

$path = $rootPath."./usr/TestValidation";
if(!is_dir($path))
	@mkdir($path,0777);
$destination_file = realpath($path."/FileName.$typeFile");
if (!is_file($destination_file))
	@unlink($destination_file);
if (is_file($destination_file))
	throw new LucteriosException(IMPORTANT,"fichier '$destination_file' non supprimable!");

require_once("CORE/saveFileDownloaded.mth.php");
if (array_key_exists('up',$Params) && ($Params['up']!=''))
	$ret = saveFileDownloaded($xfer_result,$Params,'up',$destination_file,true);
else if (array_key_exists('down',$Params) && ($Params['down']!=''))
	$ret = saveFileDownloaded($xfer_result,$Params,'down',$destination_file,true);

if (!is_file($destination_file))
	throw new LucteriosException(IMPORTANT,"fichier '$destination_file' non sauvé!");
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
