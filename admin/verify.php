<?
include("../conn.php");
session_start();
session_register("aname");
if(isset($_POST[Submit]))
{
	$sql="SELECT COUNT(id) as cnt FROM users WHERE username='$_POST[user]' AND password=PASSWORD('$_POST[password]')";
	$result=mysql_query($sql) or die(mysql_error());
	$rows = mysql_fetch_array($result);
	if($rows[0]['cnt'] > 0)
	{
		$rw=mysql_fetch_object($result);
		$_SESSION[aname]=$_POST[user];
		$_SESSION[aid]=$rw->id;
		Header("Location:home.php");
	}
	else
	{
		Header("Location:index.php?act=n&resultrows=".$n);
	}
}
?>