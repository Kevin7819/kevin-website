<!-- Skills Section -->
<section id="habilidades" class="py-20 fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <h2 class="text-4xl sm:text-5xl font-extrabold mb-4 text-left">
            <span class="gradient-text">{{ $content[$lang]['skills']['title'] }}</span>
        </h2>
        <p class="text-portfolio-dim mb-12 max-w-lg">
            {{ $content[$lang]['skills']['subtitle'] }}
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($skills as $category => $items)
                <div class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 card-hover skills-group">
                    <h3 class="font-mono text-sm font-semibold text-portfolio-text mb-4 uppercase tracking-wider">
                        {{ $category }}
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($items as $index => $skill)
                            <span class="badge-stagger font-mono text-xs text-portfolio-cyan bg-portfolio-cyan/10 px-3 py-1 rounded-full">
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
                {{ $content[$lang]['skills']['languages'] }}
            </h3>
            <div class="flex flex-wrap gap-6">
                @foreach($languages as $langItem)
                    <div>
                        <span class="text-portfolio-text font-semibold">{{ $langItem['name'] }}</span>
                        <span class="text-portfolio-dim text-sm ml-2">— {{ $langItem['level'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
