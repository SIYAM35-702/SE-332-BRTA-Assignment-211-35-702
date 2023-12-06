<?php
// Connect to the database
// Include necessary PHP files for the database connection
include 'db_connection.php';

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    // Insert the new admin into the database
    $sql = "INSERT INTO admins (admin_name, admin_email, admin_password) VALUES ('$admin_name', '$admin_email', '$admin_password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the admin list page
        header('Location: admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Add the form for adding a new admin -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Add Admin</h2>
        <input type="text" name="admin_name" placeholder="Admin Name">
        <input type="text" name="admin_email" placeholder="Admin Email">
        <input type="password" name="admin_password" placeholder="Admin Password">
        <button type="submit">Submit</button>
    </form>

</body>
</html>