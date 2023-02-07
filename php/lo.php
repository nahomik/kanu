//login.php file

<?php
session_start();
$username = $_POST ['username'];
$password = $_POST ['password'];
if ($username&&$password)
{
$conn = mysql_connect ("localhost", "root","","please") or die ("could not connect");
mysql_select_db ("phplogin") or die ("could not find the db");
$query = mysql_query ("SELECT * FROM users WHERE username = '$username'");
$numrows = mysql_num_rows ($query);
if ($numrows!=0)
{
//code her
while ($row =mysql_fetch_assoc ($query))
{
    $dbusername =$row['username'];
	$dbpassword =$row['password'];
}
 //checking whether they match or not
 if ($username ==$dbusername&&$password ==$dbpassword)
 {
    echo "you are in <a href ='member.php'> click </a> her to enter the member page!";
	$_SESSION['username'] =$username;
 }else
   echo "In correct password";
 
}
else
    die ("That user doesn't exist");
echo $numrows;
}
else
die ("please enter the username and password");

?>