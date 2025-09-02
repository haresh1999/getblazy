@extends('layout.main')

@section('meta')
<title>Miami Weed Delivery in 90 Minutes | Get Blazy</title>
<meta name="description" content="Fast, discreet Miami weed delivery in 90 minutes. Order flower, vapes, and edibles from trusted local retailers. No medical card required." />
<meta name="keywords" content="Miami weed delivery, weed delivery Miami, cannabis delivery Miami, Miami same day weed delivery, marijuana delivery Miami" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{url()->current()}}" />
<meta property="og:site_name" content="Get Blazy" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Miami Weed Delivery in 90 Minutes | Get Blazy" />
<meta property="og:description" content="Trusted Miami weed delivery. Shop premium flower, vapes, and edibles with fast, discreet delivery." />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:image" content="{{ asset('assets/images/logo-blazy-weed-2.png') }}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@GetBlazy" />
<meta name="twitter:title" content="Miami Weed Delivery in 90 Minutes | Get Blazy" />
<meta name="twitter:description" content="Order online. Discreet Miami weed delivery in 90 minutes or less." />
<meta name="twitter:image" content="{{ asset('assets/images/logo-blazy-weed-2.png') }}" />
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
            "sameAs": ["https://www.instagram.com/getblazy", "https://www.facebook.com/getblazy", "https://x.com/getblazy"]
        },
        {
            "@type": "WebPage",
            "@id": "https://getblazy.com/miami-weed-delivery/#webpage",
            "url": "https://getblazy.com/miami-weed-delivery/",
            "name": "Miami Weed Delivery in 90 Minutes — Get Blazy",
            "isPartOf": {
                "@id": "https://getblazy.com/#org"
            },
            "inLanguage": "en",
            "primaryImageOfPage": {
                "@type": "ImageObject",
                "url": "https://getblazy.com/assets/images/weed-delivery-driver-miami-florida.png"
            }
        },
        {
            "@type": "FAQPage",
            "@id": "https://getblazy.com/miami-weed-delivery/#faq",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "How fast is Miami weed delivery with Get Blazy?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Delivery is typically 90 minutes or less within our active Miami zones, depending on store and driver availability."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do I need a medical card to order in Miami?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No medical card required. You must be of legal age and comply with local laws at checkout."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Which Miami neighborhoods do you serve?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Service commonly includes Miami Beach, Brickell, Downtown, Wynwood, Little Havana, Edgewater, and nearby areas. Availability may vary by partner store."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What payment methods can I use?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Partners typically accept Cash App, Zelle, Apple Pay and other options via Blazy Pay. Options may vary by store."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I track my order?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "After checkout you’ll receive status updates from the partner store/driver. For support, use the contact options in your order confirmation."
                    }
                }
            ]
        }
    ]
}
</script>
@endverbatim
@endsection

@section('style')

@endsection

@section('feature_content')

<section class="why-choose">
    <div class="container">
        <div class="mb-64 text-center">
            <h2 class="custom-section-title mb-2">What We do</h2>
            <p class="custom-section-subtitle mb-0">Order adult products online from trusted sellers, delivered fast with Get Blazy.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="why-choose-img">
                    <img src="{{asset('assets/images/feature-blazy-user-weed-delivery-miami.png')}}" alt="Blazy user features for weed delivery in Miami | Funciones para usuarios de Blazy en entrega de marihuana en Miami" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 position-relative">
                <div class="why-choose-content position-relative z-1">
                    <h3 class="custom-section-title mb-3">Why Choose Get Blazy for Miami Weed Delivery?</h3>
                    <ul class="section-text mb-3">
                        <li><strong>Speed:</strong> most orders delivered in about 90 minutes.</li>
                        <li><strong>Trust:</strong> we connect you with vetted local retailers.</li>
                        <li><strong>Discreet:</strong> private, professional delivery experience.</li>
                        <li><strong>Flexible pay:</strong> options like Cash App, Zelle, Apple Pay via Blazy Pay.
                        </li>
                    </ul>

                    <h4 class="title-sm">How to order</h4>
                    <ol class="section-text mb-0">
                        <li>Enter your address to see eligible stores in Miami.</li>
                        <li>Add products to your cart and choose delivery.</li>
                        <li>Complete checkout — get updates as your order is prepped and delivered.</li>
                    </ol>
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

<!-- Coverage Section start -->
<section class="coverage-section py-5">
    <div class="container">
        <h2 class="custom-section-title text-center mb-2">Miami Delivery Coverage</h2>
        <p class="custom-section-subtitle text-center mb-0">Commonly served areas include <strong> Miami Beach, Brickell, Downtown, Wynwood, Little Havana, Edgewater, Midtown, Coral Gables </strong> and nearby neighborhoods. Availability varies by partner store and time of day.</p>
        <div class="coverage-badge-wrapper d-flex flex-wrap justify-content-center mt-4">
            <div class="coverage-badge">Miami Beach</div>
            <div class="coverage-badge">Brickell</div>
            <div class="coverage-badge">Wynwood</div>
            <div class="coverage-badge">Little Havana</div>
            <div class="coverage-badge">Edgewater</div>
            <div class="coverage-badge">Downtown</div>
            <div class="coverage-badge">Coral Gables</div>
        </div>
    </div>
</section>
<!-- Coverage Section end -->
@endsection

@section('main_content')
<!-- faq-section start -->
<section class="faq-section">
    <div class="container">
        <h2 class="custom-section-title text-center mb-2">Miami Weed Delivery — FAQs</h2>
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionPanelsStayOpenExample">

                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                1. How fast is Miami weed delivery with Get Blazy?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <p>Most orders arrive within about 90 minutes, depending on store prep time,
                                    distance, and driver availability.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                2. Do I need a medical card to order in Miami?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>No medical card required. You must be of legal age and comply with local laws at checkout.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                3. Which areas do you cover?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Coverage typically includes Miami Beach, Brickell, Downtown, Wynwood, Little Havana,
                                    Edgewater, and nearby areas. Availability varies by partner store.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                4. What payments do you support?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Payment options vary by partner and can include Cash App, Zelle, Apple Pay and more via Blazy Pay.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                5. How do I get support?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Use the contact link in your order confirmation or visit our <a target="_blank" href="{{ config('services.general.blazypay_website_url') }}/contact">Contact page</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- faq-section end -->

<!-- cta section start -->
<section class="cta-section">
    <div class="container">
        <div class="cta-section-box text-center">
            <h5 class="custom-section-title">Ready to order?</h5>
            <p class="custom-section-subtitle">Find a trusted Miami store and get your order delivered fast.</p>
            <button class="btn btn-theme rounded min-w-240" data-bs-toggle="modal" data-bs-target="#shop-now-modal">Start Shopping</button>
        </div>
    </div>
</section>
<!-- cta section end -->
@endsection

@section('script')

@endsection