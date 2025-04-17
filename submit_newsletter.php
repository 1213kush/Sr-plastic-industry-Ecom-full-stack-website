<?php
include 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if table exists, create if not
        $result = $conn->query("SHOW TABLES LIKE 'newsletter_subscribers'");
        if ($result->num_rows == 0) {
            $createTableSql = "CREATE TABLE newsletter_subscribers (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL UNIQUE,
                subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            if (!$conn->query($createTableSql)) {
                die("Error creating table: " . $conn->error);
            }
        }

        // Prepare statement to avoid SQL injection
        $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            // Redirect back with success message
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?subscribed=success");
            exit();
        } else {
            // Possibly duplicate email or other error
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?subscribed=error");
            exit();
        }
    } else {
        // Invalid email format
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?subscribed=invalid");
        exit();
    }
} else {
    // Invalid request method
    header("Location: index.php");
    exit();
}
?>
