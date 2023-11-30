{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}

<div class="card mb-4">
    <h4 class="card-header">Profile Details</h4>
    <!-- Account -->
    <form method="post" action="{{ route('profile.update') }}" id="formAccountSettings" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img src="{{ asset(Auth::user()->image) }}" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded"
                    id="uploadedAvatar" style="height: 120px; width: 120px; border-radius: 80px;" />
                <div class="button-wrapper">
                    <label for="upload" class="btn btn-dark me-2 mb-3" tabindex="0">
                        <span class="d-none d-sm-block">Upload new photo</span>
                        <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                        <input type="file" id="upload" class="account-file-input" name="image" hidden
                            accept="image/png, image/jpeg" />
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
            {{-- <form id="formAccountSettings" method="POST" onsubmit="return false"> --}}
            <div class="row mt-2 gy-4">
                <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" type="text" id="firstName" name="name"
                            value="{{ Auth::user()->name }}" @if (Auth::user()->google_id != null || Auth::user()->facebook_id != null) readonly @endif
                            autofocus />
                        <label for="firstName">Name</label>
                        @if ($errors->has('name'))
                            <div class="mt-2 text-danger small">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="tel" id="phoneNumber" name="phone" class="form-control"
                                value="{{ Auth::user()->phone }}" placeholder="202 555 0111" />
                            <label for="phoneNumber">Phone Number</label>
                        </div>
                        <span class="input-group-text">JOD (+962)</span>
                        @if ($errors->has('phone'))
                            <div class="mt-2 text-danger small">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control" type="email" id="email" name="email"
                            value="{{ Auth::user()->email }}" placeholder="john.doe@example.com"
                            @if (Auth::user()->google_id != null || Auth::user()->facebook_id != null) readonly @endif />
                        <label for="email">E-mail</label>
                        @if ($errors->has('email'))
                            <div class="mt-2 text-danger small">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-success me-2">Save changes</button>
                {{-- <button type="submit" class="btn btn-outline-success">Save changes</button> --}}
                @if (session('status') === 'profile-updated')
                    <?php
                    Alert::success('Success', 'Your information is updated successfully!');
                    ?>
                @endif
                {{-- <button type="reset" class="btn btn-outline-danger">Reset</button> --}}
            </div>
    </form>
</div>
<!-- /Account -->
</div>
