<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Basic email validation (you should add more robust checks)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email (e.g., display an error message)
        echo "Invalid email address.";
        exit;
    }

    // Email setup
    $to = "your_email@example.com"; 
    $subject = "Message from Website";
    $headers = "From: $name <$email>\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }

}

?>