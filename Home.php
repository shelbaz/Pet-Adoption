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

        <h2> Home Page </h2>
        <h3> Welcome to Shawn's Adoption Website: Lets Make a Difference</h3>
        <p> By adopting , you will be helping to rescue another dog, by making space at our Centre for another homeless dog. If we have no space, the future of some dogs is pretty bleak. By adopting rather than buying, you will reduce the demand that drives the commercial breeders (puppy mills) of puppies. The Adoption Option: Let's make it the first option. </p>

<img id = img1 src= "http://bebusinessed.com/wp-content/uploads/2014/03/734899052_13956580111.jpg" /> 
<img id = img2 src = "http://dreamatico.com/data_images/dog/dog-5.jpg" />
<img id = img3 src = "https://pbs.twimg.com/profile_images/378800000532546226/dbe5f0727b69487016ffd67a6689e75a.jpeg" />
<img id = img4 src = "http://s.hswstatic.com/gif/whiskers-sam.jpg" /> 
            
            </div>            
                    <?php include 'footer.php';?>

        
    </div>
</body>
</html>