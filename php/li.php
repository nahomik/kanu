//table.php file 

<?php
$link  = mysql_connect("localhost", "root", "");
$sql = "CREATE DATABASE amu";
$ret = mysql_query($sql, $conn);
if (!$ret){ die ("Connection failed");
	
}else {
	print "Database amu is created";
}



$sql="CREATE TABLE $tablename (
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