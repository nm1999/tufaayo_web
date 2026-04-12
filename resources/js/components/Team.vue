<template>
    <div>
        <Banner
            class="banner"
            bannerTitle="Our Team"
            description="Meet the youth leaders and mentors driving impact at Tufaayo Foundation."
        />

        <div class="container-xxl py-5">
            <div class="container">
                <sectionHeader section="People" title="The Team Behind the Mission" />

                <div class="row g-4">
                    <div
                        v-for="(member, index) in members"
                        :key="member.name"
                        class="col-sm-6 col-lg-4 anim-fade-up animate-on-scroll"
                        :style="{ transitionDelay: `${index * 0.08}s` }"
                    >
                        <div class="team-profile h-100">
                            <div class="team-image-wrap">
                                <img class="team-image" :src="member.image" :alt="member.name" />
                            </div>
                            <div class="team-body">
                                <h5 class="mb-1">{{ member.name }}</h5>
                                <p class="text-primary mb-2">{{ member.role }}</p>
                                <p class="small text-secondary mb-3">{{ member.bio }}</p>
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="volunteer-strip mt-5 anim-fade-up animate-on-scroll">
                    <i class="fa fa-hands-helping text-primary fs-3"></i>
                    <div>
                        <h5 class="mb-1" style="color:#1B2C51">Want to Serve with Us?</h5>
                        <p class="mb-0 text-secondary">Join our volunteer network and help empower more young people in Uganda.</p>
                    </div>
                    <a href="/contact-us" class="btn btn-primary rounded-pill ms-auto px-4">Join Team</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Banner from "./common/Banner.vue";
import sectionHeader from "./common/sectionHeader.vue";

export default {
    name: "Team",
    components: {
        Banner,
        sectionHeader,
    },
    data() {
        return {
            members: [
                {
                    name: "Nabazziwa Janat",
                    role: "Founder & CEO",
                    image: "../../../public/img/team1.jpeg",
                    bio: "Leads strategy, partnerships, and youth-centered advocacy programs.",
                },
                {
                    name: "Mugerwa Moses",
                    role: "Communications Lead",
                    image: "../../../public/img/team2.jpeg",
                    bio: "Drives community engagement, outreach storytelling, and awareness campaigns.",
                },
                {
                    name: "Muhindo Moureen",
                    role: "Director of Programs",
                    image: "../../../public/img/team3.jpeg",
                    bio: "Coordinates school initiatives, mentorship, and girls' empowerment projects.",
                },
                {
                    name: "Outreach Volunteers",
                    role: "Field Mobilizers",
                    image: "../../../public/images/1.jpeg",
                    bio: "Support event mobilization, peer education, and beneficiary follow-up in communities.",
                },
                {
                    name: "Youth Mentors",
                    role: "Guidance Team",
                    image: "../../../public/images/5.jpeg",
                    bio: "Provide practical life skills, counseling, and career guidance sessions in schools.",
                },
                {
                    name: "Health Champions",
                    role: "Wellness Ambassadors",
                    image: "../../../public/images/7.jpeg",
                    bio: "Promote menstrual health, reproductive awareness, and dignity-focused support.",
                },
            ],
        };
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
    background-image: url("../../../public/img/team1.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
}

.team-profile {
    background: #fff;
    border: 1px solid #eef0f5;
    border-radius: 18px;
    overflow: hidden;
    transition: transform .3s ease, box-shadow .3s ease;
}
.team-profile:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 36px rgba(4, 99, 250, 0.15);
}
.team-image-wrap {
    width: 100%;
    height: 260px;
    overflow: hidden;
}
.team-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.team-body {
    padding: 1.2rem;
    text-align: center;
}
</style>
