@extends('provider.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <!-- Offcanvas to add new customer -->

        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Menu Item</h5>
        </div>

        <div class="offcanvas-body mx-0 flex-grow-0">
            <form action="{{ route('dashboard.menu.store') }}"  method="POST" enctype="multipart/form-data" id="menuAddForm">
                @csrf
                <div class="mb-4">
                    <h6 class="mb-4">Menu Item Information</h6>

                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="menu-name" placeholder="Menu Item Name"
                            name="name" aria-label="Menu Item Name" required />
                        <label for="menu-name">Menu Item Name*</label>
                        <span class="text-danger small">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <input type="file" id="menu-image" class="form-control" placeholder="Menu Item Image"
                            aria-label="Menu Item Image" name="image" accept="image/*" />
                        <label for="menu-image">Menu Item Image</label>
                        <span class="text-danger small">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <textarea class="form-control" id="menu-description" name="description" placeholder="Menu Item Description"
                            rows="4" aria-label="Menu Item Description"></textarea>
                        <label for="menu-description">Menu Item Description</label>
                        <span class="text-danger small">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <input type="number" step="0.01" class="form-control" id="menu-price"
                            placeholder="Menu Item Price" name="price" aria-label="Menu Item Price"  />
                        <label for="menu-price">Menu Item Price*</label>
                        <span class="text-danger small">
                            @error('price')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <select class="form-select" id="menu-type" name="type" aria-label="Menu Item Type" required>
                            <option value="" selected>Menu Item Type*</option>
                            <option value="breakfast">Breakfast</option>
                            <option value="lunch">Lunch</option>
                            <option value="dinner">Dinner</option>
                        </select>
                        <span class="text-danger small">
                            @error('type')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>

                <div class="pt-3">
                    <button type="submit" class="btn btn-success me-sm-3 me-1">Add Menu Item</button>
                </div>
            </form>

        </div>



    </div>
    <!-- / Content -->
@endsection
