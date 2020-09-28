<?php
 
echo 'Name: '.$_POST['name'] . '<br>';
echo 'Gender: '.$_POST['gender'] . '<br>';
echo 'Roll No.: '.$_POST['number'] . '<br>';
if ($_POST['choice']==1)
{
    $_POST['sub']='Php';
}
echo 'Subject of choice: '.$_POST['sub'] . '<br>';

 
echo 'Will '. $_POST['rem'];
 
?>
