@extends('layouts.app')

@section('title', 'Mua Acc Liên Quân & Free Fire - Acc Liên Quân - Free Fire | SonBanAcc - Acc có Quân Huy/ Kim Cương, Acc Random')
@section('description', 'Mua Acc có Quân Huy/ Kim Cương, Acc Random, Acc Rank Cao, Acc trắng thông tin tại SonBanAcc. Giá rẻ, uy tín, giao dịch tự động 24/7.')

@section('content')
<div class="container mx-auto px-4 py-8 relative">
    <!-- Breadcrumb -->
    <x-breadcrumb :items="[
        ['name' => 'Trang chủ', 'url' => route('home')],
        ['name' => 'Sản phẩm', 'url' => route('products.index')]
    ]" />

    <div class="mb-12 text-center relative pt-6">
        <!-- Decorative background glow -->
        <div class="absolute -top-20 -left-20 w-64 h-64 bg-gold-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-gold-primary/10 blur-[120px] rounded-full pointer-events-none"></div>

        <h1 class="text-3xl md:text-6xl font-black uppercase tracking-tighter text-white mb-4 flex justify-center items-center gap-4 relative z-10 italic">
            <span class="w-2 h-10 bg-gold-primary skew-x-[-15deg] hidden md:block"></span>
            KHO ACC SIÊU PHẨM
            <span class="w-2 h-10 bg-gold-primary skew-x-[-15deg] hidden md:block"></span>
        </h1>
        <p class="text-text-muted font-black uppercase tracking-[0.4em] text-[10px] md:text-sm">Liên Quân • Free Fire • Giao dịch tự động 24/7</p>
        
        <div class="h-1 w-40 bg-linear-to-r from-transparent via-gold-primary to-transparent mx-auto rounded-full mt-10 opacity-50"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Filter Sidebar -->
        <aside class="lg:col-span-1">
            <div class="bg-black-surface rounded-2xl border border-gold-border shadow-2xl p-6 sticky top-24">
                <h2 class="text-xl font-black mb-8 flex items-center gap-3 text-white uppercase tracking-tight">
                    <span class="material-icons text-gold-primary">tune</span>
                    BỘ LỌC TÌM KIẾM
                </h2>

                <form method="GET" action="{{ route('products.index') }}">
                    <!-- Category Filter -->
                    <div class="mb-6">
                        <label class="block text-[10px] font-black mb-3 text-text-muted uppercase tracking-[0.3em]">Theo Danh mục</label>
                        <select name="category" class="w-full bg-black border border-gold-border focus:border-gold-primary focus:ring-gold-primary/20 rounded-xl px-4 py-3.5 text-text-secondary outline-hidden transition-all text-sm font-bold">
                            <option value="" class="bg-neutral-950">Tất cả game</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }} class="bg-neutral-950">
                                {{ $cat->title }}
                            </option>
                            @if($cat->children->count() > 0)
                            @foreach($cat->children as $child)
                            <option value="{{ $child->id }}" {{ request('category') == $child->id ? 'selected' : '' }} class="bg-neutral-950">
                                &nbsp;&nbsp;&nbsp;↳ {{ $child->title }}
                            </option>
                            @endforeach
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <!-- Price Range -->
                    <div class="mb-6">
                        <label class="block text-[10px] font-black mb-3 text-text-muted uppercase tracking-[0.3em]">Khoảng giá (VNĐ)</label>
                        <div class="flex flex-col gap-3">
                            <input type="number" name="min_price" placeholder="Từ mức giá" value="{{ request('min_price') }}" class="w-full bg-black border border-gold-border focus:border-gold-primary rounded-xl px-4 py-3 text-text-secondary placeholder-text-muted outline-hidden transition-all text-sm font-bold">
                            <input type="number" name="max_price" placeholder="Đến mức giá" value="{{ request('max_price') }}" class="w-full bg-black border border-gold-border focus:border-gold-primary rounded-xl px-4 py-3 text-text-secondary placeholder-text-muted outline-hidden transition-all text-sm font-bold">
                        </div>
                    </div>

                    <!-- Sort -->
                    <div class="mb-10">
                        <label class="block text-[10px] font-black mb-3 text-text-muted uppercase tracking-[0.3em]">Sắp xếp theo</label>
                        <select name="sort" class="w-full bg-black border border-gold-border focus:border-gold-primary rounded-xl px-4 py-3.5 text-text-secondary outline-hidden transition-all text-sm font-bold">
                            <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Mới nhất</option>
                            <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Giá tăng dần</option>
                            <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Giá giảm dần</option>
                            <option value="discount" {{ request('sort') == 'discount' ? 'selected' : '' }}>Khuyến mãi Hot</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-xl bg-gold-primary text-black font-black text-xs uppercase tracking-widest shadow-lg hover:shadow-gold-primary/20 transition-all active:scale-95 border-none cursor-pointer">
                        LỌC KẾT QUẢ
                    </button>
                    <a href="{{ route('products.index') }}" class="block w-full text-center bg-transparent hover:bg-white/5 border border-gold-border text-text-muted hover:text-white px-4 py-4 rounded-xl mt-4 transition-all uppercase tracking-widest text-[10px] font-black">
                        XÓA TẤT CẢ
                    </a>
                </form>
            </div>
        </aside>

        <!-- Products Grid -->
        <div class="lg:col-span-3">
            @if($products->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12">
                @foreach($products as $product)
                <div class="card-esport group transition-all relative bg-black-surface rounded-2xl overflow-hidden border-gold-border hover:border-gold-primary/50">
                    <div class="relative overflow-hidden aspect-video">
                        <img alt="{{ $product->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" src="{{ url('storage/'.$product->images[0]) ?? 'https://via.placeholder.com/400x225' }}" loading="lazy">
                        @if($product->getDiscountPercent())
                        <div class="absolute top-3 right-3 bg-red-600 text-white text-[10px] font-black px-3 py-1.5 rounded-full shadow-lg uppercase italic">
                            {{ number_format($product->getDiscountPercent()) }}% OFF
                        </div>
                        @endif
                        <div class="absolute bottom-3 left-3 bg-black/70 backdrop-blur-md px-3 py-1 rounded-md text-[10px] text-white/80 font-black border border-white/10 tracking-widest uppercase">
                            #{{ $product->id }}
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="font-black text-sm md:text-base mb-4 line-clamp-2 h-12 text-white group-hover:text-gold-primary transition-colors leading-tight uppercase tracking-tight">{{ $product->title }}</h4>
                        <div class="flex flex-col mb-6">
                            @if($product->sell_price)
                            <span class="text-[10px] text-text-muted line-through font-bold">{{ number_format($product->sell_price) }}đ</span>
                            @endif
                            <span class="text-2xl font-black text-gold-primary drop-shadow-[0_0_10px_rgba(251,204,5,0.3)]">{{ number_format($product->getFinalPrice()) }} <span class="text-sm font-bold ml-0.5">đ</span></span>
                        </div>
                        <a href="{{ route('products.show', $product->slug) }}" class="block w-full py-3.5 rounded-xl bg-linear-to-r from-gold-primary to-amber-600 text-black font-black text-xs md:text-sm text-center uppercase tracking-[0.2em] transition-all hover:shadow-[0_0_20px_rgba(251,204,5,0.4)] active:scale-95">
                            CHI TIẾT
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $products->links() }}
            </div>
            @else
            <div class="bg-black-surface rounded-3xl border border-gold-border p-20 text-center">
                <span class="material-icons text-7xl text-gold-border/30 mb-6">search_off</span>
                <p class="text-2xl font-black mb-3 text-white uppercase tracking-tight italic">Opps! Khônng tìm thấy Acc nào</p>
                <p class="text-text-muted font-bold">Hãy thử thay đổi bộ lọc hoặc xem danh mục game khác bạn nhé!</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection