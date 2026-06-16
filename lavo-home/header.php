<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVO - Định Hình Tương Lai Ngành Tóc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@300;400;500;600;700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animations.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body class="text-gray-800">

    <!-- Header -->
    <header class="bg-[#0b162c] text-white py-4 sticky top-0 z-50">
        <div class="container mx-auto px-8 flex justify-between items-center">
        <div class="flex items-center">
            <a href="index.php">
                <img src="cta-logo.png" alt="LAVO Logo" class="h-8 object-contain" style="filter: brightness(0) invert(1);">
            </a>
        </div>
        <!-- Hamburger button (mobile) -->
        <button id="hamburger-btn" class="md:hidden text-white focus:outline-none" onclick="toggleMobileMenu()" aria-label="Toggle menu">
            <svg id="hamburger-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <!-- Desktop nav -->
        <nav class="hidden md:flex space-x-8 text-sm font-heading font-semibold tracking-wide items-center">
            <a href="#" class="hover:text-gray-300 transition">Công ty</a>
            <a href="thuong-hieu.php" class="hover:text-gray-300 transition flex items-center">
                <span class="bg-white text-[#0b162c] rounded-full w-4 h-4 flex items-center justify-center mr-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </span>
                Thương hiệu
            </a>
            <a href="san-pham.php" class="hover:text-gray-300 transition">Sản phẩm</a>
            <a href="kien-thuc.php" class="hover:text-gray-300 transition">Kiến thức</a>
            <a href="#" class="hover:text-gray-300 transition">Hệ sinh thái</a>
            <a href="#" class="hover:text-gray-300 transition">Landing Page</a>
        </nav>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden w-full bg-[#0b162c] text-white md:hidden fixed top-[56px] left-0 right-0 z-40 border-t border-white/10">
        <nav class="flex flex-col px-6 py-4 space-y-1 font-heading">
            <a href="#" class="block py-3 px-2 text-sm font-medium hover:bg-white/10 rounded transition">Công ty</a>
            <a href="thuong-hieu.php" class="block py-3 px-2 text-sm font-medium hover:bg-white/10 rounded transition">Thương hiệu</a>
            <a href="san-pham.php" class="block py-3 px-2 text-sm font-medium hover:bg-white/10 rounded transition">Sản phẩm</a>
            <a href="kien-thuc.php" class="block py-3 px-2 text-sm font-medium hover:bg-white/10 rounded transition">Kiến thức</a>
            <a href="#" class="block py-3 px-2 text-sm font-medium hover:bg-white/10 rounded transition">Hệ sinh thái</a>
            <a href="#" class="block py-3 px-2 text-sm font-medium hover:bg-white/10 rounded transition">Landing Page</a>
        </nav>
    </div>

    <script>
    function toggleMobileMenu() {
        var menu = document.getElementById('mobile-menu');
        var hamburger = document.getElementById('hamburger-icon');
        var close = document.getElementById('close-icon');
        menu.classList.toggle('hidden');
        hamburger.classList.toggle('hidden');
        close.classList.toggle('hidden');
    }
    </script>
