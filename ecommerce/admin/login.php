<?php
include '../_dbconnect.php';

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
   header("location: orderlistpage.php");
   exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

   if ($pass == "admin" && $email == "admin") {
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['sno'] = $row['sno'];
      $_SESSION['username'] = $email;
      header("Location:  /ecommerce/admin/orderlistpage.php");
    }else{
      header("Location: /ecommerce/index.php");
    }
}

   // Close connection
   mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Login</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="authStyles.css">
   <style>
      body {
         font: 14px sans-serif;
      }

      .wrapper {
         width: 360px;
         padding: 20px;
      }
   </style>
</head>

<body>
   <div class="login-wrap">

      <div class="login-html">

         <div class="wrapper">
            <h2 class="tab">Login</h2>
            <p>Please fill in your credentials to login.</p>

            <?php
            if (!empty($login_err)) {
               echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }
            ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="loginEmail" class="form-control" />
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="loginPass" class="form-control"/>
               </div>
               <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Login">
               </div>
            </form>
         </div>
      </div>
   </div>

</body>

</html>