<template>
    <div>
        <!-- Header Start -->
        <Banner
            class="banner"
            bgImageUrl="/img/1.jpg"
            bannerTitle="Say No to Sugar Daddies !"
            description="This is the banner sub title"
        />
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex flex-column">
                            <img
                                class="img-fluid rounded w-75 align-self-end"
                                src="../../../public/img/1.jpeg"
                                alt=""
                            />
                            <img
                                class="img-fluid rounded w-50 bg-white pt-3 pe-3"
                                src="../../../public/img/2.jpeg"
                                alt=""
                                style="margin-top: -25%"
                            />
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <p class="d-inline-block border rounded-pill py-1 px-4">
                            About Us
                        </p>
                        <h1 class="mb-4">
                            Why You Should Trust Us? Get Know About Us!
                        </h1>
                        <p>
                            {{ why_trust_us }}
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Quality health care
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Only Qualified Doctors
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Medical Research Professionals
                        </p>
                        <a
                            class="btn btn-primary rounded-pill py-3 px-5 mt-3"
                            href=""
                            >Read More</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <sectionHeader section="services" title="Our Community Services" />

        <!-- Service End -->

        <!-- Feature Start -->
        <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
            <div class="container feature px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div
                        class="col-lg-6 feature-text py-5 wow fadeIn"
                        data-wow-delay="0.1s"
                    >
                        <div class="p-lg-5 ps-lg-0">
                            <p
                                class="d-inline-block border rounded-pill text-light py-1 px-4"
                            >
                                Features
                            </p>
                            <h1 class="text-white mb-4">Why Choose Us</h1>
                            <p class="text-white mb-4 pb-2">
                                {{ why_trust_us }}
                            </p>
                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px"
                                        >
                                            <i
                                                class="fa fa-user-md text-primary"
                                            ></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">
                                                Experience
                                            </p>
                                            <h5 class="text-white mb-0">
                                                Doctors
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px"
                                        >
                                            <i
                                                class="fa fa-check text-primary"
                                            ></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">
                                                Quality
                                            </p>
                                            <h5 class="text-white mb-0">
                                                Services
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px"
                                        >
                                            <i
                                                class="fa fa-comment-medical text-primary"
                                            ></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">
                                                Positive
                                            </p>
                                            <h5 class="text-white mb-0">
                                                Consultation
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px"
                                        >
                                            <i
                                                class="fa fa-headphones text-primary"
                                            ></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">
                                                24 Hours
                                            </p>
                                            <h5 class="text-white mb-0">
                                                Support
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 pe-lg-0 wow fadeIn"
                        data-wow-delay="0.5s"
                        style="min-height: 400px"
                    >
                        <div class="position-relative h-100">
                            <img
                                class="position-absolute img-fluid w-100 h-100"
                                src="../../../public/images/9.jpeg"
                                style="object-fit: cover"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- latest activities -->
        <div class="container py-5">
            <sectionHeader title="OutReaches" section="Visits" />

            <div class="row visit-section">
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <BlogPost title="sample">
                        <template #image>
                            <img
                                src="../../../public/images/1.jpeg"
                                class="img-fluid"
                                alt=""
                            />
                        </template>
                    </BlogPost>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <BlogPost title="sample">
                        <template #image>
                            <img
                                src="../../../public/images/7.jpeg"
                                class="img-fluid"
                                alt=""
                            />
                        </template>
                    </BlogPost>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <BlogPost title="sample">
                        <template #image>
                            <img
                                src="../../../public/images/5.jpeg"
                                class="img-fluid"
                                alt=""
                            />
                        </template>
                    </BlogPost>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <BlogPost title="sample">
                        <template #image>
                            <img
                                src="../../../public/images/2.jpeg"
                                class="img-fluid"
                                alt=""
                            />
                        </template>
                    </BlogPost>
                </div>
            </div>
        </div>
        <!-- end of latest activities -->

        <!-- tufaayo online audience -->
        <div class="container">
            <div
                class="text-center mx-auto mb-5 wow fadeInUp"
                data-wow-delay="0.1s"
                style="max-width: 600px"
            >
                <p class="d-inline-block border rounded-pill py-1 px-4">
                    Social Media
                </p>
                <h1 class="text-primary">
                    <span class="tufaayo-color">Tufaayo</span> Online Channels
                </h1>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <FollowUs />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <iframe
                        width="500"
                        height="350"
                        src="https://www.youtube.com/embed/s8578OFo9p8"
                        title="Say NO to sugar daddies!💪Your worth isn’t defined by material things #NoToSugarDaddies #empowerment"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                        style="border-radius: 20px"
                    ></iframe>
                </div>
            </div>
        </div>

        <!-- end of tufaayo online audience -->
    </div>
</template>

<script>
import BlogPost from "./BlogPost.vue";
import Banner from "./common/Banner.vue";
import FollowUs from "./common/FollowUs.vue";
import sectionHeader from "./common/sectionHeader.vue";
export default {
    name: "Home",
    components: {
        BlogPost,
        Banner,
        FollowUs,
        sectionHeader,
    },
    props: {
        school_visited: {
            type: Number,
            required: true,
        },
        communities_visited: {
            type: Number,
            required: true,
        },
        number_of_members: {
            type: Number,
            required: true,
        },
        why_trust_us: {
            type: String,
            required: false,
            default: null
        },
    },
};
</script>

<style scoped>
.banner {
    background-image: url("../../../public/images/3.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
}

.visit-section .img-fluid:hover {
    transform: scale(2.5);
    z-index: 1;
    border-radius: 20px;
    border: 2px solid white;
}
</style>
