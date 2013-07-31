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
$lawyer_id=strip_tags($_POST['lawyer_id']);
$lawyer_name=strip_tags($_POST['lawyer_name']);
$lawyer_qualification=strip_tags($_POST['lawyer_qualification']);
$lawyer_age=strip_tags($_POST['lawyer_age']);
$lawyer_phno=strip_tags($_POST['lawyer_phno']);
$lawyer_type=strip_tags($_POST['lawyer_type']);
if($submit)
{
if($lawyer_id && $lawyer_name)
{	
	
	if(strlen($lawyername)>25)
	{
		echo "Length of lawyer name is too long!";
	}
	else
	{
		if(strlen($clawter_id)>10|| strlen($lawyer_id)<2)
		{
			echo "Id must be between 2 and 10 characters!";
		}
		else
		{
			if(strlen($lawyer_age)>150)
			{
			echo "age cannot exsist";
			}
				else
				{
				//register the user!
				
				$connect=mysql_connect("localhost","root","");
				mysql_select_db('crime');
				
				$query=mysql_query("INSERT INTO lawyer (lawyer_id,lawyer_name,lawyer_qualification,lawyer_type,lawyer_phno,lawyer_age,)VALUES('$lawyer_id','$lawyer_name','$lawyer_qualification','$lawyer_type','$lawyer_phno','$lawyer_age')");
				
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
<h1>Enter lawyer record</h1>
<form action='lawyer.php' method='POST'>
<table>
	<tr>
		<td>
		lawyer id:
		</td>
		<td>
		<input type='text' name='lawyer_id'>
		</td>
	</tr>
	<tr>
		<td>
		lawyer name:
		</td>
		<td>
		<input type='text' name='lawyer_name'>
		</td>
	</tr>
	<tr>
		<td>
		lawyer phone number
		</td>
		<td>
		<input type='text' name='lawyer_phno'>
		</td>
	</tr>
	<tr>
		<td>
		lawyer age:
		</td>
		<td>
		<input type='text' name='lawyer_age'>
		</td>
	</tr>
	<tr>
		<td>
		lawyer qualification:
		</td>
		<td>
		<input type='text' name='lawyer_qualification'>
		</td>
	</tr>
	<tr>
		<td>
		lawyer type:
		</td>
		<td>
		<input type='text' name='lawyer_type'>
		</td>
	</tr>
</table>
<p>
<input type='Submit' value='Submit' name='Submit'>
</p>
</form>
<form action='case.php' method='post'>
<input type='Submit' value='Next'>
</form>
</div>
</div>
</html>
