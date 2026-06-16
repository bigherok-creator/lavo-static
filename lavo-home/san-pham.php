<?php include 'header.php'; ?>

    <!-- Hero Banner -->
    <section id="hero" class="relative bg-cover bg-center flex items-center min-h-[600px] overflow-hidden" style="background-image: url('hero-tech.png');">
        <div class="container mx-auto px-8 relative z-10 flex flex-col md:flex-row items-center pt-8">
            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                <h4 class="text-blue-400 font-heading font-medium uppercase tracking-widest mb-3 text-lg" data-animate="fade-up">KHÁM PHÁ</h4>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold mb-3 leading-tight uppercase text-blue-400" data-animate="fade-up" data-delay="1">
                    CÔNG NGHỆ MỚI
                </h1>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-light uppercase tracking-wide text-white">HOÀN THIỆN VẺ ĐẸP TÓC</h2>
            </div>
            <div class="w-full md:w-1/2"></div>
        </div>
    </section>

    <!-- Product Categories Section -->
    <section id="categories" class="py-16 bg-white">
        <div class="container mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto" data-animate="stagger">
                <!-- Category 1 -->
                <div class="relative rounded-xl overflow-hidden h-[29rem] flex flex-col items-center justify-start pt-[22px] group cursor-pointer">
                    <img src="sanpham1.png" alt="Uốn Duỗi" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-transparent"></div>
                    <h3 class="relative z-10 text-[30px] font-heading font-light text-white uppercase tracking-widest">UỐN DUỖI</h3>
                </div>
                <!-- Category 2 -->
                <div class="relative rounded-xl overflow-hidden h-[29rem] flex flex-col items-center justify-start pt-[22px] group cursor-pointer">
                    <img src="sanphamm2.png" alt="Phục Hồi" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-transparent"></div>
                    <h3 class="relative z-10 text-[30px] font-heading font-light text-white uppercase tracking-widest">PHỤC HỒI</h3>
                </div>
                <!-- Category 3 -->
                <div class="relative rounded-xl overflow-hidden h-[29rem] flex flex-col items-center justify-start pt-[22px] group cursor-pointer">
                    <img src="sanpham3.png" alt="Tạo Kiểu" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-transparent"></div>
                    <h3 class="relative z-10 text-[30px] font-heading font-light text-white uppercase tracking-widest">TẠO KIỂU</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Sự Khác Biệt Section -->
    <section id="science" class="py-[50px] overflow-hidden relative" style="background-color: #f5f5f5; background-image: url('sukhacbiet.png'); background-repeat: no-repeat; background-position: right center; background-size: auto 100%;">
        <div class="container mx-auto px-8 relative z-10 flex flex-col lg:flex-row items-center gap-12">
            <!-- Left Text -->
            <div class="w-full lg:w-1/2">
                <h4 class="text-lg text-gray-600 font-heading font-medium uppercase tracking-widest mb-1" data-animate="fade-up">ĐIỂM TẠO NÊN</h4>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-[#1e3a8a] mb-4 uppercase" data-animate="fade-up" data-delay="1">SỰ KHÁC BIỆT</h2>
                <h3 class="text-xl md:text-2xl font-heading text-[#1e3a8a] mb-6 font-light" data-animate="fade-up" data-delay="2">Nền tảng khoa học - chất lượng dẫn đầu</h3>
                <p class="text-base text-gray-500 mb-4 leading-relaxed font-heading">LAVO mang đến giải pháp chuyên sâu cho từng tình trạng tóc, ứng dụng công nghệ tiên tiến nhất cùng nguồn nguyên liệu nhập khẩu châu Âu.</p>
                <p class="text-base text-gray-500 mb-10 leading-relaxed font-heading">Mỗi sản phẩm đều trải qua quá trình nghiên cứu, thử nghiệm lâm sàng khắt khe, cam kết độ an toàn và hiệu quả tối ưu cho người sử dụng.</p>
                <!-- Circular Features -->
                <div class="flex justify-between" data-animate="stagger">
                    <div class="flex flex-col items-center text-center max-w-[200px]">
                        <div class="w-[100px] h-[100px] rounded-full bg-cover bg-center flex items-center justify-center mb-3" style="background-image: url('Asset 6@4x.png');">
                            <span class="text-white text-base font-heading font-bold drop-shadow-md text-center leading-tight">BOND<br>PLEX</span>
                        </div>
                        <div class="w-1/2 h-[5px] bg-[#317cfd] mb-3 self-start"></div>
                        <p class="text-sm text-gray-600 font-heading font-medium leading-relaxed text-left">Công nghệ giúp tái tạo<br>liên kết tóc bị đứt gãy.<br>Bảo vệ cấu trúc tóc<br>trong quá trình:<br>Nhuộm, Tẩy, Uốn, Duỗi</p>
                    </div>
                    <div class="flex flex-col items-center text-center max-w-[200px]">
                        <div class="w-[100px] h-[100px] rounded-full bg-cover bg-center flex items-center justify-center mb-3" style="background-image: url('Asset 6@4x.png');">
                            <span class="text-white text-base font-heading font-bold drop-shadow-md">NANO</span>
                        </div>
                        <div class="w-1/2 h-[5px] bg-[#317cfd] mb-3 self-start"></div>
                        <p class="text-sm text-gray-600 font-heading font-medium leading-relaxed text-left">Công nghệ sử dụng<br>các hoạt chất siêu<br>nhỏ giúp dưỡng chất<br>thẩm thấu sâu hơn<br>vào sợi tóc.</p>
                    </div>
                    <div class="flex flex-col items-center text-center max-w-[200px]">
                        <div class="w-[100px] h-[100px] rounded-full bg-cover bg-center flex items-center justify-center mb-3" style="background-image: url('Asset 6@4x.png');">
                            <span class="text-white text-base font-heading font-bold drop-shadow-md text-center leading-tight">COMPLEX<br>FIBER</span>
                        </div>
                        <div class="w-1/2 h-[5px] bg-[#317cfd] mb-3 self-start"></div>
                        <p class="text-sm text-gray-600 font-heading font-medium leading-relaxed text-left">Công nghệ tái tạo<br>hoặc mô phỏng cấu<br>trúc sợi tóc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Carousel Section -->
    <section id="product-carousel" class="py-12 bg-white relative">
        <div class="container mx-auto px-8">
            <div class="brand-carousel-container">
                <div class="swiper brandProductSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="product-placeholder.png" alt="Sản phẩm con 1" class="w-full h-full object-contain">
                        </div>
                        <div class="swiper-slide">
                            <img src="product-placeholder.png" alt="Sản phẩm con 2" class="w-full h-full object-contain">
                        </div>
                        <div class="swiper-slide">
                            <img src="product-placeholder.png" alt="Sản phẩm con 3" class="w-full h-full object-contain">
                        </div>
                        <div class="swiper-slide">
                            <img src="product-placeholder.png" alt="Sản phẩm con 4" class="w-full h-full object-contain">
                        </div>
                        <div class="swiper-slide">
                            <img src="product-placeholder.png" alt="Sản phẩm con 5" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
                <button class="bp-swiper-prev absolute left-0 z-10 w-8 h-8 bg-white border border-blue-800 text-blue-800 rounded-full flex items-center justify-center hover:bg-blue-50 transition cursor-pointer" style="top:50%;transform:translateY(-50%)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button class="bp-swiper-next absolute right-0 z-10 w-8 h-8 bg-white border border-blue-800 text-blue-800 rounded-full flex items-center justify-center hover:bg-blue-50 transition cursor-pointer" style="top:50%;transform:translateY(-50%)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Hair Models Section -->
    <section id="models" class="py-4 bg-white relative w-full">
        <div class="w-full px-4">
            <div class="relative models-swiper-wrapper">
                <div class="swiper modelsSwiper px-10">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="phunu1.png" alt="Model 1" class="w-full aspect-square object-cover rounded-sm">
                        </div>
                        <div class="swiper-slide">
                            <img src="phunu2.png" alt="Model 2" class="w-full aspect-square object-cover rounded-sm">
                        </div>
                        <div class="swiper-slide">
                            <img src="phunu3.png" alt="Model 3" class="w-full aspect-square object-cover rounded-sm">
                        </div>
                    </div>
                </div>
                <button class="md-swiper-prev absolute left-0 md:left-4 z-10 w-8 h-8 bg-blue-800 text-white rounded-full flex items-center justify-center hover:bg-blue-900 transition cursor-pointer" style="top:50%;transform:translateY(-50%)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button class="md-swiper-next absolute right-0 md:right-4 z-10 w-8 h-8 bg-blue-800 text-white rounded-full flex items-center justify-center hover:bg-blue-900 transition cursor-pointer" style="top:50%;transform:translateY(-50%)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="py-12 bg-[#F0F2F5] border-t border-gray-200">
        <div class="container mx-auto px-8 text-center">
            <h2 class="text-xl md:text-2xl font-heading font-light text-[#1e3a8a] mb-2 uppercase" data-animate="fade-up">TƯ VẤN GIẢI PHÁP CHĂM SÓC TÓC CHUYÊN NGHIỆP</h2>
            <p class="text-sm text-gray-500 mb-6">Đội ngũ chuyên gia Lavo luôn sẵn sàng hỗ trợ kỹ thuật và giải đáp mọi thắc mắc.</p>
            <button class="bg-[#0b162c] text-white px-8 py-2.5 rounded-full font-heading font-bold hover:bg-blue-900 transition shadow-md text-sm uppercase tracking-wide">Liên hệ ngay</button>
        </div>
    </section>

<?php include 'footer.php'; ?>

    <style>
        .brand-carousel-container {
            position: relative;
            padding: 40px 0;
            max-width: 1200px;
            margin: 0 auto;
        }
        .brandProductSwiper .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .brandProductSwiper .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
    <script>
    var brandProductSwiper = new Swiper('.brandProductSwiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        navigation: { nextEl: '.bp-swiper-next', prevEl: '.bp-swiper-prev' },
        breakpoints: { 768: { slidesPerView: 5, spaceBetween: 30 } }
    });
    var modelsSwiper = new Swiper('.modelsSwiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        navigation: { nextEl: '.md-swiper-next', prevEl: '.md-swiper-prev' },
        breakpoints: { 768: { slidesPerView: 3, spaceBetween: 20 } }
    });
    </script>
