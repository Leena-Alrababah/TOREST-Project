@extends('admin.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
           @include('admin.profile.updateInformation')
           @include('admin.profile.updatePassword')
           @include('admin.profile.deleteAccount')
        </div>
    </div>
    </div>
    <!-- / Content -->
@endsection
