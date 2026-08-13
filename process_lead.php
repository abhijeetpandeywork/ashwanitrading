<?php
header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $requirement = htmlspecialchars(trim($_POST['requirement'] ?? ''));

    // Validate required fields
    if (empty($name) || empty($phone) || empty($requirement)) {
        echo json_encode(['status' => 'error', 'message' => 'Name, Phone, and Requirement are required fields.']);
        exit;
    }

    // Set up email parameters
    $to = "ashwanitradingcojammu@gmail.com, gupta.ashwanikumar@yahoo.com, ashwaniyradingco@gmail.com";
    $subject = "New Website Lead: " . $name;
    
    // Construct email body
    $body = "You have received a new lead from the Ashwani Trading Co. website.\n\n";
    $body .= "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: " . ($email ? $email : "Not provided") . "\n";
    $body .= "Requirement:\n$requirement\n";

    // Set from headers (use a generic no-reply if the user's email isn't provided/valid for server policies)
    // It is best practice to send from the domain itself to avoid spam filters
    $fromEmail = "no-reply@" . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'ashwanitrading.digitalrubix.site');
    $headers = "From: $fromEmail\r\n";
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers .= "Reply-To: $email\r\n";
    }

    // Send the email
    $mailSent = @mail($to, $subject, $body, $headers);

    if ($mailSent) {
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent.']);
    } else {
        // Fallback or log if mail fails. Hostinger usually supports mail() natively.
        // Even if mail fails locally, we might simulate success for testing, or return error.
        echo json_encode(['status' => 'error', 'message' => 'Failed to send email. Please call us directly.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
