@extends('layout.main')

@section('meta')
<title>Miami Weed Delivery in 90 Mins | Chicago & Detroit – Get Blazy</title>
<meta name="description" content="Fast, discreet weed delivery in Miami, Chicago & Detroit. Get Blazy delivers premium cannabis, edibles & vapes with same-day service—no medical card needed." />
<meta name="keywords" content="Miami weed delivery, Chicago weed delivery, Detroit weed delivery, cannabis delivery Miami, cannabis delivery Chicago, cannabis delivery Detroit, same day weed delivery" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ url()->current() }}" />
<meta property="og:title" content="Weed Delivery in Miami, Chicago & Detroit | Get Blazy" />
<meta property="og:description" content="Trusted weed delivery in Miami, Chicago, and Detroit. Shop premium cannabis, vapes, and edibles with same-day discreet delivery." />
<meta property="og:image" content="{{asset('assets/images/logo-balzy-weed.png')}}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Get Blazy" />
<meta name="twitter:site" content="@GetBlazy" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Weed Delivery in Miami, Chicago & Detroit | Get Blazy" />
<meta name="twitter:description" content="Get Blazy delivers cannabis in Miami, Chicago & Detroit. Fast, discreet weed delivery you can trust. No medical card required." />
<meta name="twitter:image" content="{{asset('assets/images/logo-balzy-weed.png')}}" />
<meta name="twitter:url" content="{{ url()->current() }}" />
@verbatim
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@graph": [{
            "@type": "Organization",
            "@id": "https://getblazy.com/#org",
            "name": "Get Blazy LLC",
            "url": "https://getblazy.com/",
            "logo": {
                "@type": "ImageObject",
                "url": "https://getblazy.com/assets/images/logo-300x300.png",
                "width": 300,
                "height": 300
            },
            "sameAs": [
                "https://www.instagram.com/getblazy",
                "https://www.facebook.com/getblazy",
                "https://x.com/getblazy"
            ]
        },
        {
            "@type": "WebSite",
            "@id": "https://getblazy.com/#website",
            "url": "https://getblazy.com/",
            "name": "Get Blazy",
            "publisher": {
                "@id": "https://getblazy.com/#org"
            },
            "inLanguage": "en"
        },
        {
            "@type": "WebPage",
            "@id": "https://getblazy.com/#webpage",
            "url": "https://getblazy.com/",
            "name": "Get Blazy — Fast Local Delivery & Blazy Pay Secure Payments",
            "isPartOf": {
                "@id": "https://getblazy.com/#website"
            },
            "about": {
                "@id": "https://getblazy.com/#org"
            },
            "inLanguage": "en",
            "primaryImageOfPage": {
                "@type": "ImageObject",
                "url": "https://getblazy.com/assets/images/logo-300x300.png"
            },
            "description": "Get Blazy connects customers with licensed retailers for fast local delivery. Sellers use Blazy Pay to accept secure, compliant payments with an all-in-one dashboard."
        }
    ]
}
</script>
@endverbatim
@endsection

@section('style')

@endsection

@section('feature_content')
<section class="feature-section">
    <div class="container">
        <div class="mb-64 text-center">
            <h2 class="custom-section-title mb-2">What We do</h2>
            <p class="custom-section-subtitle mb-0">Order adult products online from trusted sellers, delivered fast with Get Blazy.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="feature-section-img">
                    <img src="{{asset('assets/images/feature-blazy-user-weed-delivery-miami.png')}}" alt="Blazy user features for weed delivery in Miami | Funciones para usuarios de Blazy en entrega de marihuana en Miami" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 position-relative">
                <div class="feature-section-bg">
                    <img src="{{asset('assets/images/weed-delivery-driver-miami-florida.png')}}" alt="Weed delivery driver on scooter in Miami, Florida | Repartidor de marihuana en scooter en Miami, Florida" class="img-fluid">
                </div>
                <div class="feature-section-content position-relative z-1">
                    <h3 class="custom-section-title">Everything you need all in one place, for buyers and sellers.</h3>
                    <p class="section-text">At Get Blazy, we connect consumers with licensed local retailers and help wholesalers expand their reach. Whether you're here to shop or to grow your business, our platform makes it easy, secure, and discreet.</p>
                    <div class="d-flex align-items-center get-blazy-wrap gap-3">
                        <img src="{{asset('assets/images/blazyweed-logo-mark-miami.png')}}" alt="Blazyweed logo mark for weed delivery in Miami | Logotipo de Blazyweed para entrega de marihuana en Miami" class="img-fluid">
                        <span class="get-blazy">Get Blazy</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 d-flex justify-content-center">
                <button class="btn btn-theme rounded min-w-240" data-bs-toggle="modal" data-bs-target="#shop-now-modal">Shop Now</button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('main_content')
