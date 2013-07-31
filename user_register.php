<html>
<head>
<link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<?php
//form data
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$submit=strip_tags($_POST['Submit']);
$username=strip_tags($_POST['username']);
$email id=strip_tags($_POST['email_id']);
$password=strip_tags($_POST['password']);
$password=strip_tags($_POST['password1']);
$phoneno=strip_tags($_POST['phoneno']);
$location=strip_tags($_POST['location']);
if($submit)
{
if($username && $password && $password1)
{
	if($password==$password1)
	{
		if(strlen($username)>25)
		{
			echo "Length of username is too long!";
		}
		else
		{
			if(strlen($password)>24|| strlen($password)<6)
			{
				echo "Password must be between 6 and 25 characters!";
			}
			else
			{
				if(strlen($phoneno)>15)
				{
					echo "Phone number is too long!";
				}
				else
				{
				//register the user!
				
				$password=md5($password);
				$password1=md5($password1);
				
				$connect=mysql_connect("localhost","root","");
				mysql_select_db('test');
				
				$query=mysql_query("INSERT INTO user (username,email_id,password,phoneno,location) VALUES (','$username','$email id','$password','$phoneno','$location')");
				
				die("You have been registered! <a href='main.html'>Click</a>here to go out main page");
				}
			}
		}
	}
	else
		echo "Password don't match";
}
else
{
echo "Please fill <b>ALL</b> the details before registering";
}
}
?>
</html>
<html>

<div class="error">
<h1>Register</h1>
<form action='register.html' method='POST'>
<table>
	<tr>
		<td>
		username:
		</td>
		<td>
		<input type='text' name='username' value='<?php echo $username;?>'>
		</td>
	</tr>
	<tr>
		<td>
		emai id:
		</td>
		<td>
		<input type='text' name='email id' value='<?php echo $email id;?>'>
		</td>
	</tr>
	<tr>
		<td>
		Enter password:
		</td>
		<td>
		<input type='password' name='password'>
		</td>
	</tr>
	<tr>
		<td>
		confirm password:
		</td>
		<td>
		<input type='password' name='password1'>
		</td>
	</tr>
	<tr>
		<td>
		Phone Number:
		</td>
		<td>
		<input type='text' name='phoneno'>
		</td>
	</tr>
	<tr>
		<td>
		location:
		</td>
		<td>
		<input type='text' name='location'>
		</td>
	</tr>
</table>
<p>
<input type='Submit' value='Submit' name='Submit'>
</p>
</form>
</div>
</div>
</html>
