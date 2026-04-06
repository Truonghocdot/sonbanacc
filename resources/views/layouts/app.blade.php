<!DOCTYPE html>
<html lang="vi" class="overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Acc Liên Quân Free Fire - SonBanAcc | Mua Bán Nick Game Uy Tín')</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'SonBanAcc - Acc Liên Quân - Free Fire chuyên bán Acc có Quân Huy/ Kim Cương, Acc Random, Acc Rank Cao, Acc trắng thông tin Liên Quân & Free Fire uy tín. Giá rẻ, giao dịch tự động 24/7, hoa hồng 5% cho người giới thiệu.')">
    <meta name="keywords" content="@yield('keywords', 'Acc Liên Quân - Free Fire, SonBanAcc, Acc có Quân Huy/ Kim Cương, Acc Random, Acc Rank Cao, Acc trắng thông tin, mua acc Liên Quân & Free Fire, shop acc Liên Quân & FF')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#fbcc05">
    <meta name="theme-color" content="#0b1020">
    <!-- Open Graph & Twitter Card -->
    <meta property="og:title" content="@yield('title', 'Acc Liên Quân - Free Fire - SonBanAcc | Mua Acc có Quân Huy/ Kim Cương, Acc Random, Acc Rank Cao Uy Tín')">
    <meta property="og:description" content="@yield('description', 'SonBanAcc - Acc Liên Quân - Free Fire chuyên bán Acc có Quân Huy/ Kim Cương, Acc Random, Acc Rank Cao, Acc trắng thông tin Liên Quân & Free Fire uy tín. Giá rẻ, giao dịch tự động 24/7, hoa hồng 5% cho người giới thiệu.')">
    <meta property="og:type" content="@yield('og:type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og:image', asset('images/og-image.png'))">
    <meta property="og:site_name" content="SonBanAcc - Acc Liên Quân - Free Fire">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Acc Liên Quân - Free Fire - SonBanAcc | Mua Acc có Quân Huy/ Kim Cương, Acc Random, Acc Rank Cao Uy Tín')">
    <meta name="twitter:description" content="@yield('description', 'SonBanAcc - Acc Liên Quân - Free Fire chuyên bán Acc có Quân Huy/ Kim Cương, Acc Random, Acc Rank Cao, Acc trắng thông tin Liên Quân & Free Fire uy tín. Giá rẻ, giao dịch tự động 24/7, hoa hồng 5% cho người giới thiệu.')">
    <meta name="twitter:image" content="@yield('og:image', asset('images/og-image.png'))">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&family=Lexend:wght@300;400;500;600;700&family=Spline+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @stack('styles')

    <!-- Additional Meta Tags -->
    @stack('meta')

    <!-- Google Analytics -->
    @if(config('services.google.analytics_id'))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ config("services.google.analytics_id") }}');
        </script>
    @endif

    <!-- Google AdSense -->
    @if(config('services.google.adsense_id'))
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client={{ config('services.google.adsense_id') }}" crossorigin="anonymous"></script>
    @endif

    <!-- Global Organization Schema -->
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Organization",
            "name": "SonBanAcc - Acc Liên Quân - Free Fire",
            "alternateName": ["SonBanAcc", "Acc Liên Quân - Free Fire"],
            "url": "{{ url('/') }}",
            "logo": "{{ asset('images/logo.png') }}",
            "description": "Shop bán Acc có Quân Huy/ Kim Cương, Acc Random, Acc Rank Cao Liên Quân & Free Fire uy tín nhất Việt Nam",
            "contactPoint": {
                "@@type": "ContactPoint",
                "telephone": "+84986526036",
                "contactType": "Customer Service",
                "availableLanguage": "Vietnamese"
            },
            "sameAs": [
                "https://www.facebook.com/le.vietanh.939173",
                "https://zalo.me/g/srggnce9cbkhfnld1pxr"
            ]
        }
    </script>

    @stack('schema')
</head>

<body class="min-h-screen text-text-primary selection:bg-primary/30 selection:text-white overflow-x-hidden">
    <!-- Esport Background Elements -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="esport-grid"></div>
        <div class="scan-line"></div>
        <div class="gold-orb" style="top: -10%; right: -10%; opacity: 0.6;"></div>
        <div class="gold-orb" style="bottom: -20%; left: -10%; width: 800px; height: 800px; opacity: 0.4;"></div>
    </div>

    <!-- Content Wrapper -->
    <div class="relative z-10">

        <!-- Header -->
        @include('components.header')

        <!-- Order Marquee Banner -->
        @include('components.order-marquee')

        <!-- Main Content -->
        <main class="relative">
            {{ $slot ?? '' }}
            @yield('content')
        </main>

        <!-- Esport Footer Wrapper -->
        <div class="relative mt-20">
            <div class="esport-divider"></div>
            @include('components.footer')
        </div>


        <!-- Floating Action Buttons -->
        <div class="fixed bottom-4 md:bottom-6 right-4 md:right-6 flex flex-col gap-2 md:gap-3 z-50">
            <a href="https://www.facebook.com/profile.php?id=61582181043488" class="w-10 h-10 md:w-12 md:h-12 bg-black-surface border border-gold-primary/20 text-gold-primary rounded-full flex items-center justify-center hover:scale-110 transition shadow-[0_0_15px_rgba(251,204,5,0.2)] hover:bg-gold-primary hover:text-black group">
                <span class="material-icons text-xl md:text-2xl">message</span>
            </a>
            <a href="tel:0327182537" class="w-10 h-10 md:w-12 md:h-12 bg-black-surface border border-gold-primary/20 text-gold-primary rounded-full flex items-center justify-center hover:scale-110 transition shadow-[0_0_15px_rgba(251,204,5,0.2)] hover:bg-gold-primary hover:text-black">
                <span class="material-icons text-xl md:text-2xl">phone</span>
            </a>
            <a href="https://zalo.me/g/srggnce9cbkhfnld1pxr" class="w-10 h-10 md:w-12 md:h-12 bg-black-surface border border-gold-primary/20 rounded-full flex items-center justify-center hover:scale-110 transition shadow-[0_0_15px_rgba(251,204,5,0.2)] p-1">
                <img src="{{ asset('images/zalo.png') }}" alt="Zalo" class="w-full h-full rounded-full grayscale hover:grayscale-0 transition-all" loading="lazy" decoding="async">
            </a>
        </div>

        @livewire('auth.set-transaction-pin')
        @livewire('auth.set-security-question')

        <!-- Popup Modal -->
        @include('components.popup-modal')

        @livewireScripts
    </div> <!-- End Content Wrapper -->

    <script>
        document.addEventListener('mousemove', (e) => {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.01;

            const orbs = document.querySelectorAll('.gold-orb');
            orbs.forEach((orb, index) => {
                const speed = (index + 1) * 2;
                orb.style.transform = `translate(${moveX * speed}px, ${moveY * speed}px)`;
            });
        });
    </script>
    
    @stack('scripts')
</body>

</html>
