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
  background-image: linear-gradient(to right, #2BC0E4 0%, #EAECC6  51%, #2BC0E4  100%);
}
table{
    width:50%;
    height:40rem;
}
tr{
    color:black;
    font-size:1.5rem;
    font-weight:700;
}
table{
    border-collapse:collapse;
    padding:1rem;
}
.lf{
    text-align:center;
    background-image: linear-gradient(to right bottom, #bc91d4, #b98ed6, #b68cd8, #b389db, #af87dd);
    color:white;  
}
.rt{
   width:100%;
}
.rad{
    cursor:pointer;
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

<br>

<h3> You are here to return a product that you have brought earlier . If you are here wrongly , then click on the button down here to go back: </h3>
<center> <button class="back home" onclick="window.location.href='index.php'">Back to Homepage</button></center>

<br>

<b><p style="color:red;"><u> CUSTOMER RETURN POLICY:</u> <br>  i) PRODUCT CAN BE RETURNED ONLY IF IT IS ORDERED WITHIN A DURATION OF 2 WEEKS <br>
																ii)THE PRODUCT CAN BE RETURNED ONLY IF IT IS UNDAMAGED AND IS IN SAME STATE AS SHIPPED <br>
																iii)THE PROPER REASON MUST BE ENLISTED <br></b>
</p>

<br>

<h3 style="text-align:center;"><u> CUSTOMER RETURN REPORT </u></h3>

<form action="returnconfirm.php" method="post">
<center>
<table border="4" cellspacing="2px">

<tr><td class="lf"> NAME: </td>
<td><input type="text" name="Name" class="rt" required/></td></tr>

<tr><td class="lf"> PHONE NUMBER: </td>
<td><input type="number" name="Phno" class="rt" required/></td></tr>

<tr><td class="lf"> EMAIL: </td>
<td><input type="email" name="Email" class="rt" required/></td></tr>

<tr><td class="lf"> PRODUCT NAME: </td>
<td><input type="text" name="pro" class="rt" required/></td></tr>

<tr><td class="lf"> ORDER NUMBER: </td>
<td><input type="number" name="OrNo" class="rt" required/></td></tr>

<tr><td class="lf"> DATE OF ORDER: </td>
<td><input type="date" name="DOO" class="rt" required/></td></tr>

<tr><td class="lf"> REASON TO RETURN: </td>
<td>
<input type="radio"  class="rad" name="Reason" value="Product is RECEIVED BROKEN"> Product is RECEIVED BROKEN <br>
<input type="radio"  class="rad" name="Reason" value="Ordered a Different Colour of the Product"> Ordered a Different Colour of the Product <br>
<input type="radio"  class="rad" name="Reason" value="Ordered a Different Model of the SAME Brand "> Ordered a Different Model of the SAME Brand <br>
<input type="radio"  class="rad" name="Reason" value="Ordered a Product from different BRAND"> Ordered a Product from different BRAND <br>
<input type="radio"  class="rad" name="Reason" value="Product Quality is BAD"> Product Quality is BAD <br>
<input type="radio"  class="rad" name="Reason" value="Product is missing in the package "> Product is missing in the package <br>
<input type="radio"  class="rad" name="Reason" value="Product looks Different in website"> Product looks Different in website <br>
</td>
</tr>
</table>
<br>
<input type="submit" class="btn addtocart" value="SUBMIT">
</form>
                   
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
				
		
