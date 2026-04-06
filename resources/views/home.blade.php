@extends('layouts.app')

@section('title', 'Trang chủ - SonBanAcc.com - mua bán tài khoản Liên Quân & Free Fire - Uy tín chất lượng')
@section('description', 'Mua bán tài khoản Liên Quân & Free Fire uy tín, giá rẻ, giao dịch tự động 24/7.')

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .categories-swiper {
        padding: 40px 0 !important;
    }
    .categories-swiper .swiper-wrapper {
        justify-content: center;
    }
    .categories-swiper .swiper-button-next,
    .categories-swiper .swiper-button-prev {
        width: 50px !important;
        height: 50px !important;
        background: rgba(0, 0, 0, 0.8) !important;
        backdrop-filter: blur(8px) !important;
        border: 1px solid var(--color-gold-border) !important;
        border-radius: 12px !important;
        color: var(--color-gold-primary) !important;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
    }
    .categories-swiper .swiper-button-next:after,
    .categories-swiper .swiper-button-prev:after {
        font-size: 16px !important;
        font-weight: 900 !important;
    }
    .categories-swiper .swiper-button-next:hover,
    .categories-swiper .swiper-button-prev:hover {
        background: var(--color-gold-primary) !important;
        border-color: var(--color-gold-primary) !important;
        box-shadow: 0 0 30px rgba(251, 204, 5, 0.3) !important;
        color: #000 !important;
        transform: translateY(-50%) scale(1.1) !important;
    }
    .text-stroke-gold {
         -webkit-text-stroke: 1px var(--color-gold-primary);
         color: transparent;
    }
    .glass-morphism {
        background: rgba(20, 20, 20, 0.7);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
    }
    .categories-swiper.is-static .swiper-button-next,
    .categories-swiper.is-static .swiper-button-prev {
        display: none !important;
    }
</style>
@endpush

