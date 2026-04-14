<template>
    <div>
        <!-- Hero Slider -->
        <Slider :images="imagesData" />

        <!-- ===== IMPACT COUNTERS ===== -->
        <section class="impact-section py-5">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-6 col-md-3 anim-fade-up animate-on-scroll">
                        <div class="impact-card">
                            <i class="fa fa-school impact-icon"></i>
                            <div class="impact-number">{{ schoolCount }}</div>
                            <div class="impact-label">Schools Reached</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 anim-fade-up animate-on-scroll" style="transition-delay:.15s">
                        <div class="impact-card">
                            <i class="fa fa-users impact-icon"></i>
                            <div class="impact-number">1,617<span style="font-size:1.5rem">+</span></div>
                            <div class="impact-label">Girls Empowered</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 anim-fade-up animate-on-scroll" style="transition-delay:.3s">
                        <div class="impact-card">
                            <i class="fa fa-hands-helping impact-icon"></i>
                            <div class="impact-number">{{ communitiesCount }}</div>
                            <div class="impact-label">Communities Visited</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 anim-fade-up animate-on-scroll" style="transition-delay:.45s">
                        <div class="impact-card">
                            <i class="fa fa-heart impact-icon"></i>
                            <div class="impact-number">{{ membersCount }}</div>
                            <div class="impact-label">Active Members</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== HOW WE STARTED ===== -->
        <div class="container py-5 animate-on-scroll">
            <sectionHeader
                section="Our Story"
                title="How We Started"
            />
            <div class="row align-items-center g-5">
                <div class="col-lg-6 anim-fade-left animate-on-scroll">
                    <p class="fs-6 lh-lg text-secondary">
                        Tufaayo Foundation was founded by a passionate young woman,
                        <strong>Nabaziwa Jannat</strong>, in Lira — a region still recovering from the
                        scars of the Kony War. During a visit to a local primary school,
                        she was struck by the sight of empty desks where young girls
                        should have been. Many girls missed school during their menstrual periods
                        due to a lack of sanitary pads, while others dropped out or were forced
                        into early marriages.
                    </p>
                    <p class="fs-6 lh-lg text-secondary">
                        Deeply moved, Jannat co-founded Tufaayo Foundation with
                        <strong>Muhindo Moureen</strong> and <strong>Mugerwa Moses</strong>,
                        with a mission to restore hope and dignity to vulnerable girls.
                        Today the foundation runs pad-making training, the Sugar Daddy
                        Awareness Program, career guidance, and community outreach across Lira.
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-5 mt-2" href="/about-us">Read Full Story</a>
                </div>
                <div class="col-lg-6 anim-fade-right animate-on-scroll">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded-4 w-75 align-self-end shadow"
                            src="../../../public/img/1.jpeg" alt="Tufaayo Foundation story" />
                        <img class="img-fluid rounded-4 w-50 bg-white pt-3 pe-3 shadow"
                            src="../../../public/img/2.jpeg" alt="Tufaayo Foundation story"
                            style="margin-top: -25%" />
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== KEY ACHIEVEMENTS ===== -->
        <div class="container-xxl py-5 bg-light rounded-4 my-4">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 anim-fade-right animate-on-scroll">
                        <span class="section-tag d-inline-block rounded-pill py-1 px-4 mb-3">About Us</span>
                        <h1 class="fw-black mb-4" style="color:#1B2C51">Key Achievements</h1>
                        <div class="achieve-item d-flex align-items-start gap-3 mb-3">
                            <i class="far fa-check-circle text-primary mt-1 fs-5"></i>
                            <p class="mb-0">Career guidance sessions delivered in <strong>10 primary and secondary schools</strong> helping students make informed life choices.</p>
                        </div>
                        <div class="achieve-item d-flex align-items-start gap-3 mb-3">
                            <i class="far fa-check-circle text-primary mt-1 fs-5"></i>
                            <p class="mb-0">Sugar Daddy awareness raised among <strong>1,617 girls</strong> across 11 secondary schools through interactive drama.</p>
                        </div>
                        <div class="achieve-item d-flex align-items-start gap-3 mb-3">
                            <i class="far fa-check-circle text-primary mt-1 fs-5"></i>
                            <p class="mb-0">Mama kits donated to <strong>30 pregnant teenagers</strong> at Amach HCIV; reusable pads to 50 girls at Amach Primary.</p>
                        </div>
                        <div class="achieve-item d-flex align-items-start gap-3 mb-4">
                            <i class="far fa-check-circle text-primary mt-1 fs-5"></i>
                            <p class="mb-0"><strong>30 young girls</strong> trained to make reusable pads using locally available materials.</p>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="/about-us">Join Us</a>
                    </div>
                    <div class="col-lg-6 anim-fade-left animate-on-scroll">
                        <div class="d-flex flex-column">
                            <img class="img-fluid rounded-4 w-75 align-self-end shadow"
                                src="../../../public/img/1.jpeg" alt="Key Achievements" />
                            <img class="img-fluid rounded-4 w-50 bg-white pt-3 pe-3 shadow"
                                src="../../../public/img/2.jpeg" alt="Key Achievements"
                                style="margin-top: -25%" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== OUR PROGRAMS ===== -->
        <div id="programs">
            <sectionHeader section="What We Do" title="Our Community Programs" />
        </div>
        <div class="container pb-5">
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4 anim-fade-up animate-on-scroll">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-first-aid"></i></div>
                        <h5>Menstrual Hygiene</h5>
                        <p>We train young girls to make reusable sanitary pads from locally available materials, ensuring menstrual dignity keeps them in school.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.1s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-shield-alt"></i></div>
                        <h5>Sugar Daddy Awareness</h5>
                        <p>Through drama and interactive plays, we educate girls on the dangers of exploitative relationships and empower them to say no.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.2s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-graduation-cap"></i></div>
                        <h5>Career Guidance</h5>
                        <p>We visit schools to help students explore career options, set goals, and make informed decisions about their education and future.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.1s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-comments"></i></div>
                        <h5>Behavior Change (SBCC)</h5>
                        <p>Social and Behavior Change Communication programs that shift attitudes and norms around health, gender equality, and youth rights.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.2s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-tshirt"></i></div>
                        <h5>Clothing Donations</h5>
                        <p>Community outreach programs that collect and donate clothes to vulnerable children, restoring warmth and dignity in their daily lives.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 anim-fade-up animate-on-scroll" style="transition-delay:.3s">
                    <div class="program-card">
                        <div class="icon-wrap"><i class="fa fa-baby"></i></div>
                        <h5>Mama Kits</h5>
                        <p>We provide essential birth-preparation kits to pregnant teenagers, ensuring safe delivery and a dignified start for mother and child.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== CORE VALUES (Feature) ===== -->
        <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
            <div class="container feature px-lg-0 animate-on-scroll">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 feature-text py-5 anim-fade-right animate-on-scroll">
                        <div class="p-lg-5 ps-lg-0">
                            <span class="d-inline-block border border-light rounded-pill text-light small fw-bold py-1 px-4 mb-3 text-uppercase" style="letter-spacing:1px">Our Values</span>
                            <h1 class="text-white fw-black mb-4">Core Values That<br>Drive Us Forward</h1>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center gap-2 text-white">
                                        <i class="fa fa-check-circle" style="color:#fd27dd"></i>
                                        <span>Team Work</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center gap-2 text-white">
                                        <i class="fa fa-check-circle" style="color:#fd27dd"></i>
                                        <span>Inclusivity</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center gap-2 text-white">
                                        <i class="fa fa-check-circle" style="color:#fd27dd"></i>
                                        <span>Transparency</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center gap-2 text-white">
                                        <i class="fa fa-check-circle" style="color:#fd27dd"></i>
                                        <span>Innovativeness</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center gap-2 text-white">
                                        <i class="fa fa-check-circle" style="color:#fd27dd"></i>
                                        <span>Appreciation of Diversity</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center gap-2 text-white">
                                        <i class="fa fa-check-circle" style="color:#fd27dd"></i>
                                        <span>Youth Leadership</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0" style="min-height: 400px">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100"
                                src="../../../public/images/9.jpeg"
                                style="object-fit: cover" alt="Tufaayo core values" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== OUTREACHES ===== -->
        <div class="container py-5 animate-on-scroll">
            <sectionHeader title="Our Outreaches" section="In The Field" />
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3 anim-fade-up animate-on-scroll">
                    <div class="outreach-card">
                        <img src="../../../public/images/1.jpeg" alt="Outreach" />
                        <div class="card-body">
                            <p class="card-title">Photo with student leaders at Amach Complex School</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 anim-fade-up animate-on-scroll" style="transition-delay:.1s">
                    <div class="outreach-card">
                        <img src="../../../public/images/7.jpeg" alt="Outreach" />
                        <div class="card-body">
                            <p class="card-title">Conducting a play about the Sugar Daddy dangers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 anim-fade-up animate-on-scroll" style="transition-delay:.2s">
                    <div class="outreach-card">
                        <img src="../../../public/images/5.jpeg" alt="Outreach" />
                        <div class="card-body">
                            <p class="card-title">Career guidance talks with secondary school students</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 anim-fade-up animate-on-scroll" style="transition-delay:.3s">
                    <div class="outreach-card">
                        <img src="../../../public/gallery/31.jpeg" alt="Outreach" />
                        <div class="card-body">
                            <p class="card-title">Giving mama kits to expectant mothers at Amach HCIV</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== DONATE CTA ===== -->
        <div class="container py-4 mb-5">
            <div class="donate-section text-center">
                <h2 class="text-white fw-black mb-3" style="font-size:clamp(1.6rem,3vw,2.5rem)">
                    Be the Change. Support a Girl's Future Today.
                </h2>
                <p class="text-white-75 mb-4 fs-5" style="color:rgba(255,255,255,0.85)">
                    Your contribution funds sanitary pads, mama kits, school visits, and more.<br>Together we can ensure no girl is left behind.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="/contact-us" class="donate-btn btn">Donate Now <i class="fa fa-heart ms-2"></i></a>
                    <a href="/contact-us" class="btn btn-outline-light rounded-pill px-4 py-2">Volunteer With Us</a>
                </div>
            </div>
        </div>

        <!-- ===== MISSION & VISION ===== -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 anim-fade-left animate-on-scroll">
                        <div class="p-4 rounded-4 h-100 d-flex flex-column justify-content-center" style="background:var(--light);border-left:5px solid var(--primary)">
                            <h4 class="fw-bold mb-2" style="color:var(--primary)"><i class="fa fa-bullseye me-2"></i>Our Mission</h4>
                            <p class="text-secondary mb-0 fs-5">Transforming young lives in Uganda with information and life skills to live a healthy and successful life.</p>
                        </div>
                    </div>
                    <div class="col-md-6 anim-fade-right animate-on-scroll">
                        <div class="p-4 rounded-4 h-100 d-flex flex-column justify-content-center" style="background:var(--light);border-left:5px solid #fd27dd">
                            <h4 class="fw-bold mb-2" style="color:#fd27dd"><i class="fa fa-eye me-2"></i>Our Vision</h4>
                            <p class="text-secondary mb-0 fs-5">Empowering communities, changing lives — one girl, one family, one school at a time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== TEAM ===== -->
        <div class="container-xxl py-5">
            <div class="container animate-on-scroll">
                <div class="text-center mx-auto mb-5" style="max-width: 600px">
                    <span class="section-tag d-inline-block rounded-pill py-1 px-4 mb-2">Meet The Team</span>
                    <h1 class="fw-black" style="color:#1B2C51">The Passionate People<br>Behind Tufaayo</h1>
                    <div class="section-header-line mx-auto"></div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 anim-fade-up animate-on-scroll">
                        <div class="team-item position-relative rounded-4 overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" style="max-height: 400px; width: 100%; object-fit:cover"
                                    src="../../../public/img/team1.jpeg" alt="Nabazziwa Janat" />
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5 class="fw-bold">Nabazziwa Janat</h5>
                                <p class="text-primary mb-0">Founder & CEO</p>
                                <div class="team-social text-center mt-2">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 anim-fade-up animate-on-scroll" style="transition-delay:.15s">
                        <div class="team-item position-relative rounded-4 overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" style="max-height: 400px; width: 100%; object-fit:cover"
                                    src="../../../public/img/team2.jpeg" alt="Mugerwa Moses" />
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5 class="fw-bold">Mugerwa Moses</h5>
                                <p class="text-primary mb-0">Communications</p>
                                <div class="team-social text-center mt-2">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 anim-fade-up animate-on-scroll" style="transition-delay:.3s">
                        <div class="team-item position-relative rounded-4 overflow-hidden">
                            <div class="overflow-hidden">
                                <img class="img-fluid" style="max-height: 400px; width: 100%; object-fit:cover"
                                    src="../../../public/img/team3.jpeg" alt="Muhindo Moureen" />
                            </div>
                            <div class="team-text bg-light text-center p-4">
                                <h5 class="fw-bold">Muhindo Moureen</h5>
                                <p class="text-primary mb-0">Director of Programs</p>
                                <div class="team-social text-center mt-2">
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
    </div>
