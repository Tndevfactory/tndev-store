<!DOCTYPE html>
<html lang="{{Str::replace('-','_', App::getLocale())}}" dir="{{ App::getLocale()=='ar' ? 'rtl' : 'ltr' }}" class="{{ App::getLocale()=='ar' ? 'ff-Noto-Naskh' : ''  }}">
    <head>

    <script defer data-domain="tn-devfactory.com" src="https://plausible.io/js/plausible.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-VW130EFFBT"></script>
        
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VW130EFFBT');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('meta')
        @yield('title')

        <script src="https://js.stripe.com/v3/"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" defer ></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" > 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        @if (App::getLocale()=='ar')
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
        @endif


        @yield('extra-css')

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       <script src="{{ asset('js/app.js')  }}" defer ></script>

    </head>
        <body class="
        {{ App::getLocale()=='ar' ? 'arabic' : ''  }}
        {{ themeDark() ? 'bg-dark  bg-gradient ' : 'bg-gradient' }} ">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLBF5GW"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

            <header>
                <x-navbar/>
            </header>


            <main>
                @yield('content')
            </main>

             {{-- <x-users-online/> --}}

             <footer>
                 <x-footer/>
             </footer>


             @yield('extra-js')
            {{--<script
                src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap
                &libraries= geometry, places, localContext, places"
                async >
            </script> --}}

        </body>
</html>
