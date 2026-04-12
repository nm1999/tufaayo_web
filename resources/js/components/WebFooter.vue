<template>
    <footer class="site-footer mt-5">
        <div class="footer-glow"></div>
        <div class="container py-5 position-relative">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white fw-black mb-3"><span class="brand-pink">Tufaayo</span> Foundation</h4>
                    <p class="footer-copy mb-3">
                        A youth-led nonprofit empowering girls and communities through health education,
                        mentorship, and practical support programs.
                    </p>
                    <div class="d-flex flex-column gap-2 small">
                        <span><i class="fa fa-map-marker-alt me-2"></i>{{ location }}</span>
                        <span><i class="fa fa-phone-alt me-2"></i>{{ PhoneNumber }}</span>
                        <span><i class="fa fa-envelope me-2"></i>{{ emailAddress }}</span>
                    </div>
                    <div class="d-flex gap-2 pt-3">
                        <a class="social-btn" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-btn" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-btn" href=""><i class="fab fa-youtube"></i></a>
                        <a class="social-btn" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Programs</h6>
                    <ul class="footer-links">
                        <li><a href="">Menstrual Hygiene</a></li>
                        <li><a href="">Career Guidance</a></li>
                        <li><a href="">Sugar Daddy Awareness</a></li>
                        <li><a href="">Community Outreach</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Quick Links</h6>
                    <ul class="footer-links">
                        <li><router-link to="/">Home</router-link></li>
                        <li><router-link to="/about-us">About Us</router-link></li>
                        <li><router-link to="/gallery">Gallery</router-link></li>
                        <li><router-link to="/blogs">Blogs</router-link></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="subscribe-box">
                        <h6 class="footer-heading mb-2">Stay Connected</h6>
                        <p class="footer-copy mb-3">Get updates on programs, school outreaches, and ways to support our mission.</p>
                        <div class="position-relative">
                            <input class="form-control subscribe-input" type="text" placeholder="Your email address" />
                            <button type="button" class="btn btn-primary subscribe-btn">Subscribe</button>
                        </div>
                        <router-link to="/contact-us" class="btn btn-outline-light rounded-pill mt-3 px-4">Volunteer or Donate</router-link>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 py-3">
                <small>&copy; {{ currentYear }} Tufaayo Foundation. All rights reserved.</small>
                <small>Built for community impact in Uganda.</small>
            </div>
        </div>
    </footer>
</template>
<script>
export default {
    name: "WebFooter",
    computed: {
        currentYear() {
            return new Date().getFullYear();
        },
    },
    props:{
        location: {
            type : String,
            required:true
        },
        PhoneNumber:{
            type:String,
            required: true
        },
        emailAddress:{
            type: String,
            required: true
        }
    }
}
</script>

<style scoped>
.site-footer {
    background: linear-gradient(135deg, #102245 0%, #1b2c51 45%, #0463fa 100%);
    color: #f2f6ff;
    position: relative;
    overflow: hidden;
}

.footer-glow {
    position: absolute;
    width: 460px;
    height: 460px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(253, 39, 221, 0.18) 0%, rgba(253, 39, 221, 0) 70%);
    top: -180px;
    right: -130px;
}

.brand-pink {
    color: #fd27dd;
}

.footer-copy {
    color: rgba(242, 246, 255, 0.85);
}

.footer-heading {
    color: #fff;
    font-weight: 700;
    margin-bottom: 1rem;
}

.footer-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: .55rem;
}

.footer-links a {
    color: rgba(242, 246, 255, 0.86);
    text-decoration: none;
    transition: color .2s ease, transform .2s ease;
    display: inline-block;
}

.footer-links a:hover {
    color: #fff;
    transform: translateX(4px);
}

.social-btn {
    width: 34px;
    height: 34px;
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    transition: all .2s ease;
}

.social-btn:hover {
    background: #fd27dd;
    border-color: #fd27dd;
    color: #fff;
    transform: translateY(-2px);
}

.subscribe-box {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.14);
    border-radius: 16px;
    padding: 1.25rem;
}

.subscribe-input {
    border-radius: 999px;
    border: 0;
    height: 48px;
    padding-right: 124px;
}

.subscribe-btn {
    position: absolute;
    top: 5px;
    right: 6px;
    border-radius: 999px;
    height: 38px;
    padding: 0 1rem;
    font-size: .9rem;
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    background: rgba(0, 0, 0, 0.1);
}

@media (max-width: 991px) {
    .subscribe-input {
        padding-right: 20px;
    }
    .subscribe-btn {
        position: static;
        width: 100%;
        margin-top: .6rem;
    }
}
</style>