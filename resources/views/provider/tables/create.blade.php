@extends('provider.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <!-- Offcanvas to add new customer -->

        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add New Table</h5>
        </div>

        <div class="offcanvas-body mx-0 flex-grow-0">
            <form action="{{ route('dashboard.tables.store') }}" method="POST" id="tableAddForm">
                @csrf
                <div class="mb-4">
                    <h6 class="mb-4">Table Information</h6>

                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="table-name" placeholder="Table Name" name="name"
                            value="{{ old('name') }}" aria-label="Table Name" />
                        <label for="table-name">Table Name*</label>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <input type="number" class="form-control" id="table-capacity" placeholder="Table Capacity"
                            name="capacity" value="{{ old('capacity') }}" aria-label="Table Capacity" required />
                        <label for="table-capacity">Table Capacity*</label>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <select class="form-select" id="table-status" name="status" aria-label="Table Status" required>
                            <option value="" selected>Select one:</option>
                            <option value="available">Available</option>
                            <option value="occupied">Occupied</option>
                            <option value="reserved">Reserved</option>
                        </select>
                        <label for="table-status">Table Status*</label>
                    </div>
                </div>
                <div class="pt-3">
                    <button type="submit" class="btn btn-success me-sm-3 me-1">Add Table</button>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection
