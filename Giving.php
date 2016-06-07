<?php

ini_set('session.save_path', 'tmp');

session_start();

$username = $_SESSION["user"];
$catordog = test_input($_POST["CatOrDog"]);
$breed = test_input($_POST["Breed"]);
$age = test_input($_POST["Age"]);
$gender = test_input($_POST["Gender"]);
$getalongd = test_input($_POST["Along"]);
$getalongc = test_input($_POST["Along2"]);
$family = test_input($_POST["Along3"]);
$comments = test_input($_POST["comments"]);
$ownername= test_input($_POST["name"]);
$owneremail= test_input($_POST["email"]);

$myfile = fopen("petinfo.txt", "r+") or die("Unable to open file!");
$linecount = 0;
while(!feof($myfile)){
  $line = fgets($myfile);
  $linecount++;
}
$linecount+=1;
$mystring = "\n".$linecount.":".$username.":".$catordog.":".$breed.":".$age.":".$gender.":".$getalongd.":".$getalongc.":".$family.":".$comments.":".$ownername.":".$owneremail;
if(file_put_contents('petinfo.txt', $mystring , FILE_APPEND) != FALSE)
{
    $message = "Success";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<a href="Home.php">Go back to the main page</a>.';
    
}
else
{echo "<script type='text/javascript'>alert('Failure');</script>";
    fclose($myfile);
    echo '<a href="Giveaway.php">Go back to the Submit page</a>.';
    }
    
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;}

?>