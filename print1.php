
<html>
<head><link rel="stylesheet" href="screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="ie.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<?php
$id=$_POST['id'];
session_start();
$link = mysql_connect('localhost', 'root', ''); //change the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('crime');
$query="SELECT * FROM criminal WHERE id='$id'";
$result=mysql_query($query) or die(mysql_error());
$numrows=mysql_num_rows($result);
if($numrows!=0)
{
while($row=mysql_fetch_array($result))
{
echo "<table border=1>";
echo "<tr>";
$name=$row['criminal_name'];
echo "<td>".$name."</td>";
echo "</tr>";
echo "<tr>";
$sex=$row['criminal_sex'];
echo "<td>".$sex."</td>";
echo "</tr>";
echo "<tr>";
$age=$row['criminal_age'];
echo "<td>".$age."</td>";
echo "</tr>";
echo "<tr>";
$committed=$row['crime_committed'];
echo "<td>".$committed."</td>";
echo "</tr>";
echo "<tr>";
$caughtby=$row['criminal_caughtby'];
echo "<td>".$caughtby."</td>";
echo "</tr>";
echo "</table>";
}
}
?>
</form>
<form action='retrieve.html' method='post'>
<input type='Submit' value='back'>
</form>
</div>
</html>