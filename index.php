<?php
session_start();
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative h-[80vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="images/musuem-bg.png" alt="Museum Interior" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50"></div>
        </div>
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-7xl font-['SF_Pro_Display'] mb-6 animate-fade-in">Welcome to Heritage Museum</h1>
            <p class="text-xl md:text-2xl mb-8 animate-slide-up">Discover India's Rich Cultural Heritage</p>
            <a href="exhibitions.php" class="inline-block bg-[#8B4513] text-white px-8 py-3 rounded-full hover:bg-[#A0522D] transform hover:scale-105 transition-all duration-300 shadow-lg animate-slide-up-delayed">Explore Exhibitions</a>
        </div>
    </section>

    <!-- Featured Exhibitions -->
    <section class="py-20 bg-gradient-to-b from-[#F5F5DC] to-[#FFE4B5]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-['SF_Pro_Display'] tracking-tight text-center mb-16 text-[#8B4513]">Featured Exhibitions</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl group">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="images/exhibition1.jpg" alt="Mughal Era Treasures" class="collection-image transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-2 text-[#8B4513]">Mughal Era Treasures</h3>
                    <p class="text-gray-700">Explore the opulent world of Mughal art and architecture.</p>
                    <a href="exhibitions.php" class="inline-block mt-4 text-[#8B4513] hover:text-[#A0522D] transition-colors duration-300">Learn More →</a>
                </div>
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl group">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="images/exhibition2.jpg" alt="Ancient Indian Civilizations" class="collection-image transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-2 text-[#8B4513]">Ancient Indian Civilizations</h3>
                    <p class="text-gray-700">Journey through time to discover India's ancient heritage.</p>
                    <a href="exhibitions.php" class="inline-block mt-4 text-[#8B4513] hover:text-[#A0522D] transition-colors duration-300">Learn More →</a>
                </div>
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl group">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="images/exhibition3.jpg" alt="Contemporary Indian Art" class="collection-image transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-2 text-[#8B4513]">Temple Architecture</h3>
                    <p class="text-gray-700">Experience the vibrant world of modern Indian artists.</p>
                    <a href="exhibitions.php" class="inline-block mt-4 text-[#8B4513] hover:text-[#A0522D] transition-colors duration-300">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="py-20 bg-gradient-to-b from-[#DEB887] to-[#D2691E]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-['SF_Pro_Display'] tracking-tight text-center mb-16 text-white">Upcoming Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl bg-white/90">
                    <div class="flex items-center mb-4">
                        <div class="w-16 h-16 bg-[#8B4513] text-white rounded-full flex items-center justify-center text-xl font-bold mr-4">15</div>
                        <div>
                            <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight text-[#8B4513]">Cultural Festival</h3>
                            <p class="text-gray-600">March 15, 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-700">Join us for a day of cultural performances, workshops, and exhibitions.</p>
                    <a href="#" class="inline-block mt-4 text-[#8B4513] hover:text-[#A0522D] transition-colors duration-300">Register Now →</a>
                </div>
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl bg-white/90">
                    <div class="flex items-center mb-4">
                        <div class="w-16 h-16 bg-[#8B4513] text-white rounded-full flex items-center justify-center text-xl font-bold mr-4">22</div>
                        <div>
                            <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight text-[#8B4513]">Art Workshop</h3>
                            <p class="text-gray-600">March 22, 2024</p>
                        </div>
                    </div>
                    <p class="text-gray-700">Learn traditional Indian art techniques from master artists.</p>
                    <a href="#" class="inline-block mt-4 text-[#8B4513] hover:text-[#A0522D] transition-colors duration-300">Register Now →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-20 bg-gradient-to-b from-[#F5F5DC] to-[#FFE4B5]">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-4xl font-['SF_Pro_Display'] tracking-tight mb-8 text-[#8B4513]">Stay Updated</h2>
                <p class="text-gray-700 mb-8">Subscribe to our newsletter for the latest exhibitions and events.</p>
                <form class="flex flex-col md:flex-row gap-4">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 rounded-full border border-[#DEB887] focus:outline-none focus:ring-2 focus:ring-[#8B4513]">
                    <button type="submit" class="bg-[#8B4513] text-white px-8 py-3 rounded-full hover:bg-[#A0522D] transform hover:scale-105 transition-all duration-300 shadow-lg">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Cultural Elements -->
    <div class="fixed top-0 left-0 w-full h-2 bg-gradient-to-r from-[#FF9933] via-white to-[#138808]"></div>
    <div class="fixed bottom-0 left-0 w-full h-2 bg-gradient-to-r from-[#FF9933] via-white to-[#138808]"></div>
    <div class="fixed left-0 top-0 h-full w-2 bg-gradient-to-b from-[#FF9933] via-white to-[#138808]"></div>
    <div class="fixed right-0 top-0 h-full w-2 bg-gradient-to-b from-[#FF9933] via-white to-[#138808]"></div>

<?php include 'includes/footer.php'; ?> 