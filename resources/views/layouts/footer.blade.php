<footer class="bg-dark text-slate-400 relative z-10 pt-16 pb-12 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 pb-12 border-b border-slate-800">
            <div class="md:col-span-5 space-y-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary via-primary to-accent p-0.5">
                        <div class="w-full h-full bg-slate-950 rounded-[10px] flex items-center justify-center">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent font-extrabold text-xl">JT</span>
                        </div>
                    </div>
                    <span class="font-heading font-bold text-xl text-white tracking-tight">
                        JoS<span class="text-primary">Tech</span>
                    </span>
                </a>
                <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                    Engineering scalable web applications, cloud architecture, and AI solutions that accelerate business growth.
                </p>
            </div>

            <div class="md:col-span-2 space-y-3">
                <div class="text-xs font-bold text-white uppercase tracking-wider font-heading">Solutions</div>
                <ul class="space-y-2 text-xs">
                    <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Web Engineering</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Cloud & DevOps</a></li>
                </ul>
            </div>

            <div class="md:col-span-2 space-y-3">
                <div class="text-xs font-bold text-white uppercase tracking-wider font-heading">Company</div>
                <ul class="space-y-2 text-xs">
                    <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Why JoSTech</a></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-white transition-colors">Portfolio</a></li>
                </ul>
            </div>
        </div>
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
            <div>&copy; {{ date('Y') }} JoSTech. All rights reserved.</div>
        </div>
    </div>
</footer>