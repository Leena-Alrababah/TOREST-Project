@extends('admin.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- customers List Table -->
        <div class="card">

            <div class="card-datatable table-responsive">

                

                <h4 class="card-header">Manage Admins</h4>
 @if (Session::has('success'))
    <div class="alert alert-success" style="width: 500px" role="alert">
        {{Session::get('success')}}
    </div>
        
    @endif

    @if (Session::has('error'))
    <div class="alert alert-error" role="alert">
        {{Session::get('error')}}
    </div>
        
    @endif

                <button type="button" class="btn btn-success" style="margin: 20px ;">
                    <a href="{{ route('dashboard.admins.create') }}" class="text-white">+ Add Admin</a>
                </button>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>

            </div>
        </div>
    </div>



    <!-- / Content -->
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
