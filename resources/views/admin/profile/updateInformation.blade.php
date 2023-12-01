 {{-- Update Information --}}
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
                                        <input type="file" id="upload" name="image" class="account-file-input"
                                            hidden accept="image/png, image/jpeg" />
                                    </label>
                                    @if ($errors->has('image'))
                                        <div class="mt-2 text-danger small">
                                            {{ $errors->first('image') }}
                                        </div>
                                    @endif


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
                                                placeholder="07********" value="{{ Auth::user()->phone }}" />
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
            {{-- Update Information --}}