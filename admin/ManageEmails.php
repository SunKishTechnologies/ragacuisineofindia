<? 
	include "header.php";

	$monarr = array('Jan' => '01', 'Feb' => '02', 'Mar' => '03', 'Apr' => '04', 'May' => '05', 'Jun' => '06','Jul' => '07', 
	'Aug' => '08', 'Sep' => '09', 'Oct' => '10', 'Nov' => '11', 'Dec' => '12');
			
	//UPDATING PROCESS//
	$tblname = 'emails';
	$pk_key = 'id';
	$unique_key = 'email';
	if(isset($_POST['add_email']))
	{
		$id = InsertRecord($tblname,$_POST[newc],$unique_key,$pk_key);
		if(is_integer($id))
			$error_message = "Email added successfully";
		else
			$error_message = $id;
	}
	
	//EDITING PROCESS //
	
	
?>
<form name="email_form" method="POST" action="<?=$PHP_SELF?>" enctype="multipart/form-data">
<input type="hidden" name="act" value="add">
	<table width="100%" border="0" cellpadding="0" cellspacing="1">
		<tr>
			<td width="13%" nowrap="nowrap" class="navRow1">MANAGE EMAILS   : </td>
			<td width="87%" nowrap="nowrap" class="red" style="padding-left:9px"></td>
		</tr>
		<? if(!empty($error_message))
		{?>
		<tr><td colspan="2" align="center" style="color:#FF0000"><b><?= $error_message?></b></td></tr>
		<? }?>
		<tr>
		  <td align="right" valign="middle">Name : </td>
		  <td height="28" valign="middle"><input name="newc[name]" id="newc[name]" type="text" value="<?=$newc[name];?>" size="25" maxlength="50"/>
			&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<tr>
		  <td align="right" valign="middle">Email-ID : </td>
		  <td height="28" valign="middle"><input name="newc[email]" id="newc[email]" type="text" value="<?php echo $newc[email];?>" maxlength="100" size=40>
						</td>
		</tr>
		<tr>
		<td height="26" align="right">&nbsp;</td>
		<td><input name="add_email" type="submit" class="button" value="Add..">              </td>
		</tr>
	</table>
</form>
<?php
function Send_Mail($to, $body, $subject, $fromaddress, $fromname, $attachments=false, $first_name)
{
  $eol="\r\n";
  $mime_boundary=md5(time());

  # Common Headers
  $headers .= "From: ".$fromname."<".$fromaddress.">".$eol;
  $headers .= "Reply-To: ".$fromname."<".$fromaddress.">".$eol;
  $headers .= "Return-Path: ".$fromname."<".$fromaddress.">".$eol;    // these two to set reply address
  $headers .= "Message-ID: <".time()."-".$fromaddress.">".$eol;
  $headers .= "X-Mailer: PHP v".phpversion().$eol;          // These two to help avoid spam-filters

  # Boundry for marking the split & Multitype Headers
  $headers .= 'MIME-Version: 1.0'.$eol;
  //$headers .= "Content-Type: multipart/mixed; boundary=\"".$mime_boundary."\"".$eol;

  # HTML Version
  //$msg .= "--".$htmlalt_mime_boundary.$eol;
  $headers .= "Content-Type: text/html; charset=iso-8859-1".$eol;
  $headers .= "Content-Transfer-Encoding: 8bit";
  $msg .= "<html><head></head><body>";
  	$msg .= "<br>Dear ".ucfirst($first_name);
  $msg .= $body;
  $msg .= "</body></html>";

  # SEND THE EMAIL
  //ini_set(sendmail_from,$fromaddress);  // the INI lines are to force the From Address to be used !  
  
  $mail_sent = mail($to, $subject, $msg, $headers);
  //ini_restore(sendmail_from);
  
  return $mail_sent;
}
if(isset($_POST['email_offer']))
{
	unset($sendTo);
	$oid=$_POST[offer_id];
	$sql = mysql_query("select * from offers where id=$oid");
	$row = mysql_fetch_assoc($sql); 
	foreach($monarr as $key=>$val)
	{
		if($val == substr($row[odate],5,2))
		$month = $key;
	}
	$row[odate] = $month." ".substr($row[odate],8,2).", ". substr($row[odate],0,4); 
	$fromaddress = "mukesh@ragacuisineofindia.com";
	$fromname = "Raga Cuisine of India";
	$subject = "New Offer from Raga";
	$body = "<br><br><b><font color=$row[ocolor]><h1>".$row[title]."</h1></font></b> on <b>". $row[odate]."</b>";
	$body .= "<br><br>".$row[description];
	$body .= "<br><br><br><br><br><hr align=left width=250px>Raga Cuisine of India<br>212 Central Way, Kirkland, WA 98033<br>425.827.3300<br><a href='http://www.ragacuisineofindia.com' target='_blank'>www.ragacuisineofindia.com</a>";
	$sql = "SELECT * FROM emails";
	$result = mysql_query($sql);
	while($orow = mysql_fetch_array($result))
	{
		$sendTo[] = $orow['email'];
		$fname[] = $orow['name'];
	}
	
	for($j=0;$j<sizeof($sendTo);$j++)
	{
		Send_Mail($sendTo[$j], $body, $subject, $fromaddress, $fromname, $attachments=false, $fname[$j]);
	}
}	
?>


<form name="email_form" method="POST" action="<?=$PHP_SELF?>" enctype="multipart/form-data">
<input type="hidden" name="act" value="send_offer">
	<table width="70%"  border="0" cellspacing="1" cellpadding="2">
		<tr>
			<td><strong>Select Offer</strong></td>
			<td>	<select name="offer_id">
			<option value=""> Select Offer</option>
			<?
				$offer_sql = mysql_query("select * from offers order by id");
				while($offer_rows = mysql_fetch_array($offer_sql))
				{
				echo "<option value='$offer_rows[id]'>$offer_rows[title]</option>";		
				}	
			?>
			</select></td>
			<td><input type="submit" name="email_offer" value="Send Email to All"></td>
		</tr>
		<tr>
			<td colspan="4">&nbsp;</td>
		</tr>
	</table>
</form>
<? include "footer.php";?>
