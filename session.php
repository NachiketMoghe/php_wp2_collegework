<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body style="background-color: #FEF6FA;">
<?php
session_start();

?>
<div style="padding: 10px;">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    Name:
    <input type='Text' name='name' ><br>
    ID:
    <input type='number' name='id'><br> 
    Branch:
    <input type='text' name='branch'><br>
    Delete Session:
    <input type='checkbox' name='del'><br>
    <button type="submit">Submission Details </button>
    </form>
    
<div>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_SESSION['id'])){
        if ($_SESSION['id']==$_POST['id']){
            echo 'ID registered already.<br>With Username:'.$_SESSION['name'];
        }
        else{
            echo 'Overriding the previous session<br>';
            echo 'Name: '.$_SESSION['name'];
            echo '<br>';
            echo 'ID: '.$_SESSION['id'];
            echo '<br>';
            echo 'New Name: '.$_POST['name'];
            echo '<br>';
            echo 'New ID '.$_POST['id'];
            echo '<br>';
            $_SESSION['name']=$_POST['name'];
            $_SESSION['id']=$_POST['id'];
            $_SESSION['branch']=$_POST['branch'];
        }
    }
    else if (isset($_POST['del']))
    {
        delete_session();
    }
    else{
        $_SESSION['name']=$_POST['name'];
        $_SESSION['id']=$_POST['id'];
        $_SESSION['branch']=$_POST['branch'];
        echo 'Session Creation:<br>';
        echo 'Session name: '.$_SESSION['name'];
        echo '<br>';
        echo 'ID: '.$_SESSION['id'];
        
    }
    
  }

  function delete_session(){
      session_unset();
      session_destroy();
  }
?>
</body>
</html>