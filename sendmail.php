<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $topic   = $_POST['topic'];
    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $to      = "bluewellpharmaceutical@gmail.com";
    $subject = "New Inquiry from Get in Touch Form";
    $body    = "Topic: $topic\nName: $name\nPhone: $phone\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you, $name! Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
