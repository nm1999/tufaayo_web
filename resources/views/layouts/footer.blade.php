<div>
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ setValue()->location }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ setValue()->phone_number }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i> <span style="font-size:14px">{{ setValue()->email_address }}</span></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="">Charity</a>
                    <a class="btn btn-link" href="">Health Education</a>
                    <a class="btn btn-link" href="">Motivation talks</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a href="{{ route('index') }}" class="btn btn-link" href="">Home</a>
                    <a href="{{ route('aboutus') }}" class="btn btn-link" href="">About Us</a>
                    <a href="{{ route('contactus') }}" class="btn btn-link" href="">Contact Us</a>                    
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Subscribe</h5>
                    <p>Enter your email to recieve updates about tufaayo foundation.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Tufaayo foundation</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>