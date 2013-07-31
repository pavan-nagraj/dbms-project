<html>
<head>
<link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<div class="container showgrid">
<?php
//form data
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$submit=strip_tags($_POST['Submit']);
$case_id=strip_tags($_POST['case_id']);
$case_status=strip_tags($_POST['case_status']);
$case_outcome=strip_tags($_POST['case_outcome']);
$dateofcase_filed=strip_tags($_POST['dateofcase_filed']);
if($submit)
{
if($case_id )
	{	
		{
		if(strlen($case_id)>10|| strlen($case_id)<2)
			{
			echo "Id must be between 2 and 10 characters!";
			}
		
				else
					{
				//register the user!
				
				$connect=mysql_connect("localhost","root","");
				mysql_select_db('crime');
				
				$query=mysql_query("INSERT INTO case (case_id,case_status,case_outcome,dateofcase_filed)VALUES('$case_id','$case_status','$case_outcome','$dateofcase_filed')");
				
					}
				}
		}

	}
else
{
echo "Please fill <b>ALL</b> the details before going next page";
}
?>
</html>
<html>
<div class="error">
<h1>Enter case record</h1>
<form action='case.php' method='POST'>
<table>
	<tr>
		<td>
		case id:
		</td>
		<td>
		<input type='text' name='case_id'>
		</td>
	</tr>
	<tr>
		<td>
		case status:
		</td>
		<td>
		<input type='text' name='case_status'>
		</td>
	</tr>
	<tr>
		<td>
		case outcome:
		</td>
		<td>
		<input type='text' name='case_outcome'>
		</td>
	</tr>
	<tr>
		<td>
		date of case filed:
		</td>
		<td>
		<input type='text' name='dateofcase_filed'>
		</td>
	</tr>
</table>
<p>
<input type='Submit' value='Submit' name='Submit'>
</p>
</form>
<form action='court.php' method='post'>
<input type='Submit' value='Next'>
</form>
</div>
</div>
</html>
