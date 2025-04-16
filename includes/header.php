<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heritage Museum - Book Your Visit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chatbot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</head>
<body class="bg-[#F5F5DC] font-['Inter']">
    <!-- Navbar -->
    <nav class="bg-[#8B4513] text-[#F5F5DC] py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="text-2xl font-['SF_Pro_Display'] tracking-tight">Heritage Museum</div>
            
            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            
            <!-- Desktop menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Home</a>
                <a href="about.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">About</a>
                <a href="exhibitions.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Exhibitions</a>
                <a href="tickets.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Tickets</a>
                <a href="contact.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Contact</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="logout.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Logout</a>
                    <div class="relative group flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-[#DEB887] text-[#8B4513] flex items-center justify-center font-semibold text-lg uppercase cursor-pointer hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50">
                            <?php echo substr(htmlspecialchars($_SESSION['user']), 0, 1); ?>
                        </div>
                        <!-- Dropdown name -->
                        <div class="absolute top-12 transform transition-all duration-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-[#8B4513]/80 px-4 py-2 rounded-md whitespace-nowrap z-50">
                            <span class="text-white text-base font-medium">
                                <?php echo htmlspecialchars($_SESSION['user']); ?>
                            </span>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Login</a>
                    <a href="register.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Register</a>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-[#8B4513] py-4 px-4">
            <div class="flex flex-col space-y-4">
                <a href="index.php" class="hover:text-[#DEB887] transition-colors duration-300 px-3 py-2 rounded-full">Home</a>
                <a href="about.php" class="hover:text-[#DEB887] transition-colors duration-300 px-3 py-2 rounded-full">About</a>
                <a href="exhibitions.php" class="hover:text-[#DEB887] transition-colors duration-300 px-3 py-2 rounded-full">Exhibitions</a>
                <a href="tickets.php" class="hover:text-[#DEB887] transition-colors duration-300 px-3 py-2 rounded-full">Tickets</a>
                <a href="contact.php" class="hover:text-[#DEB887] transition-colors duration-300 px-3 py-2 rounded-full">Contact</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="logout.php" class="hover:text-[#DEB887] transition-colors duration-300 px-3 py-2 rounded-full">Logout</a>
                    <div class="flex items-center space-x-2 px-3 py-2">
                        <div class="w-8 h-8 rounded-full bg-[#DEB887] text-[#8B4513] flex items-center justify-center font-semibold text-sm uppercase">
                            <?php echo substr(htmlspecialchars($_SESSION['user']), 0, 1); ?>
                        </div>
                        <span class="text-white text-sm">
                            <?php echo htmlspecialchars($_SESSION['user']); ?>
                        </span>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="hover:text-[#DEB887] transition-colors duration-300 px-3 py-2 rounded-full">Login</a>
                    <a href="register.php" class="hover:text-[#DEB887] transition-colors duration-300 px-3 py-2 rounded-full">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</body>
</html> 