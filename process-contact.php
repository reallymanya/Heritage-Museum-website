<?php
session_start();
include 'includes/db-connect.php'; // Include your DB connection file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php"; // Autoload PHPMailer's dependencies

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Validate input
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: contact.php");
        exit();
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: contact.php");
        exit();
    }

    try {
        // ===== Send email to admin (Shivangi) =====
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "shivangishreya958@gmail.com"; // Use your Gmail
        $mail->Password = "icmu abzc gyno ibid"; // Use app password for Gmail security
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Admin email settings
        $mail->setFrom("shivangishreya958@gmail.com", "Heritage Museum");
        $mail->addAddress("shivangishreya958@gmail.com", "Shivangi Shreya");
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: $subject";
        $mail->Body = "
            <h3>New Contact Message</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";
        $mail->AltBody = strip_tags($message);
        $mail->send();

        // ===== Send confirmation email to user =====
        $mail->clearAddresses();
        $mail->clearReplyTos();
        $mail->addAddress($email, $name);
        $mail->Subject = "Thank you for contacting Heritage Museum";
        $mail->Body = "
            <p>Dear {$name},</p>
            <p>Thank you for reaching out to us. We have received your message and will get back to you shortly.</p>
            <p><strong>Your Message:</strong><br>{$message}</p>
            <br>
            <p>Best regards,<br>Heritage Museum Team</p>
        ";
        $mail->AltBody = "Thank you for contacting Heritage Museum. We received your message.";
        $mail->send();

    } catch (Exception $e) {
        $_SESSION['error'] = "Mailer Error: " . $mail->ErrorInfo;
        header("Location: contact.php");
        exit();
    }
    
    // Insert message into the database
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    
    if ($stmt->execute()) {
        $_SESSION['success'] = "Thank you for your message! We will get back to you soon.";
    } else {
        $_SESSION['error'] = "Error sending message. Please try again later.";
    }
    
    $stmt->close();
    $conn->close();
    
    header("Location: contact.php");
    exit();
} else {
    header("Location: contact.php");
    exit();
}
?>
