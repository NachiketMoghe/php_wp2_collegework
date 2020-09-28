<?php
if(isset($_POST["create"]))
{
setcookie("name",$_POST["name"], time() + 3600, "/", "", 0);
setcookie("age", $_POST["age"], time() + 3600, "/", "", 0);
setcookie("sex", $_POST["sex"], time() + 3600, "/", "", 0);
setcookie("location", $_POST["location"], time() + 3600, "/", "", 0);

echo "Cookie Created.";
}

if(isset($_POST["delete"]))
{
setcookie("name","", time() - 3600, "/", "", 0);
setcookie("age", "", time() - 3600, "/", "", 0);
setcookie("sex", "", time() - 3600, "/", "", 0);
setcookie("location", "", time() - 3600, "/", "", 0);

} 
?>

<html>
<head>
<title>Cookies Yummy</title>
</head>
<body>
<h1>Cookies</h1>
<FORM method="POST" action="cookie.php">

Enter Name : <input type="text" name="name"> <br/>
Enter Age : <input type="text" name="age"> <br/>
Enter Sex : <input type="radio" name="sex", value="Male"> Male <br/>
<input type="radio" name="sex" value="Female"> Female <br/>
<input type="radio" name="sex" value="Others"> Others <br/>
Enter Location : <input type="text" name="location"> <br/>
<br/>
<input type="submit" name="create" value="Create Cookie">
<input type="submit" name="display" value="Display Cookie">
<input type="submit" name="delete" value="Delete Cookie">
</FORM>

<?php
if(isset($_POST['display']))
{
if(isset($_COOKIE["name"]))
{
echo "Name = ". $_COOKIE["name"]."<br/>";
echo "Age = ". $_COOKIE["age"]."<br/>";
echo "Sex = ". $_COOKIE["sex"]."<br/>";
echo "Location = ". $_COOKIE["location"]."<br/>";
}
else
{
echo "Cookie Deleted";

}
}
?>

</body>
</html>