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
                <h1 class="mb-4">Who we are ?</h1>
                <p>Tufaayo foundation is a youth led non-profit organization that focuses on empowering young people from under-privileged communities. Tufaayo Foundation works with a goal of empowering the young people to become their better selves and also guide the young people in taking crucial life decisions regarding careers, life skills, health and behavior change </p>
                <p class="mb-4">We work tirelessly to make communities get transformed through</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Team working</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Inclusiveness</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Transparency</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Innovativeness</p>
                <p><i class="far fa-check-circle text-primary me-3"></i>Appreciation</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Subscribe</a>
            </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <div class="container-xxl py-5">
        <div class="container">
            <sectionHeader title="Our mission" section="mission" />
            <div class="text-center">
                <h5>Transforming young lives in Uganda with information and life skills to live a healthy and successful life.</h5>
            </div>
        </div>
        
        <div class="container">
            <sectionHeader title="Our vision" section="vision" />
            <div class="text-center">
                <h5>Empowering communities, changing lives</h5>
            </div>
        </div>
    </div>
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
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                <div class="overflow-hidden">
                    <img class="img-fluid" style="max-height:400px;width:100%;" src="../../../public/img/team1.jpeg" alt="" />
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
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative rounded overflow-hidden">
                <div class="overflow-hidden">
                    <img class="img-fluid"  style="max-height:400px;width:100%;" src="../../../public/img/team2.jpeg" alt="" />
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
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative rounded overflow-hidden">
                <div class="overflow-hidden">
                    <img class="img-fluid" style="max-height:400px;width:100%;"  src="../../../public/img/team3.jpeg" alt="" />
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
            
            </div>
        </div>
        </div>
        <!-- Team End -->

</div>
</template>

<script>
import Banner from './common/Banner.vue';
import sectionHeader from './common/sectionHeader.vue';
export default {
    name:"Aboutus",
    components:{
        Banner,
        sectionHeader
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