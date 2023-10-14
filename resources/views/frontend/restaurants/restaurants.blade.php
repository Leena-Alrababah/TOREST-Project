@extends('frontend.layout.master')

@section('header')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-5 text-white mb-3 animated slideInDown">Enjoy Your Delicious Escapade With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Explore, Reserve, Review - Your City's Restaurants Guide!</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter a Restaurant Name">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
@endsection

@section('content')
<div class="container">
    <div class="row">
        <!-- Sidebar Filter -->
        <div class="col-lg-2">
            <div class="filter-container "style="position: sticky; top: 0; background-color: #f8f9fa; z-index: 100;">
                <strong class="font-weight-bold text-dark">Suggested:</strong>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="breakfast" id="breakfastCheckbox">
                    <label class="form-check-label" for="breakfastCheckbox">Breakfast</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="lunch" id="lunchCheckbox">
                    <label class="form-check-label" for="lunchCheckbox">Lunch</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="dinner" id="dinnerCheckbox">
                    <label class="form-check-label" for="dinnerCheckbox">Dinner</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="opennow" id="openNowCheckbox">
                    <label class="form-check-label" for="openNowCheckbox">Open Now</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="healthy" id="healthyCheckbox">
                    <label class="form-check-label" for="healthyCheckbox">Healthy</label>
                </div>

                <strong class="font-weight-bold text-dark">Tasty:</strong>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="burger" id="burgerCheckbox">
                    <label class="form-check-label" for="burgerCheckbox">Burger</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="pizza" id="pizzaCheckbox">
                    <label class="form-check-label" for="pizzaCheckbox">Pizza</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="shawarma" id="shawarmaCheckbox">
                    <label class="form-check-label" for="shawarmaCheckbox">Shawarma</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="shish" id="shishCheckbox">
                    <label class="form-check-label" for="shishCheckbox">Shish Taouk</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input dietary" type="checkbox" value="seafood" id="seafoodCheckbox">
                    <label class="form-check-label" for="seafoodCheckbox">Sea Food</label>
                </div>
            </div>
        </div>

        <!-- Restaurant List -->
        <div class="col-lg-10">
            <div class="restaurant-list justify-content-center">
                <div class="text-center wow fadeInUp " data-wow-delay="0.1s">
                    <h1 class="mb-5 text-center">Best Restaurants & Cafes in Irbid:</h1>
                </div>
                <br />
                <div class="row g-4 justify-content-center">
                    @foreach ($restaurants as $restaurant)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ $restaurant->image1 }}" alt="" />
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
                                <div class="mb-3">
                                    {!! $restaurant->ratingStars !!}
                                    <p>{{ $restaurant->reviews_count }} Reviews</p>
                                </div>
                                <p>Burger / Lunch / Dinner / Trendy / Healthy</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{route ('restaurants.show', $restaurant->id )}}" class="btn btn-sm btn-primary px-3 border-end btncard" style="border-radius: 30px 3px 30px">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./img2/cappado.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom text-danger">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>Close Now</small>
                            
                            
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Cappado.irbid</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                 <p>10 Reviews</p>
                            </div>
                                 <p>Burger / Lunch / Dinner / Healthy / Trendy
                                 </p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 3px 30px;">Show</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
