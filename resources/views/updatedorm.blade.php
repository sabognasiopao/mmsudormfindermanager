<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">

        <title>MMSU - Dorm Management | Dashboard</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="COEDstyle.css">  
        
    </head>
    
    <body class="antialiased">
        
    <div class="uppernav">
        <h3 style="color:#0C4B05;margin-left:20px;">MMSU </h3><h3> - COEDS / Proprietor Dorm Management</h3>
    </div>
    
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:10px;" src="/images/mmsu logo.png"  height="60" width="60">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
        <div class="titleheader">UPDATE DORM</div>
    </div>
                
    <div class="verticalnav">
        <ul>
            <li class="username">Properietary Name</li>
            <li><a href="dashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a href="listapplication"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Applicants</a></li>
            <li><a href="listoccupants"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a class="active" href="viewdorm"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><button type="button"><a href="welcome" style="padding-left: 0%;color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></button></li>
        </ul>    
    </div>


<div class="updatedormcontainer">
<form>

<form style="width:95%;">

<div class="smallheader" style="width:90%;">FULL NAME</div>
    <label for="fname">First Name</label>
    <label for="fname">Middle Name</label>
    <label for="fname">Last Name</label><br>
    <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="Sample Name">
    <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="Sample Name">
    <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="Sample Name"><br><br>
    
<div class="smallheader" style="width:90%;">ADDRESS</div>
    <label for="brgy">Barangay</label>
    <label for="st">Street</label>
    <label for="nl">Nearest Landmark</label><br>

    <input type="text" id="brgy" name="fname" style="width: 20%;" class="inputapp" value="6 Quiling Sur">
    <input type="text" id="st" name="fname" style="width: 20%;" class="inputapp" value="Jakamo Street">
    <input type="text" id="nl" name="fname" style="width: 20%;" class="inputapp" value="Teatro Ilocandia"><br><br>

<div class="smallheader" style="width:90%;">OTHER INFORMATION</div>
    <label for="dname">Dorm Name</label>
    <label for="contact">Contact</label>
    <label for="quantity">Available space</label><br>
    <input type="tel" id="fname" name="dname" style="width: 20%;" class="inputapp" value="Sample Dorm Name">
    <input type="text" id="fname" name="contact" style="width: 20%;" class="inputapp" value="Sample Contact">
    <input type="number" id="quantity" name="quantity"  style="width: 20%;" class="inputapp" min="0" value="10"><br><br>
    
    <label for="fname">Short Description</label><br>
    <textarea readonly></textarea><br><br>

    <div style="display:flex;">

    <table class="viewdormtable" id="room">
        <tr>
            <th>Room Type</th>
            <th>Vacancy</th>
            <th>Room Fee</th>
            <th></th>
        </tr>
        <tr>
            <td>putangina mo</td>
            <td>5</td>
            <td>1500</td>
            <td><button style="width:100%;" type="button">DELETE</button></td>
        </tr>
    </table><br>

    <table class="viewdormtable" id="room">
        <tr>
            <th>Amenities</th>
            <th></th>
        </tr>
        <tr>
            <td>putangina mo</td>
            <td><button type="button">DELETE</button></td>
        </tr>
    </table></div><br>

    <select name="roomtype" id="room" class="inputapp" style="width:25%;margin-right:25%;">
        <option selected disable hidden>Choose what you want to add</option>
        <option>putangina mo ulet</option>
    </select>

    <select name="amenities" id="amenities" class="inputapp" style="width: 25%;">
        <option selected disable hidden>Choose what you want to add</option>
        <option>putangina mo</option>
    </select>
        <button type="button" onclick="new_link()" class="addbutton" style="width:10%;margin-right:10%;">ADD</button><br>

        <label style="width:10%;" for="fname">Room Fee</label>
            <input type="text" id="fname" name="fname" style="width:5%;margin:0%;" class="inputapp" value="1500">
        <label for="fname" style="width:8%;margin-left:10px;margin-right:0%;">Vacancy</label>
            <input type="text" id="fname" name="fname" style="width:5%;margin-left:0%;" class="inputapp" value="5">
    <button type="button" onclick="new_link()" class="addbutton" style="width:10%;">ADD</button>





    <div style="padding-right:10%;margin-top:10px;">
        <a href="viewdorm"><button type="button" class="greenbutton" style="margin-top:5%;">CANCEL</button> </a>
        <input type="submit" onclick="update()" class="secondyellowbutton" style="margin-right:20px;margin-top:5%;" value="SAVE">
    </div>
</form>
</div>

<script>
/*This script is identical to the above JavaScript function.*/


    function delIt(eleId)
    {
	    d = document;
	    var ele = d.getElementById(eleId);
	    var parentEle = d.getElementById('newlink');
	    parentEle.removeChild(ele);
    }

</script>
</body>
</html>