</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WELCOME TO Ozone</title>
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
  background-image: linear-gradient(to right, #2BC0E4 0%, #EAECC6  51%, #2BC0E4  100%)
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
     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$cust_name =  $_POST['Name'];
$cust_phno = $_POST['Phno'];
$cust_email = $_POST['Email'];
$order_number = $_POST['OrNo'];
$day = strtotime($_POST["DOO"]);
$day = date('Y-m-d H:i:s', $day);
$prodname = $_POST['pro'];
$reason_ofreturn = $_POST['Reason'];

$sqlquery = "INSERT INTO CustomerReport (customername,PhoneNumber,Email,productname,OrderNumber,DateOfOrder,Reason) VALUES ('$cust_name','$cust_phno','$cust_email','$prodname','$order_number','$day','$reason_ofreturn')";

if($conn->query($sqlquery) === true){
  
    echo "<center><h1>Your Query has been Sent ".$cust_name." .. Please stay tuned to receive an email from us</h1>";
    echo "<h2>We apologise for any inconvenience that happened to you...</h2>";
    echo "<h2>Feel free to leave your thoughts</h2></center>";
} else{
    echo "ERROR: Could not able to execute $sqlquery. " . $conn->error;
}

$conn->close();
?>
          <center> <button class="back home" onclick="window.location.href='index.php'">Continue Shopping</button></center>         
     </main>
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
				
		
