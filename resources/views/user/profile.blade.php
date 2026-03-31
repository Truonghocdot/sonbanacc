@extends('layouts.app')

@section('title', 'Tài khoản - SonBanAcc | Quản lý & Hoa hồng giới thiệu')
@section('description', 'Quản lý tài khoản SonBanAcc, xem lịch sử mua Acc có Quân Huy/ Kim Cương, Acc Random, theo dõi hoa hồng giới thiệu và số dư ví.')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8" x-data="{ activeTab: 'info' }">
    <!-- Breadcrumb -->
    <x-breadcrumb :items="[
        ['name' => 'Trang chủ', 'url' => route('home')],
        ['name' => 'Tài khoản', 'url' => route('user.profile')]
    ]" />

    @if(session('success'))
    <div class="mb-6 px-6 text-[10px] md:text-xs">
        <div class="p-4 bg-gold-primary/10 border border-gold-primary/20 text-gold-primary rounded-xl flex items-center gap-3 font-black uppercase tracking-widest shadow-lg shadow-gold-primary/5">
            <span class="material-icons text-sm">verified</span>
            {{ session('success') }}
        </div>
    </div>
    @endif

    @if($errors->any())
    <div class="mb-6 px-6 text-[10px] md:text-xs">
        <div class="p-4 bg-red-500/10 border border-red-500/20 text-red-500 rounded-xl font-black uppercase tracking-widest shadow-lg shadow-red-500/5">
            <ul class="space-y-1">
                @foreach($errors->all() as $error)
                <li class="flex items-center gap-2"><span class="w-1 h-1 bg-red-500 rounded-full"></span> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Sidebar -->
        <aside class="w-full lg:w-72 shrink-0">
            <div class="flex flex-col gap-6 sticky top-24">
                <div class="bg-black-surface rounded-2xl border border-gold-border shadow-2xl p-6 relative overflow-hidden">
                    <!-- Background glow -->
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-gold-primary/10 blur-[50px] rounded-full pointer-events-none"></div>

                    <div class="flex items-center gap-4 mb-8 relative z-10">
                        <div class="shrink-0 aspect-square rounded-2xl size-14 border-2 border-gold-primary shadow-[0_0_15px_rgba(251,204,5,0.3)] overflow-hidden bg-black">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVGaTwIrah77vJVAoTY2oc_aYDyOz5LSOrCGtbT5xJGT8vhdJvPOeQhIfBXNGNP1OqlZ6rjdWRwY4Mvx_HLW1et0PwzS_48fJA9OLtGrnJjhVdHO7LwLY3lHSfwiMXSZiJFKYF7iMtWE5zyEJMiCP8WTJyqpKenn1bOSaBIENdAPC8fapysJ-DAqblpdj0C_bv17YfZMqWv_n4NyPWgJumLLYNtr7AUfCnVI5C_5JWL09YXcVEfripuVOhgYaLq2aWga_ajQXo9m-e" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-white text-lg font-black tracking-tighter truncate w-40 italic uppercase">{{ Auth::user()->name }}</h1>
                            <p class="text-gold-primary text-[10px] font-black uppercase tracking-widest flex items-center gap-1.5 mt-1">
                                <span class="w-1.5 h-1.5 bg-gold-primary rounded-full animate-pulse"></span>
                                MEMBER VIP
                            </p>
                        </div>
                    </div>

                    <nav class="flex flex-col gap-3 relative z-10">
                        <button @click="activeTab = 'info'"
                            :class="activeTab === 'info' ? 'bg-gold-primary/10 text-gold-primary border-gold-primary/20 shadow-[0_0_15px_rgba(251,204,5,0.1)]' : 'text-text-muted hover:text-white hover:bg-white/5 border-transparent'"
                            class="flex items-center gap-4 px-4 py-3.5 rounded-2xl border transition-all text-left w-full group cursor-pointer">
                            <span class="material-icons text-[20px] transition-transform group-hover:scale-110">person</span>
                            <p class="text-[11px] font-black uppercase tracking-widest">Thông tin tài khoản</p>
                        </button>
                        <button @click="activeTab = 'orders'"
                            :class="activeTab === 'orders' ? 'bg-gold-primary/10 text-gold-primary border-gold-primary/20 shadow-[0_0_15px_rgba(251,204,5,0.1)]' : 'text-text-muted hover:text-white hover:bg-white/5 border-transparent'"
                            class="flex items-center gap-4 px-4 py-3.5 rounded-2xl border transition-all text-left w-full group cursor-pointer">
                            <span class="material-icons text-[20px] transition-transform group-hover:scale-110">shopping_bag</span>
                            <p class="text-[11px] font-black uppercase tracking-widest">Tài khoản đã mua</p>
                        </button>
                    </nav>

                    <div class="mt-8 pt-8 border-t border-gold-border/40 flex flex-col gap-3 relative z-10">
                        <a href="{{ route('deposit') }}" class="w-full py-4 rounded-xl bg-gold-primary text-black font-black text-[11px] flex items-center justify-center uppercase tracking-widest shadow-lg hover:shadow-gold-primary/30 transition-all active:scale-95 border-none">
                            <span class="material-icons mr-2 text-[20px]">add_circle</span>
                            <span>Nạp tiền ngay</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full flex cursor-pointer items-center justify-center rounded-xl py-4 bg-transparent hover:bg-white/5 text-text-muted hover:text-white transition-all text-[11px] font-black uppercase tracking-widest active:scale-95 border border-gold-border/40">
                                <span class="material-icons mr-2 text-[20px]">logout</span>
                                <span>Đăng xuất</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 min-w-0">
            <div x-show="activeTab === 'info'" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Wallet Info -->
                    <div class="bg-linear-to-br from-gold-primary via-amber-500 to-amber-800 rounded-3xl p-8 text-black shadow-2xl relative overflow-hidden group hover:scale-[1.02] transition-transform duration-500">
                        <!-- Decorative glows -->
                        <div class="absolute -top-20 -right-20 w-40 h-40 bg-white/30 blur-[60px] rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                        <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-white/20 blur-[60px] rounded-full group-hover:scale-150 transition-transform duration-700 delay-100"></div>

                        <div class="flex items-start justify-between mb-10 relative z-10">
                            <div class="size-14 rounded-2xl bg-black/10 backdrop-blur-md flex items-center justify-center border border-black/10 shadow-inner">
                                <span class="material-icons text-3xl">account_balance_wallet</span>
                            </div>
                            <span class="text-[10px] font-black bg-black/10 backdrop-blur-md px-4 py-2 rounded-full border border-black/10 uppercase tracking-[0.2em] shadow-inner italic">E-WALLET</span>
                        </div>
                        <div class="relative z-10">
                            <p class="text-black/60 text-[10px] font-black uppercase tracking-[0.3em] mb-2 pl-1 italic">SỐ DƯ TÀI KHOẢN</p>
                            <h3 class="text-5xl font-black tracking-tighter flex items-baseline gap-2">
                                {{ number_format(Auth::user()->wallet->balance ?? 0) }}
                                <span class="text-lg font-black text-black/40 uppercase">VND</span>
                            </h3>
                        </div>
                    </div>
                </div>

                <livewire:user.profile-info wire:key="profile-info-content" />
            </div>

            <div x-show="activeTab === 'orders'" class="space-y-6" style="display: none;">
                <livewire:user.purchased-products wire:key="purchased-products-content" />
            </div>
        </div>
    </div>
</div>
@endsection