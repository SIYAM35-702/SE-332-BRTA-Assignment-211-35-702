<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/regi.css">
</head>
<body style="background-color:rgb(200, 245, 207);">

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
<div style="padding: 20px;" style="background-color:rgb(200, 245, 207);">
<div class="container">
    <h2>Registration Form</h2>
    <form name="myForm" action="register.php" method="post" enctype="multipart/form-data">
        <b>Name: <input type="text" name="name"required> <br>
        Email: <input type="text" name="email"required> <br>
        ID: <input type="text" name="id_number"required> <br>
        Vehicle no: <input type="text" name="vehicle_no"required> <br>
        Chess no: <input type="text" name="chess_no"required> <br>
        Passport size photo: <input type="file" name="photo" required><br>
        NID photo: <input type="file" name="nid" required><br>
        Present address: <input type="text" name="present_address"required> <br>
        Permanent address: <input type="text" name="permanent_address"required></b> <br>
        <input type="submit" value="Submit">
    </form>
</div></div>
<script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value; if (x == "") { alert("Name must be filled out"); return false; }
    var y = document.forms["myForm"]["email"].value; var x = e.target.value; var atpos = x.indexOf("@"); var dotpos = x.lastIndexOf("."); if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {e.target.setCustomValidity('Not a valid e-mail Address');
    } else {
        e.target.setCustomValidity('');}
    var z = document.forms["myForm"]["id_number"].value; if (x == "") { alert("ID must be filled out"); return false; }
    var a = document.forms["myForm"]["vehicle_no"].value; { alert("Vehicle no must be filled out"); return false; }
    var b = document.forms["myForm"]["chess_no"].value; if (x == "") { alert("Chess no must be filled out"); return false; }
    var c = document.forms["myForm"]["photo"].value; if (x == "") { alert("Photo must be filled out"); return false; }
    var d = document.forms["myForm"]["nid"].value; if (x == "") { alert("NID must be filled out"); return false; }
    var e = document.forms["myForm"]["present_address"].value; if (x == "") { alert("Present address must be filled out"); return false; }
    var f = document.forms["myForm"]["permanent_address"].value; if (x == "") { alert("Permanent address must be filled out"); return false; }

    if (x == "" || y == "" || z == "" || a == "" || b == "" || c == ""  || d == ""  || e == ""  || f == "") {
        alert("Please fill out all fields.");
        return false;
    }
}
</script>
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
   </div>
   </div>
   </footer>
</body>
</html>