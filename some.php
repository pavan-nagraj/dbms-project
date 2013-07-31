<?php
$con = mysql_connect("localhost","root","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("crime", $con);
mysql_query("INSERT INTO police values($_POST['pname'],$_POST['age1'], 
/*

mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Glenn', 'Quagmire', '33')");
*/
mysql_close($con);
?> 