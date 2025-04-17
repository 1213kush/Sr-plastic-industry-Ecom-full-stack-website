<?php
require_once 'dbcon_career.php';

$create_table_sql = "CREATE TABLE IF NOT EXISTS job_applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    position VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    linkedin VARCHAR(255) DEFAULT NULL,
    cover_letter TEXT DEFAULT NULL,
    why_hire TEXT DEFAULT NULL,
    resume_file VARCHAR(255) NOT NULL,
    application_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($create_table_sql) === TRUE) {
    echo "Table job_applications created successfully or already exists.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
