<!-- Hero Section -->
<section id="hero" class="min-h-[80vh] flex items-center fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-6">
                <span class="inline-block font-mono font-semibold text-portfolio-accent text-sm tracking-wider">
                    &gt; {{ strtoupper($personal['role']) }}
                </span>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-extrabold tracking-tight leading-tight">
                    <span class="gradient-text">{{ $personal['name'] }}</span>
                </h1>

                <p class="text-portfolio-dim text-base sm:text-lg max-w-lg leading-relaxed">
                    {{ $personal['bio'] }}
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#proyectos"
                       class="inline-flex items-center gap-2 bg-portfolio-accent text-white px-6 py-3 rounded-xl font-extrabold text-sm uppercase tracking-wider no-underline hover:scale-105 transition-transform duration-300 shadow-lg shadow-portfolio-accent/20">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                        Ver Proyectos
                    </a>
                    <a href="#"
                       class="inline-flex items-center gap-2 border border-portfolio-accent text-portfolio-accent px-6 py-3 rounded-xl font-extrabold text-sm uppercase tracking-wider no-underline hover:bg-portfolio-accent/10 transition-colors duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Descargar CV
                    </a>
                </div>
            </div>

            <!-- Right: Profile Photo -->
            <div class="flex justify-center lg:justify-end">
                <div class="relative">
                    <!-- Ambient glow behind photo -->
                    <div class="absolute inset-0 bg-portfolio-accent/20 rounded-3xl blur-2xl scale-110" aria-hidden="true"></div>

                    <!-- Photo frame -->
                    <div class="relative w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80 rounded-3xl overflow-hidden border-2 border-portfolio-accent/50 shadow-2xl shadow-portfolio-accent/10">
                        <img src="{{ asset('images/Kevin.jpeg') }}"
                             alt="Foto de perfil de {{ $personal['name'] }}"
                             class="w-full h-full object-cover"
                             loading="eager">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
