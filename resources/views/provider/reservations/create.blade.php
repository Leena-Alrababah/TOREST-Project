@extends('provider.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <!-- Offcanvas to add new customer -->

        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add New Reservation</h5>
        </div>

        <div class="offcanvas-body mx-0 flex-grow-0">
            <!-- Form for Reservation Information -->
<form action="{{ route('dashboard.reservations.store') }}" method="POST" id="reservationAddForm">
    @csrf
    <div class="mb-4">
        <h6 class="mb-4">Reservation Information</h6>

    
        <div class="form-floating form-floating-outline mb-4">
            <select class="form-select" id="table-id" name="table_id" aria-label="Table">
                <option value="" selected>Select a Table*</option>
                @foreach ($tables as $table)
                    <option value="{{ $table->id }}">{{ $table->name }} ( {{ $table->capacity }} gusets)</option>
                @endforeach
            </select>
            <span class="text-danger small">
                @error('table_id')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-floating form-floating-outline mb-4">
            <input type="date" class="form-control" id="reservation-date" name="reservation_date" aria-label="Reservation Date" required />
            <label for="reservation-date">Date*</label>
            <span class="text-danger small">
                @error('reservation_date')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-floating form-floating-outline mb-4">
            <input type="time" class="form-control" id="reservation-time" name="reservation_time" aria-label="Reservation Time" required />
            <label for="reservation-time">Time*</label>
            <span class="text-danger small">
                @error('reservation_time')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-floating form-floating-outline mb-4">
            <input type="text" class="form-control" id="name" placeholder="Guest's Name" name="name" aria-label="Guest's Name" />
            <label for="name">Guest's Name</label>
            <span class="text-danger small">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-floating form-floating-outline mb-4">
            <input type="email" class="form-control" id="email" placeholder="Guest's Email" name="email" aria-label="Guest's Email" />
            <label for="email">Guest's Email</label>
            <span class="text-danger small">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-floating form-floating-outline mb-4">
            <input type="tel" class="form-control" id="phone" placeholder="Guest's Phone Number" name="phone" aria-label="Guest's Phone Number" />
            <label for="phone">Guest's Phone Number</label>
            <span class="text-danger small">
                @error('phone')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-floating form-floating-outline mb-4">
            <select class="form-select" id="reservation-status" name="reservation_status" aria-label="Reservation Status" required>
                <option value="" selected>Select Reservation Status*</option>
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="cancelled">Cancelled</option>
            </select>
            <span class="text-danger small">
                @error('reservation_status')
                    {{ $message }}
                @enderror
            </span>
        </div>
    </div>

    <div class="pt-3">
        <button type="submit" class="btn btn-success me-sm-3 me-1">Add Reservation</button>
    </div>
</form>


        </div>



    </div>
    <!-- / Content -->
@endsection
