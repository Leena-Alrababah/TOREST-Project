@extends('frontend.layout.master')

@section('header')
    @include('sweetalert::alert')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-5 text-white mb-3 animated slideInDown">Enjoy Your Delicious Escapade With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Explore, Reserve, Review - Your City's Restaurants
                        Guide!</p>
                    <form action="{{ route('search') }}" method="GET" role="search">
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="search"
                                name="search" value="{{ Request::get('search') }}" placeholder="Enter a Restaurant Name">
                            <button type="submit"
                                class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                                style="margin-top: 7px;">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            

            <!-- Restaurant List -->
            <div class="col-lg-10">
                <div class="restaurant-list justify-content-center">
                    <div class="text-center wow fadeInUp " data-wow-delay="0.1s">
                        <h1 class="mb-5 text-center">The Best Restaurants & Cafes:</h1>
                    </div>
                    <br />
                    <div class="row g-4 justify-content-center">
                        @foreach ($searchRestaurant as $restaurant)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="package-item">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="{{ $restaurant->image1 }}"
                                            alt="{{ $restaurant->name }}" />
                                    </div>
                                    @if ($restaurant->isOpenNow())
                                        <div class="border-bottom text-success p-2 text-center">
                                            <i class="fa fa-clock text-success me-2"></i>Open Now
                                        </div>
                                    @else
                                        <div class="border-bottom text-danger p-2 text-center">
                                            <i class="fa fa-clock text-primary me-2"></i>Close Now
                                        </div>
                                    @endif
                                    <div class="text-center p-4 card fixed-height-card">
                                        <h3 class="mb-0">{{ $restaurant->name }}</h3>
                                        <div>
                                            {!! $restaurant->ratingStars !!}
                                            <p>{!! $restaurant->ReviewsCount !!} Reviews</p>
                                        </div>
                                        <p><strong>Best Dish: </strong>{{ $restaurant->dishes_type }}</p>
                                        <div class="d-flex justify-content-center mb-2">
                                            <a href="{{ route('restaurants.show', $restaurant->id) }}"
                                                class="btn btn-sm btn-primary px-3 border-end btncard"
                                                style="border-radius: 30px 3px 30px">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <br>
                <center>
                    <div
                        style="padding-bottom: 10px; font-size: 14px; text-align: center; display: flex; justify-content: center;">
                        {{ $searchRestaurant->appends(request()->input())->links() }}
                    </div>
                </center>
            </div>

        </div>


    </div>
    </div>
@endsection
