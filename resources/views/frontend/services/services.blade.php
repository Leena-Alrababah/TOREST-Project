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
 <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3 custom-height">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>Restaurant Listing</h5>
                            <p>Offering a comprehensive database of restaurants within the city, categorized by cuisine type, location, and dining preferences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3 custom-height">
                        <div class="p-4">
                            <i class="fa fa-3x fa-calendar-check text-primary mb-4"></i>
                            <h5>Table Reservation</h5>
                            <p> Facilitating easy and convenient table reservations at various restaurants, ensuring a smooth and hassle-free booking process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3 custom-height">
                        <div class="p-4">
                            <i class="fa fa-3x fa-star text-primary mb-4"></i>
                            <h5>User Reviews</h5>
                            <p>Allowing users to share their dining experiences, ratings, and feedback for the benefit of other users and restaurant owners.</p>
                        </div>
                    </div>
                </div>
                
                
                
                
                
            </div>
        </div>
    </div>
    <!-- Service End -->
    
@endsection