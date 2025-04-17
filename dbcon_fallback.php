<?php
$servername = "localhost";
$username = "root";
$password = "";
$primary_dbname = "composer_db";
$fallback_dbname = "composer_db_new";

function createTables($conn) {
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
        throw new Exception("Error creating service_bookings table: " . $conn->error);
    }

    $sql_product_enquiries = "CREATE TABLE IF NOT EXISTS product_enquiries (
        id INT AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(255) NOT NULL,
        quantity INT NOT NULL,
        customer_name VARCHAR(255) NOT NULL,
        company VARCHAR(255) NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(50) NOT NULL,
        address TEXT NOT NULL,
        message TEXT NULL,
        contact_method ENUM('email', 'phone') NOT NULL,
        timeframe VARCHAR(50) NOT NULL,
        terms_accepted BOOLEAN NOT NULL,
        enquiry_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    if (!$conn->query($sql_product_enquiries)) {
        throw new Exception("Error creating product_enquiries table: " . $conn->error);
    }

    $sql_contacts = "CREATE TABLE IF NOT EXISTS contacts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(50) NOT NULL,
        message TEXT,
        contact_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    if (!$conn->query($sql_contacts)) {
        throw new Exception("Error creating contacts table: " . $conn->error);
    }

    $sql_newsletter_subscribers = "CREATE TABLE IF NOT EXISTS newsletter_subscribers (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL UNIQUE,
        subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    if (!$conn->query($sql_newsletter_subscribers)) {
        throw new Exception("Error creating newsletter_subscribers table: " . $conn->error);
    }
}

try {
    // Try primary database
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE DATABASE IF NOT EXISTS $primary_dbname";
    if (!$conn->query($sql)) {
        throw new Exception("Error creating database: " . $conn->error);
    }
    $conn->select_db($primary_dbname);

    // Check if service_bookings table exists
    $result = $conn->query("SHOW TABLES LIKE 'service_bookings'");
    if ($result && $result->num_rows == 0) {
        createTables($conn);
    }
} catch (Exception $e) {
    // On error, fallback to new database
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Fallback connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE DATABASE IF NOT EXISTS $fallback_dbname";
    if (!$conn->query($sql)) {
        die("Error creating fallback database: " . $conn->error);
    }
    $conn->select_db($fallback_dbname);

    try {
        createTables($conn);
    } catch (Exception $ex) {
        die("Error creating tables in fallback database: " . $ex->getMessage());
    }
}
?>
