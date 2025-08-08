<template>
    <div>
        <!-- adding slider images -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/1.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/3.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- ending slider images    -->      
       
        <!-- Header Start -->
        <Banner
            class="banner"
            bgImageUrl="/img/1.jpg"
            bannerTitle="Say No to Sugar Daddies !"
            description="Created awareness among young girls the dangers of engaging in sexual relationships with older men "
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
                            Key Achievements!
                        </h1>
                       
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Conducted career guidance sessions in 10 primary and secondary schools to support students in making informed educational and career choices.
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Created awareness among 1,617 young girls in 11 secondary schools about the dangers of engaging in sexual relationships with older men (“sugar daddies”) through drama and interactive plays.
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Organized community outreaches and donations, including mama kits for 30 pregnant teenagers at Amach HCIV and reusable pads for 50 young girls at Amach Primary School.
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                                >Trained 30 young girls in making reusable pads using locally available materials to promote menstrual hygiene and self-reliance.
                        </p>
                        <a
                            class="btn btn-primary rounded-pill py-3 px-5 mt-3"
                            href=""
                            >Join Us</a
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
                            <h1 class="text-white mb-4">Core Values</h1>
                            
                            <div class="row g-4">
                                <div class="col-md-6 col-sm-12 col-lg-6 text-white">
                                    <i class="fa fa-check"></i> Team work
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 text-white">
                                    <i class="fa fa-check"></i> Inclusivity
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 text-white">
                                    <i class="fa fa-check"></i> Transparency
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 text-white">
                                    <i class="fa fa-check"></i> Innovativeness
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 text-white">
                                    <i class="fa fa-check"></i> Appreciation of diversity
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
                    <BlogPost title="A photo with student leaders at Amach Complex school">
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
                    <BlogPost title="Conducting a play about the sugar daddies">
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
                    <BlogPost title="Talking to students about career guidance">
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
                    <BlogPost title="Giving mama kits to mothers">
                        <template #image>
                            <img
                                src="../../../public/gallery/31.jpeg"
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
    /* transform: scale(2.5); */
    /* z-index: 1; */
    border-radius: 20px;
    /* border: 2px solid white; */
}
</style>
