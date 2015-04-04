<?
/**
* Send a Fax using PHP/PEAR::SOAP Example:
* - Using SendfaxEx() Method from InterFax Web Services
*/

/**
* Your variables go here - assign a value to each one
*/
$username = "sunkish";
$password = "Sun25K1s";
$faxnumber = "+14258270220";  // formatted like +13055551234, i.e. +(country code)(area code)(phone number)
$file = "http://www.ragacuisineofindia.com/raga.doc"; // binary file to fax
$filetype = "DOC"; //e.g. HTML, DOC, PDF, etc.; see documentation for complete list
$postponetime = "2008-04-25T20:31:00-04:00";  //e.g. 2001-04-25T20:31:00-04:00, use a past date/time to fax immediately
$resolution = "0"; // 0 for standard, 1 for fine
$csid = "INTERFAX"; // your fax identifier, visible on the receiving machine's little screen
$subject = "Raaga doc"; // for your reference, visible in the outbound queue
$replyemail = "suneesha.chinni@gmail.com"; //optional address at which to receive an emailed confirmation

/**
* PEAR::SOAP class [http://pear.php.net/package/SOAP]
*/
//require_once 'SOAP/Client.php'; 

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

// URL path to InterFax Web Services
$wsdl_url = 'http://ws.interfax.net/dfs.asmx?wsdl';

// Create an instance of the SOAP_WSDL class
$WSDL = new SOAP_WSDL($wsdl_url); 

/**
* This function creates a proxy to the SOAP services
* so that you can access the InterFax methods directly
* as if you were calling a local function
*/
$client = $WSDL->getProxy(); 

/**
* Invoke the InterFax SendfaxEx Method
* NOTE: 'base64_encode' is a native method in PHP [http://www.php.net/manual/en/function.base64-encode.php]
*/
$result = $client->SendfaxEx($username, $password, $faxnumber, base64_encode($data), $filetype, strlen($data), $postponetime, $resolution, $csid, $subject, $replyemail); 

// Echo Result
if($result > 0) echo "Fax submitted. Transaction ID: $result";
else echo "Error sending fax. Return code: $result";
?>