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
        <form style="width:100%;">
            <label for="fname">Full Name</label><br>
                <input type="text" id="fname" name="fname" style="width: 42%;" class="inputapp" value="Sample Name"><br><br>

            <label style="width:20%;" for="brgy">Barangay</label>
            <label style="width:20%;" for="st">Street</label><br>
                <input type="text" id="brgy" name="fname" style="width: 20%;" class="inputapp" value="6 Quiling Sur">
                <input type="text" id="st" name="fname" style="width: 20%;" class="inputapp" value="Jakamo Street"><br><br>

            <label style="width:20%;" for="hn">House Number</label>
            <label style="width:20%;" for="nl">Nearest Landmark</label><br>
                <input type="text" id="hn" name="fname" style="width: 20%;" class="inputapp" value="1231">
                <input type="text" id="nl" name="fname" style="width: 20%;" class="inputapp" value="Teatro Ilocandia"><br><br>

            <label style="width: 20%;" for="fname">Contact</label>
            <label style="width: 20%;" for="quantity">Available space</label><br>
                <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="Sample Contact">
            <input type="number" id="quantity" name="quantity"  style="width: 20%;" class="inputapp" min="0" value="10"><br><br>
        </form>

    <div class="tablewrapper">
    <table class="viewdormtable" id="room">
                <tr>
                    <th>Room Type</th>
                    <th>Price</th>
                </tr> 
               <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">1500</td>
                </tr>
                <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">1500</td>
                </tr>
                <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">1500</td>
                </tr>
                <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">1500</td>
                </tr>
                <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">1500</td>
                </tr>
    </table></div><br>

    <label style="width:50%;margin-top:2%;" for="slide">Uploaded Images : Click button to add/remove</label>
   
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

    <a href="updateimage"><button type="button" class="greenbutton" style="margin-right:20%;margin-top:10px;"> UPDATE IMAGE</button></a>
    <a href="updatedorm"><button type="button" class="secondyellowbutton" style="margin-top:10px;margin-right:2%;">UPDATE FORM</button></a>

</div>
</body>
</html>