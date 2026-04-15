<!-- Education Section -->
<section id="educacion" class="py-20 fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <h2 class="text-4xl sm:text-5xl font-extrabold mb-4 text-left">
            <span class="gradient-text">{{ $content[$lang]['education']['title'] }}</span>
        </h2>
        <p class="text-portfolio-dim mb-12 max-w-lg">
            {{ $content[$lang]['education']['subtitle'] }}
        </p>

        <div class="space-y-6">
            @foreach($education as $edu)
                <div class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 card-hover">
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                        <div>
                            <h3 class="text-xl font-bold text-portfolio-text">
                                {{ $edu['institution'] }}
                            </h3>
                            <p class="text-portfolio-dim mt-2">
                                {{ $edu['degree'] }}
                            </p>
                        </div>
                        <div class="text-right flex-shrink-0">
                            <span class="font-mono text-sm text-portfolio-dim block">{{ $edu['years'] }}</span>
                            <span class="font-mono text-sm text-portfolio-cyan mt-1 block">
                                GPA: {{ $edu['gpa'] }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
