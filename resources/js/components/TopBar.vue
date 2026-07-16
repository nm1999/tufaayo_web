<template>
    <div class="topbar-shell">
        <div class="impact-strip d-none d-lg-block">
            <div class="container d-flex justify-content-between align-items-center py-2">
                <div class="d-flex gap-4 text-white small">
                    <span><i class="fa fa-map-marker-alt me-2"></i>{{ location }}</span>
                    <span><i class="far fa-clock me-2"></i>Mon - Fri: 09:00 AM - 06:00 PM</span>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <span class="text-white small"><i class="fa fa-phone-alt me-2"></i>{{ PhoneNumber }}</span>
                    <div class="d-flex gap-2">
                        <a class="social-dot" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-dot" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-dot" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-dot" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top shadow-sm main-nav">
            <div class="container px-3 px-lg-4">
                <router-link to="/" class="navbar-brand d-flex align-items-center gap-2 m-0">
                    <img :src="'images/tufaayologo.png'" alt="Tufaayo logo" class="logo" />
                    <h1 class="m-0 text-primary our-name">
                        <span class="brand-pink">Tufaayo</span> Foundation
                    </h1>
                </router-link>

                <button
                    @click="toggleMenu"
                    type="button"
                    class="navbar-toggler border-0"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarCollapse">
                    <div class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                        <router-link to="/" class="nav-item nav-link" :class="{ active: $route.path === '/' }">Home</router-link>
                        <router-link to="/about-us" class="nav-item nav-link" :class="{ active: $route.path === '/about-us' }">About Us</router-link>
                        <router-link to="/contact-us" class="nav-item nav-link" :class="{ active: $route.path === '/contact-us' }">Contact Us</router-link>
                        <router-link to="/team" class="nav-item nav-link" :class="{ active: $route.path === '/team' }">Our Team</router-link>
                        <router-link to="/gallery" class="nav-item nav-link" :class="{ active: $route.path === '/gallery' }">Gallery</router-link>
                        <router-link to="/blogs" class="nav-item nav-link" :class="{ active: $route.path === '/blogs' }">Blogs</router-link>
                        <router-link to="/contact-us" class="nav-cta">Donate</router-link>
                    </div>
                </div>
            </div>

            <div v-if="isToggled" class="mobile-menu d-lg-none">
                <div class="container py-3">
                    <div class="navbar-nav">
                        <router-link @click="isToggled = false" to="/" class="nav-item nav-link" :class="{ active: $route.path === '/' }">Home</router-link>
                        <router-link @click="isToggled = false" to="/about-us" class="nav-item nav-link" :class="{ active: $route.path === '/about-us' }">About Us</router-link>
                        <router-link @click="isToggled = false" to="/contact-us" class="nav-item nav-link" :class="{ active: $route.path === '/contact-us' }">Contact Us</router-link>
                        <router-link @click="isToggled = false" to="/team" class="nav-item nav-link" :class="{ active: $route.path === '/team' }">Our Team</router-link>
                        <router-link @click="isToggled = false" to="/gallery" class="nav-item nav-link" :class="{ active: $route.path === '/gallery' }">Gallery</router-link>
                        <router-link @click="isToggled = false" to="/blogs" class="nav-item nav-link" :class="{ active: $route.path === '/blogs' }">Blogs</router-link>
                        <router-link @click="isToggled = false" to="/contact-us" class="nav-item nav-link">Donate</router-link>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>
<script>
export default {
    name: "TopBar",

    props: {
        PhoneNumber: {
            type: String,
            required: true,
        },
        location: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            isToggled: false,
        };
    },
    methods: {
        toggleMenu() {
            if (this.isToggled) {
                this.isToggled = false;
                return;
            }

            this.isToggled = true;
        },
    },
};
</script>

<style scoped>
.topbar-shell {
    position: fixed;
    width: 100%;
    z-index: 9999;
}

.impact-strip {
    background: linear-gradient(90deg, #1b2c51 0%, #0463fa 100%);
}

.main-nav {
    border-bottom: 1px solid #edf0f7;
}

.logo {
    width: 62px;
    height: 62px;
    object-fit: contain;
}

.our-name {
    font-size: 1.45rem;
    font-weight: 800;
}

.brand-pink {
    color: #fd27dd;
}

.nav-link {
    font-weight: 600;
    color: #1b2c51;
    padding: 0.65rem 0.9rem;
    border-radius: 999px;
    transition: all .25s ease;
}

.nav-link:hover,
.nav-link.active {
    color: var(--primary);
    background: var(--light);
    border-radius:1px;
    padding-left:5px;
    padding-right:5px;
}

.nav-cta {
    color: #fff !important;
    font-weight: 700;
    background: linear-gradient(135deg, #0463fa, #fd27dd);
    border: none;
    letter-spacing: 0.3px;
    box-shadow: 0 4px 14px rgba(4, 99, 250, 0.35);
    transition: all 0.3s ease;
    padding:6px;
    text-transform: uppercase;
    text-decoration: none;
}

.nav-cta:hover {
    color: #fff !important;
    background: linear-gradient(135deg, #0255e0, #e020c9);
    transform: translateY(-2px);
    box-shadow: 0 6px 22px rgba(4, 99, 250, 0.45);
}

.social-dot {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.18);
    color: #fff;
    transition: transform .2s ease, background .2s ease;
}

.social-dot:hover {
    transform: translateY(-2px);
    background: #fd27dd;
    color: #fff;
}

.mobile-menu {
    background: #fff;
    border-top: 1px solid #edf0f7;
    width: 100%;
}

.navbar-toggler {
    font-size: 14px;
}

@media (max-width: 768px) {
    .logo {
        display: none;
    }
    .our-name {
        font-size: 22px;
    }
}
</style>
