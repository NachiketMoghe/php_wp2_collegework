<?php 
    echo "<br><h2>String Functions: </h2>";
    
    echo "<b>The String is: </b>".$_POST["string"]."<br>";
    echo "<b>Number of words: </b>".str_word_count($_POST["string"])."<br>";
    echo "<b>String Length: </b>".strlen($_POST["string"])."<br>";
    echo "<b>Breaking a string to array: </b>";
    print_r(explode(" ",$_POST["string"]));
    echo "<br>";
    echo "<b>Replace welcome with ThankYou: </b>".str_replace("welcome","ThankYou",$_POST["string"])."<br>";
    echo "<b>Uppercase: </b>".strtoupper($_POST["string"])."<br>";
    echo "<b>ASCII Value of first alternate 3 letters: </b>".ord($_POST["string"])." ".ord($_POST["string"][2])." ".ord($_POST["string"][4])."<br>";
    echo "<b>Reverse of the string is: </b>".strrev($_POST["string"])."<br>";
    echo "<b>Repeating a string: </b>".str_repeat($_POST["string"],3)."<br>";
    echo "<b>Shuffle the alphabets randomly: </b>".str_shuffle($_POST["string"])."<br>";
 
    echo "<br><h2>Date and Time Fns:</h2>";
    
    echo "<b>Current date: </b>".date('Y-m-d')."<br>";
    echo "<b>Today's day is: </b>".date('l')."<br>";
 
    $dateAdd=date_create("2020-05-13");
    date_add($dateAdd,date_interval_create_from_date_string("45 days"));
    echo "<b>Added date: </b>:".date_format($dateAdd,"Y-m-d")."<br>";
    
    $tz=timezone_open("Asia/Tokyo");
    echo "<b>Displaying Code, Latitude and Longitude: </b>";
    print_r(timezone_location_get($tz));
    echo "<br>";

    //math functions 
    echo "<br><h2>Math Fns:</h2>";
 
    echo "<b>2^10 = </b>".pow(2,10)."<br>";
    echo "<b>Finding the max of an array: </b>".max(array(2,3,50))."<br>";
    echo "<b>Ceiling value of 3.5 is: </b>".ceil(2.4)."<br>";
    echo "<b>Absolute Value: </b>". (abs(-10)."<br>");
    echo "<b>Radian to degree conversion of pi: </b>".rad2deg(pi())."<br>";
    echo "<b>Random number: </b>".mt_rand(20,520)."<br>";
    echo "<b>Squate root of 3125: </b>".sqrt(5625)."<br>";
    echo "<b>Squate root of -9: </b>".sqrt(-9)."<br>";
 
    //File Handling 
    echo "<br><h2>FILE HANDLING</h2>";
 
    echo "<b>Reading file using fread: </b><br>";
    $myfile = fopen("nach.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("nach.txt"))."<br>";   
    fclose($myfile);
    echo "<br>";
    
    echo "<b>Reading file using feof: </b><br>";
    $myfile = fopen("nach.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
    echo fgets($myfile)."<br>";
    }
    fclose($myfile);
    echo "<br>";
    
    echo "<b>Writing in a file: </b><br>";
    $myfile = fopen("nach.txt", "w") or die("Unable to open file!");
    $txt = "Come on write this thing.\n";
    fwrite($myfile, $txt);
    $txt = "Bleeeeeeeeeeeehhhhhhh\n";
    fwrite($myfile, $txt);
    fclose($myfile);
 
    $myfile = fopen("nach.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("nach.txt"))."<br>"; 
    fclose($myfile);

    //Image Handling
    function create(){
        $image = imagecreate(300, 300); 
      
        $background_color = imagecolorallocate($image, 120, 120, 200); 
        
        $text_color = imagecolorallocate($image, 200, 255, 200); 
        
        // Function to create image which contains string. 
        imagestring($image, 3, 60, 100,  "1234", $text_color); 
        imagestring($image, 3, 210, 100,  "1234", $text_color); 
        imagestring($image, 3, 55, 107,  "1", $text_color);
        imagestring($image, 3, 85, 107,  "1", $text_color);
        imagestring($image, 3, 205, 107,  "1", $text_color);
        imagestring($image, 3, 235, 107,  "1", $text_color);
        imagestring($image, 3, 60, 114,  "1234", $text_color); 
        imagestring($image, 3, 210, 114,  "1234", $text_color);
        imagestring($image, 3, 85, 180,  "1234", $text_color);
        imagestring($image, 3, 117, 180,  "1234", $text_color);
        imagestring($image, 3, 149, 180,  "1234", $text_color);
        imagestring($image, 3, 181, 180,  "1234", $text_color);
        
        header("Content-Type: image/png"); 
        imagepng($image);
        imagepng($image,'C:\Users\NACHIKET R MOGHE\Pictures\Saved Pictures\Wallp\sher.jpg'); 
        imagedestroy($image);
      }
     
      function crop(){
        $im = imagecreatetruecolor(165, 30);
        $text_color = imagecolorallocate($im, 233, 14, 91);
        imagestring($im, 5, 5, 5,  'Hello and Welcome', $text_color);
        
        header('Content-Type: image/jpeg');
        
        imagejpeg($im, NULL, 75);
        
        imagedestroy($im);
      }
     
      function upload(){
        $loc='C:/xampp/htdocs/';
        $loc =$loc.basename($_FILES['img']['name']);
        
        if(isset($_POST["submit"])) {
        
            $check = getimagesize($_FILES["img"]["tmp_name"]);
            
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".<br>";
              if(move_uploaded_file($_FILES['img']['tmp_name'], $loc)) {  
                echo "File uploaded successfully.";  
            } else{  
                echo "File not uploaded, try again.";  
            }  
              
            } else {
              echo "File is not an image.";
            }
          }}
     
      if ($_POST['option']==1){
      create();}
      elseif ($_POST['option']==2){
      crop();}
      elseif ($_POST['option']==3){
      upload();}
     
?>
