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
// --- Last modification: Date 20 October 2011 22:14:10 By  ---

require_once('CORE/xfer_exception.inc.php');
require_once('CORE/rights.inc.php');

//@TABLES@
require_once('extensions/TestValidation/TableTest.tbl.php');
require_once('extensions/TestValidation/TrucTable.tbl.php');
require_once('extensions/TestValidation/SuperTableTest.tbl.php');
//@TABLES@
//@MODEL_DEFAULT@
$MODEL_DEFAULT="
<model margin_right=#&39;10.0#&39; margin_left=#&39;10.0#&39; margin_bottom=#&39;10.0#&39; margin_top=#&39;10.0#&39; page_width=#&39;210.0#&39; page_height=#&39;297.0#&39;>
<header extent=#&39;0.0#&39; name=#&39;before#&39;/>
<bottom extent=#&39;0.0#&39; name=#&39;after#&39;/>
<left extent=#&39;0.0#&39; name=#&39;start#&39;/>
<rigth extent=#&39;0.0#&39; name=#&39;end#&39;/>
<body extent=#&39;0.0#&39; data=#&39;#&39; name=#&39;body#&39;>
<text height=#&39;20.0#&39; width=#&39;100.0#&39; top=#&39;50.0#&39; left=#&39;10.0#&39; padding=#&39;1.0#&39; spacing=#&39;0.0#&39; border_color=#&39;black#&39; border_style=#&39;#&39; border_width=#&39;0.2#&39; text_align=#&39;start#&39; line_height=#&39;12#&39; font_family=#&39;sans-serif#&39; font_weight=#&39;#&39; font_size=#&39;12#&39;>
name=[{/DATA/name}]{[newline]}value=[{/DATA/value}]{[newline]}time=[{/DATA/time}]
</text>
<table height=#&39;50.0#&39; width=#&39;150.0#&39; top=#&39;100.0#&39; left=#&39;20.0#&39; padding=#&39;1.0#&39; spacing=#&39;0.0#&39; border_color=#&39;black#&39; border_style=#&39;#&39; border_width=#&39;0.2#&39;>
<columns width=#&39;75.0#&39; data=#&39;#&39;>
<cell data=#&39;#&39; display_align=#&39;center#&39; border_color=#&39;black#&39; border_style=#&39;solid#&39; border_width=#&39;0.2#&39; text_align=#&39;start#&39; line_height=#&39;12#&39; font_family=#&39;sans-serif#&39; font_weight=#&39;#&39; font_size=#&39;12#&39;>
Number
</cell>
</columns>
<columns width=#&39;75.0#&39; data=#&39;#&39;>
<cell data=#&39;#&39; display_align=#&39;center#&39; border_color=#&39;black#&39; border_style=#&39;Normal#&39; border_width=#&39;0.2#&39; text_align=#&39;start#&39; line_height=#&39;12#&39; font_family=#&39;sans-serif#&39; font_weight=#&39;#&39; font_size=#&39;12#&39;>
Nb&#160;Machin
</cell>
</columns>
<rows data=#&39;/DATA/truc#&39;>
<cell data=#&39;#&39; display_align=#&39;center#&39; border_color=#&39;black#&39; border_style=#&39;solid#&39; border_width=#&39;0.2#&39; text_align=#&39;start#&39; line_height=#&39;12#&39; font_family=#&39;sans-serif#&39; font_weight=#&39;#&39; font_size=#&39;12#&39;>
[{number}]
</cell>
<cell data=#&39;#&39; display_align=#&39;center#&39; border_color=#&39;black#&39; border_style=#&39;solid#&39; border_width=#&39;0.2#&39; text_align=#&39;start#&39; line_height=#&39;12#&39; font_family=#&39;sans-serif#&39; font_weight=#&39;#&39; font_size=#&39;12#&39;>
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
$SuperTableTest=getParams($Params,"SuperTableTest",0);
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
	$xml_data_item="";
	while($truc->fetch()) {
		$xml_data_item.="	<truc>";
		$xml_data_item.="		<number>";
		$xml_data_item.=$truc->number;
		$xml_data_item.="		</number>";
		$xml_data_item.="		<nbMachin>";
		$xml_data_item.=$truc->nbMachin;
		$xml_data_item.="		</nbMachin>";
		$xml_data_item.="	</truc>";
	}
	if ($xml_data_item=='') {
		$xml_data_item.="	<truc>";
		$xml_data_item.="		<number>";
		$xml_data_item.="		</number>";
		$xml_data_item.="		<nbMachin>";
		$xml_data_item.="		</nbMachin>";
		$xml_data_item.="	</truc>";
	}
	$xml_data.=$xml_data_item;
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
