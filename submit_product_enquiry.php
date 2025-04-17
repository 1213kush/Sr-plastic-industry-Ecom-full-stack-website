<?php
include 'dbcon.php';

ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/error_log.txt');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Required fields
        $required = ['productName', 'quantity', 'name', 'email', 'phone', 'address', 'contactMethod', 'timeframe', 'terms'];
        foreach ($required as $field) {
            if (empty($_POST[$field])) {
                throw new Exception("Required field '$field' is missing");
            }
        }

        // Sanitize and validate inputs
        $product_name = htmlspecialchars($_POST['productName']);
        $quantity = filter_var($_POST['quantity'], FILTER_VALIDATE_INT);
        if ($quantity === false || $quantity < 1) {
            throw new Exception("Invalid quantity");
        }
        $customer_name = htmlspecialchars($_POST['name']);
        $company = !empty($_POST['company']) ? htmlspecialchars($_POST['company']) : null;
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        if (!$email) {
            throw new Exception("Invalid email format");
        }
        $phone = preg_replace('/[^0-9+]/', '', $_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        $message = !empty($_POST['message']) ? htmlspecialchars($_POST['message']) : null;
        $contact_method = $_POST['contactMethod'];
        if (!in_array($contact_method, ['email', 'phone'])) {
            throw new Exception("Invalid contact method");
        }
        $timeframe = htmlspecialchars($_POST['timeframe']);
        $terms_accepted = ($_POST['terms'] === 'on' || $_POST['terms'] === '1') ? 1 : 0;
        if (!$terms_accepted) {
            throw new Exception("Terms must be accepted");
        }

        // Insert into database
        $sql = "INSERT INTO product_enquiries 
                (product_name, quantity, customer_name, company, email, phone, address, message, contact_method, timeframe, terms_accepted)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            error_log("Prepare failed: " . $conn->error);
            throw new Exception("Database prepare failed");
        }
        $stmt->bind_param("sissssssssi", 
            $product_name, $quantity, $customer_name, $company, $email, $phone, $address, $message, $contact_method, $timeframe, $terms_accepted);
        if (!$stmt->execute()) {
            error_log("Execute failed: " . $stmt->error);
            throw new Exception("Database execute failed");
        }

        $success = true;
    } catch (Exception $e) {
        $error = $e->getMessage();
        error_log("Enquiry submission error: " . $error);
    }
} else {
    $error = "Invalid request method.";
}
?>

<?php 
include 'include/header.php'; 
echo '<div class="container py-5">';

if (isset($success) && $success) {
?>
    <div class="alert alert-success">
        <h4>Enquiry Submitted Successfully!</h4>
        <p>Thank you for your enquiry. We'll be in touch soon.</p>
    </div>
<?php 
} elseif (isset($error)) {
?>
    <div class="alert alert-danger">
        <h4>Enquiry Submission Failed</h4>
        <p>Error: <?= htmlspecialchars($error) ?></p>
        <p>Please try again or contact us directly.</p>
    </div>
<?php 
}
?>
<a href="products.php" class="btn btn-primary">Back to Products</a>
<?php 
echo '</div>';
include 'include/footer.php'; 
?>
