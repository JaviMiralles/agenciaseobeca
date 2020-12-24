<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "Organization",
                        "@id": "https://agenciaseobeca.es/#/schema/organization/agenciaseobeca",
                        "name": "agenciaseobeca",
                        "url": "https://agenciaseobeca.es",
                        "sameAs": ["https://www.facebook.com/agenciaseobeca", "https://www.youtube.com/user/agenciaseobeca/", "https://twitter.com/agenciaseobeca/"],
                        "logo": {
                            "@type": "ImageObject",
                            "@id": "",
                            "url": "",
                            "width": 880,
                            "height": 660,
                            "caption": "agenciaseobeca"
                        },
                        "image": {
                            "@id": "https://agenciaseobeca.es/#/schema/image/agenciaseobeca",
                            "inLanguage": "es-ES",
                            "url": "https://mk0apiagenciaseobecav1r5n.kinstacdn.com/app/uploads/2015/06/agenciaseobeca.png",
                            "width": 880,
                            "height": 660,
                            "caption": "agenciaseobeca"
                        }
                    },
                    {
                        "@type": "WebSite",
                        "@id": "https://agenciaseobeca.es/#/schema/website/agenciaseobeca",
                        "url": "https://agenciaseobeca.es",
                        "name": "agenciaseobeca",
                        "potentialAction": { "@type": "SearchAction", "target": "https://agenciaseobeca.es/?s={search_term_string}", "query-input": "required name=search_term_string" },
                        "publisher": { "@id": "https://agenciaseobeca.es/#/schema/organization/agenciaseobeca" }
                    },
                    {
                        "@type": "WebPage",
                        "@id": "https://agenciaseobeca.es",
                        "url": "https://agenciaseobeca.es",
                        "inLanguage": "es-ES",
                        "name": "agenciaseobeca",
                        "dateModified": "2020-02-03T21:54:07+00:00",
                        "description": "La Agencia de SEO y Marketing en Almería que te ayuda a impulsar tu negocio. Trabajamos SEO, Analítica web, campañas de SEM y CRO",
                        "isPartOf": { "@id": "https://agenciaseobeca.es/#/schema/website/agenciaseobeca" },
                        "about": { "@id": "https://agenciaseobeca.es/#/schema/organization/agenciaseobeca" }
                    },
                    null
                ]
            }
        </script>
        <title>Agencia de SEO y posicionamiento web en Almería</title>
        <meta name="description" content="La Agencia de SEO y Marketing en Almería que te ayuda a impulsar tu negocio. Trabajamos SEO, Analítica web, campañas de SEM y CRO" />
        <meta name="twitter:site" content="@agenciaseobeca" />
        <meta property="og:url" content="https://agenciaseobeca.es" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Agencia de SEO y posicionamiento web en Almería" />
        <meta property="og:description" content="La Agencia de SEO y Marketing en Almería que te ayuda a impulsar tu negocio. Trabajamos SEO, Analítica web, campañas de SEM y CRO" />
        <meta property="og:image" content="" />
        <meta property="og:image:width" content="880" />
        <meta property="og:image:height" content="660" />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:site_name" content="BECA" />
        <link rel="canonical" href="https://agenciaseobeca.es" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta property="article:publisher" content="https://www.facebook.com/agenciaseobeca" />
        <meta property="article:published_time" content="2020-02-03T21:54:07+00:00" />
        <meta property="article:modified_time" content="2020-02-03T21:54:07+00:00" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:creator" content="@agenciaseobeca" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        {{-- Styles --}}
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    <body class="antialiased">
        <header>

        </header>
        <main>
            @yield('content')
        </main>
        <footer>

            {{-- Scripts --}}
        <script src="{{asset('js/app.js')}}"></script>
        </footer>
    </body>
</html>
