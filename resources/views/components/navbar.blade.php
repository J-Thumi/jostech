<header class="sticky top-0 z-50 w-full transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4">
        <nav class="glass-panel rounded-2xl px-6 py-3.5 flex items-center justify-between shadow-sm transition-all duration-300 hover:shadow-md">
            
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary via-primary to-accent p-0.5 shadow-md shadow-primary/20 transition-transform group-hover:scale-105">
                    <div class="w-full h-full bg-white rounded-[10px] flex items-center justify-center">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent font-extrabold text-xl tracking-tight">JT</span>
                    </div>
                </div>
                <span class="font-heading font-bold text-xl text-heading tracking-tight">
                    JoS<span class="text-primary">Tech</span>
                </span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('services') }}" class="text-sm font-medium text-heading hover:text-primary transition-colors">Services</a>
                <a href="{{ route('pricing') }}" class="text-sm font-medium text-heading hover:text-primary transition-colors">Pricing</a>
                <a href="{{ route('portfolio') }}" class="text-sm font-medium text-heading hover:text-primary transition-colors">Portfolio</a>
                <a href="{{ route('process') }}" class="text-sm font-medium text-heading hover:text-primary transition-colors">Process</a>
                <a href="{{ route('about') }}" class="text-sm font-medium text-heading hover:text-primary transition-colors">Why Us</a>
                <a href="{{ route('blog.index') }}" class="text-sm font-medium text-heading hover:text-primary transition-colors">Blog</a>
            </div>

            <div class="hidden md:flex items-center gap-4">
                <a href="{{ route('contact') }}" class="text-sm font-semibold text-heading hover:text-primary px-3 py-2 transition-colors">Book a Call</a>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center text-sm font-semibold text-white bg-primary hover:bg-primary-hover px-5 py-2.5 rounded-xl transition-all shadow-md shadow-primary/20 hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-0.5 active:translate-y-0">
                    Start Your Project
                    <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                </a>
            </div>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-heading hover:text-primary focus:outline-none">
                <i data-lucide="menu" x-show="!mobileMenuOpen" class="w-6 h-6"></i>
                <i data-lucide="x" x-show="mobileMenuOpen" class="w-6 h-6" style="display: none;"></i>
            </button>
        </nav>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden max-w-7xl mx-auto px-4 pt-2 pb-4" style="display: none;">
        <div class="glass-panel rounded-2xl p-6 flex flex-col gap-4 shadow-xl">
            <a href="{{ route('services') }}" @click="mobileMenuOpen = false" class="text-base font-medium text-heading hover:text-primary">Services</a>
            <a href="{{ route('pricing') }}" @click="mobileMenuOpen = false" class="text-base font-medium text-heading hover:text-primary">Pricing</a>
            <a href="{{ route('portfolio') }}" @click="mobileMenuOpen = false" class="text-base font-medium text-heading hover:text-primary">Portfolio</a>
            <a href="{{ route('process') }}" @click="mobileMenuOpen = false" class="text-base font-medium text-heading hover:text-primary">Process</a>
            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="text-base font-medium text-heading hover:text-primary">Why Us</a>
            <a href="{{ route('blog.index') }}" @click="mobileMenuOpen = false" class="text-base font-medium text-heading hover:text-primary">Blog</a>
            <hr class="border-border my-1">
            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="w-full text-center text-sm font-semibold text-white bg-primary px-5 py-3 rounded-xl shadow-md">
                Start Your Project
            </a>
        </div>
    </div>
</header>