<div class="min-h-screen bg-black overflow-hidden relative">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute -top-20 left-1/2 -translate-x-1/2 w-full h-96 bg-gold-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at 2px 2px, var(--color-gold-primary) 1px, transparent 0); background-size: 32px 32px;"></div>
    </div>

    <div class="container mx-auto px-4 py-8 max-w-3xl relative z-10">
        <div class="text-center mb-8">
            <div class="inline-block px-4 py-1.5 rounded-full bg-gold-primary/10 border border-gold-primary/20 mb-4">
                <span class="text-[10px] font-black text-gold-primary uppercase tracking-[0.3em]">Lucky Wheel {{ date('Y') }}</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white italic tracking-tighter uppercase mb-2">
                VÒNG QUAY <span class="text-gold-primary drop-shadow-[0_0_15px_rgba(251,204,5,0.6)]">MAY MẮN</span>
            </h1>
            <p class="text-neutral-500 font-bold uppercase tracking-widest text-xs">Quay Thưởng • Nhận Quà • Cộng Trực Tiếp Vào Ví</p>
        </div>

        <div class="flex justify-center mb-8">
            <div class="glass px-8 py-4 rounded-3xl border border-white/5 shadow-2xl flex flex-col items-center relative overflow-hidden">
                <p class="text-[9px] font-black text-neutral-500 uppercase tracking-widest mb-1 relative z-10">LƯỢT QUAY CÒN LẠI</p>
                <p class="text-4xl font-black text-white relative z-10 italic">{{ $this->spinsLeft }}</p>
            </div>
        </div>

        <div class="relative mb-8">
            @if (session()->has('error'))
            <div class="mb-4 w-full bg-pink-500/10 border border-pink-500/20 text-pink-500 px-4 py-3 rounded-2xl text-xs font-black uppercase tracking-widest text-center">
                {{ session('error') }}
            </div>
            @endif

            <div class="glass rounded-[2rem] border border-white/10 p-6 bg-black/40 shadow-[0_0_50px_rgba(0,0,0,0.5)]">
                <div class="wheel-stage relative mx-auto">
                    <div class="wheel-pointer">
                        <span class="material-icons text-black text-lg">arrow_drop_down</span>
                    </div>

                    <div id="lucky-wheel" class="lucky-wheel">
                        <div class="wheel-labels">
                            <span style="--i:0">200K</span>
                            <span style="--i:1">100K</span>
                            <span style="--i:2">50K</span>
                            <span style="--i:3">20K</span>
                            <span style="--i:4">10K</span>
                            <span style="--i:5">5K</span>
                            <span style="--i:6">CHÚC BẠN MAY MẮN</span>
                            <span style="--i:7">THỬ LẠI</span>
                        </div>
                        <div class="wheel-center">
                            <span class="material-icons text-gold-primary text-3xl">paid</span>
                        </div>
                    </div>
                </div>

                <p class="text-center text-[10px] font-bold text-neutral-500 uppercase tracking-[0.2em] mt-6">Kim chỉ trên cùng là kết quả nhận thưởng</p>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 relative z-10 px-4 mb-8">
            <button
                wire:click="spin"
                wire:loading.attr="disabled"
                {{ $this->spinsLeft <= 0 ? 'disabled' : '' }}
                {{ $spinning ? 'disabled' : '' }}
                class="group relative w-full max-w-sm py-6 rounded-[2rem] font-black text-white shadow-2xl transition-all transform active:scale-95 disabled:opacity-30 disabled:grayscale overflow-hidden border-none btn-esport">
                <span wire:loading.remove class="flex items-center justify-center gap-3 relative z-10 text-base italic tracking-tighter">
                    <span class="material-icons text-xl">autorenew</span>
                    QUAY NGAY
                </span>
                <span wire:loading class="flex items-center justify-center gap-2 relative z-10">
                    <span class="material-icons animate-spin">sync</span>
                    ĐANG QUAY...
                </span>
            </button>
            <p class="text-[10px] font-bold text-neutral-600 uppercase tracking-[0.3em]">Phần thưởng tối đa 200,000đ</p>
        </div>

        @if($showResult)
        <div class="fixed inset-0 bg-black/90 backdrop-blur-xl flex items-center justify-center z-50 p-6">
            <div class="glass border border-primary/20 rounded-[3rem] p-12 max-w-md w-full shadow-[0_0_80px_rgba(0,255,133,0.2)] text-center relative overflow-hidden">
                <div class="mb-8 relative z-10">
                    <div class="w-32 h-32 bg-primary/20 rounded-full flex items-center justify-center mx-auto shadow-[0_0_30px_rgba(0,255,133,0.3)] animate-pulse">
                        <span class="material-icons text-6xl text-primary drop-shadow-[0_0_10px_rgba(0,255,133,0.5)]">
                            {{ $prizeAmount > 0 ? 'celebration' : 'sentiment_dissatisfied' }}
                        </span>
                    </div>
                </div>

                <h3 class="text-3xl font-black text-white mb-4 italic uppercase tracking-tighter relative z-10">
                    {{ $prizeAmount > 0 ? 'CHÚC MỪNG!' : 'CHƯA TRÚNG!' }}
                </h3>
                <p class="text-primary font-black text-xl mb-8 relative z-10 tracking-tight">{{ $prizeLabel }}</p>

                @if($prizeAmount > 0)
                <div class="bg-white/5 border border-white/5 rounded-2xl p-6 mb-8 relative z-10">
                    <p class="text-[10px] font-black text-neutral-500 uppercase tracking-widest mb-1">SỐ DƯ VÍ HIỆN TẠI</p>
                    <p class="text-3xl font-black text-white italic tracking-tighter">{{ number_format($this->walletBalance) }}đ</p>
                </div>
                @endif

                <button
                    wire:click="resetResult"
                    class="w-full py-4 rounded-2xl bg-white text-black font-black uppercase tracking-widest text-xs hover:bg-primary transition-all active:scale-95 relative z-10 border-none">
                    ĐÓNG
                </button>
            </div>
        </div>
        @endif
    </div>

    <style>
        .wheel-stage {
            width: min(88vw, 430px);
            aspect-ratio: 1 / 1;
        }
        .lucky-wheel {
            width: 100%;
            height: 100%;
            border-radius: 9999px;
            position: relative;
            border: 8px solid rgba(251, 204, 5, 0.35);
            box-shadow: 0 0 30px rgba(251, 204, 5, 0.25), inset 0 0 40px rgba(0, 0, 0, 0.45);
            background:
                conic-gradient(
                    #f59e0b 0deg 45deg,
                    #111827 45deg 90deg,
                    #d97706 90deg 135deg,
                    #1f2937 135deg 180deg,
                    #fbbf24 180deg 225deg,
                    #111827 225deg 270deg,
                    #b45309 270deg 315deg,
                    #1f2937 315deg 360deg
                );
            transform: rotate(0deg);
            transition: transform 4.2s cubic-bezier(.16,.84,.28,1);
        }
        .wheel-labels {
            position: absolute;
            inset: 0;
            border-radius: inherit;
            pointer-events: none;
        }
        .wheel-labels span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: rotate(calc(var(--i) * 45deg + 22.5deg)) translateY(-145px) rotate(90deg);
            transform-origin: center;
            color: #fff;
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .08em;
            text-shadow: 0 2px 6px rgba(0,0,0,.7);
            white-space: nowrap;
        }
        .wheel-center {
            position: absolute;
            inset: 50%;
            width: 88px;
            height: 88px;
            transform: translate(-50%, -50%);
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0b0f16;
            border: 4px solid rgba(251, 204, 5, 0.45);
            box-shadow: inset 0 0 20px rgba(0,0,0,.45);
        }
        .wheel-pointer {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            width: 34px;
            height: 34px;
            border-radius: 9999px;
            background: #fbbf24;
            border: 2px solid #111;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 15px rgba(251, 204, 5, .5);
        }
        @media (max-width: 640px) {
            .wheel-labels span {
                transform: rotate(calc(var(--i) * 45deg + 22.5deg)) translateY(-116px) rotate(90deg);
                font-size: 9px;
            }
            .wheel-center {
                width: 74px;
                height: 74px;
            }
        }
    </style>
</div>

@script
<script>
(() => {
    const wheel = document.getElementById('lucky-wheel');
    if (!wheel) return;

    const prizes = [200000, 100000, 50000, 20000, 10000, 5000, 0, 0];
    const segmentAngle = 360 / prizes.length;
    let currentRotation = 0;

    const normalize = (deg) => ((deg % 360) + 360) % 360;

    const indexByPrize = (amount) => {
        const idx = prizes.indexOf(Number(amount));
        return idx >= 0 ? idx : Math.floor(Math.random() * prizes.length);
    };

    $wire.on('start-lucky-wheel', (payload) => {
        const data = Array.isArray(payload) ? payload[0] : payload;
        const prize = Number(data?.prizeAmount ?? 0);

        const idx = indexByPrize(prize);
        const center = idx * segmentAngle + segmentAngle / 2;
        const targetAtPointerTop = 270 - center;
        const delta = normalize(targetAtPointerTop - normalize(currentRotation));
        const spinTurns = 5 * 360;

        currentRotation += spinTurns + delta;
        wheel.style.transform = `rotate(${currentRotation}deg)`;

        setTimeout(() => {
            @this.set('showResult', true);
            @this.set('spinning', false);
        }, 4300);
    });
})();
</script>
@endscript
