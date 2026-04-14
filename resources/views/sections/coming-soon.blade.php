<!-- Coming Soon Videos Section -->
<section id="videos" class="py-20 fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <h2 class="text-4xl sm:text-5xl font-extrabold mb-4 text-left">
            <span class="gradient-text">{{ $lang === 'es' ? 'Videos Próximos' : 'Upcoming Videos' }}</span>
        </h2>
        <p class="text-portfolio-dim mb-12 max-w-lg">
            {{ $lang === 'es' ? 'Demostraciones en video de mis proyectos y experimentos con IA.' : 'Video demonstrations of my projects and AI experiments.' }}
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Coming Soon Card 1 -->
            <div class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 card-hover relative overflow-hidden">
                <div class="absolute top-0 right-0 bg-portfolio-accent text-white text-xs font-bold px-3 py-1 rounded-bl-xl">
                    {{ $lang === 'es' ? 'PRÓXIMO' : 'COMING SOON' }}
                </div>
                <div class="w-full h-40 bg-portfolio-bg rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-16 h-16 text-portfolio-dim opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-portfolio-text mb-2">
                    {{ $lang === 'es' ? 'Force Gym - Demo' : 'Force Gym - Demo' }}
                </h3>
                <p class="text-portfolio-dim text-sm">
                    {{ $lang === 'es' ? 'Demo completa de la aplicación de gestión de gimnasio con todas sus funcionalidades.' : 'Full demo of the gym management application with all its features.' }}
                </p>
            </div>

            <!-- Coming Soon Card 2 -->
            <div class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 card-hover relative overflow-hidden">
                <div class="absolute top-0 right-0 bg-portfolio-accent text-white text-xs font-bold px-3 py-1 rounded-bl-xl">
                    {{ $lang === 'es' ? 'PRÓXIMO' : 'COMING SOON' }}
                </div>
                <div class="w-full h-40 bg-portfolio-bg rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-16 h-16 text-portfolio-dim opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-portfolio-text mb-2">
                    {{ $lang === 'es' ? 'API REST con Spring Boot' : 'REST API with Spring Boot' }}
                </h3>
                <p class="text-portfolio-dim text-sm">
                    {{ $lang === 'es' ? 'Tutorial de cómo construir una API REST segura con Spring Boot y JWT.' : 'Tutorial on how to build a secure REST API with Spring Boot and JWT.' }}
                </p>
            </div>

            <!-- Coming Soon Card 3 -->
            <div class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 card-hover relative overflow-hidden">
                <div class="absolute top-0 right-0 bg-portfolio-accent text-white text-xs font-bold px-3 py-1 rounded-bl-xl">
                    {{ $lang === 'es' ? 'PRÓXIMO' : 'COMING SOON' }}
                </div>
                <div class="w-full h-40 bg-portfolio-bg rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-16 h-16 text-portfolio-dim opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-portfolio-text mb-2">
                    {{ $lang === 'es' ? 'IA con Transformers' : 'AI with Transformers' }}
                </h3>
                <p class="text-portfolio-dim text-sm">
                    {{ $lang === 'es' ? 'Implementación de modelos de lenguaje con Hugging Face.' : 'Implementing language models with Hugging Face.' }}
                </p>
            </div>
        </div>
    </div>
</section>