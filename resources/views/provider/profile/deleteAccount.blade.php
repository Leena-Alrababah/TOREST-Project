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
        <form method="post" action="{{ route('profile.destroy') }}" id="formAccountDeactivation" >
            @csrf
            @method('delete')
            <div class="row mt-2 gy-4">
                <div class="col-md-6">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="********" />
                            <label for="password">Password</label>
                             @if ($errors->userDeletion->has('password'))
                                <div class="mt-2 text-danger small">
                                    {{ $errors->userDeletion->first('password') }}
                                </div>
                            @endif
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-danger">Deactivate
                    Account</button>
            </div>

        </form>
    </div>
</div>
