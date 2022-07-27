<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <style>
        .btn {
  margin: 10px;
  height:3.6rem;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
  box-shadow: 0 0 20px #eee;
  border-radius: 10px;
 }
 .btn:hover {
  background-position: right center; 
}
.addtocart {
    background-image: linear-gradient(to right, #43cea2 0%, #185a9d  51%, #43cea2  100%);
}
    .mainform {
  margin-left: 37%;
  margin-top:2%;
}
a {
        color: black;
        font-size:1.6rem;
        font-weight:700;
    }
   a:hover {
       color: white;
    }
    input{
        border:1px solid black;
    }
    label{
         font-weight:700;
    }
    #img{
        height:40%;
        margin-top:3rem;
        width:40%;
        margin-left:32%;
    }
    center{
        margin-right:10%;
    }
    h1{
        margin-left:15%;
    }
</style>
</head>
<body>
<div class="grid-container">
<header>
    <div class="brand"> <img src="images/logo.png" alt="logo"></div>
    <div class="top">
    <a href="index.php">Home</a>
        <a href="return.php">Contact us</a>
        <a href="orderinput.php">Orders</a>
        <a href="viewcart.php"><i class="fa fa-shopping-cart fa_custom fa-1x"></i></a>
    </div>
     </header>
     <main id="main-container">
     <center><h1>Ozone Got Your Orders</h1></center>
     <img src="images/delivery.jpg" id='img'>
     <form action="orders.php" method="POST">
     <div class='mainform'>
     <label for="name">Enter Name</label>
     <input type="text" name="customername" required>
     <br>
     <br>
     <label for="email">Enter Email</label>&nbsp;
     <input type="email" name="email" required>
     <br>
     <br>
     <input type="submit" value="Show Orders" class="btn addtocart">
     </div>
     </form>
     <br>
     <center><button class="back home" onclick="window.location.href='index.php'">Back to Homepage</button></center>
</main>
<div>
<footer class="site-footer ">    
    
    <div class="row">
       <div class="foot-col-3">
         <h6>About</h6>
         <p class="text-justify"><i>Copyright to Ozone Pvt Ltd.</i>All rights reserved @2021</p>
       </div>

       <div class="foot-col-3">
         <h6>Useful Links</h6>
         <ul class="footer-links">
           <li>Coupons</li>
           <li>Return policy</li>
           <li>Terms and Conditions</li>
         </ul>
         <ul class="social-icons">Follow us 
<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
</ul>
       </div>
 </div>

    </div>
    </div>
</body>
</html>