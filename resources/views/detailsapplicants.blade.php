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
        <div class="titleheader">APPLICANTS - Details</div>
    </div>
                
    <div class="verticalnav">
        <ul>
            <li class="username">Properietary Name</li>
            <li><a href="dashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a class="active" href="listapplication"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Applicants</a></li>
            <li><a href="listoccupants"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a href="viewdorm"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><button type="button"><a href="welcome" style="padding-left: 0%;color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></button></li>
        </ul>    
    </div>

<div class="listappcontainer">
<form>
    <div class="smallheader">FULL NAME</div>
        <label for="fname">First Name</label>
        <label for="mname">Midle Name</label>
        <label for="lname">Last Name</label>
        <label for="sname">Suffix (Jr,,III)</label><br>

        <input type="text"  style="width:20%;margin-right:2%;" id="fname" value="Paola Joy" class="inputapp">
        <input type="text"  style="width:20%;margin-right:2%;" id="mname" value="Nuque"  class="inputapp">
        <input type="text"  style="width:20%;margin-right:2%;" id="lname" value="Francisco"  class="inputapp">
        <input type="text"  style="width:20%;margin-right:2%;" id="sname" value="Jr."  class="inputapp"><br><br>

    <div class="smallheader">ADDRESS</div>
        <label for="barangay">Barangay</label>
        <label for="street">Street</label>
        <label  for="city">City</label>
        <label for="province">Province</label>
        <input type="text" style="width:20%;margin-right:2%;" id="barangay" value="6"  class="inputapp">
        <input type="text" style="width:20%;margin-right:2%;"id="street" value="T. Alonzo Street"  class="inputapp">
        <input type="text" style="width:20%;margin-right:2%;"id="city" value="Laoag City"  class="inputapp">
        <input type="text" style="width:20%;"id="province" value="Ilocos Norte" class="inputapp"><br><br>

    <div class="smallheader">CONTACT INFORMATION</div>
        <label for="email">Email</label>
        <label  for="number">Mobile Number</label>
        <label for="nameg">Name of Guardian</label>
        <label for="number">Contact of Guardian</label><br>

        <input type="email" style="width:20%;margin-right:2%;" id="email" value="pjnfrancisco@gmail.com"  class="inputapp">
        <input type="tel" style="width:20%;margin-right:2%;" id="number" value="09355350600" class="inputapp">
        <input type="text" style="width:20%;margin-right:2%;"id="nameg" value="Philbert Francisco"  class="inputapp">
        <input type="tel" style="width:20%;"id="number" value="09355350600"  class="inputapp"><br><br>

    <div class="smallheader">ACADEMIC INFORMATION</div>
        <label for="fstudentid">Student Number</label>  
        <label for="college">College:</label>
        <label for="course">Course:</label><br>

        
        <input type="text" style="width:20%;margin-right:2%;" id="fstudentid" value="18-020008" class="inputapp" >
        <select name="college" style="width:20%;margin-right:2%;"id="room" class="inputapp">
            <option value="cas">CAS</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select>
        <input type="text" style="width:20%;margin-right:2%;"id="course" value="BSCS"  class="inputapp"><br><br>

    <div class="smallheader">OTHER INFORMATION</div>
         <label  for="sex" >Sex</label>
         <label  for="sex" >Room Type</label><br>

         <select name="room"  style="width:20%;margin-right:2%;" id="room" class="inputapp">
                <option value="cas">Female</option>
                <option value="coe">Male</option>
         </select>
         <input type="text" style="width:20%;margin-right:2%;" id="fstudentid" value="Single Space" class="inputapp" >

        <button type="button" onclick="denyapplicant()" class="greenbutton" style="margin-top:0%;" >DENY</button>  
        <button type="button" onclick="acceptapplicant()" class="secondyellowbutton" style="margin-right:10px;margin-top:0%;">ACCEPT</button>
    </form>
</div>

</body>
</html>