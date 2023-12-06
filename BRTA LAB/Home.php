<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRTA Website</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:rgb(200, 245, 207);">
<nav class="navbar navbar-expand-lg navbar-light bg-success">
 <a class="navbar-brand" href="Home.php"><img src="assets/image/logo.png"width="70" height="70"></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
 </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

 <!-- Indicators -->
 <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
 </ul>
 
<center>
 <!-- The slideshow -->
 <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/image/BRTA.jpg" alt="BRTA" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="assets/image/traffic.jpg" alt="Traffic" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="assets/image/banner.jpg" alt="PM banner" width="1100" height="500">
    </div>
 </div>
</center>
 <!-- Left and right controls -->
 <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
 </a>
 <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
 </a>
</div>
<div class="cards-container">
  <div class="card">
    <img src="assets/image/logo2.jpg" alt="Card 1">
    <h3>বিআরটিএ সার্ভিস পোর্টাল</h3>
    <p><ul>
    <li><a href="https://bsp.brta.gov.bd/login">বিএসপি’র লগইন লিংক</a></li>
    <li><a href="https://rb.gy/yqcqpe">বিএসপি’তে নিবন্ধনের টিউটোরিয়াল</a></li>
    <li><a href="https://rb.gy/mo2i7p">ফিটনেসের এ্যাপয়েন্টমেন্ট গ্রহণের টিউটোরিয়াল</a></il>
    <li><a href="https://rb.gy/zzptqq">বিভিন্ন ফি জানার টিউটোরিয়াল</a></li>
    </ul></p>
  </div>

  <div class="card">
    <img src="assets/image/license.jpg" alt="Card 2">
    <h3>ড্রাইভিং লাইসেন্স</h3>
    <p><ul>
      <li><a href="https://rb.gy/uspubn">ড্রাইভিং লাইসেন্সের আবেদন প্রক্রিয়া</a></li>
      <li><a href="https://shorturl.at/yLSX5">ড্রাইভিং লাইসেন্স নবায়ন</a></li>
      <li><a href="https://shorturl.at/esA25">ড্রাইভিং কম্পিটেন্সি টেস্ট বোর্ডের ফলাফল</a></il>
      <li><a href="https://shorturl.at/irDH7">ড্রাইভিং পরীক্ষার নমুনা প্রশ্নোত্তর</a></li>
      </ul></p>
  </div>

  <div class="card">
    <img src="assets/image/car2.jpg" alt="Card 3">
    <h3>মোটরযান নিবন্ধন সংক্রান্ত</h3>
    <p><ul>
      <li><a href="https://shorturl.at/bj127">নতুন মোটরযান নিবন্ধন</a></li>
      <li><a href="https://rb.gy/cb1tl8">মোটরযান নিবন্ধনের আবেদন ফরম</a></li>
      <li><a href="https://rb.gy/eaqeyb">রিকন্ডিশন মোটরযানের নিবন্ধন</a></il>
      <li><a href="https://rb.gy/2c8jh0">নিলামে ক্রয়কৃত মোটরযানের নিবন্ধন</a></li>
      </ul></p>
  </div>
</div>
<footer class="bg-dark text-white mt-4"> 
  <div class="contain">
   <div class="row">
   <div class="col-md-4">
   <h3>Contact</h3> <p>Phone: 123456789</p>
   </div> <div class="col-md-4">
   <h3>Links</h3> <p><a href="#">Home</a></p>
   <p><a href="#">Features</a></p> <p><a href="#">Pricing</a></p>
   <p><a href="https://www.facebook.com/brta.bd/">Facebook</a></p> 
  </div> <div class="col-md-4">
    <h3>Email Subscription</h3> 
    <p>
      <input type="email" id="subscription_email"><br>
      <input class="btn" id="subscription_submit_btn" type="submit" style="width: 20%;">
      <span id="err"></span>
 </p> 
   </div>
   </div>
   </footer>
   </body>
   </html>




                  