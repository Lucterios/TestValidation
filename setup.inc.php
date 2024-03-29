<?php
// This file is part of Diacamma, a software developped by "Le Sanglier du Libre" (http://www.sd-libre.fr)
// Thanks to have payed a retribution for using this module.
// 
// Diacamma is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
// 
// Diacamma is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with Lucterios; if not, write to the Free Software
// Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
// 
// Contributeurs: Fanny ALLEAUME, Pierre-Olivier VERSCHOORE, Laurent GAY
// setup file write by Lucterios SDK tool

$extention_name="TestValidation";
$extention_description="TestValidation";
$extention_appli="";
$extention_famille="";
$extention_titre="TestValidation";
$extension_libre=true;

$version_max=0;
$version_min=5;
$version_release=3;
$version_build=466;

$depencies=array();
$depencies[0] = new Param_Depencies("CORE", 1, 5, 1, 4, false);
$depencies[1] = new Param_Depencies("exemple", 0, 10, 0, 1, true);
$depencies[2] = new Param_Depencies("org_lucterios_contacts", 1, 4, 1, 3, false);

$rights=array();
$rights[0] = new Param_Rigth("Action Simple",50);

$menus=array();
$menus[0] = new Param_Menu("Validation", "", "", "", "", 99 , 0, "");
$menus[1] = new Param_Menu("Composants", "_Evenement", "TestComposants", "", "", 10 , 1, "");
$menus[2] = new Param_Menu("Composants (non modal)", "_Evenement", "TestComposants", "", "", 20 , 0, "");
$menus[3] = new Param_Menu("_Evenement", "Validation", "", "", "", 10 , 0, "");
$menus[4] = new Param_Menu("E_rreurs", "Validation", "", "", "", 20 , 0, "");
$menus[5] = new Param_Menu("_Manageur", "E_rreurs", "TableTest_APAS_errorManager", "", "", 10 , 1, "");
$menus[6] = new Param_Menu("_Table", "E_rreurs", "TableTest_APAS_ErrorInTable", "", "", 20 , 0, "");
$menus[7] = new Param_Menu("_Nouveau composants", "Validation", "NewComponent", "", "", 30 , 0, "");
$menus[8] = new Param_Menu("Veroux", "Validation", "TableTest_APAS_veroux", "", "", 40 , 1, "");
$menus[9] = new Param_Menu("Recherche (non-modal)", "Validation", "SuperTableTest_APAS_Search", "", "", 60 , 0, "");
$menus[10] = new Param_Menu("Liste", "Validation", "SuperTableTest_APAS_List", "", "", 62 , 0, "");
$menus[11] = new Param_Menu("Téléchargement", "Validation", "UpAndDownLoad", "", "", 70 , 1, "");
$menus[12] = new Param_Menu("Selection de contacts", "Validation", "selectContact", "", "", 80 , 0, "");
$menus[13] = new Param_Menu("Traitement", "_Evenement", "traitementLong", "", "", 30 , 1, "");
$menus[14] = new Param_Menu("Grille spéciale", "Validation", "grilleSpecial", "", "", 100 , 1, "Grille spéciale");
$menus[15] = new Param_Menu("Recherche (modal)", "Validation", "SuperTableTest_APAS_Search", "", "", 61 , 1, "");

