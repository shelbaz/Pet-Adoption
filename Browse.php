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
<style>
#img1,#img2, #img3, #img4 {
    vertical-align: text-top;
    position : relative;
    left: 80px
}    
    #title {
        position: relative;
        left: 80px;
        
    }
    

.stuff {
    position: relative;
    left : 100px;
    }
   
        
    
</style>
    
</head>

<body onload = "getCurrentDate()">

    <div id="container">
        <?php include 'header.php';?>
    <div id= "content">
        <?php include 'menu.php';?>
        <div id = "main">
        
        <h2 id = "title"> Browse Available Pets </h2> 
        
            
<table> 
    
<tr> <th> Interested</th> <th> Pictures </th> <th> Infos </th> </tr>
    
<tr> <td> <input type="checkbox" value ="true" ></input> </td> <td> <img id = img1 src= "http://bebusinessed.com/wp-content/uploads/2014/03/734899052_13956580111.jpg" /> </td>  
<td class = "stuff"> <p> <br>  Age: 10 <br>  Gender: Male <br>  Gets Along with Other Dogs: True <br> Gets Along with Other Cats: False <br> Suitable for Family with children: True  <br> </p> </td> </tr>

<tr> 
<td> <input type="checkbox" value ="true" ></input> </td>
<td> <img id = img2 src = "http://dreamatico.com/data_images/dog/dog-5.jpg" />  </td>
<td class = "stuff"> <p> <br> Age: 3 <br>  Gender: Female <br>  Gets Along with Other Dogs: False <br> Gets Along with Other Cats: False <br> Suitable for Family with children: True  <br> </p> </td>
</tr>
    
<tr> 
<td> <input type="checkbox" value ="true" ></input> </td>
<td> <img id = img3 src = "https://pbs.twimg.com/profile_images/378800000532546226/dbe5f0727b69487016ffd67a6689e75a.jpeg" /> </td>
<td class = "stuff"> <p> <br> Age: 5 <br>  Gender: Male <br>  Gets Along with Other Dogs: True <br> Gets Along with Other Cats: True <br> Suitable for Family with children: True  <br> </p>
</td>
</tr>

<tr> 
<td> <input type="checkbox" value ="true" ></input> </td>
<td> <img id = img4 src = "http://s.hswstatic.com/gif/whiskers-sam.jpg" />  </td>
<td class = "stuff"> <p> <br> Age: 1 <br>  Gender: Female <br>  Gets Along with Other Dogs: True <br> Gets Along with Other Cats: True <br> Suitable for Family with children: True  <br> </p> </td>
</tr>
</table>           

</div>
        <?php include 'footer.php';?>
        </div>
    </div>
</body>
</html>