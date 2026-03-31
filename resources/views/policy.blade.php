@extends('layouts.app')

@section('title', 'Chính Sách Dịch Vụ - SonBanAcc | Hệ Thống Giao Dịch Acc Uy Tín Số 1')
@section('description', 'Tìm hiểu chính sách bảo mật, quy định giao dịch và chương trình đối tác nhận 5% hoa hồng tại SonBanAcc. Cam kết an toàn, bảo hành trọn đời, hỗ trợ 24/7.')

@push('meta')
<meta name="keywords" content="Chính sách SonBanAcc, bảo mật thông tin, điều khoản mua bán acc, hoa hồng giới thiệu, bảo hành acc liên quân, bảo hành acc free fire">
<meta property="og:title" content="Chính Sách Dịch Vụ - SonBanAcc | Hệ Thống Giao Dịch Acc Uy Tín Số 1">
<meta property="og:description" content="Hệ thống chính sách minh bạch, bảo mật tuyệt đối và chương trình đối tác hấp dẫn tại SonBanAcc.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url('/policy') }}">
<link rel="canonical" href="{{ url('/policy') }}">
@endpush

@push('schema')
<script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FAQPage",
        "mainEntity": [{
                "@@type": "Question",
                "name": "Chương trình đối tác SonBanAcc nhận hoa hồng bao nhiêu?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Bạn sẽ nhận ngay 5% hoa hồng trên mỗi đơn hàng thành công từ người được giới thiệu. Tiền cộng ngay vào ví và có thể sử dụng mua sắm lập tức."
                }
            },
            {
                "@@type": "Question",
                "name": "Tài khoản mua tại SonBanAcc có được bảo hành không?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Tất cả tài khoản đều được bảo hành đổi trả trong 24h nếu sai mô tả và bảo hành trọn đời về vấn đề tranh chấp, sạch 100%."
                }
            }
        ]
    }
</script>
@endpush

