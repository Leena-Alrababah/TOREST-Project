{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}


<div class="card mb-4">
    <h4 class="card-header fw-normal">Update Password</h4>
    <div class="card-body">
        {{-- <form id="formAccountDeactivation" onsubmit="return false"> --}}
        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')
            <div class="row mt-2 gy-4">

                <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" name="current_password" type="password" id="password" />
                        <label for="password">Current Password</label>
                        @if ($errors->has('current_password'))
                            <div class="mt-2 text-danger">
                                {{ $errors->first('current_password') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row mt-2 gy-4">
                <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" type="password" id="password" name="password" />
                        <label for="password">New Password</label>
                        @if ($errors->has('password'))
                            <div class="mt-2 text-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row mt-2 gy-4">
                <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" name="password_confirmation" type="password" id="password" />
                        <label for="password">Confirm New Password</label>
                        @if ($errors->has('password_confirmation'))
                            <div class="mt-2 text-danger">
                                {{ $errors->first('password_confirmation')}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <br />
            <div class="mt-6 flex justify-end">

                {{-- <div class="form-check mb-3 ms-3">
                    <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                    <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                </div> --}}
                <button type="submit" class="btn btn-dark">Update Password</button>
                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </div>
</div>
