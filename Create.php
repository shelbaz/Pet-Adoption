<?php 
ini_set('session.save_path', 'tmp');
session_start();
?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="Assignment xx">

  <link rel="stylesheet" type= "text/css" href="q4.css">
<script type="text/javascript" src ="q4.js"> </script>

    
</head>

<body onload = "getCurrentDate();">
    <div id="container">
        
            <?php include 'header.php';?>
       
                <?php include 'menu.php';?>

        <div id = "main">

        <h2> Create an Account Page </h2>
        
        <form action = "formHandling.php" method="POST"> 
        Username: <input type = "text" name = "username" id = "username" /> <br> <p></p>
    	Password: <input type = "password" name = "password" id = "password" /> <br>
        <p></p>
        <input type = "reset" value = "Clear Form" />
        <input type = "submit" value = "Submit Form" onclick = "return checkForm3();" />    	
            </form> 
            
            </div>            
                    <?php include 'footer.php';?>

        
    </div>
</body>
</html>