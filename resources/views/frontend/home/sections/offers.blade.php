<!-- Destination Start/ offers -->
<div class="container-xxl py-5 destination">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Offers</h6>
        </div>
        <div class="row g-3 justify-content-center">
            <div class="col-lg-5 col-md-5">
                <div class="row g-3">
                    @if (isset($restaurantsByDiscount[0]))
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="{{ route('restaurants.show', $restaurantsByDiscount[0]->id) }}" style="height: 300px">
                                <img class="img-fluid" src="{{ asset($restaurantsByDiscount[0]->image1) }}"
                                    alt="{{ $restaurantsByDiscount[0]->name }}">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    {{ $restaurantsByDiscount[0]->discount_percentage }}% OFF</div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    {{ $restaurantsByDiscount[0]->name }}</div>
                            </a>
                        </div>
                    @endif

                    @if (isset($restaurantsByDiscount[1]))
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="{{ route('restaurants.show', $restaurantsByDiscount[1]->id) }}">
                                <img class="img-fluid" src="{{ asset($restaurantsByDiscount[1]->image1) }}"
                                    alt="{{ $restaurantsByDiscount[1]->name }}">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    {{ $restaurantsByDiscount[1]->discount_percentage }}%
                                    OFF</div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    {{ $restaurantsByDiscount[1]->name }}</div>
                            </a>
                        </div>
                    @endif

                    @if (isset($restaurantsByDiscount[2]))
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="{{ route('restaurants.show', $restaurantsByDiscount[2]->id) }}">
                                <img class="img-fluid" src="{{ asset($restaurantsByDiscount[2]->image1) }}"
                                    alt="{{ $restaurantsByDiscount[2]->name }}">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    {{ $restaurantsByDiscount[2]->discount_percentage }}%
                                    OFF</div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    {{ $restaurantsByDiscount[2]->name }}</div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            @if (isset($restaurantsByDiscount[3]))
                <div class="col-lg-4 col-md-5 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="{{ route('restaurants.show', $restaurantsByDiscount[3]->id) }}">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset($restaurantsByDiscount[3]->image1) }}" alt="{{ $restaurantsByDiscount[3]->name }}"
                            style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">{{ $restaurantsByDiscount[3]->discount_percentage }}% OFF
                        </div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $restaurantsByDiscount[3]->name }}</div>
                    </a>
                </div>
            @endif

        </div>
    </div>
</div>
<!-- Destination Start -->
