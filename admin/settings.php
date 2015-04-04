<? include "header.php";
			
	
	//UPDATING PROCESS//
	
	if($_GET[act]=="Up")
	{
	mysql_query("update tbl_settings set name='$_POST[name]',title='$_POST[title]',heading='$_POST[heading]',meta='$_POST[meta]',stfont='$_POST[stfont]',stitlecolor='$_POST[stitlecolor]',size='$_POST[size]',bcolor='$_POST[bcolor]',font='$_POST[font]',alink='$_POST[alink]',alinkv='$_POST[alinkv]',alinka='$_POST[alinka]',alinkh='$_POST[alinkh]',bdcolor='$_POST[bdcolor]',bsize='$_POST[bsize]',finformation='$_POST[finformation]',email='$_POST[email]',imagefont='$_POST[imagefont]',imagesize='$_POST[imagesize]',imageifont='$_POST[imageifont]',imageisize='$_POST[imageisize]',dfonttype='$_POST[dfonttype]',dfontsize='$_POST[dfontsize]',navfont='$_POST[navfont]',navsize='$_POST[navsize]',navfontcolor='$_POST[navfontcolor]' where id=2");
	

	header("location:settings.php?act=udsus");
	}
	
	//EDITING PROCESS //
	

	$rw=mysql_fetch_object(mysql_query("select * from tbl_settings where id=2"));
	
?>
<table class="navTable" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td width="13%" nowrap="nowrap" class="navRow1">GENERAL SETTINGS   : </td>
<td width="87%" nowrap="nowrap" class="red" style="padding-left:9px">
	<? 
	if($_GET[act]=="udsus"){ echo "Settings page contents has been updated Successfully !...";}
	if($_GET[act]=="dsus"){ echo "Settings page contents has been deleted Successfully !...";}
	if($_GET[act]=="adsus"){ echo "Settings page contents has been added Successfully !...";}
	?>
