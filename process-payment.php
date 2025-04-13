<?php
session_start();
require_once 'includes/razorpay-config.php';
require_once 'db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Please login to book tickets.']);
    exit();
}

// Define exhibition prices
$exhibition_prices = [
    '1' => 500, // Mughal Era Treasures
    '2' => 450, // Ancient Indian Civilizations
    '3' => 550, // Modern Art Revolution
    '4' => 600  // Digital Art & Technology
];

// Validate form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Get exhibition_id from POST
        $exhibition_id = $_POST['exhibition_id'] ?? null;
        
        // Validate exhibition_id first
        if (empty($exhibition_id) || !isset($exhibition_prices[$exhibition_id])) {
            throw new Exception("Please select a valid exhibition to book tickets.");
        }

        // Get price based on exhibition_id
        $price = $exhibition_prices[$exhibition_id];

        // Validate required fields
        $required_fields = ['entry_type', 'visit_date', 'visit_time', 'visitors'];
        foreach ($required_fields as $field) {
            if (empty($_POST[$field])) {
                throw new Exception("Missing required field: " . $field);
            }
        }

        $entry_type = $_POST['entry_type'];
        $visit_date = $_POST['visit_date'];
        $visit_time = $_POST['visit_time'];
        $visitors = (int)$_POST['visitors'];

        // Validate visitors count
        if ($visitors < 1 || $visitors > 10) {
            throw new Exception("Number of visitors must be between 1 and 10");
        }

        // Calculate total amount
        $adult_tickets = ceil($visitors * 0.7); // 70% adult tickets
        $child_tickets = $visitors - $adult_tickets;
        $total_amount = ($adult_tickets * $price) + ($child_tickets * ($price * 0.5));

        // Create Razorpay order
        $api = getRazorpayInstance();

        $orderData = [
            'receipt'         => 'order_' . time(),
            'amount'          => $total_amount * 100, // Amount in paise
            'currency'        => 'INR',
            'payment_capture' => 1,
            'notes'          => [
                'exhibition_id' => $exhibition_id,
                'entry_type' => $entry_type,
                'visit_date' => $visit_date,
                'visit_time' => $visit_time,
                'visitors' => $visitors
            ]
        ];

        $razorpayOrder = $api->order->create($orderData);
        
        // Store booking details in session
        $_SESSION['booking_details'] = [
            'exhibition_id' => $exhibition_id,
            'entry_type' => $entry_type,
            'visit_date' => $visit_date,
            'visit_time' => $visit_time,
            'visitors' => $visitors,
            'adult_tickets' => $adult_tickets,
            'child_tickets' => $child_tickets,
            'total_amount' => $total_amount
        ];

        // Return success response with order details
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'order' => [
                'id' => $razorpayOrder->id,
                'amount' => $razorpayOrder->amount,
                'currency' => $razorpayOrder->currency,
                'receipt' => $razorpayOrder->receipt
            ]
        ]);
        exit();

    } catch (Exception $e) {
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'error',
            'message' => $e->getMessage()
        ]);
        exit();
    }
} else {
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
    exit();
}
?>
