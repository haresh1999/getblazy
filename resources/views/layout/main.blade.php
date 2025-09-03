<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="{{env('APP_NAME')}}" />

    {{-- META START --}}
    @yield('meta')
    {{-- META END --}}

    @include('layout.style')

    @if(config('app.env') === 'production')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VC11BVJJV2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

     function gtag() {
         dataLayer.push(arguments);
     }
     gtag('js', new Date());

     gtag('config', 'G-VC11BVJJV2');
    </script>
    @endif

    {{-- PAGE STYLE START --}}
    @yield('style')
    {{-- PAGE STYLE END --}}
</head>

<body>
    <h1 style="position:absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden;"> Get Blazy Adult Marketplace powered by Blazy Pay </h1>

    {{-- PAGE HEADER START --}}
    @include('layout.header')
    {{-- PAGE HEADER END --}}

    {{-- HERO-SECTION START --}}
    @include('layout.hero')
    {{-- HERO-SECTION END --}}

    {{-- FEATURE SECTION START --}}
    @yield('feature_content')
    {{-- FEATURE SECTION END --}}

    {{-- SHOPPING-FEATURES START --}}
    @include('layout.card')
    {{-- SHOPPING-FEATURES END --}}

    {{-- MAIN CONTENT START --}}
    @yield('main_content')
    {{-- MAIN CONTENT END --}}

    {{-- PAGE FOOTER START --}}
    @include('layout.footer')
    {{-- PAGE FOOTER END --}}

    {{-- TOTAL SCRIPT START --}}
    @include('layout.script')
    {{-- TOTAL SCRIPT END --}}

    {{-- PAGE SCRIPT START --}}
    @yield('script')
    {{-- PAGE SCRIPT END --}}
</body>

</html>