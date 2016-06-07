<!DOCTYPE html>
<html>
    <head>
    </head>
    
    <body>
        
<h1> Exercise 1</h1>        
    <?php

function uppercaseFirstandLast($str)
{
    
    $arr = explode(" ", $str);
    $first = null;
    for($i=0; $i < count($arr) ; $i++)
    
{$first = $arr[$i];
    $firstc = $first[0];
    $lastc = $first[strlen($first) -1];
    $firstc = strtoupper($firstc);
    $lastc = strtoupper($lastc);
    $first[0] = $firstc;
    $first[strlen($first) -1] = $lastc;
    $arr[$i] = $first;
        }
    return implode(" ", $arr);
}
function findAverage_and_Median($arr)
{
    $counter1 = 0;
    $total = 0;
    for($i=0; $i < count($arr); $i++)
    {
        $total += $arr[$i];
        $counter1++;
        $average = (double)($total / $counter1);
    }

    if (count($arr) % 2 == 0)
    {
        $middle = count($arr)/2;
        $num1= $arr[$middle];
        $num2= $arr[$middle +1];
        $median = (double)($num1 + $num2)/2 ;
    }
    else
    {
        $middle2 = (count($arr)/2) +1 ;
        $median = $arr[$middle2];
    }

     return "Average is $average and Median is $median";

}

?>
  
<h3> UpperCase First and Last</h3>
    <p> <?php 
        $random = "concordia stingers suck lol" ;
        echo "Original: $random <p>";
        echo "Changed: ";
        echo uppercaseFirstandLast($random);
        ?>
        </p>
<h3> Find Average and Median </h3>
        <p>
        <?php 
            $random2 = array(2,4,5,7,8,9,10);
            echo "Original: " . implode(" ", $random2) . "<p>";
            echo "Changed: ";
            echo findAverage_and_Median($random2);
            ?>
        </p>
    </body>
    
</html>