
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-blue">
     <a class="navbar-brand" href="Home.php"><img src="assets/image/logo.png"width="70" height="70"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
       <span class="navbar-toggler-icon"></span>
     </button>
    
     <!-- Navbar links -->
     <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link navbar-brand text-white" href="Home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand text-white" href="registration.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand text-white" href="login.php">Login</a>
          </li>
        </ul>
     </div>
    </nav>
    <br>
    <br>
    <br><br>
    <div class="admin-list"> 
        <div class="admin-card">
            <img src="admin1.jpeg" alt="Admin Name">
            <span>Admin Name</span>
        </div>
    </div>
    <div class="add-remove-btn">
        <button onclick="addAdmin(add_admin.php)">Add Admin</button>
        <button onclick="removeAdmin()">Remove Admin</button>
    </div>

    <div class="form-container" id="addAdminForm">
        <h2>Add Admin</h2>
        <input type="text" id="adminName" placeholder="Admin Name">
        <input type="text" id="adminEmail" placeholder="Admin Email">
        <button onclick="submitAddAdminForm()">Submit</button>
    </div>

    <script>
        function addAdmin() {
            document.getElementById('addAdminForm').style.display = 'block';
        }

        function removeAdmin() {
            // Your code to remove admin
        }

        function submitAddAdminForm() {
            var adminName = document.getElementById('adminName').value;
            var adminEmail = document.getElementById('adminEmail').value;

            // Your code to submit the form and add a new admin
        }
    </script>
</body>
</html>