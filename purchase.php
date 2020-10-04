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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" />
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
  width: 70%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}

input {
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
  color: white;
  
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
  table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  font-size: 20px;
}

</style>
<body>

      <nav class="navbar navbar-default navbar-fixed-top">
 
      <a class="navbar-brand"><img src="220px-Dominos_pizza_logo.svg.png" style="width: 50px;height: 50px;margin-top: -20px;"></a>
      <a class="navbar-brand" href="index.php">Home</a>
         <a href="logout.php?logout=true" class="logout-link "  style="float: right;text-decoration: none; color: white;margin-top: 10px;font-size: 20px">Logout</a>
 <?php echo"<h4 >".$_SESSION['email']."</h4>"?>

  
</nav><br><br><br>
<h3 style="text-align: center;">Order successfully received</h3><br><br><br>
 <table width="500" border="0" cellpadding="5">
<tr>
<th>IMAGE</th>
<th>NAME</th>
<th>PRICE</th>
<th>ACTION</th>

</tr>
<?php

   include 'db_connection.php'; 
$id=$_REQUEST['id'];


if(!empty($_SESSION['email']))
{
  

  $result = mysqli_query($conn, "SELECT * FROM product WHERE pid='".$id."'");

    while ($row = mysqli_fetch_array($result)) {
   $image = $row['image'];
   $name =  $row['name'];
   $price = $row['price'];

  
    	$sql = "INSERT into orders (image,name,price) VALUES('$image','$name','$price')";
     
    	mysqli_query($conn,$sql) or die (mysqli_error($conn));
     
      echo "<div id='img_div'>";
      	echo "<tr><td><img src='image/".$row['image']."' ></td>";
      		echo "<td>".$row['name']."</td>";
      			echo "<td>".$row['price']."</td>";
          
            ?><td align="center">
<a href="menu.php">Order more</a>
</td><?php
          echo "</div>";
         
    }
}
  ?>
</table>
