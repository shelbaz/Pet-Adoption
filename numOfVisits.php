<?php
        
$today = date('l, F j, Y');
$timestamp = date('g:i A T');


if (!isset($_COOKIE["Last_Visit"]))
    { $lastVisit = $today . " at " . $timestamp . "<br>" ;
     $something = "This is your first time visiting! Welcome! <br>" ;
     setcookie("Last_Visit", $lastVisit, time() + 86400*30);
    }
else { $lastVisit = $_COOKIE["Last_Visit"];
    $something = "Last time you visited my webpage on: " . $lastVisit ;
    $lastVisit = $today . " at " . $timestamp . "<br>" ;
    setcookie("Last_Visit", $lastVisit, time() + 86400*30);

}


if(!isset($_COOKIE["Visit_Count"]))
{$count = 1;
        setcookie("Visit_Count", $count , time() + 86400*30);}
else
{$count = ++$_COOKIE["Visit_Count"];
        setcookie("Visit_Count", $count , time() + 86400*30);}

$something2 = "Visit count: " . $count . "<br>";


?>


<html>
    <head>
    </head>
    
    <body>
        
<h1> Exercise 2</h1>      
<br>
<?php 
        echo $something;
        echo $something2;
        
        ?> 

        
    </body>
</html>