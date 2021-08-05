<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">

        <title>MMSU - Dorm Management | Occupants</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="COEDstyle.css">  

          <!-- JS -->
          <script type="text/javascript" src="dormfindercoed.js"></script>
        
    </head>
    <body class="antialiased">
  
<!-- NAVIGATION BAR -->  
    <div class="uppernav">
        <h3 style="color:#0C4B05;margin-left:20px;">MMSU </h3><h3> - COEDS / Proprietor Dorm Management</h3>
    </div>
    
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:10px;" src="/images/mmsu logo.png"  height="60" width="60">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
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
    
    <div class="header"> <h1>OCCUPANTS</h1>
      <form style="margin-top:2%;margin-left:30%;" action="###">
        <input type="text" id="search" onkeyup="searchFunction()" placeholder="Search.." name="search">
        <button type="submit"><img src="https://img.icons8.com/pastel-glyph/50/000000/search--v2.png" width="100%"></button>
      </form>        
    </div>
<!-- END OF NAVIGATION BAR -->  

<!--  LIST OF OCCUPANTS -->  
    <div class="listappcontainer" style="margin-top:2%;">
    <div class="tableFixHeadtitle">LIST OF OCCUPANTS</div>  
    <div class="tableFixHead">
      <table>
        <thead>
          <tr>
            <th>NAME</th>
            <th>STUDENT NUMBER</th>
            <th>CONTACT NUMBER</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="detailsoccupants">Paola Francisco</a></td>
            <td>18-020008</td>
            <td>09355350600</td>
          </tr>
        </tbody>
      </table>
    </div>

    <button type="button" class="yellowbutton" onclick="listapp()" style="float:right;margin-top:20px;margin-right:10%;"> DOWNLOAD</button>

</div>
</body>
</html>