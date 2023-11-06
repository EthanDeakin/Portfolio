<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // Set your email address where you want to receive messages
    $to = "exdea36@wintec.ac.nz";

    // Set your email subject
    $subject = "New Contact Form Submission from $name";

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n\n";
    $message .= "Subject: $subject\n";
    $message .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>
