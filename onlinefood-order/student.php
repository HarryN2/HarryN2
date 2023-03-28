<?php

// @include 'constants.php';
//Start Session
session_start();


//Create Constants to Store Non Repeating Values
define('SITEURL', 'http://localhost/onlinefood-order/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'onlinefoodorder');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database


 if(isset($_POST['submit'])){

//    $name = mysqli_real_escape_string($conn, $_POST['name']);
//     $address = mysqli_real_escape_string($conn, $_POST['address']);
//     $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
//    $cpass = md5($_POST['cpassword']);
  // $user_type = $_POST['user_type'];

   $select = " SELECT * FROM register WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

     // if($row['user_type'] == 'admin'){

       //  $_SESSION['admin_name'] = $row['name'];
        // header('location:admin_page.php');

    //  }else
    // if($row['email'] == '$email'){

    //      $_SESSION['user_name'] = $row['name'];
    //      header('location:user_page.php');

    //   }
    //look here for student dashobard
    if ($row['email'] === $email && $row['password'] === $pass) {
                header('location:dashboard.php');


    }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styl.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>