
<html>
<head><link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<?php
session_start();

$username=$_GET['user'];
$password=$_GET['password'];
if($username && $password)
{
$link = mysql_connect('localhost', 'root', ''); //change the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('crime');
$query="SELECT * FROM user WHERE username='$username'";
$result=mysql_query($query) or die(mysql_error());
$numrows=mysql_num_rows($result);
if($numrows!=0)
{
while($row=mysql_fetch_array($result))
{
$dbusername=$row['username'];
$dbpassword=$row['password'];

}
//check to see if they match
if($username==$dbusername&&$password==$dbpassword)
{
echo "You are in! <a href='storage.html'>Click</a> here to go the member page";
$_SESSION['username']=$dbusername;
}
else
{
echo "Incorrect password";
}


}
else
{
die("That user doesn't exist!");
}
}
else
{
die("Please enter all the details!");
}
?>
</div>
</html>