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

    <label for="fname">Owner</label>
        <input type="text" id="fname" name="fname" style="width: 40%;" class="inputapp" value="Sample Name"><br><br>
    <label for="fname">Location</label>
        <input type="text" id="fname" name="fname" style="width: 40%;" class="inputapp" value="Sample Location"><br><br>
    <label for="fname">Contact</label>
        <input type="text" id="fname" name="fname" style="width: 40%;" class="inputapp" value="Sample Contact"><br><br><br>

    <label for="fname">Rental Fee</label>
        <input type="text" id="fname" name="fname" style="width: 40%;" class="inputapp" value="1500"><br><br>
    <label for="fname">Amenities</label>
        <input type="text" id="fname" name="fname" style="width: 40%;" class="inputapp" value="Sample Amenities"><br><br><br>

    <label for="quantity">Available space</label>
        <input type="number" id="quantity" name="quantity" class="inputapp" min="0" value="10"><br><br>    
    
<div id="linkimage">
        <label for="image">Add Image <br><h5 style="margin-top:0px;color:#FFB700;">File type: [JPG/PNG]</h5></label> 
        <input type="file" name="image" accept="image/*" class="inputapp">
        <button type="button" onclick="new_linkimage()" class="addbutton">+</button>  <br>
</div>

    <label for="image">Add Contract  <h5 style="margin-top:0px;color:#FFB700;">File type: [DOCS/PDF]</h5></label>
    <input type="file" name="image"  accept=".doc,.pdf,.docx" class="inputapp"><br>

<div id="newlink">
    <label for="fname">Room Type</label>
        <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="1500">
    <label for="fname" style="margin-left:10px;">Rental Fee</label>
        <input type="text" id="fname" name="fname" style="width:5%;margin-left:-10%;" class="inputapp" value="1500">
    <button type="button" onclick="new_link()" class="addbutton">+</button>  
    <button type="button" onclick="delIt('+ ct +')" class="addbutton">x</button><br><br>
</div>

<div style="padding-right:10px;margin-top:10px;">
    <a href="viewdorm"><button type="button" class="greenbutton">CANCEL</button> </a>
    <input type="submit" onclick="update()" class="secondyellowbutton" style="margin-right:20px;" value="SAVE">
</div>

</form>

<!-- Template FOR ROOM TYPE-->
    <div id="newlinktpl" style="display:none">
        <label for="fname"></label>
            <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="1500">
        <label for="fname" style="margin-left:10px;">Rental Fee</label>
            <input type="text" id="fname" name="fname" style="width:5%;margin-left:-10%;" class="inputapp" value="1500">
</div>

<!-- Template FOR IMAGE -->
<div id="newlinkimage" style="display:none">
    <label for="image"></label> 
    <input type="file" name="image" accept="image/*" class="inputapp">
    
</div>


</div>
</body>


<script>
/*
This script is identical to the above JavaScript function.
*/
var ct = 1;
var ig = 1;
function new_link()
{
	ct++;
	var div1 = document.createElement('div');
	div1.id = ct;
	// link to delete extended form elements
	var delLink = '<button type="button" onclick="delIt('+ ct +')" class="addbutton">x</button>';
    var addLink = '<button type="button" onclick="new_link()" class="addbutton">+</button>  ';
	div1.innerHTML = document.getElementById('newlinktpl').innerHTML + addLink + delLink ;
	document.getElementById('newlink').appendChild(div1);
}

function new_linkimage()
{
	ig++;
	var div2 = document.createElement('div');
	div2.id = ig;
	// link to delete extended form elements
	var delLink = '<button type="button" onclick="delItimg('+ ig +')" class="addbutton">x</button>';
    var addLink = '<button type="button" onclick="new_linkimage()" class="addbutton">+</button>  ';
	div2.innerHTML = document.getElementById('newlinkimage').innerHTML + addLink + delLink ;
	document.getElementById('linkimage').appendChild(div2);
}
// function to delete the newly added set of elements
function delIt(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('newlink');
	parentEle.removeChild(ele);
}

function delItimg(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('linkimage');
	parentEle.removeChild(ele);
}


     
</script>

</html>