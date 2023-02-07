<?php
 $username = $_POST[ 'uname' ];
$password = $_POST[ 'pwd' ];
	   $connection = mysql_connect('localhost', 'root', '') or die("Can't connect to the server!");
	   $my_db = mysql_select_db ('smis',$connection) or die("Can't select database!");
	  
	   $query = "select * from login where Username= '$username' AND Password ='$password'";
		$result = mysql_query($query,$connection) or die(mysql_error());;
		$row = mysql_num_rows($result);
      if ($row==1) {
	  echo "Login failed!";
	  }
	  else
	  {
		 echo "Login Successful!"; 
	  }

	   /*
	   if($username == "user" && $password == "pass")
	   {
	      echo "Login Successful!";
	   }
	   else
	   {
	      echo "Not Successful!";
	   }*/
 ?>
