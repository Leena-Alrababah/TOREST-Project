@extends('provider.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">








        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <h4 class="card-header">Manage Reservations</h4>
                @if (Session::has('success'))
                    <div class="alert alert-success" style="width: 500px" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <button type="button" class="btn btn-success " style="margin: 20px ;">
                    <a href="{{ route('dashboard.reservations.create') }}" class="text-white">+ Add Reservation</a>
                </button>
                <div class="table-responsive text-nowrap">
                    <div class="card-body">
                        {{ $dataTable->table() }}
                    </div>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
    <!-- / Content -->
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
