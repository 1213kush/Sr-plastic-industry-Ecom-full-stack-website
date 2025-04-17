<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "composer_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (!$conn->query($sql)) {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db($dbname);

// Create service_bookings table if not exists
$sql_service_bookings = "CREATE TABLE IF NOT EXISTS service_bookings (
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
if (!$conn->query($sql_service_bookings)) {
    die("Error creating service_bookings table: " . $conn->error);
}

echo "Database and service_bookings table created or already exist.\n";
?>
