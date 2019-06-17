<?php

session_start();
   $con=mysqli_connect("localhost","root","","mindunwind");

 if(isset($_POST['submit']))
 { 
    
     $user=$_POST['email'];
     $password=$_POST['pass'];
     $sql="select * from account where email='$user' and password='$password'";
     $res=mysqli_query($con,$sql);
     
     $cnt=mysqli_num_rows($res);
     if($cnt>0)
     {
          $_SESSION['user']=true;
           
         header('location:../index.html');
                    
     }
     else
     {
         echo "<script>window.alert('Invalid username or password')";
         echo "</script>";
         //header('location:index.php');
     }
     

 }

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
            <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/img/apple-icon.png">
    <link rel="icon" href="./assets/img/favicon.png">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>
       MindUnwind_login
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/css/material-kit.css?v=2.0.0">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/assets-for-demo/demo.css" rel="stylesheet" />
    <link href="./assets/assets-for-demo/vertical-nav.css" rel="stylesheet" />

        
        
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
         <script type="text/javascript">

             
             
             
             
             </script>
        
        <script type="text/javascript">

    $(document).ready(function(){

        $("#myModalfi").modal('show');

    });

</script>
    

        
        

        
       

        
    </head>
    <body id="page">
        
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>
        </ul>
        
        
        
                    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <!--a href="http://tympanus.net/Development/RockingLetters/">
                    <strong>&laquo; Previous Demo: </strong>Rocking Letters with CSS3 &amp; jQuery
                </a-->
                <!--span class="right">
                    <a href="http://www.flickr.com/photos/markjsebastian/" target="_blank">Photography by Mark Sebastian</a>
                    <a href="http://creativecommons.org/licenses/by-sa/2.0/deed.en" target="_blank">CC BY-SA 2.0</a>
                    <a href="http://tympanus.net/codrops/2012/01/02/fullscreen-background-image-slideshow-with-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <!--h1>CSS3 <span>Fullscreen Slideshow</span></h1>
                <h2>A CSS-only slideshow for background images</h2-->
				
					<!--a href="#" class="current-demo">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a-->
              
              <div class="modal fade" id="myModalfi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title" id="exampleModalLabel" style="font-size: 15px; color: blue;">About MindUnwind</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="1.jpg" alt="logo" height="35%" width="35%">
          
        <hr>
          <p style="color: blue">A web portal that strives to provide support to demotivated and depressed class students and also to studnets of all intellect by being an analyzer, a counselor friend, an aider, a motivator and a social skill developer,thereby enriching their lives with optimism, self-conviction and values of humanity..</p>
  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 12px;">Close</button>
        <button type="button" style="font-size:10px;" style="font-size: 10px" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Ok Got it
</button>
      </div> 
    
    </div>
  </div>
    </div>
</div>
                
       
      
                
                
                
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 15px;">Log In</h5>
          <label name="label" id="la" disabled> </label>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
           <form method="post" action="index.php">
  <div class="form-group">
    
    <input type="uname" class="form-control" id="exampleInputEmail1"  placeholder="Enter Email here" name="email" required>
      </div>
             
             
  <div class="form-group">
    
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Type Password" name="pass" required>
  </div>
 

  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-size: 12px;">Close</button>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="font-size: 12px;">
      </div> 
          </form>
    </div>
  </div>
    </div>
</div>
        
        
                    
                    
                    
                    

					

            </header>
            
        </div>
            
            <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="./assets/js/material-kit.js?v=2.0.0"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="./assets/assets-for-demo/js/material-kit-demo.js"></script>
    <script>
        $(document).ready(function() {
            materialKitDemo.initFormExtendedDatetimepickers();
            // Sliders for demo purpose in refine cards section
            var slider = document.getElementById('sliderRegular');

            noUiSlider.create(slider, {
                start: 40,
                connect: [true, false],
                range: {
                    min: 0,
                    max: 100
                }
            });

            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
                start: [20, 60],
                connect: true,
                range: {
                    min: 0,
                    max: 100
                }
            });
        });
    </script>

        </div>
    </body>
</html>