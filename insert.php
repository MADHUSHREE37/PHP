<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Online Pizza Delivery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <body>
  <?php
include 'db_connection.php';
 $name = mysqli_real_escape_string($conn, $_POST['name']);
 $email_address = mysqli_real_escape_string($conn, $_POST['email']);
 $comment = mysqli_real_escape_string($conn,$_POST['comments']);

    // attempt insert query execution
    $query = "INSERT INTO contact_form (name, email,comment) VALUES ('$name', '$email_address','$comment')";
    $result=mysqli_query($conn,$query);
    if($result){
        
        
       ?> <form class="modal-content" ><div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center" style="color: #f4511e;">Thanks for Feedback!!</h2> <button class="btn btn-default pull-right" style=" background-color: #f4511e;"><a href="index.php" style="text-decoration: none;color: white;">OK</a></button>
        </div>
            </div>
            </form><?php
    } 
    else{
        die("ERROR: Could not able to execute $query. " . mysqli_error($conn));
    }

    // close connection
    mysqli_close($conn);
?>
</body>
<style type="text/css">
 .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
background-color:rgb(240, 240, 240,0.9);
  margin: 15% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}   
 .container-fluid {
    padding: 60px 50px;
    text-align: center;

  }
body{
      background-image: url(kk.jpg);
      
    background-size: cover;

   background-repeat: no-repeat;
}
</style>