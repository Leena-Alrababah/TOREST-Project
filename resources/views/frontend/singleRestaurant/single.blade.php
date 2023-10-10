@extends('frontend.layout.master')

@section('content')
    
        @include('frontend.singleRestaurant.sections.about')

        @include('frontend.singleRestaurant.sections.menu')

        @include('frontend.singleRestaurant.sections.reserve')

        @include('frontend.singleRestaurant.sections.reviews')

<br><br>
        @include('frontend.singleRestaurant.sections.form')

        
@endsection