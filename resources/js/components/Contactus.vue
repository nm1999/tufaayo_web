<template>
    <div>
        <Banner
            class="banner pt-5"
            bannerTitle="Contact Us"
            description="Reach out to partner, volunteer, or support our programs."
        />

        <div class="container-xxl py-5">
            <div class="container">
                <sectionHeader section="Get In Touch" title="Let's Build Safer Futures Together" />

                <div class="row g-4 mb-5">
                    <div class="col-lg-4 anim-fade-up animate-on-scroll">
                        <div class="contact-card h-100">
                            <div class="contact-icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h5>Visit Us</h5>
                            <p class="mb-0">{{ location }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.1s">
                        <div class="contact-card h-100">
                            <div class="contact-icon"><i class="fa fa-phone-alt"></i></div>
                            <h5>Call Us</h5>
                            <p class="mb-0">{{ PhoneNumber }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.2s">
                        <div class="contact-card h-100">
                            <div class="contact-icon"><i class="fa fa-envelope-open"></i></div>
                            <h5>Email Us</h5>
                            <p class="mb-0">{{ emailAddress }}</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-6 anim-fade-left animate-on-scroll">
                        <div class="form-shell p-4 p-lg-5">
                            <span class="section-tag d-inline-block rounded-pill py-1 px-4 mb-3">Contact Form</span>
                            <h3 class="mb-3 fw-black" style="color:#1B2C51">Have a Question or Partnership Idea?</h3>
                            <p class="text-secondary mb-4">Send us a message and our team will respond as soon as possible.</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name" />
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email" />
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" />
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea
                                                class="form-control"
                                                placeholder="Leave a message here"
                                                id="message"
                                                style="height: 120px"
                                            ></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3 rounded-pill" type="submit">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 anim-fade-right animate-on-scroll">
                        <div class="map-shell h-100">
                            <iframe
                                class="rounded-4 w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.739629875517!2d32.818472373715636!3d2.2509819580195707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1770bb92b7b8c36d%3A0xcc7e812a09d97f5a!2sLira%20University!5e0!3m2!1sen!2sug!4v1743718856774!5m2!1sen!2sug"
                                frameborder="0"
                                allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0"
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div class="container mt-5 px-0">
                    <sectionHeader section="Follow Along" title="Our Online Channels" />
                    <div class="row g-4">
                        <div class="col-lg-6 anim-fade-left animate-on-scroll">
                            <div class="social-shell p-3 p-md-4 rounded-4 h-100">
                                <FollowUs />
                            </div>
                        </div>
                        <div class="col-lg-6 anim-fade-right animate-on-scroll">
                            <div class="video-shell p-2 p-md-3 rounded-4 h-100">
                                <iframe
                                    class="w-100 h-100 rounded-4"
                                    style="min-height: 340px"
                                    src="https://www.youtube.com/embed/s8578OFo9p8"
                                    title="Say NO to sugar daddies"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Banner from "./common/Banner.vue";
import FollowUs from "./common/FollowUs.vue";
import sectionHeader from "./common/sectionHeader.vue";

export default {
    name: "Contactus",
    components: {
        Banner,
        FollowUs,
        sectionHeader,
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
    mounted() {
        this.setupIntersectionObserver();
    },
    methods: {
        setupIntersectionObserver() {
            const animatedElements = document.querySelectorAll(".animate-on-scroll");
            const observer = new IntersectionObserver(
                (entries, obs) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("anim-visible");
                            obs.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.1 }
            );
            animatedElements.forEach((element) => observer.observe(element));
        },
    },
};
</script>

<style scoped>
.banner {
    background-image: url("../../../public/images/6.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
}

.contact-card {
    background: #fff;
    border: 1px solid #eef0f5;
    border-radius: 16px;
    padding: 1.8rem;
    text-align: center;
    transition: transform .3s ease, box-shadow .3s ease;
}
.contact-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 14px 30px rgba(4, 99, 250, 0.12);
}
.contact-icon {
    width: 58px;
    height: 58px;
    margin: 0 auto 1rem;
    border-radius: 50%;
    background: var(--light);
    color: var(--primary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}
.form-shell,
.map-shell,
.social-shell,
.video-shell {
    background: #fff;
    border: 1px solid #eef0f5;
    border-radius: 16px;
}
.map-shell {
    min-height: 420px;
    padding: 10px;
}

.section-tag {
    background: var(--light);
    color: var(--primary);
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    border: 1.5px solid rgba(4, 99, 250, 0.2);
}
</style>
