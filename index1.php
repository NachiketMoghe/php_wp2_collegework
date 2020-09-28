<?php session_start();
if(isset($_POST['Submit'])){
$logins = array('nachiketmoghe3' => 'password','Lasagna' => 'Bish','devki' => 'Bhatt');
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
if (isset($logins[$Username]) && $logins[$Username] == $Password){
$_SESSION['UserData']['Username']=$logins[$Username];

header("location:index1.php");
exit;
}
}
?>
<?php 
// session_start();
echo "Password: " . $_SESSION['UserData']['Username']. ".<br>";

if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;


}
?>
<form action="logout.php" method="post"><input type="submit" name="submit" value="logout">
</form>
