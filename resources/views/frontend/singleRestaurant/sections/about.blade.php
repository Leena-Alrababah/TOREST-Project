<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img src="{{ asset($restaurant->image1) }}" class="img-fluid rounded w-100 wow zoomIn"
                            data-wow-delay="0.1s">
                    </div>
                    <div class="col-6 text-start">
                        <img src="{{ asset($restaurant->image2) }}" class="img-fluid rounded w-75 wow zoomIn"
                            data-wow-delay="0.3s" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img src="{{ asset($restaurant->image3) }}" class="img-fluid rounded w-75 wow zoomIn"
                            data-wow-delay="0.5s">
                    </div>
                    <div class="col-6 text-end">
                        <img src="{{ asset($restaurant->image4) }}" class="img-fluid rounded w-100 wow zoomIn"
                            data-wow-delay="0.7s">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="mb-2">{{ $restaurant->name }}</span></h2>
                <div class="mb-4 fs-3">
                    {!! $restaurant->ratingStars !!}
                    <span> {{ $restaurant->reviews_count }} Reviews</span>
                </div>

                <div class="mb-2" style="font-size: larger;">
                    <span class="fa fa-clock text-dark"style="margin-right: 10px;"></span>
                    <span class="text-dark">
                        {{ \Carbon\Carbon::parse($restaurant->opening_hours_from)->format('h:i A') }} -
                        {{ \Carbon\Carbon::parse($restaurant->opening_hours_to)->format('h:i A') }} </span>
                </div>
                <div class="mb-2" style="font-size: larger;">
                    <span class="fa fa-location-arrow text-dark "style="margin-right: 10px;"></span>
                    <a href="{{ $restaurant->location }}" class="text-primary">{{ $restaurant->address }}</a>
                </div>
                <p class="mb-4">{{ $restaurant->description }}</p>
                <br>

                <div class="row g-4 mb-4">
                    <a class="btn btn-special border-primary rounded-pill py-2 px-4 top-0 end-0 me-2   col-lg-6 col-md-4 col-sm-6"
                        href=""><span class="fa fa-gift "style="margin-right: 10px;"></span>Discount Available:
                        {{ $restaurant->discount_percentage }}% Off</a>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- About End -->
