<template>
    <div>
        <!-- Header Start -->

        <Slider 
            :images="imagesData"
        />
       
        <!-- Header End -->

        <!-- how we started -->
        <div class="container">
            <sectionHeader class="content-section fade-in-up" section="started" title="How we started" />
            <p class="content-section fade-in-up">
                Tufaayo Foundation was founded by a passionate young woman, Nabaziwa Jannat, in Lira—a region still recovering from the scars of the Kony War. During a visit to a local primary school, she was struck by the sight of empty desks where young girls should have been. Upon asking why, she learned a heartbreaking truth: many girls missed school during their menstrual periods due to a lack of access to sanitary pads. Over time, some dropped out entirely, while others were forced into early marriages.
                Deeply moved by these stories, Jannat resolved to be part of the solution. Together with her colleagues, Muhindo Moureen and Mugerwa Moses, she founded Tufaayo Foundation with a mission to restore hope and dignity to vulnerable girls.
                Today, the foundation trains schoolgirls to make reusable sanitary pads, implements the Sugar Daddy Awareness Program, offers career guidance to uplift youth, and promotes social and behavior change communication (SBCC). It also organizes outreach programs to donate clothes to children and provides mama kits to pregnant teenagers ensuring that no girl is left behind due to circumstances beyond her control.
                Through these efforts, Tufaayo Foundation continues to create lasting change, empowering young people to stay in school, pursue their dreams, and live with dignity.
            </p>
        </div>
        <!-- end how we started -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container content-section fade-in-up">
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
                        <h1 class="mb-4">Key Achievements!</h1>

                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Conducted career guidance sessions in 10 primary
                            and secondary schools to support students in making
                            informed educational and career choices.
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Created awareness among 1,617 young girls in 11
                            secondary schools about the dangers of engaging in
                            sexual relationships with older men (“sugar
                            daddies”) through drama and interactive plays.
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Organized community outreaches and donations,
                            including mama kits for 30 pregnant teenagers at
                            Amach HCIV and reusable pads for 50 young girls at
                            Amach Primary School.
                        </p>
                        <p>
                            <i class="far fa-check-circle text-primary me-3"></i
                            >Trained 30 young girls in making reusable pads
                            using locally available materials to promote
                            menstrual hygiene and self-reliance.
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
        <sectionHeader class="content-section fade-in-up" section="services" title="Our Community Services" />

        <!-- Service End -->

        <!-- Feature Start -->
        <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
            <div class="container feature px-lg-0">
                <div class="row g-0 mx-lg-0 content-section fade-in-up">
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
                                <div
                                    class="col-md-6 col-sm-12 col-lg-6 text-white"
                                >
                                    <i class="fa fa-check"></i> Team work
                                </div>
                                <div
                                    class="col-md-6 col-sm-12 col-lg-6 text-white"
                                >
                                    <i class="fa fa-check"></i> Inclusivity
                                </div>
                                <div
                                    class="col-md-6 col-sm-12 col-lg-6 text-white"
                                >
                                    <i class="fa fa-check"></i> Transparency
                                </div>
                                <div
                                    class="col-md-6 col-sm-12 col-lg-6 text-white"
                                >
                                    <i class="fa fa-check"></i> Innovativeness
                                </div>
                                <div
                                    class="col-md-6 col-sm-12 col-lg-6 text-white"
                                >
                                    <i class="fa fa-check"></i> Appreciation of
                                    diversity
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
                    <BlogPost
                        title="A photo with student leaders at Amach Complex school"
                    >
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

        <div class="container-xxl py-5">
            <div class="container">
                <sectionHeader title="Our mission" section="mission" />
                <div class="text-center content-section fade-in-up">
                    <h5>
                        Transforming young lives in Uganda with information and
                        life skills to live a healthy and successful life.
                    </h5>
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
            <div class="container content-section fade-in-up">
                <div
                    class="text-center mx-auto mb-5 wow fadeInUp"
                    data-wow-delay="0.1s"
                    style="max-width: 600px"
                >
                    <p class="d-inline-block border rounded-pill py-1 px-4">
                        Team
                    </p>
                    <h1>Our Experienced Team</h1>
                </div>
                <div class="row g-4">
                    <div
                        class="col-lg-4 col-md-6 wow fadeInUp"
                        data-wow-delay="0.1s"
                    >
                        <div
                            class="team-item position-relative rounded overflow-hidden"
                        >
                            <div class="overflow-hidden">
                                <img
                                    class="img-fluid"
                                    style="max-height: 400px; width: 100%"
                                    src="../../../public/img/team1.jpeg"
                                    alt=""
                                />
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Nabazziwa Janat</h5>
                                <p class="text-primary">CEO</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a class="btn btn-square" href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a class="btn btn-square" href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 col-md-6 wow fadeInUp"
                        data-wow-delay="0.3s"
                    >
                        <div
                            class="team-item position-relative rounded overflow-hidden"
                        >
                            <div class="overflow-hidden">
                                <img
                                    class="img-fluid"
                                    style="max-height: 400px; width: 100%"
                                    src="../../../public/img/team2.jpeg"
                                    alt=""
                                />
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Mugerwa Moses</h5>
                                <p class="text-primary">Communications</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a class="btn btn-square" href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a class="btn btn-square" href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-4 col-md-6 wow fadeInUp"
                        data-wow-delay="0.5s"
                    >
                        <div
                            class="team-item position-relative rounded overflow-hidden"
                        >
                            <div class="overflow-hidden">
                                <img
                                    class="img-fluid"
                                    style="max-height: 400px; width: 100%"
                                    src="../../../public/img/team3.jpeg"
                                    alt=""
                                />
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5>Moreen</h5>
                                <p class="text-primary">Director</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    <a class="btn btn-square" href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                    <a class="btn btn-square" href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of tufaayo online audience -->

        <!-- tufaayo online audience -->
       
    </div>
</template>

<script>
import { ref } from 'vue';
import BlogPost from "./BlogPost.vue";
import Banner from "./common/Banner.vue";
import FollowUs from "./common/FollowUs.vue";
import sectionHeader from "./common/sectionHeader.vue";
import Slider from "./common/Slider.vue";
export default {
    name: "Home",
    components: {
        BlogPost,
        Banner,
        FollowUs,
        sectionHeader,
        Slider
    },
    setup(){
        const imagesData = ref([]);

        const myGalleryImages = async () => {
            await axios.get('/api/our/images').then((res)=>{
                imagesData.value = res.data.images;
            });
        }

        myGalleryImages();
        return {
            imagesData
        }
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
            default: null,
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
