<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin{
            display: flex;
            justify-content: end;
            width: 100%;
        }
        table{
            margin-top: 10rem !important;
        }
    </style>
    <title>Admin : all Orders</title>
</head>
<body>
<header>
        <a href="#" class="logo"><i class=""></i>Jagdamba-Electronics</a>
        <nav class="navbar admin" >
            <a class="active" href="../index.php ">home</a>
            <a href="logout.php">Logout</a>
           
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
        </div>
    </header>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Order Id</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        require_once "../_dbconnect.php";
            $sql = "Select * from orders ";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)){
            echo '<tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['address'].'</td>
                <td>'.$row['order_id'].'</td>
            </tr>';
        }
        ?>
    </tbody>
  </table>
</body>
</html>