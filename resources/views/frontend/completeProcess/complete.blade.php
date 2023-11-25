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
                            <div class="fa fa-users text-primary">&nbsp;&nbsp;5 persons</div>
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
                                <h6 class="text-dark">Payment By Credit / Debit Card</h6>
                                <hr>
                                <div>
                                    <div class="fa fa-bell d-inline-flex text-primary">
                                        <p class="text-dark" style="margin-left: 10px; font-weight: bold;">To confirm the
                                            reservation, you should pay 7$, and this amount will be deducted from the bill
                                            value.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="nameoncard" class="form-control" id="name"
                                        placeholder="Name on Card" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 characters">
                                    <label for="nameoncard">Name on Card</label>
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" class="form-control" name="cardnumber" id="cardnumber"
                                        placeholder="Card Number" data-rule="email"
                                        data-msg="Please enter a valid email">
                                    <label for="cardnumber">Card Number</label>
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="date" class="form-control" name="expirydate" id="expirydate"
                                        placeholder="Expiry Date" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 characters">
                                    <label for="expirydate">Expiry Date</label>
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" class="form-control" name="cvv" id="cvv"
                                        placeholder="CVV" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 characters">
                                    <label for="cvv">CVV</label>
                                    <div class="validate"></div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <!-- Set up a container element for the button -->
                        <div id="paypal-button-container"></div>

                        <div class="text-center">

                            <button type="submit" class="btn btn-primary">Confirm Reservation</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
    <!-- End Book A Table Section -->
<!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Call your server to set up the transaction
            createOrder: function(data, actions) {
                return fetch('/demo/checkout/api/paypal/order/create/', {
                    method: 'post'
                }).then(function(res) {
                    return res.json();
                }).then(function(orderData) {
                    return orderData.id;
                });
            },

            // Call your server to finalize the transaction
            onApprove: function(data, actions) {
                return fetch('/demo/checkout/api/paypal/order/' + data.orderID + '/capture/', {
                    method: 'post'
                }).then(function(res) {
                    return res.json();
                }).then(function(orderData) {
                    // Three cases to handle:
                    //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                    //   (2) Other non-recoverable errors -> Show a failure message
                    //   (3) Successful transaction -> Show confirmation or thank you

                    // This example reads a v2/checkout/orders capture response, propagated from the server
                    // You could use a different API or structure for your 'orderData'
                    var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                    if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                        return actions.restart(); // Recoverable state, per:
                        // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                    }

                    if (errorDetail) {
                        var msg = 'Sorry, your transaction could not be processed.';
                        if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                        if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                        return alert(msg); // Show a failure message (try to avoid alerts in production environments)
                    }

                    // Successful capture! For demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                    // Replace the above to show a success message within this page, e.g.
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '';
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }

        }).render('#paypal-button-container');
    </script>
    <br><br><br>
@endsection
