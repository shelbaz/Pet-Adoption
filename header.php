
<html>
<head>

</head>
<body>
<?php 
echo '<div id= "header">';
echo  "<h1><a class='head' href=\"Home.php\">";
print  "<img src = \"http://www.homeandpetstownsville.com.au/images/Happy_Pet_Services_Logo.jpg\" width=\"100\" height=\"50\">";  
print "Shawn's Montreal Pet Adoption Service  </a></h1>";
echo '<h2><p id = "time">  </p> </h2></div>';

if(!isset($_SESSION["user"])) 
{ echo "Logged out"; }
else
	{echo "<a class='head' href=\"Logout.php\"> Logged in : Click to logout </a>";}
	      
        
?> 
</body>
</html> 
