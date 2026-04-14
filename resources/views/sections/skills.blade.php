<!-- Skills Section -->
<section id="habilidades" class="py-20 fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <h2 class="text-3xl sm:text-4xl font-extrabold mb-2">
            <span class="gradient-text">Habilidades Técnicas</span>
        </h2>
        <p class="text-portfolio-dim mb-12 max-w-lg">
            Tecnologías y herramientas que utilizo para construir soluciones digitales.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($skills as $category => $items)
                <div class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 card-hover skills-group">
                    <h3 class="font-mono text-sm font-semibold text-portfolio-text mb-4 uppercase tracking-wider">
                        {{ $category }}
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($items as $index => $skill)
                            <span class="badge-stagger font-mono text-xs text-portfolio-cyan bg-portfolio-cyan/10 px-3 py-1 rounded-full"
                                  style="transition-delay: {{ $index * 50 }}ms">
                                {{ $skill }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Languages -->
        <div class="mt-12 bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 fade-in-section">
            <h3 class="font-mono text-sm font-semibold text-portfolio-text mb-4 uppercase tracking-wider">
                Idiomas
            </h3>
            <div class="flex flex-wrap gap-6">
                @foreach($languages as $lang)
                    <div>
                        <span class="text-portfolio-text font-semibold">{{ $lang['name'] }}</span>
                        <span class="text-portfolio-dim text-sm ml-2">— {{ $lang['level'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
