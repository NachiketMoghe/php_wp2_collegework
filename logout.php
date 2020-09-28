
<?php 
session_start(); 
session_destroy(); 
header("location:login.php"); 
exit;
echo "Password: " . $_SESSION['UserData']['Username']. ".<br>";

?>