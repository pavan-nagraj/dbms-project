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
$court_id=strip_tags($_POST['court_id']);
$court_type=strip_tags($_POST['court_type']);
$court_loc=strip_tags($_POST['court_loc']);
$court_judges=strip_tags($_POST['court_judges']);
if($submit)
{
if($court_id)
{	
	
		if(strlen($court_id)>10|| strlen($court_id)<2)
		{
			echo "Id must be between 2 and 10 characters!";
		}
				else
				{
				//register the user!
				
				$connect=mysql_connect("localhost","root","");
				mysql_select_db('crime');
				
				$query=mysql_query("INSERT INTO court (court_id,court_type,court_loc,court_judges)VALUES('$court_id','$court_type','$court_loc','$court_judges')");
				
				}
			}

else
{
echo "Please fill <b>ALL</b> the details before going next page";
}
}
?>
</html>
<html>
<div class="error">
<h1>Enter court record</h1>
<form action='court.php' method='POST'>
<table>
	<tr>
		<td>
		court id:
		</td>
		<td>
		<input type='text' name='court_id'>
		</td>
	</tr>
	<tr>
		<td>
		court type:
		</td>
		<td>
		<input type='text' name='court_type'>
		</td>
	</tr>
	<tr>
		<td>
		court location
		</td>
		<td>
		<input type='text' name='court_loc'>
		</td>
	</tr>
	<tr>
		<td>
		court judges
		</td>
		<td>
		<input type='text' name='court_judges'>
		</td>
	</tr>
</table>
</form>
<form action='storage.html' method='post'>
<input type='Submit' value='submit'>
</form>
</div>
</div>
</html>
