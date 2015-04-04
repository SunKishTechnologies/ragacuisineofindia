<?
$_SESSION[aname]="";
session_unregister("aname");
header("location:index.php?act=lout");
?>