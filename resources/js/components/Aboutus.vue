<template>
    <div>
        <Banner
            class="banner"
            bannerTitle="About Tufaayo Foundation"
            description="Youth-led. Community-driven. Changing lives in Lira, Uganda."
        />

        <div class="container-xxl py-5">
            <div class="container">
                <sectionHeader section="Who We Are" title="A Youth Movement for Dignity and Opportunity" />
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 anim-fade-left animate-on-scroll">
                        <div class="d-flex flex-column">
                            <img
                                class="img-fluid rounded-4 w-75 align-self-end shadow"
                                src="../../../public/img/aboutus2.jpeg"
                                alt="Community outreach"
                            />
                            <img
                                class="img-fluid rounded-4 w-50 bg-white pt-3 pe-3 shadow"
                                src="../../../public/img/aboutus3.jpeg"
                                alt="Girls empowerment"
                                style="margin-top: -25%"
                            />
                        </div>
                    </div>
                    <div class="col-lg-6 anim-fade-right animate-on-scroll">
                        <span class="section-tag d-inline-block rounded-pill py-1 px-4 mb-3">Our Identity</span>
                        <h2 class="fw-black mb-3" style="color:#1B2C51">Empowering Young People to Lead Better Futures</h2>
                        <p class="text-secondary lh-lg">
                            Tufaayo Foundation is a youth-led non-profit organization focused on empowering young people
                            from under-privileged communities. We equip girls and boys with practical life skills,
                            health information, and career guidance so they can make confident choices for their future.
                        </p>
                        <p class="text-secondary lh-lg mb-4">
                            Our approach combines education, protection, and community action to ensure that every young
                            person has the support needed to stay in school, stay safe, and thrive.
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="program-card text-start p-3 h-100">
                                    <h6 class="mb-2" style="color:#1B2C51"><i class="fa fa-users text-primary me-2"></i>Youth Leadership</h6>
                                    <p class="mb-0">Young people lead, design, and sustain our programs.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="program-card text-start p-3 h-100">
                                    <h6 class="mb-2" style="color:#1B2C51"><i class="fa fa-hand-holding-heart text-primary me-2"></i>Community Care</h6>
                                    <p class="mb-0">We respond to real needs through outreach and support.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-5">
            <sectionHeader section="Our Values" title="How We Work" />
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 anim-fade-up animate-on-scroll">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-people-carry"></i></div>
                        <h5>Teamwork</h5>
                        <p>We collaborate with schools, families, and local leaders to create sustainable change.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.1s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-globe-africa"></i></div>
                        <h5>Inclusiveness</h5>
                        <p>We champion equal access to opportunities for all youth regardless of background.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.2s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-eye"></i></div>
                        <h5>Transparency</h5>
                        <p>We are accountable in how we serve communities and use resources.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.1s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-lightbulb"></i></div>
                        <h5>Innovativeness</h5>
                        <p>We use creative methods like drama and peer learning to reach and inspire youth.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.2s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-seedling"></i></div>
                        <h5>Appreciation of Diversity</h5>
                        <p>We celebrate differences and build safe, respectful spaces for every young person.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.3s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-heart"></i></div>
                        <h5>Dignity First</h5>
                        <p>Every intervention is designed to protect dignity, confidence, and long-term hope.</p>
                    </div>
                </div>
            </div>
        </div>
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
    background-image: url("../../../public/images/1.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
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
