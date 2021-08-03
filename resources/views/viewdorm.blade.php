<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">
        <title>MMSU - Dorm Management | Dashboard</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="COEDstyle.css">
        <!-- JS -->
        <script type="text/javascript" src="dormfindercoed.js"></script>  
    </head>
    
    <body class="antialiased">
        
    <div class="uppernav"><h3 style="color:#0C4B05;margin-left:20px;">MMSU </h3><h3> - COEDS / Proprietor Dorm Management</h3></div>
    
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
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>

    <div class="updatedormcontainer">
    <form style="width:90%;">
    <label style="margin-left:1.5%;" for="fname">Owner</label>
        <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Name" readonly="readonly"><br><br>
    <label style="margin-left:1.5%;"for="fname">Address</label>
        <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Location" readonly="readonly"><br><br>
    <label style="margin-left:1.5%;"for="fname">Contact</label>
        <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Contact" readonly="readonly"><br><br>
    <label style="margin-left:1.5%;"for="fname">Amenities</label>
        <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Amenities" readonly="readonly"><br><br><br>
    <label style="margin-left:1.5%;"for="quantity">Available space</label>
        <input type="number" id="quantity" name="quantity" class="readapp" min="0" value="10" readonly="readonly"><br><br>
    
    <table class="viewdormtable" id="room">
                <tr>
                    <th>Room Type</th>
                    <th>Price</th>
                </tr> 
               <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">1500</td>
                </tr>
    </table> <br><br>

    <label style="margin-left:1.5%;" for="slide">Uploaded Images</label>
    <div class="slide-container" id="slide">
            <img src="http://placehold.it/200" />
            <img src="http://placehold.it/200" />
            <img src="http://placehold.it/200" />
            <img src="http://placehold.it/200" />
            <img src="http://placehold.it/200" />
            <img src="http://placehold.it/200" />
            <img src="http://placehold.it/200" />
            <img src="http://placehold.it/200" />
        </div>
 
    <a href="updatedorm"><button type="button" class="secondyellowbutton" style="margin-right:10%;margin-top:10px;">UPDATE</button></a>

</form>
</div>