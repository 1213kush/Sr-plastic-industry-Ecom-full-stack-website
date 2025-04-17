<?php
header('Content-Type: application/json; charset=utf-8');

// Allow only POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit;
}

// Include database connection
require_once 'dbcon.php';

// Helper function for response
function respond($status, $message) {
    echo json_encode([
        'status' => $status,
        'message' => $message
    ]);
    exit;
}

// Validate required fields
$required = ['position', 'name', 'email', 'phone'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        respond('error', "Missing required field: $field");
    }
}

// Validate consent checkbox
if (!isset($_POST['consent'])) {
    respond('error', 'You must consent to data processing.');
}

// Validate email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    respond('error', 'Invalid email address.');
}

// Validate phone (10-15 digits)
if (!preg_match('/^[0-9]{10,15}$/', $_POST['phone'])) {
    respond('error', 'Invalid phone number. Enter 10-15 digits.');
}

// Validate name (3-50 characters, letters and spaces)
if (!preg_match('/^[A-Za-z ]{3,50}$/', $_POST['name'])) {
    respond('error', 'Invalid name. Use 3-50 letters and spaces.');
}

// Validate resume upload
if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
    respond('error', 'Resume upload failed.');
}

$resume = $_FILES['resume'];
$allowed_ext = ['pdf', 'doc', 'docx'];
$max_size = 5 * 1024 * 1024; // 5MB

// Check file size
if ($resume['size'] > $max_size) {
    respond('error', 'Resume file is too large. Max 5MB allowed.');
}

// Check file extension
$resume_ext = strtolower(pathinfo($resume['name'], PATHINFO_EXTENSION));
if (!in_array($resume_ext, $allowed_ext)) {
    respond('error', 'Invalid resume file type. Only PDF, DOC, DOCX allowed.');
}

// Save resume to uploads/
$uploads_dir = __DIR__ . '/uploads';
if (!is_dir($uploads_dir)) {
    mkdir($uploads_dir, 0777, true);
}
$unique_name = 'resume_' . time() . '_' . bin2hex(random_bytes(4)) . '.' . $resume_ext;
$target_path = $uploads_dir . '/' . $unique_name;

if (!move_uploaded_file($resume['tmp_name'], $target_path)) {
    respond('error', 'Failed to save resume file.');
}

// Optional fields
$linkedin = isset($_POST['linkedin']) ? trim($_POST['linkedin']) : '';
$cover_letter = isset($_POST['cover-letter']) ? trim($_POST['cover-letter']) : '';
$why_hire = isset($_POST['why_hire']) ? trim($_POST['why_hire']) : '';

// Create job_applications table if not exists
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

if (!$conn->query($create_table_sql)) {
    respond('error', 'Failed to create job_applications table: ' . $conn->error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO job_applications (position, name, email, phone, linkedin, cover_letter, why_hire, resume_file) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    respond('error', 'Database error: ' . $conn->error);
}

$stmt->bind_param(
    "ssssssss",
    $_POST['position'],
    $_POST['name'],
    $_POST['email'],
    $_POST['phone'],
    $linkedin,
    $cover_letter,
    $why_hire,
    $unique_name
);

if ($stmt->execute()) {
    $stmt->close();
    $conn->close();
    respond('success', 'Your application has been submitted successfully! Thank you for applying.');
} else {
    $stmt->close();
    $conn->close();
    respond('error', 'Failed to save application: ' . $stmt->error);
}
?>
