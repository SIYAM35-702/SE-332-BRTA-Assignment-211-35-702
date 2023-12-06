<?php
include_once "external/connection.php";
session_start();

if (!isset($_SESSION["email"])) {
?>
    <script>
        window.location.href = "external/logout.php";
    </script>
    <?php
}

if (isset($_POST["submit_btn"])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

    $sql = "SELECT `email` FROM `admin` WHERE `email` = '$email';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <script>
            window.location.href = "add-admin.php?failed_msg=This email is already exists"
        </script>
        <?php 
        exit();
    }

    $sql = "INSERT INTO `admin` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
    if ($conn->query($sql)) {
    ?>
        <script>
            window.location.href = "add-admin.php?success_msg=Admin added successfully"
        </script>
    <?php
        exit();
    } else {
    ?>
        <script>
            window.location.href = "add-admin.php?failed_msg=Admin added failed"
        </script>
<?php
        exit();
    }
    if(mysqli_error($conn)){
        ?>
        <script>
            window.location.href = "add-admin.php?failed_msg=Admin added failed for Unknown error"
        </script>
<?php
        exit();
    }
}

?>
