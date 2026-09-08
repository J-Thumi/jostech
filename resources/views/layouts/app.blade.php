<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JoSTech | Software Engineering & Digital Solutions, Scalable Web, Mobile, Cloud & AI Solutions')</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <meta name="description" content="Jostech delivers high-performance web applications, backend APIs, microservices, and custom software architecture.">
    <meta name="keywords" content="Jostech, Software Development, Laravel, Web Development, API Integration">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jostech.co.ke/">
    <meta property="og:title" content="Jostech | Software Engineering & Digital Solutions">
    <meta property="og:description" content="High-performance web applications, backend APIs, and custom software solutions.">
    <meta property="og:image" content="https://jostech.co.ke/images/og-cover.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Jostech | Software Engineering & Digital Solutions">
    <meta property="twitter:description" content="High-performance web applications, backend APIs, and custom software solutions.">
    <meta property="twitter:image" content="https://jostech.co.ke/images/og-cover.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Jostech",
        "url": "https://jostech.co.ke",
        "logo": "https://jostech.co.ke/images/logo.png",
        "sameAs": [
            "https://github.com/J-Thumi",
            "https://linkedin.com/in/josphat-thumi-0b0795308"
        ],
        "description": "Software development firm specializing in backend systems, custom web applications, and API integrations."
    }
    </script>
    
    <!-- Tailwind CSS v3 CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: { DEFAULT: '#2563EB', hover: '#1D4ED8', light: '#DBEAFE' },
                        secondary: { DEFAULT: '#10B981', dark: '#059669' },
                        accent: '#06B6D4',
                        dark: '#020617',
                        surface: '#FFFFFF',
                        background: '#F8FAFC',
                        heading: '#0F172A',
                        body: '#475569',
                        muted: '#94A3B8',
                        border: '#E2E8F0',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 6s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 3s infinite',
                        'infinite-scroll': 'infinite-scroll 25s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-12px)' },
                        },
                        'infinite-scroll': {
                            from: { transform: 'translateX(0)' },
                            to: { transform: 'translateX(-50%)' },
                        }
                    }
                }
            }
        }
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        .bg-grid-pattern {
            background-size: 40px 40px;
            background-image: 
                linear-gradient(to right, rgba(15, 23, 42, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(15, 23, 42, 0.05) 1px, transparent 1px);
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        body {
            font-family: 'Inter', sans-serif;
            color: #475569;
            background-color: #FFFFFF;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }
        h1, h2, h3, h4, h5, h6 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .card-hover-effect {
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
        }
        .card-hover-effect:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -10px rgba(15, 23, 42, 0.08);
            border-color: rgba(37, 99, 235, 0.3);
        }
    </style>
</head>
<body class="bg-white text-body antialiased selection:bg-primary selection:text-white" x-data="{ mobileMenuOpen: false }">

    <!-- Background Glows -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute -top-[10%] left-1/2 -translate-x-1/2 w-[1000px] h-[500px] bg-gradient-to-tr from-primary/20 via-accent/15 to-secondary/10 blur-[120px] rounded-full animate-pulse-slow"></div>
        <div class="absolute top-[35%] -left-[10%] w-[500px] h-[500px] bg-primary/10 blur-[100px] rounded-full"></div>
        <div class="absolute top-[65%] -right-[10%] w-[500px] h-[500px] bg-accent/10 blur-[100px] rounded-full"></div>
        <div class="absolute inset-0 bg-grid-pattern opacity-60"></div>
    </div>

    <!-- Navigation Component -->
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Partial -->
    @include('layouts.footer')

    <script>
        lucide.createIcons();
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            gsap.from('.hero-text-container > *', {
                opacity: 0,
                y: 30,
                duration: 0.8,
                stagger: 0.15,
                ease: 'power3.out'
            });

            gsap.from('.hero-dashboard', {
                opacity: 0,
                scale: 0.95,
                y: 20,
                duration: 1,
                delay: 0.3,
                ease: 'power3.out'
            });

            gsap.utils.toArray('.section-title').forEach(title => {
                gsap.from(title, {
                    scrollTrigger: {
                        trigger: title,
                        start: 'top 85%',
                    },
                    opacity: 0,
                    y: 20,
                    duration: 0.6,
                    ease: 'power2.out'
                });
            });
        });
    </script>
</body>
</html>