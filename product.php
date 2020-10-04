<?php
  // Create database connection
include "db_connection.php";

session_start();

  // Initialize message variable
  $msg = "";
   $error=0;
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	$allowed = array('gif', 'png', 'jpg');
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
  	// image file directory
  	$target = "image/".basename($image);
  	$ext = pathinfo($image, PATHINFO_EXTENSION);
  	 if ((empty($image))||(empty($name))||(empty($price))||(empty($image_text)))
  {
    $error=1;
    echo "<script>alert(' Please fill the blanks')</script>";
  }
  if(!$error)
  {
  	if (!in_array($ext, $allowed)) {
    echo "<script>alert('upload only gif or jpg or png format file')</script>";
}
else{
    if (is_numeric($price)) {


  	$sql = "INSERT INTO product (image,name,price,Description) VALUES ('$image','$name','$price', '$image_text')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		echo '<script>alert("Image uploaded successfully")</script>';
  	}else{
  		echo '<script>alert("Failed to upload image")</script>';
  	}
  }
  else {
 	echo '<script>alert("Error: You did not enter numbers only. Please enter only numbers.")</script>';
}
}
}
}  
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

.sidebar {
  margin: 0;
  padding: 0;
  width: 25%;

  position: fixed;
  height: auto;
  overflow: auto;
}

.sidebar input {
   height: 30px;
  width: 70%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  margin-left: 30px;

}
textarea{
	  height: 50px;
  width: 73%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  margin-left: 30px;
}
 .btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #f4511e;
  border: none;
  border-radius: 5px;
  margin-left: 30px;
}


div.main {
  margin-left: 340px;
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
    background-color: #f4511e;
    color: white;
  }
.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
   background-color:#f4511e;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
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

</style>
</head>
<body>
	  <nav class="navbar navbar-default navbar-fixed-top">
 
      <a class="navbar-brand"><img src="220px-Dominos_pizza_logo.svg.png" style="width: 50px;height: 50px;margin-top: -20px;"></a>
      <a class="navbar-brand" href="index.php">Home</a>
   <a href="logout.php?logout=true" class="logout-link "  style="float: right;text-decoration: none;color: white;margin-top: 10px;font-size: 20px">Logout</a>
  
</nav><br><br><br>
<div class="sidebar">
  <form method="POST" action="product.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000" required><br>
  	<div>
  	  <input type="file" name="image" >
  	</div><br>
  		<div>
  	  <input type="text" name="name" placeholder="Enter product name here">
  	</div><br>

	<div>
  	  <input type="text" name="price" placeholder="Enter product price here">
  	</div><br>

  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this product..."></textarea>
  	</div><br>
  	<div>
  		<button type="submit" name="upload" class="btn">POST</button>
  	</div>
  </form>
</div>

<div class="main">
	<table width="500" border="0" cellpadding="5">
<tr>
<th>IMAGE</th>
<th>NAME</th>
<th>PRICE</th>
<th>DETAILS</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>
   <?php
     if(isset($_SESSION['name'])){ 
  $result = mysqli_query($conn, "SELECT * FROM product");
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<tr><td><img src='image/".$row['image']."' ></td>";
      		echo "<td>".$row['name']."</td>";
      			echo "<td>".$row['price']."</td>";
      	echo "<td>".$row['Description']."</td>";
      	?><td align="center">
<a href="edit.php?id=<?php echo $row["pid"]; ?>">Edit</a>
</td><td align="center">
<a href="delete.php?id=<?php echo $row["pid"]; ?>">Delete</a>
</td><?php
      echo "</div>";
    }
}
 else
  {
      echo "<script>alert('sucessfully logged out');window.location = 'index.php';</script>";
  

    exit;
  }
  ?>
</table>
</div>  
</body>
<br><br><br>

</html> 

