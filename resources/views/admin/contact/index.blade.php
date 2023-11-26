@extends('admin.layout.master')

@section('content')
    <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            



<div class="app-ecommerce-category over">
  <!-- Category List Table -->
  <div class="card">
    <div class="card-datatable table-responsive">
                    <h4 class="card-header">Manage All Contact Messages</h4>
    <div class="card-datatable table-responsive">



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