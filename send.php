<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    if (!$email) {
        echo "Invalid email address.";
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host = 'mail.itsallgoodman.site';                          // Set the SMTP server to your domain
        $mail->SMTPAuth = true;                                       // Enable SMTP authentication
        $mail->Username = 'revaldy@itsallgoodman.site';                  // SMTP username (your email address)
        $mail->Password = 'Pastisukses1!';                       // SMTP password (your email account's password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;               // Enable SSL encryption
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('revaldy@itsallgoodman.site', 'EBU Cruise');
        $mail->addAddress('ivan@equinoxshipping.co.id', 'EBU Cruise'); // Add a recipient ivan@equinoxshipping.co.id
        $mail->addReplyTo('$email', '$name'); // Add a reply-to address

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h1>Contact Form Submission</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        header('Location: success.php'); // redirect after success
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>