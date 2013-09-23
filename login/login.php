<?php
session_start();
$user=$_POST[user];
$pass=$_POST[pass];
$con=mysql_connect('localhost','amit'); 
mysql_select_db('amit',$con);
$query = "select * from users where username='$user' AND password='$pass'";
$result = mysql_query($query,$con);
$counter = 0;
while ($row = mysql_fetch_assoc($result)) {
//    echo $row['username'];
//    echo $row['password'];
//    echo $row['name'];
    $counter=$counter+1;
}
if($counter>0)
{
	echo "You have successfully logged in";
	$_SESSION['user']=$user;
	header('Location: main.php');
}
else
header('Location: login.html');
    ?>