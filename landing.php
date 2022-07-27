<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
        $(document).ready(function(){
            $(".toggle").click(function(){
                $(".rightmenubox").slideDown("speed");
                $(".toggle").hide();
                $(".toggles").show();
            });
            $(".toggles").click(function(){
                $(".rightmenubox").slideUp("speed");
                $(".toggle").show();
                $(".toggles").hide();
            });
        });
    </script>
</head>
<body>
<div class="bg-img">
  <div class="container">
    <section id="contain">
        <nav>
            <a href="" class="pic">
                <img src="images/Logo.png" alt="" class="image" style="background:transparent">
            </a>
            <span class="forspacing"></span>
            <ul class="toptext" data-aos="fade-left">
                <li><a id="active"href="#">Home</a></li>
                <li><a href="#">Documentation</a></li>
                <li class="toggle"></li>
                <li class="toggles"></li>
            </ul>
        </nav>
    </section>
  </div>
  <div class="main">
  <h1  data-aos="fade-right">Welcome To Ozone <br> Your One Stop For <br>
    Everything</h1>
    <div class="rightmenubox" style="display:none;" >
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#">Linkedin</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
  <button class="btn" onclick="window.location.href='index.php'">Shop Now</button>
</div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script> 
</body>
</html>
