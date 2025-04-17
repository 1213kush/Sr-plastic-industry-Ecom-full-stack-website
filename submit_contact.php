<?php
include 'dbcon.php'; // Database Connection File Include

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // SQL Query to Insert Data
    $sql = "INSERT INTO contacts (name, email, number, address, message) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $number, $address, $message);

    if ($stmt->execute()) {
        // Redirect back to contact-us.php with success flag
        header("Location: contact-us.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid Request!";
}
?>
