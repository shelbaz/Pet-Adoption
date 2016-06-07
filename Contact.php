<?php 
ini_set('session.save_path', 'tmp');
session_start();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="Assignment xx">

  <link rel="stylesheet" type= "text/css" href="q4.css">
<script type="text/javascript" src ="q4.js"> </script>

    
</head>

<body onload = "getCurrentDate()">

    <div id="container">
        <?php include 'header.php';?>
    <div id= "content">
        <?php include 'menu.php';?>
        <div id = "main">
        <h2> Contact Us </h2>

        <h3> Name and ID</h3>
            <p> Shawn Elbaz : 27754132 </p>
        <h3> Address: </h3>
            <p> 1234 Cote Vertu <br> Saint Laurent, QC <br> H4R2W8, CANADA </p>
        <h3> Opening Hours: </h3>
            <p> Mon-Friday: 9:00 am - 5:00 pm <br> Saturday: Closed <br> Sunday: Closed </p>
        <h3> Phone Numbers: </h3>
            <p> Office: 514-777-7777 <br> Cell: 514-888-8888 </p>
        <h3> Email Address: </h3>
            <p> petstuff@gmail.com </p>
        </div>
        <p></p>
        More Stuff 
        <?php include 'footer.php';?>
        </div>
    </div>
</body>
</html>