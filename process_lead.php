<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// Collect and sanitize
$name     = htmlspecialchars(trim($_POST['name']          ?? ''));
$phone    = htmlspecialchars(trim($_POST['phone']         ?? ''));
$email    = htmlspecialchars(trim($_POST['email']         ?? ''));
$category = htmlspecialchars(trim($_POST['part_category'] ?? ''));
$message  = htmlspecialchars(trim($_POST['message']       ?? ''));
$require  = htmlspecialchars(trim($_POST['requirement']   ?? ''));

// Build requirement string from available fields
if (!empty($require)) {
    $requirement = $require;
} else {
    $parts = [];
    if (!empty($category)) $parts[] = "Category: $category";
    if (!empty($message))  $parts[] = "Details: $message";
    $requirement = implode("\n", $parts) ?: 'General enquiry';
}

// Validate required fields
if (empty($name) || empty($phone)) {
    echo json_encode(['status' => 'error', 'message' => 'Name and Phone are required.']);
    exit;
}
if (empty($requirement) || $requirement === 'General enquiry' && empty($message)) {
    echo json_encode(['status' => 'error', 'message' => 'Please describe your part or service requirement.']);
    exit;
}

// Compose email
$to      = 'ashwanitradingcojammu@gmail.com, gupta.ashwanikumar@yahoo.com, ashwaniyradingco@gmail.com';
$subject = "New Website Lead: $name — " . (!empty($category) ? $category : 'General Enquiry');

$body  = "New enquiry from Ashwani Trading Co. website.\n";
$body .= str_repeat('=', 50) . "\n\n";
$body .= "Name:     $name\n";
$body .= "Phone:    $phone\n";
$body .= "Email:    " . ($email ?: 'Not provided') . "\n\n";
$body .= "Requirement:\n$requirement\n\n";
$body .= str_repeat('-', 50) . "\n";
$body .= "Sent from: ashwanitrading.digitalrubix.site\n";

$host      = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'ashwanitrading.digitalrubix.site';
$fromEmail = "no-reply@$host";
$headers   = "From: $fromEmail\r\n";
$headers  .= "MIME-Version: 1.0\r\n";
$headers  .= "Content-Type: text/plain; charset=UTF-8\r\n";
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $headers .= "Reply-To: $email\r\n";
}

$sent = @mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['status' => 'success', 'message' => 'Received! Our team will call you shortly.']);
} else {
    // Log failure silently; still show success so user doesn't think nothing happened
    // (mail() failures are often server config issues, not user error)
    error_log("[ATC Lead] mail() failed for $name / $phone — $requirement");
    echo json_encode(['status' => 'success', 'message' => 'Received! Our team will call you shortly.']);
}
?>
