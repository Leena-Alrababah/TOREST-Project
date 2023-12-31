@extends('frontend.layout.master')

@section('header')
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
    <br>
    @include('frontend.home.sections.about')
        <br><br>

    @include('frontend.home.sections.why')

    @include('frontend.home.sections.trendy')

    @include('frontend.home.sections.explore')



    @include('frontend.home.sections.offers')


    @include('frontend.home.sections.process')
@endsection
