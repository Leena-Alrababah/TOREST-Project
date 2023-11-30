@extends('admin.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <!-- Offcanvas to add new customer -->

        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Admin</h5>
        </div>

        <div class="offcanvas-body mx-0 flex-grow-0">
            <form action="{{ route('dashboard.admins.store') }}" method="POST" enctype="multipart/form-data"
                class="ecommerce-customer-add pt-0" id="eCommerceCustomerAddForm">
                @csrf
                <div class="ecommerce-customer-add-basic mb-4">
                    <h6 class="mb-4">Basic Information</h6>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe"
                            name="name" value="{{old('name')}}" aria-label="John Doe" />
                        <label for="ecommerce-customer-add-name">Name*</label>
                                        </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="email" id="ecommerce-customer-add-email" class="form-control"
                            placeholder="john.doe@example.com" value="{{old('email')}}" aria-label="john.doe@example.com" name="email" />
                        <label for="ecommerce-customer-add-email">Email*</label>
                                            </div>
                    <div class="form-floating form-floating-outline">
                        <input type="tel" id="ecommerce-customer-add-contact" class="form-control phone-mask"
                            placeholder="+(123) 456-7890" aria-label="+(123) 456-7890" name="phone" value="{{old('phone')}}" />
                        <label for="ecommerce-customer-add-contact">Phone</label>
                                            </div>
                </div>
                <div class="form-floating form-floating-outline">
                    <input type="file" id="ecommerce-customer-add-image" class="form-control " placeholder="*******"
                        aria-label="********" name="image" value="{{old('image')}}" accept="image/*" />
                    <label for="ecommerce-customer-add-image">Image</label>
                </div>
                <br>
                <div class="form-floating form-floating-outline">
                    <input type="password" id="ecommerce-customer-add-password" class="form-control " placeholder="*******"
                        aria-label="********" name="password" />
                    <label for="ecommerce-customer-add-password">Password</label>
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
