<?php 

if(isset($_POST["CatOrDog"]))
{
    $file= fopen("petinfo.txt", "r");
    $goodWithDogs = null;
    $goodWithCats = null;
    $goodWithKids = null;
    $breed = null;
    $age = null;
    $gender = null;

    if($_POST["Along"] == true)
        $goodWithDogs = true;
    else
        $goodWithDogs= false ;

    if($_POST["Along2"] == true)
        $goodWithCats = true;
    else
        $goodWithCats= false ;

    if($_POST["Along3"] == true)
        $goodWithKids = true;
    else
        $goodWithKids= false ;

    if($_POST["Breed"] == "X")
        $breed = "X";
    else
        $breed = $_POST["Breed"];

    if($_POST["Age"] == "X")
        $age = "X";
    else
        $age = $_POST["Age"];

    if($_POST["Gender"] == "X")
        $gender = "X";
    else
        $gender = $_POST["Gender"];

    $breed = trim($breed);




    $lookingfor= array($_POST["CatOrDog"],$breed,$gender,$age,$goodWithDogs,$goodWithCats,$goodWithKids);
    $boolGlobal=true;

    while(($line = fgets($file)) !== false)
    {
        $arr=explode(":",$line);
        $arr[11]=trim($arr[11]);
        $testarr= array($arr[2],trim(($arr[3])),$arr[4],$arr[5],$arr[6],$arr[7],$arr[8]);

        //setting up our dont cares
        foreach($testarr as $key=>$value)
        {
            if($lookingfor[$key]=="X")
                $testarr[$key]="X";

        }
        $bool=true;
        foreach($testarr as $key=>$value)
        {
            if($value!=$lookingfor[$key])
                $bool=false;
        }
        if($bool)
        {
            $boolGlobal=false;
            $arrtest=array($arr[6],$arr[7],$arr[8]);
            $getsAlong="";
            foreach($arrtest as $key=>$value)
            {
                if($key==0&&$value=="1")
                    $getsAlong=$getsAlong." dogs";
                if($key==1&&$value=="1")
                    $getsAlong=$getsAlong." cats";
                if($key==2&&$value=="1")
                    $getsAlong=$getsAlong." kids";
            }
            print("<u><strong>We've found a match!</strong></u></br>");
            print("<strong>It's a:</strong> $arr[2]</br>");
            print("<strong>Breed:</strong> $arr[3]</br>");
            print("<strong>Gender:</strong> $arr[4]</br>");
            print("<strong>Its age is:</strong> $arr[5]</br>");
            print("<strong>Gets along with:</strong>$getsAlong</br>");
            print("<strong>Here's a comment from the owner:</strong> $arr[9]</br>");
            print("<strong>To get more info contact the owner:</strong>$arr[10] at this email: $arr[11]</br></br>");

        }

    }
    if($boolGlobal){
        print ("<p style=\"text-align: center;\"><u><strong>Sorry but we weren't able to find an animal matching your criterias.</strong></u></br></br></br>");
        print('<img src = "https://yellowfeatherinherhair.files.wordpress.com/2014/05/cupcake-dog.jpg" alt="dog pic" style="width:50%;height:50%;"></p><br/>');
    }
}

echo '<a href="Find.php">Go back to the search page</a>.';
?>
