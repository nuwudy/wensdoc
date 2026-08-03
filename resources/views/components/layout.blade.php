<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'WensDoc | Global Visas, Attestation & Travel Needs' }}</title>
    <meta name="description" content="WensDoc simplifies your global visas, attestation, and travel needs. Expert document verification, medical tourism, and tours worldwide.">
    
    <!-- Schema Markup for Local SEO -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "TravelAgency",
      "name": "WensDoc",
      "image": "{{ asset('images/logo.png') }}",
      "email": "{{ config('wensdoc.email') }}",
      "telephone": "+{{ config('wensdoc.whatsapp_primary') }}",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "First floor, MKM building, Casino junction, Near Passport Seva Kendra, Aluva Perumbavoor road",
        "addressLocality": "Aluva",
        "addressRegion": "Kerala",
        "postalCode": "683101",
        "addressCountry": "IN"
      },
      "geo": {
        "@@type": "GeoCoordinates",
        "latitude": "10.1067",
        "longitude": "76.3629"
      },
      "url": "https://wensdoc.com",
      "priceRange": "$$"
    }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    <x-header />

    <main class="flex-grow pt-20">
        {{ $slot }}
    </main>

    <x-footer />
    <x-whatsapp-float :message="$whatsappMessage ?? 'Hi WensDoc, I have an inquiry.'" />

</body>
</html>
