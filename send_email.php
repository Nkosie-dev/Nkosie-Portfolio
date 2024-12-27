<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email subject and body
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from your website contact form.\n\n" .
                  "Here are the details:\n\n" .
                  "Full Name: $full_name\n" .
                  "Email: $email\n" .
                  "Phone Number: $phone_number\n" .
                  "Subject: $subject\n\n" .
                  "Message:\n$message";

    // email address where you want to receive the messages
    $to = "nkosiembatha09@gmail.com";
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
