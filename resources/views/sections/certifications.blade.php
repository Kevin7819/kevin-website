<!-- Certifications Section -->
<section id="certificaciones" class="py-20 fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <h2 class="text-4xl sm:text-5xl font-extrabold mb-4 text-left">
            <span class="gradient-text">{{ $content[$lang]['certifications']['title'] }}</span>
        </h2>
        <p class="text-portfolio-dim mb-12 max-w-lg">
            {{ $content[$lang]['certifications']['subtitle'] }}
        </p>

        <div class="space-y-4">
            @foreach($certifications as $cert)
                <div class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-5 card-hover flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 border-l-2 border-l-portfolio-accent">
                    <div>
                        <h3 class="text-portfolio-text font-semibold">
                            {{ $cert['name'] }}
                        </h3>
                        <p class="text-portfolio-dim text-sm mt-1">
                            {{ $cert['issuer'] }}
                        </p>
                    </div>
                    @if($cert['year'])
                        <span class="font-mono text-xs text-portfolio-dim flex-shrink-0">
                            {{ $cert['year'] }}
                        </span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
