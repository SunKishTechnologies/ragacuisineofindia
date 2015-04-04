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
  
  if ($attachments !== false)
  {
    for($i=0; $i < count($attachments); $i++)
    {
      if (is_file($attachments[$i]["file"]))
      {   
        # File for Attachment
        $file_name = substr($attachments[$i]["file"], (strrpos($attachments[$i]["file"], "/")+1));
        
        $handle=fopen($attachments[$i]["file"], 'rb');
        $f_contents=fread($handle, filesize($attachments[$i]["file"]));
        $f_contents=chunk_split(base64_encode($f_contents));    //Encode The Data For Transition using base64_encode();
        $f_type=filetype($attachments[$i]["file"]);
        fclose($handle);
        
        # Attachment
        $headers .= $eol."--".$mime_boundary.$eol;
        $headers .= "Content-Type: ".$attachments[$i]["content_type"]."; name=\"".$file_name."\"".$eol;  // sometimes i have to send MS Word, use 'msword' instead of 'pdf'
        $headers .= "Content-Transfer-Encoding: base64".$eol;
        $headers .= "Content-Description: ".$file_name.$eol;
        $headers .= "Content-Disposition: attachment; filename=\"".$file_name."\"".$eol.$eol; // !! This line needs TWO end of lines !! IMPORTANT !!
        $headers .= $f_contents.$eol.$eol;
      }
    }
  }
  
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
if(isset($_POST['sendfax']))
{
	$fax_address = "+1(425) 827 0220@fax.tc";
	$fax_email = "mukesh@ragacuisineofindia.com";
	$fromaddress = "mukesh@ragacuisineofindia.com";
	$fromname = "Raga Cuisine of India";
	$fname = "RAAGA FIRST NAME";
	$subject = "New Offer from Raga";
	$file_path = "/home/ragaaen8/public_html/raga.doc";
	$attachments[] = $file_path;
	$body = "Fax sent";
	$subject = "Fax";
	Send_Mail($fax_address, $body, $subject, $fromaddress, $fromname, $attachments, $fname);
}
?>
<form name="fax_form" method="POST" action="<?=$PHP_SELF?>" enctype="multipart/form-data">
<input type="hidden" name="act" value="add">

<tr>
  <td align="right" valign="middle">Subject: </td>
  <td height="28" valign="middle"><input name="newc[title]" id="newc[title]" type="text" value="" maxlength="250">
    <br />
    </td>
</tr>
<tr>
  <td align="right" valign="middle">Fax Description : </td>
  <td height="28" valign="middle"><textarea name="newc[description]" id="newc[description]" cols="45" rows="2"></textarea>
    <br />
 </td>
</tr>
<tr>
  <td align="right" valign="middle">File: </td>
  <td height="28" valign="middle"><input name="send_file" id="fax_file" type="file"> 
    <br />
 </td>
</tr>
<tr>
<td height="26" align="right">&nbsp;</td>
<td><input name="sendfax" type="submit" class="button" value="Send">              </td>
</tr>
</form>
<?php

/**************** Settings begin **************/

$username  = 'sunkish'; // Enter your Interfax username here
$password  = 'Sun25K1s'; // Enter your Interfax password here
$faxnumber = '0014258270220'; // Enter your designated fax number here in the format +[country code][area code][fax number], for example: +12125554874
$texttofax = 'My text goes here'; // Enter your fax contents here
$file_path = "/home/ragaaen8/public_html/raga.doc";
$file = fopen($file_path,'rb'); 
$data = fread($file,filesize($file_path)); 
fclose($file); 
$data = chunk_split(base64_encode($data));
$filedata = $data;
$filetype  = 'DOC'; // If $texttofax is regular text, enter TXT here. If $texttofax is HTML enter HTML here

/**************** Settings end ****************/

$client = new SoapClient("http://ws.interfax.net/dfs.asmx?wsdl");
$faxResult = $client->Sendfax(array('Username'    => $username, 
                                        'Password'    => $password, 
                                        'FaxNumber'   => $faxnumber, 
                                        'FileData'        => $filedata, 
                                        'FileType'    => $filetype));

print_r($faxResult);
?>
