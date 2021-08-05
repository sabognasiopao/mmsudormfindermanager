<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">

        <title>MMSU - Dorm Management</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="COEDstyle.css">  
        
    </head>
    
    <body style="background-image: url('/images/bg.jpg');  background-repeat: no-repeat;background-size:100% 100%;" class="antialiased">
        
    <div class="uppernav">
        <h3 style="color:#0C4B05;margin-left:20px;">MMSU </h3><h3> - COEDS / Proprietor Dorm Management</h3>
    </div>
                <div class="topnav" id="myTopnav">
                <img style="float:left;margin-left:20px;margin-top:12px;" src="/images/mmsu logo.png"  height="3%" width="3%">
                <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
                </div>
                
                <img style="right:23%;" class="__img" src="images/mmsu logo.png" />

                <div class="logincontainer">

                    <form id="Login">
                    <legend>Log In:</legend>
                        <input type="text" id="name" placeholder="Staff ID/Username" class="loginform" style="margin-top:30px;width:100%;"> <br>
                        <input type="password" id="password" placeholder="Password" class="loginform" style="margin-top:10px;width:100%;"> <br>

                       <a href="dashboard"> <button type="button" class="yellowbutton" style="width:100%;margin-top:15px;">Log In</button><br></a>
                        <hr>
                        <label for="register" style="margin-left:15%;">New Here? Register first!</label><br>
                       <a href="registration"> <button type="button" id="register" class="registerbutton" style="margin-top:15px;">Register</button></a>

                    </form>

                </div>
    </body>
</html>
