<?php
include 'dbcon.php';

// Drop service_bookings table if exists
$sql_drop = "DROP TABLE IF EXISTS service_bookings";
if (!$conn->query($sql_drop)) {
    die("Error dropping service_bookings table: " . $conn->error);
}

// Create service_bookings table
$sql_create = "CREATE TABLE service_bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NULL,
    customer_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    service_type VARCHAR(50) NOT NULL,
    message TEXT,
    preferred_date DATE NOT NULL,
    preferred_time VARCHAR(20) NOT NULL,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'confirmed', 'completed', 'cancelled') DEFAULT 'pending',
    address TEXT NOT NULL,
    file_path VARCHAR(255) NULL
)";
if (!$conn->query($sql_create)) {
    die("Error creating service_bookings table: " . $conn->error);
}

echo "service_bookings table recreated successfully.";
$conn->close();
?>
