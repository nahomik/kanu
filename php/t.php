//table creation statement

<?php
require("amu.php");
$tablename =$_POST["tablename"];
$user="CREATE TABLE $tablename (
sid VARCHAR(20) NOT NULL,
password VARCHAR(255) NOT NULL,
FatherName VARCHAR(50),
FirstName VARCHAR(40),
Email VARCHAR(50),
PRIMARY KEY(sid)
)";
$results = mysql_query($user)or  die (mysql_error());
print "Table name $tablename is created";
?>