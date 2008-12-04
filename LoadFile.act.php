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
// --- Last modification: Date 28 November 2008 22:12:25 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
//@TABLES@
//@XFER:acknowledge
require_once('CORE/xfer.inc.php');
//@XFER:acknowledge@


//@DESC@
//@PARAM@ up


//@LOCK:0

function LoadFile($Params)
{
if (($ret=checkParams("TestValidation", "LoadFile",$Params ,"up"))!=null)
	return $ret;
$up=getParams($Params,"up",0);
try {
$xfer_result=&new Xfer_Container_Acknowledge("TestValidation","LoadFile",$Params);
$xfer_result->Caption="";
//@CODE_ACTION@
$upload = $Params['up'];
list($name_upload,$value_upload) = split(';',$upload);
if($name_upload != '') {
	require_once("CORE/Lucterios_Error.inc.php");
	$path = "usr/TestValidation";
	if(!is_dir($path))
		@mkdir($path,0777);
	$destination_file = $path."/FileName.pdf";
	$content = base64_decode(str_replace(array('\n',' ','\t'),'',$value_upload), true);
	@unlink($destination_file);
	if($handle = @fopen($destination_file,'a')) {
		if( fwrite($handle,$content) == 0)
			throw new LucteriosException(IMPORTANT,"Image non sauvé!");
		fclose($handle);
	}
}
//@CODE_ACTION@
}catch(Exception $e) {
	throw $e;
}
return $xfer_result;
}

?>
