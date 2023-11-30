@extends('admin.layout.master')

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h4 class="card-header">Profile Details</h4>
                    <!-- Account -->
                    <form method="post" action="{{ route('profile.update') }}" id="formAccountSettings"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{ asset(Auth::user()->image) }}" alt="user-avatar"
                                    class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-dark me-2 mb-3" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" />
                                    </label>
                                    @if ($errors->has('image'))
                                        <div class="mt-2 text-danger small">
                                            {{ $errors->first('image') }}
                                        </div>
                                    @endif
                                    <button type="button" class="btn btn-outline-danger account-image-reset mb-3">
                                        <i class="mdi mdi-reload d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>

                                    <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-2 mt-1">
                            <div class="row mt-2 gy-4">
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" id="firstName" name="name"
                                            value="{{ Auth::user()->name }}" autofocus />
                                        <label for="firstName">Name</label>
                                                                           </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="phoneNumber" name="phone" class="form-control"
                                                placeholder="202 555 0111" value="{{ Auth::user()->phone }}" />
                                            <label for="phoneNumber">Phone Number</label>
                                                                                    </div>
                                        <span class="input-group-text">JOD (+962)</span>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" id="email" name="email"
                                            value="{{ Auth::user()->email }}" placeholder="john.doe@example.com" />
                                        <label for="email">E-mail</label>
                                                                            </div>
                                </div>

                               

                                
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-success me-2">Save changes</button>
                                {{-- <button type="reset" class="btn btn-outline-secondary">Reset</button> --}}
                            </div>
                            @if (session('status') === 'profile-updated')
                                <?php
                                Alert::success('Success', 'Your information is updated successfully!');
                              
                                ?>
                            @endif
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header fw-normal">Delete Account</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading mb-1">Are you sure you want to delete your account?</h6>
                            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.
                            </p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3 ms-3">
                            <input class="form-check-input" type="checkbox" name="accountActivation"
                                id="accountActivation" />
                            <label class="form-check-label" for="accountActivation">I confirm my account
                                deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-secondary deactivate-account"
                            disabled="disabled">Deactivate Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- / Content -->
@endsection