@section('content')
<div class="container mx-auto px-4 py-8 relative">
    <!-- Hero Section: Swiper Carousel -->
    <section class="mb-10 md:mb-16 relative lg:mt-6 group">
        <div class="glass-morphism rounded-3xl overflow-hidden shadow-[0_0_50px_rgba(251,204,5,0.1)] border border-gold-border p-2 md:p-3 relative z-10">
            <div class="swiper hero-swiper rounded-2xl overflow-hidden aspect-video md:aspect-[21/9] lg:aspect-[25/9]">
                <div class="swiper-wrapper">
                    @forelse($banners as $banner)
                    <div class="swiper-slide relative">
                        <img src="{{ url('storage/'.$banner->image) }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-r from-black via-black/40 to-transparent"></div>
                        <div class="absolute inset-0 flex flex-col justify-center px-10 md:px-20 lg:px-32">
                            @if($banner->title)
                            <div class="inline-flex items-center gap-2 bg-gold-primary text-black text-[10px] font-black px-4 py-1 rounded-full w-fit mb-6 uppercase tracking-widest animate-fade-in-down">
                                <span class="material-icons text-xs">verified</span>
                                Official Partner
                            </div>
                            <h2 class="text-3xl md:text-5xl lg:text-7xl font-black text-white italic uppercase tracking-tighter mb-4 leading-none">
                                {!! nl2br(e($banner->title)) !!}
                            </h2>
                            @endif
                            
                            @if($banner->subtitle)
                            <p class="text-white/70 text-sm md:text-lg max-w-lg mb-8 font-medium">{{ $banner->subtitle }}</p>
                            @endif

                            @if($banner->url)
                            <a href="{{ $banner->url }}" class="btn-esport py-3 px-8 md:py-4 md:px-12 rounded-xl w-fit group/btn">
                                <span class="font-black text-sm md:text-lg uppercase tracking-widest group-hover/btn:tracking-[0.15em] transition-all">
                                    {{ $banner->button_text ?? 'KHÁM PHÁ NGAY' }}
                                </span>
                            </a>
                            @endif
                        </div>
                    </div>
                    @empty
                    <!-- Fallback Slide if no banners exist -->
                    <div class="swiper-slide relative">
                        <img src="https://lienquan.garena.vn/asset/images/wall-81.jpg" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-r from-black via-black/40 to-transparent"></div>
                        <div class="absolute inset-0 flex flex-col justify-center px-10 md:px-20 lg:px-32">
                            <div class="inline-flex items-center gap-2 bg-gold-primary text-black text-[10px] font-black px-4 py-1 rounded-full w-fit mb-6 uppercase tracking-widest animate-fade-in-down">
                                <span class="material-icons text-xs">verified</span>
                                Official Partner
                            </div>
                            <h2 class="text-3xl md:text-5xl lg:text-7xl font-black text-white italic uppercase tracking-tighter mb-4 leading-none">
                                SIÊU CẤP <br><span class="text-gold-primary drop-shadow-[0_0_20px_rgba(251,204,5,0.5)]">LIÊN QUÂN</span>
                            </h2>
                            <p class="text-white/70 text-sm md:text-lg max-w-lg mb-8 font-medium">Hệ thống cung cấp tài khoản game uy tín số 1 Việt Nam.</p>
                        </div>
                    </div>
                    @endforelse
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next hero-next opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="swiper-button-prev hero-prev opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="swiper-pagination hero-pagination"></div>
            </div>

            <!-- Contact/Status Bar -->
            <div class="flex flex-wrap justify-center md:justify-between items-center gap-6 py-4 px-6 md:px-10 text-white/90 border-t border-gold-border/20">
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-3">
                        <span class="material-icons text-gold-primary text-2xl">history</span>
                        <div class="flex flex-col">
                            <span class="text-[9px] text-text-muted uppercase font-black tracking-widest">Hỗ trợ 24/7</span>
                            <span class="text-sm font-black text-white tracking-widest">0986.526.036</span>
                        </div>
                    </div>
                    <div class="hidden sm:flex items-center gap-3">
                        <span class="material-icons text-gold-primary text-2xl">verified_user</span>
                        <div class="flex flex-col">
                            <span class="text-[9px] text-text-muted uppercase font-black tracking-widest">An Toàn</span>
                            <span class="text-sm font-black text-white tracking-widest uppercase">BẢO HIỂM 100%</span>
                        </div>
                    </div>
                </div>
                
                <a href="https://www.facebook.com/profile.php?id=61582181043488" target="_blank" class="flex items-center gap-3 bg-white/5 hover:bg-gold-primary hover:text-black hover:fill-black text-white px-6 py-2 rounded-full border border-gold-border/40 transition-all group/fb">
                    <span class="material-icons text-xl group-hover/fb:translate-y-[-2px] transition-transform">facebook</span>
                    <span class="font-black text-xs uppercase tracking-widest italic">Sơn Bán Acc</span>
                </a>
            </div>
        </div>

        <!-- Decorative background glow -->
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-gold-primary/10 blur-[150px] rounded-full pointer-events-none"></div>
        <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-gold-primary/10 blur-[150px] rounded-full pointer-events-none animate-pulse"></div>
    </section>

    <!-- Lucky Wheel Banner (Mystery Box replacement) -->
    <section class="mb-10 md:mb-16">
        <a href="{{ route('lucky-wheel.index') }}" class="block group/banner">
            <div class="relative rounded-3xl overflow-hidden border-2 border-gold-primary/30 p-8 md:p-14 bg-black-surface">
                <!-- Background Grid decoration -->
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, var(--color-gold-primary) 1px, transparent 0); background-size: 24px 24px;"></div>
                
                <div class="flex flex-col md:flex-row items-center justify-between gap-8 relative z-10">
                    <div class="flex-1 text-center md:text-left">
                        <div class="inline-block px-4 py-1.5 rounded-full bg-gold-primary/10 border border-gold-primary/30 text-gold-primary text-[10px] md:text-xs font-black uppercase tracking-widest mb-4">
                            Sự kiện đặc biệt
                        </div>
                        <h2 class="text-3xl md:text-6xl font-black mb-4 flex items-center justify-center md:justify-start gap-4 text-white uppercase tracking-tighter italic">
                             VÒNG QUAY <span class="text-stroke-gold">MAY MẮN</span>
                        </h2>
                        <p class="text-text-muted text-sm md:text-xl mb-8 max-w-xl mx-auto md:mx-0 font-medium">
                            Thử thách nhân phẩm, cơ hội nhận ngay Acc <span class="text-gold-primary font-bold">Liên Quân & Free Fire</span> bậc Thách Đấu, skin hiếm cực hot chỉ với một lượt quay!
                        </p>
                        <div class="inline-flex items-center gap-3 btn-esport py-3 px-8 md:py-4 md:px-12 rounded-xl group-hover/banner:scale-105 group-hover/banner:shadow-[0_0_30px_rgba(251,204,5,0.4)] transition-all duration-300">
                            <span class="material-icons">videogame_asset</span> 
                            <span class="font-black text-sm md:text-lg uppercase tracking-widest">QUAY NGAY</span>
                        </div>
                    </div>

                    <div class="relative w-full max-w-[200px] md:max-w-[320px] flex items-center justify-center">
                        <!-- Gaming icon or character could go here, using a stylized icon for now -->
                        <div class="relative">
                            <span class="material-icons text-[150px] md:text-[220px] text-gold-primary/80 drop-shadow-[0_0_40px_rgba(251,204,5,0.5)] animate-float">stars</span>
                            <div class="absolute inset-0 bg-gold-primary/20 blur-[60px] rounded-full -z-10 animate-pulse"></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </section>

    <!-- Top Spenders Section -->
    <section class="mb-12 md:mb-20">
        <div class="max-w-4xl mx-auto">
            @php
            $shopOwner = $topSpenders->firstWhere('id', 3);
            $filteredSpenders = $topSpenders->reject(fn($u) => $u->id == 3)->take(10)->values();
            @endphp

            @if($shopOwner)
            <!-- Shop Owner Section -->
            <div class="mb-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-px flex-1 bg-gold-border"></div>
                    <span class="text-xs md:text-sm font-black text-gold-primary uppercase tracking-[0.4em] px-6">ADMIN UY TÍN</span>
                    <div class="h-px flex-1 bg-gold-border"></div>
                </div>
                <div class="card-esport p-6 md:p-8 flex flex-col md:flex-row items-center gap-6 md:gap-10 relative overflow-hidden group border-gold-primary/40 bg-black-surface shadow-[0_20px_40px_rgba(0,0,0,0.4)]">
                    <div class="shrink-0 w-20 h-20 md:w-24 md:h-24 rounded-2xl bg-linear-to-br from-gold-primary to-amber-700 p-1 shadow-[0_0_30px_rgba(251,204,5,0.3)] transform transition-transform group-hover:scale-110 group-hover:-rotate-3">
                        <div class="w-full h-full rounded-[14px] bg-black flex items-center justify-center overflow-hidden">
                            <span class="text-5xl drop-shadow-lg">👑</span>
                        </div>
                    </div>
                    <div class="flex-1 text-center md:text-left min-w-0">
                        <p class="font-black text-2xl md:text-4xl text-white truncate uppercase tracking-tighter group-hover:text-gold-primary transition-colors mb-2">{{ $shopOwner->name }}</p>
                        <p class="text-xs md:text-sm text-text-muted font-black flex items-center justify-center md:justify-start gap-2 uppercase tracking-widest">
                            <span class="material-icons text-gold-primary text-xl">verified</span>
                            Đã phục vụ hơn {{ $shopOwner->total_orders }} khách hàng
                        </p>
                    </div>
                    <div class="text-center md:text-right">
                        <p class="text-[10px] md:text-xs text-text-muted font-black uppercase tracking-[0.3em] mb-2">QUỸ BẢO HIỂM</p>
                        <p class="font-black text-3xl md:text-5xl text-gold-primary drop-shadow-[0_0_20px_rgba(251,204,5,0.4)]">
                            {{ number_format($shopOwner->total_spent) }}<span class="text-lg md:text-2xl ml-1">đ</span>
                        </p>
                    </div>
                    <!-- Decorative element -->
                    <div class="absolute -top-10 -right-10 opacity-5 text-gold-primary transform rotate-12">
                        <span class="material-icons text-[200px]">security</span>
                    </div>
                </div>
            </div>
            @endif

            <div class="relative">
                <div class="absolute -inset-10 bg-gold-primary/5 blur-[120px] rounded-full pointer-events-none"></div>
                <x-leaderboard :topSpenders="$filteredSpenders" />
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="mb-16 md:mb-24">
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-2xl md:text-4xl font-black text-white uppercase flex items-center gap-4 italic">
                <span class="w-3 h-10 bg-gold-primary skew-x-[-15deg]"></span>
                DANH MỤC GAME
            </h2>
        </div>

        <!-- Desktop Swiper Carousel -->
        <div class="hidden lg:block relative">
            <div class="swiper categories-swiper overflow-visible">
                <div class="swiper-wrapper items-stretch">
                    @forelse($categories as $category)
                    <div class="swiper-slide h-auto flex justify-center">
                        <a href="{{ route('categories.show', $category->slug) }}" class="group card-esport p-2 flex flex-col items-center text-center transition-all hover:translate-y-[-10px] hover:border-gold-primary/60 h-full w-full max-w-sm bg-black-surface border-gold-border rounded-2xl shadow-xl hover:shadow-gold-primary/10">
                            <div class="w-full h-56 mb-5 overflow-hidden rounded-xl relative">
                                <img alt="{{ $category->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" src="{{ url('storage/'.$category->image) ?? 'https://via.placeholder.com/400x300' }}" loading="lazy" decoding="async">
                                <div class="absolute inset-0 bg-linear-to-t from-black via-transparent to-transparent opacity-80"></div>
                                
                                <div class="absolute bottom-4 left-0 right-0 px-4">
                                     <div class="h-1 w-0 group-hover:w-full bg-gold-primary transition-all duration-700 mx-auto"></div>
                                </div>
                            </div>
                            <div class="px-4 pb-6">
                                <h3 class="font-black text-xl mb-3 text-white group-hover:text-gold-primary transition-colors uppercase tracking-tight">
                                    {{ $category->title }}
                                </h3>
                                <p class="text-text-muted text-sm line-clamp-2 font-medium leading-relaxed">{!! strip_tags($category->description) !!}</p>
                            </div>
                        </a>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <!-- Navigation Buttons -->
            <div class="swiper-button-next categories-next"></div>
            <div class="swiper-button-prev categories-prev"></div>
        </div>

        <!-- Mobile Grid View -->
        <div class="lg:hidden grid grid-cols-1 sm:grid-cols-2 gap-6 justify-items-center">
            @forelse($categories as $category)
            <a href="{{ route('categories.show', $category->slug) }}" class="group card-esport p-2 w-full max-w-sm flex flex-col items-center text-center transition-all active:scale-[0.98] bg-black-surface rounded-2xl border-gold-border">
                <div class="w-full h-44 mb-4 overflow-hidden rounded-xl relative">
                    <img alt="{{ $category->title }}" class="w-full h-full object-cover" src="{{ url('storage/'.$category->image) ?? 'https://via.placeholder.com/96' }}" loading="lazy" decoding="async">
                    <div class="absolute inset-0 bg-linear-to-t from-black to-transparent opacity-60"></div>
                </div>
                <div class="px-2 pb-4">
                    <h3 class="font-black text-lg mb-2 text-white group-hover:text-gold-primary transition-colors uppercase tracking-tight">
                        {{ $category->title }}
                    </h3>
                    <p class="text-text-muted text-[11px] line-clamp-1 font-medium">{!! strip_tags($category->description) !!}</p>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center text-neutral-600 p-12 bg-black-surface rounded-2xl border border-gold-border text-sm">Chưa có danh mục nào</div>
            @endforelse
        </div>
    </section>

    <!-- Flash Sale Section -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 relative">
        <h2 class="text-2xl md:text-3xl font-black text-white uppercase flex items-center gap-3 italic">
            <span class="flex items-center justify-center w-10 h-10 rounded-lg bg-gold-primary text-black">
                 <span class="material-icons">bolt</span>
            </span>
            FLASH SALE GIỜ VÀNG
        </h2>
        <a href="{{ route('products.index', ['sort' => 'discount']) }}" class="text-gold-primary hover:text-white font-black text-sm uppercase tracking-widest flex items-center gap-2 transition-all group">
            Xem tất cả <span class="material-icons text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
    </div>

    <!-- Product Grid -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 mb-20 relative">
        @forelse($flashSaleProducts as $product)
        <div class="card-esport group transition-all relative bg-black-surface rounded-2xl overflow-hidden border-gold-border hover:border-gold-primary/50">
            <div class="relative overflow-hidden aspect-video">
                <img alt="{{ $product->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" src="{{ url('storage/'.$product->images[0]) ?? 'https://via.placeholder.com/400x225' }}" loading="lazy" decoding="async">
                @if($product->getDiscountPercent())
                <div class="absolute top-3 right-3 bg-red-600 text-white text-[10px] md:text-xs font-black px-3 py-1.5 rounded-full shadow-[0_0_15px_rgba(220,38,38,0.5)] uppercase italic tracking-tighter">
                    GIẢM {{ number_format($product->getDiscountPercent()) }}%
                </div>
                @endif
                <div class="absolute bottom-3 left-3 bg-black/70 backdrop-blur-md px-3 py-1 rounded-md text-[10px] text-white/80 font-black border border-white/10 tracking-widest uppercase">
                    Mã: #{{ $product->id }}
                </div>
            </div>
            <div class="p-6">
                <h4 class="font-black text-sm md:text-base mb-4 line-clamp-2 h-12 text-white group-hover:text-gold-primary transition-colors leading-tight uppercase tracking-tight">{{ $product->title }}</h4>
                <div class="flex items-end justify-between mb-6">
                    <div class="flex flex-col">
                        @if($product->sell_price)
                        <span class="text-[10px] text-text-muted line-through font-bold">{{ number_format($product->sell_price) }}đ</span>
                        @endif
                        <span class="text-2xl font-black text-gold-primary drop-shadow-[0_0_10px_rgba(251,204,5,0.3)]">{{ number_format($product->getFinalPrice()) }} <span class="text-sm font-bold ml-0.5">đ</span></span>
                    </div>
                </div>
                <a href="{{ route('products.show', $product->slug) }}" class="block w-full py-3.5 rounded-xl bg-linear-to-r from-gold-primary to-amber-600 text-black font-black text-xs md:text-sm text-center uppercase tracking-[0.2em] transition-all hover:shadow-[0_0_25px_rgba(251,204,5,0.4)] active:scale-95">
                    MUA NGAY
                </a>
            </div>
        </div>
        @empty
        <div class="col-span-full bg-black-surface rounded-3xl p-20 text-center border border-gold-border">
            <span class="material-icons text-6xl text-gold-border mb-4">inventory_2</span>
            <p class="text-text-muted font-black uppercase tracking-widest">Đang cập nhật sản phẩm mới...</p>
        </div>
        @endforelse
    </section>

    <!-- News Section -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">
        <h2 class="text-2xl md:text-4xl font-black text-white uppercase flex items-center gap-4 italic tracking-tight">
             <span class="w-3 h-10 bg-gold-primary skew-x-[-15deg]"></span>
             TIN TỨC GAMING
        </h2>
        <a href="{{ route('news.index') }}" class="text-gold-primary hover:text-white font-black text-sm uppercase tracking-widest flex items-center gap-2 transition-all group">
            Tất cả tin tức <span class="material-icons text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
    </div>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20 relative">
        @forelse($latestNews as $news)
        <a href="{{ route('news.show', $news->slug) }}" class="group card-esport overflow-hidden transition-all relative bg-black-surface rounded-2xl border-gold-border hover:border-gold-primary/40 hover:translate-y-[-5px]">
            <div class="relative overflow-hidden aspect-video">
                <img alt="{{ $news->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-1000" src="{{ url('storage/'.$news->thumbnail) ?? 'https://via.placeholder.com/400x225' }}" loading="lazy" decoding="async">
                <div class="absolute inset-0 bg-linear-to-t from-black via-transparent to-transparent opacity-70"></div>
                <div class="absolute top-4 left-4">
                     <span class="bg-gold-primary text-black text-[9px] font-black px-3 py-1 rounded-full uppercase tracking-widest">News</span>
                </div>
            </div>
            <div class="p-6">
                <h4 class="font-black text-base mb-3 line-clamp-2 h-12 text-white group-hover:text-gold-primary transition-colors leading-snug uppercase">{{ $news->title }}</h4>
                <p class="text-text-muted text-xs mb-6 line-clamp-2 font-medium leading-relaxed">{!! Str::limit(strip_tags($news->content), 120) !!}</p>
                <div class="flex items-center justify-between border-t border-gold-border/30 pt-4">
                    <div class="flex items-center gap-2 text-text-muted">
                         <span class="material-icons text-sm">schedule</span>
                         <span class="text-[10px] uppercase font-black tracking-tighter">{{ $news->created_at->format('d/m/Y') }}</span>
                    </div>
                    <span class="text-gold-primary text-[10px] font-black uppercase tracking-widest flex items-center gap-1 group-hover:gap-2 transition-all">
                        Xem chi tiết <span class="material-icons text-sm">arrow_forward</span>
                    </span>
                </div>
            </div>
        </a>
        @empty
        <div class="col-span-full bg-black-surface rounded-3xl border border-gold-border p-16 text-center">
            <p class="text-text-muted font-black uppercase tracking-widest">Đang cập nhật tin tức gaming...</p>
        </div>
        @endforelse
    </section>

