<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">

        <title>MMSU - Dorm Management | Dashboard</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="COEDstyle.css">
        <!-- JS -->
        <script type="text/javascript" src="dormfindercoed.js"></script>  
        
    </head>
    
    <body class="antialiased">
        
    <div class="uppernav">
        <h3 style="color:#0C4B05;margin-left:20px;">MMSU </h3><h3> - COEDS / Proprietor Dorm Management</h3>
    </div>
    
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:10px;" src="/images/mmsu logo.png"  height="60" width="60">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
        <div class="titleheader">DORM</div>
    </div>
                
    <div class="verticalnav">
        <ul>
            <li class="username">Properietary Name</li>
            <li><a href="dashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a href="listapplication"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Applicants</a></li>
            <li><a href="listoccupants"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a class="active" href="viewdorm"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="#contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>

    <div class="updatedormcontainer">
    <form>
    <label for="fname">Owner</label>
        <input type="text" id="fname" name="fname" style="width: 400px;" class="inputapp" value="Sample Name" readonly="readonly"><br><br>
    <label for="fname">Address</label>
        <input type="text" id="fname" name="fname" style="width: 400px;" class="inputapp" value="Sample Location" readonly="readonly"><br><br>
    <label for="fname">Contact</label>
        <input type="text" id="fname" name="fname" style="width: 400px;" class="inputapp" value="Sample Contact" readonly="readonly"><br><br>
    <label for="fname">Amenities</label>
        <input type="text" id="fname" name="fname" style="width: 400px;" class="inputapp" value="Sample Amenities" readonly="readonly"><br><br><br>
    
    <label for="room">Type of Room</label>
        <select name="room" id="room" style="width: 200px;"class="inputapp" readonly="readonly">
            <option value="cas">Single</option>
            <option value="coe">Double</option>
            <option value="cbea">Triple</option>
            <option value="chs">Quadruple</option>
        </select>
    <label for="fname" style="margin-left:10px;margin-right:-100px;">Room Fee</label>
        <input type="text" id="fname" name="fname" style="width: 80px; margin-left:0px;" class="inputapp" value="1200" readonly="readonly"><br><br><br>
   
    <label for="quantity">Available space</label>
        <input type="number" id="quantity" name="quantity" class="inputapp" min="0" value="10" readonly="readonly"><br><br>    

    <a href="updatedorm"><button type="button" class="secondyellowbutton" style="margin-right:10px;margin-top:10px;">UPDATE</button></a>

</form>
</div>