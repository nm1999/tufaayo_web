@extends('app')
@section('content')
<div>
    <!-- Header Start -->
    <div class="container-fluid header home-bg-image p-0 mb-5">
      <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
          <h1 class="display-4 text-white mb-5">We improve Lifes in the Rural Communities</h1>
          <div class="row g-4">
            <div class="col-sm-4">
              <div class="border-start border-light ps-4">
                <h2 class="text-white mb-1" data-toggle="counter-up">6</h2>
                <p class="text-light mb-0">Visited Schools</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="border-start border-light ps-4">
                <h2 class="text-white mb-1" data-toggle="counter-up">124</h2>
                <p class="text-light mb-0">Members</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="border-start border-light ps-4">
                <h2 class="text-white mb-1" data-toggle="counter-up">4</h2>
                <p class="text-light mb-0">Communities</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{ asset('img/carousel-1.jpg') }}" alt="" />
              <div class="owl-carousel-text">
                <h1 class="display-1 text-white mb-0">Cardiology</h1>
              </div>
            </div>
            <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{ asset('img/carousel-2.jpg') }}" alt="" />
              <div class="owl-carousel-text">
                <h1 class="display-1 text-white mb-0">Neurology</h1>
              </div>
            </div>
            <div class="owl-carousel-item position-relative">
              <img class="img-fluid" src="{{ asset('img/carousel-3.jpg') }}" alt="" />
              <div class="owl-carousel-text">
                <h1 class="display-1 text-white mb-0">Pulmonary</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="d-flex flex-column">
              <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('img/1.jpeg') }}" alt="" />
              <img
                class="img-fluid rounded w-50 bg-white pt-3 pe-3"
                src="{{ asset('img/2.jpeg') }}"
                alt=""
                style="margin-top: -25%"
              />
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
            <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
            <p>
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
              eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore
              erat amet
            </p>
            <p class="mb-4">
              Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum
              amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus
              dolor eos.
            </p>
            <p><i class="far fa-check-circle text-primary me-3"></i>Quality health care</p>
            <p><i class="far fa-check-circle text-primary me-3"></i>Only Qualified Doctors</p>
            <p>
              <i class="far fa-check-circle text-primary me-3"></i>Medical Research Professionals
            </p>
            <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <p class="d-inline-block border rounded-pill py-1 px-4">Services</p>
          <h1>Our Community Services</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-heartbeat text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">We care for young pregnant mothers</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                sed stet.
              </p>
              <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-x-ray text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">Impart life saving skills</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                sed stet.
              </p>
              <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-brain text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">Sensitize about sanitation</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                sed stet.
              </p>
              <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-wheelchair text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">Provide scholaristic materials.</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                sed stet.
              </p>
              <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-tooth text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">Providing clean water</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                sed stet.
              </p>
              <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light rounded h-100 p-5">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                style="width: 65px; height: 65px"
              >
                <i class="fa fa-vials text-primary fs-4"></i>
              </div>
              <h4 class="mb-3">Team building</h4>
              <p class="mb-4">
                Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                sed stet.
              </p>
              <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
      <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="p-lg-5 ps-lg-0">
              <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
              <h1 class="text-white mb-4">Why Choose Us</h1>
              <p class="text-white mb-4 pb-2">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet
              </p>
              <div class="row g-4">
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                      style="width: 55px; height: 55px"
                    >
                      <i class="fa fa-user-md text-primary"></i>
                    </div>
                    <div class="ms-4">
                      <p class="text-white mb-2">Experience</p>
                      <h5 class="text-white mb-0">Doctors</h5>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                      style="width: 55px; height: 55px"
                    >
                      <i class="fa fa-check text-primary"></i>
                    </div>
                    <div class="ms-4">
                      <p class="text-white mb-2">Quality</p>
                      <h5 class="text-white mb-0">Services</h5>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                      style="width: 55px; height: 55px"
                    >
                      <i class="fa fa-comment-medical text-primary"></i>
                    </div>
                    <div class="ms-4">
                      <p class="text-white mb-2">Positive</p>
                      <h5 class="text-white mb-0">Consultation</h5>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div
                      class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                      style="width: 55px; height: 55px"
                    >
                      <i class="fa fa-headphones text-primary"></i>
                    </div>
                    <div class="ms-4">
                      <p class="text-white mb-2">24 Hours</p>
                      <h5 class="text-white mb-0">Support</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px">
            <div class="position-relative h-100">
              <img
                class="position-absolute img-fluid w-100 h-100"
                src="{{ asset('img/3.jpeg') }}"
                style="object-fit: cover"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto mb-5 wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 600px"
        >
          <p class="d-inline-block border rounded-pill py-1 px-4">Team</p>
          <h1>Our Experienced Team</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" style="max-height:300px;width:100%" src="{{ asset('img/team1.jpeg') }}" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>Nabazziwa Janat</h5>
                <p class="text-primary">CEO</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" style="height:300px;width:100%" src="{{ asset('img/team2.jpeg') }}" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>Mugerwa Moses</h5>
                <p class="text-primary">Communications</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" style="max-height:300px;width:100%" src="{{ asset('img/team3.jpeg') }}" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5>Moreen</h5>
                <p class="text-primary">Director</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item position-relative rounded overflow-hidden">
              <div class="overflow-hidden">
                <img class="img-fluid" style="max-height:300px;width:100%" src="{{ asset('img/team1.jpeg') }}" alt="" />
              </div>
              <div class="team-text bg-light text-center p-4">
                <h5> Name</h5>
                <p class="text-primary">Department</p>
                <div class="team-social text-center">
                  <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->
</div>
@endsection('content')