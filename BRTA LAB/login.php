<?php
include_once "db_connection.php";
session_start();

if (isset($_SESSION["email"])) {
    header("Location: ./applicants.php");
    exit();
}

if (isset($_POST["login_btn"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `login` WHERE `email` = '$email' ; ";
    $result = mysqli_query($conn, $sql);

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row["password"])) {
            $_SESSION["email"] = $email;
            header("Location: ./admins.php");
            exit();
        } else {
            session_destroy();
            header("Location: ./login.php?err_msg=Email or Password Invalid");
            exit();
        }
    } else {
        session_destroy();
        header("Location: ./login.php?err_msg=Email or Password Invalid");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body style="background-color:rgb(200, 245, 207);">
    <div class="page-content">
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="Home.php"><img src="assets/image/logo.png"width="70" height="70"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
           <ul class="navbar-nav">
             <li class="nav-item">
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
       <br>
       <br>
       <br>
       
    <div class="login-container">
        <h1>Login</h1>
        <form action="admins.php" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
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