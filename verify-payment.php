<?php
session_start();
require_once 'includes/razorpay-config.php';
require_once 'includes/db-connect.php';

// Check if user is logged in and has booking details
if (!isset($_SESSION['user_id']) || !isset($_SESSION['booking_details'])) {
    header("Location: login.php");
    exit();
}

// Get payment details from Razorpay
$payment_id = $_POST['razorpay_payment_id'] ?? null;
$order_id = $_POST['razorpay_order_id'] ?? null;
$signature = $_POST['razorpay_signature'] ?? null;

if (!$payment_id || !$order_id || !$signature) {
    $_SESSION['error'] = "Invalid payment details";
    header("Location: tickets.php");
    exit();
}

// Verify payment signature
$api = new Razorpay\Api\Api($keyId, $keySecret);
$attributes = array(
    'razorpay_order_id' => $order_id,
    'razorpay_payment_id' => $payment_id,
    'razorpay_signature' => $signature
);

try {
    $api->utility->verifyPaymentSignature($attributes);
    
    // Payment successful, create booking record
    $booking_details = $_SESSION['booking_details'];
    
    $stmt = $pdo->prepare("INSERT INTO bookings (
        user_id, exhibition_id, entry_type, visit_date, visit_time,
        adult_tickets, child_tickets, total_amount, payment_id, order_id,
        status, created_at
    ) VALUES (
        :user_id, :exhibition_id, :entry_type, :visit_date, :visit_time,
        :adult_tickets, :child_tickets, :total_amount, :payment_id, :order_id,
        'confirmed', NOW()
    )");
    
    $stmt->execute([
        'user_id' => $_SESSION['user_id'],
        'exhibition_id' => $booking_details['exhibition_id'],
        'entry_type' => $booking_details['entry_type'],
        'visit_date' => $booking_details['visit_date'],
        'visit_time' => $booking_details['visit_time'],
        'adult_tickets' => $booking_details['adult_tickets'],
        'child_tickets' => $booking_details['child_tickets'],
        'total_amount' => $booking_details['total_amount'],
        'payment_id' => $payment_id,
        'order_id' => $order_id
    ]);
    
    $booking_id = $pdo->lastInsertId();
    
    // Clear session data
    unset($_SESSION['booking_details']);
    unset($_SESSION['order_id']);
    
    // Redirect to booking confirmation page
    header("Location: booking-confirmation.php?id=" . $booking_id);
    exit();
    
} catch (Exception $e) {
    $_SESSION['error'] = "Payment verification failed: " . $e->getMessage();
    header("Location: tickets.php");
    exit();
}
?>
