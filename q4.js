function getCurrentDate()
    {
        var today = new Date();
        var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novemeber", "December"];
        var hour = today.getHours();
        var minute = today.getMinutes();
        var seconds = today.getSeconds();
        if (seconds <10)
        { seconds = "0"+today.getSeconds();}
        var currentDate, currentTime, showTime;
        var DayN;
        if (hour > 12)
            DayN = "PM" ; 
        else
            DayN = "AM" ;
        currentDate = (days[today.getDay()] + ", " + months[today.getMonth()] + " " + today.getDate() + ", " + today.getFullYear() );
        currentTime = hour + ":" + minute + ":" + seconds +" "+ DayN ; 
        showTime = currentDate + " " + currentTime;
        document.getElementById("time").innerHTML = showTime; 
        setTimeout('getCurrentDate()', 1000);

}

function checkForm()
{
    var catdog;
    if (document.getElementById("cd1").checked) 
        catdog =  document.getElementById("cd2").value;
    if (document.getElementById("cd2").checked) 
       catdog =  document.getElementById("cd2").value;
    if (catdog == "" || catdog == null) 
    {alert("Cat or Dog is empty");
     return false;}

    var breed = document.getElementById("thing1").value;
    var breed2 = document.getElementById("matter").checked;
     if (breed == "" && breed2 == false)
       { alert("Breed is empty");
        document.getElementById("thing1").focus();
        document.getElementById("thing1").select();
        return false;}
    
    var age = document.getElementById("thing2").value;
    var age2= document.getElementById("matters").checked;
    
    if (age == "" && age2 == false)
       { alert("Preferred Age of animal is empty ");
        return false;}
    
    var gender;
    if (document.getElementById("thing3").checked) 
        gender = document.getElementById("thing3").value;
    if (document.getElementById("thing4").checked) 
       gender =  document.getElementById("thing4").value;
    if (document.getElementById("thing5").checked)
        gender =  document.getElementById("thing5").value;
    if (gender == "" || gender == null) 
    {alert("Preferred Gender is empty");
     return false;}
    
    var getsDogs; 
    if (document.getElementById("thing6").checked) 
        getsDogs = document.getElementById("thing6").value;
    if (document.getElementById("thing7").checked) 
       getsDogs =  document.getElementById("thing7").value;
    if (getsDogs == "" || getsDogs == null) 
    {alert("Gets Along with other Dogs is empty");
     return false;}
    
    
    var getsCats;
    if (document.getElementById("thing8").checked) 
        getsCats = document.getElementById("thing8").value;
    if (document.getElementById("thing9").checked) 
       getsCats =  document.getElementById("thing9").value;
    if (getsCats == "" || getsCats == null) 
    {alert("Gets Along with other Cats is empty");
     return false;}
    
    var children;
    if (document.getElementById("thing10").checked) 
        children = document.getElementById("thing10").value;
    if (document.getElementById("thing11").checked) 
       children =  document.getElementById("thing11").value;
    if (children == "" || children == null) 
    {alert("Suitable for Family with Children is empty");
     return false;}
   
    return true;
}

function checkForm2()
{
    var catdog;
    if (document.getElementById("cd1").checked) 
        catdog =  document.getElementById("cd2").value;
    if (document.getElementById("cd2").checked) 
       catdog =  document.getElementById("cd2").value;
    if (catdog == "" || catdog == null) 
    {alert("Cat or Dog is empty");
     return false;}
     
    var breed = document.getElementById("thing0").value;
    if (breed == "")
        {alert("Breed is empty ");
        return false;}
    
    var age = document.getElementById("thing1").value;
    if (age == "")
       { alert("Age of animal is empty ");
        return false;}
    
    var gender;
    if (document.getElementById("thing2").checked) 
        gender = document.getElementById("thing2").value;
    if (document.getElementById("thing3").checked) 
       gender =  document.getElementById("thing3").value;
    if (gender == "" || gender == null) 
    {alert("Gender is empty");
     return false;}
    
    var getsDogs; 
    if (document.getElementById("thing4").checked) 
        getsDogs = document.getElementById("thing4").value;
    if (document.getElementById("thing5").checked) 
       getsDogs =  document.getElementById("thing5").value;
    if (getsDogs == "" || getsDogs == null) 
    {alert("Gets Along with other Dogs is empty");
     return false;}
    
    var getsCats;
    if (document.getElementById("thing6").checked) 
        getsCats = document.getElementById("thing6").value;
    if (document.getElementById("thing7").checked) 
       getsCats =  document.getElementById("thing7").value;
    if (getsCats == "" || getsCats == null) 
    {alert("Gets Along with other Cats is empty");
     return false;}
    
    var children;
    if (document.getElementById("thing8").checked) 
        children = document.getElementById("thing8").value;
    if (document.getElementById("thing9").checked) 
       children =  document.getElementById("thing9").value;
    if (children == "" || children == null) 
    {alert("Suitable for Family with Children is empty");
     return false;}
    
    var com = document.getElementById("comments").value;
    if (com == "")
        {alert("Comments is empty ");
        return false;}
    
    var name = document.getElementById("Name").value;
    if (name == "")
        {alert("Owners Name is empty ");
        return false;}
    
    var email = document.getElementById("email").value;
    var patt = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i
    if (patt.test(email) == false || email == "")
        {alert("Email is invalid or empty field ");
        return false;}
    
    return true;
}

function checkForm3()
{
    var user = document.getElementById("username").value;
    var pattern = /^[a-zA-Z0-9]*$/;
    if (user == "" )
        {alert("Username is empty ");
        return false;}
    if (pattern.test(user) == false)
        {alert("Username is incorrect format ");
        return false;}
    
    var pass = document.getElementById("password").value;
    pattern2 = /((\w)|(\d)){4,}/;
    pattern3 = /(([A-Za-z]+)(\d+))/;
    if (pass == "") 
        {alert("Password is empty");
        return false;}
    if (pattern2.test(pass) == false || pattern3.test(pass) == false)
        {alert("Password is incorrect format");
        return false;}
    return true;

    
}