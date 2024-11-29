@extends('Frontend.layout.template')
@section('body')
<style>
  .hero-img {
    /* width: 56%; */
    width: 472px;
    height: 472px;
    object-fit: cover;
    border-radius: 10px;
    /* margin-left: -5rem; */
}
</style>
<section style="padding-top: 7rem;">
        <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
        </div>
        <!--/.bg-holder-->

        @php
    $herosections = \App\Models\Herosection::all();
@endphp

<div class="container">
    @foreach($herosections as $hero)
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
                @if($hero->image)
                    <img class="pt-7 pt-md-0 hero-img" src="{{ asset($hero->image) }}" alt="hero-header" />
                @else
                    <img class="pt-7 pt-md-0 hero-img" src="{{ asset('frontend/assets/img/hero/default-hero.png') }}" alt="default hero" />
                @endif
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                <h4 class="fw-bold text-danger mb-3">{{ $hero->subtitle }}</h4>
                <h1 class="hero-title">{{ $hero->title }}</h1>
                <p class="mb-4 fw-medium">{{ $hero->description }}</p>
                <div class="text-center text-md-start">
                    <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="{{ $hero->btn_url }}" role="button">{{ $hero->btn_txt }}</a>
                    <div class="w-100 d-block d-md-none"></div>
                    <a href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo">
                        <span class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow">
                            <img src="{{ asset('frontend/assets/img/hero/play.svg') }}" width="15" alt="play" />
                        </span>
                    </a>
                    <span class="fw-medium">Play Demo</span>
                    <!-- Video modal here -->
                    <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <iframe class="rounded" style="width:100%;max-height:500px;" height="500px" src="{{ $hero->video_url }}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9" id="service">
          <div class="container">
              @php
              $services = \App\Models\Service::all();
              $firstService = $services->first(); // Get the first service (if any)
              @endphp
      
              <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
                  <img src="{{asset('frontend/assets/img/category/shape.svg')}}" style="max-width: 200px" alt="service" />
              </div>
      
              @if($firstService) <!-- Check if there's at least one service -->
              <div class="mb-7 text-center">
                  <h5 class="text-secondary">{{ $firstService->ser_name }}</h5>
                  <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">{{ $firstService->ser_title }}</h3>
              </div>
              @endif
      
              <div class="row">
                  @foreach($services as $service)
                  <div class="col-lg-3 col-sm-6 mb-6">
                      <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                          <div class="card-body p-xxl-5 p-4">
                              <!-- Check if service image exists -->
                              @if($service->ser_img)
                                  <img src="{{ asset($service->ser_img) }}" width="75" alt="{{ $service->ser_card_title }}" />
                              @else
                                  <img src="{{ asset('frontend/assets/img/default.png') }}" width="75" alt="Default Image" />
                              @endif
                              
                              <!-- Service Title -->
                              <h4 class="mb-3">{{ $service->ser_card_title }}</h4>
                              
                              <!-- Service Description -->
                              <p class="mb-0 fw-medium">{{ $service->ser_card_des }}</p>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>   
          </div><!-- end of .container-->
      </section>
      
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pt-5" id="destination">
          <div class="container">
              <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4">
                  <img src="{{asset('frontend/assets/img/dest/shape.svg')}}" alt="destination" />
              </div>
              <div class="mb-7 text-center">
                  <h5 class="text-secondary">Top Selling</h5>
                  <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Top Destinations</h3>
              </div>
              @php
              $destinations = \App\Models\Destination::all();
              @endphp
              <div class="row">
                  @foreach($destinations as $destination)
                      <div class="col-md-4 mb-4">
                          <div class="card overflow-hidden shadow">
                              <img class="card-img-top" src="{{ asset($destination->image) }}" alt="{{ $destination->des_card_title }}" />
                              <div class="card-body py-4 px-3">
                                  <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                      <h4 class="text-secondary fw-medium">
                                          <a class="link-900 text-decoration-none stretched-link" href="#!">{{ $destination->des_card_title }}</a>
                                      </h4>
                                      <span class="fs-1 fw-medium">${{ number_format($destination->price, 2) }}</span>
                                  </div>
                                  <div class="d-flex align-items-center">
                                      <img src="{{asset('frontend/assets/img/dest/navigation.svg')}}" style="margin-right: 14px" width="20" alt="navigation" />
                                      <span class="fs-0 fw-medium">{{ $destination->days_trip }} Days Trip</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div><!-- end of .container-->
      </section>
      
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section id="booking">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-6">
                      <div class="mb-4 text-start">
                          <h5 class="text-secondary">Easy and Fast</h5>
                          <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Book your next trip in 3 easy steps</h3>
                      </div>
                      @php
                      $bookings = \App\Models\Booking::all();
                      @endphp
                      @foreach($bookings as $booking)
                      <div class="d-flex align-items-start mb-5">
                          <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px">
                              <img src="{{ asset($booking->image) }}" width="22" alt="steps" />
                          </div>
                          <div class="flex-1">
                              <h5 class="text-secondary fw-bold fs-0">{{ $booking->book_title }}</h5>
                              <p>{{ $booking->book_des }}</p>
                          </div>
                      </div>
                      @endforeach
                  </div>
      
                  <div class="col-lg-6 d-flex justify-content-center align-items-start">
                      <div class="card position-relative shadow" style="max-width: 370px;">
                          <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;">
                              <img src="{{ asset('frontend/assets/img/steps/bg.png') }}" style="max-width:550px;" alt="shape" />
                          </div>
                          <div class="card-body p-3">
                              <img class="mb-4 mt-2 rounded-2 w-100" src="{{ asset($booking->image) }}" alt="booking" />
                              <div>
                                  <h5 class="fw-medium">{{ $booking->book_title }}</h5>
                                  <p class="fs--1 mb-3 fw-medium">{{ $booking->all_people }} people going</p>
                                  <div class="d-flex align-items-center justify-content-between">
                                      <div class="d-flex align-items-center mt-n1">
                                          <img class="me-3" src="{{ asset('frontend/assets/img/steps/building.svg') }}" width="18" alt="building" />
                                          <span class="fs--1 fw-medium">{{ $booking->all_people }} people going</span>
                                      </div>
                                      <button class="btn">
                                          <img src="{{ asset('frontend/assets/img/steps/heart.svg') }}" width="20" alt="step" />
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div><!-- end of .container-->
      </section>`
      
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="testimonial">

        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="mb-8 text-start">
                <h5 class="text-secondary">Testimonials </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">What people say about Us.</h3>
              </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <div class="pe-7 ps-5 ps-lg-0">
                <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item position-relative active">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="{{asset('frontend/assets/img/testimonial/author.png')}}" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.&quot;</p>
                          <h5 class="text-secondary">Mike taylor</h5>
                          <p class="fw-medium fs--1 mb-0">Lahore, Pakistan</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="{{asset('frontend/assets/img/testimonial/author2.png')}}" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;Jadoo is recognized as one of the finest travel agency in the world. When it came to planning a trip, I found them to be dependable.&quot;</p>
                          <h5 class="text-secondary">Thomas Wagon</h5>
                          <p class="fw-medium fs--1 mb-0">CEO of Red Button</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                    <div class="carousel-item position-relative ">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" src="{{asset('frontend/assets/img/testimonial/author3.png')}}" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;On the Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no.&quot;</p>
                          <h5 class="text-secondary">Kelly Willium</h5>
                          <p class="fw-medium fs--1 mb-0">Khulna, Bangladesh</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                  </div>
                  <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0" style="height:60px;width:20px;">
                    <button class="carousel-control-prev position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img src="{{asset('frontend/assets/img/icons/up.svg')}}" width="16" alt="icon" /></button>
                    <button class="carousel-control-next position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="next"><img src="{{asset('frontend/assets/img/icons/down.svg')}}" width="16" alt="icon" /></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
        <div class="container">
          <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{asset('frontend/assets/img/partner/1.png')}}" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{asset('frontend/assets/img/partner/2.png')}}" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{asset('frontend/assets/img/partner/3.png')}}" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{asset('frontend/assets/img/partner/4.png')}}" alt="" /></div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="{{asset('frontend/assets/img/partner/5.png')}}" alt="" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-6">

        <div class="container">
          <div class="py-8 px-5 position-relative text-center" style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
            <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img src="{{asset('frontend/assets/img/cta/send.png')}}" style="max-width:70px;" alt="send icon" /></div>
            <div class="position-absolute end-0 top-0 z-index--1"> <img src="{{asset('frontend/assets/img/cta/shape-bg2.png')}}" width="264" alt="cta shape" /></div>
            <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img src="{{asset('frontend/assets/img/cta/shape-bg1.png')}}" style="max-width: 340px;" alt="cta shape" /></div>
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <h2 class="text-secondary lh-1-7 mb-7">Subscribe to get information, latest news and other interesting offers about Cobham</h2>
                <form class="row g-3 align-items-center w-lg-75 mx-auto">
                  <div class="col-sm">
                    <div class="input-group-icon">
                      <input class="form-control form-little-squirrel-control" type="email" placeholder="Enter email " aria-label="email" /><img class="input-box-icon" src="{{asset('frontend/assets/img/cta/mail.svg')}}" width="17" alt="mail" />
                    </div>
                  </div>
                  <div class="col-sm-auto">
                    <button class="btn btn-danger orange-gradient-btn fs--1">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0 pb-lg-4">

        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4" src="{{asset('frontend/assets/img/logo2.svg')}}" width="150" alt="jadoo" />
              <p class="fs--1 text-secondary mb-0 fw-medium">Book your trip in minute, get full Control for much longer.</p>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
              <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Company</h4>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">About</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Careers</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Mobile</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
              <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Help/FAQ</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Press</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Affiliate</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
              <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airlinefees</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Airline</a></li>
                <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Low fare tips</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
              <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social" id="facebook" href="#!"><i class="fab fa-facebook-f"> </i></a><a class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i class="fab fa-instagram"> </i></a><a class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i class="fab fa-twitter"> </i></a></div>
              <h4 class="fw-medium font-sans-serif text-secondary mb-3">Discover our app</h4>
              <div class="d-flex align-items-center"> <a href="#!"> <img class="me-2" src="{{asset('frontend/assets/img/play-store.png')}}" alt="play store" /></a><a href="#!"> <img src="{{asset('frontend/assets/img/apple-store.png')}}" alt="apple store" /></a></div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


  @endsection