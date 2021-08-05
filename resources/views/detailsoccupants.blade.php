<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">
        <title>MMSU - Dorm Management | Applicants</title>

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
        <div class="titleheader">OCCUPANTS - Details</div>
    </div>
                
    <div class="verticalnav">
        <ul>
            <li class="username">Properietary Name</li>
            <li><a href="dashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a href="listapplication"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Applicants</a></li>
            <li><a class="active" href="listoccupants"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a href="viewdorm"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>

<div class="listappcontainer">

    <form>
    <label class="detailslabel" for="fstudentid">Student Number</label>  
        <label class="detailslabel" for="sex" >Sex</label>
        <label class="detailslabel" for="email">Email</label>
        <label class="detailslabel" for="number">Mobile Number</label><br>
        
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;" id="fstudentid" value="18-020008" class="inputapp" readonly >
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;" id="sec" value="Female" class="inputapp" readonly>
        <input type="email" style="width:20%;margin-right:2%;margin-left:0%;" id="email" value="pjnfrancisco@gmail.com"  class="inputapp" readonly>
        <input type="tel" style="width:20%;margin-left:0%;" id="number" value="09355350600" class="inputapp" readonly><br><br>

        <label class="detailslabel" for="fname">First Name</label>
        <label class="detailslabel" for="mname">Midle Name</label>
        <label class="detailslabel" for="lname">Last Name</label>
        <label class="detailslabel" for="sname">Suffix (Jr,,III)</label><br>

        <input type="text"  style="width:20%;margin-right:2%;margin-left:0%;" id="fname" value="Paola Joy" class="inputapp" readonly>
        <input type="text"  style="width:20%;margin-right:2%;margin-left:0%;" id="mname" value="Nuque"  class="inputapp" readonly>
        <input type="text"  style="width:20%;margin-right:2%;margin-left:0%;" id="lname" value="Francisco"  class="inputapp" readonly>
        <input type="text"  style="width:20%;margin-right:2%;margin-left:0%;" id="sname" value="Jr."  class="inputapp" readonly><br><br>

        <label class="detailslabel" for="birthday">Barangay</label>
        <label class="detailslabel" for="birthday">Street</label>
        <label class="detailslabel" for="birthday">City</label>
        <label class="detailslabel" for="birthday">Province</label>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;" id="birthday" value="6"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="birthday" value="T. Alonzo Street"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="birthday" value="Laoag City"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-left:0%;"id="birthday" value="Ilocos Norte" class="inputapp" readonly><br><br>


        <label class="detailslabel" for="nameg">Name of Guardian</label>
        <label class="detailslabel" for="number">Contact of Guardian</label>
        <label class="detailslabel" for="college">College:</label>
        <label class="detailslabel" for="course">Course:</label><br>

        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="nameg" value="Philbert Francisco"  class="inputapp" readonly>
        <input type="tel" style="width:20%;margin-right:2%;margin-left:0%;"id="number" value="09355350600"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="college" value="CAS"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="course" value="BSCS"  class="inputapp" readonly><br><br>

        <label class="detailslabel" for="room">Room Type</label><br>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="nameg" value="Single Space"  class="inputapp" readonly><br>
        <button type="button" onclick="remove()" class="greenbutton" style="margin-top:20px;">REMOVE</button>  
        <button type="button" onclick="listapp()" class="secondyellowbutton" style="margin-right:10px;margin-top:20px;">DOWNLOAD</button>
    </form>
</div>

</body>
</html>