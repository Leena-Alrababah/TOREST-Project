{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}




<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Form Design | CodeLab</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/register.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>

<body>
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-6 " style="margin-top: 100px;">
                <img src="{{ asset('frontend/img2/Mobile login-cuate.svg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6" style="margin-top: 100px; ">
                <div class="wrapper">
                    <div class="title">
                        Register
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="field">
                            <input type="text" name="name" value="<?php echo old('name'); ?>" required>
                            <label>Name</label>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                        </div>
                        <div class="field">
                            <input type="email" name="email" value="<?php echo old('email'); ?>" required>
                            <label>Email Address</label>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                        <div class="field">
                            <input type="password" name="password" required>
                            <label>Password</label>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>
                        <div class="field">
                            <input type="password" name="password_confirmation" required>
                            <label>Confirm Password</label>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                        </div>
                        <div class="content">

                            <div class="pass-link">
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                            </div>
                        </div>
                        <div class="field">
                            {{-- <input type="submit" value="Login"> --}}
                            <button type="submit" class="btn btn-block btn-outline-secondary rounded-pill py-2 px-4">
                                Register
                            </button>
                        </div>

                        <div class="signup-link">
                            Already registered? <a href="{{ route('login') }}">Login now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
