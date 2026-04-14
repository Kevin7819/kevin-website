<!-- Hero Section -->
<section id="hero" class="min-h-[80vh] flex items-center fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-6">
                <span class="font-mono font-bold text-xl sm:text-2xl tracking-widest uppercase" style="background: linear-gradient(to right, #ffffff, #ff0055); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    &gt; {{ $content[$lang]['hero']['role'] }}
                </span>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight">
                    <span style="background: linear-gradient(to right, #ffffff, #ff0055); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">{{ $personal['name'] }}</span>
                </h1>

                <p class="text-portfolio-text-relaxed text-base sm:text-lg max-w-xl leading-relaxed">
                    {{ $content[$lang]['hero']['bio'] }}
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#proyectos"
                       class="inline-flex items-center gap-2 bg-portfolio-accent text-white px-6 py-3 rounded-xl font-extrabold text-sm uppercase tracking-wider no-underline hover:scale-105 transition-transform duration-300 shadow-lg shadow-portfolio-accent/20">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                        {{ $content[$lang]['hero']['view_projects'] }}
                    </a>
                    
                    <!-- CV Download with Dropdown -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                                @click.outside="open = false"
                                class="inline-flex items-center gap-2 border border-portfolio-accent text-portfolio-accent px-6 py-3 rounded-xl font-extrabold text-sm uppercase tracking-wider no-underline hover:scale-105 hover:bg-portfolio-accent/10 hover:border-portfolio-accent active:scale-95 active:bg-portfolio-accent/20 transition-all duration-300 shadow-lg shadow-portfolio-accent/20">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            {{ $content[$lang]['hero']['download_cv'] }}
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div x-show="open"
                             x-cloak
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 -translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             class="absolute left-0 mt-2 w-48 bg-portfolio-card border border-portfolio-border/50 rounded-xl overflow-hidden z-50 shadow-xl">
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
                </div>
            </div>

            <!-- Right: Profile Photo -->
            <div class="flex justify-center lg:justify-end">
                <div class="relative">
                    <!-- Ambient glow behind photo -->
                    <div class="absolute inset-0 bg-portfolio-accent/30 rounded-3xl blur-3xl scale-110" aria-hidden="true"></div>

                    <!-- Photo frame with glowing shadow -->
                    <div class="relative w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80 rounded-3xl overflow-hidden border-2 border-portfolio-accent/50 shadow-[0_20px_60px_rgba(255,0,85,0.2)]">
                        <img src="{{ asset('images/Kevin.png') }}"
                             alt="{{ $lang === 'es' ? 'Foto de perfil de' : 'Profile photo of' }} {{ $personal['name'] }}"
                             class="w-full h-full object-cover"
                             loading="eager">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
