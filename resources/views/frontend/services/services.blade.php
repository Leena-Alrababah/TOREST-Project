@extends('frontend.layout.master')

@section('header')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Our Services</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Services </li>
                            </ol>
                        </nav>
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