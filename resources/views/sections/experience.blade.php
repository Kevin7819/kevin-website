<!-- Experience Section -->
<section id="experiencia" class="py-20 fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <h2 class="text-4xl sm:text-5xl font-extrabold mb-4 text-left">
            <span class="gradient-text">{{ $content[$lang]['experience']['title'] }}</span>
        </h2>
        <p class="text-portfolio-dim mb-12 max-w-lg">
            {{ $content[$lang]['experience']['subtitle'] }}
        </p>

        <div class="space-y-12">
            @foreach($experience[$lang] as $exp)
                <div class="relative pl-8 border-l-2 border-portfolio-accent">
                    <!-- Timeline dot -->
                    <div class="absolute left-[-6px] top-0 w-3 h-3 rounded-full bg-portfolio-accent"></div>

                    <div class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 card-hover">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-portfolio-text">
                                    {{ $exp['company'] }}
                                </h3>
                                <p class="font-mono text-sm text-portfolio-accent mt-1">
                                    {{ $exp['role'] }}
                                </p>
                            </div>
                            <div class="text-right">
                                <span class="font-mono text-xs text-portfolio-dim block">{{ $exp['date'] }}</span>
                                <span class="font-mono text-xs text-portfolio-dim">{{ $exp['location'] }}</span>
                            </div>
                        </div>

                        <ul class="space-y-3">
                            @foreach($exp['bullets'] as $bullet)
                                <li class="flex gap-3 text-portfolio-dim text-sm leading-relaxed">
                                    <svg class="w-5 h-5 text-portfolio-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>{{ $bullet }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
