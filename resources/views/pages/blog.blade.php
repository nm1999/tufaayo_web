@extends('app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-lg-9 col-sm-12">
        <br>
        <h4>Our Visits</h4>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-12">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">
                  <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="left-image">
                      <a href="#">
                        <img src="{{ asset('img/2.jpeg') }}" style="width:350px;height:340px;border-radius:10px" alt="Workspace Desktop">
                      </a>
                    </div>

                    <div class="">
                      <ul class="d-flex">
                        <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>                            
                      </ul>
                      <a href="#">
                        <h4>Manufacturing reusable sanitary towels </h4>
                      </a>
                      <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
                      <div class="main-blue-button">
                        <a href="#">Join our 10k challenge</a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6 col-sm-12 col-lg-6">
                  <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="left-image">
                      <a href="#"><img src="{{ asset('img/1.jpeg') }}" style="width:350px;height:340px;border-radius:10px" alt="Workspace Desktop"></a>
                      <div class="info">
                        <div class="">
                          <ul class="d-flex">
                            <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                          </ul>
                          <a href="#"><h4>Manufacturing reusable sanitary towels </h4></a>
                          <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
                          <div class="main-blue-button">
                            <a href="#">Join our 10k challenge</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-12"></div>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 col-sm-12">
        <br>
        <h4>Latest visits</h4>

        <div class="row">
          <div class="col-md-3 col-sm-12 col-lg-3">
              <img src="{{ asset('img/1.jpeg') }}" style="width:100px;height:100px;border-radius:10px" alt="">
          </div>
          <div class="col-md-9 col-sm-12 col-lg-9">
              <p>Lorem ipsum dolor fugiat architecto, provident consequuntur odio repudiandae.</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-3 col-sm-12 col-lg-3">
              <img src="{{ asset('img/1.jpeg') }}" style="width:100px;height:100px;border-radius:10px" alt="">
          </div>
          <div class="col-md-9 col-sm-12 col-lg-9">
              <p>Lorem ipsum dolor fugiat architecto, provident consequuntur odio repudiandae.</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-3 col-sm-12 col-lg-3">
              <img src="{{ asset('img/1.jpeg') }}" style="width:100px;height:100px;border-radius:10px" alt="">
          </div>
          <div class="col-md-9 col-sm-12 col-lg-9">
              <p>Lorem ipsum dolor fugiat architecto, provident consequuntur odio repudiandae.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection('content')