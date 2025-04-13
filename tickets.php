<?php
session_start();
include 'includes/header.php';
include 'includes/razorpay-config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get exhibition details if passed
$exhibition_id = isset($_GET['exhibition_id']) ? $_GET['exhibition_id'] : null;
$exhibition_price = isset($_GET['price']) ? $_GET['price'] : 500; // Default price
?>

    <!-- Ticket Booking Section -->
    <section class="py-16 bg-[#F5F5DC]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-['SF_Pro_Display'] tracking-tight text-center mb-12">Book Your Tickets</h2>
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <form id="bookingForm" action="process-payment.php" method="POST" class="space-y-6">
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>

                    <div>
                        <label class="block mb-2">Select Exhibition</label>
                        <select name="exhibition_id" class="w-full p-2 border rounded" required>
                            <option value="">Select an exhibition</option>
                            <option value="1" <?php echo ($exhibition_id == 1) ? 'selected' : ''; ?>>Mughal Era Treasures - ₹500</option>
                            <option value="2" <?php echo ($exhibition_id == 2) ? 'selected' : ''; ?>>Ancient Indian Civilizations - ₹450</option>
                            <option value="3" <?php echo ($exhibition_id == 3) ? 'selected' : ''; ?>>Modern Art Revolution - ₹550</option>
                            <option value="4" <?php echo ($exhibition_id == 4) ? 'selected' : ''; ?>>Digital Art & Technology - ₹600</option>
                        </select>
                    </div>

                    <div>
                        <label class="block mb-2">Entry Type</label>
                        <select name="entry_type" class="w-full p-2 border rounded" required>
                            <option value="museum">Museum Entry</option>
                            <option value="show">Special Exhibition</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2">Date</label>
                        <input type="date" name="visit_date" class="w-full p-2 border rounded" required min="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div>
                        <label class="block mb-2">Time</label>
                        <select name="visit_time" class="w-full p-2 border rounded" required>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="12:00">12:00 PM</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2">Number of Visitors</label>
                        <input type="number" name="visitors" min="1" max="10" class="w-full p-2 border rounded" required>
                    </div>
                    <button type="button" id="proceedButton" class="w-full vintage-button">
                        Proceed to Payment
                    </button>
                </form>

                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                <script>
                    document.getElementById('proceedButton').onclick = async function() {
                        try {
                            // Validate form
                            const form = document.getElementById('bookingForm');
                            if (!form.checkValidity()) {
                                form.reportValidity();
                                return;
                            }

                            // Show loading state
                            this.disabled = true;
                            this.innerHTML = 'Processing...';

                            // Create order
                            const response = await fetch('process-payment.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                },
                                body: new URLSearchParams(new FormData(form))
                            });
                            
                            const data = await response.json();
                            if (data.status !== 'success') {
                                throw new Error(data.message || 'Payment initialization failed');
                            }

                            // Open Razorpay checkout
                            var options = {
                                "key": "<?php echo RAZORPAY_KEY_ID; ?>",
                                "amount": data.order.amount,
                                "currency": data.order.currency,
                                "name": "Museum Booking",
                                "description": "Booking for Exhibition",
                                "order_id": data.order.id,
                                "handler": function (response) {
                                    // Create payment form
                                    const paymentForm = document.createElement('form');
                                    paymentForm.method = 'POST';
                                    paymentForm.action = 'verify-payment.php';
                                    
                                    // Add payment details
                                    const paymentId = document.createElement('input');
                                    paymentId.type = 'hidden';
                                    paymentId.name = 'razorpay_payment_id';
                                    paymentId.value = response.razorpay_payment_id;
                                    
                                    const orderId = document.createElement('input');
                                    orderId.type = 'hidden';
                                    orderId.name = 'razorpay_order_id';
                                    orderId.value = response.razorpay_order_id;
                                    
                                    const signature = document.createElement('input');
                                    signature.type = 'hidden';
                                    signature.name = 'razorpay_signature';
                                    signature.value = response.razorpay_signature;
                                    
                                    // Add form elements
                                    paymentForm.appendChild(paymentId);
                                    paymentForm.appendChild(orderId);
                                    paymentForm.appendChild(signature);
                                    
                                    // Submit form
                                    document.body.appendChild(paymentForm);
                                    paymentForm.submit();
                                },
                                "prefill": {
                                    "name": "<?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''; ?>",
                                    "email": "<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>",
                                    "contact": "<?php echo isset($_SESSION['mobile_number']) ? $_SESSION['mobile_number'] : ''; ?>"
                                },
                                "theme": {
                                    "color": "#8B4513"
                                }
                            };
                            
                            var rzp = new Razorpay(options);
                            rzp.open();
                            
                        } catch (error) {
                            alert('Payment initialization failed: ' + error.message);
                            console.error('Error:', error);
                            // Reset button state
                            this.disabled = false;
                            this.innerHTML = 'Proceed to Payment';
                        }
                    };
                </script>
            </div>
        </div>
    </section>

    <!-- Cultural Elements -->
    <div class="fixed top-0 left-0 w-full h-2 bg-gradient-to-r from-[#FF9933] via-white to-[#138808]"></div>
    <div class="fixed bottom-0 left-0 w-full h-2 bg-gradient-to-r from-[#FF9933] via-white to-[#138808]"></div>
    <div class="fixed left-0 top-0 h-full w-2 bg-gradient-to-b from-[#FF9933] via-white to-[#138808]"></div>
    <div class="fixed right-0 top-0 h-full w-2 bg-gradient-to-b from-[#FF9933] via-white to-[#138808]"></div>

<?php include 'includes/footer.php'; ?> 