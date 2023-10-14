@extends('frontend.layout.master')

@section('header')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-5 text-white mb-3 animated slideInDown">Enjoy Your Delicious Escapade With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Explore, Reserve, Review - Your City's Restaurants Guide!</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter a Restaurant Name">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
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
            <h2>STEEL Restaurant & Cafe</h2>
       
        <div class="row align-items-center">
          <div class="col-4">
                        <div class="fa fa-calendar text-primary">&nbsp;&nbsp;August 31</div>

          </div>
          <div class="col-4">
                        <div class="fa fa-clock text-primary">&nbsp;&nbsp;9 PM - 10 PM</div>

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
        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-12">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
              <div class="validate"></div>
            </div>
            <div class="col-lg-12">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-12">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="+962 | Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
              <div class="validate"></div>
            </div>
          </div>
          <br><br><br><br>
        
            

          <div class="row gy-4">
            <div class="col-lg-12">
                <h6 class="text-dark">Payment By Credit / Debit Card </h6>          
                <hr>
                <div>
                    <div class="fa fa-bell d-inline-flex text-primary">
                        <p class="text-dark"  style="margin-left: 10px; font-weight: bold;">To confirm the reservation, you should pay 7$, and this amount
                             will be deducted from the bill value.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
              <input type="text" name="nameoncard" class="form-control" id="name" placeholder="Name on Card" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
              <div class="validate"></div>
            </div>
            <div class="col-lg-12">
              <input type="number" class="form-control" name="cardnumber" id="email" placeholder="Card Number" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6">
              <input type="date" class="form-control" name="expirydate" id="phone" placeholder="Expiry Date" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6">
              <input type="number" class="form-control" name="cvv" id="phone" placeholder="CVV" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
              <div class="validate"></div>
            </div>
          </div>
          <br><br>
          <div class="text-center"><button type="submit" class="btn btn-primary">Confirm Reservation</button></div>
        </form>
      </div>
    </div>

  </div>
</section>
<!-- End Book A Table Section -->

   <br><br><br>
    
@endsection