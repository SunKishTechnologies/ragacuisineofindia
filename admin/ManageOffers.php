<? 
	include "header.php";
	$monarr = array('Jan' => '01', 'Feb' => '02', 'Mar' => '03', 'Apr' => '04', 'May' => '05', 'Jun' => '06','Jul' => '07', 
	'Aug' => '08', 'Sep' => '09', 'Oct' => '10', 'Nov' => '11', 'Dec' => '12');
			
	//UPDATING PROCESS//
	$tblname = 'offers';
	$pk_key = 'id';
	$unique_key = 'title';
	if(isset($_POST['addoffer']))
	{
		$newc = array();
		$newc = $_POST[newc];	
		$newc[odate] = substr($_POST['offer_date'],7,4)."-".$monarr[substr($_POST['offer_date'],3,3)]."-".substr($_POST['offer_date'],0,2);
		$id = InsertRecord($tblname,$newc,$unique_key,$pk_key);
		if(is_integer($id))
		{
			$error_message = "Offer added successfully";
		}	
		else
			$error_message = $id;
	}
	
	//EDITING PROCESS //
	
	
?>
<table width="100%" border="0" cellpadding="0" cellspacing="1" class="gridTable">
<tr>
<td width="13%" nowrap="nowrap" class="navRow1">MANAGE OFFERS   : </td>
<td width="87%" nowrap="nowrap" class="red" style="padding-left:9px">
</td>
</tr>
<? if(!empty($error_message))
{?>
<tr><td colspan="2" align="center" style="color:#FF0000"><b><?= $error_message?></b></td></tr>
<? }?>
<form name="offer_form" method="POST" action="<?=$PHP_SELF?>" enctype="multipart/form-data">
<input type="hidden" name="act" value="add">

<tr>
  <td align="right" valign="middle">Offer Title : </td>
  <td height="28" valign="middle"><input name="newc[title]" id="newc[title]" type="text" value="<?php echo $newc[title];?>" maxlength="250">
    <br />
    </td>
</tr>
<tr>
  <td align="right" valign="middle">Offer Description : </td>
  <td height="28" valign="middle"><textarea name="newc[description]" id="newc[description]" cols="45" rows="2"><?php echo $newc[description];?></textarea>
    <br />
 </td>
</tr>
<tr>
  <td align="right" valign="middle">Offer Date : </td>
  <td height="28" valign="middle"><input name="offer_date" id="offer_date" value="<?php echo $newc[odate];?>" maxlength="10" readonly="true"> <span><a href="javascript:NewCal('offer_date','ddmmmyyyy',true,24)"><img src="../images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></span>
    <br />
 </td>
</tr>
<tr>
  <td align="right" valign="middle">Offer Font Color : </td>
  <td height="28" valign="middle"><input name="newc[ocolor]" id="newc[ocolor]" type="text" value="<?=$newc[ocolor];?>" size="7" />
    &nbsp;&nbsp;&nbsp;<a href="javascript:TCP.popup(document.offer_form.elements['newc[ocolor]'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="../images/sel.gif" /></a></td>
</tr>
<tr>
<td height="26" align="right">&nbsp;</td>
<td><input name="addoffer" type="submit" class="button" value="Add..">              </td>
</tr>
</form>
</table>
<? include "footer.php";?>
