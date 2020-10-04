<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<style>
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
* {
  margin: 0px;
  padding: 0px;
}

.container-fluid {
    padding: 10px 50px;
    background-color: rgba(255, 99, 71, 0.9);
  }
.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
    background-color: rgba(255, 99, 71, 0.9);

  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
 background-color: rgba(255, 99, 71, 0.9);
;
  border: none;
  border-radius: 5px;
}
 .navbar {
    margin-bottom: 0;
      background-color: rgba(255, 99, 71, 0.9);

    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    text-decoration: none;

  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
    text-decoration: none;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  .fa{
  font-size: 30px;
  padding: 20px;
  
}
@media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }

  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
</style>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
 
      <a class="navbar-brand"><img src="220px-Dominos_pizza_logo.svg.png" style="width: 50px;height: 50px;margin-top: -20px;"></a>
      <a class="navbar-brand" href="index.php">Home</a>
 
  
</nav><br><br><br>
  <div class="header">
    <h2> Admin</h2>
  </div>
  
  <form method="post" action="admin.php">
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name" size="50" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" size="60">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="submit">Login</button>
    </div>

  </form>
 
</body><br><br><br>
<div id="contact" class="container-fluid bg-grey">

  <div class="row">
    <div class="col-sm-5">
      <p>DOMINOS</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Domino's Pizza India,
Tower-D, Plot No. 5,
5th Floor, Logix Techno Park,
Sector 127, Noida - 201304, U.P.

</p>
      <p><span class="glyphicon glyphicon-phone"></span> 1860-210-0000</p>
     <a href="https://www.facebook.com/dominospizzaindia/" class="fa fa-facebook"></a>
     <a href="https://twitter.com/dominos_india" class="fa fa-twitter"></a>
     <a href="https://www.instagram.com/dominos_india/?hl=en" class="fa fa-instagram"></a>
     <a href="https://www.youtube.com/user/dominosindia" class="fa fa-youtube"></a>
    </div>
  </div>
  <p style="text-align: center;">All Rights Reserved. Copyright © Jubilant FoodWorks Ltd.</p>
</div>
</html>

<?php

// connect to the database
include 'db_connection.php';

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $error=0;
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $password = mysqli_real_escape_string($conn, $_POST['password_1']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if ((empty($name))||(empty($password)))
  {
    $error=1;
    echo "<script>alert(' Please fill the blanks')</script>";
  }

  if(!$error)
  {
    
     $user_check_query = "SELECT * FROM admin WHERE  name='$name' OR password = '$password' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);
           if ($user) { // if user exists
                 

    if (($user['name'] === $name) AND ($user['password'] === $password)) {
    
      echo "<script>alert('Sucessfully logged in');window.location = 'product.php';</script>";
       $_SESSION['name'] = $user['name'];
    }
      if ($user['password'] != $password)
    {
      echo "<script>alert('Wrong password ')</script>";
    }
}
    
    else
    {
      if ($user['name'] != $name)  {
    
      echo "<script>alert('Wrong mail Doesnt exists ')</script>";
    }
  

}
 
    }
  }
  




?>