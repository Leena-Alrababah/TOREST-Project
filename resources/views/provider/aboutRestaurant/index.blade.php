@extends('provider.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="app-ecommerce-category over">
            <!-- Category List Table -->
            <div class="card">
                <div class="card-datatable table-responsive">
                    <h4 class="card-header">Manage Restaurant Information</h4>
                    <button type="button" class="btn btn-success " style="margin: 20px ;">
                        <a href="{{ route('dashboard.restaurants.create') }}" class="text-white">+ Add Restaurant</a>
                    </button>

                    <div class="card-body">
                        {{ $dataTable->table() }}
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- / Content -->
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
