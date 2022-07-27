</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WELCOME TO Ozone</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        form{
            margin-left:25%;
            margin-top:5%;
            margin-bottom:5%;
        }
        .inputs,textarea{
            border:1px solid black;
            width:70rem;
        }
        label{
            font-size:2rem;
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
 }
 .btn:hover {
  background-position: right center; 
}
.addtocart {
  background-image: linear-gradient(to right, #2BC0E4 0%, #EAECC6  51%, #2BC0E4  100%);
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
         <center><h1>Customer Review</h1></center>
         <form action="reviewed.php" method="POST">
             <label for="reviewer">Reviewer</label><br>
         <input type="text" name="reviewer" required class="inputs">
         <br><br>
         <label for="product">Product Name</label><br>
         <input type="text" name="productname" required class="inputs">
         <br><br>
         <label for="title">Title</label><br>
         <input type="text" name="title" required class="inputs">
         <br><br>
         <label for="rating">Your Rating</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <select name="rating" style="max-width : 150px;" required>
            <option >1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
            <br>
            <br>
            <label for="images">Attach Product Images</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" required><br><br>
            <label for="pros">Pros</label><br>
            <textarea name="pros" id="" cols="30" rows="10" required></textarea>
            <br><br>
            <label for="cons">cons</label><br>
            <textarea name="cons" id="" cols="30" rows="10" required></textarea>
            <br>
            <br>
            <label for="review">Review</label><br>
            <textarea name="review" id="" cols="30" rows="10" required></textarea>
            <br><br>
            <label for="recommend">Would you recommend this product?</label>
            <br><br>
            <input type="radio" name="recommend" value="Yes" required/> Yes</span><br/>
            <input type="radio" name="recommend" value="No" required/> No</span><br/>
            <input type="radio" name="recommend" value="I am not sure" required/> I am not sure</span><br/>
            <br><br>
            <input type="submit" value="Post Review" class="btn addtocart">
         </form>
         <center> <button class="back home" onclick="window.location.href='index.php'">Back to Homepage</button></center> 
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