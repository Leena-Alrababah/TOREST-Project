{{-- Update Password --}}
<div class="col-md-12">
    <div class="card mb-4">
        <h4 class="card-header">Update Password</h4>
        <form method="post" action="{{ route('password.update') }}" id="formAccountSettings" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body pt-2 mt-1">
                <div class="row mt-2 gy-4">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" name="current_password" type="password" id="password"
                                placeholder="********" autofocus />
                            <label for="password">Current Password</label>
                            @if ($errors->updatePassword->has('current_password'))
                                <div class="mt-2 text-danger small">
                                    {{ $errors->updatePassword->first('current_password') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mt-2 gy-4">
                    <div class="col-md-6">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="********" />
                                <label for="password">New Password</label>
                                @if ($errors->updatePassword->has('password'))
                                    <div class="mt-2 text-danger small">
                                        {{ $errors->updatePassword->first('password') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2 gy-4">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" name="password_confirmation" type="password" id="password"
                                placeholder="********" />
                            <label for="password">Confirm New Password</label>
                            @if ($errors->updatePassword->has('password_confirmation'))
                                <div class="mt-2 text-danger small">
                                    {{ $errors->updatePassword->first('password_confirmation') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-success me-2">Update Password</button>
                </div>
            </div>

            @if (session('status') === 'password-updated')
                <?php
                Alert::success('Success', 'Your password is updated successfully!');
                ?>
            @endif
        </form>
    </div>
</div>

{{-- Update Password --}}