$actions=array();
$actions[0] = new Param_Action("Fermeture de l'action", "CloseEvenement", 0);
$actions[1] = new Param_Action("", "LoadFile", 0);
$actions[2] = new Param_Action("Valider un MachinTable", "MachinTable_APAS_AddModifyAct", 0);
$actions[3] = new Param_Action("Ajouter/Modifier un MachinTable", "MachinTable_APAS_AddModify", 0);
$actions[4] = new Param_Action("Supprimer un MachinTable", "MachinTable_APAS_Del", 0);
$actions[5] = new Param_Action("Fiche d'un MachinTable", "MachinTable_APAS_Fiche", 0);
$actions[6] = new Param_Action("Lister des MachinTable", "MachinTable_APAS_List", 0);
$actions[7] = new Param_Action("Nouveau composants", "NewComponent", 0);
$actions[8] = new Param_Action("Valider un SuperContact", "SuperContact_APAS_AddModifyAct", 0);
$actions[9] = new Param_Action("Ajouter/Modifier un SuperContact", "SuperContact_APAS_AddModify", 0);
$actions[10] = new Param_Action("Supprimer un SuperContact", "SuperContact_APAS_Del", 0);
$actions[11] = new Param_Action("Fiche d'un SuperContact", "SuperContact_APAS_Fiche", 0);
$actions[12] = new Param_Action("Lister des SuperContact", "SuperContact_APAS_List", 0);
$actions[13] = new Param_Action("Valider un SuperTableTest", "SuperTableTest_APAS_AddModifyAct", 0);
$actions[14] = new Param_Action("Ajouter/Modifier un SuperTableTest", "SuperTableTest_APAS_AddModify", 0);
$actions[15] = new Param_Action("Supprimer un SuperTableTest", "SuperTableTest_APAS_Del", 0);
$actions[16] = new Param_Action("Fiche d'un SuperTableTest", "SuperTableTest_APAS_Fiche", 0);
$actions[17] = new Param_Action("Lister des SuperTableTest", "SuperTableTest_APAS_List", 0);
$actions[18] = new Param_Action("Rechercher un SuperTableTest", "SuperTableTest_APAS_Search", 0);
$actions[19] = new Param_Action("Envoyer par courriel", "SuperTableTest_APAS_SendMail", 0);
$actions[20] = new Param_Action("Impression", "SuperTableTest_APAS_print", 0);
$actions[21] = new Param_Action("Erreurs en Base", "TableTest_APAS_ErrorInTable", 0);
$actions[22] = new Param_Action("Lister des TableTest", "TableTest_APAS_List", 0);
$actions[23] = new Param_Action("Rechercher un TableTest", "TableTest_APAS_Search", 0);
$actions[24] = new Param_Action("Truc", "TableTest_APAS_Truc", 0);
$actions[25] = new Param_Action("Valider une erreur", "TableTest_APAS_ValiderErreur", 0);
$actions[26] = new Param_Action("Ajouter", "TableTest_APAS_ajouter", 0);
$actions[27] = new Param_Action("Editer", "TableTest_APAS_editer", 0);
$actions[28] = new Param_Action("Ecran des erreurs", "TableTest_APAS_errorManager", 0);
$actions[29] = new Param_Action("Supprimer", "TableTest_APAS_suppr", 0);
$actions[30] = new Param_Action("Valider", "TableTest_APAS_valider", 0);
$actions[31] = new Param_Action("verouxDlg", "TableTest_APAS_verouxDlg", 0);
$actions[32] = new Param_Action("verouxSimple", "TableTest_APAS_verouxSimple", 0);
$actions[33] = new Param_Action("veroux", "TableTest_APAS_veroux", 0);
$actions[34] = new Param_Action("Action de validation des composants", "TestComposants", 0);
$actions[35] = new Param_Action("Valider un TrucTable", "TrucTable_APAS_AddModifyAct", 0);
$actions[36] = new Param_Action("Ajouter/Modifier un TrucTable", "TrucTable_APAS_AddModify", 0);
$actions[37] = new Param_Action("Supprimer un TrucTable", "TrucTable_APAS_Del", 0);
$actions[38] = new Param_Action("Fiche d'un TrucTable", "TrucTable_APAS_Fiche", 0);
$actions[39] = new Param_Action("Lister des TrucTable", "TrucTable_APAS_List", 0);
$actions[40] = new Param_Action("Téléchargement", "UpAndDownLoad", 0);
$actions[41] = new Param_Action("Grille spéciale", "grilleSpecial", 0);
$actions[42] = new Param_Action("menuTab", "menuTab", 0);
$actions[43] = new Param_Action("", "selectContact", 0);
$actions[44] = new Param_Action("Traitement long", "traitementLong", 0);

$params=array();

$extend_tables=array();
$extend_tables["AutreTable"] = array("TestValidation.AutreTable","",array("TestValidation_TableTest"=>"test",));
$extend_tables["MachinTable"] = array("TestValidation.MachinTable","",array("TestValidation_TrucTable"=>"truc",));
$extend_tables["SuperContact"] = array("Super-contact","org_lucterios_contacts/personnePhysique",array());
$extend_tables["SuperTableTest"] = array("Super table test","TestValidation/TableTest",array());
$extend_tables["TableTest"] = array("TestValidation.TableTest","",array());
$extend_tables["TrucTable"] = array("TestValidation.TrucTable","",array("TestValidation_SuperTableTest"=>"superTest",));
$signals=array();

?>