<!-- business-growth start -->
<section class="business-growth">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="business-growth-img">
                    <img src="{{asset('assets/images/cannabis-store-owners-weed-delivery-miami.png')}}" alt="Weed delivery platform for cannabis store owners in Miami | Plataforma de entrega de marihuana para dueos de tiendas en Miami" class="img-fluid">
                </div>
            </div>

            <!-- Right Text Content -->
            <div class="col-lg-6">
                <div class="business-growth-content">
                    <h3 class="custom-section-title mb-2">Grow Your Business with Get Blazy</h3>
                    <p class="section-text">
                        Whether you run a retail shop, dispensary, or wholesale brand, Get Blazy gives you the
                        tools
                        to sell smarter — with no extra effort.
                    </p>
                    <a href="{{ config('services.general.customer_website_url') . '?modal=customer-signup-modal' }}" class="btn btn-theme rounded min-w-200">Sign Up</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- business-growth end -->
<!-- brand-partners start -->
<section class="brand-partners">
    <div class="container">
        <div class="brand-partners-wrapper d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="brand-partner-item">
                <img src="{{ asset('assets/images/weed-delivery-brand-partnerships-miami-florida.png') }}" alt="Brand partnerships supporting weed delivery in Miami Florida | Alianzas de marca que respaldan la entrega de marihuana en Miami Florida" class="img-fluid">
            </div>
            <div class="brand-partner-item">
                <img src="{{ asset('assets/images/cannabis-delivery-brand-support-miami-florida.png') }}" alt="Supporting cannabis delivery with trusted brand partners in Miami Florida | Apoyo a la entrega de cannabis con socios de marca confiables en Miami Florida" class="img-fluid">
            </div>

            <div class="brand-partner-item">
                <img src="{{ asset('assets/images/weed-delivery-collaborations-miami-florida.png') }}" alt="Collaborations boosting weed delivery services in Miami Florida | Colaboraciones que mejoran los servicios de entrega de marihuana en Miami Florida" class="img-fluid">
            </div>
            <div class="brand-partner-item">
                <img src="{{ asset('assets/images/cannabis-delivery-service-partners-miami-florida.png') }}" alt="Partnering for enhanced cannabis delivery in Miami Florida | Asociaciones para mejorar la entrega de cannabis en Miami Florida" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- brand-partners end -->
<!-- blazy-tools start -->
<section class="blazy-tools pb-5">
    <div class="container">
        <div class="mb-64 text-center">
            <h2 class="custom-section-title mb-2">One platform. Two powerful tools.</h2>
            <p class="custom-section-subtitle mb-0">Whether you sell in-store or online,<span class="d-block">Get Get Blazy gives you everything you need to manage, sell, and get paid all in one place.</span></p>
        </div>
        <div class="row align-items-stretch">
            <!-- Blazy Hub -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="blazy-hub-tool">
                    <div class="brand-logo">
                        <img src="{{ asset('assets/images/blazyweed-hub-weed-delivery-network-miami.png') }}" alt="Blazyweed hub for fast and reliable weed delivery in Miami | Centro Blazyweed para entrega rápida y confiable de marihuana en Miami" class="img-fluid">
                    </div>
                    <div class="blazy-hub-tool-top">
                        <h5 class="title-sm mb-2">Blazy Hub</h5>
                        <p class="text">Your all-in-one seller dashboard.</p>
                    </div>

                    <ul class="list-unstyled list-items">
                        <li class="list-item">Manage products and orders</li>
                        <li class="list-item">Track performance in real-time</li>
                        <li class="list-item">Organize your team</li>
                        <li class="list-item">Access from anywhere</li>
                    </ul>
                </div>
            </div>

            <!-- Blazy Pay -->
            <div class="col-lg-6">
                <div class="blazy-pay-tool position-relative">
                    <div class="d-flex align-items-center gap-md-4 gap-3">
                        <div class="brand-mark">
                            <picture>
                                <source srcset="{{ asset('assets/images/blazy-brand-mark.webp') }}" type="image/webp">
                                <source srcset="{{ asset('assets/images/blazy-brand-mark.png') }}" type="image/png">
                                <img src="{{asset('assets/images/blazy-brand-mark.png')}}" alt="Get Blazy brand mark" class="img-fluid">
                            </picture>
                        </div>
                        <div class="brand-logo ">
                            <img src="{{asset('assets/images/blazy-pay.png')}}" alt="Get Blazy brand mark" class="img-fluid">
                        </div>
                    </div>
                    <div class="blazy-pay-tool-top">
                        <h5 class="title-sm mb-2 text-white">Blazy Pay – Get Paid Your Way</h5>
                        <p class="text text-white">A seamless payment solution designed for adult product
                            sellers.
                        </p>
                    </div>
                    <ul class="list-unstyled list-items">
                        <li class="list-item">Accept CashApp, Zelle, Apple Pay, Google Pay & more</li>
                        <li class="list-item">Fast deposits, no middlemen</li>
                        <li class="list-item">Secure and fully integrated</li>
                        <li class="list-item">Built for your business</li>
                    </ul>
                    <div class="blazy-pay-tool-bg">
                        <img src="{{asset('assets/images/weed-delivery-secure-payment-options-miami.png')}}" alt="Secure payment methods for weed delivery in Miami | Métodos de pago seguros para entrega de marihuana en Miami" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA -->
        <div class="text-center">
            <h5 class="cta-title">Start selling smarter with Get Blazy.</h5>
            <a href="{{ config('services.general.blazypay_website_url') }}" class="btn btn-theme rounded min-w-200">Partner with Us</a>
        </div>
    </div>
</section>
<!-- blazy-tools end -->
@endsection

@section('script')

@endsection