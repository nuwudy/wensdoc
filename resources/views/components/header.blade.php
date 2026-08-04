<header class="fixed w-full z-40 bg-white border-b border-gray-100 shadow-sm transition-all duration-300">
    <!-- Contact Top Bar -->
    <div class="bg-wens-light py-2 hidden md:block border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center text-sm text-wens-dark">
            <div class="flex items-center gap-6">
                <a href="tel:+{{ config('wensdoc.whatsapp_primary') }}" class="flex items-center gap-2 hover:text-wens-blue transition-colors">
                    <svg class="w-4 h-4 text-wens-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    {{ config('wensdoc.whatsapp_primary_display') }}
                </a>
                <a href="mailto:{{ config('wensdoc.email') }}" class="flex items-center gap-2 hover:text-wens-blue transition-colors">
                    <svg class="w-4 h-4 text-wens-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    {{ config('wensdoc.email') }}
                </a>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-wens-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <span>Aluva, Kerala</span>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('logo.svg') }}" alt="WensDoc Logo" class="h-10 md:h-12 w-auto">
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-wens-blue hover:text-wens-green focus:outline-none p-2 transition-colors">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8 items-center h-full">
                <a href="{{ route('home') }}" class="text-wens-blue font-semibold border-b-2 border-transparent hover:border-wens-green transition-all h-full flex items-center">Home</a>
                <a href="{{ route('about') }}" class="text-wens-blue font-semibold border-b-2 border-transparent hover:border-wens-green transition-all h-full flex items-center">About</a>
                
                <div class="relative group h-full flex items-center">
                    <button class="text-wens-blue font-semibold border-b-2 border-transparent group-hover:border-wens-green transition-all h-full flex items-center gap-1">
                        Services
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute top-20 -left-4 w-64 bg-white rounded shadow-lg py-3 border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <a href="{{ route('services.attestation') }}" class="block px-5 py-3 text-sm text-wens-blue font-semibold hover:bg-wens-light">Attestation & Dataflow</a>
                        <a href="{{ route('services.visa') }}" class="block px-5 py-3 text-sm text-wens-blue font-semibold hover:bg-wens-light">Visa Consultancy</a>
                        <a href="{{ route('services.travel') }}" class="block px-5 py-3 text-sm text-wens-blue font-semibold hover:bg-wens-light">Travel & Tours</a>
                        <a href="{{ route('services.medical') }}" class="block px-5 py-3 text-sm text-wens-blue font-semibold hover:bg-wens-light">Medical Tourism</a>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="text-wens-blue font-semibold border-b-2 border-transparent hover:border-wens-green transition-all h-full flex items-center">Contact</a>
                
                <a href="https://wa.me/{{ config('wensdoc.whatsapp_primary') }}" target="_blank" class="bg-wens-green hover:bg-wens-green-hover text-white px-6 py-2.5 rounded font-bold shadow-md transition-all duration-300 transform hover:-translate-y-0.5 ml-4">
                    Get in Touch
                </a>
            </nav>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-100 shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-3 rounded-md text-base font-semibold text-wens-blue hover:text-wens-green hover:bg-wens-light transition-colors">Home</a>
            <a href="{{ route('about') }}" class="block px-3 py-3 rounded-md text-base font-semibold text-wens-blue hover:text-wens-green hover:bg-wens-light transition-colors">About</a>
            
            <div class="px-3 py-2">
                <div class="text-base font-semibold text-wens-blue mb-2">Services</div>
                <div class="pl-4 space-y-1 border-l-2 border-wens-light">
                    <a href="{{ route('services.attestation') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-wens-dark hover:text-wens-green hover:bg-wens-light transition-colors">Attestation & Dataflow</a>
                    <a href="{{ route('services.visa') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-wens-dark hover:text-wens-green hover:bg-wens-light transition-colors">Visa Consultancy</a>
                    <a href="{{ route('services.travel') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-wens-dark hover:text-wens-green hover:bg-wens-light transition-colors">Travel & Tours</a>
                    <a href="{{ route('services.medical') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-wens-dark hover:text-wens-green hover:bg-wens-light transition-colors">Medical Tourism</a>
                </div>
            </div>
            
            <a href="{{ route('contact') }}" class="block px-3 py-3 rounded-md text-base font-semibold text-wens-blue hover:text-wens-green hover:bg-wens-light transition-colors">Contact</a>
            
            <div class="px-3 pt-4">
                <a href="https://wa.me/{{ config('wensdoc.whatsapp_primary') }}" target="_blank" class="block w-full text-center bg-wens-green text-white px-6 py-3 rounded font-bold shadow-md hover:bg-wens-green-hover transition-colors">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        if(btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>
