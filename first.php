<?php

$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h2>Fibonacci series for first " . $no_of_elements . " numbers: </h2>";  
echo "\n";  
echo $n1.'<br>'.$n2.'<br>';  
$no_of_elements = $_POST['no_of_elements'];

while ($num < $no_of_elements-2  )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.'<br>';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;
} 
$no = $_POST['no'];

echo "<br><br><h1>Finding the factorial:</h1>";

$factorial = 1;

$x = $no;

do{

$factorial = $factorial * $x;

$x=$x-1;

} while ( $x >= 1);
echo $factorial.'<br><br>';

echo "<br><h1>Patterns</h1><br>";
$line=4;
        echo 'Pattern 1 <br>';
        for($i=1;$i<=$line;$i++)
        {
            for($j=2;$j<=$i*2;$j=$j+2)
            {echo $j;}
            echo '<br>';
        }
        echo '<br>Pattern 2 <br>';
        for($i=1;$i<=$line;$i++)
        {
            for($j=0;$j<$line-$i+1;$j++)
            {
                echo '*';
            }
            echo '<br>';
        }
?>