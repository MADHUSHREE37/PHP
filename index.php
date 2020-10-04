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
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-image: url(kk.jpg);
    background-size: cover;
   background-position: center;
   background-repeat: no-repeat;
    
    color: #fff;
    padding: 280px 55px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .item img
  {

    width: 600px;
    height: 300px;
  }
 .carousel-inner img {
  margin: auto;
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
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
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
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
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
  .fa{
  font-size: 30px;
  padding: 20px;
  color: #f4511e;
}
a .hover{
  text-decoration: none;
}
  </style>
}
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="220px-Dominos_pizza_logo.svg.png" style="width: 50px;height: 50px; margin-top: -20px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#about">ABOUT</a></li>
        
        <li><a href="#portfolio">MENU</a></li>
       
         <li><a href="#vision">VISION</a></li>
           <li><a href="#service">SERVICE</a></li>
        <li><a href="#contact">CONTACT</a></li>
      
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="register.php">REGISTER</a></li>
        <li><a href = 'admin.php'>ADMIN</a></li>

      </ul>
    </div>
  </div>
</nav>
<br>
<div class="jumbotron text-center">
 </div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Dominos</h2><br>
    
      <p>Jubilant FoodWorks Limited (the Company) is a Jubilant Bhartia Group Company. The Company was incorporated in 1995 and initiated operations in 1996. The Company got listed on the Indian bourses in February 2010. Mr. Shyam S. Bhartia, Mr. Hari S. Bhartia and Jubilant Consumer Pvt. Ltd. (formerly Jubilant Fresh Pvt. Ltd.) are the Promoters of the Company. The Company & its subsidiary operates Domino's Pizza brand with the exclusive rights for India, Nepal, Bangladesh and Sri Lanka. The Company is market leader in the pizza segment with a network of 1,249 Domino’s Pizza restaurants across 276 cities in India (as on June 30, 2019).The Company is the market leader in the organized pizza market in the pizza home delivery segment in India, The Company has strengthened its portfolio by entering into an agreement with Dunkin' Donuts Franchising LLC, for developing the Dunkin' Donuts brand and operating restaurants in India,Over the period since 1996, Domino's Pizza India has remained focused on delivering great tasting Pizzas and sides, superior quality, exceptional guest care and value for money offerings. We have endeavored to establish a reputation for being a home delivery specialist capable of delivering pizzas within 30 minutes or else FREE to a community of loyal consumers from all our restaurants around the country.Domino's vision is focused on " Exceptional people on a mission to be the best pizza delivery company in the world!" We are committed to bringing fun, happiness and convenience to lives of our consumers by delivering delicious pizzas to their doorstep and our efforts are aimed at fulfilling this commitment towards a large and ever-growing guest base.Domino's constantly strives to develop products that suit the tastes of our consumers and hence delighting them. Domino's believes strongly in the strategy of 'Think global and act local'. Thus, time and again we have been innovating with delicious new products such as crusts, toppings and flavours suitable to the taste buds of Indian Consumers. Further providing value for money and affordable products to our consumers has been an important part of our efforts. Our initiatives such as Fun Meal and Pizza Mania have been extremely popular with consumers looking for an affordable and value for money meal option.Domino's believes that when a box of pizza is opened, family and friends come together to share the pizza. Hence, our brand positioning: ‘Yeh Hai Rishton Ka Time'That's why, all our efforts, whether it is a new innovative and delicious product, offering consumers value for money deals, great service, countrywide presence or the promise to deliver in 30 minutes or free are all directed towards making relationships stronger, warmer and more fun by giving consumers an opportunity to get together, catch up, reunite and spend more time together.Consumers can order their pizzas by calling the single Happiness Hotline number 18602100000 OR order online at Pizza Online.</p>
      
    </div>
    <div class="col-sm-4">
      <img src="hh.jpg" style="width: 100%">
    </div>
  </div>
</div>





<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Menu</h2>
<a href="menu.php" class="btn btn-info" role="button" style="float: right;background-color: tomato;">View all</a><br><br><br>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="Peppy_Paneer.jpg" width="400" height="300">
        <h2><strong>Peppy Paneer</strong></h2>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="Paneer_Makhni.jpg"  width="400" height="300">
        <h2><strong>Paneer Makhni</strong></h2>
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="Mexican_Green_Wave.jpg"  width="400" height="300">
        <h2><strong>Mexican Green Wave</strong></h2>
        
      </div>
    </div>
  </div><br>

  
  <div id="vision" class="container-fluid text-center ">
    <h2>VISION</h2><p>DOMINOS INDIA VISION
  
