@extends('admin.layout.master')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Offcanvas to add new restaurant -->
        <div class="offcanvas-header py-4">
            <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Restaurant</h5>
        </div>
        <div class="offcanvas-body border-top">
            <form action="{{ route('dashboard.restaurants.store') }}" method="POST" enctype="multipart/form-data"
                class="pt-0" id="eCommerceCategoryListForm">
                
                @csrf
                

                <!-- Restaurant Name -->
                <div class="form-floating form-floating-outline mb-4 mt-3">
                  
                    <input type="text" class="form-control" id="restaurant-name" placeholder="Enter restaurant name"
                        name="name" aria-label="restaurant name">
                    <label for="restaurant-name">Restaurant Name</label>
                    <span class="text-danger small">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <div class="row">
                    <!-- Image 1 -->
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline mb-4">
                            <input class="form-control" type="file" id="image1" name="image1">
                            <label for="image1">Image 1</label>
                            <span class="text-danger small">
                            @error('image1')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                    </div>

                    <!-- Image 2 -->
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline mb-4">
                            <input class="form-control" type="file" id="image2" name="image2">
                            <label for="image2">Image 2</label>
                            <span class="text-danger small">
                            @error('image2')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- Image 3 -->
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline mb-4">
                            <input class="form-control" type="file" id="image3" name="image3">
                            <label for="image3">Image 3</label>
                            <span class="text-danger small">
                            @error('image3')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                    </div>

                    <!-- Image 4 -->
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline mb-4">
                            <input class="form-control" type="file" id="image4" name="image4">
                            <label for="image4">Image 4</label>
                            <span class="text-danger small">
                            @error('image4')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- Opening Hours (From) -->
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="time" class="form-control" id="opening-hours-from"
                                placeholder="Enter opening hours (From)" name="opening_hours_from"
                                aria-label="opening hours (From)" step="60">
                            <label for="opening-hours-from">Opening Hours (From)</label>
                            <span class="text-danger small">
                            @error('opening_hours_from')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                    </div>

                    <!-- Opening Hours (To) -->
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="time" class="form-control" id="opening-hours-to"
                                placeholder="Enter opening hours (To)" name="opening_hours_to"
                                aria-label="opening hours (To)" step="60">
                            <label for="opening-hours-to">Opening Hours (To)</label>
                            <span class="text-danger small">
                            @error('opening_hours_to')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                    </div>
                </div>



                <!-- Restaurant Address -->
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" class="form-control" id="restaurant-location"
                        placeholder="Enter restaurant location" name="address" aria-label="restaurant location">
                    <label for="restaurant-location">Restaurant Address</label>
                    <span class="text-danger small">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <!-- Restaurant Location -->
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" class="form-control" id="restaurant-location"
                        placeholder="Enter restaurant location" name="location" aria-label="restaurant location">
                    <label for="restaurant-location">Restaurant Location</label>
                    <span class="text-danger small">
                            @error('location')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <!-- Restaurant Description -->
                <div class="form-floating form-floating-outline mb-4">
                    <textarea class="form-control" id="restaurant-description" placeholder="Enter restaurant description" name="description"
                        aria-label="restaurant description"></textarea>
                    <label for="restaurant-description">Restaurant Description</label>
                    <span class="text-danger small">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <!-- Discount Percentage (nullable) -->
                <div class="form-floating form-floating-outline mb-4">
                    <input type="number" class="form-control" id="discount-percentage"
                        placeholder="Enter discount percentage" name="discount_percentage" aria-label="discount percentage">
                    <label for="discount-percentage">Discount Percentage </label>
                    <span class="text-danger small">
                            @error('discount_percentage')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <!-- Dishes Type (Select with "Other" option) -->
                <div class="form-floating form-floating-outline mb-4">
                    <select class="form-select" id="dishes-type" name="dishes_type">
                        <option value="Burger">Burger</option>
                        <option value="Pizza">Pizza</option>
                        <option value="Shawarma">Shawarma</option>
                        <option value="Shish Taouk">Shish Taouk</option>
                        <option value="Sea Food">Sea Food</option>
                        <option value="Other">Other</option>
                    </select>
                    <label for="dishes-type">Dishes Type</label>
                    <span class="text-danger small">
                            @error('dishes_type')
                                {{ $message }}
                            @enderror
                        </span>
                </div>

                <!-- Provider Selection -->
                <div class="form-floating form-floating-outline mb-4">
                    <select class="form-select" id="provider" name="provider" aria-label="Provider">
                        <option value="" selected disabled>Select a provider</option> <!-- Null or default option -->
                        @foreach ($providerUsers as $providerUser)
                            <option value="{{ $providerUser->id }}">{{ $providerUser->name }}</option>
                        @endforeach
                        <!-- Add more provider options as needed -->
                    </select>
                    <label for="provider">Select Provider</label>
                    <span class="text-danger small">
                            @error('provider')
                                {{ $message }}
                            @enderror
                        </span>
                </div>





                <!-- Add other relevant fields as needed -->

                <!-- Submit and reset -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-success me-sm-3 me-1 data-submit">Add</button>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection
