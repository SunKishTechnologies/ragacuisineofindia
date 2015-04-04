<?php

/**************** Settings begin **************/

$username  = 'sunkish'; // Enter your Interfax username here
$password  = 'Sun25K1s'; // Enter your Interfax password here
$faxnumber = '+14258270220'; // Enter your designated fax number here in the format +[country code][area code][fax number], for example: +12125554874
$texttofax = 'My text goes here'; // Enter your fax contents here
$old_file_path = "/home/ragaaen8/public_html/admin/groceries.doc";
$file_path = "http://www.ragacuisineofindia.com/menu.doc";
$file = fopen($old_file_path,'rb'); 
$data = fread($file,filesize($old_file_path)); 
fclose($file); 
//$data = chunk_split(base64_encode($data));
$filedata = $data;
$filetype  = 'DOC'; // If $texttofax is regular text, enter TXT here. If $texttofax is HTML enter HTML here

/**************** Settings end ****************/

$client = new SoapClient("http://ws.interfax.net/dfs.asmx?wsdl");
$faxResult = $client->Sendfax(array('Username'    => $username, 
                                        'Password'    => $password, 
                                        'FaxNumber'   => $faxnumber, 
                                        'FileData'        => $filedata, 
                                        'FileType'    => $filetype));
										
//$result = $client->SendfaxEx($username, $password, $faxnumber, base64_encode($data), $filetype, strlen($data), '2007-04-25T20:31:00-04:00', 0, 'INTERFAX', 'hi', 'mukesh@ragacuisineofindia.com'); 

// Echo Result
//if($result > 0) echo "Fax submitted. Transaction ID:".print_r($result);
//else echo "Error sending fax. Return code: $result";

										
print_r($faxResult);
?>
