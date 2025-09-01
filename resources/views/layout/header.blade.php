<header class="header main-header">
    <div class="header-1 row g-0 gap-1 justify-content-between align-items-center w-100">
        <!-- Toggle Button for Mobile Menu -->
        <div class="col-1 col-md-3 justify-content-start align-items-center text-center navbar-toggler-wrapper">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{ asset('assets/images/icons/toggle-th.svg') }}" alt="Menu toggle icon" width="20" />
            </button>
        </div>

        <!-- Logo -->
        <div class="col-xxl-3 col-xl-auto col-md-auto col-5 d-flex justify-content-start justify-content-lg-center">
            <a href="{{ env('APP_URL') }}" class="logo-box text-lg-center text-start">
                <img src="{{ asset('assets/images/logo-balzy-weed.png') }}" alt="Blazy Weed logo" />
            </a>
        </div>

        <!-- <div class="col"> -->
        <div class="navbar-collapse collapse show col" id="navbarNav">
            <ul class="nav flex-column flex-md-row">
                @foreach ($businessTypes as $businessType)
                <li>
                    <a href="{{ config('services.general.customer_website_url').'/store/'.$businessType->slug }}">
                        {{ $businessType->slug == 'tobacco' ? 'Smokeshop' : ($businessType->slug == 'alcohol' ? 'Liquor Store' : $businessType->name) }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- </div> -->

        <!-- Login and Signup Buttons -->
        <div class="col-xxl-3 col-xl-2 col-md-3 col-auto">
            <ul class="top-right-list">
                <li>
                    <a class="btn fw-bold" href="{{ config('services.general.customer_website_url') }}?modal=customer-login-modal">Login</a>
                </li>
                <li>
                    <a class="btn btn-outline-black-100 border-2 rounded px-xxl-4 px-xl-3" href="{{ config('services.general.customer_website_url') }}?modal=customer-signup-modal">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</header>