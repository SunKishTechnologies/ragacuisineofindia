<?php 
	include("conn.php");
	include_once("header.php");
	require_once("db_functions.php");
	$tbl_name = 'feedback';
	$key = "email";
	$pk_key = "feedback_id";
	if(isset($_POST['submit1']))
	{
		if($_REQUEST[action_type] == 'add') 
		 {
		 	$message = InsertRecord($tbl_name,$_POST,$key,$pk_key);
		 }
	}
?>


<div align="center"><strong>WE WANT TO KNOW</strong>
  <br>
  <br>
  <?php
  if($message != "")
  {
	  echo "<h2><font color='#99CC00'>$message</font></h2>"."<br><br>";
  }
  ?>
   <br>
  <br>
  
All of us at Raga care about you and want your dining experience enjoyable in every respect. To help us make your eating experience better, please take a few moment to complete this feedback form.
</div>
<Form action="Feedback.php" method="post">
<input type="hidden" name="action_type" value="add">
<table border="0" align="center" cellpadding="2" cellspacing="2">
<tr>
  <td width="294" align="left"><strong>Is this your first visit here?</strong></td>
  <td width="306" align="left">
	<input type="radio" name="first_visit" value="1"> 
Yes 
  <input type="radio" name="first_visit" value="2"> 
  No 
</td>
</tr>

<tr>
<td align="left" colspan="2"><div align="left"><strong>How would you rate the following</strong>?</div></td>
</tr>
<tr><td><div align="left"><strong>Service : </strong></div></td>
<td align="left">
  <div align="left">
      <input type="radio" name="service" value="1"> 
      Excellent 
      <input type="radio" name="service" value="2"> 
      Good 
      <input type="radio" name="service" value="0"> 
      Poor</div></td></tr>

<tr>
  <td><div align="left"><strong>Food : </strong></div></td>
  <td align="left">
    <div align="left">
        <input type="radio" name="food" value="1"> 
        Excellent 
        <input type="radio" name="food" value="2"> 
        Good 
        <input type="radio" name="food" value="0"> 
      Poor</div></td></tr>
<tr>
  <td><div align="left"><strong>Atmosphere : </strong></div></td>
  <td align="left">
    <div align="left">
        <input type="radio" name="atmosphere" value="1"> 
        Excellent 
        <input type="radio" name="atmosphere" value="2"> 
        Good 
        <input type="radio" name="atmosphere" value="0"> 
      Poor</div></td></tr>
<tr><td><div align="left"><strong>Overall dining experience : </strong></div></td>
<td align="left">
  <div align="left">
      <input type="radio" name="overall" value="1"> 
      Excellent 
      <input type="radio" name="overall" value="2"> 
      Good 
      <input type="radio" name="overall" value="0"> 
      Poor</div></td></tr>
<tr>
<td align="right"><div align="left"><strong>Would you return to Raga for another experience : </strong></div></td>
<td align="left"><div align="left">
      <input type="radio" name="next_visit" value="1"> 
  Yes 
    <input type="radio" name="next_visit" value="2"> 
    No </div></td>
</tr>
<tr>
	<td align="right"><div align="left"><strong>Your name : </strong></div></td>
	<td align="left"><div align="left">
	  <input type="text" name="cname" size="25" />
	  </div></td>
</tr>
<tr>
	<td align="right"><div align="left"><strong>Your e-mail address : </strong></div></td>
	<td align="left"><div align="left">
	  <input type="text" name="email" size="25" />
	  </div></td>
</tr>
<tr>
	<td align="left" colspan="2" style="padding-left:25px;"><div align="left">
	  <input type="checkbox" name="email_offers" value="1"> 
	  <strong>Please check this box if you would like to recieve  emails about special offers from Raga </strong></div></td>
</tr>
<tr><td colspan="2" align="center">
<strong><em>Any other suggestions/comments/compliments or complaints:
</em></strong><br><textarea name="comments" rows="5" cols="40"></textarea></td></tr>
<tr><td colspan="2" align="center"><input type="SUBMIT" value="Submit" name="submit1"/></td></tr>
</table>
</Form>
<br />
</div>
<?php include "footer.php"?>