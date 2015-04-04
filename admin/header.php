<? 
session_start();
include "../conn.php";
include "../db_functions.php";
if($_SESSION[aname]=="")
{
	header("location:index.php?act=n");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<title>Admin Raaga</title>
<link rel="stylesheet" type="text/css" href="admin.css">
<script src="datetimepicker.js" language="javascript" type="text/javascript"></script>
<script src="picker.js" language="javascript" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body leftmargin="0" topmargin="0" rightmargin="0">
<table width="96%" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    
    <tr>
      <td width="49%" height="25" align="left" valign="middle" style="padding-right:10px; padding-top:10px" class="style1"><h1>&nbsp; </h1></td>
      <td width="50%" align="right" style="padding-right:9px; " class="style1">Administration Panel  <br>
<span class="white11">Logged in:
        <?=$_SESSION[aname];?>
&nbsp;| &nbsp;<a  href="lout.php" class="white11" ><span class="white11">Logout</span></a></span></td>
    </tr>
  </tbody>
</table>
<table width="96%" align="center" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
      <td width="230" height="350" valign="top" nowrap="nowrap" class="contentSide_members" style="padding: 8px;"><table cellpadding="0" cellspacing="1" width="95%">
        <tbody>
          <tr>
            <td width="100%" class="sideHeader">&nbsp;NAVIGATION </td>
          </tr>
               
            
          <tr>
		<td class="sideRow" style="padding-left:33px">&nbsp;<a class="bdytxt" href="home.php">Home</a></td>
		</tr>
		<tr>
		<td class="sideRow" style="padding-left:33px">&nbsp;<a class="bdytxt" href="ManageOffers.php">Manage Offers</a></td>
		</tr>
		          <tr>
            <td class="sideRow" style="padding-left:33px">&nbsp;<a class="bdytxt" href="ManageEmails.php">Manage Emails</a></td>
          </tr>
          <tr>
          <!--<tr>
            <td class="sideRow" style="padding-left:33px">&nbsp;<a class="bdytxt" href="settings.php">General Settings</a></td>
          </tr>
          <tr>
            <td class="sideRow" style="padding-left:33px">&nbsp;<a class="bdytxt" href="cp.php">Change Password </a></td>
          </tr>
          <tr>-->
            <td class="sideRow" style="padding-left:33px">&nbsp;<a class="bdytxt" href="lout.php">Logout</a></td>
          </tr>
          <tr>
            <td height="7" colspan="2" class="sideRow"></td>
          </tr>
          

          <tr>
      </table></td>
      <td width="100%" valign="top" style="padding-left: 8px; padding-top: 8px; padding-right: 8px;">