{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
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
                        Login
                    </div>
                     <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <input type="email" name="email" value="<?php echo old('email'); ?>" required>
                            <label>Email Address</label>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                        <div class="field">
                            <input type="password" name="password"  required>
                            <label>Password</label>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>
                        <div class="content">
                            <div class="checkbox">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me" name="remember">Remember me</label>
                            </div>
                            <div class="pass-link">
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                            </div>
                        </div>
                        <div class="field">
                            {{-- <input type="submit" value="Login"> --}}
                            <button type="submit" class="btn btn-block btn-outline-secondary rounded-pill py-2 px-4">
                                Login
                            </button>
                            {{-- <button type="button"  >Secondary</button> --}}

                        </div>
                        <center>
                          <div class="field">
                            <hr style="border-top: 3px solid balack;">
                                <p>Or Login With</p>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35"
                                        height="35" viewBox="0 0 48 48">
                                        <path fill="#fbc02d"
                                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                        </path>
                                        <path fill="#e53935"
                                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                        </path>
                                        <path fill="#4caf50"
                                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                        </path>
                                        <path fill="#1565c0"
                                            d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                        </path>
                                    </svg>
                                    </i>
                                </a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35"
                                        height="35" viewBox="0 0 48 48">
                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993"
                                            x2="40.615" y1="9.993" y2="40.615"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                            <stop offset="1" stop-color="#007ad9"></stop>
                                        </linearGradient>
                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)"
                                            d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z">
                                        </path>
                                        <path fill="#fff"
                                            d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z">
                                        </path>
                                    </svg>
                                    </i>
                                </a>
                        </div>
                        <br/>  
                        </center>
                        
                        <div class="signup-link">
                            Not a member? <a href="{{ route('register') }}">Signup now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
