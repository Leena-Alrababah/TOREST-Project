@extends('frontend.layout.master')

@section('header')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Restaurant Details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('restaurants.index')}}">All Restaurants</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">{{$restaurant->name}} </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <!-- Navbar & Hero End -->
@endsection

@section('content')
    
        @include('frontend.singleRestaurant.sections.about')

        @include('frontend.singleRestaurant.sections.menu')

        @include('frontend.singleRestaurant.sections.reserve')

        @include('frontend.singleRestaurant.sections.reviews')

<br><br>
        @include('frontend.singleRestaurant.sections.form')

        
@endsection

