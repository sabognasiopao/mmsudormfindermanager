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
    
    <label for="slide">Uploaded Images</label>
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

    <div id="linkimage">
        <label for="image">Add Image <br><h5 style="margin-top:0px;color:#FFB700;">File type: [JPG/PNG]</h5></label> 
        <button type="button" onclick="new_linkimage()" class="addbutton" style="margin-left:5%;width:20%;">ADD IMAGE</button>  <br>
    </div>


    <!-- Template FOR IMAGE -->
    <div id="newlinkimage" style="display:none">
    <label for="image"></label> 
    <input type="file" name="image" accept="image/*" class="inputapp">
    </div>

 
    <a href="updatedorm"><button type="button" class="secondyellowbutton" style="margin-right:10%;margin-top:10px;">UPDATE</button></a>

</div>




</body>
</html>