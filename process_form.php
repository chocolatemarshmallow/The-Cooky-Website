<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Send email (to the admin)
    $to = "admin@example.com";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<h1>Thank you for your message, $name!</h1>";
        echo "<p>We have received your message and will get back to you at $email soon.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message.</p>";
    }
}
?>
