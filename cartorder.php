<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <style>
    a {
        color: black;
        font-size:1.6rem;
        font-weight:700;
    }
   a:hover {
       color: white;
    }
    main{
        margin-top:5%;
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
     <center>
<?php
$uniqueid=$_GET["uniqueid"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn1->connect_error);
}
$customername = $_POST["customer-name"];
$email = $_POST["email"];
$phonenumber = $_POST["phone-number"];
$address = $_POST["address"];
$sql = "UPDATE cartorders SET 
             `customername`='$customername',
             `email`='$email',
             `address`='$address',
             `phone-number`='$phonenumber',
            `place-order`='True'
             WHERE id<100";


        if($conn1->query($sql)===TRUE){
            echo "<h2>Orders Placed Successfully</h2>";
        }
        else{
            echo "oops we ran into problem".$conn1->error;
        }
?>
<br>
<button class="back home" onclick="window.location.href='index.php'">Continue Shopping</button>
</center>
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
</body>
</html>
