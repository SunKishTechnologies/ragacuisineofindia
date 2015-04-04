<?php

require_once('nusoap-0.7.3/lib/nusoap.php');

$username     = "sunkish";
$password     = "Sun25K1s";
$faxnumber    = "+14258270220";  // formatted like +13055551234,
                     // i.e. +(country code)(area code)(phone number)
$file         = "/home/ragaaen8/public_html/raga.doc";  // binary file to fax
$filetype     = "DOC";  // e.g. HTML, DOC, PDF, etc.; see
                     // documentation for complete list
$postponetime = "2008-09-26T";  // e.g. 2001-04-25T20:31:00-04:00,
                     // use a past date/time to fax immediately
$resolution   = "1";  // 0 for standard, 1 for fine
$csid         = "123";  // your fax identifier, visible on
                     // the receiving machine's little screen
$subject      = "test fax from suneesha";  // for your reference, visible in the outbound queue
$replyemail   = "mukesh@ragacuisineofindia.com";  // optional address at which to receive an
                     // emaile2d confirmation

// Open File
if( !($fp = fopen($file, "r")))
{
// Error opening file
// Handle error how it is appropriate for your script
exit;
}

// Read data from the file into $data
$data = "";
while (!feof($fp)) $data .= fread($fp,1024);

$client = new soapclient("http://ws.interfax.net/dfs.asmx?wsdl", true);

$params[] = array('Username'       =>  $username,
                'Password'         =>  $password,
                'FaxNumbers'       =>  $faxnumber,
                'FilesData'        =>  base64_encode($data),
                'FileTypes'        =>  $filetype,
                'FileSizes'        =>  strlen($data),
                'Postpone'         =>  $postponetime,
                'IsHighResolution' =>  $resolution, 
                'CSID'             =>  $csid,
                'Subject'          =>  $subject,
                'ReplyAddress'     =>  $replyemail
                );

$result = $client->call("SendfaxEx", $params);

echo $result["SendfaxExResult"];

?>
