<?php
session_start();
//echo $_SESSION['user'];
if(isset($_SESSION['user'])==false)
header('Location: login.html');
$con=mysql_connect('localhost','amit'); 
mysql_select_db('amit',$con);
$query="select name from users where username='" . $_SESSION['user'] . "'";
$result = mysql_query($query,$con);
while ($row = mysql_fetch_assoc($result))
echo "Hello ".$row['name'];
echo "<br>";
echo "<a href=logout.php> <b>Logout<b> </a>"
?>
