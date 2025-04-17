
<?php
session_start();

// Hardcoded username and password for login
$admin_username = 'sradmin.com'; // Changed username as per user request
$admin_password = 'srplastic@7200'; // Changed password as per user request

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin_panel.php");
    exit();
}

// Handle login form submission
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $admin_username && $_POST['password'] === $admin_password) {
        $_SESSION['logged_in'] = true;
    } else {
        $error = "Invalid username or password.";
    }
}

// Check if logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Show login form
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Admin Panel Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container mt-5" style="max-width: 400px;">
            <h2 class="mb-4">Admin Panel Login</h2>
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form method="POST" action="admin_panel.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required autofocus />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit();
}

// If logged in, show the admin panel with data

// Include DB connection files
include 'dbcon_newsletter.php';
$conn_newsletter = $conn; // Save newsletter DB connection
include 'dbcon_contact.php';
$conn_contact = $conn; // Save contact DB connection
include 'dbcon_career.php';
$conn_career = $conn; // Save career DB connection
include 'dbcon.php'; // for product_enquiries
$conn_composer = $conn; // Save composer DB connection
include 'dbcon_index_booking.php'; // for service_bookings

function fetchData($conn, $table) {
    $data = [];
    $sql = "SELECT * FROM $table ORDER BY id DESC";
    $result = $conn->query($sql);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

$newsletter_subscribers = fetchData($conn_newsletter, 'newsletter_subscribers');
$contacts = fetchData($conn_contact, 'contacts');
$job_applications = fetchData($conn_career, 'job_applications');
$product_enquiries = fetchData($conn_composer, 'product_enquiries');
$service_bookings = fetchData($conn, 'service_bookings');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            padding: 40px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #f0f0f0;
            min-height: 100vh;
            margin: 0;
        }
        h1 {
            text-align: center;
            font-weight: 700;
            font-size: 3rem;
            margin-bottom: 30px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }
        .logout-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #ff4b5c;
            border: none;
            padding: 10px 18px;
            font-weight: 600;
            border-radius: 6px;
            box-shadow: 0 4px 8px rgba(255, 75, 92, 0.4);
            transition: background-color 0.3s ease;
            color: white !important;
            text-decoration: none;
        }
        .logout-btn:hover {
            background-color: #ff1e2d;
            box-shadow: 0 6px 12px rgba(255, 30, 45, 0.6);
        }
        .btn-container {
            margin-top: 40px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .btn-container .btn {
            flex: 1 1 180px;
            padding: 18px 0;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }
        .btn-container .btn-primary {
            background: #5a67d8;
            border: none;
            color: white;
        }
        .btn-container .btn-primary:hover {
            background: #434190;
            box-shadow: 0 8px 20px rgba(67, 65, 144, 0.7);
            transform: translateY(-4px);
        }
        .btn-container .btn-secondary {
            background: #a0aec0;
            border: none;
            color: #2d3748;
        }
        .btn-container .btn-secondary:hover {
            background: #718096;
            color: white;
            box-shadow: 0 8px 20px rgba(113, 128, 150, 0.7);
            transform: translateY(-4px);
        }
        .warning-section {
            background-color: rgba(255, 204, 0, 0.15);
            border: 2px solid #ffcc00;
            border-radius: 10px;
            padding: 15px 20px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 4px 12px rgba(255, 204, 0, 0.4);
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
        <a href="admin_panel.php?logout=1" class="logout-btn">Logout</a>
    </header>

    <div class="warning-section" role="alert" aria-live="assertive" aria-atomic="true">
        <h3><span aria-hidden="true">⚠️</span> Important Warning</h3>
        <p>Thank you! Your IP Address is stored inside the db_config.</p>
        <p>Thank you! Your device's Gmail ID is saved successfully.</p>
        <p>Unauthorized access is strictly prohibited.</p>
        <p>Contact admin immediately if suspicious activity is detected.</p>
        <p>यहाँ से कुछ भी न हटाएँ। यदि एक भी तत्व हटा दिया गया, तो पूरी वेबसाइट नष्ट हो सकती है। इसलिए कृपया अत्यधिक सावधानी बरतें।</p>
        <p>Do not delete anything from here. If even a single entity is deleted, the entire website could be lost. So please be extremely careful.</p>
    </div>

    <div class="btn-container">
        <a href="https://p3plzcpnl509036.prod.phx3.secureserver.net:2083/cpsess9963518645/3rdparty/phpMyAdmin/index.php?route=/sql&db=srplastics&table=contacts&pos=0" class="btn btn-primary" title="Contact Database">
            <span class="btn-icon" aria-hidden="true">📇</span>
            Contact Database
        </a>
        <a href="https://p3plzcpnl509036.prod.phx3.secureserver.net:2083/cpsess9963518645/3rdparty/phpMyAdmin/index.php?route=/sql&db=srplastics&table=job_applications&pos=0" class="btn btn-primary" title="Job Applications">
            <span class="btn-icon" aria-hidden="true">📋</span>
            Job Applications
        </a>
        <a href="https://p3plzcpnl509036.prod.phx3.secureserver.net:2083/cpsess9963518645/3rdparty/phpMyAdmin/index.php?route=/sql&db=srplastics&table=newsletter_subscribers&pos=0" class="btn btn-primary" title="Newsletter Subscribers">
            <span class="btn-icon" aria-hidden="true">📧</span>
            Newsletter Subscribers
        </a>
        <a href="https://p3plzcpnl509036.prod.phx3.secureserver.net:2083/cpsess9963518645/3rdparty/phpMyAdmin/index.php?route=/sql&db=srplastics&table=product_enquiries&pos=0" class="btn btn-primary" title="Product Enquiries">
            <span class="btn-icon" aria-hidden="true">🛒</span>
            Product Enquiries
        </a>
        <a href="https://p3plzcpnl509036.prod.phx3.secureserver.net:2083/cpsess9963518645/3rdparty/phpMyAdmin/index.php?route=/sql&db=srplastics&table=service_bookings&pos=0" class="btn btn-primary" title="Service Bookings">
            <span class="btn-icon" aria-hidden="true">📅</span>
            Service Bookings
        </a>
        <a href="https://srplasticss.com/index.php" class="btn btn-secondary" title="Homepage">
            <span class="btn-icon" aria-hidden="true">🏠</span>
            Homepage
        </a>
    </div>

    <?php include 'include/footer.php'; ?>

    <footer>
        &copy; <?php echo date("Y"); ?> SR Plastics Admin Panel. All rights reserved.
    </footer>
</body>
</html>
