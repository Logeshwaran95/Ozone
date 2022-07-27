<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WELCOME TO Ozone</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <script src="script.js" async></script>
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
  background-image:  linear-gradient(to right, #fc00ff 0%, #00dbde  51%, #fc00ff  100%);
}
.tops{
    color:white;
    background-image: linear-gradient(to right, #ff6e7f 0%, #bfe9ff  51%, #ff6e7f  100%);
    border:none;
    width:20rem;
    font-weight:700;
}
a{
  font-size:1.9rem;
  font-weight:800;
  padding:0.5rem;
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
     
     <div class="slideshow">
<div class="slideshow-container">
   <div class="slide">
      <img src="Images/Slide_1.jpg" style="width:100%">
    </div>
   <div class="slide">
      <img src="Images/Slide_2.jpg" style="width:100%">
    </div>
    <div class="slide"> 
      <img src="Images/Slide_3.jpg" style="width:100%">
    </div>
</div>
</div>

<center><h2>FILTERS</h2></center>
     <div class="filter">
                <form action="indexcategory.php" method="POST">
             <input type="radio" name="category" value="gaming" class="radio" required><label for="gaming">Gaming</label>
             <input type="radio" name="category" value="mobile" class="radio" required><label for="mobile">Mobile</label>
             <input type="radio" name="category" value="laptop" class="radio" required><label for="mobile">Laptop</label>
             <input type="radio" name="category" value="accessories" class="radio"><label for="mobile">Accessories</label>
             <br>
             <br>
             <input type="Submit" value="Add Filters" class="btn addtocart" style="margin-left:27%;">
             </form>
             </div>
     <ul class="products">
     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
  echo "Connection failed";
}
				$query = "SELECT * FROM productlist ORDER BY id ASC";
				$result = mysqli_query($conn1, $query);
					while($row = mysqli_fetch_array($result))
					{                  
				?>
            <li>
            <form action="description.php" method="POST"> 
            <div class="product">
            <a>
            <img src="images/<?php echo $row["image"]; ?>" alt="product image"/>
            </a>
            <div class="product-name">
            <input type="text" name="productname" id="productname" value="<?php echo $row["name"]; ?>" readonly>
            </div>
            <br>
            <div style="display:flex">
            <img src="images/star.jpg" alt="rating" id="star"><p style="display:inline" id="rate"><?php echo $row["rating"] ?></p>
            </div>
            <div class="product-brand">
             Get it By
            <?php
            $date = date("Y/m/d");
    echo date('l', strtotime($date. ' + 6 days'));
    echo " , ";
    echo date('M', strtotime($date. ' + 6 days'));
    echo " ";
    echo date('d', strtotime($date. ' + 6 days'));
    ?>
            <br> 
            </div>
            <br>
            <div style="font-size:10px;"><b>FREE Delivery By OZONE</b></div>
             <br>
             <?php        echo' <p><a href="description.php?id='. $row['id'] .'" class="btn addtocart">View Product</a></p>';?>
               
          <br>
          </form>
          <label id="offer" style="font-size:13px;"><?php echo $row["offer"]; ?> Offer</label>
            <div class="product-price" name="productprice">
            <del>₹ <?php echo $row["price"]; ?></del>
            ₹ <?php echo $row["final-price"]; ?>
            </div>
            <label for="save" style="font-size:13px;">You Save ₹<?php echo $row["price"]-$row["final-price"]; }?></label>
        </div>        
            </li>
  </ul>
                  <center><button class="btn tops"><a href="#top" style="color:white; font-size:2rem;">Move To Top</a></button></center>
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

</body>
</html>
				
		
