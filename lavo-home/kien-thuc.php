<?php include 'header.php'; ?>

    <!-- Hero Banner -->
    <section id="hero" class="relative text-white flex items-center min-h-[600px] bg-cover bg-center" style="background-image: url('kien-thuc-hero.png');">
        <div class="container mx-auto px-8 relative z-10 flex flex-col md:flex-row items-center h-full">
            <div class="w-full md:w-1/2 mb-8 md:mb-0 relative z-20">
                <h4 class="text-[#0066FF] font-heading font-bold uppercase mb-2 text-sm md:text-lg" data-animate="fade-up">KIẾN THỨC & ĐÀO TẠO</h4>
                <h1 class="text-4xl md:text-5xl lg:text-[52px] font-heading font-bold mb-4 leading-[1.1] uppercase italic text-white drop-shadow-lg" data-animate="fade-up" data-delay="1">
                    NÂNG TẦM<br>KỸ NĂNG SALON<br>BẰNG NỀN TẢNG<br>KHOA HỌC
                </h1>
            </div>
            <div class="w-full md:w-1/2 md:absolute md:right-0 md:bottom-0 h-[350px] md:h-[650px] flex justify-end items-end z-10 pointer-events-none">
            </div>
        </div>
    </section>

    <!-- Technology Cards -->
    <section id="tech-cards" class="py-16 bg-white">
        <div class="container mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-animate="stagger">
                <div class="group cursor-pointer relative w-full h-[490px] rounded-lg overflow-hidden bg-cover bg-center" style="background-image: url('congnghe1.png');">
                    <div class="absolute top-0 left-0 p-6">
                        <h3 class="text-sm font-heading font-light text-gray-700 uppercase tracking-widest mb-1">CÔNG NGHỆ</h3>
                        <h2 class="text-2xl md:text-3xl font-heading font-light text-gray-800 uppercase">NHUỘM</h2>
                    </div>
                </div>
                <div class="group cursor-pointer relative w-full h-[490px] rounded-lg overflow-hidden bg-cover bg-center" style="background-image: url('congnghe2.png');">
                    <div class="absolute top-0 left-0 p-6">
                        <h3 class="text-sm font-heading font-light text-gray-700 uppercase tracking-widest mb-1">CÔNG NGHỆ</h3>
                        <h2 class="text-2xl md:text-3xl font-heading font-light text-gray-800 uppercase">NHUỘM</h2>
                    </div>
                </div>
                <div class="group cursor-pointer relative w-full h-[490px] rounded-lg overflow-hidden bg-cover bg-center" style="background-image: url('congnghe3.png');">
                    <div class="absolute top-0 left-0 p-6">
                        <h3 class="text-sm font-heading font-light text-gray-700 uppercase tracking-widest mb-1">CÔNG NGHỆ</h3>
                        <h2 class="text-2xl md:text-3xl font-heading font-light text-gray-800 uppercase">PHỤC HỒI</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lavo Academy Section -->
    <section id="academy" class="py-16 relative overflow-hidden bg-cover bg-center" style="background-image: url('toa-nha.png');">
        <div class="absolute inset-0 z-0 bg-white/50"></div>
        
        <div class="container mx-auto px-8 relative z-10">
            <div class="mb-10">
                <h4 class="text-blue-600 font-heading font-bold uppercase tracking-widest mb-2 text-sm" data-animate="fade-up">LAVO ACADEMY</h4>
                <h2 class="text-4xl md:text-5xl font-heading font-light text-[#1e3a8a] mb-4 uppercase" data-animate="fade-up" data-delay="1">HỌC VIỆN LAVOX</h2>
                <p class="text-gray-500 text-sm max-w-xl" data-animate="fade-up" data-delay="2">Khám phá các khóa học đào tạo chuyên nghiệp từ cơ bản đến nâng cao. Phát triển kỹ năng nghề nghiệp cùng đội ngũ chuyên gia hàng đầu.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10 max-w-[50%]" data-animate="stagger">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-[#1e3a8a] hover:shadow-md transition">
                    <h3 class="text-sm font-heading font-bold text-[#1e3a8a] uppercase mb-3 border-b border-[#1e3a8a] pb-2">SALON<br>FOUNDATION</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Khóa học nền tảng cơ bản, trang bị kỹ năng thiết yếu cho người mới bắt đầu.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-[#1e3a8a] hover:shadow-md transition">
                    <h3 class="text-sm font-heading font-bold text-[#1e3a8a] uppercase mb-3 border-b border-[#1e3a8a] pb-2">PROFESSIONAL<br>EXPERT</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Nâng cao tay nghề với các kỹ thuật uốn, duỗi, nhuộm chuyên sâu tại salon.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-[#1e3a8a] hover:shadow-md transition">
                    <h3 class="text-sm font-heading font-bold text-[#1e3a8a] uppercase mb-3 border-b border-[#1e3a8a] pb-2">MASTER<br>STYLIST</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Định hình phong cách cá nhân, sáng tạo nghệ thuật và xu hướng tóc đỉnh cao.</p>
                </div>
            </div>

            <button class="bg-[#1e3a8a] text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-900 transition shadow-md text-sm uppercase tracking-wide">Liên hệ ngay</button>
        </div>
    </section>

    <!-- Video Carousel Section -->
    <section id="videos" class="py-12 bg-[#2a2a2a] text-white">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <div class="flex items-center justify-center mb-4">
                <svg class="w-6 h-6 mr-2 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                <h4 class="font-heading font-bold uppercase tracking-widest text-sm">VIDEO YOUTUBE</h4>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-light mb-6 uppercase" data-animate="fade-up">VIDEO ĐÀO TẠO CHUYÊN SÂU</h2>
            <p class="text-gray-300 font-body text-sm mb-16" data-animate="fade-up" data-delay="1">Hệ thống video hướng dẫn kỹ thuật và công thức từ đội ngũ chuyên gia</p>
            
            <div class="relative flex items-center justify-center w-full">
                <button class="absolute left-0 -ml-4 md:-ml-8 lg:-ml-12 z-10 w-10 h-10 bg-white rounded-full hidden md:flex items-center justify-center text-gray-800 hover:bg-gray-200 transition shadow-lg cursor-pointer">
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
                
                <button class="absolute right-0 -mr-4 md:-mr-8 lg:-mr-12 z-10 w-10 h-10 bg-white rounded-full hidden md:flex items-center justify-center text-gray-800 hover:bg-gray-200 transition shadow-lg cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Schedule/Events Section -->
    <section id="events" class="py-16 bg-[#0b162c] text-white">
        <div class="container mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" data-animate="stagger">
                
                <div class="event-card flex flex-col">
                    <div class="flex items-end mb-4">
                        <span class="text-[6.5rem] font-heading font-light text-blue-400 leading-none mr-2">15</span>
                        <span class="text-[2rem] font-heading font-bold uppercase tracking-widest text-blue-200 mb-1">JUNE<br>2026</span>
                    </div>
                    <h3 class="text-base font-bold uppercase tracking-wide mb-1">WORKSHOP</h3>
                    <p class="text-sm text-gray-400 mb-4 min-h-[3rem]">Kỹ thuật uốn setting chuẩn salon chuyên nghiệp.</p>
                    <div class="flex items-start text-sm text-gray-300 mb-2">
                        <svg class="w-4 h-4 mr-1 shrink-0 mt-0.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Hồ Chí Minh<br>09 Nguyễn Trãi, Q.1</span>
                    </div>
                    <a href="#" class="text-blue-400 text-sm font-bold uppercase tracking-wider hover:text-white transition mt-auto pt-4 flex items-center">
                        ĐĂNG KÝ NGAY
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>

                <div class="event-card flex flex-col">
                    <div class="flex items-end mb-4">
                        <span class="text-[6.5rem] font-heading font-light text-blue-400 leading-none mr-2">22</span>
                        <span class="text-[2rem] font-heading font-bold uppercase tracking-widest text-blue-200 mb-1">JUNE<br>2026</span>
                    </div>
                    <h3 class="text-base font-bold uppercase tracking-wide mb-1">SEMINAR</h3>
                    <p class="text-sm text-gray-400 mb-4 min-h-[3rem]">Xu hướng màu nhuộm thời trang 2026.</p>
                    <div class="flex items-start text-sm text-gray-300 mb-2">
                        <svg class="w-4 h-4 mr-1 shrink-0 mt-0.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Hà Nội<br>15 Đường Thanh Niên</span>
                    </div>
                    <a href="#" class="text-blue-400 text-sm font-bold uppercase tracking-wider hover:text-white transition mt-auto pt-4 flex items-center">
                        ĐĂNG KÝ NGAY
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>

                <div class="event-card flex flex-col">
                    <div class="flex items-end mb-4">
                        <span class="text-[6.5rem] font-heading font-light text-blue-400 leading-none mr-2">05</span>
                        <span class="text-[2rem] font-heading font-bold uppercase tracking-widest text-blue-200 mb-1">JULY<br>2026</span>
                    </div>
                    <h3 class="text-base font-bold uppercase tracking-wide mb-1">MASTER CLASS</h3>
                    <p class="text-sm text-gray-400 mb-4 min-h-[3rem]">Nghệ thuật phục hồi tóc hư tổn chuyên sâu.</p>
                    <div class="flex items-start text-sm text-gray-300 mb-2">
                        <svg class="w-4 h-4 mr-1 shrink-0 mt-0.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Đà Nẵng<br>20 Nguyễn Văn Linh</span>
                    </div>
                    <a href="#" class="text-blue-400 text-sm font-bold uppercase tracking-wider hover:text-white transition mt-auto pt-4 flex items-center">
                        ĐĂNG KÝ NGAY
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>

                <div class="event-card flex flex-col">
                    <div class="flex items-end mb-4">
                        <span class="text-[6.5rem] font-heading font-light text-blue-400 leading-none mr-2">19</span>
                        <span class="text-[2rem] font-heading font-bold uppercase tracking-widest text-blue-200 mb-1">JULY<br>2026</span>
                    </div>
                    <h3 class="text-base font-bold uppercase tracking-wide mb-1">WORKSHOP</h3>
                    <p class="text-sm text-gray-400 mb-4 min-h-[3rem]">Quản lý và vận hành Salon thời 4.0.</p>
                    <div class="flex items-start text-sm text-gray-300 mb-2">
                        <svg class="w-4 h-4 mr-1 shrink-0 mt-0.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Cần Thơ<br>15 Đường 30 Tháng 4</span>
                    </div>
                    <a href="#" class="text-blue-400 text-sm font-bold uppercase tracking-wider hover:text-white transition mt-auto pt-4 flex items-center">
                        ĐĂNG KÝ NGAY
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Trends Section -->
    <section id="trends" class="py-16 bg-[#e5e8ec] relative overflow-hidden bg-contain bg-no-repeat bg-right min-h-screen md:min-h-0" style="background-image: url('xuhuong.png');">
        <!-- Mobile overlay for text readability -->
        <div class="absolute inset-0 bg-white/40 md:bg-transparent z-0 pointer-events-none"></div>

        <div class="container mx-auto px-6 md:px-8 relative z-10 flex flex-col justify-center">
            <!-- Top: Header Section (full width) -->
            <div class="w-full mb-10">
                <div class="flex items-center gap-x-2 sm:gap-x-3 md:gap-x-5 whitespace-nowrap">
                    <div class="flex flex-col text-[#0B1A3A] uppercase tracking-tight">
                        <h2 class="text-lg sm:text-xl md:text-2xl lg:text-[2.5rem] xl:text-[3rem] font-heading font-bold italic !leading-[3rem]" data-animate="fade-up">
                            <span>XU HƯỚNG NỔI BẬT</span><br>
                            MÀU NÂU TÂY LẠNH LÊN NGÔI
                        </h2>
                    </div>
                    <div class="text-[#0B1A3A] font-heading font-extrabold leading-none text-[2.5rem] sm:text-[3rem] md:text-[3.5rem] lg:text-[5.5rem] xl:text-[6.5rem]">
                        2026
                    </div>
                </div>
                <p class="text-gray-600 mt-4 text-sm md:text-base font-heading max-w-lg">Gam màu nâu tây lạnh giúp tôn da, thời thượng và dễ ứng dụng cho mọi phong cách.</p>
                <a href="#" class="inline-flex items-center mt-3 text-[#0F2A60] font-heading font-bold hover:text-blue-700 transition-colors group">
                    <svg class="w-4 h-4 mr-1.5 fill-current transition-transform group-hover:translate-x-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    Đọc Ngay
                </a>
            </div>

            <!-- Bottom: Content Section (50% width on desktop) -->
            <div class="w-full lg:w-[35%] flex flex-col">
                <!-- List Items -->
                <div class="space-y-4 mb-10 w-full" data-animate="stagger">
                    <div class="border border-gray-400 rounded-full px-6 py-4 bg-transparent hover:bg-white/50 cursor-pointer transition duration-300">
                        <p class="text-gray-700 font-heading font-bold text-sm md:text-base uppercase tracking-wide">KỸ THUẬT UỐN SETTING CHUẨN SALON</p>
                        <a href="#" class="inline-flex items-center text-[#0F2A60] font-heading font-bold text-sm hover:text-blue-700 mt-1 group">
                            <svg class="w-3.5 h-3.5 mr-1.5 fill-current transition-transform group-hover:translate-x-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            Đọc ngay
                        </a>
                    </div>
                    <div class="border border-gray-400 rounded-full px-6 py-4 bg-transparent hover:bg-white/50 cursor-pointer transition duration-300">
                        <p class="text-gray-700 font-heading font-bold text-sm md:text-base uppercase tracking-wide">CÔNG THỨC NHUỘM MÀU NÂU TÂY LẠNH</p>
                        <a href="#" class="inline-flex items-center text-[#0F2A60] font-heading font-bold text-sm hover:text-blue-700 mt-1 group">
                            <svg class="w-3.5 h-3.5 mr-1.5 fill-current transition-transform group-hover:translate-x-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            Đọc ngay
                        </a>
                    </div>
                    <div class="border border-gray-400 rounded-full px-6 py-4 bg-transparent hover:bg-white/50 cursor-pointer transition duration-300">
                        <p class="text-gray-700 font-heading font-bold text-sm md:text-base uppercase tracking-wide">PHỤC HỒI CHUYÊN SÂU KERATIN</p>
                        <a href="#" class="inline-flex items-center text-[#0F2A60] font-heading font-bold text-sm hover:text-blue-700 mt-1 group">
                            <svg class="w-3.5 h-3.5 mr-1.5 fill-current transition-transform group-hover:translate-x-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            Đọc ngay
                        </a>
                    </div>
                </div>

                <!-- Community CTA -->
                <div>
                    <h3 class="text-2xl md:text-3xl font-heading font-light text-[#1e3a8a] uppercase mb-2 tracking-wide" data-animate="fade-up">THAM GIA CỘNG ĐỒNG</h3>
                    <p class="text-gray-600 text-sm md:text-base font-heading mb-5">Nâng cao kỹ năng - Cập nhật xu hướng - Phát triển salon bền vững</p>
                    <button class="bg-[#0B1A3A] text-white font-heading font-semibold py-3.5 px-8 rounded-xl hover:bg-[#1a2d5c] hover:shadow-lg transition-all duration-300 uppercase text-sm tracking-wider">Đăng ký đào tạo ngay</button>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>

    <!-- Page-specific styles for kien-thuc -->
    <style>
        .event-card {
            border-left: 1px solid rgba(255,255,255,0.2);
            padding-left: 1.5rem;
        }
        .event-card:first-child {
            border-left: none;
            padding-left: 0;
        }
        @media (max-width: 768px) {
            .event-card {
                border-left: none;
                border-bottom: 1px solid rgba(255,255,255,0.2);
                padding-left: 0;
                padding-bottom: 1.5rem;
                margin-bottom: 1.5rem;
            }
            .event-card:last-child {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0;
            }
        }
    </style>

