@extends('frontend.layout.master')

@section('content')
 <div class="filter-container">
      <div class="row justify-content-center">
        <div class="filter col-lg-5 col-md-5">
          <strong class="font-weight-bold text-dark">Suggested:</strong>
          <label
            ><input type="checkbox" class="dietary" value="breakfast" />
            Breakfast</label
          >
          <label
            ><input type="checkbox" class="dietary" value="lunch" />
            Lunch</label
          >
          <label
            ><input type="checkbox" class="dietary" value="dinner" />
            Dinner</label
          >
          <label
            ><input type="checkbox" class="dietary" value="opennow" /> Open
            Now</label
          >
          <label
            ><input type="checkbox" class="dietary" value="healthy" />
            Healthy</label
          >
        </div>

        <div class="filter col-lg-5 col-md-5">
          <strong class="font-weight-bold text-dark">Tasty:  </strong>
          <label
            ><input type="checkbox" class="dietary" value="burger" />
            Burger</label
          >
          <label
            ><input type="checkbox" class="dietary" value="pizza" />
            Pizza</label
          >
          <label
            ><input type="checkbox" class="dietary" value="shawarma" />
            Shawarma</label
          >
          <label
            ><input type="checkbox" class="dietary" value="shish" /> Shish
            Taouk</label
          >
          <label
            ><input type="checkbox" class="dietary" value="seafood" /> Sea
            Food</label
          >
        </div>
      </div>
    </div>
    <div class="restaurant-list">
      <!-- Restaurant cards will be dynamically generated here -->
      <!-- Restaurants start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Best Restaurants & Cafes in Irbid:</h1>
          </div>
          <br />
          <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="package-item">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="./img2/grilmark.jpg" alt="" />
                </div>
                <div class="d-flex border-bottom text-danger">
                  <small class="flex-fill text-center border-end py-2"
                    ><i class="fa fa-clock text-primary me-2"></i>Close
                    Now</small
                  >
                </div>
                <div class="text-center p-4 card fixed-height-card">
                  <h3 class="mb-0">Grill Mark Restaurant</h3>
                  <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <p>10 Reviews</p>
                  </div>
                  <p>Burger / Lunch / Dinner / Trendy / Healthy</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a
                      href="#"
                      class="btn btn-sm btn-primary px-3 border-end btncard"
                      style="border-radius: 30px 3px 30px"
                      >Show</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="package-item">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="./img2/steel.jpg" alt="" />
                </div>
                <div class="d-flex border-bottom text-success">
                  <small class="flex-fill text-center border-end py-2"
                    ><i class="fa fa-clock text-primary me-2"></i>Open
                    Now</small
                  >
                </div>
                <div class="text-center p-4 card fixed-height-card">
                  <h3 class="mb-0">STEEL Restaurant & Cafe</h3>
                  <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <p>135 Reviews</p>
                  </div>
                  <p>Breakfast / Lunch / Dinner / all Dishes</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a
                      href="./singlerest.html"
                      class="btn btn-sm btn-primary px-3 border-end btncard"
                      style="border-radius: 30px 3px 30px"
                      >Show</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="package-item">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="./img2/ghosn.jpg" alt="" />
                </div>
                <div class="d-flex border-bottom text-success">
                  <small class="flex-fill text-center border-end py-2"
                    ><i class="fa fa-clock text-primary me-2"></i>Open
                    Now</small
                  >
                </div>
                <div class="text-center p-4 card fixed-height-card">
                  <h3 class="mb-0">Ghosn Restaurant & Cafe</h3>
                  <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <p>59 Reviews</p>
                  </div>
                  <p>Burger / Lunch / Dinner / all Dishes / Trendy</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a
                      href="#"
                      class="btn btn-sm btn-primary px-3 border-end btncard"
                      style="border-radius: 30px 3px 30px"
                      >Show</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="package-item">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="./img2/haram.jpg" alt="" />
                </div>
                <div class="d-flex border-bottom text-danger">
                  <small class="flex-fill text-center border-end py-2"
                    ><i class="fa fa-clock text-primary me-2"></i>Close
                    Now</small
                  >
                </div>
                <div class="text-center p-4 card fixed-height-card">
                  <h3 class="mb-0">Alharam Restaurant & Cafe</h3>
                  <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <p>250 Reviews</p>
                  </div>
                  <p>Breakfast / Lunch / Dinner / all Dishes</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a
                      href="#"
                      class="btn btn-sm btn-primary px-3 border-end btncard"
                      style="border-radius: 30px 3px 30px"
                      >Show</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s"></div>
          <br />
          <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="package-item">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="./img2/cappado.jpg" alt="" />
                </div>
                <div class="d-flex border-bottom text-danger">
                  <small class="flex-fill text-center border-end py-2"
                    ><i class="fa fa-clock text-primary me-2"></i>Close
                    Now</small
                  >
                </div>
                <div class="text-center p-4">
                  <h3 class="mb-0">Cappado.irbid</h3>
                  <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <p>10 Reviews</p>
                  </div>
                  <p>Burger / Lunch / Dinner / Healthy / Trendy</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a
                      href="#"
                      class="btn btn-sm btn-primary px-3 border-end"
                      style="border-radius: 30px 3px 30px"
                      >Show</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="package-item">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="./img2/karaz.jpg" alt="" />
                </div>
                <div class="d-flex border-bottom text-success">
                  <small class="flex-fill text-center border-end py-2"
                    ><i class="fa fa-clock text-primary me-2"></i>Open
                    Now</small
                  >
                </div>
                <div class="text-center p-4">
                  <h3 class="mb-0">Karaz Rest & Cafe</h3>
                  <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <p>135 Reviews</p>
                  </div>
                  <p>Breakfast / Lunch / Dinner / all Dishes</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a
                      href="#"
                      class="btn btn-sm btn-primary px-3 border-end"
                      style="border-radius: 30px 3px 30px"
                      >Show</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="package-item">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="./img2/vogo.jpg" alt="" />
                </div>
                <div class="d-flex border-bottom text-success">
                  <small class="flex-fill text-center border-end py-2"
                    ><i class="fa fa-clock text-primary me-2"></i>Open
                    Now</small
                  >
                </div>
                <div class="text-center p-4">
                  <h3 class="mb-0">VOGO Cafe</h3>
                  <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <p>59 Reviews</p>
                  </div>
                  <p>Burger / Lunch / Dinner / all Dishes / Trendy</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a
                      href="#"
                      class="btn btn-sm btn-primary px-3 border-end"
                      style="border-radius: 30px 3px 30px"
                      >Show</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="package-item">
                <div class="overflow-hidden">
                  <img class="img-fluid" src="./img2/rassam.jpg" alt="" />
                </div>
                <div class="d-flex border-bottom text-danger">
                  <small class="flex-fill text-center border-end py-2"
                    ><i class="fa fa-clock text-primary me-2"></i>Close
                    Now</small
                  >
                </div>
                <div class="text-center p-4">
                  <h3 class="mb-0">Al-Rassam</h3>
                  <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <p>250 Reviews</p>
                  </div>
                  <p>Breakfast / Lunch / Dinner / all Dishes</p>
                  <div class="d-flex justify-content-center mb-2">
                    <a
                      href="#"
                      class="btn btn-sm btn-primary px-3 border-end"
                      style="border-radius: 30px 3px 30px"
                      >Show</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Restaurants End -->
    </div>

    
@endsection