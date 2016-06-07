<?php

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

$myfile = fopen("userpass.txt", "r+") or die("Unable to open file!");
$pattern = "/^".$username.":/";
while(!feof($myfile)) {
    $check = fgets($myfile);
    if(preg_match($pattern,$check))
    {echo "<script type='text/javascript'>alert('Username already exists');</script>";
	echo '<a href="Create.php">Go back to the Account page</a>.';
    die();
     }
}
fclose($myfile);

$input = "\n".$username.":".$password;
if(file_put_contents('userpass.txt', $input , FILE_APPEND) != FALSE)
{
    $message = "Success";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<a href="Home.php">Go back to the main page</a>.';
    
}
else
{echo "<script type='text/javascript'>alert('Failure');</script>";
    fclose($myfile);
    echo '<a href="Create.php">Go back to the Account page</a>.';
    }



    ?>