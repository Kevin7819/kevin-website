<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $personal['name'] }} — {{ $content[$lang]['hero']['role'] }}</title>
    <meta name="description" content="{{ $content[$lang]['hero']['bio'] }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&family=JetBrains+Mono:wght@400;600;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

    <!-- Ambient glow -->
    <div class="fixed top-[-10%] right-[-10%] w-[40vw] h-[40vw] bg-portfolio-accent/50 rounded-full blur-[80px] z-[-2] opacity-[0.15] pointer-events-none" aria-hidden="true"></div>

    <!-- Sticky Header with Glassmorphism -->
    <header class="sticky top-0 z-50 backdrop-blur-xl bg-portfolio-bg/80 border-b border-portfolio-border/50"
            x-data="{ mobileOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="#" class="font-mono font-extrabold text-xl text-portfolio-text no-underline tracking-tight">
                    KV<span class="text-portfolio-accent">.</span>DEV
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex items-center gap-6 ml-16">
                    <a href="#proyectos" class="text-portfolio-dim text-sm font-semibold hover:text-portfolio-accent transition-colors duration-300 no-underline">{{ $content[$lang]['nav']['projects'] }}</a>
                    <a href="#habilidades" class="text-portfolio-dim text-sm font-semibold hover:text-portfolio-accent transition-colors duration-300 no-underline">{{ $content[$lang]['nav']['skills'] }}</a>
                    <a href="#experiencia" class="text-portfolio-dim text-sm font-semibold hover:text-portfolio-accent transition-colors duration-300 no-underline">{{ $content[$lang]['nav']['experience'] }}</a>
                </nav>
                
                <!-- Header Actions -->
                <div class="hidden md:flex items-center gap-5 ml-auto">
                    <!-- GitHub Icon -->
                    <a href="https://github.com/Kevin7819"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="text-portfolio-dim hover:text-portfolio-accent transition-colors"
                       aria-label="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    
                    <!-- CV Button -->
                    <div x-data="{ cvOpen: false }" class="relative">
                        <button @click="cvOpen = !cvOpen"
                                @click.outside="cvOpen = false"
                                class="border border-portfolio-accent text-portfolio-accent px-4 py-2 rounded-lg text-sm font-extrabold uppercase tracking-wider hover:scale-105 hover:text-portfolio-accent hover:border-portfolio-accent active:scale-95 active:opacity-80 transition-all duration-300">
                            CV
                        </button>
                        <div x-show="cvOpen"
                             x-cloak
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 -translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             class="absolute right-0 mt-2 w-40 bg-portfolio-card border border-portfolio-border/50 rounded-xl overflow-hidden z-50 shadow-xl">
                            <a href="/cv/Kevin Venegas Bermúdez - CV - ES.pdf"
                               target="_blank"
                               class="flex items-center gap-2 px-4 py-3 text-portfolio-dim hover:bg-portfolio-accent/10 hover:text-portfolio-accent transition-colors no-underline">
                                <span>🇪🇸</span>
                                <span class="text-sm">Español</span>
                            </a>
                            <a href="/cv/Kevin Venegas Bermúdez - CV - EN.pdf"
                               target="_blank"
                               class="flex items-center gap-2 px-4 py-3 text-portfolio-dim hover:bg-portfolio-accent/10 hover:text-portfolio-accent transition-colors no-underline">
                                <span>🇺🇸</span>
                                <span class="text-sm">English</span>
                            </a>
                        </div>
                    </div>
                    
<!-- Language Toggle -->
                    <div class="language-switcher">
                        <a href="{{ request()->url() }}?lang=es" class="{{ $lang === 'es' ? 'active' : '' }}">ES</a>
                        <span class="text-portfolio-dim">/</span>
                        <a href="{{ request()->url() }}?lang=en" class="{{ $lang === 'en' ? 'active' : '' }}">EN</a>
                    </div>
                </div>

                <!-- Mobile Hamburger -->
                <button @click="mobileOpen = !mobileOpen"
                        class="md:hidden text-portfolio-text p-2 focus:outline-none focus:ring-2 focus:ring-portfolio-accent rounded"
                        aria-label="Toggle menu"
                        x-ref="menuBtn">
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Nav -->
            <nav x-show="mobileOpen"
                 x-cloak
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-4"
                 @click.away="mobileOpen = false"
                 class="md:hidden py-4 border-t border-portfolio-border/50">
                <div class="flex flex-col items-center gap-3">
                    <a href="#proyectos" @click="mobileOpen = false" class="text-portfolio-dim text-base font-semibold hover:text-portfolio-accent transition-colors no-underline py-2">{{ $content[$lang]['nav']['projects'] }}</a>
                    <a href="#habilidades" @click="mobileOpen = false" class="text-portfolio-dim text-base font-semibold hover:text-portfolio-accent transition-colors no-underline py-2">{{ $content[$lang]['nav']['skills'] }}</a>
                    <a href="#experiencia" @click="mobileOpen = false" class="text-portfolio-dim text-base font-semibold hover:text-portfolio-accent transition-colors no-underline py-2">{{ $content[$lang]['nav']['experience'] }}</a>
                    <a href="#contacto" @click="mobileOpen = false" class="text-portfolio-dim text-base font-semibold hover:text-portfolio-accent transition-colors no-underline py-2">{{ $content[$lang]['nav']['contact'] }}</a>
                    
                    <!-- Mobile Actions -->
                    <div class="flex items-center gap-4 pt-3 mt-2 border-t border-portfolio-border/50">
                        <a href="https://github.com/Kevin7819"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="text-portfolio-dim hover:text-portfolio-accent transition-colors"
                           aria-label="GitHub">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <span class="text-portfolio-dim">|</span>
                        <a href="/cv/Kevin Venegas Bermúdez - CV - ES.pdf" target="_blank" class="text-portfolio-dim hover:text-portfolio-accent transition-colors text-sm">CV</a>
                        <span class="text-portfolio-dim">|</span>
<div class="language-switcher">
                            <a href="{{ request()->url() }}?lang=es" class="{{ $lang === 'es' ? 'active' : '' }}">ES</a>
                            <span class="text-portfolio-dim">/</span>
                            <a href="{{ request()->url() }}?lang=en" class="{{ $lang === 'en' ? 'active' : '' }}">EN</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-portfolio-border/50 py-8 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 flex flex-col items-center">
            <div class="flex gap-6 mb-4">
                <a href="{{ $personal['linkedin'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-portfolio-dim hover:text-portfolio-accent transition-colors no-underline text-sm"
                    aria-label="LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="https://github.com/Kevin7819"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-portfolio-dim hover:text-portfolio-accent transition-colors no-underline text-sm"
                    aria-label="GitHub">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
            </div>
<p class="text-portfolio-dim text-sm text-center">
                &copy; {{ date('Y') }} Kevin Abel Venegas Bermúdez.
                {{ $lang === 'es' ? 'Todos los derechos reservados.' : 'All rights reserved.' }}
            </p>
        </div>
    </footer>

    <!-- x-cloak style -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
</body>
</html>
