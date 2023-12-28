<?php
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "vanderhaeghenemma@gmail.com";

    // Set the email subject
    $email_subject = "New Form Submission: " . $subject;

    // Build the email content
    $email_body = "Name: $fullname\n\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Set the headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
