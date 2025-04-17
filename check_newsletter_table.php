<?php
include 'dbcon.php';

$result = $conn->query("SHOW TABLES LIKE 'newsletter_subscribers'");

if ($result && $result->num_rows > 0) {
    echo "Table 'newsletter_subscribers' exists.";
} else {
    echo "Table 'newsletter_subscribers' does NOT exist.";
}
?>
