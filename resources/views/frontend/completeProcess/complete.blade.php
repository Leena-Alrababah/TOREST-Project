@extends('frontend.layout.master')

@section('header')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Complete Reservation</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('restaurants.index')}}">All Restaurants</a></li>
                                <li class="breadcrumb-item"><a href="">{{$restaurant->name}}</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Complete your Reservation </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <!-- Navbar & Hero End -->
@endsection

@section('content')
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <div class="fa fa-arrow-right text-primary">
                    <h3 class="d-inline-flex">Complete Your Reservation..!</h3>
                </div>
            </div>

            <br><br>

            <div class="row justify-content-center">
                <div class="col-6">
                    <h2>{{ $restaurant->name }}</h2>

                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="fa fa-calendar text-primary">&nbsp;&nbsp;{{ $date }}</div>

                        </div>
                        <div class="col-4">
                            <div class="fa fa-clock text-primary">&nbsp;&nbsp;{{ $time }}</div>

                        </div>
                        <div class="col-4">
                            <div class="fa fa-users text-primary">&nbsp;&nbsp;{{ $guests }} persons</div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <form action="{{ route('userSide.reserve.stepTwo') }}" method="post" role="form"
                        class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                        @csrf
                        <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">
                        <input type="hidden" name="time" value="{{ $time }}">
                        <input type="hidden" name="date" value="{{ $date }}">

                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" name="table_id" id="select1">
                                        <option value="" selected disabled>Select a Table</option>
                                        @foreach ($filteredTables as $table)
                                            <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->capacity }}
                                                Guests)</option>
                                        @endforeach
                                    </select>
                                    <label for="table_id">Table (No Of People)</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 characters">
                                    <label for="name">Your Name</label>
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating form-floating-outline">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                    <label for="email">Your Email</label>
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating form-floating-outline">
                                    <input type="tel" class="form-control phone-mask" name="phone" id="phone"
                                        placeholder="+(123) 456-7890" aria-label="+(123) 456-7890">
                                    <label for="phone">Your Phone</label>
                                    <div class="validate"></div>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class="row gy-4">
                            <div class="col-lg-12">
                                <h6 class="text-dark">Payment By PayPal</h6>
                                <hr>
                                <div>
                                    <div class="fa fa-bell d-inline-flex text-primary">
                                        <p class="text-dark" style="margin-left: 10px; font-weight: bold;">To confirm the
                                            reservation, you should pay 7$, and this amount will be deducted from the bill
                                            value.</p>
                                    </div>
                                </div>
                            </div>
                           
                            
                        </div>
                        <br><br>
                        <!-- Set up a container element for the button -->
                        {{-- <div id="paypal-button-container"></div> --}}

                        {{-- <div class="text-center">

                            <button type="submit" class="btn btn-primary">Confirm Reservation</button>
                        </div> --}}
                        <button class="py-1 px-4 col-lg-12" type="submit"
                                            style="background-color: #fec43a; border-radius: 15px; border:#fec43a"
                                            ><i class="fab fa-paypal"
                                                style="color: #002f86;font-size:20px;font-style: italic;"></i>&nbsp;<span
                                                style="color: #002f86; font-size:20px; font-weight:bold;font-style: italic;">Pay</span><span
                                                style="color: #009cde; font-size:20px; font-weight:bold;font-style: italic;">Pal</span></button>
                    </form>

                </div>
            </div>

        </div>
    </section>
    <!-- End Book A Table Section -->

    
    <br><br><br>
@endsection
