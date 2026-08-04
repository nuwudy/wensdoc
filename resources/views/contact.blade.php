<x-layout title="Contact Us | WensDoc" whatsappMessage="Hi WensDoc, I have a general inquiry from the contact page.">
    
    <!-- Page Header -->
    <section class="bg-wens-light py-20 border-b border-gray-200 pt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-wens-blue mb-4">Contact <span class="text-wens-green">Us</span></h1>
            <p class="text-xl text-wens-dark max-w-2xl mx-auto">We're here to help with your global travel and attestation needs.</p>
        </div>
    </section>

    <!-- Contact Info & Map -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Info Cards -->
                <div class="space-y-8">
                    <!-- Address -->
                    <div class="bg-white p-8 rounded shadow-sm border border-gray-100 hover:shadow-lg transition-all flex gap-6 items-start">
                        <div class="w-14 h-14 bg-wens-light text-wens-blue rounded flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-wens-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-wens-blue mb-2">Our Office</h3>
                            <p class="text-wens-dark leading-relaxed">{{ config('wensdoc.address') }}</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="bg-white p-8 rounded shadow-sm border border-gray-100 hover:shadow-lg transition-all flex gap-6 items-start">
                        <div class="w-14 h-14 bg-wens-light text-wens-blue rounded flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-wens-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-wens-blue mb-2">Phone / WhatsApp</h3>
                            <p class="text-wens-dark mb-1"><a href="tel:+{{ config('wensdoc.whatsapp_primary') }}" class="hover:text-wens-green transition-colors">{{ config('wensdoc.whatsapp_primary_display') }}</a> (Primary)</p>
                            <p class="text-wens-dark"><a href="tel:+{{ config('wensdoc.whatsapp_secondary') }}" class="hover:text-wens-green transition-colors">{{ config('wensdoc.whatsapp_secondary_display') }}</a> (Secondary)</p>
                            
                            <a href="https://wa.me/{{ config('wensdoc.whatsapp_primary') }}" target="_blank" class="mt-4 inline-block text-wens-green font-bold hover:text-wens-green-hover">Chat with us &rarr;</a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="bg-white p-8 rounded shadow-sm border border-gray-100 hover:shadow-lg transition-all flex gap-6 items-start">
                        <div class="w-14 h-14 bg-wens-light text-wens-blue rounded flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-wens-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-wens-blue mb-2">Email</h3>
                            <p class="text-wens-dark"><a href="mailto:{{ config('wensdoc.email') }}" class="hover:text-wens-green transition-colors">{{ config('wensdoc.email') }}</a></p>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="bg-white rounded shadow-sm border border-gray-100 overflow-hidden h-[600px] relative">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15711.905663673322!2d76.353381!3d10.1067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDA2JzI0LjEiTiA3NsKwMjEnNDYuNCJF!5e0!3m2!1sen!2sin!4v1614856038481!5m2!1sen!2sin" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"></iframe>
                </div>

            </div>
        </div>
    </section>

</x-layout>
