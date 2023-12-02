<!-- Package Start/ explore -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Explore</h6>
        </div><br>
        <div class="row g-4 justify-content-center">
            @foreach ($recentRestaurants as $restaurant)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ $restaurant->image1 }}" alt="">
                        </div>
                        @if ($restaurant->isOpenNow())
                            <div class="d-flex border-bottom text-success">

                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-success me-2"></i>Open Now</small>
                            @else
                                <div class="d-flex border-bottom text-danger">

                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-clock text-primary me-2"></i>Close Now</small>
                        @endif

                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">{{ $restaurant->name }}</h3>
                        <div class="mb-3">
                            {!! $restaurant->ratingStars !!}

                            <p>{!! $restaurant->reviewsCount !!} Reviews</p>
                        </div>
                        <p><strong>Best Dish: </strong>{{ $restaurant->dishes_type }}
                        </p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route('restaurants.show', $restaurant->id) }}" class="btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 3px 30px;">Show</a>

                        </div>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>
</div>
<!-- Package End -->
