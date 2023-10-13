@extends('admin.layout.master')

@section('content')
    <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            






   <!-- Basic Bootstrap Table -->
              <div class="card">
<div class="card-datatable table-responsive">
                    <h4 class="card-header">Manage Reservations</h4>
                <div class="table-responsive text-nowrap">
                    <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
                </div>
            </div>
              <!--/ Basic Bootstrap Table -->

          </div>
          <!-- / Content -->
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush