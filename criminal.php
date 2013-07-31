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
$criminal_id=strip_tags($_POST['criminal_id']);
$criminal_name=strip_tags($_POST['criminal_name']);
$sex=strip_tags($_POST['sex']);
$age=strip_tags($_POST['age']);
$caught_by=strip_tags($_POST['caught_by']);
if($submit)
{
if($criminal_id && $criminal_name)
{	
	
	if(strlen($criminalname)>25)
	{
		echo "Length of criminal name is too long!";
	}
	else
	{
		if(strlen($criminal_id)>10|| strlen($criminal_id)<2)
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
				
				$query=mysql_query("INSERT INTO criminal (criminal_id,criminal_name,criminal_sex,criminal_age,criminal_caught_by)VALUES('$criminal_id','$criminal_name','$sex','$age','$caught_by')");
				
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
<h1>Enter Criminal record</h1>
<form action='criminal.php' method='POST'>
<table>
	<tr>
		<td>
		criminal id:
		</td>
		<td>
		<input type='text' name='criminal_id'>
		</td>
	</tr>
	<tr>
		<td>
		criminal name:
		</td>
		<td>
		<input type='text' name='criminal_name'>
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
		Caughtby:
		</td>
		<td>
		<input type='text' name='caught_by'>
		</td>
	</tr>
</table>
<p>
<input type='Submit' value='Submit' name='Submit'>
</p>
</form>
<form action='police.php' method='post'>
<input type='Submit' value='Next'>
</form>
</div>
</div>
</html>
