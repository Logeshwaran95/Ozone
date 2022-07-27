<?php 
    include "config.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style2.css" async>
 </head>
 <style>
 body{
   font-family:cursive;
 }
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
  border:none;
  width:20rem;
 }
 .btn:hover {
  background-position: right center; 
}
.addtocart {
    background-image: linear-gradient(to right, #43cea2 0%, #185a9d  51%, #43cea2  100%);
}
 .formdata {
 margin-left:4%;
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
select{
    font-size:1.5rem;
    font-weight:700;
}
.container {
  max-width: 1000px;
  position: static;
  margin: auto;
  overflow: auto;
  margin-top: 10vh;
  margin-bottom: 10vh;
}
.site-footer {
  background-color: #26272b;
  padding: 45px 0 20px;
  font-size: 15px;
  flex-basis: 50%;

  color: #737373;
}
.site-footer hr {
  border-top-color: #bbb;
  opacity: 0.5;
}
.site-footer hr.small {
  margin: 20px 0;
}
.site-footer h6 {
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  margin-top: 5px;
  letter-spacing: 2px;
}
.site-footer a {
  color: #737373;
}
.site-footer a:hover {
  color: #3366cc;
  text-decoration: none;
}
.footer-links {
  padding-left: 0;
  list-style: none;
}
.footer-links li {
  display: block;
}
.footer-links a {
  color: #737373;
}
.footer-links a:active,
.footer-links a:focus,
.footer-links a:hover {
  color: #3366cc;
  text-decoration: none;
}
.footer-links.inline li {
  display: inline-block;
}
.site-footer .social-icons {
  text-align: right;
}
.site-footer .social-icons a {
  width: 40px;
  height: 40px;
  flex-basis: 50%;

  margin-left: 6px;
  margin-right: 0;
  border-radius: 100%;
  background-color: #33353d;
}
.copyright-text {
  margin: 0;
}

.social-icons {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
  float: center;
  height: 2rem;
}
.social-icons li {
  margin-left: 43px;
  display: inline-block;
  margin-bottom: 4px;
  height: 2rem;
}
.social-icons li.title {
  margin-right: 15px;
  text-transform: uppercase;
  color: #96a2b2;
  font-weight: 700;
  font-size: 13px;
}
.social-icons a {
  background-color: #eceeef;
  color: #818a91;
  font-size: 16px;
  display: inline-block;

  text-align: center;
  margin-right: 8px;
  border-radius: 100%;
  transition: all 0.2s linear;
}
.social-icons a:active,
.social-icons a:focus,
.social-icons a:hover {
  color: #fff;
  background-color: #29aafe;
}
.social-icons.size-sm a {
  line-height: 34px;
  height: 34px;
  width: 34px;
  font-size: 14px;
}
.social-icons a.facebook:hover {
  background-color: #3b5998;
}
.social-icons a.twitter:hover {
  background-color: #00aced;
}
.social-icons a.linkedin:hover {
  background-color: #007bb6;
}
.social-icons a.dribbble:hover {
  background-color: #ea4c89;
}
footer {
  background: black;
  color: white;
  font-size: 22px;
  padding: 5px;
  height: 290px;
}
.foot {
  font-size: 20px;
  font-family: "Times New Roman", Times, serif;
  text-align: left;
  margin: -60px;
}

.foot-col-3,
.foot-col-4 {
  min-width: 300px;
  flex-basis: 34%;
  text-align: center;
}
</style>
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
     </header><br>
    <h1><center>Shopping Cart</center></h1>
<div class="outline">
    <div class="container ">
<div class="cart_inner" style="margin-top:-15%;">
    <table class='table'>   
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "products";
           $conn1 = new mysqli($servername, $username, $password, $dbname);
           // Check connection
           if ($conn1->connect_error) {
             die("Connection failed: " . $conn1->connect_error);
           }
		    if(isset($_POST["shopping"]))
			{
				$sql = "DELETE FROM cartorders";
				$result=mysqli_query($conn1,$sql);
			}
                if(isset($_GET["del"]))
                {
                    foreach($_SESSION["cart"] as $keys=>$values)
                    {
                            if($values["pid"]==$_GET["del"])
                            {
                                unset($_SESSION["cart"][$keys]);
                            }
                    }
                }
                    if(!empty($_SESSION["cart"]))
                    {
                            $total=0;
                            foreach($_SESSION["cart"] as $keys=>$values)
                            {
                                $amt=$values["qty"]*$values["price"];
                                    $total+=$amt;
                                    $name=$values["pname"];
                                    $quant=$values["qty"];
                                    $price=$values["price"];
                                    echo '<tbody>
                                            <tr>
                                                <td>'.$values["pname"].'</td>
                                                <td>'.$values["qty"].'</td>
                                                <td>'.$values["price"].'</td>
                                                <td>'.$amt.'</td>
                                                <td><a href="viewCart.php?del='.$values["pid"].'">Remove </a></td>
                                            </tr>
                                            
                                    ';
                                    $uniqueid=rand();
                                    $time_now=mktime(date('h')+3,date('i')+30,date('s'));
                                    $date = date('d-m-Y H:i', $time_now);
                                    $sql = "INSERT INTO cartorders(`uniqueid`,`name`,`quantity`,`final-price`,`customername`,`email`,`address`,`phone-number`,`payment-method`,`date-time-of-order`,`place-order`) VALUES
('$uniqueid','$name','$quant','$price','null','null','null','0','cash on delivery','$date','false')";

        if($conn1->query($sql)===TRUE){
           // echo "inserted data succesfully";
        }
        else{
            echo "oops we ran into problem".$conn1->error;
        }
                                    
                            }   
                                echo '
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>                                           
                                                <td>Total</td>
                                                <td>'.$total.'</td>
                                            </tr> </tbody></div>
                                            <tr>
                                            <td><a class="button" name="shopping" href="index.php">Continue Shopping</a></td>
                                            </tr>';                           
                            
                    }
                ?>
            </table>
            <br><br>
            <center><h1>Billing Address</h1></center>
   <div class="formdata">
    <form action="cartorder.php?uniqueid=<?php echo $uniqueid ?>" method="POST">

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
     <button class="btn addtocart" onclick="window.location.href='index.php'">Back to Homepage</button>
     <br>
     <br>
     </main>
                </div> 
                 
  </div>
</div>

</div>
<br>

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


