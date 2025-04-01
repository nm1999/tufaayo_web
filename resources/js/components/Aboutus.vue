<template>
    <div class="">
   <!-- Page Header Start -->
    <Banner
        class="banner"
        bannerTitle="More about tufaayo foundation"
        description="This is the banner sub title"
    />
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid rounded w-75 align-self-end" src="../../../public/img/aboutus2.jpeg" alt="">
                    <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="../../../public/img/aboutus3.jpeg" alt="" style="margin-top: -25%;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Quality health care</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Only Qualified Doctors</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Medical Research Professionals</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
            </div>
        </div>
      </div>
    </div>
    <!-- About End -->

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
                    <img class="img-fluid" style="max-height:300px;width:100%" src="../../../public/img/team1.jpeg" alt="" />
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
                    <img class="img-fluid" style="height:300px;width:100%" src="../../../public/img/team2.jpeg" alt="" />
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
                    <img class="img-fluid" style="max-height:300px;width:100%" src="../../../public/img/team3.jpeg" alt="" />
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
                    <img class="img-fluid" style="max-height:300px;width:100%" src="../../../public/img/team1.jpeg" alt="" />
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
</template>

<script>
import Banner from './common/Banner.vue';
export default {
    name:"Aboutus",
    components:{
        Banner
    }
}
</script>
<style scoped>
.banner {
    background-image: url('../../../public/images/1.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
}

</style>