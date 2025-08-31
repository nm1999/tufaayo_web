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
                    <div class="col-lg-6 wow animate-on-scroll" data-wow-delay="0.1s">
                        <div class="d-flex flex-column">
                            <img
                                class="img-fluid rounded w-75 align-self-end"
                                src="../../../public/img/aboutus2.jpeg"
                                alt=""
                            />
                            <img
                                class="img-fluid rounded w-50 bg-white pt-3 pe-3"
                                src="../../../public/img/aboutus3.jpeg"
                                alt=""
                                style="margin-top: -25%"
                            />
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate-on-scroll" data-wow-delay="0.5s">
                        <p class="d-inline-block border rounded-pill py-1 px-4">
                            About Us
                        </p>
                        <h1 class="mb-4">Who we are ?</h1>
                        <p>
                            Tufaayo foundation is a youth led non-profit
                            organization that focuses on empowering young people
                            from under-privileged communities. Tufaayo
                            Foundation works with a goal of empowering the young
                            people to become their better selves and also guide
                            the young people in taking crucial life decisions
                            regarding careers, life skills, health and behavior
                            change
                        </p>
                        <p class="mb-4">
                            We work tirelessly to make communities get
                            transformed through
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Team working
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Inclusiveness
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Transparency
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Innovativeness
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Appreciation
                        </p>
                        <a
                            class="btn btn-primary rounded-pill py-3 px-5 mt-3"
                            href=""
                            >Subscribe</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </div>
</template>

<script>
import Banner from "./common/Banner.vue";
import sectionHeader from "./common/sectionHeader.vue";
export default {
    name: "Aboutus",
    components: {
        Banner,
        sectionHeader,
    },
    mounted(){
        this.setupIntersectionObserver();
    },
    methods: {
        setupIntersectionObserver() {
            const animatedElements =
                document.querySelectorAll(".animate-on-scroll");

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("w3-animate-bottom");
                            observer.unobserve(entry.target);
                        }
                    });
                },
                {
                    threshold: 0.1,
                }
            );

            animatedElements.forEach((element) => {
                observer.observe(element);
            });
        },
    },
};
</script>
<style scoped>
.banner {
    background-image: url("../../../public/images/1.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
