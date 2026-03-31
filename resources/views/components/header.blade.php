<!-- Top Info Bar -->
<div class="bg-black py-1 overflow-hidden whitespace-nowrap border-b border-white/5 relative z-60">
    <div class="animate-marquee flex items-center gap-8">
        <span class="text-primary font-black text-[10px] uppercase tracking-[0.2em] flex items-center gap-2">
            ⚡ HỆ THỐNG MUA BÁN ACC Quân Huy/Kim Cương ONLINE UY TÍN ⚡ GIAO DỊCH TỰ ĐỘNG 24/7 ⚡ HỖ TRỢ NHIỆT TÌNH ⚡ BẢO MẬT TUYỆT ĐỐI ⚡
        </span>
    </div>
</div>

<header class="sticky top-0 z-50 glass border-b border-border shadow-2xl overflow-visible h-[70px] flex items-center">
    <!-- Removed Tet decorative branches and firecrackers -->

    <div class="container mx-auto px-2 md:px-4 py-2 md:py-3 flex items-center justify-between relative z-40">
        <div class="flex items-center gap-8">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group relative py-1">
                <div class="relative shrink-0 w-10 h-10 md:w-12 md:h-12 flex items-center justify-center">
                    <!-- Premium SVG Emblem -->
                    <svg viewBox="0 0 100 100" class="w-full h-full drop-shadow-[0_0_15px_rgba(251,204,5,0.4)] transition-transform duration-500 group-hover:scale-110 group-hover:rotate-[10deg]">
                        <defs>
                            <linearGradient id="goldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#FBCC05;stop-opacity:1" />
                                <stop offset="50%" style="stop-color:#FFF3B0;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#B48A00;stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        <path d="M50 5 L85 25 L85 75 L50 95 L15 75 L15 25 Z" fill="none" stroke="url(#goldGrad)" stroke-width="4" stroke-linejoin="round" />
                        <path d="M50 15 L78 30 L78 70 L50 85 L22 70 L22 30 Z" fill="#0A0A0A" stroke="url(#goldGrad)" stroke-width="1" />
                        <text x="50" y="65" font-family="Outfit, sans-serif" font-weight="900" font-size="38" fill="url(#goldGrad)" text-anchor="middle" style="text-shadow: 0 0 10px rgba(251,204,5,0.5)">S</text>
                    </svg>
                    <!-- Animated Scanline on Icon -->
                    <div class="absolute inset-0 bg-linear-to-b from-transparent via-white/20 to-transparent h-1/2 w-full -translate-y-full group-hover:animate-scanline pointer-events-none"></div>
                </div>
                
                <div class="flex flex-col -gap-1">
                    <span class="text-xl md:text-2xl font-black italic tracking-tighter text-white uppercase leading-none group-hover:text-gold-primary transition-colors">
                        SONBAN<span class="text-gold-primary group-hover:text-white">ACC</span>
                    </span>
                    <span class="text-[8px] md:text-[9px] font-black tracking-[0.4em] text-gold-primary/70 uppercase leading-none mt-1 pl-0.5">PREMIUM ESPORT</span>
                </div>

                <!-- Hover background glow -->
                <div class="absolute -inset-x-4 -inset-y-2 bg-gold-primary/5 blur-2xl rounded-full scale-0 group-hover:scale-100 transition-transform duration-700 opacity-0 group-hover:opacity-100 -z-10"></div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-1">
                @php
                $navItems = [
                ['route' => 'home', 'icon' => 'home', 'label' => 'TRANG CHỦ'],
                ['route' => 'products.index', 'icon' => 'shopping_bag', 'label' => 'CỬA HÀNG'],
                ['route' => 'deposit', 'icon' => 'account_balance_wallet', 'label' => 'NẠP TIỀN'],
                ['route' => 'lucky-wheel.index', 'icon' => 'videogame_asset', 'label' => 'VÒNG QUAY'],
                ['route' => 'news.index', 'icon' => 'newspaper', 'label' => 'TIN TỨC'],
                ['route' => 'policy', 'icon' => 'policy', 'label' => 'CHÍNH SÁCH'],
                ];
                @endphp

                @foreach($navItems as $item)
                <a class="nav-link font-bold flex items-center gap-2 text-text-secondary hover:text-text-primary px-4 py-2 rounded-lg transition-all {{ request()->routeIs($item['route']) ? 'active text-primary bg-white/5' : '' }}" href="{{ route($item['route']) }}">
                    <span class="material-icons text-base">{{ $item['icon'] }}</span>
                    <span class="text-xs tracking-widest">{{ $item['label'] }}</span>
                </a>
                @endforeach
            </nav>
        </div>

        <div class="flex items-center gap-3">
            @auth
            <!-- Balance Display -->
            <div class="flex flex-col items-end px-2 md:px-4 py-1 md:py-2 rounded-lg bg-black-surface border border-gold-border hover:border-gold-primary/50 transition-all group cursor-pointer relative overflow-hidden shadow-inner">
                <span class="hidden md:block text-[9px] text-text-muted uppercase tracking-widest font-black">Số dư</span>
                <span class="text-gold-primary font-black text-sm md:text-lg drop-shadow-[0_0_8px_rgba(251,204,5,0.3)]">
                    {{ number_format(auth()->user()->wallet()->value('balance'), 0, ',', '.') }} <span class="text-[10px] md:text-sm">đ</span>
                </span>
            </div>

            <!-- User Profile -->
            <a href="{{ route('user.profile') }}" class="flex items-center gap-1 md:gap-2 bg-black-surface hover:bg-white/5 px-2 md:px-4 py-1 md:py-2 rounded-lg border border-gold-border cursor-pointer transition-all hover:border-gold-primary/50">
                <span class="material-icons text-gold-primary text-xl md:text-2xl">account_circle</span>
                <div class="flex flex-col">
                    <span class="text-text-primary text-[10px] md:text-[12px] font-bold max-w-[40px] md:max-w-none truncate">{{ auth()->user()->name }}</span>
                    <span class="text-[8px] md:text-[10px] text-text-muted font-black tracking-tighter">ID: {{ auth()->user()->id }}</span>
                </div>
            </a>
@else
            <!-- Login Button -->
            <a href="{{ route('login') }}" class="flex items-center gap-1.5 md:gap-2 btn-esport px-3 md:px-5 py-1.5 md:py-2 rounded-lg font-black transition-all shadow-lg group text-[10px] md:text-xs">
                <span class="material-icons group-hover:rotate-12 transition-transform text-sm md:text-base">login</span>
                <span class="tracking-widest whitespace-nowrap">ĐĂNG NHẬP</span>
            </a>
            @endauth

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-white p-2 rounded-lg bg-white/10 hover:bg-white/20 transition-all border border-white/10">
                <span class="material-icons text-2xl">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-white/5 bg-black/95 backdrop-blur-xl">
        <nav class="container mx-auto px-4 py-4 flex flex-col gap-1">
            @auth
            <!-- Mobile User Info -->
            <div class="p-4 mb-3 rounded-2xl bg-white/5 border border-white/10 shadow-2xl relative overflow-hidden group">
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-gold-primary/10 rounded-full blur-2xl"></div>
                <div class="flex items-center justify-between relative z-10">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-neutral-900 flex items-center justify-center border border-white/10 shadow-inner">
                            <span class="material-icons text-gold-primary text-3xl">account_circle</span>
                        </div>
                        <div>
                            <div class="font-black text-white text-lg tracking-tight">{{ auth()->user()->name }}</div>
                            <div class="text-[10px] text-neutral-600 font-bold uppercase tracking-wider">ID: {{ auth()->user()->id }}</div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-white/5 flex items-center justify-between relative z-10">
                    <div>
                        <div class="text-[9px] text-neutral-600 uppercase font-black tracking-[0.2em]">Ví tài khoản</div>
                        <div class="text-gold-primary font-black text-2xl tracking-tighter drop-shadow-[0_0_8px_rgba(251,204,5,0.4)]">
                            {{ number_format(auth()->user()->wallet()->value('balance'), 0, ',', '.') }}<span class="text-sm ml-1">đ</span>
                        </div>
                    </div>
                    <a href="{{ route('deposit') }}" class="btn-esport px-4 py-2 rounded-xl text-xs uppercase tracking-widest shadow-lg active:scale-95">
                        Nạp ngay
                    </a>
                </div>
            </div>
            @endauth

            @foreach($navItems as $item)
            <a class="flex items-center gap-3 text-white/90 hover:text-white hover:bg-white/10 font-semibold py-3 px-4 rounded-lg transition-all" href="{{ route($item['route']) }}">
                <span class="material-icons text-xl">{{ $item['icon'] }}</span>
                <span class="tracking-wide">{{ $item['label'] }}</span>
                <span class="material-icons ml-auto text-white/40">chevron_right</span>
            </a>
            @endforeach

            @auth
            <a class="flex items-center gap-3 text-white/90 hover:text-white hover:bg-white/10 font-semibold py-3 px-4 rounded-lg transition-all" href="{{ route('user.profile') }}">
                <span class="material-icons text-xl">account_circle</span>
                <span class="tracking-wide">Tài khoản</span>
                <span class="material-icons ml-auto text-white/40">chevron_right</span>
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 text-red-200 hover:text-red-100 hover:bg-white/10 font-semibold py-3 px-4 rounded-lg transition-all">
                    <span class="material-icons text-xl">logout</span>
                    <span class="tracking-wide">Đăng xuất</span>
                    <span class="material-icons ml-auto text-white/40">chevron_right</span>
                </button>
            </form>
            @endauth
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');

                if (!mobileMenu.classList.contains('hidden')) {
                    const menuItems = mobileMenu.querySelectorAll('a');
                    menuItems.forEach((item, index) => {
                        item.style.opacity = '0';
                        item.style.transform = 'translateX(-20px)';
                        setTimeout(() => {
                            item.style.transition = 'all 0.3s ease-out';
                            item.style.opacity = '1';
                            item.style.transform = 'translateX(0)';
                        }, index * 50);
                    });
                }
            });

            document.addEventListener('click', function(event) {
                if (!mobileMenuBtn.contains(event.target) && !mobileMenu.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                }
            });
        }
    });
</script>

<style>
    body {
        overflow-x: hidden;
    }

    .nav-link.active {
        background: rgba(255, 255, 255, 0.05);
        color: var(--color-primary) !important;
    }

    @keyframes scanline {
        0% { transform: translateY(-100%); opacity: 0; }
        50% { opacity: 0.5; }
        100% { transform: translateY(200%); opacity: 0; }
    }

    .animate-scanline {
        animation: scanline 2s cubic-bezier(0.4, 0, 0.2, 1) infinite;
    }
</style>