@section('content')
<div class="policy-page relative overflow-hidden min-h-screen py-12 md:py-20">
    <!-- Background Decorations -->
    <div class="absolute top-20 left-0 w-64 h-64 bg-gold-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-40 right-0 w-96 h-96 bg-gold-primary/5 blur-[150px] rounded-full pointer-events-none"></div>
    
    <div class="container mx-auto px-4 relative z-10 max-w-5xl">
        <!-- Hero Section -->
        <div class="text-center mb-16 md:mb-24 relative animate-float">
            <div class="inline-block relative">
                <h1 class="text-4xl md:text-7xl font-black text-text-primary uppercase tracking-tighter mb-4 drop-shadow-xl">
                    CHÍNH SÁCH <span class="text-white italic text-neon">DỊCH VỤ</span>
                </h1>
                <div class="flex items-center justify-center gap-4">
                    <div class="h-1 w-12 bg-gold-primary rounded-full"></div>
                    <p class="text-text-muted font-black tracking-[0.2em] uppercase text-[10px] md:text-sm">
                        SonBanAcc Protocol v3.0 • Final Edition
                    </p>
                    <div class="h-1 w-12 bg-gold-primary rounded-full"></div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-12">
            <!-- 1. Partner Program -->
            <section class="relative">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-2xl bg-primary flex items-center justify-center shadow-lg transform -rotate-12">
                        <span class="material-icons text-deep-navy text-3xl font-black">groups</span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-black text-text-primary uppercase tracking-tight">
                        01. CHƯƠNG TRÌNH ĐỐI TÁC <span class="text-primary italic">5%</span>
                    </h2>
                </div>

                <div class="card-esport p-6 md:p-10 border-primary/20 bg-white/10">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <p class="text-text-primary/90 text-lg leading-relaxed mb-6">
                                Trở thành đối tác của <span class="font-black text-primary">SonBanAcc</span> chưa bao giờ dễ dàng hơn. Chia sẻ đam mê và nhận ngay thành quả xứng đáng.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-start gap-3">
                                    <span class="material-icons text-primary mt-1">check_circle</span>
                                    <div>
                                        <p class="font-black text-text-primary">Hoa hồng hấp dẫn</p>
                                        <p class="text-text-muted text-sm font-semibold">Nhận ngay 5% giá trị đơn hàng khi giới thiệu thành công.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="material-icons text-primary mt-1">flash_on</span>
                                    <div>
                                        <p class="font-black text-text-primary">Thanh toán tức thì</p>
                                        <p class="text-text-muted text-sm font-semibold">Tiền cộng vào ví ngay sau khi đơn hàng hoàn tất.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-deep-navy/5 rounded-2xl p-6 border border-primary/10 relative overflow-hidden">
                            <h3 class="font-black text-text-primary uppercase mb-4 text-sm tracking-widest">Quy trình 3 bước:</h3>
                            <ul class="space-y-4 relative z-10">
                                <li class="flex items-center gap-4">
                                    <span class="w-8 h-8 rounded-full bg-primary text-deep-navy font-black flex items-center justify-center text-sm">1</span>
                                    <span class="font-bold text-text-primary">Lấy link tại trang cá nhân</span>
                                </li>
                                <li class="flex items-center gap-4">
                                    <span class="w-8 h-8 rounded-full bg-primary text-deep-navy font-black flex items-center justify-center text-sm">2</span>
                                    <span class="font-bold text-text-primary">Chia sẻ cho bạn bè/cộng đồng</span>
                                </li>
                                <li class="flex items-center gap-4">
                                    <span class="w-8 h-8 rounded-full bg-primary text-deep-navy font-black flex items-center justify-center text-sm">3</span>
                                    <span class="font-bold text-text-primary">Nhận lúa về ví SonBanAcc</span>
                                </li>
                            </ul>
                            <span class="material-icons text-gold-primary/10 absolute -bottom-4 -right-4 text-7xl transform rotate-12">verified</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 2. System Security -->
            <section class="relative">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-2xl bg-secondary flex items-center justify-center shadow-lg transform rotate-12">
                        <span class="material-icons text-white text-3xl font-black">verified_user</span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-black text-text-primary uppercase tracking-tight">
                        02. BẢO MẬT <span class="text-secondary italic">HỆ THỐNG</span>
                    </h2>
                </div>

                <div class="card-esport p-6 md:p-10 border-secondary/20 bg-white/10">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="p-4 rounded-xl bg-secondary/5 border border-secondary/10">
                            <span class="material-icons text-secondary text-4xl mb-3">lock</span>
                            <h4 class="font-black text-text-primary mb-2 uppercase">Mã hóa dữ liệu</h4>
                            <p class="text-text-muted text-xs font-bold leading-relaxed">Mọi thông tin giao dịch được mã hóa SSL/TLS cao cấp nhất, đảm bảo không rò rỉ.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-secondary/5 border border-secondary/10">
                            <span class="material-icons text-secondary text-4xl mb-3">privacy_tip</span>
                            <h4 class="font-black text-text-primary mb-2 uppercase">Quyền riêng tư</h4>
                            <p class="text-text-muted text-xs font-bold leading-relaxed">Chúng tôi cam kết không chia sẻ dữ liệu khách hàng cho bất kỳ bên thứ ba nào.</p>
                        </div>
                        <div class="p-4 rounded-xl bg-secondary/5 border border-secondary/10">
                            <span class="material-icons text-secondary text-4xl mb-3">gpp_good</span>
                            <h4 class="font-black text-text-primary mb-2 uppercase">Giao dịch sạch</h4>
                            <p class="text-text-muted text-xs font-bold leading-relaxed">Tất cả Acc đều được kiểm tra lịch sử nạp và tranh chấp trước khi lên kệ.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 3. Operation Manual -->
            <section class="relative">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-2xl bg-primary flex items-center justify-center shadow-lg transform -rotate-12">
                        <span class="material-icons text-deep-navy text-3xl font-black">shopping_cart</span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-black text-text-primary uppercase tracking-tight">
                        03. QUY ĐỊNH <span class="text-primary italic">GIAO DỊCH</span>
                    </h2>
                </div>

                <div class="card-esport p-6 md:p-10 border-primary/20 bg-white/10">
                    <div class="space-y-8">
                        <div>
                            <h4 class="font-black text-text-primary uppercase mb-4 flex items-center gap-2">
                                <span class="w-1.5 h-4 bg-primary rounded-full"></span> Mua hàng tự động 24/7
                            </h4>
                            <p class="text-text-primary/80 font-semibold leading-relaxed ml-4">
                                Hệ thống của chúng tôi hoạt động hoàn toàn tự động. Sau khi thanh toán thành công, thông tin tài khoản (Tài khoản | Mật khẩu | Code OTP nếu có) sẽ được gửi trực tiếp vào mục <a href="{{ route('user.profile') }}" class="text-primary hover:underline">"Lịch sử mua hàng"</a> của bạn.
                            </p>
                        </div>
                        <div class="grid md:grid-cols-2 gap-8">
                            <div class="glass p-6 rounded-2xl border-white/20">
                                <h5 class="font-black text-text-primary uppercase text-sm mb-4">Các loại Acc cung cấp:</h5>
                                <ul class="space-y-3 text-text-muted text-sm font-bold">
                                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Acc có Quân Huy / Kim Cương</li>
                                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Acc Random Siêu Cấp</li>
                                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Acc Rank Cao, Trắng Thông Tin</li>
                                    <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Acc Game Theo Yêu Cầu</li>
                                </ul>
                            </div>
                            <div class="glass p-6 rounded-2xl border-white/20">
                                <h5 class="font-black text-text-primary uppercase text-sm mb-4">Lưu ý quan trọng:</h5>
                                <p class="text-text-muted text-sm font-bold italic leading-relaxed">
                                    "Khách hàng vui lòng đổi mật khẩu và cập nhật thông tin bảo mật ngay sau khi nhận Acc để đảm bảo quyền sở hữu tuyệt đối."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4. Warranty & Returns -->
            <section class="relative">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-2xl bg-secondary flex items-center justify-center shadow-lg transform rotate-12">
                        <span class="material-icons text-white text-3xl font-black">workspace_premium</span>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-black text-text-primary uppercase tracking-tight">
                        04. BẢO HÀNH & <span class="text-secondary italic">ĐỔI TRẢ</span>
                    </h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="card-esport p-8 border-secondary/20 bg-white/10 hover:border-secondary transition-all">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-icons text-secondary text-3xl">history</span>
                            <h4 class="font-black text-text-primary uppercase">Đổi trả 24h</h4>
                        </div>
                        <p class="text-text-muted font-bold text-sm leading-relaxed mb-4">
                            Hỗ trợ đổi Acc mới hoặc hoàn tiền 100% nếu tài khoản gặp các lỗi sau trong 24h đầu:
                        </p>
                        <ul class="space-y-2 text-text-primary text-sm font-bold">
                            <li class="flex items-center gap-2 text-red-600"><span class="material-icons text-xs">close</span> Sai mật khẩu không đăng nhập được</li>
                            <li class="flex items-center gap-2 text-red-600"><span class="material-icons text-xs">close</span> Thông tin Acc không đúng mô tả</li>
                            <li class="flex items-center gap-2 text-red-600"><span class="material-icons text-xs">close</span> Acc bị khóa (Ban) từ trước khi mua</li>
                        </ul>
                    </div>
                    <div class="card-esport p-8 border-primary/20 bg-white/10 hover:border-primary transition-all">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-icons text-primary text-3xl">verified</span>
                            <h4 class="font-black text-text-primary uppercase">Bảo hành trọn đời</h4>
                        </div>
                        <p class="text-text-muted font-bold text-sm leading-relaxed mb-4">
                            Cam kết đồng hành cùng game thủ trên mọi mặt trận:
                        </p>
                        <ul class="space-y-2 text-text-primary text-sm font-bold">
                            <li class="flex items-center gap-2 text-green-600"><span class="material-icons text-xs">check</span> Bảo hành vĩnh viễn vấn đề tranh chấp</li>
                            <li class="flex items-center gap-2 text-green-600"><span class="material-icons text-xs">check</span> Hỗ trợ lấy lại mật khẩu nếu có SĐT</li>
                            <li class="flex items-center gap-2 text-green-600"><span class="material-icons text-xs">check</span> Tư vấn build đội hình & nâng cấp Acc miễn phí</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <!-- Trust Section -->
        <div class="mt-20 glass rounded-3xl p-8 md:p-12 text-center border-white/20 relative overflow-hidden">
            <div class="absolute -top-10 -left-10 w-40 h-40 bg-primary/10 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-secondary/10 blur-3xl rounded-full"></div>
            
            <h3 class="text-2xl md:text-3xl font-black text-text-primary uppercase mb-8 tracking-tighter">
                KẾT NỐI VỚI <span class="text-primary">CHÚNG TÔI</span>
            </h3>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                <a href="https://zalo.me/g/wilgna867" target="_blank" class="flex flex-col items-center gap-3 p-6 rounded-2xl bg-white/10 hover:bg-primary/20 transition-all group border border-white/10">
                    <img src="{{ asset('images/zalo.png') }}" alt="Zalo" class="w-12 h-12 group-hover:scale-110 transition-transform">
                    <span class="font-black text-text-primary text-xs uppercase tracking-widest">Zalo Group</span>
                </a>
                <a href="https://www.facebook.com/le.vietanh.939173" target="_blank" class="flex flex-col items-center gap-3 p-6 rounded-2xl bg-white/10 hover:bg-primary/20 transition-all group border border-white/10">
                    <span class="material-icons text-secondary text-5xl group-hover:scale-110 transition-transform">facebook</span>
                    <span class="font-black text-text-primary text-xs uppercase tracking-widest">Admin Facebook</span>
                </a>
                <a href="https://discord.gg/akqCugS2" target="_blank" class="flex flex-col items-center gap-3 p-6 rounded-2xl bg-white/10 hover:bg-primary/20 transition-all group border border-white/10">
                    <span class="material-icons text-indigo-500 text-5xl group-hover:scale-110 transition-transform">discord</span>
                    <span class="font-black text-text-primary text-xs uppercase tracking-widest">Discord Server</span>
                </a>
                <div class="flex flex-col items-center gap-3 p-6 rounded-2xl bg-white/10 border border-white/10">
                    <span class="material-icons text-primary text-5xl">support_agent</span>
                    <span class="font-black text-text-primary text-xs uppercase tracking-widest">Hỗ trợ 24/7</span>
                </div>
            </div>
        </div>

        <!-- Final Message -->
        <div class="text-center mt-20 md:mt-32 max-w-3xl mx-auto px-4">
            <span class="material-icons text-primary text-6xl mb-6 animate-bounce">favorite</span>
            <p class="text-2xl md:text-3xl font-black text-text-primary italic leading-tight mb-8">
                "Cảm ơn bạn đã tin tưởng SonBanAcc. Sự hài lòng của bạn là tôn chỉ hoạt động duy nhất của chúng tôi."
            </p>
            <div class="inline-flex items-center gap-4 text-[10px] md:text-xs font-black tracking-[0.4em] text-text-muted uppercase">
                <span class="h-px w-8 md:w-16 bg-primary/40"></span>
                SonBanAcc Protocol Finalized
                <span class="h-px w-8 md:w-16 bg-primary/40"></span>
            </div>
        </div>
    </div>
</div>

<style>
    .policy-page {
        background: linear-gradient(180deg, transparent 0%, rgba(255, 215, 0, 0.05) 100%);
    }
    
    .text-neon {
        text-shadow: 0 0 15px rgba(255, 215, 0, 0.4), 0 0 30px rgba(255, 215, 0, 0.2);
    }

    @media (max-width: 768px) {
        .policy-page h1 {
            line-height: 1.1;
        }
    }
</style>
@endsection
