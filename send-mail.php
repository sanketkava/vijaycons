<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name      = $_POST["name"];
    $phone     = $_POST["phone"];
    $email     = $_POST["email"];
    $postcode  = $_POST["postcode"];
    $service   = $_POST["service"];
    $message   = $_POST["message"];

    $to = "sanketkava555@gmail.com";  // ← CHANGE THIS
    $subject = "New Contact Form Submission";

    $body = "
    New inquiry received:

    Name: $name
    Phone: $phone
    Email: $email
    Post Code: $postcode
    Service: $service

    Message:
    $message
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
