<?php
error_reporting(E_ALL); // Enable error reporting for debugging. Change to 0 in production.
extract($_POST);

if (isset($send)) {
    // Validate required fields
    if (empty($name) || empty($number)) {
        echo "<p>Name and Phone Number are required. Please fill out these fields.</p>";
        exit;
    }

    // Sanitize inputs to prevent XSS
    $name = htmlspecialchars($name);
    $number = htmlspecialchars($number);
    $email = !empty($email) ? htmlspecialchars($email) : 'Not provided';
    $address = !empty($address) ? htmlspecialchars($address) : 'Not provided';
    $message = !empty($message) ? htmlspecialchars($message) : 'No message provided';

    // Prepare email details
    $to = 'princesingh2632002@gmail.com';
    $subject = 'For Enquiry';
    $messageContent = "
        <html>
        <head><title>New Enquiry Details</title></head>
        <body>
        <table border='1' style='border-collapse:collapse; width:100%;'>
            <tr><th style='text-align:center; padding:8px; background-color:black; color:white;'>Name</th>
                <td style='text-align:center; padding:8px; background-color:rgb(241,127,127); color:white;'>$name</td>
            </tr>
            <tr><th style='text-align:center; padding:8px; background-color:black; color:white;'>Phone</th>
                <td style='text-align:center; padding:8px; background-color:rgb(241,127,127); color:white;'>$number</td>
            </tr>
            <tr><th style='text-align:center; padding:8px; background-color:black; color:white;'>Email</th>
                <td style='text-align:center; padding:8px; background-color:rgb(241,127,127); color:white;'>$email</td>
            </tr>
            <tr><th style='text-align:center; padding:8px; background-color:black; color:white;'>Address</th>
                <td style='text-align:center; padding:8px; background-color:rgb(241,127,127); color:white;'>$address</td>
            </tr>
            <tr><th style='text-align:center; padding:8px; background-color:black; color:white;'>Message</th>
                <td style='text-align:center; padding:8px; background-color:rgb(241,127,127); color:white;'>$message</td>
            </tr>
        </table>
        </body>
        </html>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: Ushatraders.in <no-reply@yourdomain.com>\r\n";
    $headers .= !empty($email) ? "Reply-To: $email\r\n" : "";

    // Send email and provide user feedback
    if (mail($to, $subject, $messageContent, $headers)) {
        echo generateModal('Congratulations', 'Your information has been successfully submitted.', '&#x2705;', 'success');
    } else {
        echo generateModal('Sorry', 'There was an error while submitting your information.', '❌', 'error');
    }
}

// Function to generate modal
function generateModal($title, $message, $emoji, $status)
{
    $buttonColor = ($status === 'success') ? '#4CAF50' : '#FF0000';
    return "
    <html>
    <head>
        <style>
            .modal { display: block; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.8); }
            .modal-content { background-color: white; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%; max-width: 500px; text-align: center; border-radius: 10px; }
            .ok-button { padding: 10px 20px; font-size: 16px; color: white; background-color: $buttonColor; border: none; border-radius: 5px; cursor: pointer; }
            .ok-button:hover { background-color: darkred; }
            .emoji { font-size: 2em; vertical-align: middle; }
            h2, p { color: black; }
        </style>
    </head>
    <body>
        <div id='myModal' class='modal'>
            <div class='modal-content'>
                <i class='emoji'>$emoji</i>
                <h2>$title</h2>
                <p>$message</p>
                <button class='ok-button' onclick='redirectToIndex()'>Close</button>
            </div>
        </div>
        <script>
            function redirectToIndex() { window.location.href = 'index.php'; }
        </script>
    </body>
    </html>";
}
?>