</div>
@endsection

@push('schema')
@php
$websiteSchema = [
"@@context" => "https://schema.org",
"@@type" => "WebSite",
"name" => "Shop Acc Liên Quân & Free Fire 24/7 - Giao dịch trung gian - SonBanAcc",
"url" => route('home'),
"potentialAction" => [
"@@type" => "SearchAction",
"target" => route('home') . "?q={search_term_string}",
"query-input" => "required name=search_term_string"
]
];

$orgSchema = [
"@@context" => "https://schema.org",
"@@type" => "Organization",
"name" => "SonBanAcc",
"url" => route('home'),
"logo" => asset('images/logo.png'),
"contactPoint" => [
"@@type" => "ContactPoint",
"telephone" => "0986526036",
"contactType" => "customer service"
],
"sameAs" => [
"https://www.facebook.com/le.vietanh.939173"
]
];
@endphp

<script type="application/ld+json">
    @json($websiteSchema)
</script>
<script type="application/ld+json">
    @json($orgSchema)
</script>
@endpush

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hero Banner Swiper
        var heroSwiper = new Swiper('.hero-swiper', {
            slidesPerView: 1,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.hero-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.hero-next',
                prevEl: '.hero-prev',
            },
        });

        // Categories Swiper
        var categoriesCount = {{ $categories->count() }};
        var shouldLoopCategories = categoriesCount > 4;
        var categoriesSwiperRoot = document.querySelector('.categories-swiper');

        if (categoriesSwiperRoot && !shouldLoopCategories) {
            categoriesSwiperRoot.classList.add('is-static');
        }

        var categoriesSwiper = new Swiper('.categories-swiper', {
            slidesPerView: 4,
            spaceBetween: 16,
            loop: shouldLoopCategories,
            watchOverflow: true,
            centerInsufficientSlides: true,
            autoplay: shouldLoopCategories ? {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            } : false,
            navigation: {
                nextEl: '.categories-next',
                prevEl: '.categories-prev',
            },
            breakpoints: {
                320: { slidesPerView: 1.5, spaceBetween: 15 },
                640: { slidesPerView: 2.5, spaceBetween: 20 },
                1024: { slidesPerView: 4, spaceBetween: 24 }
            }
        });
    });
</script>
@endpush
