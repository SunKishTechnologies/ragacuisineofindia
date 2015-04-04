<?
@session_start();
ob_start();

 //$dbh=mysql_connect ("localhost", "hppypnts_mark", "2008sqluserACCESS") or die ('I cannot connect to the database because: ' . mysql_error());
 $dbh=mysql_connect ("localhost", "ragaaen8_sunkish", "Sun25K1s") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("ragaaen8_raga");

////////////////////////////////////////////////////
// Global Varialbles
////////////////////////////////////////////////////
$sessid=session_id();
?>