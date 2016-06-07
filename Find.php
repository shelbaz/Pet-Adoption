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
        <form method ="post" action = "Search.php">
           <fieldset id = form1>
                <legend id = legend ><b> Find a Dog/ Cat</b> </legend>
               <p></p>
                <b>Cat or Dog: </b> 
                <input id= "cd1" type = "radio"  name = "CatOrDog" value = "dog"  /> Dog 
        		<input id= "cd2" type = "radio"  name = "CatOrDog" value = "cat"  /> Cat 
        <p></p>
        <b>Breed of Animal: </b> <input id ="thing1" type = text name = "Breed" /> 
               Doesn't Matter <input id ="matter" type="checkbox" value = "X" name = "Breed" /> 
               <p></p>
       <b> Preferred Age of animal </b>
        <select id ="thing2" name = "Age"> 
            <option></option>
            <option value="0-2"> Ages 0-2 </option> 
            <option value="3-5"> Ages 3-5</option>  
            <option value="6-8"> Ages 6-8</option>
            <option value="9-11"> Ages 9-11</option>
            <option value="12-14"> Ages 12-14</option>
            <option value=">15"> Above 15 </option>
        </select>
        Doesn't Matter <input id ="matters" type="checkbox" value ="X" name = "Age" />
        <p></p>
        <b>Preferred Gender: </b> <input id = "thing3" type = "radio"  name = "Gender"
        value = "male"  /> Male 
        <input id= "thing4" type = "radio"  name = "Gender"
        value = "female"  /> Female  <input id = "thing5" type="radio" name = "Gender" value = "X" /> Doesn't Matter
        <p></p> 
        <b>Gets Along with other Dogs: </b> <input id= "thing6" type = "radio"  name = "Along"
        value = "1"  /> True 
        <input id= "thing7" type = "radio"  name = "Along"
        value = "0"  /> False 
        <p></p>
        <b>Gets Along with other Cats: </b> <input id= "thing8" type = "radio"  name = "Along2"
        value = "1"  /> True 
        <input id= "thing9" type = "radio"  name = "Along2"
        value = "0"  /> False 
        <p></p>
        <b>Suitable for Family with Children: </b> <input id= "thing10" type = "radio"  name = "Along3"
        value = "1"  /> True 
        <input id= "thing11" type = "radio"  name = "Along3"
        value = "0"  /> False 
    
        <p></p>
    <input type = "reset" value = "Clear Form" />
    <input type = "submit" value = "Submit Form" onclick = "return checkForm()" />
               
           </fieldset>
        </form>
        
            </div>
        <?php include 'footer.php';?>
        </div>
    </div>
</body>
</html>