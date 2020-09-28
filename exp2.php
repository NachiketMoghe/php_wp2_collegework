<?php
// arr displ, sort, slice, single and multi/associative
display()  . " <br>One of them is going to be the pirate king.";

function display(){
    $mul = array("Nachi"=>20, "Luffy"=>19, "Zoro"=>21, "Shanks"=>35);
    echo "<h1>The great pirates acc ascending order of age<br></h1>";
    foreach($mul as $name => $age)
    {
        echo $name.' is '.$age.' years old<br>';
    }
    echo "<h2>All the pirates in descending order of name:</h2>";
    krsort($mul);
    foreach($mul as $name => $age)
    {
        echo $name.' is '.$age.'<br>';
    }

}

function disp(){
    $arr = array("Tesla", "Eddison", "Turing", "Ramanujan", "John Nash");
    echo 'Length: '.count($arr).'<br>';
    echo '<h1>Greatest 3 scientists/mathematicians:</h1> '.$arr[0].' '.$arr[2].' '.$arr[3].'<br>';
    $len=count($arr);
    echo '<h2>All Elements in the array are:</h2><br>';
    for($i=0;$i<$len;$i++)
        {
            echo $arr[$i].'<br>';
        }
    echo '<br>';
    echo '<h2>Using print_r:</h2><br>';
    print_r($arr);
    echo '<h2>Using slicing:</h2><br>';
    print_r(array_slice($arr,-3,4));



}
disp();

?>