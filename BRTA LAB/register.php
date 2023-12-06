<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include database connection file
    require_once 'db_connection.php';
}
    // Validate and store uploaded files
    $photo_temp = $_FILES['photo']['tmp_name'];
    $nid_temp = $_FILES['nid']['tmp_name'];

    if (!is_uploaded_file($photo_temp)) {
        echo 'Photo upload failed';
        exit;
    }

    if (!is_uploaded_file($nid_temp)) {
        echo 'NID upload failed';
        exit;
    }

    $photo = addslashes(file_get_contents($photo_temp));
    $nid = addslashes(file_get_contents($nid_temp));

    // Get the data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id = $_POST['id_number'];
    $vehicle_no = $_POST['vehicle_no'];
    $chess_no = $_POST['chess_no'];
    $present_address = $_POST['present_address'];
    $permanent_address = $_POST['permanent_address'];
    try {
        $sql = "INSERT INTO users ( name,email,id_number, chess_no, vehicle_no, present_address, permanent_address, photo, nid)
        VALUES ('$name', '$email', '$id', '$chess_no', '$vehicle_no', '$present_address', '$permanent_address', '$photo', '$nid')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            throw new Exception("Error: " . $sql . "<br>" . $conn->error);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

    // Close the database connection
    $conn->close();
?>