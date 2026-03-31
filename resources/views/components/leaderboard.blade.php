@props(['topSpenders'])

<div class="bg-black-surface rounded-xl border border-gold-border shadow-2xl p-4 md:p-6 relative overflow-hidden group">
    <!-- Decorative background glow -->
    <div class="absolute -top-10 -right-10 w-32 h-32 bg-gold-primary/10 blur-3xl rounded-full pointer-events-none transition-all group-hover:bg-gold-primary/20"></div>
    <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-gold-primary/5 blur-3xl rounded-full pointer-events-none transition-all group-hover:bg-gold-primary/10"></div>

    <!-- Header -->
    <div class="flex items-center justify-between mb-4 md:mb-6 relative z-10">
        <div class="flex items-center gap-2 md:gap-3">
            <div class="w-12 h-12 md:w-14 md:h-14 rounded-xl bg-black border border-gold-primary/30 flex items-center justify-center shadow-[0_0_15px_rgba(251,204,5,0.2)]">
                <span class="material-icons text-gold-primary text-3xl md:text-4xl">emoji_events</span>
            </div>
            <div>
                <h3 class="text-lg md:text-xl font-black text-white uppercase tracking-wider italic">Bảng Xếp Hạng</h3>
                <p class="text-[11px] md:text-sm text-text-muted font-bold uppercase tracking-widest">TOP ĐẠI GIA</p>
            </div>
        </div>
    </div>

    @if($topSpenders->isNotEmpty())
    <div class="space-y-2 md:space-y-3">
        @foreach($topSpenders as $index => $user)
        <div class="relative z-10 flex items-center gap-3 md:gap-4 p-2 md:p-3 rounded-lg transition-all {{ $index < 3 ? 'bg-gold-primary/5 border border-gold-primary/20 shadow-[0_0_10px_rgba(251,204,5,0.05)]' : 'bg-white/5 border border-white/5 hover:border-gold-primary/30' }} hover:scale-[1.01] group/item">
            <!-- Rank -->
            <div class="shrink-0 w-10 md:w-12 text-center">
                @if($index === 0)
                <span class="text-3xl md:text-4xl drop-shadow-[0_0_8px_rgba(255,215,0,0.5)]">🥇</span>
                @elseif($index === 1)
                <span class="text-3xl md:text-4xl drop-shadow-[0_0_8px_rgba(192,192,192,0.5)]">🥈</span>
                @elseif($index === 2)
                <span class="text-3xl md:text-4xl drop-shadow-[0_0_8px_rgba(205,127,50,0.5)]">🥉</span>
                @else
                <span class="text-base md:text-xl font-black text-white/20 group-hover/item:text-gold-primary/50 transition-colors italic">#{{ $index + 1 }}</span>
                @endif
            </div>
            <!-- User Info -->
            <div class="flex-1 min-w-0">
                <p class="font-bold text-sm md:text-base {{ $index < 3 ? 'text-text-primary' : 'text-text-secondary' }} truncate group-hover/item:text-primary transition-colors">{{ $user->name }}</p>
                <p class="text-[10px] md:text-xs text-text-muted font-medium">{{ $user->total_orders }} đơn hàng</p>
            </div>

            <!-- Total Spent -->
            <div class="text-right">
                <p class="font-black text-sm md:text-lg {{ $index < 3 ? 'text-gold-primary drop-shadow-[0_0_5px_rgba(251,204,5,0.4)]' : 'text-text-muted' }} italic">
                    {{ number_format($user->total_spent) }}đ
                </p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-4 md:mt-6 pt-3 md:pt-4 border-t border-white/5 text-center">
        <p class="text-[10px] md:text-sm text-neutral-700 font-medium flex items-center justify-center gap-1 italic">
            <span class="material-icons text-sm md:text-base align-middle text-primary/50">info</span>
            Cập nhật mỗi 5 phút
        </p>
    </div>
    @else
    <div class="text-center py-8">
        <span class="material-icons text-gray-300 text-5xl mb-3">leaderboard</span>
        <p class="text-gray-400">Chưa có dữ liệu xếp hạng</p>
    </div>
    @endif
</div>