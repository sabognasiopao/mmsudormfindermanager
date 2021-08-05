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
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>


<div class="updatedormcontainer">
<form>

    <label for="fname">First Name</label>
    <label for="fname">Middle Name</label>
    <label for="fname">Last Name</label><br>
    <input type="text" id="fname" name="fname" style="width: 25%;" class="inputapp" value="Sample Name">
    <input type="text" id="fname" name="fname" style="width: 25%;" class="inputapp" value="Sample Name">
    <input type="text" id="fname" name="fname" style="width: 25%;" class="inputapp" value="Sample Name"><br><br>

    <label for="dname">Dorm Name</label>
    <label for="contact">Contact</label>
    <label for="quantity">Available space</label><br>
    <input type="tel" id="fname" name="dname" style="width: 25%;" class="inputapp" value="Sample Dorm Name">
    <input type="text" id="fname" name="contact" style="width: 25%;" class="inputapp" value="Sample Contact">
    <input type="number" id="quantity" name="quantity"  style="width: 25%;" class="inputapp" min="0" value="10"><br><br>
    
    <label for="brgy">Barangay</label>
    <label for="st">Street</label><br>
    <input type="text" id="brgy" name="fname" style="width: 25%;" class="inputapp" value="6 Quiling Sur">
    <input type="text" id="st" name="fname" style="width: 25%;" class="inputapp" value="Jakamo Street"><br><br>

    <label for="hn">House Number</label>
    <label for="nl">Nearest Landmark</label><br>
    <input type="text" id="hn" name="fname" style="width: 25%;" class="inputapp" value="1231">
    <input type="text" id="nl" name="fname" style="width: 25%;" class="inputapp" value="Teatro Ilocandia"><br><br>

    <label for="fname">Short Description</label><br>
    <textarea></textarea><br><br>

   
   
   
    <label for="fname">Amenities</label><br>
    <div class="tablewrapper" style="margin-right:20%;width:90%;">
        <input type="checkbox" id="am1" name="vehicle1" value="Bike">
            <label style="width:20%;" for="am1"> Free Wifi</label>
        <input type="checkbox" id="am2" name="vehicle2" value="Car">
            <label style="width:20%;" for="am2"> With Appliances</label>
        <input type="checkbox" id="am3" name="vehicle3" value="Boat">
            <label style="width:20%;" for="am3"> Aircondition</label>
        <input type="checkbox" id="am3" name="vehicle3" value="Boat">
            <label style="width:20%;" for="am3"> Food Services</label>
        <input type="checkbox" id="am3" name="vehicle3" value="Boat">
            <label style="width:20%;" for="am3">Parking</label>
        <input type="checkbox" id="am3" name="vehicle3" value="Boat">
            <label style="width:20%;" for="am3"> Laundry Services</label>
        <input type="checkbox" id="am3" name="vehicle3" value="Boat">
            <label style="width:20%;" for="am3"> With Living Room</label>
        <input type="checkbox" id="am3" name="vehicle3" value="Boat">
            <label style="width:20%;" for="am3"> With Pool</label>
        <input type="checkbox" id="am3" name="vehicle3" value="Boat">
            <label style="width:20%;" for="am3"> Surveillance System</label>
        <input type="checkbox" id="am3" name="vehicle3" value="Boat">
            <label style="width:20%;" for="am3">Own Bathroom</label>
        <input type="checkbox" id="am3" name="vehicle3" value="Boat">
            <label style="width:20%;" for="am3">With Furniture</label>
    </div><br>

    <label style="width:15%;" for="contract">Add Contract <br>File type: [DOCS/PDF]</label>
        <input type="file" name="image" accept=".doc,.pdf,.docx" class="inputapp"><br>

    <div id="newlink">
        <label style="width:15%;" for="fname">Room Type</label>
        <button type="button" onclick="new_link()" class="addbutton" style="width:15%;">ADD ROOM TYPE</button>  
    </div>

  
    <div style="padding-right:10%;margin-top:10px;">
        <a href="viewdorm"><button type="button" class="greenbutton">CANCEL</button> </a>
        <input type="submit" onclick="update()" class="secondyellowbutton" style="margin-right:20px;" value="SAVE">
    </div>

 <!-- Template FOR ROOM TYPE-->
    <div id="newlinktpl" style="display:none">
        <label style="width:15%;" for="fname"></label>
            <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="Single Space">
        <label for="fname" style="width:10%;margin-left:10px;margin-right:0%;">Rental Fee</label>
            <input type="text" id="fname" name="fname" style="width:5%;margin-left:0%;" class="inputapp" value="1500">
    </div>

</form>
</div>

<script>
/*
This script is identical to the above JavaScript function.
*/
var ct = 1;
    function new_link()
    {
    	ct++;
	    var div1 = document.createElement('div');
	    div1.id = ct;
	// link to delete extended form elements
	    var delLink = '<button type="button" onclick="delIt('+ ct +')" class="addbutton">x</button>';
        var addLink = '<button type="button" onclick="new_link()" class="addbutton">+</button>  ';
	    div1.innerHTML = document.getElementById('newlinktpl').innerHTML + delLink ;
	    document.getElementById('newlink').appendChild(div1);
    }

// function to delete the newly added set of elements
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