</template>

<script>
import { ref } from "vue";
import sectionHeader from "./common/sectionHeader.vue";
import Slider from "./common/Slider.vue";
export default {
    name: "Home",
    components: {
        sectionHeader,
        Slider,
    },
    computed: {
        schoolCount() { return this.school_visited; },
        communitiesCount() { return this.communities_visited; },
        membersCount() { return this.number_of_members; },
    },
    setup() {
        const imagesData = ref([]);
        const myGalleryImages = async () => {
            await axios.get("/api/our/images").then((res) => {
                imagesData.value = res.data.images;
            });
        };
        myGalleryImages();
        return { imagesData };
    },
    props: {
        school_visited: { type: Number, required: true },
        communities_visited: { type: Number, required: true },
        number_of_members: { type: Number, required: true },
        why_trust_us: { type: String, required: false, default: null },
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
            animatedElements.forEach((el) => observer.observe(el));
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

.donate-section {
    background: linear-gradient(135deg, #1b2c51 0%, #0463fa 60%, #fd27dd 100%);
    border-radius: 1.75rem;
    padding: 4rem 2rem;
    box-shadow: 0 20px 60px rgba(27, 44, 81, 0.2);
}

.donate-btn {
    display: inline-flex;
    align-items: center;
    color: #fff;
    font-weight: 700;
    font-size: 1.05rem;
    padding: 0.8rem 2.2rem;
    border-radius: 50px;
    border: 2px solid rgba(255, 255, 255, 0.7);
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(8px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
    text-decoration: none;
    letter-spacing: 0.5px;
}

.donate-btn:hover {
    background: #fff;
    color: #0463fa;
    border-color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.donate-btn:active {
    transform: translateY(-1px);
}
</style>