EXCEPTIONAL PEOPLE ON A MISSION,TO BE THE BEST PIZZA DELIVERY COMPANY IN THE WORLD</p>

  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="c.jpg">
        
      </div>
      <div class="item">
        <img src="g.jpg">
       
      </div>
      
       <div class="item">
         <img src="k.jpg">
   
      </div>
       <div class="item">
         <img src="j.jpg">
   
      </div>
       <div class="item">
         <img src="b.jpg">
   
      </div>
      <div class="item">
         <img src="i.jpg">
   
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
  <div id="service" class="container-fluid text-center bg-grey">
      <h2>Services</h2>
<div class="row">
    <div class="col-sm-4">
        <div class="thumbnail">
          <img src="a.jpg">
      <h4>"Domino's Pizza: Delivering Happiness"</h4><br>
     
         <p style="text-align: justify;padding: 20px;">What’s better than having a crispy melty pizza, you ask?

Having that crispy and melty pizza in the comfort of your own home with the ones you love, we say.

With Domino's it is always “Rishton ka time”. Whether it's a treat for your promotion, a kid topping his class or winning the heart of your wife who is too tired to cook after a long day at work! A cheesy slice of the best pizza is all one needs to put things into perspective and start any celebration. Plus, you do not even need to rush to the restaurant to have one now. A call, a few clicks on our website or a few touches on the mobile screen is all you have to do to have that tempting, light-on-the-pocket pizza at your doorstep.

There is something for everyone here. The vegetarians, non-vegetarians, the sides’ lovers and also the ones who love to have something sweet by the time they reach the last bite of the last slice of pizza slice.</p></div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="m.jpg">
          <h4>"What We Need - More Choice. More Fun"</h4><br><p style="text-align: justify;padding: 20px;">No matter what the situation, pizza always helps. Especially a pizza that gives you the freedom to choose your toppings - from paneer, crisp capsicum, onion, grilled mushroom, golden corn, black olives, fresh tomato, red paprika, jalapeno, paneer tikka and extra cheese to non-veg toppings such as pepper barbeque chicken, peri-peri chicken, grilled chicken rasher, chicken sausage or chicken tikka- the options are almost endless, anything and everything you can think of that too on top of the crust of your choice - New hand-tossed crust, wheat thin crust, cheese burst crust, classic hand-tossed crust or a fresh pan pizza. Because just like a pizza, Domino's understands you.

And to shoo away those end-of-the-month blues while placing your order with our pizza restaurant, check out the everyday pizzas from pizza mania combos with everyday value offer of 2 pizzas starting at just ₹99 (regular size) and ₹199 (medium size) each.</p>
    </div>
  </div>
    <div class="col-sm-4">
        <div class="thumbnail">
          <img src="d.jpg">
           <h4>"The Promise Of 30-Minute Delivery"</h4><br><p style="text-align: justify;padding: 20px;">The icing on the cake or more aptly the extra cheese on your already fabulous pizza is that Domino’s takes only half an hour for its pizza delivery service. Don’t believe us? Time it if you please. With 1250+ stores present all over India, you can have a Domino’s pizza even while traveling on a train. Yes, you are reading it right, you can enjoy pizza on train too.So stop googling for the “pizza shops near me” and order from your nearest pizza outlet to have a hot box of pizza on your table in the next 30 minutes, or berth at the next halting station.However, food delivery riders and drivers usually do not receive any insurance coverage, protective gear, or sick pay as independent contractors, which have led to some asking for improved safety standards. In response, Deliveroo gave riders a helmet with a GoPro camera to record any problems they may face, specifically with criminals. The riders have the opportunity to raise safety concerns about delivery areas in the app</p>
  </div></div>

<div id="contact" class="container-fluid">
</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
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
    <div class="col-sm-7 slideanim">
      <form action="insert.php" method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" name="submit" type="submit">Send</button>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<p>All Rights Reserved. Copyright © Jubilant FoodWorks Ltd.</p>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

