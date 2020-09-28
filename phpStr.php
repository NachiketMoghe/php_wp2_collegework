<?php
$str= $_POST['str'];
$word= $_POST['word'];
$count=0;
$len= $_POST['len'];
$sub= $_POST['sub'];

if($sub== 'count'){
$string = substr($str,0,$len); 
echo $word . " occured " . substr_count($str, $word) . " times<br><br><br> ";}

if($sub== 'special'){
function RemoveSpecialChar($string) { 
    $res = preg_replace('/[^A-Za-z0-9\-]@#!%&()<>/', ' ', $string);
    return $res; 
    }

$str= RemoveSpecialChar($str);
echo $str . "<br><br><br>";
}

if($sub== 'caps'){
$string = substr($str,0,$len); 
echo "<br>";
echo ucwords($string);
echo "<br>";
}
?>