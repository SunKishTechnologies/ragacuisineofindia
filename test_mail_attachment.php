<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<? 
include 'mail_attachment.php';
$fax_address = "+14258270220@fax.tc";
//$fax_address2 = "+1(425)827-0220@fax.tc";
$fax_email = "mukesh@ragacuisineofindia.com";
$fromaddress = "mukesh@ragacuisineofindia.com";
$fromname = "Raga Cuisine of India";
$fname = "RAAGA FIRST NAME";
$subject = "New Offer from Raga";
$file_path = "/home/ragaaen8/public_html/raga.doc";
//mail_attachment($fromaddress, $fax_address, $subject, "message", $file_path);
mail_attachment($fromaddress, $fax_address, $subject, "message", $file_path);
?>
</body>
</html>
