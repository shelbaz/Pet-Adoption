<?php  

ini_set('session.save_path', 'tmp');
  
session_start();
session_destroy();  
header("Location: Home.php");  
$message = "Logout Successful";
echo "<script type='text/javascript'>alert('$message');</script>";

?>  