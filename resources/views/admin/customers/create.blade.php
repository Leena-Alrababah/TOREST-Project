@extends('admin.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <!-- Offcanvas to add new customer -->

        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Customer</h5>
        </div>

        <div class="offcanvas-body mx-0 flex-grow-0">
            <form action="{{ route('dashboard.customers.store') }}" method="POST" enctype="multipart/form-data"
                class="ecommerce-customer-add pt-0" id="eCommerceCustomerAddForm">
                @csrf
                <div class="ecommerce-customer-add-basic mb-4">
                    <h6 class="mb-4">Basic Information</h6>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe"
                            name="name" aria-label="John Doe" />
                        <label for="ecommerce-customer-add-name">Name*</label>
                        <span class="text-danger small">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="email" id="ecommerce-customer-add-email" class="form-control"
                            placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="email" />
                        <label for="ecommerce-customer-add-email">Email*</label>
                        {{-- @if ($errors->has('email'))
                            <div class="text-danger small">
                                {{ $errors->first('email') }}
                            </div>
                        @endif --}}
                        <span class="text-danger small">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-floating form-floating-outline">
                        <input type="tel" id="ecommerce-customer-add-contact" class="form-control phone-mask"
                            placeholder="+(123) 456-7890" aria-label="+(123) 456-7890" name="phone" />
                        <label for="ecommerce-customer-add-contact">Phone</label>
                        <span class="text-danger small">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                </div>
                <div class="form-floating form-floating-outline">
                    <input type="file" id="ecommerce-customer-add-image" class="form-control " placeholder="*******"
                        aria-label="********" name="image" accept="image/*" />
                    <label for="ecommerce-customer-add-image">Image</label>
                </div>
                <br>
                <div class="form-floating form-floating-outline">
                    <input type="password" id="ecommerce-customer-add-password" class="form-control " placeholder="*******"
                        aria-label="********" name="password" />
                    <label for="ecommerce-customer-add-password">Password</label>
                    <span class="text-danger small">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>

                </div>


                <div class="pt-3">
                    <button type="submit" class="btn btn-success me-sm-3 me-1 data-submit">Add</button>
                    {{-- <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="offcanvas">Discard</button> --}}
                </div>
            </form>
        </div>



    </div>
    <!-- / Content -->
@endsection