</td>
</tr>
</tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="1" class="gridTable">
<form name=tcp_test method="POST" action="<?=$PHP_SELF?>?act=Up" enctype="multipart/form-data">
<tr >
<td height="26" colspan="2" align="left" class="gridHeader" >&nbsp;HEADER INFORMATION  </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site Name : </td>
  <td height="28" valign="middle" class="gridRow1"><textarea name="name" cols="45" rows="2"><?=$rw->name?></textarea> 
    <br />
    [ will be displayed in footer, email messages ] </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site Title : </td>
  <td height="28" valign="middle" class="gridRow1"><textarea name="title" cols="45" rows="2"><?=$rw->title?></textarea>
    <br />
    [ will be displayed in the browser title] </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site Heading : </td>
  <td height="28" valign="middle" class="gridRow1"><textarea name="heading" cols="45" rows="2"><?=$rw->heading?></textarea>
    <br />
    [ will be displayed at the top of the home page] </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Meta Tags : </td>
  <td height="28" valign="middle" class="gridRow1"><textarea name="meta" cols="45" rows="2"><?=$rw->meta?></textarea>
    <br />
    [ site meta tags for SEO] </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site  Logo Font : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="stfont">
    <option value="Arial" <? if($rw->stfont=="Arial") { echo "selected"; }?>>Arial</option>
    <option value="Verdana" <? if($rw->stfont=="Verdana") { echo "selected"; }?>>Verdana</option>
    <option value="Times New Roman" <? if($rw->stfont=="Times New Roman") { echo "selected"; }?>>Times New Roman</option>
  </select>  </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site Logo Font Size : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="size">
    <? 
  for ($i = 1; $i <= 45; $i++) 
  {
  ?>
    <option value="<?=$i;?>" <? if($rw->size==$i) { echo "selected"; }?>>
      <?=$i;?>
      </option>
    <?
  }
  ?>
  </select>  </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site Logo  Font Color : </td>
  <td height="28" valign="middle" class="gridRow1"><input name="stitlecolor" type="text" value="<?=$rw->stitlecolor;?>" size="7" />
    &nbsp;&nbsp;&nbsp;<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['stitlecolor'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/sel.gif" /></a></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site Background Color : </td>
  <td height="28" valign="middle" class="gridRow1"><input name="bcolor" type="text" value="<?=$rw->bcolor;?>" size="7" />
    &nbsp;&nbsp;&nbsp;<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['bcolor'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/sel.gif" /></a></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td height="28" colspan="2" align="left" valign="middle" class="gridHeader">FOOTER INFORMATION</td>
  </tr>
  <tr bgcolor="#FFFFFF">
<td width="35%" align="right" valign="middle" class="gridRow1">Footer : </td>
<td height="28" valign="middle" class="gridRow1"><textarea name="finformation" cols="55" rows="6"><?=$rw->finformation?></textarea> </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td height="28" colspan="2" align="left" valign="middle" class="gridHeader">BODY STYLES</td>
  </tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site Title Font Color : </td>
  <td height="28" valign="middle" class="gridRow1"><input name="bdcolor" type="text" value="<?=$rw->bdcolor;?>" size="7" />
    &nbsp;&nbsp;<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['bdcolor'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/sel.gif" /></a></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site  Title Font Type : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="font">
    <option value="Arial" <? if($rw->font=="Arial") { echo "selected"; }?>>Arial</option>
    <option value="Verdana" <? if($rw->font=="Verdana") { echo "selected"; }?>>Verdana</option>
    <option value="Times New Roman" <? if($rw->font=="Times New Roman") { echo "selected"; }?>>Times New Roman</option>
  </select>  </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site Title Font Size : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="bsize">
    <? 
  for ($i = 1; $i <= 45; $i++) 
  {
  ?>
    <option value="<?=$i;?>"  <? if($rw->bsize==$i) { echo "selected"; }?>>
      <?=$i;?>
      </option>
    <?
  }
  ?>
  </select></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site  Description  Font Type : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="dfonttype">
    <option value="Arial" <? if($rw->dfonttype=="Arial") { echo "selected"; }?>>Arial</option>
    <option value="Verdana" <? if($rw->dfonttype=="Verdana") { echo "selected"; }?>>Verdana</option>
    <option value="Times New Roman" <? if($rw->dfonttype=="Times New Roman") { echo "selected"; }?>>Times New Roman</option>
  </select></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Site Description Font Size : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="dfontsize">
    <? 
  for ($i = 1; $i <= 45; $i++) 
  {
  ?>
    <option value="<?=$i;?>"  <? if($rw->dfontsize==$i) { echo "selected"; }?>>
      <?=$i;?>
      </option>
    <?
  }
  ?>
  </select></td>
</tr>

<tr bgcolor="#FFFFFF">
  <td height="28" colspan="2" align="left" valign="middle" class="gridHeader">SITE NAVIGATION LINKS </td>
  </tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">  Navigation Font Type : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="navfont">
    <option value="Arial" <? if($rw->navfont=="Arial") { echo "selected"; }?>>Arial</option>
    <option value="Verdana" <? if($rw->navfont=="Verdana") { echo "selected"; }?>>Verdana</option>
    <option value="Times New Roman" <? if($rw->navfont=="Times New Roman") { echo "selected"; }?>>Times New Roman</option>
  </select>  </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1"> Navigation Text Size : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="navsize">
    <? 
  for ($i = 1; $i <= 45; $i++) 
  {
  ?>
    <option value="<?=$i;?>"  <? if($rw->navsize==$i) { echo "selected"; }?>>
      <?=$i;?>
      </option>
    <?
  }
  ?>
  </select></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Navigation Color : </td>
  <td height="28" valign="middle" class="gridRow1"><input name="navfontcolor" type="text" value="<?=$rw->navfontcolor;?>" size="7" />
    &nbsp;&nbsp;&nbsp;<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['navfontcolor'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/sel.gif" /></a></td>
</tr>


<tr bgcolor="#FFFFFF">
  <td height="28" colspan="2" align="left" valign="middle" class="gridHeader">SITE ANCHOR LINKS </td>
  </tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Anchor Link : </td>
  <td height="28" valign="middle" class="gridRow1">
    <input name="alink" type="text" value="<?=$rw->alink;?>" size="7" />&nbsp;&nbsp;&nbsp;<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['alink'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/sel.gif" /></a></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Anchor Link Visited : </td>
  <td height="28" valign="middle" class="gridRow1">
    <input name="alinkv" type="text" value="<?=$rw->alinkv;?>" size="7" />&nbsp;&nbsp;&nbsp;<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['alinkv'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/sel.gif" /></a></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Anchor Link Active  : </td>
  <td height="28" valign="middle" class="gridRow1">
    <input name="alinka" type="text" value="<?=$rw->alinka;?>" size="7" />&nbsp;&nbsp;&nbsp;<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['alinka'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/sel.gif" /></a></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">Anchor Link Hover : </td>
  <td height="28" valign="middle" class="gridRow1"><input name="alinkh" type="text" value="<?=$rw->alinkh;?>" size="7" />    &nbsp;&nbsp;<a href="javascript:TCP.popup(document.forms['tcp_test'].elements['alinkh'])"><img width="15" height="13" border="0" alt="Click Here to Pick up the color" src="images/sel.gif" /></a></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td height="28" colspan="2" align="left" valign="middle" class="gridHeader">IMAGE FONT SETTINGS</td>
  </tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1"> Title Font Type : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="imagefont">
    <option value="Arial" <? if($rw->imagefont=="Arial") { echo "selected"; }?>>Arial</option>
    <option value="Verdana" <? if($rw->imagefont=="Verdana") { echo "selected"; }?>>Verdana</option>
    <option value="Times New Roman" <? if($rw->imagefont=="Times New Roman") { echo "selected"; }?>>Times New Roman</option>
  </select>  </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1"> Title Text Size : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="imagesize">
    <? 
  for ($i = 1; $i <= 45; $i++) 
  {
  ?>
    <option value="<?=$i;?>"  <? if($rw->imagesize==$i) { echo "selected"; }?>>
      <?=$i;?>
      </option>
    <?
  }
  ?>
  </select></td>
</tr>

<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1">  Description Font Type : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="imageifont">
    <option value="Arial" <? if($rw->imageifont=="Arial") { echo "selected"; }?>>Arial</option>
    <option value="Verdana" <? if($rw->imageifont=="Verdana") { echo "selected"; }?>>Verdana</option>
    <option value="Times New Roman" <? if($rw->imageifont=="Times New Roman") { echo "selected"; }?>>Times New Roman</option>
  </select>  </td>
</tr>
<tr bgcolor="#FFFFFF">
  <td align="right" valign="middle" class="gridRow1"> Description Text Size : </td>
  <td height="28" valign="middle" class="gridRow1"><select name="imageisize">
    <? 
  for ($i = 1; $i <= 45; $i++) 
  {
  ?>
    <option value="<?=$i;?>"  <? if($rw->imageisize==$i) { echo "selected"; }?>>
      <?=$i;?>
      </option>
    <?
  }
  ?>
  </select></td>
</tr>

<tr bgcolor="#FFFFFF">
  <td height="28" colspan="2" align="left" valign="middle" class="gridHeader">ADMINISTRATOR EMAIL ADDRESS </td>
  </tr>
<tr bgcolor="#FFFFFF">
<td width="35%" align="right" valign="middle" class="gridRow1">Email : </td>
<td height="28" valign="middle" class="gridRow1"><input name="email" type="text" value="<?=$rw->email?>" size="45">
<input type="hidden" name="dd"  value="<?=$rw->id?>"></td>
</tr>
<tr bgcolor="#FFFFFF">
<td height="26" align="right" class="gridHeader">&nbsp;</td>
<td class="gridHeader"><input name="Submit" type="submit" class="button" value="Update..">              </td>
</tr>
</form>
</table>
<? include "footer.php";?>
