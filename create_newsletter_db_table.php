<?php
include 'dbcon.php';

$sql = "CREATE TABLE IF NOT EXISTS subscribers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'subscribers' created successfully or already exists in database 'newsletter_db'.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
