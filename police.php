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
$police_id=strip_tags($_POST['criminal_id']);
$police_name=strip_tags($_POST['criminal_name']);
$sex=strip_tags($_POST['sex']);
$age=strip_tags($_POST['age']);
$position=strip_tags($_POST['position']);
if($submit)
{
if($police_id && $police_name)
{	
	
	if(strlen($police_name)>25)
	{
		echo "Length of Police name is too long!";
	}
	else
	{
		if(strlen($police_id)>10|| strlen($police_id)<2)
		{
			echo "Id must be between 2 and 10 characters!";
		}
		else
		{
			if(strlen($age)>150)
			{
			echo "age cannot exsist";
			}
				else
				{
				//register the user!
				
				$connect=mysql_connect("localhost","root","");
				mysql_select_db('crime');
				
				$query=mysql_query("INSERT INTO police (id,name,sex,age,caught_by)VALUES('$police_id','$police_name','$sex','$age','$position')");
				
				}
			}
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
<h1>Enter Police record</h1>
<form action='police.php' method='POST'>
<table>
	<tr>
		<td>
		Police id:
		</td>
		<td>
		<input type='text' name='police_id'>
		</td>
	</tr>
	<tr>
		<td>
		Police name:
		</td>
		<td>
		<input type='text' name='police_name'>
		</td>
	</tr>
	<tr>
		<td>
		Sex
		</td>
		<td>
		<input type='radio' name='sex' value='male'>
		<input type='radio' name='sex' value='female'>
		</td>
	</tr>
	<tr>
		<td>
		Age:
		</td>
		<td>
		<input type='text' name='age'>
		</td>
	</tr>
	<tr>
		<td>
		Position:
		</td>
		<td>
		<input type='text' name='position'>
		</td>
	</tr>
</table>
<p>
<input type='Submit' value='Submit' name='Submit'>
</p>
</form>
<form action='lawyer.php' method='post'>
<input type='Submit' value='Next'>
</form>
</div>
</div>
</html>