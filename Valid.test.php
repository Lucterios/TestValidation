<?php
// Test file write by SDK tool
// --- Last modification: Date 22 June 2011 13:08:15 By  ---


//@TABLES@
//@TABLES@

//@DESC@

function chose_Valid(&$test)
{
//@CODE_ACTION@
$rep=$test->CallAction("TestValidation","TestComposants",array(),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("Fin",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(22,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl2
$comp=$rep->getComponents('Lbl2');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl2");
$test->assertEquals("editeur=aaa","".$comp->m_value,"Valeur de Lbl2");
//EDIT - edt1
$comp=$rep->getComponents('edt1');
$test->assertClass("Xfer_Comp_Edit",$comp,"Classe de edt1");
$test->assertEquals("aaa","".$comp->m_value,"Valeur de edt1");
//LABELFORM - Lbl3
$comp=$rep->getComponents('Lbl3');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl3");
$test->assertEquals("Réel=3.14","".$comp->m_value,"Valeur de Lbl3");
//FLOAT - flt1
$comp=$rep->getComponents('flt1');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt1");
$test->assertEquals("3.14","".$comp->m_value,"Valeur de flt1");
//LABELFORM - Lbl4
$comp=$rep->getComponents('Lbl4');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl4");
$test->assertEquals("Memo=xyz","".$comp->m_value,"Valeur de Lbl4");
//MEMO - mm1
$comp=$rep->getComponents('mm1');
$test->assertClass("Xfer_Comp_Memo",$comp,"Classe de mm1");
$test->assertEquals("xyz","".$comp->m_value,"Valeur de mm1");
//LABELFORM - Lbl5
$comp=$rep->getComponents('Lbl5');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl5");
$test->assertEquals("Date=2007-04-23","".$comp->m_value,"Valeur de Lbl5");
//DATE - dt1
$comp=$rep->getComponents('dt1');
$test->assertClass("Xfer_Comp_Date",$comp,"Classe de dt1");
$test->assertEquals("2007-04-23","".$comp->m_value,"Valeur de dt1");
//LABELFORM - Lbl6
$comp=$rep->getComponents('Lbl6');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl6");
$test->assertEquals("Heure=12:34:00","".$comp->m_value,"Valeur de Lbl6");
//TIME - tm1
$comp=$rep->getComponents('tm1');
$test->assertClass("Xfer_Comp_Time",$comp,"Classe de tm1");
$test->assertEquals("12:34:00","".$comp->m_value,"Valeur de tm1");
//LABELFORM - Lbl7
$comp=$rep->getComponents('Lbl7');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl7");
$test->assertEquals("Date Heure=2008-07-12 23:47:31","".$comp->m_value,"Valeur de Lbl7");
//DATETIME - stm1
$comp=$rep->getComponents('stm1');
$test->assertClass("Xfer_Comp_DateTime",$comp,"Classe de stm1");
$test->assertEquals("2008-07-12 23:47:31","".$comp->m_value,"Valeur de stm1");
//LABELFORM - Lbl8
$comp=$rep->getComponents('Lbl8');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl8");
$test->assertEquals("Coche=n","".$comp->m_value,"Valeur de Lbl8");
//CHECK - ck1
$comp=$rep->getComponents('ck1');
$test->assertClass("Xfer_Comp_Check",$comp,"Classe de ck1");
$test->assertEquals(false,$comp->m_value,"Valeur de ck1");
//LABELFORM - Lbl9
$comp=$rep->getComponents('Lbl9');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl9");
$test->assertEquals("Select=1","".$comp->m_value,"Valeur de Lbl9");
//SELECT - slct1
$comp=$rep->getComponents('slct1');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de slct1");
$test->assertEquals("1","".$comp->m_value,"Valeur de slct1");
$test->assertEquals(3,COUNT($comp->m_select),'Nb select de slct1');
//LABELFORM - Lbl10
$comp=$rep->getComponents('Lbl10');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl10");
$test->assertEquals("Entier=5","".$comp->m_value,"Valeur de Lbl10");
//FLOAT - flt2
$comp=$rep->getComponents('flt2');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt2");
$test->assertEquals("5","".$comp->m_value,"Valeur de flt2");
//LABELFORM - Lbl11
$comp=$rep->getComponents('Lbl11');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl11");
$test->assertEquals("CheckList=1;2","".$comp->m_value,"Valeur de Lbl11");
//CHECKLIST - cl1
$comp=$rep->getComponents('cl1');
$test->assertClass("Xfer_Comp_CheckList",$comp,"Classe de cl1");
$test->assertEquals(4,COUNT($comp->m_select),'Nb check de cl1');
//LABELFORM - Lbl12
$comp=$rep->getComponents('Lbl12');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl12");
$test->assertEquals("Bouton","".$comp->m_value,"Valeur de Lbl12");
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("Modifier",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TestComposants",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TestComposants",array("ck1"=>"n","cl1"=>"1;2","dt1"=>"2007-04-23","edt1"=>"aaabbb","flt1"=>"3.14","flt2"=>"5","mm1"=>"xyz","slct1"=>"1","stm1"=>"2008-07-12 00:00","tm1"=>"12:34",),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("Fin",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(22,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl2
$comp=$rep->getComponents('Lbl2');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl2");
$test->assertEquals("editeur=aaabbb","".$comp->m_value,"Valeur de Lbl2");
//EDIT - edt1
$comp=$rep->getComponents('edt1');
$test->assertClass("Xfer_Comp_Edit",$comp,"Classe de edt1");
$test->assertEquals("aaabbb","".$comp->m_value,"Valeur de edt1");
//LABELFORM - Lbl3
$comp=$rep->getComponents('Lbl3');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl3");
$test->assertEquals("Réel=3.14","".$comp->m_value,"Valeur de Lbl3");
//FLOAT - flt1
$comp=$rep->getComponents('flt1');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt1");
$test->assertEquals("3.14","".$comp->m_value,"Valeur de flt1");
//LABELFORM - Lbl4
$comp=$rep->getComponents('Lbl4');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl4");
$test->assertEquals("Memo=xyz","".$comp->m_value,"Valeur de Lbl4");
//MEMO - mm1
$comp=$rep->getComponents('mm1');
$test->assertClass("Xfer_Comp_Memo",$comp,"Classe de mm1");
$test->assertEquals("xyz","".$comp->m_value,"Valeur de mm1");
//LABELFORM - Lbl5
$comp=$rep->getComponents('Lbl5');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl5");
$test->assertEquals("Date=2007-04-23","".$comp->m_value,"Valeur de Lbl5");
//DATE - dt1
$comp=$rep->getComponents('dt1');
$test->assertClass("Xfer_Comp_Date",$comp,"Classe de dt1");
$test->assertEquals("2007-04-23","".$comp->m_value,"Valeur de dt1");
//LABELFORM - Lbl6
$comp=$rep->getComponents('Lbl6');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl6");
$test->assertEquals("Heure=12:34","".$comp->m_value,"Valeur de Lbl6");
//TIME - tm1
$comp=$rep->getComponents('tm1');
$test->assertClass("Xfer_Comp_Time",$comp,"Classe de tm1");
$test->assertEquals("12:34","".$comp->m_value,"Valeur de tm1");
//LABELFORM - Lbl7
$comp=$rep->getComponents('Lbl7');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl7");
$test->assertEquals("Date Heure=2008-07-12 00:00","".$comp->m_value,"Valeur de Lbl7");
//DATETIME - stm1
$comp=$rep->getComponents('stm1');
$test->assertClass("Xfer_Comp_DateTime",$comp,"Classe de stm1");
$test->assertEquals("2008-07-12 00:00","".$comp->m_value,"Valeur de stm1");
//LABELFORM - Lbl8
$comp=$rep->getComponents('Lbl8');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl8");
$test->assertEquals("Coche=n","".$comp->m_value,"Valeur de Lbl8");
//CHECK - ck1
$comp=$rep->getComponents('ck1');
$test->assertClass("Xfer_Comp_Check",$comp,"Classe de ck1");
$test->assertEquals(false,$comp->m_value,"Valeur de ck1");
//LABELFORM - Lbl9
$comp=$rep->getComponents('Lbl9');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl9");
$test->assertEquals("Select=1","".$comp->m_value,"Valeur de Lbl9");
//SELECT - slct1
$comp=$rep->getComponents('slct1');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de slct1");
$test->assertEquals("1","".$comp->m_value,"Valeur de slct1");
$test->assertEquals(3,COUNT($comp->m_select),'Nb select de slct1');
//LABELFORM - Lbl10
$comp=$rep->getComponents('Lbl10');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl10");
$test->assertEquals("Entier=5","".$comp->m_value,"Valeur de Lbl10");
//FLOAT - flt2
$comp=$rep->getComponents('flt2');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt2");
$test->assertEquals("5","".$comp->m_value,"Valeur de flt2");
//LABELFORM - Lbl11
$comp=$rep->getComponents('Lbl11');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl11");
$test->assertEquals("CheckList=1;2","".$comp->m_value,"Valeur de Lbl11");
//CHECKLIST - cl1
$comp=$rep->getComponents('cl1');
$test->assertClass("Xfer_Comp_CheckList",$comp,"Classe de cl1");
$test->assertEquals(4,COUNT($comp->m_select),'Nb check de cl1');
//LABELFORM - Lbl12
$comp=$rep->getComponents('Lbl12');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl12");
$test->assertEquals("Bouton","".$comp->m_value,"Valeur de Lbl12");
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("Modifier",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TestComposants",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TestComposants",array("ck1"=>"n","cl1"=>"1;2","dt1"=>"2007-04-23","edt1"=>"aaabbb","flt1"=>"3.15","flt2"=>"5","mm1"=>"xyz","slct1"=>"1","stm1"=>"2008-07-12 00:00","tm1"=>"12:34",),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("Fin",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(22,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl2
$comp=$rep->getComponents('Lbl2');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl2");
$test->assertEquals("editeur=aaabbb","".$comp->m_value,"Valeur de Lbl2");
//EDIT - edt1
$comp=$rep->getComponents('edt1');
$test->assertClass("Xfer_Comp_Edit",$comp,"Classe de edt1");
$test->assertEquals("aaabbb","".$comp->m_value,"Valeur de edt1");
//LABELFORM - Lbl3
$comp=$rep->getComponents('Lbl3');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl3");
$test->assertEquals("Réel=3.15","".$comp->m_value,"Valeur de Lbl3");
//FLOAT - flt1
$comp=$rep->getComponents('flt1');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt1");
$test->assertEquals("3.15","".$comp->m_value,"Valeur de flt1");
//LABELFORM - Lbl4
$comp=$rep->getComponents('Lbl4');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl4");
$test->assertEquals("Memo=xyz","".$comp->m_value,"Valeur de Lbl4");
//MEMO - mm1
$comp=$rep->getComponents('mm1');
$test->assertClass("Xfer_Comp_Memo",$comp,"Classe de mm1");
$test->assertEquals("xyz","".$comp->m_value,"Valeur de mm1");
//LABELFORM - Lbl5
$comp=$rep->getComponents('Lbl5');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl5");
$test->assertEquals("Date=2007-04-23","".$comp->m_value,"Valeur de Lbl5");
//DATE - dt1
$comp=$rep->getComponents('dt1');
$test->assertClass("Xfer_Comp_Date",$comp,"Classe de dt1");
$test->assertEquals("2007-04-23","".$comp->m_value,"Valeur de dt1");
//LABELFORM - Lbl6
$comp=$rep->getComponents('Lbl6');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl6");
$test->assertEquals("Heure=12:34","".$comp->m_value,"Valeur de Lbl6");
//TIME - tm1
$comp=$rep->getComponents('tm1');
$test->assertClass("Xfer_Comp_Time",$comp,"Classe de tm1");
$test->assertEquals("12:34","".$comp->m_value,"Valeur de tm1");
//LABELFORM - Lbl7
$comp=$rep->getComponents('Lbl7');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl7");
$test->assertEquals("Date Heure=2008-07-12 00:00","".$comp->m_value,"Valeur de Lbl7");
//DATETIME - stm1
$comp=$rep->getComponents('stm1');
$test->assertClass("Xfer_Comp_DateTime",$comp,"Classe de stm1");
$test->assertEquals("2008-07-12 00:00","".$comp->m_value,"Valeur de stm1");
//LABELFORM - Lbl8
$comp=$rep->getComponents('Lbl8');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl8");
$test->assertEquals("Coche=n","".$comp->m_value,"Valeur de Lbl8");
//CHECK - ck1
$comp=$rep->getComponents('ck1');
$test->assertClass("Xfer_Comp_Check",$comp,"Classe de ck1");
$test->assertEquals(false,$comp->m_value,"Valeur de ck1");
//LABELFORM - Lbl9
$comp=$rep->getComponents('Lbl9');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl9");
$test->assertEquals("Select=1","".$comp->m_value,"Valeur de Lbl9");
//SELECT - slct1
$comp=$rep->getComponents('slct1');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de slct1");
$test->assertEquals("1","".$comp->m_value,"Valeur de slct1");
$test->assertEquals(3,COUNT($comp->m_select),'Nb select de slct1');
//LABELFORM - Lbl10
$comp=$rep->getComponents('Lbl10');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl10");
$test->assertEquals("Entier=5","".$comp->m_value,"Valeur de Lbl10");
//FLOAT - flt2
$comp=$rep->getComponents('flt2');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt2");
$test->assertEquals("5","".$comp->m_value,"Valeur de flt2");
//LABELFORM - Lbl11
$comp=$rep->getComponents('Lbl11');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl11");
$test->assertEquals("CheckList=1;2","".$comp->m_value,"Valeur de Lbl11");
//CHECKLIST - cl1
$comp=$rep->getComponents('cl1');
$test->assertClass("Xfer_Comp_CheckList",$comp,"Classe de cl1");
$test->assertEquals(4,COUNT($comp->m_select),'Nb check de cl1');
//LABELFORM - Lbl12
$comp=$rep->getComponents('Lbl12');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl12");
$test->assertEquals("Bouton","".$comp->m_value,"Valeur de Lbl12");
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("Modifier",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TestComposants",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TestComposants",array("ck1"=>"n","cl1"=>"1;2","dt1"=>"2007-04-23","edt1"=>"aaabbb","flt1"=>"3.15","flt2"=>"5","mm1"=>"wwwww xyz","slct1"=>"1","stm1"=>"2008-07-12 00:00","tm1"=>"12:34",),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("Fin",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(22,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl2
$comp=$rep->getComponents('Lbl2');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl2");
$test->assertEquals("editeur=aaabbb","".$comp->m_value,"Valeur de Lbl2");
//EDIT - edt1
$comp=$rep->getComponents('edt1');
$test->assertClass("Xfer_Comp_Edit",$comp,"Classe de edt1");
$test->assertEquals("aaabbb","".$comp->m_value,"Valeur de edt1");
//LABELFORM - Lbl3
$comp=$rep->getComponents('Lbl3');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl3");
$test->assertEquals("Réel=3.15","".$comp->m_value,"Valeur de Lbl3");
//FLOAT - flt1
$comp=$rep->getComponents('flt1');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt1");
$test->assertEquals("3.15","".$comp->m_value,"Valeur de flt1");
//LABELFORM - Lbl4
$comp=$rep->getComponents('Lbl4');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl4");
$test->assertEquals("Memo=wwwww xyz","".$comp->m_value,"Valeur de Lbl4");
//MEMO - mm1
$comp=$rep->getComponents('mm1');
$test->assertClass("Xfer_Comp_Memo",$comp,"Classe de mm1");
$test->assertEquals("wwwww xyz","".$comp->m_value,"Valeur de mm1");
//LABELFORM - Lbl5
$comp=$rep->getComponents('Lbl5');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl5");
$test->assertEquals("Date=2007-04-23","".$comp->m_value,"Valeur de Lbl5");
//DATE - dt1
$comp=$rep->getComponents('dt1');
$test->assertClass("Xfer_Comp_Date",$comp,"Classe de dt1");
$test->assertEquals("2007-04-23","".$comp->m_value,"Valeur de dt1");
//LABELFORM - Lbl6
$comp=$rep->getComponents('Lbl6');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl6");
$test->assertEquals("Heure=12:34","".$comp->m_value,"Valeur de Lbl6");
//TIME - tm1
$comp=$rep->getComponents('tm1');
$test->assertClass("Xfer_Comp_Time",$comp,"Classe de tm1");
$test->assertEquals("12:34","".$comp->m_value,"Valeur de tm1");
//LABELFORM - Lbl7
$comp=$rep->getComponents('Lbl7');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl7");
$test->assertEquals("Date Heure=2008-07-12 00:00","".$comp->m_value,"Valeur de Lbl7");
//DATETIME - stm1
$comp=$rep->getComponents('stm1');
$test->assertClass("Xfer_Comp_DateTime",$comp,"Classe de stm1");
$test->assertEquals("2008-07-12 00:00","".$comp->m_value,"Valeur de stm1");
//LABELFORM - Lbl8
$comp=$rep->getComponents('Lbl8');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl8");
$test->assertEquals("Coche=n","".$comp->m_value,"Valeur de Lbl8");
//CHECK - ck1
$comp=$rep->getComponents('ck1');
$test->assertClass("Xfer_Comp_Check",$comp,"Classe de ck1");
$test->assertEquals(false,$comp->m_value,"Valeur de ck1");
//LABELFORM - Lbl9
$comp=$rep->getComponents('Lbl9');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl9");
$test->assertEquals("Select=1","".$comp->m_value,"Valeur de Lbl9");
//SELECT - slct1
$comp=$rep->getComponents('slct1');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de slct1");
$test->assertEquals("1","".$comp->m_value,"Valeur de slct1");
$test->assertEquals(3,COUNT($comp->m_select),'Nb select de slct1');
//LABELFORM - Lbl10
$comp=$rep->getComponents('Lbl10');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl10");
$test->assertEquals("Entier=5","".$comp->m_value,"Valeur de Lbl10");
//FLOAT - flt2
$comp=$rep->getComponents('flt2');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt2");
$test->assertEquals("5","".$comp->m_value,"Valeur de flt2");
//LABELFORM - Lbl11
$comp=$rep->getComponents('Lbl11');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl11");
$test->assertEquals("CheckList=1;2","".$comp->m_value,"Valeur de Lbl11");
//CHECKLIST - cl1
$comp=$rep->getComponents('cl1');
$test->assertClass("Xfer_Comp_CheckList",$comp,"Classe de cl1");
$test->assertEquals(4,COUNT($comp->m_select),'Nb check de cl1');
//LABELFORM - Lbl12
$comp=$rep->getComponents('Lbl12');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl12");
$test->assertEquals("Bouton","".$comp->m_value,"Valeur de Lbl12");
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("Modifier",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TestComposants",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TestComposants",array("ck1"=>"o","cl1"=>"1;2","dt1"=>"2009-06-22","edt1"=>"aaabbb","flt1"=>"3.15","flt2"=>"5","mm1"=>"wwwww xyz","slct1"=>"1","stm1"=>"2006-08-09 02:06","tm1"=>"11:36",),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("Fin",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(22,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl2
$comp=$rep->getComponents('Lbl2');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl2");
$test->assertEquals("editeur=aaabbb","".$comp->m_value,"Valeur de Lbl2");
//EDIT - edt1
$comp=$rep->getComponents('edt1');
$test->assertClass("Xfer_Comp_Edit",$comp,"Classe de edt1");
$test->assertEquals("aaabbb","".$comp->m_value,"Valeur de edt1");
//LABELFORM - Lbl3
$comp=$rep->getComponents('Lbl3');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl3");
$test->assertEquals("Réel=3.15","".$comp->m_value,"Valeur de Lbl3");
//FLOAT - flt1
$comp=$rep->getComponents('flt1');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt1");
$test->assertEquals("3.15","".$comp->m_value,"Valeur de flt1");
//LABELFORM - Lbl4
$comp=$rep->getComponents('Lbl4');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl4");
$test->assertEquals("Memo=wwwww xyz","".$comp->m_value,"Valeur de Lbl4");
//MEMO - mm1
$comp=$rep->getComponents('mm1');
$test->assertClass("Xfer_Comp_Memo",$comp,"Classe de mm1");
$test->assertEquals("wwwww xyz","".$comp->m_value,"Valeur de mm1");
//LABELFORM - Lbl5
$comp=$rep->getComponents('Lbl5');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl5");
$test->assertEquals("Date=2009-06-22","".$comp->m_value,"Valeur de Lbl5");
//DATE - dt1
$comp=$rep->getComponents('dt1');
$test->assertClass("Xfer_Comp_Date",$comp,"Classe de dt1");
$test->assertEquals("2009-06-22","".$comp->m_value,"Valeur de dt1");
//LABELFORM - Lbl6
$comp=$rep->getComponents('Lbl6');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl6");
$test->assertEquals("Heure=11:36","".$comp->m_value,"Valeur de Lbl6");
//TIME - tm1
$comp=$rep->getComponents('tm1');
$test->assertClass("Xfer_Comp_Time",$comp,"Classe de tm1");
$test->assertEquals("11:36","".$comp->m_value,"Valeur de tm1");
//LABELFORM - Lbl7
$comp=$rep->getComponents('Lbl7');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl7");
$test->assertEquals("Date Heure=2006-08-09 02:06","".$comp->m_value,"Valeur de Lbl7");
//DATETIME - stm1
$comp=$rep->getComponents('stm1');
$test->assertClass("Xfer_Comp_DateTime",$comp,"Classe de stm1");
$test->assertEquals("2006-08-09 02:06","".$comp->m_value,"Valeur de stm1");
//LABELFORM - Lbl8
$comp=$rep->getComponents('Lbl8');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl8");
$test->assertEquals("Coche=o","".$comp->m_value,"Valeur de Lbl8");
//CHECK - ck1
$comp=$rep->getComponents('ck1');
$test->assertClass("Xfer_Comp_Check",$comp,"Classe de ck1");
$test->assertEquals(true,$comp->m_value,"Valeur de ck1");
//LABELFORM - Lbl9
$comp=$rep->getComponents('Lbl9');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl9");
$test->assertEquals("Select=1","".$comp->m_value,"Valeur de Lbl9");
//SELECT - slct1
$comp=$rep->getComponents('slct1');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de slct1");
$test->assertEquals("1","".$comp->m_value,"Valeur de slct1");
$test->assertEquals(3,COUNT($comp->m_select),'Nb select de slct1');
//LABELFORM - Lbl10
$comp=$rep->getComponents('Lbl10');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl10");
$test->assertEquals("Entier=5","".$comp->m_value,"Valeur de Lbl10");
//FLOAT - flt2
$comp=$rep->getComponents('flt2');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt2");
$test->assertEquals("5","".$comp->m_value,"Valeur de flt2");
//LABELFORM - Lbl11
$comp=$rep->getComponents('Lbl11');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl11");
$test->assertEquals("CheckList=1;2","".$comp->m_value,"Valeur de Lbl11");
//CHECKLIST - cl1
$comp=$rep->getComponents('cl1');
$test->assertClass("Xfer_Comp_CheckList",$comp,"Classe de cl1");
$test->assertEquals(4,COUNT($comp->m_select),'Nb check de cl1');
//LABELFORM - Lbl12
$comp=$rep->getComponents('Lbl12');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl12");
$test->assertEquals("Bouton","".$comp->m_value,"Valeur de Lbl12");
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("Modifier",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TestComposants",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TestComposants",array("ck1"=>"o","cl1"=>"1;2","dt1"=>"2009-06-22","edt1"=>"aaabbb","flt1"=>"3.15","flt2"=>"5","mm1"=>"wwwww xyz","slct1"=>"3","stm1"=>"2006-08-09 02:06","tm1"=>"11:36",),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("Fin",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(22,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl2
$comp=$rep->getComponents('Lbl2');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl2");
$test->assertEquals("editeur=aaabbb","".$comp->m_value,"Valeur de Lbl2");
//EDIT - edt1
$comp=$rep->getComponents('edt1');
$test->assertClass("Xfer_Comp_Edit",$comp,"Classe de edt1");
$test->assertEquals("aaabbb","".$comp->m_value,"Valeur de edt1");
//LABELFORM - Lbl3
$comp=$rep->getComponents('Lbl3');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl3");
$test->assertEquals("Réel=3.15","".$comp->m_value,"Valeur de Lbl3");
//FLOAT - flt1
$comp=$rep->getComponents('flt1');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt1");
$test->assertEquals("3.15","".$comp->m_value,"Valeur de flt1");
//LABELFORM - Lbl4
$comp=$rep->getComponents('Lbl4');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl4");
$test->assertEquals("Memo=wwwww xyz","".$comp->m_value,"Valeur de Lbl4");
//MEMO - mm1
$comp=$rep->getComponents('mm1');
$test->assertClass("Xfer_Comp_Memo",$comp,"Classe de mm1");
$test->assertEquals("wwwww xyz","".$comp->m_value,"Valeur de mm1");
//LABELFORM - Lbl5
$comp=$rep->getComponents('Lbl5');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl5");
$test->assertEquals("Date=2009-06-22","".$comp->m_value,"Valeur de Lbl5");
//DATE - dt1
$comp=$rep->getComponents('dt1');
$test->assertClass("Xfer_Comp_Date",$comp,"Classe de dt1");
$test->assertEquals("2009-06-22","".$comp->m_value,"Valeur de dt1");
//LABELFORM - Lbl6
$comp=$rep->getComponents('Lbl6');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl6");
$test->assertEquals("Heure=11:36","".$comp->m_value,"Valeur de Lbl6");
//TIME - tm1
$comp=$rep->getComponents('tm1');
$test->assertClass("Xfer_Comp_Time",$comp,"Classe de tm1");
$test->assertEquals("11:36","".$comp->m_value,"Valeur de tm1");
//LABELFORM - Lbl7
$comp=$rep->getComponents('Lbl7');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl7");
$test->assertEquals("Date Heure=2006-08-09 02:06","".$comp->m_value,"Valeur de Lbl7");
//DATETIME - stm1
$comp=$rep->getComponents('stm1');
$test->assertClass("Xfer_Comp_DateTime",$comp,"Classe de stm1");
$test->assertEquals("2006-08-09 02:06","".$comp->m_value,"Valeur de stm1");
//LABELFORM - Lbl8
$comp=$rep->getComponents('Lbl8');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl8");
$test->assertEquals("Coche=o","".$comp->m_value,"Valeur de Lbl8");
//CHECK - ck1
$comp=$rep->getComponents('ck1');
$test->assertClass("Xfer_Comp_Check",$comp,"Classe de ck1");
$test->assertEquals(true,$comp->m_value,"Valeur de ck1");
//LABELFORM - Lbl9
$comp=$rep->getComponents('Lbl9');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl9");
$test->assertEquals("Select=3","".$comp->m_value,"Valeur de Lbl9");
//SELECT - slct1
$comp=$rep->getComponents('slct1');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de slct1");
$test->assertEquals("3","".$comp->m_value,"Valeur de slct1");
$test->assertEquals(3,COUNT($comp->m_select),'Nb select de slct1');
//LABELFORM - Lbl10
$comp=$rep->getComponents('Lbl10');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl10");
$test->assertEquals("Entier=5","".$comp->m_value,"Valeur de Lbl10");
//FLOAT - flt2
$comp=$rep->getComponents('flt2');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt2");
$test->assertEquals("5","".$comp->m_value,"Valeur de flt2");
//LABELFORM - Lbl11
$comp=$rep->getComponents('Lbl11');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl11");
$test->assertEquals("CheckList=1;2","".$comp->m_value,"Valeur de Lbl11");
//CHECKLIST - cl1
$comp=$rep->getComponents('cl1');
$test->assertClass("Xfer_Comp_CheckList",$comp,"Classe de cl1");
$test->assertEquals(4,COUNT($comp->m_select),'Nb check de cl1');
//LABELFORM - Lbl12
$comp=$rep->getComponents('Lbl12');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl12");
$test->assertEquals("Bouton","".$comp->m_value,"Valeur de Lbl12");
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("Modifier",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TestComposants",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TestComposants",array("ck1"=>"o","cl1"=>"3","dt1"=>"2009-06-22","edt1"=>"aaabbb","flt1"=>"3.15","flt2"=>"7","mm1"=>"wwwww xyz","slct1"=>"3","stm1"=>"2006-08-09 02:06","tm1"=>"11:36",),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("Fin",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(22,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl2
$comp=$rep->getComponents('Lbl2');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl2");
$test->assertEquals("editeur=aaabbb","".$comp->m_value,"Valeur de Lbl2");
//EDIT - edt1
$comp=$rep->getComponents('edt1');
$test->assertClass("Xfer_Comp_Edit",$comp,"Classe de edt1");
$test->assertEquals("aaabbb","".$comp->m_value,"Valeur de edt1");
//LABELFORM - Lbl3
$comp=$rep->getComponents('Lbl3');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl3");
$test->assertEquals("Réel=3.15","".$comp->m_value,"Valeur de Lbl3");
//FLOAT - flt1
$comp=$rep->getComponents('flt1');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt1");
$test->assertEquals("3.15","".$comp->m_value,"Valeur de flt1");
//LABELFORM - Lbl4
$comp=$rep->getComponents('Lbl4');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl4");
$test->assertEquals("Memo=wwwww xyz","".$comp->m_value,"Valeur de Lbl4");
//MEMO - mm1
$comp=$rep->getComponents('mm1');
$test->assertClass("Xfer_Comp_Memo",$comp,"Classe de mm1");
$test->assertEquals("wwwww xyz","".$comp->m_value,"Valeur de mm1");
//LABELFORM - Lbl5
$comp=$rep->getComponents('Lbl5');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl5");
$test->assertEquals("Date=2009-06-22","".$comp->m_value,"Valeur de Lbl5");
//DATE - dt1
$comp=$rep->getComponents('dt1');
$test->assertClass("Xfer_Comp_Date",$comp,"Classe de dt1");
$test->assertEquals("2009-06-22","".$comp->m_value,"Valeur de dt1");
//LABELFORM - Lbl6
$comp=$rep->getComponents('Lbl6');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl6");
$test->assertEquals("Heure=11:36","".$comp->m_value,"Valeur de Lbl6");
//TIME - tm1
$comp=$rep->getComponents('tm1');
$test->assertClass("Xfer_Comp_Time",$comp,"Classe de tm1");
$test->assertEquals("11:36","".$comp->m_value,"Valeur de tm1");
//LABELFORM - Lbl7
$comp=$rep->getComponents('Lbl7');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl7");
$test->assertEquals("Date Heure=2006-08-09 02:06","".$comp->m_value,"Valeur de Lbl7");
//DATETIME - stm1
$comp=$rep->getComponents('stm1');
$test->assertClass("Xfer_Comp_DateTime",$comp,"Classe de stm1");
$test->assertEquals("2006-08-09 02:06","".$comp->m_value,"Valeur de stm1");
//LABELFORM - Lbl8
$comp=$rep->getComponents('Lbl8');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl8");
$test->assertEquals("Coche=o","".$comp->m_value,"Valeur de Lbl8");
//CHECK - ck1
$comp=$rep->getComponents('ck1');
$test->assertClass("Xfer_Comp_Check",$comp,"Classe de ck1");
$test->assertEquals(true,$comp->m_value,"Valeur de ck1");
//LABELFORM - Lbl9
$comp=$rep->getComponents('Lbl9');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl9");
$test->assertEquals("Select=3","".$comp->m_value,"Valeur de Lbl9");
//SELECT - slct1
$comp=$rep->getComponents('slct1');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de slct1");
$test->assertEquals("3","".$comp->m_value,"Valeur de slct1");
$test->assertEquals(3,COUNT($comp->m_select),'Nb select de slct1');
//LABELFORM - Lbl10
$comp=$rep->getComponents('Lbl10');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl10");
$test->assertEquals("Entier=7","".$comp->m_value,"Valeur de Lbl10");
//FLOAT - flt2
$comp=$rep->getComponents('flt2');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt2");
$test->assertEquals("7","".$comp->m_value,"Valeur de flt2");
//LABELFORM - Lbl11
$comp=$rep->getComponents('Lbl11');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl11");
$test->assertEquals("CheckList=3","".$comp->m_value,"Valeur de Lbl11");
//CHECKLIST - cl1
$comp=$rep->getComponents('cl1');
$test->assertClass("Xfer_Comp_CheckList",$comp,"Classe de cl1");
$test->assertEquals(4,COUNT($comp->m_select),'Nb check de cl1');
//LABELFORM - Lbl12
$comp=$rep->getComponents('Lbl12');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl12");
$test->assertEquals("Bouton","".$comp->m_value,"Valeur de Lbl12");
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("Modifier",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TestComposants",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TestComposants",array("ck1"=>"o","cl1"=>"1;3","dt1"=>"2009-06-22","edt1"=>"aaabbb","flt1"=>"3.15","flt2"=>"7","mm1"=>"wwwww xyz","slct1"=>"3","stm1"=>"2006-08-09 02:06","tm1"=>"11:36",),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("Fin",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(22,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl2
$comp=$rep->getComponents('Lbl2');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl2");
$test->assertEquals("editeur=aaabbb","".$comp->m_value,"Valeur de Lbl2");
//EDIT - edt1
$comp=$rep->getComponents('edt1');
$test->assertClass("Xfer_Comp_Edit",$comp,"Classe de edt1");
$test->assertEquals("aaabbb","".$comp->m_value,"Valeur de edt1");
//LABELFORM - Lbl3
$comp=$rep->getComponents('Lbl3');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl3");
$test->assertEquals("Réel=3.15","".$comp->m_value,"Valeur de Lbl3");
//FLOAT - flt1
$comp=$rep->getComponents('flt1');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt1");
$test->assertEquals("3.15","".$comp->m_value,"Valeur de flt1");
//LABELFORM - Lbl4
$comp=$rep->getComponents('Lbl4');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl4");
$test->assertEquals("Memo=wwwww xyz","".$comp->m_value,"Valeur de Lbl4");
//MEMO - mm1
$comp=$rep->getComponents('mm1');
$test->assertClass("Xfer_Comp_Memo",$comp,"Classe de mm1");
$test->assertEquals("wwwww xyz","".$comp->m_value,"Valeur de mm1");
//LABELFORM - Lbl5
$comp=$rep->getComponents('Lbl5');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl5");
$test->assertEquals("Date=2009-06-22","".$comp->m_value,"Valeur de Lbl5");
//DATE - dt1
$comp=$rep->getComponents('dt1');
$test->assertClass("Xfer_Comp_Date",$comp,"Classe de dt1");
$test->assertEquals("2009-06-22","".$comp->m_value,"Valeur de dt1");
//LABELFORM - Lbl6
$comp=$rep->getComponents('Lbl6');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl6");
$test->assertEquals("Heure=11:36","".$comp->m_value,"Valeur de Lbl6");
//TIME - tm1
$comp=$rep->getComponents('tm1');
$test->assertClass("Xfer_Comp_Time",$comp,"Classe de tm1");
$test->assertEquals("11:36","".$comp->m_value,"Valeur de tm1");
//LABELFORM - Lbl7
$comp=$rep->getComponents('Lbl7');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl7");
$test->assertEquals("Date Heure=2006-08-09 02:06","".$comp->m_value,"Valeur de Lbl7");
//DATETIME - stm1
$comp=$rep->getComponents('stm1');
$test->assertClass("Xfer_Comp_DateTime",$comp,"Classe de stm1");
$test->assertEquals("2006-08-09 02:06","".$comp->m_value,"Valeur de stm1");
//LABELFORM - Lbl8
$comp=$rep->getComponents('Lbl8');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl8");
$test->assertEquals("Coche=o","".$comp->m_value,"Valeur de Lbl8");
//CHECK - ck1
$comp=$rep->getComponents('ck1');
$test->assertClass("Xfer_Comp_Check",$comp,"Classe de ck1");
$test->assertEquals(true,$comp->m_value,"Valeur de ck1");
//LABELFORM - Lbl9
$comp=$rep->getComponents('Lbl9');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl9");
$test->assertEquals("Select=3","".$comp->m_value,"Valeur de Lbl9");
//SELECT - slct1
$comp=$rep->getComponents('slct1');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de slct1");
$test->assertEquals("3","".$comp->m_value,"Valeur de slct1");
$test->assertEquals(3,COUNT($comp->m_select),'Nb select de slct1');
//LABELFORM - Lbl10
$comp=$rep->getComponents('Lbl10');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl10");
$test->assertEquals("Entier=7","".$comp->m_value,"Valeur de Lbl10");
//FLOAT - flt2
$comp=$rep->getComponents('flt2');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt2");
$test->assertEquals("7","".$comp->m_value,"Valeur de flt2");
//LABELFORM - Lbl11
$comp=$rep->getComponents('Lbl11');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl11");
$test->assertEquals("CheckList=1;3","".$comp->m_value,"Valeur de Lbl11");
//CHECKLIST - cl1
$comp=$rep->getComponents('cl1');
$test->assertClass("Xfer_Comp_CheckList",$comp,"Classe de cl1");
$test->assertEquals(4,COUNT($comp->m_select),'Nb check de cl1');
//LABELFORM - Lbl12
$comp=$rep->getComponents('Lbl12');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl12");
$test->assertEquals("Bouton","".$comp->m_value,"Valeur de Lbl12");
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("Modifier",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TestComposants",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TestComposants",array("ck1"=>"o","cl1"=>"1;3","dt1"=>"2009-06-22","edt1"=>"aaabbb","flt1"=>"3.15","flt2"=>"7","mm1"=>"wwwww xyz","slct1"=>"3","stm1"=>"2006-08-09 02:06","tm1"=>"11:36",),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("Fin",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(22,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl2
$comp=$rep->getComponents('Lbl2');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl2");
$test->assertEquals("editeur=aaabbb","".$comp->m_value,"Valeur de Lbl2");
//EDIT - edt1
$comp=$rep->getComponents('edt1');
$test->assertClass("Xfer_Comp_Edit",$comp,"Classe de edt1");
$test->assertEquals("aaabbb","".$comp->m_value,"Valeur de edt1");
//LABELFORM - Lbl3
$comp=$rep->getComponents('Lbl3');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl3");
$test->assertEquals("Réel=3.15","".$comp->m_value,"Valeur de Lbl3");
//FLOAT - flt1
$comp=$rep->getComponents('flt1');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt1");
$test->assertEquals("3.15","".$comp->m_value,"Valeur de flt1");
//LABELFORM - Lbl4
$comp=$rep->getComponents('Lbl4');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl4");
$test->assertEquals("Memo=wwwww xyz","".$comp->m_value,"Valeur de Lbl4");
//MEMO - mm1
$comp=$rep->getComponents('mm1');
$test->assertClass("Xfer_Comp_Memo",$comp,"Classe de mm1");
$test->assertEquals("wwwww xyz","".$comp->m_value,"Valeur de mm1");
//LABELFORM - Lbl5
$comp=$rep->getComponents('Lbl5');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl5");
$test->assertEquals("Date=2009-06-22","".$comp->m_value,"Valeur de Lbl5");
//DATE - dt1
$comp=$rep->getComponents('dt1');
$test->assertClass("Xfer_Comp_Date",$comp,"Classe de dt1");
$test->assertEquals("2009-06-22","".$comp->m_value,"Valeur de dt1");
//LABELFORM - Lbl6
$comp=$rep->getComponents('Lbl6');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl6");
$test->assertEquals("Heure=11:36","".$comp->m_value,"Valeur de Lbl6");
//TIME - tm1
$comp=$rep->getComponents('tm1');
$test->assertClass("Xfer_Comp_Time",$comp,"Classe de tm1");
$test->assertEquals("11:36","".$comp->m_value,"Valeur de tm1");
//LABELFORM - Lbl7
$comp=$rep->getComponents('Lbl7');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl7");
$test->assertEquals("Date Heure=2006-08-09 02:06","".$comp->m_value,"Valeur de Lbl7");
//DATETIME - stm1
$comp=$rep->getComponents('stm1');
$test->assertClass("Xfer_Comp_DateTime",$comp,"Classe de stm1");
$test->assertEquals("2006-08-09 02:06","".$comp->m_value,"Valeur de stm1");
//LABELFORM - Lbl8
$comp=$rep->getComponents('Lbl8');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl8");
$test->assertEquals("Coche=o","".$comp->m_value,"Valeur de Lbl8");
//CHECK - ck1
$comp=$rep->getComponents('ck1');
$test->assertClass("Xfer_Comp_Check",$comp,"Classe de ck1");
$test->assertEquals(true,$comp->m_value,"Valeur de ck1");
//LABELFORM - Lbl9
$comp=$rep->getComponents('Lbl9');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl9");
$test->assertEquals("Select=3","".$comp->m_value,"Valeur de Lbl9");
//SELECT - slct1
$comp=$rep->getComponents('slct1');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de slct1");
$test->assertEquals("3","".$comp->m_value,"Valeur de slct1");
$test->assertEquals(3,COUNT($comp->m_select),'Nb select de slct1');
//LABELFORM - Lbl10
$comp=$rep->getComponents('Lbl10');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl10");
$test->assertEquals("Entier=7","".$comp->m_value,"Valeur de Lbl10");
//FLOAT - flt2
$comp=$rep->getComponents('flt2');
$test->assertClass("Xfer_Comp_Float",$comp,"Classe de flt2");
$test->assertEquals("7","".$comp->m_value,"Valeur de flt2");
//LABELFORM - Lbl11
$comp=$rep->getComponents('Lbl11');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl11");
$test->assertEquals("CheckList=1;3","".$comp->m_value,"Valeur de Lbl11");
//CHECKLIST - cl1
$comp=$rep->getComponents('cl1');
$test->assertClass("Xfer_Comp_CheckList",$comp,"Classe de cl1");
$test->assertEquals(4,COUNT($comp->m_select),'Nb check de cl1');
//LABELFORM - Lbl12
$comp=$rep->getComponents('Lbl12');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl12");
$test->assertEquals("Bouton","".$comp->m_value,"Valeur de Lbl12");
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("Modifier",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TestComposants",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","CloseEvenement",array("ck1"=>"o","cl1"=>"1;3","dt1"=>"2009-06-22","edt1"=>"aaabbb","flt1"=>"3.15","flt2"=>"7","mm1"=>"wwwww xyz","slct1"=>"3","stm1"=>"2006-08-09 02:06","tm1"=>"11:36",),"Xfer_Container_DialogBox");
$test->assertEquals(1,$rep->m_type,'Type dialogue');
$test->assertEquals("ck1=>o{[newline]}cl1=>1;3{[newline]}dt1=>2009-06-22{[newline]}edt1=>aaabbb{[newline]}flt1=>3.15{[newline]}flt2=>7{[newline]}mm1=>wwwww xyz{[newline]}slct1=>3{[newline]}stm1=>2006-08-09 02:06{[newline]}tm1=>11:36{[newline]}",$rep->m_text,'Text dialogue');
$act=$rep->m_actions[0];
$test->assertEquals("_Ok",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');

// -----------------------------------------------------
$rep=$test->CallAction("TestValidation","TableTest_APAS_errorManager",array(),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("_Fermer",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(3,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl1
$comp=$rep->getComponents('Lbl1');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl1");
$test->assertEquals("Type d'erreur:","".$comp->m_value,"Valeur de Lbl1");
//SELECT - errorType
$comp=$rep->getComponents('errorType');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de errorType");
$test->assertEquals("0","".$comp->m_value,"Valeur de errorType");
$test->assertEquals(5,COUNT($comp->m_select),'Nb select de errorType');
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("_Créer",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TableTest_APAS_ValiderErreur",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TableTest_APAS_ValiderErreur",array("errorType"=>"1",),"Xfer_Container_Exception");
$error=$rep->m_error;
$test->assertEquals("Critique",$error->getMessage(),'Message erreur');
$test->assertEquals(1,$error->getCode(),'Code erreur');


$rep=$test->CallAction("TestValidation","TableTest_APAS_errorManager",array(),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("_Fermer",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(3,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl1
$comp=$rep->getComponents('Lbl1');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl1");
$test->assertEquals("Type d'erreur:","".$comp->m_value,"Valeur de Lbl1");
//SELECT - errorType
$comp=$rep->getComponents('errorType');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de errorType");
$test->assertEquals("0","".$comp->m_value,"Valeur de errorType");
$test->assertEquals(5,COUNT($comp->m_select),'Nb select de errorType');
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("_Créer",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TableTest_APAS_ValiderErreur",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TableTest_APAS_ValiderErreur",array("errorType"=>"3",),"Xfer_Container_Exception");
$error=$rep->m_error;
$test->assertEquals("Important",$error->getMessage(),'Message erreur');
$test->assertEquals(3,$error->getCode(),'Code erreur');


$rep=$test->CallAction("TestValidation","TableTest_APAS_errorManager",array(),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("_Fermer",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(3,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl1
$comp=$rep->getComponents('Lbl1');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl1");
$test->assertEquals("Type d'erreur:","".$comp->m_value,"Valeur de Lbl1");
//SELECT - errorType
$comp=$rep->getComponents('errorType');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de errorType");
$test->assertEquals("0","".$comp->m_value,"Valeur de errorType");
$test->assertEquals(5,COUNT($comp->m_select),'Nb select de errorType');
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("_Créer",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TableTest_APAS_ValiderErreur",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TableTest_APAS_ValiderErreur",array("errorType"=>"2",),"Xfer_Container_Exception");
$error=$rep->m_error;
$test->assertEquals("grave",$error->getMessage(),'Message erreur');
$test->assertEquals(2,$error->getCode(),'Code erreur');


$rep=$test->CallAction("TestValidation","TableTest_APAS_errorManager",array(),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("_Fermer",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(3,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl1
$comp=$rep->getComponents('Lbl1');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl1");
$test->assertEquals("Type d'erreur:","".$comp->m_value,"Valeur de Lbl1");
//SELECT - errorType
$comp=$rep->getComponents('errorType');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de errorType");
$test->assertEquals("0","".$comp->m_value,"Valeur de errorType");
$test->assertEquals(5,COUNT($comp->m_select),'Nb select de errorType');
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("_Créer",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TableTest_APAS_ValiderErreur",$act->m_action,'Act action btn');


$rep=$test->CallAction("TestValidation","TableTest_APAS_ValiderErreur",array("errorType"=>"4",),"Xfer_Container_Exception");
$error=$rep->m_error;
$test->assertEquals("Mineur",$error->getMessage(),'Message erreur');
$test->assertEquals(4,$error->getCode(),'Code erreur');


$rep=$test->CallAction("TestValidation","TableTest_APAS_errorManager",array(),"Xfer_Container_Custom");
$test->assertEquals(1,COUNT($rep->m_actions),'nb action');
$act=$rep->m_actions[0];
$test->assertEquals("_Fermer",$act->m_title,'Titre action #1');
$test->assertEquals("",$act->m_extension,'Ext action #1');
$test->assertEquals("",$act->m_action,'Act action #1');
$test->assertEquals(3,$rep->getComponentCount(),'nb component');
//LABELFORM - Lbl1
$comp=$rep->getComponents('Lbl1');
$test->assertClass("Xfer_Comp_LabelForm",$comp,"Classe de Lbl1");
$test->assertEquals("Type d'erreur:","".$comp->m_value,"Valeur de Lbl1");
//SELECT - errorType
$comp=$rep->getComponents('errorType');
$test->assertClass("Xfer_Comp_Select",$comp,"Classe de errorType");
$test->assertEquals("0","".$comp->m_value,"Valeur de errorType");
$test->assertEquals(5,COUNT($comp->m_select),'Nb select de errorType');
//BUTTON - btn1
$comp=$rep->getComponents('btn1');
$test->assertClass("Xfer_Comp_Button",$comp,"Classe de btn1");
$act=$comp->m_action;
$test->assertEquals("_Créer",$act->m_title,'Titre action btn');
$test->assertEquals("TestValidation",$act->m_extension,'Ext action btn');
$test->assertEquals("TableTest_APAS_ValiderErreur",$act->m_action,'Act action btn');



//@CODE_ACTION@
}

?>
