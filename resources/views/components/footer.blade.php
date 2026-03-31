<footer class="relative mt-20 pt-16 pb-8 bg-black border-t border-gold-border overflow-hidden">
    <!-- Decorative background glow -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gold-primary/5 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-gold-primary/5 blur-[100px] rounded-full pointer-events-none"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <!-- About -->
            <div class="space-y-6">
                <div>
                    <a href="{{ route('home') }}" class="group inline-block">
                         <h2 class="text-2xl font-black text-white group-hover:text-gold-primary transition-colors">SonBanAcc</h2>
                    </a>
                </div>
                <p class="text-text-muted text-sm leading-relaxed max-w-sm font-medium">
                    Hệ thống cung cấp tài khoản Liên Quân & Free Fire hàng đầu Việt Nam. Tự động - Uy tín - Giá rẻ.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h5 class="font-black text-xs mb-6 text-white uppercase tracking-[0.3em] flex items-center gap-2">
                    <span class="w-1.5 h-1.5 bg-gold-primary rotate-45"></span>
                    LIÊN KẾT
                </h5>
                <ul class="space-y-3 text-sm text-text-muted">
                    <li><a class="hover:text-gold-primary transition-colors flex items-center gap-2 group" href="{{ route('home') }}">
                            <span class="material-icons text-[10px] group-hover:translate-x-1 transition-transform">arrow_forward_ios</span>
                            Trang chủ
                        </a></li>
                    <li><a class="hover:text-gold-primary transition-colors flex items-center gap-2 group" href="{{ route('products.index') }}">
                            <span class="material-icons text-[10px] group-hover:translate-x-1 transition-transform">arrow_forward_ios</span>
                            Cửa hàng
                        </a></li>
                    <li><a class="hover:text-gold-primary transition-colors flex items-center gap-2 group" href="{{ route('deposit') }}">
                            <span class="material-icons text-[10px] group-hover:translate-x-1 transition-transform">arrow_forward_ios</span>
                            Nạp tiền
                        </a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h5 class="font-black text-xs mb-6 text-white uppercase tracking-[0.3em] flex items-center gap-2">
                    <span class="w-1.5 h-1.5 bg-gold-primary rotate-45"></span>
                    HỖ TRỢ
                </h5>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 group">
                        <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center border border-white/10 group-hover:border-gold-primary/50 transition-colors">
                            <span class="material-icons text-gold-primary text-xl">headset_mic</span>
                        </div>
                        <div>
                            <p class="text-[9px] text-neutral-500 uppercase tracking-widest font-black">Hotline 24/7</p>
                            <p class="text-sm font-bold text-white group-hover:text-gold-primary transition-colors tracking-tight">0986.526.036</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h5 class="font-black text-xs mb-6 text-white uppercase tracking-[0.3em] flex items-center gap-2">
                    <span class="w-1.5 h-1.5 bg-gold-primary rotate-45"></span>
                    FOLLOW US
                </h5>
                <div class="flex gap-3">
                    <a class="w-11 h-11 bg-white/5 hover:bg-gold-primary hover:text-black border border-white/10 text-white rounded-lg flex items-center justify-center transition-all hover:scale-105 shadow-lg group" href="https://www.facebook.com/le.vietanh.939173" aria-label="Facebook">
                        <span class="material-icons">facebook</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center border-t border-gold-border pt-8 mt-12">
            <p class="text-text-muted text-[10px] font-black uppercase tracking-[0.2em] px-4">
                © {{ date('Y') }} <span class="text-gold-primary/80">SonBanAcc.com</span> - <a href="#" class="hover:text-white transition-colors">Gaming Store</a>
            </p>
        </div>
    </div>
</footer>