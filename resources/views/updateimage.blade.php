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
        <div class="titleheader">DORM: Update Image</div>
    </div>
                
    <div class="verticalnav">
        <ul>
            <li class="username">Properietary Name</li>
            <li><a href="dashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a href="listapplication"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Applicants</a></li>
            <li><a href="listoccupants"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a class="active" href="viewdorm"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><button type="button"><a href="welcome" style="padding-left: 0%;color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></button></li>
        </ul>    
    </div>

<div class="updateimagecon">
    
    <!-- SLIDESHOW OF DORMITORY  -->
        <div class="dorm_details_con">

        <div id="slideshow" class="imgcontainer">
        <div class="mySlides"> <img src="/images/sample.jpg" style="width:100%;height:400px;">
            <div class="text">Single Space</div><div class="IDtext">Image ID: 1</div></div>

        <div class="mySlides"><img src="/images/sample2.jpg"  style="width:100%;height:400px;">
            <div class="text">Ammenities</div><div class="IDtext">Image ID: 2</div></div>

        <div class="mySlides"><img src="/images/sample.jpg"  style="width:100%;height:400px;">
            <div class="text">Single Space</div><div class="IDtext">Image ID: 3</div></div>

        <div class="mySlides"><img src="/images/sample2.jpg"  style="width:100%;height:400px;">
            <div class="text">Ammenities</div><div class="IDtext">Image ID: 4</div></div>

        <a class="prev" onclick="plusSlides(-1, slideshow)">❮</a>
        <a class="next" onclick="plusSlides(1, slideshow)">❯</a>
        </div>
         
    </div>

    <div class="dorm_details">    
        <form style="width:90%;">
        
        <label style="width:70%;margin-top:5%;" accept="image/*" for="image">Add Image File type: [JPG/PNG]</label><br>
            <input type="file" id="myfile" class="imagefile" name="myfile"><br>

        <label style="width:40%;margin-bottom:2%;" accept="image/*" for="image">Select label for image</label><br>
            <select style="width:auto" class="inputapp">
                <option>Single Space</option>
                <option>Ammenities</option>
                <option>Single Space</option>
            </select><br>
    
        <a href="updatedorm"><button type="button" class="secondyellowbutton" style="margin-right:15%;margin-top:10px;margin-bottom:1%;">ADD</button></a><br><br>
        
    <hr style="margin-top:5%;">

    <label style="width:40%;margin-bottom:2%;" accept="image/*" for="image">Delete image : choose image ID</label>
        <select style="width:15%" class="inputapp">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    <a href="updatedorm"><button type="button" class="secondyellowbutton" style="margin-right:15%;margin-top:0%;margin-bottom:2%;">DELETE</button></a>
        <hr style="margin-top:2%;"><br>
    
    </div>



</div>
</body>

<script>
var slideshow = document.getElementById("slideshow");
        slideshow.currentSlideIndex = 1;
        showSlides(slideshow.currentSlideIndex, slideshow);

        function plusSlides(n, slideshow) {
        showSlides(slideshow.currentSlideIndex += n, slideshow);
        }

        function currentSlide(n, slideshow) {
        showSlides(slideshow.currentSlideIndex = n, slideshow);
        }

        function showSlides(n, slideshow) {
  
            var i;
            var slides = slideshow.getElementsByClassName("mySlides");
       
            if (n > slides.length) {slideshow.currentSlideIndex = 1}    
            if (n < 1) {slideshow.currentSlideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }

        slides[slideshow.currentSlideIndex-1].style.display = "block";  
        }
    
</script>

</html>