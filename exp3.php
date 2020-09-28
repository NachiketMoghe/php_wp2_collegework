<?php
$bounty=array(
    'Luffy'=>array(
        'strahat'=>100,
        'shirt'=>12,
        'location'=>150,
    ),
    'Zoro'=>array(
        'katana'=>20,
        'costume'=>15,
        'Pillow'=>12,
    ),
    'Shanks'=>array(
        'Hand'=>90,
        'sword'=>35,
        'cigarette'=>97,
        )
);
$k=array_keys($bounty);
echo '<table border= 2px><tr> <th>Name</th><th>Item_One</th><th>Item_Two</th><th>Item_Three</th></tr>';
for($i=0; $i<count($bounty); $i++)
    {   echo '<tr><td>'.$k[$i].'</td>';
        foreach($bounty[$k[$i]] as $name =>$values)
            {
                echo '<td>'.$values.'</td>';
            } 
echo '</tr>';

}
echo '</table>'
?>