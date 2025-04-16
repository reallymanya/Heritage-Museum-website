<?php
session_start();
include 'includes/header.php';
?>

    <!-- Contact Information -->
    <section class="py-16 bg-[#F5F5DC]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-['SF_Pro_Display'] tracking-tight text-center mb-12">Get in Touch</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="vintage-card">
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-4">Contact Information</h3>
                    <div class="space-y-4">
                        <p class="flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            123 Museum Street, City, Country
                        </p>
                        <p class="flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            (123) 456-7890
                        </p>
                        <p class="flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            info@heritagemuseum.com
                        </p>
                    </div>
                </div>
                <div class="vintage-card">
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-4">Opening Hours</h3>
                    <div class="space-y-2">
                        <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                        <p>Saturday - Sunday: 10:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-16 bg-[#DEB887]">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto">
                <div class="vintage-card">
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-6">Send us a Message</h3>
                    
                    <!-- Display success or error messages -->
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline"><?php echo $_SESSION['success']; ?></span>
                        </div>
                        <?php unset($_SESSION['success']); ?>
                    <?php endif; ?>
                    
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline"><?php echo $_SESSION['error']; ?></span>
                        </div>
                        <?php unset($_SESSION['error']); ?>
                    <?php endif; ?>
                    
                    <form class="space-y-6" action="process-contact.php" method="POST">
                        <div>
                            <label class="block mb-2">Name</label>
                            <input type="text" name="name" class="w-full p-2 border rounded" required>
                        </div>
                        <div>
                            <label class="block mb-2">Email</label>
                            <input type="email" name="email" class="w-full p-2 border rounded" required>
                        </div>
                        <div>
                            <label class="block mb-2">Subject</label>
                            <select name="subject" class="w-full p-2 border rounded" required>
                                <option value="general">General Inquiry</option>
                                <option value="tours">Guided Tours</option>
                                <option value="events">Special Events</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2">Message</label>
                            <textarea name="message" rows="4" class="w-full p-2 border rounded" required></textarea>
                        </div>
                        <button type="submit" class="w-full vintage-button">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Cultural Elements -->
    <div class="fixed top-0 left-0 w-full h-2 bg-gradient-to-r from-[#FF9933] via-white to-[#138808]"></div>
    <div class="fixed bottom-0 left-0 w-full h-2 bg-gradient-to-r from-[#FF9933] via-white to-[#138808]"></div>
    <div class="fixed left-0 top-0 h-full w-2 bg-gradient-to-b from-[#FF9933] via-white to-[#138808]"></div>
    <div class="fixed right-0 top-0 h-full w-2 bg-gradient-to-b from-[#FF9933] via-white to-[#138808]"></div>

<?php include 'includes/footer.php'; ?> 