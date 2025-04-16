<?php
session_start();
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="py-20 relative" style="background-image: url('images/musuem-bg.png'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center text-white">
                <h1 class="text-5xl font-['SF_Pro_Display'] tracking-tight mb-6 animate-fade-in">Discover Our Heritage</h1>
                <p class="text-xl mb-8 animate-slide-up">Explore the rich cultural heritage of India through our fascinating exhibitions and collections.</p>
                <div class="flex justify-center space-x-4">
                    <img src="images/collection1.jpg" alt="Collection 1" class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg animate-slide-up" style="animation-delay: 0s;">
                    <img src="images/collection2.jpg" alt="Collection 2" class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg animate-slide-up" style="animation-delay: 0.5s;">
                    <img src="images/collection3.jpg" alt="Collection 3" class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg animate-slide-up" style="animation-delay: 1s;">
                </div>
            </div>
        </div>
    </section>

    <!-- Ticket Information Section -->
    <section class="py-16 bg-[#F5F5DC]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-['SF_Pro_Display'] tracking-tight text-center mb-12">Ticket Information</h2>
            
            <!-- Ticket Types -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Regular Ticket -->
                <div class="vintage-card p-6 transform transition-all duration-500 hover:scale-105 hover:shadow-xl animate-slide-up">
                    <div class="relative mb-4 overflow-hidden rounded-lg">
                        <img src="images/exhibition1.jpg" alt="Regular Ticket" class="w-full h-40 object-cover transition-transform duration-700 hover:scale-110">
                        <div class="absolute top-2 right-2 bg-white px-3 py-1 rounded-full text-sm font-semibold animate-fade-in">₹99</div>
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight text-center mb-4">Regular Ticket</h3>
                    <div class="space-y-4">
                        <ul class="space-y-2">
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.1s;"><span class="text-green-600 mr-2">✓</span> Access to permanent exhibitions</li>
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.2s;"><span class="text-green-600 mr-2">✓</span> Valid for one day</li>
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.3s;"><span class="text-green-600 mr-2">✓</span> Audio guide included</li>
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.4s;"><span class="text-green-600 mr-2">✓</span> Museum map provided</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Special Exhibition -->
                <div class="vintage-card p-6 transform transition-all duration-500 hover:scale-105 hover:shadow-xl animate-slide-up" style="animation-delay: 0.2s;">
                    <div class="relative mb-4 overflow-hidden rounded-lg">
                        <img src="images/exhibition2.jpg" alt="Special Exhibition" class="w-full h-40 object-cover transition-transform duration-700 hover:scale-110">
                        <div class="absolute top-2 right-2 bg-white px-3 py-1 rounded-full text-sm font-semibold animate-fade-in">₹199</div>
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight text-center mb-4">Special Exhibition</h3>
                    <div class="space-y-4">
                        <ul class="space-y-2">
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.3s;"><span class="text-green-600 mr-2">✓</span> All regular ticket benefits</li>
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.4s;"><span class="text-green-600 mr-2">✓</span> Special exhibition access</li>
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.5s;"><span class="text-green-600 mr-2">✓</span> Guided tour included</li>
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.6s;"><span class="text-green-600 mr-2">✓</span> Souvenir catalogue</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Annual Pass -->
                <div class="vintage-card p-6 transform transition-all duration-500 hover:scale-105 hover:shadow-xl animate-slide-up" style="animation-delay: 0.4s;">
                    <div class="relative mb-4 overflow-hidden rounded-lg">
                        <img src="images/exhibition3.jpg" alt="Annual Pass" class="w-full h-40 object-cover transition-transform duration-700 hover:scale-110">
                        <div class="absolute top-2 right-2 bg-white px-3 py-1 rounded-full text-sm font-semibold animate-fade-in">₹499</div>
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight text-center mb-4">Annual Pass</h3>
                    <div class="space-y-4">
                        <ul class="space-y-2">
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.5s;"><span class="text-green-600 mr-2">✓</span> Unlimited visits for one year</li>
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.6s;"><span class="text-green-600 mr-2">✓</span> Priority access to exhibitions</li>
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.7s;"><span class="text-green-600 mr-2">✓</span> Exclusive member events</li>
                            <li class="flex items-center animate-slide-up" style="animation-delay: 0.8s;"><span class="text-green-600 mr-2">✓</span> 10% off at museum shop</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="max-w-4xl mx-auto mt-16">
                <div class="vintage-card p-6 relative overflow-hidden animate-slide-up" style="animation-delay: 0.6s;">
                    <div class="absolute top-0 right-0 w-1/3 h-full opacity-10">
                        <img src="images/paper-texture.png" alt="Texture" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-6">Visiting Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-xl font-semibold mb-4">Opening Hours</h4>
                            <ul class="space-y-2">
                                <li class="flex items-center animate-slide-up" style="animation-delay: 0.7s;"><span class="font-bold mr-2">Monday - Friday:</span> 9:00 AM - 5:00 PM</li>
                                <li class="flex items-center animate-slide-up" style="animation-delay: 0.8s;"><span class="font-bold mr-2">Saturday - Sunday:</span> 10:00 AM - 6:00 PM</li>
                                <li class="flex items-center animate-slide-up" style="animation-delay: 0.9s;"><span class="font-bold mr-2">Last Entry:</span> 30 minutes before closing</li>
                                <li class="flex items-center animate-slide-up" style="animation-delay: 1s;"><span class="font-bold mr-2">Closed:</span> Major holidays</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold mb-4">Important Notes</h4>
                            <ul class="space-y-2">
                                <li class="flex items-center animate-slide-up" style="animation-delay: 0.7s;"><span class="text-green-600 mr-2">✓</span> Children under 5 enter free</li>
                                <li class="flex items-center animate-slide-up" style="animation-delay: 0.8s;"><span class="text-green-600 mr-2">✓</span> Student discounts available (with ID)</li>
                                <li class="flex items-center animate-slide-up" style="animation-delay: 0.9s;"><span class="text-green-600 mr-2">✓</span> Group bookings welcome</li>
                                <li class="flex items-center animate-slide-up" style="animation-delay: 1s;"><span class="text-green-600 mr-2">✓</span> Wheelchair accessible</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Current Exhibitions -->
            <div class="max-w-4xl mx-auto mt-16">
                <h3 class="text-3xl font-['SF_Pro_Display'] tracking-tight text-center mb-8">Current Exhibitions</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="vintage-card p-6 transform transition-all duration-500 hover:scale-105 hover:shadow-xl animate-slide-up" style="animation-delay: 0.8s;">
                        <div class="relative mb-4 overflow-hidden rounded-lg">
                            <img src="images/exhibition4.jpg" alt="Mughal Era Treasures" class="w-full h-48 object-cover transition-transform duration-700 hover:scale-110">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="text-xl font-['SF_Pro_Display'] tracking-tight text-white">Mughal Era Treasures</h4>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="animate-slide-up" style="animation-delay: 0.9s;"><span class="font-bold">Duration:</span> June - August 2023</p>
                            <p class="animate-slide-up" style="animation-delay: 1s;"><span class="font-bold">Location:</span> Main Gallery</p>
                            <p class="animate-slide-up" style="animation-delay: 1.1s;">Experience the grandeur of the Mughal Empire through our carefully curated collection of artifacts, jewelry, and artwork.</p>
                        </div>
                    </div>
                    
                    <div class="vintage-card p-6 transform transition-all duration-500 hover:scale-105 hover:shadow-xl animate-slide-up" style="animation-delay: 1s;">
                        <div class="relative mb-4 overflow-hidden rounded-lg">
                            <img src="images/exhibition5.jpg" alt="Ancient Indian Civilizations" class="w-full h-48 object-cover transition-transform duration-700 hover:scale-110">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                                <h4 class="text-xl font-['SF_Pro_Display'] tracking-tight text-white">Ancient Indian Civilizations</h4>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="animate-slide-up" style="animation-delay: 1.1s;"><span class="font-bold">Type:</span> Permanent Exhibition</p>
                            <p class="animate-slide-up" style="animation-delay: 1.2s;"><span class="font-bold">Location:</span> East Wing</p>
                            <p class="animate-slide-up" style="animation-delay: 1.3s;">Discover the rich history of ancient Indian civilizations through archaeological findings and historical artifacts.</p>
                        </div>
                    </div>
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