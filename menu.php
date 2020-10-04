<?php
session_start();
$id = session_id();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}



div.main {

  padding: 1px 16px;
  height: auto;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
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

tr:nth-child(even) {background-color:hsla(9, 100%, 64%, 0.2);}
tr:nth-child(odd) {background-color: #f2f2f2;}
.container-fluid {
    padding: 10px 50px;
    background-color: #f4511e;
    color: white;
  }
  .navbar {
    margin-bottom: 0;
    background-color:#f4511e;
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
</style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
 
      <a class="navbar-brand"><img src="220px-Dominos_pizza_logo.svg.png" style="width: 50px;height: 50px;margin-top: -20px;"></a>
      <a class="navbar-brand" href="index.php">Home</a>
  <a href="logout.php?logout=true" class="logout-link" style="float: right;text-decoration: none;color: white;margin-top: 10px;font-size: 20px">Logout</a>
 <?php echo"<h4>".$_SESSION['email']."</h4>"?>
</nav><br><br><br>

	<table width="500" border="0" cellpadding="5">
<tr>
<th>IMAGE</th>
<th>NAME</th>
<th>PRICE</th>
<th>DETAILS</th>
<th>ACTION</th>

</tr>
<div class="container">
   <?php
   include 'db_connection.php';
  
   if(isset($_SESSION['email'])){ 
  $result = mysqli_query($conn, "SELECT * FROM product");
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<tr><td><img src='image/".$row['image']."' ></td>";
      		echo "<td>".$row['name']."</td>";
      			echo "<td>".$row['price']."</td>";
            echo "<td>".$row['Description']."</td>";
            ?><td align="center">
<button ><a href="purchase.php?id=<?php echo $row["pid"]; ?>">Order</a></button>
</td><td align="center"><?php
          echo "</div>";
    }
  }
  else
  {
      echo "<script>alert('login in to view menu');window.location = 'index.php';</script>";
  

    exit;
  }
  ?>
</div>
</table>
</div> 

</body>
<br><br>
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
