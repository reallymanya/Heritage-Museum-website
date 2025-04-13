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
</head>
<body class="bg-[#F5F5DC] font-['Inter']">
    <!-- Navbar -->
    <nav class="bg-[#8B4513] text-[#F5F5DC] py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="text-2xl font-['SF_Pro_Display'] tracking-tight">Heritage Museum</div>
            <div class="flex items-center space-x-8">
                <a href="index.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Home</a>
                <a href="about.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">About</a>
                <a href="exhibitions.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Exhibitions</a>
                <a href="tickets.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Tickets</a>
                <a href="contact.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Contact</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <span class="text-[#DEB887] px-3 py-1">Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?></span>
                    <a href="logout.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Login</a>
                    <a href="register.php" class="hover:text-[#DEB887] transition-colors duration-300 hover:ring-2 hover:ring-[#DEB887] hover:ring-opacity-50 px-3 py-1 rounded-full">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</body>
</html> 