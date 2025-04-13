<?php
session_start();
include 'includes/header.php';
?>

    <!-- Museum History -->
    <section class="py-16 bg-gradient-to-b from-[#F5F5DC] to-[#FFE4B5]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-['SF_Pro_Display'] tracking-tight text-center mb-12 text-[#8B4513]">Our History</h2>
            <div class="max-w-3xl mx-auto">
                <div class="vintage-card mb-8 transform hover:scale-105 transition-transform duration-300 shadow-xl">
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-4 text-[#8B4513]">A Legacy of Cultural Preservation</h3>
                    <p class="text-gray-700 mb-4">Founded in 1995, the Heritage Museum has been dedicated to preserving and showcasing India's rich cultural heritage. Our journey began with a small collection of artifacts and has grown into one of the country's most prestigious cultural institutions.</p>
                    <p class="text-gray-700">Over the years, we have expanded our collection to include rare artifacts, traditional art forms, and historical documents that tell the story of India's diverse cultural landscape.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-16 bg-gradient-to-b from-[#DEB887] to-[#D2691E]">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl bg-white/90">
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-4 text-[#8B4513]">Our Mission</h3>
                    <p class="text-gray-700">To preserve, protect, and promote India's cultural heritage through exhibitions, educational programs, and research initiatives. We strive to make our cultural treasures accessible to all while maintaining the highest standards of conservation and presentation.</p>
                </div>
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl bg-white/90">
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-4 text-[#8B4513]">Our Vision</h3>
                    <p class="text-gray-700">To be a global center for Indian cultural heritage, fostering understanding and appreciation of India's rich cultural diversity through innovative exhibitions, educational programs, and digital initiatives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Collections -->
    <section class="py-16 bg-gradient-to-b from-[#F5F5DC] to-[#FFE4B5]">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-['SF_Pro_Display'] tracking-tight text-center mb-12 text-[#8B4513]">Our Collections</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl group">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="images/collection1.jpg" alt="Classical Indian Art" class="collection-image transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-2 text-[#8B4513]">Classical Indian Art</h3>
                    <p class="text-gray-700">Explore masterpieces of Indian classical art, from ancient sculptures to medieval paintings.</p>
                </div>
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl group">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="images/collection2.jpg" alt="Textile Heritage" class="collection-image transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-2 text-[#8B4513]">Textile Heritage</h3>
                    <p class="text-gray-700">Discover India's rich textile traditions, from Banarasi silk to Bandhani prints.</p>
                </div>
                <div class="vintage-card transform hover:scale-105 transition-transform duration-300 shadow-xl group">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="images/collection3.jpg" alt="Folk & Tribal Art" class="collection-image transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-['SF_Pro_Display'] tracking-tight mb-2 text-[#8B4513]">Folk & Tribal Art</h3>
                    <p class="text-gray-700">Experience the vibrant world of Indian folk and tribal art traditions.</p>
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