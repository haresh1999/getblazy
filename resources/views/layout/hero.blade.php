<div class="hero-section banner" style=" background: url(assets/images/buy-cannabis-online-miami-florida.png) no-repeat;" title="Cannabis and adult products banner with online shopping option in Miami, FL | Banner de productos de cannabis y para adultos con opción de compra en lnea en Miami, FL" aria-labelledby="Trusted source for purchasing cannabis online in Miami, Florida, Houston">
    <div class="caption-box">
        <div class="row mar-b-75">
            <div class="col d-flex gap-5">
                <button class="btn btn-transparnet text-white fw-6 text-decoration-underline px-0">
                    Shop Now
                </button>
                <a target="_blank" class="btn transparent text-gray-850 px-0 hover-text-theme-primary" href="{{ config('services.general.blazypay_website_url') }}">
                    Are you a Seller?
                </a>
            </div>
        </div>
        <div class="text-light">
            <p class="mar-b-15">
                {{ $subTitle }}
            </p>
            <h2 class="fw-7 mar-b-30">
                {{$title}}
            </h2>

            <div class="search-box-wrapper">
                <form action="{{ route('shopping') }}" method="post">
                    @csrf
                    <input type="hidden" name="latitude" value="{{ $location['latitude'] ?? null }}" />
                    <input type="hidden" name="longitude" value="{{ $location['longitude'] ?? null }}" />
                    <input type="hidden" name="zipcode" value="{{ $location['zipcode'] ?? null }}" />
                    <input type="hidden" name="timezone" value="{{ $location['timezone'] ?? null }}" />
                    <input type="hidden" name="city" value="{{ $location['city'] ?? null }}" />
                    <input type="hidden" name="state" value="{{ $location['state'] ?? null }}" />
                    <input type="hidden" name="country" value="{{ $location['country'] ?? null }}" />
                    <div class="search-box">
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-0 py-0">
                                <svg width="26" height="26" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect x="0.671875" y="0.304688" width="22.2947" height="22.2947" fill="url(#pattern0_9852_14370)" />
                                    <defs>
                                        <pattern id="pattern0_9852_14370" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_9852_14370" transform="scale(0.0111111)" />
                                        </pattern>
                                        <image id="image0_9852_14370" width="90" height="90" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFf0lEQVR4nO2dTWhcVRSAj/fkzTnTTJO0NobozDmTH0iKvxDQlX+IP0VQq6gVxI1Vd+JGqIJSBKm6Mm6KXbgoYv1BRHBjraAiSLVWXai1GtEa04K2FJSmVsjIfZOsEpNJZu7Pm3kfHBhCkjn347z77tx73x2AnJycnJycnJzOhUcqhvU+JH0GSd8wJF8h6xSSnkKWf9JIX+uUITmMJK/b3zWs2+zfhk4/ZhCpehOy7kHWH5G11mTY//EyUuVGADChGxceHhYkfR5Jp1sgd+mw/5v0Ofte0HGQDCPrJLKcdSZ4Ucg5JN0LBR2H9meg21YXsv7rT/CisO89CTDaA+0IFuUuJP09oODFXUpRt0L7MEr1biICuUsL3wtQLkKm4arOD81qMYcdImZ3WFjQzUhyLLREbLyyZ5Jk6DLIEl3F6lVIejK4PF617JNdxaErIQskSeXiTErmhZDT8Vd28aIykvwaXpY2W9nT9v4CcTJK6bxDaEncmjAs3wAoQ2wgy+7QcrD18RJE92EkvJSakyhUb4c4GFvvdFKIAwfpbwD9pdCWAVlfDC6Dnct+IazlQnUs8ARRzU/IOaDKSDDPyPJKeAnqK/aEscwjlfqyUnABNW9VHWJsna6MBG+8+g2SXb49G3s37jzROm1rzJvl+YXU8A3nIFV9gz/R9dXqWmeG7PYp+iefjTMs7xuS7XY4adcd0yjouCF5yLDu9yz6B39bBPw16kgXV65eKaUurl5jBfjKy85SOvec7iDyUcUkHwFoX8OJ9coGQ/Kxl9y4ei+4Jt2m5aGSYTWSF+iVDchy1Hl+pDvBNXYvnIeGXLfW/OrdiOv85DVwjevJfcO6v+kcWQ84zZH0ELgGSX5x2wh5sNkcDcnDjqv6Z3ANkv7pshGQDuGapKDjTkWT/gGucT2RBC2ZZO8vua1oOQuuQZbZ+EWP9rgVrWfANUhyIgNdx2anokmOg2vsGNdlI4z9qN0khqqPuK1o+a41NpdthBx0Kpr1g6ZzZP3QcTF8Bq5Bkn1uq0XtXf36tebXxdVrPeT3KrjGsO5w3hDWKSgNblp1cj3ljS162GiFq04eB9dgQbd4EF2zE0R27qLhxHrKGw3pJz5yQ6reDM7pHhpA1jkvDWI52si8h+1qfFTyfMxB9/AF7kWnN0Q95KlRtfqlqgfsx2o7bKuPs/tL9rX9mesb36JcSD/3IjkVzfKUz8ZhRGFYn/AmOknKl4ZuMAaK+lXlEXsJdVw1k37hVXIqmuX+jhPNus27aICJpKM20ZDdPDORBBANYIr6WMdUc0EehXBMJD6X+TFYyPfBqnkBLFRuCy9C3UZBt0AMGJJ3gstgN2FI34JoKA1uspPhoaVgq4N0BtZfeD7EBBbkVn9zIOoj5pD0FogRP7uY1EsYlqchYs7zspOJHUsmedu2BeJmoNsu9WRXsn4KMLgOssFwr++pVGyFZJavV7XYEAWl0X774HqmJJfWsHwWB9pnL0WMvruQg9EN41bPQLdhfS/eStZ3M9QnrwjOn3dXiywmvT7O5gvDlQeQ9e8IBP9l59OhrSlUx+yNJ6Dkb5OkfAl0BspBDh1MDxNsn/64YbCoW13vTq0LluNY1Dugs9G+9Kxnd1X8ZobHx63HcOWe+VPOWyX4FBbl7tDtivfIeWr+qS9D+mV2zxr1uYjAzTyUKUfyrqJBknV6xdpOS5fZJKle3uj75EC64X3XGkYXz+by1nae3swqJJ9o2+PkXWNItvt8yKiT6Wpo21nI7VrtgmF9csVqZt0ROs92Ge7NLiP6TBtM2scBLreyTrIvdH5tAxb1zv8V3V7fpRKactGevb/EB5TT2f8OlchA0p1Z202UVYwVm363C8kx+2RY/hV6OTk50N78B1F1P3cr8q2uAAAAAElFTkSuQmCC" />
                                    </defs>
                                </svg>
                            </span>
                            <input name="address" type="text" placeholder="Enter your address or city to get started..." class="flex-grow-1" id="location-search-textbox" autocomplete="off" value="<?php echo $location['address'] ?? null; ?>" />
                            <span class="input-group-text bg-transparent border-0 py-0">
                                <button type="submit" name="location" class="btn btn-theme start-shopping-btn">
                                    Start Shopping
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="location-box">
                        <nav class="nav nav-pills flex-row">
                            <label for="delivery" class="flex-fill text-center nav-link active" aria-current="page" href="#" data-bs-toggle="tab" data-bs-target="#delivery-tab-pane">Delivery</label>
                            <input class="d-none" type="radio" id="delivery" name="delivery_type" value="delivery" checked />
                            <label for="pickup" class="flex-fill text-center nav-link" aria-current="page" href="#" data-bs-toggle="tab" data-bs-target="#pickup-tab-pane">Pickup</label>
                            <input class="d-none" type="radio" id="pickup" name="delivery_type" value="pickup" />
                        </nav>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="pickup-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <ul>
                                    <li class="current-location">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4281 15.4793C14.5458 15.4793 16.2625 13.7626 16.2625 11.6449C16.2625 9.52725 14.5458 7.81055 12.4281 7.81055C10.3105 7.81055 8.59375 9.52725 8.59375 11.6449C8.59375 13.7626 10.3105 15.4793 12.4281 15.4793Z" fill="#37AC4E" />
                                            <path d="M23.4508 10.6872H20.9978C20.5541 6.69534 17.3778 3.51867 13.3856 3.0749V0.621892C13.3856 0.558939 13.3732 0.496597 13.3492 0.438428C13.3251 0.380259 13.2898 0.327406 13.2453 0.28289C13.2008 0.238374 13.1479 0.203068 13.0898 0.178992C13.0316 0.154917 12.9693 0.142543 12.9063 0.142578H11.9477C11.8848 0.142537 11.8224 0.154906 11.7642 0.17898C11.7061 0.203053 11.6532 0.238357 11.6087 0.282874C11.5642 0.32739 11.5289 0.380246 11.5048 0.438417C11.4807 0.496589 11.4684 0.558936 11.4684 0.621892V3.0749C7.47614 3.51867 4.29992 6.69529 3.85619 10.6872H1.40314C1.34019 10.6871 1.27785 10.6995 1.21968 10.7236C1.16151 10.7476 1.10866 10.7829 1.06414 10.8274C1.01962 10.872 0.984318 10.9248 0.960242 10.983C0.936167 11.0411 0.923793 11.1035 0.923828 11.1664V12.125C0.923787 12.188 0.936156 12.2503 0.96023 12.3085C0.984303 12.3667 1.01961 12.4195 1.06412 12.464C1.10864 12.5085 1.1615 12.5438 1.21967 12.5679C1.27784 12.592 1.34019 12.6044 1.40314 12.6043H3.85619C4.29992 16.5961 7.47614 19.7728 11.4684 20.2166V22.6696C11.4684 22.7325 11.4807 22.7949 11.5048 22.8531C11.5289 22.9112 11.5642 22.9641 11.6087 23.0086C11.6532 23.0531 11.7061 23.0884 11.7642 23.1125C11.8224 23.1366 11.8848 23.1489 11.9477 23.1489H12.9063C12.9693 23.1489 13.0316 23.1366 13.0898 23.1125C13.148 23.0884 13.2008 23.0531 13.2453 23.0086C13.2898 22.9641 13.3251 22.9112 13.3492 22.8531C13.3733 22.7949 13.3857 22.7325 13.3856 22.6696V20.2166C17.3778 19.7728 20.5541 16.5961 20.9978 12.6043H23.4509C23.5138 12.6044 23.5762 12.592 23.6344 12.5679C23.6925 12.5438 23.7454 12.5085 23.7899 12.464C23.8344 12.4195 23.8697 12.3667 23.8938 12.3085C23.9179 12.2503 23.9302 12.188 23.9302 12.125V11.1664C23.9302 11.1035 23.9178 11.0411 23.8938 10.983C23.8697 10.9248 23.8344 10.872 23.7898 10.8274C23.7453 10.7829 23.6925 10.7476 23.6343 10.7236C23.5761 10.6995 23.5138 10.6871 23.4508 10.6872ZM12.427 18.3559C8.72742 18.3559 5.71683 15.3458 5.71683 11.6457C5.71683 7.94572 8.72742 4.93558 12.427 4.93558C16.1266 4.93558 19.1372 7.94568 19.1372 11.6457C19.1372 15.3458 16.1266 18.3559 12.427 18.3559Z" fill="#37AC4E" />
                                        </svg>
                                        Use Current Location
                                    </li>
                                </ul>
                                <ul class="g-map-result"></ul>
                            </div>
                            <div class="tab-pane fade" id="delivery-tab-pane" role="tabpanel" aria-labelledby="delivery-tab" tabindex="0">
                                <ul>
                                    <li class="current-location">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.4281 15.4793C14.5458 15.4793 16.2625 13.7626 16.2625 11.6449C16.2625 9.52725 14.5458 7.81055 12.4281 7.81055C10.3105 7.81055 8.59375 9.52725 8.59375 11.6449C8.59375 13.7626 10.3105 15.4793 12.4281 15.4793Z" fill="#37AC4E" />
                                            <path d="M23.4508 10.6872H20.9978C20.5541 6.69534 17.3778 3.51867 13.3856 3.0749V0.621892C13.3856 0.558939 13.3732 0.496597 13.3492 0.438428C13.3251 0.380259 13.2898 0.327406 13.2453 0.28289C13.2008 0.238374 13.1479 0.203068 13.0898 0.178992C13.0316 0.154917 12.9693 0.142543 12.9063 0.142578H11.9477C11.8848 0.142537 11.8224 0.154906 11.7642 0.17898C11.7061 0.203053 11.6532 0.238357 11.6087 0.282874C11.5642 0.32739 11.5289 0.380246 11.5048 0.438417C11.4807 0.496589 11.4684 0.558936 11.4684 0.621892V3.0749C7.47614 3.51867 4.29992 6.69529 3.85619 10.6872H1.40314C1.34019 10.6871 1.27785 10.6995 1.21968 10.7236C1.16151 10.7476 1.10866 10.7829 1.06414 10.8274C1.01962 10.872 0.984318 10.9248 0.960242 10.983C0.936167 11.0411 0.923793 11.1035 0.923828 11.1664V12.125C0.923787 12.188 0.936156 12.2503 0.96023 12.3085C0.984303 12.3667 1.01961 12.4195 1.06412 12.464C1.10864 12.5085 1.1615 12.5438 1.21967 12.5679C1.27784 12.592 1.34019 12.6044 1.40314 12.6043H3.85619C4.29992 16.5961 7.47614 19.7728 11.4684 20.2166V22.6696C11.4684 22.7325 11.4807 22.7949 11.5048 22.8531C11.5289 22.9112 11.5642 22.9641 11.6087 23.0086C11.6532 23.0531 11.7061 23.0884 11.7642 23.1125C11.8224 23.1366 11.8848 23.1489 11.9477 23.1489H12.9063C12.9693 23.1489 13.0316 23.1366 13.0898 23.1125C13.148 23.0884 13.2008 23.0531 13.2453 23.0086C13.2898 22.9641 13.3251 22.9112 13.3492 22.8531C13.3733 22.7949 13.3857 22.7325 13.3856 22.6696V20.2166C17.3778 19.7728 20.5541 16.5961 20.9978 12.6043H23.4509C23.5138 12.6044 23.5762 12.592 23.6344 12.5679C23.6925 12.5438 23.7454 12.5085 23.7899 12.464C23.8344 12.4195 23.8697 12.3667 23.8938 12.3085C23.9179 12.2503 23.9302 12.188 23.9302 12.125V11.1664C23.9302 11.1035 23.9178 11.0411 23.8938 10.983C23.8697 10.9248 23.8344 10.872 23.7898 10.8274C23.7453 10.7829 23.6925 10.7476 23.6343 10.7236C23.5761 10.6995 23.5138 10.6871 23.4508 10.6872ZM12.427 18.3559C8.72742 18.3559 5.71683 15.3458 5.71683 11.6457C5.71683 7.94572 8.72742 4.93558 12.427 4.93558C16.1266 4.93558 19.1372 7.94568 19.1372 11.6457C19.1372 15.3458 16.1266 18.3559 12.427 18.3559Z" fill="#37AC4E" />
                                        </svg>
                                        Use Current Location
                                    </li>
                                </ul>
                                <ul class="g-map-result"></ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>