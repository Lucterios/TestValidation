<?php
// 	This file is part of Diacamma, a software developped by "Le Sanglier du Libre" (http://www.sd-libre.fr)
// 	Thanks to have payed a retribution for using this module.
// 
// 	Diacamma is free software; you can redistribute it and/or modify
// 	it under the terms of the GNU General Public License as published by
// 	the Free Software Foundation; either version 2 of the License, or
// 	(at your option) any later version.
// 
// 	Diacamma is distributed in the hope that it will be useful,
// 	but WITHOUT ANY WARRANTY; without even the implied warranty of
// 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// 	GNU General Public License for more details.
// 
// 	You should have received a copy of the GNU General Public License
// 	along with Lucterios; if not, write to the Free Software
// 	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
// 
// 		Contributeurs: Fanny ALLEAUME, Pierre-Olivier VERSCHOORE, Laurent GAY
// Printing file write by SDK tool
// --- Last modification: Date 02 March 2011 22:09:39 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
require_once('extensions/TestValidation/TrucTable.tbl.php');
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
//@TABLES@
//@MODEL_DEFAULT@
$MODEL_DEFAULT="
<model margin_right='10.0' margin_left='10.0' margin_bottom='10.0' margin_top='10.0' page_width='210.0' page_height='297.0'>
<header extent='0.0' name='before'/>
<bottom extent='0.0' name='after'/>
<left extent='0.0' name='start'/>
<rigth extent='0.0' name='end'/>
<body extent='0.0' data='' name='body'>
<text height='20.0' width='100.0' top='50.0' left='10.0' padding='1.0' spacing='0.0' border_color='black' border_style='' border_width='0.2' text_align='start' line_height='12' font_family='sans-serif' font_weight='' font_size='12'>
name=[{/DATA/name}]{[newline]}value=[{/DATA/value}]{[newline]}time=[{/DATA/time}]
</text>
<table height='50.0' width='150.0' top='100.0' left='20.0' padding='1.0' spacing='0.0' border_color='black' border_style='' border_width='0.2'>
<columns width='75.0' data=''>
<cell data='' display_align='center' border_color='black' border_style='solid' border_width='0.2' text_align='start' line_height='12' font_family='sans-serif' font_weight='' font_size='12'>
Number
</cell>
</columns>
<columns width='75.0' data=''>
<cell data='' display_align='center' border_color='black' border_style='Normal' border_width='0.2' text_align='start' line_height='12' font_family='sans-serif' font_weight='' font_size='12'>
Nb&#160;Machin
</cell>
</columns>
<rows data='/DATA/truc'>
<cell data='' display_align='center' border_color='black' border_style='solid' border_width='0.2' text_align='start' line_height='12' font_family='sans-serif' font_weight='' font_size='12'>
[{number}]
</cell>
<cell data='' display_align='center' border_color='black' border_style='solid' border_width='0.2' text_align='start' line_height='12' font_family='sans-serif' font_weight='' font_size='12'>
[{nbMachin}]
</cell>
</rows>
</table>
</body>
</model>

";
//@MODEL_DEFAULT_END@

$Title="";


//@DESC@
//@PARAM@ SuperTableTest

function TestValidation_APAS_SuperTableTest_APAS_rapport_getXmlData($Params=array())
{
if (($ret=checkParams("TestValidation", "rapport",$Params ,"SuperTableTest"))!=null)
	return $ret;
$SuperTableTest=getParams($Params,"SuperTableTest");
$self=new DBObj_TestValidation_SuperTableTest();
$xml_data='';
//@CODE_ACTION@
$xml_data.="<DATA>";
if ($SuperTableTest>0) {
	$self->get($SuperTableTest);
	$xml_data.="	<name>";
	$xml_data.=$self->name;
	$xml_data.="	</name>";
	$xml_data.="	<value>";
	$xml_data.=$self->value;
	$xml_data.="	</value>";
	$xml_data.="	<time>";
	$xml_data.=$self->time;
	$xml_data.="	</time>";

	$truc=$self->getField('truc');
	while($truc->fetch()) {
		$xml_data.="	<truc>";
		$xml_data.="		<number>";
		$xml_data.=$truc->number;
		$xml_data.="		</number>";
		$xml_data.="		<nbMachin>";
		$xml_data.=$truc->nbMachin;
		$xml_data.="		</nbMachin>";
		$xml_data.="	</truc>";
	}
}
else {
	$xml_data.="	<name>AAAA</name>";
	$xml_data.="	<value>123.1456</value>";
	$xml_data.="	<time>12:45:78</time>";
	$xml_data.="	<truc>";
	$xml_data.="		<number>123</number>";
	$xml_data.="		<nbMachin>4</nbMachin>";
	$xml_data.="	</truc>";
	$xml_data.="	<truc>";
	$xml_data.="		<number>456</number>";
	$xml_data.="		<nbMachin>1</nbMachin>";
	$xml_data.="	</truc>";
	$xml_data.="	<truc>";
	$xml_data.="		<number>789</number>";
	$xml_data.="		<nbMachin>0</nbMachin>";
	$xml_data.="	</truc>";
}
$xml_data.="</DATA>";
//@CODE_ACTION@
return $xml_data;
}

?>
