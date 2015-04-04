<?php
/*function for inserting a record into table
$tblname : Name of the table
$resarr  : Result Array to be inserted
$key     : Unique Key of the table
$pk_key  : Primary key of the table
*/

function InsertRecord($tblname,$resarr,$key,$pk_key)
{
	global $msdb;	
	if($tblname != "feedback")
	{
		$sql = mysql_query("select count($pk_key) as tot from $tblname where $key='".$resarr[$key]."'");
		$rows = mysql_fetch_array($sql);
		$count = $rows[0][tot];
	}
	else
	{
		$count = 0;
	}
	if($count == 0)
	{	
		foreach($resarr as $key=>$val)
		{
			if($key != 'action_type' && $key != 'submit1') 
			{
				$fields[] = $key;
				$values[] = "'".addslashes($val)."'";
			}
		 }
		if(mysql_query("insert into $tblname(".implode(",",$fields).") values(".implode(",",$values).")"))
		{
			if($tblname == "feedback")
				$msg = "Thank you for your time. <br> Your valuable feedback will help us improve your dining experience.";
			else
				$msg = "Record added Successfully";			
			return $msg;
		}	
		else
			return "Error";
	}
	else
	{
	  return "Record with $key [$resarr[$key]] already exists";
	}
}

/*function for Displaying a record from table
$tblname : Name of the table
*/
function GetAllRecords($tblname)
{
	global $msdb;
	$sql = mysql_query("select * from $tblname order by id DESC");
	$i=0;
	$str = '<table cellpadding="1" cellspacing="2" border="1">';
	while($rows = mysql_fetch_assoc($sql))
	{		
		if($i==0)
		{
			$str.='<tr>';
			foreach($rows as $key=>$val)
			{
				$str.='<th>'.ucfirst($key).'</th>';
			}
			$str.='</tr>';
		}
		$str.='<tr>';
		foreach($rows as $key=>$val)
		{
				$str.='<td>'.stripslashes($val).'</td>';
		}
		$str.='</tr>';				
		$i++;
		if($i == 0)
		{
		  $str.='<tr><th colspan=3>No Records Available</th></tr>';
		}				
	}
	$str.='</table>';
	return $str;	
}

?>