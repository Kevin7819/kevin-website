<!-- Projects Section -->
<section id="proyectos" class="py-20 fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <h2 class="text-3xl sm:text-4xl font-extrabold mb-2">
            <span class="gradient-text">Proyectos Destacados</span>
        </h2>
        <p class="text-portfolio-dim mb-12 max-w-lg">
            Proyectos que he construido, desde APIs hasta aplicaciones móviles.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <article class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 card-hover flex flex-col">
                    <div class="flex items-start justify-between mb-4">
                        <h3 class="text-lg font-bold text-portfolio-text">
                            {{ $project['name'] }}
                        </h3>
                        <span class="font-mono text-xs text-portfolio-dim">{{ $project['year'] }}</span>
                    </div>

                    <p class="text-portfolio-dim text-sm leading-relaxed mb-6 flex-grow">
                        {{ $project['description'] }}
                    </p>

                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach($project['tech'] as $tech)
                            <span class="font-mono text-[0.65rem] text-portfolio-cyan bg-portfolio-cyan/10 px-2.5 py-1 rounded-full">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>

                    <div class="flex gap-4 mt-auto">
                        @if($project['github'])
                            <a href="{{ $project['github'] }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center gap-1.5 text-portfolio-dim text-sm hover:text-portfolio-accent transition-colors no-underline">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                                GitHub
                            </a>
                        @endif
                        @if($project['demo'])
                            <a href="{{ $project['demo'] }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center gap-1.5 text-portfolio-dim text-sm hover:text-portfolio-accent transition-colors no-underline">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                                Demo
                            </a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
