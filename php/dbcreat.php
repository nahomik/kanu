

<?php
$conn = mysql_connect("localhost", "root", "");
$sql = "CREATE DATABASE amu";
$ret = mysql_query($sql, $conn);
if (!$ret){ die ("Connection failed");
	
}else {
	print "Database amu is created";
}
?>