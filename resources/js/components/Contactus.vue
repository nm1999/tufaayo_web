<template>
    <div class="">
        <Banner
            class="banner"
            bannerTitle="Contact Us"
            description="This is the banner sub title"
        />
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div
                            class="h-100 bg-light rounded d-flex align-items-center p-5"
                        >
                            <div
                                class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                                style="width: 55px; height: 55px"
                            >
                                <i
                                    class="fa fa-map-marker-alt text-primary"
                                ></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Address</p>
                                <h5 class="mb-0">{{ location }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="h-100 bg-light rounded d-flex align-items-center p-5"
                        >
                            <div
                                class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                                style="width: 55px; height: 55px"
                            >
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Call Us Now</p>
                                <h5 class="mb-0">{{ PhoneNumber }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="h-100 bg-light rounded d-flex align-items-center p-5"
                        >
                            <div
                                class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                                style="width: 55px; height: 55px"
                            >
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mail Us Now</p>
                                <h5 class="mb-0" style="font-size: 17px">
                                    {{ emailAddress }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-light rounded p-5">
                            <p
                                class="d-inline-block border rounded-pill py-1 px-4"
                            >
                                Contact Us
                            </p>
                            <h1 class="mb-4">
                                Have Any Query? Please Contact Us!
                            </h1>
                            <p class="mb-4">
                                The contact form is currently active.
                            </p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="name"
                                                placeholder="Your Name"
                                            />
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="email"
                                                placeholder="Your Email"
                                            />
                                            <label for="email"
                                                >Your Email</label
                                            >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="subject"
                                                placeholder="Subject"
                                            />
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea
                                                class="form-control"
                                                placeholder="Leave a message here"
                                                id="message"
                                                style="height: 100px"
                                            ></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button
                                            class="btn btn-primary w-100 py-3"
                                            type="submit"
                                        >
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100" style="min-height: 400px">
                            <iframe
                                class="rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.739629875517!2d32.818472373715636!3d2.2509819580195707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1770bb92b7b8c36d%3A0xcc7e812a09d97f5a!2sLira%20University!5e0!3m2!1sen!2sug!4v1743718856774!5m2!1sen!2sug"
                                frameborder="0"
                                allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
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
        </div>
    </div>
</template>

<script>
import Banner from "./common/Banner.vue";
import FollowUs from "./common/FollowUs.vue";
export default {
    name: "Contactus",
    components: {
        Banner,
        FollowUs
    },
    props: {
        location: {
            type: String,
            required: true,
        },
        emailAddress: {
            type: String,
            required: true,
        },
        PhoneNumber: {
            type: String,
            required: true,
        },
    },
};
</script>

<style scoped>
.banner {
    background-image: url('../../../public/images/6.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
}

</style>