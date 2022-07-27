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

    table,tr,th,td{
        border-collapse:collapse;
    }
    table{
        width:70%;
        margin:auto;
        height:70px;
    }
    a {
        color: black;
        font-size:1.6rem;
        font-weight:700;
    }
   a:hover {
       color: white;
    }
    .formdata {
 margin-left:30%;
    }
    label{
        font-weight:700;
    }
    input{
        border:2px solid black;
        width:380px;
    }
    textarea{
        width:400px;
    }
    #imgs{
        width:80px;
        height:80px;
    }
    td{
        text-align:center;
    }
    th {
  background-color: #04AA6D;
  color: white;
}
select{
    font-size:1.5rem;
    font-weight:700;
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
     session_start();
     $uniqueid = rand();
$name=$_POST["productname"];
$_SESSION["productname"] = $name;
$_SESSION["uniqueid"] = $uniqueid;
$quantity=$_POST["productquantity"];
$color=$_POST["availablecolors"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn1->connect_error);
}
$result = mysqli_query($conn1,"SELECT * FROM productlist WHERE name='$name'");
echo "<center><h1>Check Out</h1></center>";
echo "<table border='1'>
   <tr>
       <th>Product</th>
      <th>Product Name</th>
      <th>Original price</th>
      <th>Quantity</th>
      <th>Color</th>
      <th>Offer</th>
      <th>Overall price</th>
   </tr>";

while($row = mysqli_fetch_array($result)) {
    $name=$row['name'];
    $price=$row['final-price']*$quantity;
   echo "<tr>";
   echo "<td><img id='imgs' src = images/".$row["image"].".></td>";
   echo "<td>" . $row['name'] . "</td>";
   echo "<td>" . $row['price']*$quantity . "</td>";
   echo "<td>" . $quantity . "</td>";
   echo "<td>" . $color . "</td>";
   echo "<td>" . $row['offer'] . "</td>";
   echo "<td>" . $row['final-price']*$quantity . "</td>";
   echo "</tr>";
   //comment
  
   $time_now=mktime(date('h')+3,date('i')+30,date('s'));
$date = date('d-m-Y H:i', $time_now);
$sql = "INSERT INTO orders (`uniqueid`,`name`,`quantity`,`final-price`,`customername`,`email`,`address`,`phone-number`,`payment-method`,`date-time-of-order`,`place-order`) VALUES
('$uniqueid','$name','$quantity','$price','null','null','null','0','cash on delivery','$date','false')";

        if($conn1->query($sql)===TRUE){
           // echo "inserted data succesfully";
        }
        else{
            echo "oops we ran into problem".$conn1->error;
        }
}
echo "</table>";
echo "<br>";

mysqli_close($conn1);
?>
<br>
<center><h1>Billing Address</h1></center>
   <div class="formdata">
    <form action="confirmorder.php" method="POST">

    <label for="name">Enter Name</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="customer-name" required>

    <br>
    <br>
    <label for="email">Enter Email</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" name="email" required>

    <br>
     <br>
    <label for="number">Enter Phone Number</label>&nbsp;
    <input type="number" name="phone-number" required>
    
    <br>
    <br>
    <label for="address">Enter Address</label>
    <br>
     <textarea name="address" id="" cols="30" rows="10" required></textarea>
     
     <br>
     <label for="payment">Payment method</label>&nbsp;&nbsp;
     &nbsp;&nbsp;     <select name="payment" id="">
     <option value="Cash on Delivery" default>Cash on Delivery</option>
     <option value="credit card or debit card" disabled>Credit card or Debit card</option>
     </select>
     <br>
     <br>
     <input type="submit" class="btn addtocart" value="Place Order"> 
     </form> 
     </div>
     <br>
     <button class="back home" onclick="window.location.href='index.php'">Back to Homepage</button>
     <br>
     <br>
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