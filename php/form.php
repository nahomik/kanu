<?php
$First_Name=$_POST['FirstName'];
$Middle_Name=$_POST['MiddleName'];
$Last_Name=$_POST['LastName'];
$Birth_of_Date=$_POST['BirthofDate'];
$Address=$_POST['Address'];
$Phone=$_POST['Phone'];
$Nationality=$_POST['Nationality'];
$E_mail=$_POST['Email'];
$Gender=$_POST['Gender'];
$Program=$_POST['Program'];

$connection = mysql_connect("localhost", "root", "") or die("Couldn't connect");
$db =  mysql_select_db("SMIS",$connection)
  or die("Could not select SMIS");
  $query = "insert into form (First_Name, Middle_Name, Last_Name, Birth_of_Date, Address, Phone, Nationality, E_mail, Gender, Program) 
  values('FirstName', 'MiddleName', 'LastName', 'BirthofDate', 'Address', 'Phone', 'Nationality', 'Email', 'Gender', 'Program')";
  $res = mysql_query($query,$connection);
  $row = mysql_affected_rows();
  if($row >=1)
  {
	  print "Successfully Registerd";
  }
  else
	  print "failed";
/*$query = "select * from login where Username= '$username' AND Password ='$password'";
$result = mysql_query($query,$connection) or die(mysql_error());;
 $row = mysql_num_rows($result);
      if ($row==5) {
	  echo "Login Successful!";
	  }
	  else
	  {
		 echo "Login failed!"; 
	  }
//if(($username == "abc") && ($password == "123"))
{
	echo "Login Successful!";
}
else
	{
		echo "Login failed!";
	}*/
?>
