<?php
session_start();
include 'includes/db-connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Validate input
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $_SESSION['error'] = "All fields are required";
        header("Location: contact.php");
        exit();
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format";
        header("Location: contact.php");
        exit();
    }
    
    // Insert into database
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