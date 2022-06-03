<?php
  require "_dbconnect.php";
  $product_id = $_GET['order_id'];
  if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['product_id'])){
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $sql = "INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `order_id`) VALUES (NULL, '$name', '$email', '$phone', '$address', '$product_id');";
      $res = mysqli_query($conn,$sql);
      if($res){
        echo "<script>alert('Order placed successfully')</script>";
        setcookie("order_status",true,time()+10);
        header("location: index.php");
      }else{
        echo "<script>alert('Something Went Wrong')</script>";
        header("location: index.php");
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Order Form</title>
    <link rel="stylesheet" href="order.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Order Now</div>
    <div class="title">Free & Fast</div>
    <div class="content">
      <form  method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>

          <div class="input-box">
            <span class="details">Phone</span>
            <input type="number" placeholder="enter your number" minlength="10" name="phone" required>
         </div>
          <div class="input-box">
            <span class="details">Address</span>
            <textarea type="text" name ="address" placeholder="Enter your address" required ></textarea>
          </div>
          <div class="input-box">
            <span class="details">Product ID </span>
            <input type="text" name ="product_id" readonly value="<?php echo $product_id ?>" required ></input>
          </div>
         <div class="input-box">
         <span class="details">Choose a Gift</span>
          <select name="details" id="details">
              <option value="">Gift</option>
	            <option value="Iron">Iron</option>
	            <option value="Bluetooth spekar">Bluetooth spekar</option>
            	<option value="mixer">Mixer</option>
          </select>
          </div>
        </div>
        
        <div class="button">
          <button type="submit" name ="submit" > Order </button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>