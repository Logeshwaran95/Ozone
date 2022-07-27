<?php
 session_start();
 include "config.php";?>
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

    .content{
        margin-top:3%;
        display:flex;
        justify-content:space-around;
        align-items:center;
    }
    #imgs{
        width:50%;
        height:50%;
    }
    .selections{
        display:flex;
        align-items:center;
        justify-content:space-around;
    }
    select,label{
        font-size:20px;
        font-weight:700;
    }
    footer{
        margin-bottom:0;
    }
    #in{
        width:44px;
        margin-left:16px;
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
           if(isset($_POST["addcart"])){
            if(isset($_SESSION["cart"]))
            {
                $pid_array=array_column($_SESSION["cart"],"pid");
                if(!in_array($_GET["id"],$pid_array))
                {
                    $index=count($_SESSION["cart"]);
                    $item=array(
                        'pid' => $_GET["id"],
                        'pname' => $_POST["productname"],
                        'price' => $_POST["price"],
                        'qty' => $_POST["productquantity"]
                    );
                    $_SESSION["cart"][$index]=$item;
                        echo "<script>alert('Product Added..');</script>";
                   
                }
                else
                {
                    echo "<script>alert('Already Added..');</script>";
                }
            }
            else
            {
                    $item=array(
                        'pid' => $_GET["id"],
                        'pname' => $_POST["productname"],
                        'price' => $_POST["price"],
                        'qty' => $_POST["productquantity"]
                    );
                    $_SESSION["cart"][0]=$item;
                    echo "<script>alert('Product Added..');</script>";
                   
            }
        }
      //$name = $_GET["name"];
      $id = $_GET["id"];
      $db="products";
      $conn = mysqli_connect($servername, $username, $password, $db); 
      $result = mysqli_query($conn,"SELECT * FROM productlist WHERE id='$id'");
      if (mysqli_num_rows($result)>0)
      {echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
      while($row = mysqli_fetch_assoc($result)) {
        
      ?>
      <br><br>
  <center><input type="text" name="productname" id="productname" style="font-size:30px;" value="<?php echo $row["name"]; ?>" readonly></center>
  <div class="content">
     <img src = images/<?php echo $row["image"]?> id="imgs">
     <div class="text" style="font-weight:700">
     <h3><?php echo $row["title"]; ?></h3>
     <div style="display:flex">
            <img src="images/star.jpg" alt="rating" id="star"><p style="display:inline" id="rate"><?php echo $row["rating"] ?>&nbsp;&nbsp;<?php echo $row["global"] ?>&nbsp;<strong>Global Ratings</strong></p>
            <br> 
            </div>
            <h3>Availability : In Stock</h3>
            <br>
     <?php  
           echo $row["description"];
  
     ?>
     <br>
     <br>
     <br>
       <div>
            <label id="offer" style="font-size:18px;"><?php echo $row["offer"]; ?> Offer</label>
            <br>
            <br>
            <div class="product-price" name="productprice">
            <del>₹ <?php echo $row["price"]; ?></del>
            ₹ <?php echo $row["final-price"]; ?>
            </div>
            <input type="hidden" name="price" value="<?php echo $row['final-price'];?>">
            <br>
            <label for="save" style="font-size:16px;">You Save ₹<?php echo $row["price"]-$row["final-price"]; }?></label>
            <br>
            <label>Inclusive of all Taxes</label>
            <br>
            <label>FREE Delivery : </label>
            <label>
            Get it By
            <?php
            $date = date("Y/m/d");
    echo date('l', strtotime($date. ' + 6 days'));
    echo " , ";
    echo date('M', strtotime($date. ' + 6 days'));
    echo " ";
    echo date('d', strtotime($date. ' + 6 days'));
    echo "<br>";
    $target = mktime(0, 0, 0, 7, 17, 2021) ; 
    $today = time () ;
    $difference =($target-$today) ; 
    $days =(int) ($difference/86400) ; 
    echo "Offer will end in $days day(s)";  }
    ?>
            </label>
            </div>
     </div>
     
     </div>
     <div class="selections">
     <div>
     <label for="quantity">Quantity</label>
     <br>
     <br>
   <input type="button" value="-" onclick="decrement()" class="bt">
     <input type="number" name="productquantity" value=1 id="in" readonly>
     <input type="button" value="+" onclick="increment()" class="bt">     
            </div>
            <div>
            <label for="available-Colors">Available Colors</label>
            <select name="availablecolors">
            <option value="black">Black</option>
            <option value="White">White</option>
            <option value="Gray">Gray</option>
            </select>
            </div>
            </div> 
          
            <center> <input type="submit" formaction="buynow.php" class="btn addtocart" value="Buy Now"></center>
            <center> <input type="submit"  name="addcart" class="btn addtocart" value="Add to Cart"></center>    
        </form>
            <br>
       <center> <button class="back home" onclick="window.location.href='index.php'">Back to Homepage</button></center>
     <br>
     <br>
     <h3>Save Extra With Offers</h3>
     <ol>
     <li>Exchange Offer: Enter your pincode to view Exchange offer</li>
     <li>Get upto 50% off on Avishkaar kits/Courses on your Laptop or Tablet purchase on Ozone.in </li>
     <li>Get GST invoice and save up to 28% on business purchases</li>
     </ol>
     <h2>Have a Question?</h2>
     <form>
     <textarea name="quest" id="quest" cols="30" rows="10"></textarea>
     <br>
     <input type="reset" id="post" value="post" onclick="alert('Your Question Posted Successfully')">
     </form>
     <h2>Review This Product</h2>
     <button id="review" onclick="window.location.href='review.php'">Add Review</button>
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
    <script>
        var count=1;
    function increment(){
        var val = document.getElementById("in").value;
        if(val==10){
            document.getElementById("in").value= 10;
        }
        else{
        document.getElementById("in").value= parseInt(val)+count;
        }
    }
    function decrement(){
        var val = document.getElementById("in").value;
        if(val==1){
            document.getElementById("in").value= 1;
        }
        else{
        document.getElementById("in").value= parseInt(val)-count;
        }
    }
    </script>
</body>
</html>
