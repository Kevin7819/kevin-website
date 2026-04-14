<!-- Contact Section -->
<section id="contacto" class="py-20 fade-in-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <h2 class="text-3xl sm:text-4xl font-extrabold mb-2">
            <span class="gradient-text">Contacto</span>
        </h2>
        <p class="text-portfolio-dim mb-12 max-w-lg">
            ¿Interesado en colaborar? No dudes en contactarme.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-6">
                <a href="mailto:{{ $personal['email'] }}"
                   class="flex items-center gap-4 bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-5 card-hover no-underline group">
                    <div class="w-12 h-12 rounded-xl bg-portfolio-accent/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-portfolio-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-portfolio-text font-semibold group-hover:text-portfolio-accent transition-colors">Email</p>
                        <p class="text-portfolio-dim text-sm">{{ $personal['email'] }}</p>
                    </div>
                </a>

                <a href="{{ $personal['linkedin'] }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="flex items-center gap-4 bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-5 card-hover no-underline group">
                    <div class="w-12 h-12 rounded-xl bg-portfolio-accent/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-portfolio-accent" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-portfolio-text font-semibold group-hover:text-portfolio-accent transition-colors">LinkedIn</p>
                        <p class="text-portfolio-dim text-sm">Kevin Venegas Bermúdez</p>
                    </div>
                </a>

                <div class="flex items-center gap-4 bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-5">
                    <div class="w-12 h-12 rounded-xl bg-portfolio-accent/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-portfolio-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-portfolio-text font-semibold">Ubicación</p>
                        <p class="text-portfolio-dim text-sm">{{ $personal['location'] }}</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form (UI Only) -->
            <div class="bg-portfolio-card border border-portfolio-border/50 rounded-2xl p-6 card-hover">
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-semibold text-portfolio-text mb-2">
                            Nombre
                        </label>
                        <input type="text"
                               id="name"
                               name="name"
                               required
                               placeholder="Tu nombre"
                               class="w-full bg-portfolio-bg border border-portfolio-border/50 rounded-xl px-4 py-3 text-portfolio-text placeholder-portfolio-dim/50 focus:outline-none focus:border-portfolio-accent focus:ring-1 focus:ring-portfolio-accent transition-colors">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-portfolio-text mb-2">
                            Email
                        </label>
                        <input type="email"
                               id="email"
                               name="email"
                               required
                               placeholder="tu@email.com"
                               class="w-full bg-portfolio-bg border border-portfolio-border/50 rounded-xl px-4 py-3 text-portfolio-text placeholder-portfolio-dim/50 focus:outline-none focus:border-portfolio-accent focus:ring-1 focus:ring-portfolio-accent transition-colors">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-portfolio-text mb-2">
                            Mensaje
                        </label>
                        <textarea id="message"
                                  name="message"
                                  required
                                  rows="5"
                                  placeholder="¿En qué puedo ayudarte?"
                                  class="w-full bg-portfolio-bg border border-portfolio-border/50 rounded-xl px-4 py-3 text-portfolio-text placeholder-portfolio-dim/50 focus:outline-none focus:border-portfolio-accent focus:ring-1 focus:ring-portfolio-accent transition-colors resize-none"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-portfolio-accent text-white px-6 py-3 rounded-xl font-extrabold text-sm uppercase tracking-wider hover:scale-[1.02] transition-transform duration-300 shadow-lg shadow-portfolio-accent/20">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
