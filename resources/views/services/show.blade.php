<x-layout title="{{ $title }} | WensDoc" :whatsappMessage="'Hi WensDoc, I need information regarding ' . $title">
    
    <!-- Page Header -->
    <section class="bg-wens-light py-20 border-b border-gray-200 pt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-wens-blue mb-4">{{ $title }}</h1>
            <div class="flex items-center justify-center gap-2 text-wens-dark font-medium">
                <a href="{{ route('home') }}" class="hover:text-wens-green transition-colors">Home</a>
                <span>/</span>
                <span>Services</span>
                <span>/</span>
                <span class="text-wens-green">{{ $title }}</span>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded p-8 md:p-12 shadow-sm hover:shadow-lg border border-gray-100 hover:border-wens-green transition-all text-center">
                <div class="w-20 h-20 bg-wens-light text-wens-blue rounded flex items-center justify-center mx-auto mb-8">
                    <svg class="w-10 h-10 text-wens-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="text-3xl font-bold text-wens-blue mb-6">Expert <span class="text-wens-green">{{ $title }}</span> Services</h2>
                <p class="text-lg text-wens-dark mb-10 leading-relaxed">
                    We provide comprehensive, end-to-end solutions for all your {{ strtolower($title) }} needs. Our experienced team ensures a smooth, fast, and hassle-free process from start to finish.
                </p>
                
                <a href="https://wa.me/{{ config('wensdoc.whatsapp_primary') }}?text={{ urlencode('Hi WensDoc, I need information regarding ' . $title) }}" target="_blank" class="inline-flex items-center gap-2 bg-wens-green hover:bg-wens-green-hover text-white px-8 py-4 rounded font-bold text-lg shadow-md transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.666.598 1.236.784 1.409.871.173.087.275.072.376-.043.1-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 3.825 0 6.938 3.112 6.938 6.937 0 3.825-3.113 6.938-6.938 6.938z"/></svg>
                    Inquire via WhatsApp
                </a>
            </div>
        </div>
    </section>

</x-layout>
