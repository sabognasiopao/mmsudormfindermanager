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
        <div class="titleheader">DASHBOARD</div>
    </div>
                
    <div class="verticalnav">
        <ul>
            <li class="username">Properietary Name</li>
            <li><a class="active" href="dashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a href="listapplication"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Applicants</a></li>
            <li><a href="listoccupants"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a href="viewdorm"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="#contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>

<div class="dashboardcontainer">
    <div class="rightcontainer">
        <img src="/images/right.png" alt="Avatar" class="image">
        <div class="rightoverlay">
            <div class="text">Applicants</div>
        </div>
    </div>
    
    <div class="middlecontainer">
        <img src="/images/middle.png" alt="Avatar" class="image">
        <div class="middleoverlay">
            <div class="text">Dormitory</div>
        </div>
    </div>

    <div class="leftcontainer">
        <img src="/images/left.png" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text">Occupants</div>
        </div>
    </div>
</div>
<div class="buttondashboardcontainer">
    <a href="listoccupants"><button type="button" class="yellowbutton" style="margin-right:10px;"> View Occupants</button></a>
    <a href="viewdorm"><button type="button" class="yellowbutton" style="margin-right:10px;"> Update Dorm</button></a>
    <a href="listapplication"><button type="button" class="yellowbutton" style="margin-right:10px;"> View Applicants</button></a>
</div>

    </body>
</html>
