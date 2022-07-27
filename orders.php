<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <style>
     table,tr,th,td{
        border-collapse:collapse;
    }
    table{
        width:70%;
        margin:auto;
        height:70px;
    }
    td{
        text-align:center;
    }
    th {
  background-color: #04AA6D;
  color: white;
}
    a {
        color: black;
        font-size:1.6rem;
        font-weight:700;
    }
   a:hover {
       color: white;
    }
    .addtocart:hover{
        background-color:#04AA6D
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
     $customername = $_POST["customername"];
     $email = $_POST["email"];
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "products";
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn1->connect_error);
}
$result = mysqli_query($conn1,"SELECT * FROM orders WHERE (customername='$customername' AND email='$email')");
echo "<center><h1>My Orders</h1></center>";
echo "<table border='1'>
   <tr>
       <th>Customer Name</th>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Product Price</th>
      <th>Order Number</th>
      <th>Order Date</th>
      <th>Order Status</th>
      </tr>";
      $date = date("Y/m/d");
      $arriveday = date('l', strtotime($date. ' + 6 days'));
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['customername'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" . $row['final-price'] . "</td>";
    echo "<td>" . $row['uniqueid'] . "</td>";
    echo "<td>" . $row['date-time-of-order'] . "</td>";
    echo "<td> Arriving " .  $arriveday."</td>";
    echo "</tr>";
    
}
echo "</table>";
     ?>
     <br>
     <center> <button class="back home" onclick="window.location.href='index.php'">Continue Shopping</button></center>
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