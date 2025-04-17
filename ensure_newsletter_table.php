<?php
include 'dbcon.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$current_db = $conn->query("SELECT DATABASE()")->fetch_row()[0];
echo "Connected to database: " . $current_db . "<br>";

$result = $conn->query("SHOW TABLES LIKE 'subscribers'");

if ($result && $result->num_rows > 0) {
    echo "Table 'subscribers' already exists in database 'newsletter_db'.";
} else {
    $sql = "CREATE TABLE subscribers (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL UNIQUE,
        subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
        echo "Table 'subscribers' created successfully in database 'newsletter_db'.";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

$conn->close();
?>
