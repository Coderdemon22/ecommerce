<?php 
   require "_dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jagdamba Electronics</title>

    <script>
        function goToOrder(id){
           window.localStorage.setItem("order_id",id);
        }
    </script>
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>


<!-- // < font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- custom css file link -->
   <link rel="stylesheet" href="style.css">
</head>
<body>


    <!-- header section starts -->
    <header>
        <a href="#" class="logo"><i class=""></i>Jagdamba-Electronics</a>
        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#Fridges">Fridges</a>
            <a href="#Washing-Machines">Washing-Machines</a>
            <a href="#Smart-televisions">Smart-televisions</a>
            <a href="#About-Us">About-Us</a>
            <a href="admin/login.php">Admin Login</a>
           
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
        </div>
    </header>

    <!-- header section ends -->
 
    <!-- search form --> -->
    <form action="" id="search-form">
        <input type="search" placeholder="Search here......" name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <section class="home" id="home">
        <div class="swiper home-slider">

            <div class="swiper-wrapper wrapeer">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our special </span>
                        <h3>Samsung</h3>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita sapiente commodi pariatur!</p> -->
                        
                    </div>
                    <div class="image">
                    <img src="common1.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our special</span>
                        <h3>Haier</h3>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita sapiente commodi pariatur!</p> -->
        
                    </div>
                    <div class="image">
                        <img src="common2.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our special</span>
                        <h3>LG</h3>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita sapiente commodi pariatur!</p> -->
                       
                    </div>
                    <div class="image">
                    <img src="common3.jpg" alt="">
                    </div>
                </div>

    <!-- home secction starts -->
      
            </div>

            <div class="swiper-pagination"></div>
        </div>

    </section>


  <!-- home section ends -->
  <?php 
            if(isset($_COOKIE['order_status']) && $_COOKIE['order_status']){

                echo '<div style="z-index:20" class="success alert-success alert-dismissible fade show" role="alert" id="alert">
                <strong>Odered placed successfully!</strong> Thank You. Please visit again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>
  <!-- fridges section starts -->

  <section class="dishes" id="Fridges">

    <h3 class="sub-heading">Fridges</h3>
    <h1 class="heading">Best products</h1>

    <div class="box-container">

       
            
            <?php 
            $sql = "SELECT * FROM `fridges`;";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
                echo '
                <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <img src='.$row['img'].' alt=""> 
                <h3>'.$row['name'].'</h3>
                <p>'.$row['description'].'</p>
                <div class="stars">
                
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
                <span> Rs '.$row['price'].'</span>
                
                <a href="/ecommerce/order.php?order_id='.$row['product_id'].'">


                <button  class="btn">Order now</button>
                </a>
                </div>';
            }
            
                ?>
    </div>
</section>
  <!-- fridges section ends -->

<!-- Washing-Machines section stats -->

 <section class="dishes" id="Washing-Machines">
  <h3 class="sub-heading">Washing-Machines</h3>
  <h3 class="sub-heading">Fully-Automatic</h3>
    <h1 class="heading">Best products</h1>

    <div class="box-container">
        <?php
         $sql='SELECT * FROM washingmachines';
         $result=mysqli_query($conn,$sql);
         while($row=mysqli_fetch_assoc($result)){
             echo '<div class="box">
             <a href="#" class="fas fa-heart"></a>
             <img src='.$row['img'].' alt="">
             <h3>'.$row['name'].'</h3>
             <p>'.$row['description'].'</p>
             <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
             </div>
             <span> RS '.$row['price'].'</span>
             <a href="/ecommerce/order.php?order_id='.$row['product_id'].'">
             <button  class="btn">
             Order now
             </button>
             </a>
         </div>';
         }
         ?>
        
</section>

    <!-- washing machine section ends -->

<!-- Television section starts -->

<section class="menu" id="Smart-televisions">

<h3 class="sub-heading">Smart Televisions</h3>
<h1 class="heading">Book your order now to get instant offers</h1>

<div class="box-container">

        <?php 
        $sql = "SELECT * FROM `televisions`;";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            echo '<div class="box"> <img class="icon-img" src='.$row['img'].' alt="">

        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>'.$row['name'].'</h3>
            <P>'.$row['description'].'</P>
            <span class="price"> Rs'.$row['price'].'</span>
            <a href="/ecommerce/order.php?order_id='.$row['product_id'].'">
            <button  class="btn">
            Order now
            </button>
            </a>
        </div> 
        </div>';
           
        }?>
</div>
</section>



  <!-- about sections starts -->

  <section class="about" id="About-Us">
      
    <h3 class="sub-heading"> about us</h3>
    <h1 class="heading">why choose us?</h1>

    <div class="row">

        <div class="image">
            <img src="machine.jpg" alt="">
        </div>

        <div class="content">
            <h3>Best service ever seen </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim doloremque ratione modi eum ullam assumenda itaque dolorem cumque veniam molestias et ea eligendi voluptates, deleniti blanditiis, dignissimos, optio ipsa voluptas.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam illo impedit autem facere ducimus, quam tempora cupiditate vitae fuga quae?</p>
            <div class="icon-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>delivery available </span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
        </div>
    </div>
  </section> -->
   <!-- about sections ends -->



<!-- 
     footer section starts -->

     <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>location</h3>
                <a href="#">india / Dombivali</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#Fridges">Fridges</a>
                <a href="#Washing-Machines">Washing-Machines</a>
                <a href="#Smart-televisions">Smart-televisions</a>
                <a href="#About-Us">about-us</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+123-456-7890">+123-456-7890</a>
                <a href="#">+111-222-3333</a>
                <a href="#">kakadeprathmesh7@gmail.com</a>
                <a href="#">Dombivli maharashtra (421201)</a> 
            </div>

            <div class="box">
                <h3>follow us on</h3>
                <a href="#">facebook</a>
                
                <a href="https://instagram.com/mr.prathamesh.16_?utm_medium=copy_link" class="fab fa-instagram"> instagram</a>
                
            
            </div>     

        </div>

        <div class="credit">&copy;copyright 2022 by <span>  The Web Developer</span> | All rights Reserved!</div>
    </section>
     <!-- footer section ends --> -->

     <!-- loader part -->

   
      <!-- loader part -->


    































     <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>  

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>