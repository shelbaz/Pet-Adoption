<?php

ini_set('session.save_path', 'tmp');
session_start();
	

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$_SESSION["logged"]=false;
$myfile = fopen("userpass.txt", "r") or die("Unable to open file!");
$pattern = "/^".$username.":/";
while(!feof($myfile)) 
{
    $check = fgets($myfile);
    
    if(preg_match($pattern,$check))
    { 
    	$test = explode(":", $check);
		$test[0] = trim($test[0]);
		$test[1] = trim($test[1]); 
			if ($password === $test[1] && $username === $test[0])
				{ $_SESSION["logged"]=true;
		 		$_SESSION["user"]=$username;}
     
	 } 
 }   


if ($_SESSION["logged"]==true && $_SESSION["user"] == $username) 
{
    echo "<br> Hi $username you have been logged in. <br>";
    echo '<a href="Giveaway.php">Proceed to the page</a>.';
    
} 
else 
{
	echo "Login Failed! <br>";
    echo "<br> You have entered the wrong username or password combination. Please try again. <br><p>";
    echo '<a href="Login.php">Go back to the Login page</a>';
}


?>