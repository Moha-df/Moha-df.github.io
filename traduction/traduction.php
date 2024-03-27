<?php
// Inclure le fichier de langue approprié
$lang_file = isset($_GET['lang']) ? $_GET['lang'] . '.php' : 'en.php';
include_once("./traduction/" . $lang_file);

$About_text = $lang['About'];
$Experience_text = $lang['Experience'];
$Project_text = $lang['Project'];
$Contact_text = $lang['Contact'];
$HiIm_text = $lang['HiIm'];
$Student_text = $lang['Student'];
$CV_text = $lang['CV']; 
$cInfo_text = $lang['cInfo']; 
$Get2_text = $lang['Get2']; 
$AboutMe_text = $lang['AboutMe']; 
$scnd_text = $lang['scnd']; 
$Lotof_text = $lang['Lotof']; 
$HomePage_text = $lang['HomePage']; 
$ContactMe_text = $lang['ContactMe']; 
$MyProject_text = $lang['MyProject'];
$JoinDS_text = $lang['JoinDS']; 
