<?php include 'header.php'; ?>

    <!-- Hero Banner -->
    <section id="hero" class="relative flex items-center min-h-[600px] overflow-hidden bg-cover bg-center" style="background-image: url('hero-img.png');">
        <div class="container mx-auto px-8 relative z-10 flex flex-col md:flex-row items-center">
            <div class="w-full md:w-[55%] mb-8 md:mb-0 pt-10">
                <h1 class="text-5xl md:text-7xl lg:text-[80px] font-heading font-bold mb-6 leading-tight uppercase" data-animate="fade-up">
                    <span class="text-[#0b162c] block mb-2">YOUR STYLE</span>
                    <span class="text-[#1e3a8a] block">OUR PRIDE</span>
                </h1>
                <p class="text-sm md:text-base font-heading font-bold text-gray-500 uppercase tracking-wide" data-animate="fade-up" data-delay="1">PHONG CÁCH CỦA BẠN<br>LÀ NIỀM TỰ HÀO CỦA CHÚNG TÔI</p>
            </div>
            <div class="w-full md:w-[45%] flex justify-end relative h-[300px] md:h-[450px]">
            </div>
        </div>
    </section>

    <!-- Stats Icons Section -->
    <section id="stats" class="py-12 bg-white">
        <div class="container mx-auto px-8">
            <div class="flex flex-wrap justify-center md:justify-between items-center max-w-4xl mx-auto gap-8 text-center text-[#1e3a8a]" data-animate="stagger">
                <div class="flex flex-col items-center">
                    <img src="icon-1.png" alt="Năm kinh nghiệm" class="w-10 h-10 mb-3 object-contain">
                    <h3 class="text-2xl md:text-3xl font-bold font-heading">25+</h3>
                    <p class="text-sm uppercase mt-1 tracking-wider">Năm kinh nghiệm</p>
                </div>
                <div class="hidden md:block w-px h-16 bg-gray-200"></div>
                <div class="flex flex-col items-center">
                    <img src="icon-2.png" alt="Thương hiệu" class="w-10 h-10 mb-3 object-contain">
                    <h3 class="text-2xl md:text-3xl font-bold font-heading">20+</h3>
                    <p class="text-sm uppercase mt-1 tracking-wider">Thương hiệu</p>
                </div>
                <div class="hidden md:block w-px h-16 bg-gray-200"></div>
                <div class="flex flex-col items-center">
                    <img src="icon-3.png" alt="Sản phẩm" class="w-10 h-10 mb-3 object-contain">
                    <h3 class="text-2xl md:text-3xl font-bold font-heading">2000+</h3>
                    <p class="text-sm uppercase mt-1 tracking-wider">Sản phẩm</p>
                </div>
                <div class="hidden md:block w-px h-16 bg-gray-200"></div>
                <div class="flex flex-col items-center">
                    <img src="icon-4.png" alt="Salon Đối Tác" class="w-10 h-10 mb-3 object-contain">
                    <h3 class="text-2xl md:text-3xl font-bold font-heading">500+</h3>
                    <p class="text-sm uppercase mt-1 tracking-wider">Salon Đối Tác</p>
                </div>
                <div class="hidden md:block w-px h-16 bg-gray-200"></div>
                <div class="flex flex-col items-center">
                    <img src="icon-5.png" alt="Chuyên gia" class="w-10 h-10 mb-3 object-contain">
                    <h3 class="text-2xl md:text-3xl font-bold font-heading">200+</h3>
                    <p class="text-sm uppercase mt-1 tracking-wider">Chuyên gia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Carousel Section -->
    <section id="brands-carousel" class="py-12 text-center overflow-x-hidden">
        <h2 class="text-3xl md:text-4xl font-heading font-light text-[#1e3a8a] mb-4 uppercase" data-animate="fade-up">THƯƠNG HIỆU</h2>
        <p class="text-gray-500 text-sm mb-8 mx-auto px-4" data-animate="fade-up" data-delay="1">Khám phá các thương hiệu nổi bật mang lại giải pháp làm đẹp hàng đầu cho mọi nhu cầu chăm sóc tóc.</p>
        
        <div class="brand-carousel-container">
            <!-- Previous Button -->
            <button class="brand-coverflow-prev absolute -left-4 md:-left-[11rem] z-50 w-8 h-8 md:w-10 md:h-10 bg-[#0f2b5b] hover:bg-[#1a3f7a] transition-colors rounded-full flex items-center justify-center text-white focus:outline-none shadow-lg" style="top:50%;transform:translateY(-50%)" aria-label="Previous">
                <svg class="w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </button>

            <div class="swiper brandCoverflowSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="slider (1).png" alt="BOSTAIN" class="w-full h-full object-contain" />
                    </div>
                    <div class="swiper-slide">
                        <img src="slider (2).png" alt="X-PROS" class="w-full h-full object-contain" />
                    </div>
                    <div class="swiper-slide">
                        <img src="slider (3).png" alt="LAVOX" class="w-full h-full object-contain" />
                    </div>
                    <div class="swiper-slide">
                        <img src="slider (4).png" alt="M-PROS" class="w-full h-full object-contain" />
                    </div>
                    <div class="swiper-slide">
                        <img src="slider (5).png" alt="YOURWAY" class="w-full h-full object-contain" />
                    </div>
                </div>
            </div>

            <!-- Next Button -->
            <button class="brand-coverflow-next absolute -right-4 md:-right-[11rem] z-50 w-8 h-8 md:w-10 md:h-10 bg-[#0f2b5b] hover:bg-[#1a3f7a] transition-colors rounded-full flex items-center justify-center text-white focus:outline-none shadow-lg" style="top:50%;transform:translateY(-50%)" aria-label="Next">
                <svg class="w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </section>

    <!-- Product Tech Section -->
    <section id="product-tech" class="py-24 my-[50px] bg-white relative overflow-visible">
        <img src="sanpham-conngnghe.png" alt="" class="absolute left-[-2%] top-1/2 -translate-y-1/2 h-[150%] w-auto max-w-none object-contain z-0 pointer-events-none">
        <div class="container mx-auto px-8 flex justify-end relative z-10">
            <div class="w-full lg:w-[45%] text-center lg:text-right">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-light text-[#1e3a8a] mb-6 uppercase leading-tight" data-animate="fade-up">DẪN ĐẦU CÔNG NGHỆ<br>UỐN - DUỖI - NHUỘM</h2>
                <p class="text-gray-600 mb-8 max-w-md lg:ml-auto" data-animate="fade-up" data-delay="1">Công thức đột phá từ nghiên cứu chuyên sâu, mang đến hiệu quả vượt trội cho khách hàng.</p>
                <button class="bg-[#0b162c] text-white px-8 py-3 rounded-full font-heading font-semibold hover:bg-blue-900 transition shadow-md">Khám phá sản phẩm</button>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section id="solutions" class="py-12 relative bg-cover bg-center" style="background-image: url('dan-dau-congnghe.png');">
        <div class="container mx-auto px-8 relative z-10">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-5xl font-heading font-light mb-8 uppercase leading-tight text-white" data-animate="fade-up">GIẢI PHÁP TOÀN DIỆN<br>CHO MÁI TÓC HOÀN HẢO</h2>
                <div class="flex gap-4 mb-10 overflow-x-auto pb-4">
                    <div class="flex flex-col items-center shrink-0 w-20">
                        <img src="cong-nghe-toc (1).png" alt="Công nghệ tóc 1" class="w-12 h-12 object-contain mb-2">
                        <span class="text-sm uppercase text-center text-white">Tóc khỏe</span>
                    </div>
                    <div class="flex flex-col items-center shrink-0 w-20">
                        <img src="cong-nghe-toc (2).png" alt="Công nghệ tóc 2" class="w-12 h-12 object-contain mb-2">
                        <span class="text-sm uppercase text-center text-white">Tóc gãy rụng</span>
                    </div>
                    <div class="flex flex-col items-center shrink-0 w-20">
                        <img src="cong-nghe-toc (3).png" alt="Công nghệ tóc 3" class="w-12 h-12 object-contain mb-2">
                        <span class="text-sm uppercase text-center text-white">Tóc mỏng</span>
                    </div>
                    <div class="flex flex-col items-center shrink-0 w-20">
                        <img src="cong-nghe-toc (4).png" alt="Công nghệ tóc 4" class="w-12 h-12 object-contain mb-2">
                        <span class="text-sm uppercase text-center text-white">Tóc hư tổn</span>
                    </div>
                    <div class="flex flex-col items-center shrink-0 w-20">
                        <img src="cong-nghe-toc (5).png" alt="Công nghệ tóc 5" class="w-12 h-12 object-contain mb-2">
                        <span class="text-sm uppercase text-center text-white">Dưỡng tóc</span>
                    </div>
                </div>
                <button class="bg-white text-[#0b162c] px-8 py-3 rounded-full font-heading font-semibold hover:bg-gray-200 transition shadow-md">Khám phá giải pháp</button>
            </div>
        </div>
    </section>

    <!-- Technical Video Section -->
    <section id="videos" class="py-12 bg-[#2a2a2a] text-white">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <div class="flex items-center justify-center mb-4">
                <svg class="w-6 h-6 mr-2 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                <h4 class="font-heading font-bold uppercase tracking-widest text-sm">VIDEO YOUTUBE</h4>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-light mb-6 uppercase" data-animate="fade-up">VIDEO KỸ THUẬT</h2>
            <p class="text-gray-300 font-body text-sm mb-16" data-animate="fade-up" data-delay="1">Hệ thống video hướng dẫn kỹ thuật và công thức từ đội ngũ chuyên gia</p>
            
            <div class="relative flex items-center justify-center w-full">
                <button class="absolute left-0 -ml-4 md:-ml-8 lg:-ml-12 z-10 w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-800 hover:bg-gray-200 transition shadow-lg cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>
                
                <div class="grid grid-cols-2 md:grid-cols-5 gap-3 md:gap-4 w-full">
                    <div class="relative group cursor-pointer aspect-[9/16] bg-cover bg-center rounded-xl overflow-hidden shadow-lg transition transform hover:-translate-y-1" style="background-image: url('video1.png');">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-white/80 rounded-full flex items-center justify-center text-gray-800 group-hover:scale-110 transition backdrop-blur-sm">
                                <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="relative group cursor-pointer aspect-[9/16] bg-cover bg-center rounded-xl overflow-hidden shadow-lg transition transform hover:-translate-y-1" style="background-image: url('video2.png');">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-white/80 rounded-full flex items-center justify-center text-gray-800 group-hover:scale-110 transition backdrop-blur-sm">
                                <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="relative group cursor-pointer aspect-[9/16] bg-cover bg-center rounded-xl overflow-hidden shadow-lg transition transform hover:-translate-y-1" style="background-image: url('video3.png');">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-white/80 rounded-full flex items-center justify-center text-gray-800 group-hover:scale-110 transition backdrop-blur-sm">
                                <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="relative group cursor-pointer aspect-[9/16] bg-cover bg-center rounded-xl overflow-hidden shadow-lg transition transform hover:-translate-y-1 hidden md:block" style="background-image: url('video4.png');">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-white/80 rounded-full flex items-center justify-center text-gray-800 group-hover:scale-110 transition backdrop-blur-sm">
                                <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="relative group cursor-pointer aspect-[9/16] bg-cover bg-center rounded-xl overflow-hidden shadow-lg transition transform hover:-translate-y-1 hidden md:block" style="background-image: url('video5.png');">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/30 transition"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 bg-white/80 rounded-full flex items-center justify-center text-gray-800 group-hover:scale-110 transition backdrop-blur-sm">
                                <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="absolute right-0 -mr-4 md:-mr-8 lg:-mr-12 z-10 w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-800 hover:bg-gray-200 transition shadow-lg cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="py-12 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-8 text-center">
            <h2 class="text-xl md:text-2xl font-heading font-light text-[#1e3a8a] mb-8 uppercase" data-animate="fade-up">ĐỐI TÁC & SALON TIÊU BIỂU</h2>
            <div class="flex flex-wrap justify-center items-center gap-6 md:gap-12 opacity-70">
                <div class="w-24 h-24 bg-gray-300 flex items-center justify-center rounded">150px</div>
                <div class="w-24 h-24 bg-gray-300 flex items-center justify-center rounded">150px</div>
                <img src="logo2.png" alt="X-Pros" class="h-8 object-contain">
                <img src="logo1.png" alt="Lavox" class="h-10 object-contain">
                <img src="logo3.png" alt="M-Pros" class="h-8 object-contain">
                <div class="w-24 h-24 bg-gray-300 flex items-center justify-center rounded">150px</div>
                <div class="w-24 h-24 bg-gray-300 flex items-center justify-center rounded">150px</div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>

    <!-- Page-specific styles & scripts for thuong-hieu -->
    <style>
        .brand-carousel-container {
            position: relative;
            padding: 20px 0;
            max-width: 1100px;
            margin: 0 auto;
            overflow: visible;
        }
        .brandCoverflowSwiper {
            overflow: visible !important;
            padding: 40px 0;
            height: 420px;
        }
        .brandCoverflowSwiper .swiper-slide {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 400px;
        }
        .brandCoverflowSwiper .swiper-slide img {
            border-radius: 15px;
            user-select: none;
            -webkit-user-drag: none;
            pointer-events: none;
        }
    </style>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        new Swiper('.brandCoverflowSwiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 3,
            loop: false,
            initialSlide: 2,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: false
            },
            navigation: {
                nextEl: '.brand-coverflow-next',
                prevEl: '.brand-coverflow-prev'
            }
        });
    });
    </script>
