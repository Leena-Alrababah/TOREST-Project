@extends('provider.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
           @include('provider.profile.updateInformation')
           @include('provider.profile.updatePassword')
           @include('provider.profile.deleteAccount')
        </div>
    </div>
    </div>
    <!-- / Content -->
@endsection
