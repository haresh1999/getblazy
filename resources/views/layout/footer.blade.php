<footer class="custom-footer">
    <div class="common-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 quick-store-links">
                    <div class="footer-logo">
                        <h4 class="mb-4 fw-6 fs-4 mt-0">App Coming Soon!</h4>
                    </div>
                    <div class="app-store-box">
                        <a href="">
                            <img src="{{asset('assets/images/app-store.png')}}" alt="Download on the App Store" />
                        </a>
                        <a href="">
                            <img src="{{asset('assets/images/play-store.png')}}" alt="Get it on Google Play" />
                        </a>
                    </div>
                    <h6 class="title">Weed Delivery Near You</h6>
                    <ul>
                        <li>
                            <a href="{{ route('miami.weed') }}">Miami Weed Delivery</a>
                        </li>
                        <li>
                            <a href="{{ route('chicago.weed') }}">Chicago Weed Delivery</a>
                        </li>
                        <li>
                            <a href="{{ route('detroit.weed') }}">Detroit Weed Delivery</a>
                        </li>

                    </ul>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <h6 class="title">Be the first to hear about new sellers, products, and business opportunities.
                    </h6>
                    <div class="subscription-box">
                        <form id="subscribe-form" action="" method="post">
                            <div class="input-group">
                                <input type="email" name="email" placeholder="youremail@gmail.com" class="flex-grow-1" require />
                                <span class="input-group-text bg-transparent border-0 py-0">
                                    <input type="hidden" name="subscribe">
                                    <button class="btn btn-theme g-recaptcha" data-sitekey="{{ config('services.general.google_recaptcha_site_key') }}" data-callback='onSubmit' data-action='submit'>Subscribe</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <p class="note">
                        we wont spam, read our
                        <a href="<?php echo config('services.general.customer_website_url'). '/email-policy' ?>" class="text-decoration-underline">email policy</a>
                    </p>
                    <div class="social-media-box">
                        <a target="_blank" class="text-decoration-none" href="https://www.facebook.com/profile.php?id=61566402541560">
                            <img src="{{asset('assets/images/icons/social/facebook.svg')}}" alt="Facebook" />
                        </a>
                        <a target="_blank" class="text-decoration-none" href="https://www.instagram.com/getblazy/">
                            <img src="{{asset('assets/images/icons/social/Instagram.svg')}}" alt="Instagram" />
                        </a>
                        <a target="_blank" class="text-decoration-none" href="https://x.com/blazyweed">
                            <img src="{{asset('assets/images/icons/social/twitter.svg')}}" alt="Twitter / X" />
                        </a>
                    </div>
                    <p class="note-1 fst-italic mb-0 mt-3">Get Blazy, Connecting buyers with sellers, with
                        confidence.
                    </p>
                </div>
                <div class="col-xl-4 mt-4 mt-xl-0 links">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="title">Work With Us</h6>
                            <ul>
                                <li>
                                    <a href="{{ config('services.general.customer_website_url') }}/blog">Blogs</a>
                                </li>
                                <li>
                                    <a target="_blank" href="{{ config('services.general.delivery_website_url') }}">Signup to delivery</a>
                                </li>
                                <li>
                                    <a target="_blank" href="{{ config('services.general.blazypay_website_url') }}/plan">Add your Business</a>
                                </li>
                                <li>
                                    <a target="_blank" href="{{ config('services.general.blazypay_website_url') }}/partner">Partner with us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h6 class="title">Legal</h6>
                            <ul>
                                <li>
                                    <a href="{{config('services.general.customer_website_url')}}/terms-and-conditions">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="{{config('services.general.customer_website_url')}}/privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{config('services.general.customer_website_url')}}/cookies">Cookies Policy</a>
                                </li>
                                <li>
                                    <a href="{{config('services.general.customer_website_url')}}/terms-of-use">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-box">
        <div class="container">
            <p>Get Blazy weed Copyright
                {{ date('Y', strtotime('+1 year')) }}, All Rights Reserved.
            </p>
        </div>
    </div>
</footer>

<div class="modal fade shop-now-modal" id="shop-now-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="35" height="35" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21.5217" cy="21.1272" r="20.7561" fill="#E7F5EA" />
                        <path d="M22.5585 21.7196L29.486 14.792C29.9368 14.3414 29.9368 13.6128 29.486 13.1622C29.0354 12.7116 28.3068 12.7116 27.8562 13.1622L20.9286 20.0898L14.0011 13.1622C13.5503 12.7116 12.822 12.7116 12.3713 13.1622C11.9205 13.6128 11.9205 14.3414 12.3713 14.792L19.2987 21.7196L12.3714 28.6472C11.9205 29.0978 11.9205 29.8264 12.3714 30.277C12.4783 30.3842 12.6053 30.4692 12.7451 30.5272C12.885 30.5851 13.0349 30.6149 13.1863 30.6147C13.4813 30.6147 13.7764 30.5018 14.0012 30.277L20.9286 23.3494L27.8562 30.277C27.9631 30.3842 28.0902 30.4692 28.23 30.5271C28.3699 30.5851 28.5198 30.6149 28.6711 30.6147C28.9662 30.6147 29.2613 30.5018 29.486 30.277C29.9368 29.8264 29.9368 29.0978 29.486 28.6472L22.5585 21.7196Z" fill="#3CAE53" />
                    </svg>
                </button>

                <div class="content">
                    <form action="{{ route('subscribe') }}" method="post">
                        @csrf
                        <input type="hidden" name="latitude" value=" {{$location['latitude'] ?? null}}" />
                        <input type="hidden" name="longitude" value=" {{$location['longitude'] ?? null}}" />
                        <input type="hidden" name="zipcode" value=" {{$location['zipcode'] ?? null}}" />
                        <input type="hidden" name="timezone" value=" {{$location['timezone'] ?? null}}" />
                        <input type="hidden" name="city" value=" {{$location['city'] ?? null}}" />
                        <input type="hidden" name="state" value=" {{$location['state'] ?? null}}" />
                        <input type="hidden" name="country" value=" {{$location['country'] ?? null}}" />
                        <input type="hidden" name="delivery_type" value=" {{$location['delivery_type'] ?? 'delivery'}}" />
                        <img src="{{asset('assets/images/logo-blazy-weed-2.png')}}" class="logo" alt="Blazy Weed logo" />
                        <h4 class="title">Start Shopping </h4>
                        <p>Enter your address or city below and we'll show you the best products and dispensaries in
                            your area. </p>
                        <div class="search-box mb-2">
                            <div class="input-group">
                                <span>
                                    <img src="{{asset('assets/images/icons/map-marker-2.svg')}}" alt="Map marker icon" />
                                </span>
                                <input name="address" id="auto_complete" type="text" class="form-control" placeholder="Enter your address or city to get started..." value="{{ $location['address'] ?? null }}" />
                            </div>
                        </div>
                        <button name="location" class="btn btn-theme rounded w-100" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>