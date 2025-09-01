<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"> </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('assets/js/blazy.js')}}"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("subscribe-form").submit();
    }

    function loadGoogleApi(api_key, callback) {

        if (typeof google === 'object' && typeof google.maps === 'object') {
            console.log('Google API is already loaded');
            if (typeof callback === 'function') {
                callback();
            }
            return;
        }

        const script = document.createElement('script');
        script.src = 'https://maps.googleapis.com/maps/api/js?key=' + api_key + '&loading=async&libraries=places';
        script.onload = () => {
            console.log('Google API loaded successfully');
            if (typeof callback === 'function') {
                setTimeout(() => {
                    callback();
                }, 500);
            }
        };
        script.onerror = () => {
            console.error('Error loading the Google API script');
        };
        document.head.appendChild(script);
    }

    function getAddressComponent(component, place) {
        for (var i = 0; i < place.address_components.length; i++) {
            for (var j = 0; j < place.address_components[i].types.length; j++) {
                if (place.address_components[i].types[j] == component) {
                    return place.address_components[i];
                }
            }
        }
    }

    function getCityState(components) {
        let city = null;
        let state = null;

        for (const comp of components) {
            if (comp.types.includes("locality")) city = comp.long_name;
            else if (comp.types.includes("administrative_area_level_3") && !city) city = comp.long_name;
            else if (comp.types.includes("sublocality") && !city) city = comp.long_name;
            if (comp.types.includes("administrative_area_level_1")) state = comp.long_name;
        }

        return {
            city,
            state
        };
    }

    function initializeAutocomplete(input, locationBox) {
        const autocompleteService = new google.maps.places.AutocompleteService();
        const placesService = new google.maps.places.PlacesService(document.createElement("div"));
        input.addEventListener("input", function() {
            const searchQuery = input.value;
            if (searchQuery.length > 0) {
                autocompleteService.getPlacePredictions({
                    input: searchQuery,
                    componentRestrictions: {
                        country: ['us', 'ca', 'es']
                    }
                }, function(predictions, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK && predictions) {
                        locationBox.innerHTML = "";
                        predictions.forEach((prediction) => {
                            const li = document.createElement("li");
                            li.innerHTML = `<img src="{{ asset('assets/images/map-marker-2.svg') }}" /> ${prediction.description}`;
                            li.addEventListener("click", () => {
                                input.value = prediction.description;
                                locationBox.innerHTML = "";
                                placesService.getDetails({
                                    placeId: prediction.place_id
                                }, (place, status) => {
                                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                                        const {
                                            city,
                                            state
                                        } = getCityState(place.address_components);
                                        $(".location-box").css('display', 'none');
                                        $('input[name="latitude"]').val(place.geometry.location.lat());
                                        $('input[name="longitude"]').val(place.geometry.location.lng());
                                        $('input[name="address"]').val(prediction.description);
                                        $('input[name="city"]').val(city);
                                        $('input[name="state"]').val(state);
                                        $('input[name="country"]').val(getAddressComponent("country", place)?.long_name || '');
                                        const postalCodeComponent = getAddressComponent('postal_code', place);
                                        $('input[name="zipcode"]').val(postalCodeComponent ? postalCodeComponent.long_name : '');
                                    }
                                });
                            });
                            locationBox.appendChild(li);
                        });
                    } else {
                        locationBox.innerHTML = `<li>No results found</li>`;
                    }
                });
            } else {
                locationBox.innerHTML = "";
            }
        });
    }

    function initAllAutocompletes() {
        const searchBoxes = document.querySelectorAll(".search-box-wrapper");
        searchBoxes.forEach((searchBox) => {
            const input = searchBox.querySelector('input[type="text"]');
            const locationBox = searchBox.querySelector(".location-box .tab-pane.active .g-map-result");
            if (input && locationBox) {
                initializeAutocomplete(input, locationBox);
            }
        });
    }

    $("#location-search-textbox").focus(function() {
        $(".location-box").css('display', 'block');
        loadGoogleApi("{{ config('services.general.google_map_api') }}", () => {
            initAllAutocompletes();
        });
    })

    $(document).ready(function() {
        const $searchBoxWrapper = $('.search-box-wrapper');
        $(document).click(function(event) {
            if (!$searchBoxWrapper.is(event.target) && $searchBoxWrapper.has(event.target).length === 0) {
                $(".location-box").css('display', 'none');
            }
        });
        $searchBoxWrapper.click(function(event) {
            event.stopPropagation();
        });

        var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        $('input[name="timezone"]').val(timezone)
    });

    function successFunction(position) {
        var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'latLng': latlng
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                const {
                    city,
                    state
                } = getCityState(results[0].address_components);
                $('#location-search-textbox').val(results[1].formatted_address);
                $('input[name="latitude"]').val(position.coords.latitude);
                $('input[name="longitude"]').val(position.coords.longitude);
                $('input[name="address"]').val(results[1].formatted_address);
                $('input[name="city"]').val(city);
                $('input[name="state"]').val(state);
                $('input[name="country"]').val(getAddressComponent("country", results[1]).long_name);
                const postalCodeComponent = getAddressComponent('postal_code', results[1]);
                $('input[name="zipcode"]').val(postalCodeComponent ? postalCodeComponent.long_name : null);
                $(".location-box").css('display', 'none');
            } else {
                alert("Geocoder failed due to: " + status);
            }
        });
    }

    function errorFunction() {
        alert("Please enable your GPS location!");
        console.log('Geocoder failed');
    }

    $('.current-location').click(function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
        } else {
            alert("{{ trans('customer.title_msg_1') }}");
        }
    });


    $('#shop-now-modal').on('shown.bs.modal', function() {
        loadGoogleApi("{{ config('services.general.google_map_api') }}", () => {
            var input = document.getElementById('auto_complete');
            var options = {
                componentRestrictions: {
                    country: ['us', 'ca', 'es']
                },
            };
            var autocomplete = new google.maps.places.Autocomplete(input, options);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                const {
                    city,
                    state
                } = getCityState(place.address_components);
                $('input[name="latitude"]').val(place.geometry.location.lat());
                $('input[name="longitude"]').val(place.geometry.location.lng());
                $('input[name="city"]').val(city);
                $('input[name="state"]').val(state);
                $('input[name="country"]').val(getAddressComponent("country", place).long_name)
                const postalCodeComponent = getAddressComponent('postal_code', place);
                $('input[name="zipcode"]').val(postalCodeComponent ? postalCodeComponent.long_name : null);
            });
        });
    })
</script>

<script>
  toastr.options = { closeButton: true, progressBar: true, timeOut: 5000 };

  @if (session()->has('response'))
    let response = @json(session()->get('response'));
    Object.entries(response).forEach(([type, message]) => {
      if (toastr[type]) toastr[type](message);
    });
  @endif

  @if($errors->any())
    toastr.error(@json($errors->first()));
  @endif
</script>