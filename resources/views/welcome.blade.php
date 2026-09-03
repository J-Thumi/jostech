<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jostech — Josphat Thumi | Laravel Developer & Software Engineer</title>
    <meta name="description" content="Jostech is the personal software engineering brand of Josphat Thumi, a Laravel developer building production web applications, APIs, integrations, and business systems.">
    
    <meta property="og:title" content="Jostech — Josphat Thumi | Laravel Developer & Software Engineer">
    <meta property="og:description" content="Web applications, REST APIs, integrations, and production systems built with a focus on reliability and simplicity.">
    <meta property="og:type" content="website">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <style>
        /* --------------------------------------------------
           CSS DESIGN SYSTEM & VARIABLES
        -------------------------------------------------- */
        :root {
            /* Colors */
            --bg-body: #FAFAFA;
            --bg-surface: #FFFFFF;
            --bg-subtle: #F4F4F5;
            --text-main: #18181B;
            --text-muted: #71717A;
            --border-color: #E4E4E7;
            
            --brand-primary: #09090B;
            --brand-hover: #27272A;
            --accent: #2563EB;
            --accent-soft: #EFF6FF;
            --accent-border: #BFDBFE;
            --success: #059669;
            --success-soft: #ECFDF5;
            
            /* Typography */
            --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
            
            /* Spacing */
            --container-max: 1140px;
            --header-height: 72px;
            --radius-sm: 6px;
            --radius-md: 8px;
            --radius-lg: 12px;
            
            /* Shadows & Effects */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            --transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* Base Resets */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-main);
            font-family: var(--font-sans);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button, input, select, textarea {
            font: inherit;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* Layout & Container */
        .container {
            width: 100%;
            max-width: var(--container-max);
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        main {
            flex: 1;
            padding-top: var(--header-height);
        }

        .section {
            padding: 5rem 0;
            border-bottom: 1px solid var(--border-color);
        }

        .section-alt {
            background-color: var(--bg-surface);
        }

        /* Header Navigation */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: var(--header-height);
            background-color: rgba(250, 250, 250, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border-color);
            z-index: 1000;
            display: flex;
            align-items: center;
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: -0.025em;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-mark {
            width: 24px;
            height: 24px;
            background-color: var(--brand-primary);
            color: white;
            border-radius: var(--radius-sm);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
            font-weight: 800;
        }

        .nav-desktop {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-link {
            font-size: 0.9375rem;
            font-weight: 500;
            color: var(--text-muted);
            transition: var(--transition);
        }

        .nav-link:hover, .nav-link.active {
            color: var(--text-main);
        }

        .nav-link.active {
            font-weight: 600;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            color: var(--text-main);
        }

        .mobile-nav {
            display: none;
            position: fixed;
            top: var(--header-height);
            left: 0;
            right: 0;
            background-color: var(--bg-surface);
            border-bottom: 1px solid var(--border-color);
            padding: 1.5rem;
            flex-direction: column;
            gap: 1.25rem;
            box-shadow: var(--shadow-md);
            z-index: 999;
        }

        .mobile-nav.is-open {
            display: flex;
        }

        /* Typography Scaffolding */
        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-family: var(--font-mono);
            font-size: 0.8125rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background-color: var(--success);
            border-radius: 50%;
            display: inline-block;
        }

        .heading-xl {
            font-size: clamp(2.25rem, 5vw, 3.75rem);
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -0.03em;
            color: var(--text-main);
            margin-bottom: 1.5rem;
        }

        .heading-lg {
            font-size: clamp(1.75rem, 3vw, 2.25rem);
            font-weight: 700;
            line-height: 1.25;
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
        }

        .heading-md {
            font-size: 1.25rem;
            font-weight: 600;
            letter-spacing: -0.01em;
            margin-bottom: 0.5rem;
        }

        .lead {
            font-size: 1.125rem;
            color: var(--text-muted);
            max-width: 680px;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .text-sm {
            font-size: 0.875rem;
            color: var(--text-muted);
        }

        /* UI Components */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.25rem;
            font-size: 0.9375rem;
            font-weight: 600;
            border-radius: var(--radius-md);
            transition: var(--transition);
            cursor: pointer;
            border: 1px solid transparent;
            white-space: nowrap;
        }

        .btn-primary {
            background-color: var(--brand-primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--brand-hover);
            transform: translateY(-1px);
        }

        .btn-secondary {
            background-color: var(--bg-surface);
            color: var(--text-main);
            border-color: var(--border-color);
        }

        .btn-secondary:hover {
            background-color: var(--bg-subtle);
            border-color: #D4D4D8;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.625rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
            background-color: var(--bg-subtle);
            color: var(--text-main);
            border: 1px solid var(--border-color);
        }

        .badge-accent {
            background-color: var(--accent-soft);
            color: var(--accent);
            border-color: var(--accent-border);
        }

        /* Grid Framework */
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        /* Cards */
        .card {
            background-color: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 1.75rem;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            border-color: #A1A1AA;
            box-shadow: var(--shadow-md);
        }

        /* Page Routing Display */
        .page {
            display: none;
        }

        .page.active {
            display: block;
        }

        /* Section Components */
        .trust-bar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 1.5rem 3rem;
            padding: 1.5rem 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            margin-top: 3rem;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-muted);
        }

        /* Project Card */
        .project-card {
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .project-preview {
            width: 100%;
            height: 200px;
            background-color: var(--bg-subtle);
            border-radius: var(--radius-md);
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px dashed var(--border-color);
            color: var(--text-muted);
            font-family: var(--font-mono);
            font-size: 0.875rem;
        }

        .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 1rem 0;
        }

        /* Forms */
        .form-group {
            margin-bottom: 1.25rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-main);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-color);
            background-color: var(--bg-surface);
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--brand-primary);
            box-shadow: 0 0 0 2px rgba(9, 9, 11, 0.1);
        }

        /* Process Steps */
        .process-step {
            position: relative;
            padding-left: 2.5rem;
        }

        .process-number {
            position: absolute;
            left: 0;
            top: 0;
            font-family: var(--font-mono);
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-muted);
        }

        /* Footer */
        .footer {
            background-color: var(--bg-surface);
            border-top: 1px solid var(--border-color);
            padding: 4rem 0 2rem 0;
            margin-top: auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-col-title {
            font-size: 0.875rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1.25rem;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .footer-links a {
            color: var(--text-muted);
            font-size: 0.9375rem;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--text-main);
        }

        .footer-bottom {
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.875rem;
            color: var(--text-muted);
        }

        /* Case Study Styles */
        .case-study-header {
            padding: 3rem 0;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 3rem;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-bottom: 1.5rem;
        }

        /* Responsive Breakpoints */
        @media (max-width: 900px) {
            .grid-4, .grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 640px) {
            .grid-2, .grid-3, .grid-4 {
                grid-template-columns: 1fr;
            }
            .nav-desktop {
                display: none;
            }
            .mobile-menu-btn {
                display: block;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .footer-bottom {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="container header-inner">
            <a href="#home" class="logo" id="nav-logo">
                <span class="logo-mark">J</span>
                Jostech
            </a>

            <nav class="nav-desktop">
                <a href="#home" class="nav-link">Home</a>
                <a href="#work" class="nav-link">Work</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#contact" class="nav-link">Contact</a>
            </nav>

            <div class="header-actions">
                <a href="#contact" class="btn btn-primary" id="btn-header-cta">Start a Project</a>
                <button class="mobile-menu-btn" id="mobile-toggle" aria-label="Toggle Navigation Menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg>
                </button>
            </div>
        </div>
    </header>

    <nav class="mobile-nav" id="mobile-menu">
        <a href="#home" class="nav-link">Home</a>
        <a href="#work" class="nav-link">Work</a>
        <a href="#services" class="nav-link">Services</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#contact" class="nav-link">Contact</a>
        <a href="#contact" class="btn btn-primary" style="text-align: center;">Start a Project</a>
    </nav>

    <main>

        <section id="page-home" class="page">
            <div class="section">
                <div class="container">
                    <div class="eyebrow">
                        <span class="status-dot"></span>
                        JOSTECH · SOFTWARE DEVELOPMENT
                    </div>
                    <h1 class="heading-xl">I build software that solves real problems.</h1>
                    <p class="lead">
                        I’m Josphat Thumi, a Laravel developer and software engineer focused on building web applications, APIs, business system integrations, and reliable production environments.
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#contact" class="btn btn-primary" id="start-project-hero">Start a Project</a>
                        <a href="#work" class="btn btn-secondary" id="view-work-hero">View My Work</a>
                    </div>

                    <div class="trust-bar">
                        <div class="trust-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Laravel & PHP Engineering
                        </div>
                        <div class="trust-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            API & Webhook Integrations
                        </div>
                        <div class="trust-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Docker & Infrastructure
                        </div>
                        <div class="trust-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Business Automation
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-alt">
                <div class="container">
                    <div class="eyebrow">THE APPROACH</div>
                    <h2 class="heading-lg">Technology is only useful when it solves the right problem.</h2>
                    <p class="lead" style="margin-bottom: 3rem;">I help businesses turn operational complexity into clear, maintainable software systems.</p>

                    <div class="grid-3">
                        <div class="card">
                            <span class="badge" style="width: fit-content; margin-bottom: 1rem;">01</span>
                            <h3 class="heading-md">Need a business system?</h3>
                            <p class="text-sm">Replace spreadsheets and fragmented manual workflows with a reliable web application designed around how your business actually operates.</p>
                        </div>
                        <div class="card">
                            <span class="badge" style="width: fit-content; margin-bottom: 1rem;">02</span>
                            <h3 class="heading-md">Need systems connected?</h3>
                            <p class="text-sm">Connect your software directly to M-Pesa payments, WhatsApp messaging, accounting platforms, or third-party REST APIs.</p>
                        </div>
                        <div class="card">
                            <span class="badge" style="width: fit-content; margin-bottom: 1rem;">03</span>
                            <h3 class="heading-md">Need something fixed?</h3>
                            <p class="text-sm">Audit, refactor, and modernize an existing application instead of starting from scratch, restoring performance and maintainability.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="container">
                    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2.5rem; flex-wrap: wrap; gap: 1rem;">
                        <div>
                            <div class="eyebrow">PORTFOLIO</div>
                            <h2 class="heading-lg" style="margin: 0;">Selected Projects</h2>
                        </div>
                        <a href="#work" class="btn btn-secondary">View All Projects →</a>
                    </div>

                    <div class="grid-2">
                        <div class="card project-card">
                            <div>
                                <div class="project-preview">[ CribSearch Web Application Interface ]</div>
                                <span class="badge badge-accent" style="margin-bottom: 0.5rem;">Web Platform</span>
                                <h3 class="heading-md">CribSearch</h3>
                                <p class="text-sm">Student accommodation discovery platform helping students evaluate housing with structured listings and virtual tours.</p>
                                <div class="tag-list">
                                    <span class="badge">Laravel</span>
                                    <span class="badge">Filament</span>
                                    <span class="badge">Docker</span>
                                </div>
                            </div>
                            <a href="#work/cribsearch" class="btn btn-secondary" style="margin-top: 1rem;">View Case Study →</a>
                        </div>

                        <div class="card project-card">
                            <div>
                                <div class="project-preview">[ Farm2Fork Architecture Diagram ]</div>
                                <span class="badge" style="margin-bottom: 0.5rem;">Research / Blockchain</span>
                                <h3 class="heading-md">Farm2Fork</h3>
                                <p class="text-sm">Decentralized supply chain traceability protocol developed to log immutable transit verification for agricultural produce.</p>
                                <div class="tag-list">
                                    <span class="badge">Solidity</span>
                                    <span class="badge">The Graph</span>
                                    <span class="badge">IPFS</span>
                                </div>
                            </div>
                            <a href="#work/farm2fork" class="btn btn-secondary" style="margin-top: 1rem;">View Research Case →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-alt">
                <div class="container">
                    <div class="eyebrow">CAPABILITIES</div>
                    <h2 class="heading-lg">Software built around your business requirements.</h2>
                    <p class="lead">Focusing on robust backend engineering, integration design, and maintainable software architecture.</p>

                    <div class="grid-3" style="margin-top: 2rem;">
                        <div class="card">
                            <h3 class="heading-md">Web Applications</h3>
                            <p class="text-sm">Custom admin panels, portals, tools, and SaaS backends built with Laravel and responsive modern frontends.</p>
                        </div>
                        <div class="card">
                            <h3 class="heading-md">API & Integrations</h3>
                            <p class="text-sm">Connecting platforms using REST APIs, webhooks, and retry logic for platforms like M-Pesa, WhatsApp, eTIMS, and QuickBooks.</p>
                        </div>
                        <div class="card">
                            <h3 class="heading-md">DevOps & Deployment</h3>
                            <p class="text-sm">Containerized setups using Docker, Linux server configurations, CI/CD setup, and production troubleshooting.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="container">
                    <div class="card" style="background-color: var(--bg-subtle); border-color: var(--border-color); padding: 3rem 2rem; text-align: center; align-items: center;">
                        <div class="eyebrow">REFERRAL NETWORK</div>
                        <h2 class="heading-lg" style="max-width: 600px;">Know someone who needs custom software built?</h2>
                        <p class="lead" style="max-width: 550px; font-size: 1rem;">
                            If someone in your network needs a reliable developer for a web application, system integration, or automation project, pass them along.
                        </p>
                        <a href="#contact" class="btn btn-primary" id="refer-someone-home">Refer a Client / Partner</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-work" class="page">
            <div class="section">
                <div class="container">
                    <div class="eyebrow">PORTFOLIO & CASE STUDIES</div>
                    <h1 class="heading-xl">Selected Work</h1>
                    <p class="lead">
                        Production applications, software integrations, and technical research projects I have designed and implemented.
                    </p>

                    <div class="grid-2" style="margin-top: 3rem;">
                        <div class="card project-card">
                            <div>
                                <div class="project-preview">[ CribSearch Screenshot ]</div>
                                <span class="badge badge-accent" style="margin-bottom: 0.5rem;">Web Application</span>
                                <h2 class="heading-md">CribSearch Platform</h2>
                                <p class="text-sm">A centralized housing discovery platform targeting university students seeking off-campus accommodation.</p>
                                <div class="tag-list">
                                    <span class="badge">Laravel</span>
                                    <span class="badge">PHP</span>
                                    <span class="badge">Filament UI</span>
                                    <span class="badge">Docker</span>
                                </div>
                            </div>
                            <a href="#work/cribsearch" class="btn btn-secondary" style="margin-top: 1.5rem;">Read Full Case Study →</a>
                        </div>

                        <div class="card project-card">
                            <div>
                                <div class="project-preview">[ Farm2Fork System Diagram ]</div>
                                <span class="badge" style="margin-bottom: 0.5rem;">Blockchain / Final Year Project</span>
                                <h2 class="heading-md">Farm2Fork Supply Chain</h2>
                                <p class="text-sm">Decentralized traceability ledger logging physical agricultural check-ins onto Sepolia testnet via GraphQL indexing.</p>
                                <div class="tag-list">
                                    <span class="badge">Solidity</span>
                                    <span class="badge">GraphQL</span>
                                    <span class="badge">The Graph</span>
                                    <span class="badge">IPFS</span>
                                </div>
                            </div>
                            <a href="#work/farm2fork" class="btn btn-secondary" style="margin-top: 1.5rem;">Read Technical Details →</a>
                        </div>

                        <div class="card project-card">
                            <div>
                                <div class="project-preview">[ Business Survey Interface ]</div>
                                <span class="badge badge-accent" style="margin-bottom: 0.5rem;">Enterprise Systems</span>
                                <h2 class="heading-md">Messaging & Survey Platform</h2>
                                <p class="text-sm">Business survey platform connecting structured questionnaire workflows with automated WhatsApp and two-way SMS communication channels.</p>
                                <div class="tag-list">
                                    <span class="badge">Laravel</span>
                                    <span class="badge">WhatsApp Business API</span>
                                    <span class="badge">SMS Gateway</span>
                                </div>
                            </div>
                            <a href="#work/survey-platform" class="btn btn-secondary" style="margin-top: 1.5rem;">Read Project Brief →</a>
                        </div>

                        <div class="card project-card">
                            <div>
                                <div class="project-preview">[ API Integration Architecture ]</div>
                                <span class="badge" style="margin-bottom: 0.5rem;">Integration Engineering</span>
                                <h2 class="heading-md">Business System Integrations</h2>
                                <p class="text-sm">Connecting independent enterprise platforms to unify payments, invoicing, communication, and accounting syncs.</p>
                                <div class="tag-list">
                                    <span class="badge">M-Pesa STK</span>
                                    <span class="badge">eTIMS API</span>
                                    <span class="badge">Zoho</span>
                                    <span class="badge">QuickBooks</span>
                                </div>
                            </div>
                            <a href="#work/integrations" class="btn btn-secondary" style="margin-top: 1.5rem;">Read Architecture Overview →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-work-cribsearch" class="page">
            <div class="section">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="#work">Work</a> / <span>CribSearch</span>
                    </div>

                    <div class="case-study-header">
                        <span class="badge badge-accent" style="margin-bottom: 1rem;">Case Study</span>
                        <h1 class="heading-xl">CribSearch — Student Accommodation Discovery Platform</h1>
                        <p class="lead">Simplifying off-campus property search through structured listings, management panels, and interactive tours.</p>
                    </div>

                    <div class="grid-2" style="margin-bottom: 3rem;">
                        <div>
                            <h3 class="heading-md">Overview</h3>
                            <p class="text-sm" style="margin-bottom: 1rem;">
                                CribSearch was designed to solve the fragmented process university students face when seeking off-campus housing. The system aggregates listings into a standard catalog, enabling transparent price and feature comparison.
                            </p>
                            <h3 class="heading-md">The Problem</h3>
                            <p class="text-sm" style="margin-bottom: 1rem;">
                                Students often rely on informal referral channels, unverified listing boards, or physical site visits to secure housing, leading to wasted time and misinformation regarding amenities and availability.
                            </p>
                        </div>
                        <div>
                            <h3 class="heading-md">My Role & Architecture</h3>
                            <p class="text-sm" style="margin-bottom: 1rem;">
                                As the developer, I designed the backend schema, structured the property administration backend using Filament, configured image assets handling, and containerized the application stack for consistent deployment.
                            </p>
                            <div class="tag-list">
                                <span class="badge">Laravel 11</span>
                                <span class="badge">MySQL</span>
                                <span class="badge">Filament Admin</span>
                                <span class="badge">Docker</span>
                                <span class="badge">Nginx</span>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="background-color: var(--bg-subtle); padding: 2rem; margin-bottom: 3rem;">
                        <h3 class="heading-md">Key Features Built</h3>
                        <ul style="padding-left: 1.25rem; font-size: 0.9375rem; color: var(--text-muted);" class="footer-links">
                            <li>• Structured housing categories (bedsitter, single units, studio apartments)</li>
                            <li>• Property manager dashboard for inventory and booking requests</li>
                            <li>• Containerized deployment pipeline using Docker and web server routing</li>
                            <li>• Integrated virtual tour components for remote viewing</li>
                        </ul>
                    </div>

                    <div style="text-align: center; padding: 2rem 0;">
                        <h3 class="heading-md">Need a similar web application developed?</h3>
                        <a href="#contact" class="btn btn-primary" style="margin-top: 1rem;">Start a Discussion</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-work-farm2fork" class="page">
            <div class="section">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="#work">Work</a> / <span>Farm2Fork</span>
                    </div>

                    <div class="case-study-header">
                        <span class="badge" style="margin-bottom: 1rem;">Academic Research</span>
                        <h1 class="heading-xl">Farm2Fork — Decentralized Traceability Ledger</h1>
                        <p class="lead">Final-year computer science project exploring supply chain record immutability using smart contracts and event indexing.</p>
                    </div>

                    <div class="grid-2" style="margin-bottom: 3rem;">
                        <div>
                            <h3 class="heading-md">Context & Scope</h3>
                            <p class="text-sm" style="margin-bottom: 1rem;">
                                Developed as a final-year University Computer Science research project. The system addresses agricultural supply chain record integrity within tomato farming in Kiambu, Kenya.
                            </p>
                            <h3 class="heading-md">Technical Approach</h3>
                            <p class="text-sm">
                                Supply chain actions—from harvest logging to distributor transit—are recorded via smart contracts deployed on the Sepolia testnet. Metadata is pinned on IPFS, while custom subgraphs deployed on The Graph index ledger events for low-latency GraphQL querying.
                            </p>
                        </div>
                        <div>
                            <h3 class="heading-md">Technologies Used</h3>
                            <div class="tag-list" style="margin-bottom: 1.5rem;">
                                <span class="badge">Solidity</span>
                                <span class="badge">Ethereum Sepolia</span>
                                <span class="badge">The Graph / GraphQL</span>
                                <span class="badge">IPFS / Pinata</span>
                                <span class="badge">Laravel Backend</span>
                            </div>
                            <h3 class="heading-md">Project Outcome</h3>
                            <p class="text-sm">
                                Demonstrated how public smart contract event indexing dramatically reduces data lookup overhead for mobile devices inspecting product provenance history in the field.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-work-survey-platform" class="page">
            <div class="section">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="#work">Work</a> / <span>Survey Platform</span>
                    </div>

                    <div class="case-study-header">
                        <span class="badge badge-accent" style="margin-bottom: 1rem;">Enterprise System</span>
                        <h1 class="heading-xl">Business Survey & Messaging Platform</h1>
                        <p class="lead">Connecting structured questionnaire logic directly into WhatsApp Business API and automated SMS channels.</p>
                    </div>

                    <div class="grid-2" style="margin-bottom: 3rem;">
                        <div>
                            <h3 class="heading-md">The Challenge</h3>
                            <p class="text-sm" style="margin-bottom: 1rem;">
                                Traditional web forms often yield low response rates when capturing field feedback or customer evaluations. Businesses required a workflow that engaged respondents directly inside messaging applications they use daily.
                            </p>
                        </div>
                        <div>
                            <h3 class="heading-md">The Technical Solution</h3>
                            <p class="text-sm" style="margin-bottom: 1rem;">
                                Built a state-driven questionnaire parser on Laravel that translates active surveys into interactive WhatsApp message trees and fallback 2-way SMS scripts. Inbound responses are validated, parsed, and logged against customer records in real-time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-work-integrations" class="page">
            <div class="section">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="#work">Work</a> / <span>Integrations</span>
                    </div>

                    <div class="case-study-header">
                        <span class="badge" style="margin-bottom: 1rem;">Integration Engineering</span>
                        <h1 class="heading-xl">Connecting Systems That Weren't Designed Together</h1>
                        <p class="lead">Custom Webhooks, Payment Processing, Messaging Gateways, and Accounting Synchronization.</p>
                    </div>

                    <div class="grid-3">
                        <div class="card">
                            <h3 class="heading-md">M-Pesa Payment Gateways</h3>
                            <p class="text-sm">Automated STK Push triggers, payload validation, instantaneous payment reconciliation webhooks, and fallback check workflows.</p>
                        </div>
                        <div class="card">
                            <h3 class="heading-md">eTIMS & Tax Compliance</h3>
                            <p class="text-sm">Integrating backend transaction events directly with tax authority reporting endpoints, managing digital signing and payload security.</p>
                        </div>
                        <div class="card">
                            <h3 class="heading-md">Accounting & ERP Sync</h3>
                            <p class="text-sm">Bi-directional synchronization between web application records and external software like Zoho and QuickBooks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-services" class="page">
            <div class="section">
                <div class="container">
                    <div class="eyebrow">WHAT I DO</div>
                    <h1 class="heading-xl">Software built around your business.</h1>
                    <p class="lead">Predictable engineering solutions designed to automate operations, connect services, and handle production load.</p>

                    <div class="grid-3" style="margin-top: 3rem;">
                        <div class="card">
                            <h2 class="heading-md">1. Web Applications</h2>
                            <p class="text-sm" style="margin-bottom: 1rem;">Custom business software, administrative portals, inventory control panels, and SaaS backends engineered for scalability.</p>
                            <span class="badge" style="width: fit-content;">Laravel / Livewire / Tailwind</span>
                        </div>

                        <div class="card">
                            <h2 class="heading-md">2. Laravel Development</h2>
                            <p class="text-sm" style="margin-bottom: 1rem;">Backend development including relational database schema design, asynchronous queues, security middleware, and REST APIs.</p>
                            <span class="badge" style="width: fit-content;">PHP / MySQL / PostgreSQL</span>
                        </div>

                        <div class="card">
                            <h2 class="heading-md">3. API & Webhook Integrations</h2>
                            <p class="text-sm" style="margin-bottom: 1rem;">Connecting disjointed platforms through secure, error-tolerant API integration layers and webhook processors.</p>
                            <span class="badge" style="width: fit-content;">M-Pesa / eTIMS / WhatsApp</span>
                        </div>

                        <div class="card">
                            <h2 class="heading-md">4. Business Process Automation</h2>
                            <p class="text-sm" style="margin-bottom: 1rem;">Replacing slow, manual paper or spreadsheet tasks with automated scripts, background jobs, and instant messaging notifications.</p>
                            <span class="badge" style="width: fit-content;">Workflows / Microservices</span>
                        </div>

                        <div class="card">
                            <h2 class="heading-md">5. DevOps & Deployment</h2>
                            <p class="text-sm" style="margin-bottom: 1rem;">Containerizing applications with Docker, managing Linux server deployment, web server configuration, and environment setup.</p>
                            <span class="badge" style="width: fit-content;">Docker / Nginx / Linux</span>
                        </div>

                        <div class="card">
                            <h2 class="heading-md">6. System Upgrades & Debugging</h2>
                            <p class="text-sm" style="margin-bottom: 1rem;">Refactoring existing codebases, upgrading outdated Laravel installations, fixing performance bottlenecks, and resolving bugs.</p>
                            <span class="badge" style="width: fit-content;">Refactoring / Optimization</span>
                        </div>
                    </div>

                    <div class="card" style="margin-top: 3rem; background-color: var(--bg-subtle); align-items: center; text-align: center; padding: 3rem;">
                        <h2 class="heading-lg">Have a specific feature or system in mind?</h2>
                        <a href="#contact" class="btn btn-primary" style="margin-top: 1rem;">Discuss Your Technical Requirements</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-about" class="page">
            <div class="section">
                <div class="container">
                    <div class="eyebrow">ABOUT JOSTECH</div>
                    <h1 class="heading-xl">I'm a developer who likes building useful things.</h1>
                    <p class="lead">
                        I'm Josphat Waweru Thumi. I build reliable web applications and software systems with a strong technical foundation.
                    </p>

                    <div class="grid-2" style="margin-top: 3rem; gap: 4rem;">
                        <div>
                            <h2 class="heading-md">Background & Approach</h2>
                            <p class="text-sm" style="margin-bottom: 1rem;">
                                As a Computer Science student and practicing developer, I combine fundamental computing principles with modern hands-on framework expertise. My primary focus is on backend engineering using PHP and the Laravel ecosystem.
                            </p>
                            <p class="text-sm" style="margin-bottom: 1rem;">
                                I operate Jostech as my professional brand and freelance software practice, taking on custom development tasks, API integration projects, and business tool engineering.
                            </p>

                            <h2 class="heading-md" style="margin-top: 2rem;">Work Experience</h2>
                            <div style="border-left: 2px solid var(--border-color); padding-left: 1rem; margin-top: 1rem;">
                                <div style="margin-bottom: 1.5rem;">
                                    <h3 class="heading-md" style="font-size: 1rem; margin-bottom: 0.25rem;">Laravel Developer</h3>
                                    <p class="text-sm" style="color: var(--brand-primary); font-weight: 600;">Mobipine Limited</p>
                                    <p class="text-sm" style="font-size: 0.8125rem; margin-bottom: 0.5rem;">May 2025 – Present</p>
                                    <p class="text-sm">Engineered backend applications, business survey platforms, automated messaging integrations (WhatsApp/SMS), and external payment/accounting connections (M-Pesa, eTIMS, Zoho, QuickBooks).</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h2 class="heading-md">Technical Skillset Matrix</h2>
                            
                            <div style="margin-bottom: 1.5rem;">
                                <span class="eyebrow" style="margin-bottom: 0.5rem;">PRIMARY / CORE EXPERTISE</span>
                                <div class="tag-list">
                                    <span class="badge badge-accent">PHP</span>
                                    <span class="badge badge-accent">Laravel</span>
                                    <span class="badge badge-accent">REST APIs</span>
                                    <span class="badge badge-accent">MySQL / MariaDB</span>
                                    <span class="badge badge-accent">Docker</span>
                                    <span class="badge badge-accent">Linux Administration</span>
                                    <span class="badge badge-accent">Git Workflows</span>
                                </div>
                            </div>

                            <div style="margin-bottom: 1.5rem;">
                                <span class="eyebrow" style="margin-bottom: 0.5rem;">FRONTEND & UI</span>
                                <div class="tag-list">
                                    <span class="badge">JavaScript (ES6+)</span>
                                    <span class="badge">Livewire</span>
                                    <span class="badge">Tailwind CSS</span>
                                    <span class="badge">HTML5 / CSS3</span>
                                </div>
                            </div>

                            <div style="margin-bottom: 1.5rem;">
                                <span class="eyebrow" style="margin-bottom: 0.5rem;">EXPLORING & SECONDARY SKILLS</span>
                                <div class="tag-list">
                                    <span class="badge">Python</span>
                                    <span class="badge">Django</span>
                                    <span class="badge">Go</span>
                                    <span class="badge">Next.js / React</span>
                                    <span class="badge">Blockchain (Solidity)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 5rem;">
                        <div class="eyebrow">METHODOLOGY</div>
                        <h2 class="heading-lg">How I Work</h2>

                        <div class="grid-4" style="margin-top: 2rem;">
                            <div class="card process-step">
                                <span class="process-number">01</span>
                                <h3 class="heading-md">Understand</h3>
                                <p class="text-sm">Analyze the core business objective, identify existing pain points, and clarify project requirements.</p>
                            </div>
                            <div class="card process-step">
                                <span class="process-number">02</span>
                                <h3 class="heading-md">Plan</h3>
                                <p class="text-sm">Design database models, map API endpoints, outline software architecture, and establish timelines.</p>
                            </div>
                            <div class="card process-step">
                                <span class="process-number">03</span>
                                <h3 class="heading-md">Build</h3>
                                <p class="text-sm">Develop clean, maintainable code, write integrations, test features, and setup production containers.</p>
                            </div>
                            <div class="card process-step">
                                <span class="process-number">04</span>
                                <h3 class="heading-md">Launch</h3>
                                <p class="text-sm">Deploy to production server environment, perform live testing, and provide initial maintenance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-contact" class="page">
            <div class="section">
                <div class="container">
                    <div class="grid-2" style="gap: 4rem;">
                        <div>
                            <div class="eyebrow">GET IN TOUCH</div>
                            <h1 class="heading-xl">Have a project in mind?</h1>
                            <p class="lead">
                                Tell me what you're looking to build, improve, or integrate. I reply to project inquiries within 24–48 hours.
                            </p>

                            <div style="display: flex; flex-direction: column; gap: 1.5rem; margin-top: 3rem;">
                                <div class="card" style="padding: 1.25rem;">
                                    <div class="text-sm" style="font-weight: 600; color: var(--text-main);">Email Inquiry</div>
                                    <div class="text-sm">josphat.thumi@example.com</div>
                                </div>
                                <div class="card" style="padding: 1.25rem;">
                                    <div class="text-sm" style="font-weight: 600; color: var(--text-main);">Direct Messaging</div>
                                    <div class="text-sm">WhatsApp / Direct Call Available</div>
                                </div>
                                <div class="card" style="padding: 1.25rem;">
                                    <div class="text-sm" style="font-weight: 600; color: var(--text-main);">Developer Networks</div>
                                    <div class="text-sm">GitHub / LinkedIn Profiles</div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card">
                                <h2 class="heading-md" style="margin-bottom: 1.5rem;">Start a Discussion</h2>
                                <form id="contact-form" onsubmit="handleContactSubmit(event)">
                                    <div class="form-group">
                                        <label for="contact-name" class="form-label">Your Name *</label>
                                        <input type="text" id="contact-name" class="form-control" required placeholder="Jane Doe">
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-email" class="form-label">Email Address *</label>
                                        <input type="email" id="contact-email" class="form-control" required placeholder="jane@company.com">
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-type" class="form-label">Project Type</label>
                                        <select id="contact-type" class="form-control">
                                            <option value="New Web Application">New Web Application</option>
                                            <option value="Existing Application Fix/Improvement">Existing Application Improvement</option>
                                            <option value="API / System Integration">API / System Integration</option>
                                            <option value="Business Automation">Business Automation</option>
                                            <option value="DevOps / Deployment">DevOps / Deployment</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-budget" class="form-label">Budget Scale (Optional)</label>
                                        <select id="contact-budget" class="form-control">
                                            <option value="Not sure yet">Not sure yet / To be discussed</option>
                                            <option value="Under KSh 50,000">Under KSh 50,000</option>
                                            <option value="KSh 50,000 - 150,000">KSh 50,000 – 150,000</option>
                                            <option value="KSh 150,000 - 500,000">KSh 150,000 – 500,000</option>
                                            <option value="KSh 500,000+">KSh 500,000+</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-message" class="form-label">Project Summary *</label>
                                        <textarea id="contact-message" class="form-control" rows="4" required placeholder="Briefly describe what system you want to build or problem you need to solve..."></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Send Project Inquiry</button>
                                </form>
                            </div>

                            <div class="card" style="margin-top: 2rem; background-color: var(--bg-subtle);">
                                <h3 class="heading-md">Want to Refer Someone Else?</h3>
                                <p class="text-sm" style="margin-bottom: 1rem;">Pass client details directly to generate an email introduction.</p>
                                
                                <form id="referral-form" onsubmit="handleReferralSubmit(event)">
                                    <div class="form-group">
                                        <label for="ref-your-name" class="form-label">Your Name</label>
                                        <input type="text" id="ref-your-name" class="form-control" required placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="ref-client-name" class="form-label">Referral's Name / Company</label>
                                        <input type="text" id="ref-client-name" class="form-control" required placeholder="Prospective Client Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="ref-notes" class="form-label">What do they need built?</label>
                                        <input type="text" id="ref-notes" class="form-control" required placeholder="e.g. M-Pesa Integration for store">
                                    </div>
                                    <button type="submit" class="btn btn-secondary" style="width: 100%;">Send Referral via Email</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="#home" class="logo" style="margin-bottom: 1rem;">
                        <span class="logo-mark">J</span>
                        Jostech
                    </a>
                    <p class="text-sm" style="max-width: 300px; margin-bottom: 1rem;">
                        Software engineering practice of Josphat Thumi. Building web applications, REST APIs, and backend systems.
                    </p>
                    <p class="text-sm">Nairobi / Kiambu, Kenya</p>
                </div>

                <div>
                    <div class="footer-col-title">Navigation</div>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#work">Work & Projects</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Developer</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <div class="footer-col-title">Services</div>
                    <ul class="footer-links">
                        <li><a href="#services">Web Applications</a></li>
                        <li><a href="#services">Laravel Development</a></li>
                        <li><a href="#services">API Integrations</a></li>
                        <li><a href="#services">Automation Workflows</a></li>
                        <li><a href="#services">DevOps Setup</a></li>
                    </ul>
                </div>

                <div>
                    <div class="footer-col-title">Connect</div>
                    <ul class="footer-links">
                        <li><a href="#contact">Direct Message</a></li>
                        <li><a href="#contact">GitHub Profile</a></li>
                        <li><a href="#contact">LinkedIn Profile</a></li>
                        <li><a href="#contact">WhatsApp Direct</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div>© 2026 Jostech — Josphat Waweru Thumi. All rights reserved.</div>
                <div>Built with Vanilla HTML, CSS, and JS.</div>
            </div>
        </div>
    </footer>

    <script>
        /**
         * ROUTER ENGINE
         * Handles client-side navigation using URL Hash location without page reload.
         */
        const routes = {
            '': 'page-home',
            'home': 'page-home',
            'work': 'page-work',
            'work/cribsearch': 'page-work-cribsearch',
            'work/farm2fork': 'page-work-farm2fork',
            'work/survey-platform': 'page-work-survey-platform',
            'work/integrations': 'page-work-integrations',
            'services': 'page-services',
            'about': 'page-about',
            'contact': 'page-contact'
        };

        function handleRouting() {
            // Extract raw hash removing leading '#'
            const hash = window.location.hash.replace(/^#\/?/, '');
            
            // Match route or default to home
            const pageId = routes[hash] || 'page-home';

            // Toggle active state on page views
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('active');
            });

            const activePage = document.getElementById(pageId);
            if (activePage) {
                activePage.classList.add('active');
            }

            // Scroll to top on route change
            window.scrollTo({ top: 0, behavior: 'instant' });

            // Update active state in desktop nav links
            document.querySelectorAll('.nav-link').forEach(link => {
                const href = link.getAttribute('href').replace(/^#\/?/, '');
                if (href === hash || (hash === '' && href === 'home')) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });

            // Close mobile navigation drawer if open
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.classList.remove('is-open');
            }
        }

        // Listen for route changes
        window.addEventListener('hashchange', handleRouting);
        window.addEventListener('DOMContentLoaded', handleRouting);

        /**
         * MOBILE MENU TOGGLE
         */
        const mobileToggleBtn = document.getElementById('mobile-toggle');
        const mobileMenuNav = document.getElementById('mobile-menu');

        if (mobileToggleBtn && mobileMenuNav) {
            mobileToggleBtn.addEventListener('click', () => {
                mobileMenuNav.classList.toggle('is-open');
            });
        }

        /**
         * FORM HANDLING PROCEDURES (STATIC MAILTO HANDLERS)
         */
        function handleContactSubmit(e) {
            e.preventDefault();
            
            const name = document.getElementById('contact-name').value;
            const email = document.getElementById('contact-email').value;
            const type = document.getElementById('contact-type').value;
            const budget = document.getElementById('contact-budget').value;
            const message = document.getElementById('contact-message').value;

            const subject = encodeURIComponent(`Jostech Project Inquiry: ${type} - ${name}`);
            const body = encodeURIComponent(
                `Name: ${name}\n` +
                `Email: ${email}\n` +
                `Project Type: ${type}\n` +
                `Budget Option: ${budget}\n\n` +
                `Project Description:\n${message}`
            );

            // Trigger client email application fallback
            window.location.href = `mailto:josphat.thumi@example.com?subject=${subject}&body=${body}`;
        }

        function handleReferralSubmit(e) {
            e.preventDefault();

            const referrerName = document.getElementById('ref-your-name').value;
            const clientName = document.getElementById('ref-client-name').value;
            const notes = document.getElementById('ref-notes').value;

            const subject = encodeURIComponent(`Jostech Client Referral from ${referrerName}`);
            const body = encodeURIComponent(
                `Referrer Name: ${referrerName}\n` +
                `Referred Client/Company: ${clientName}\n` +
                `Project/Requirement Notes:\n${notes}`
            );

            window.location.href = `mailto:josphat.thumi@example.com?subject=${subject}&body=${body}`;
        }
    </script>
</body>
</html>
