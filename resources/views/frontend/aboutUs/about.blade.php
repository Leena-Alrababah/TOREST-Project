@extends('frontend.layout.master')

@section('header')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">About </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <!-- Navbar & Hero End -->
@endsection

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">TOREST</span></h1>
                    <p class="mb-4">Embark on a flavorful adventure with our website, your gateway to the bustling culinary scene of Irbid city. Our story is one of passion for food and a dedication to uniting food enthusiasts with a diverse array of dining treasures. As avid lovers of fine cuisine, we recognized the rich tapestry of restaurants that grace every corner of this vibrant city. It was this realization that inspired us to create a haven where both seasoned connoisseurs and curious explorers could come together to indulge in their culinary desires.

At the heart of our platform lies a mission to celebrate the artistry of Irbid's restaurants. We've meticulously curated a comprehensive collection, bringing together an impressive spectrum of flavors, ambiances, and cuisines. Here, you'll find the savory stories of local eateries, each a unique chapter in the city's gastronomic tale. Whether you're seeking a cozy cafe, an elegant bistro, or an exotic eatery, our platform invites you to traverse the city's culinary map like never before.

But we are more than just a directory – we're a dynamic community where your voice matters. With our user-friendly interface, you can seamlessly browse through restaurant profiles, read genuine reviews, and even secure a table for your next dining escapade. We're driven by the belief that every meal is an opportunity for connection, and your experiences shape the narrative of Irbid's dining culture. By sharing your ratings, reviews, and stories, you become an integral part of this delectable journey, shaping the choices of fellow food enthusiasts and fostering a rich exchange of culinary insights.

As we invite you to explore Irbid's culinary tapestry through our website, know that we're dedicated to enhancing your dining experiences. With each reservation made, each table shared, and each review contributed, you're adding to the vibrant narrative of Irbid's dining landscape. We're thrilled to have you join us in celebrating the art of food and the joy it brings to our lives. Welcome to a community where every dish tells a story, and every bite is a shared moment of delight.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Dining Adventures</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Citywide-Irbid</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>User-Friendly</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Memorable Experiences</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Foodies</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Ratings-Reservations</p>
                        </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Teams</h6>
                <h1 class="mb-5">Our Team</h1>
            </div>
            <div class="row g-12 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item" >
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontend/img2/me.jpg')}}" alt="" >
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Leena Al-Rababah</h5>
                            <small>Full Stack Web Developer</small>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection