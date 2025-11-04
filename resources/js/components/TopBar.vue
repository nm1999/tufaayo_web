<template>
    <div class="topbar">
        <!-- Topbar Start -->
        <div
            class="container-fluid w3-blue text-white p-0 wow fadeIn"
            data-wow-delay="0.1s"
        >
            <div class="row gx-0 d-none d-lg-flex">
                <div class="col-lg-7 col-sm-6 px-5 text-start">
                    <div
                        class="h-100 d-inline-flex align-items-center py-3 me-4"
                    >
                        <small
                            class="fa fa-map-marker-alt text-primary me-2"
                        ></small>
                        <small> {{ location }}</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-3">
                        <small class="far fa-clock text-primary me-2"></small>
                        <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                    </div>
                </div>
                <div class="col-lg-5 px-5 col-sm-6 text-end">
                    <div
                        class="h-100 d-inline-flex align-items-center py-3 me-4"
                    >
                        <small
                            class="fa fa-phone-alt text-primary me-2"
                        ></small>
                        <small>{{ PhoneNumber }}</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center">
                        <a
                            class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                            href=""
                            ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a
                            class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                            href=""
                            ><i class="fab fa-twitter"></i
                        ></a>
                        <a
                            class="btn btn-sm-square rounded-circle bg-white text-primary me-1"
                            href=""
                            ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <a
                            class="btn btn-sm-square rounded-circle bg-white text-primary me-0"
                            href=""
                            ><i class="fab fa-instagram"></i
                        ></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <nav
            class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn"
            data-wow-delay="0.1s"
        >
        <a class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <button
                    @click="toggleMenu()"
                    type="button"
                    class="navbar-toggler m-2"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="m-0 text-primary our-name" style="font-weight: bold">
                    <i class="">
                        <img
                            :src="'images/tufaayologo.png'"
                            style="width: 80px; height: 80px"
                            alt=""
                            class="logo"
                        /> </i
                    ><span style="color: #fd27dd">Tufaayo</span> Foundation
                </h1>
            </a>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <router-link 
                        to="/" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/' }"
                        >Home</router-link
                    >
                    <router-link 
                        to="/about-us" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/about-us' }"
                        >About Us
                        </router-link>
                    <router-link 
                        to="/contact-us" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/contact-us' }"
                        >Contact Us</router-link
                    >
                    <router-link 
                        to="/team" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/team' }"
                        >Our Team</router-link
                    >
                    <router-link 
                        to="/gallery" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/gallery' }"
                        >Gallery</router-link
                    >
                    <router-link 
                        to="/blogs" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/blogs' }"
                        >Blogs</router-link
                    >
                </div>
            </div>
            <div v-if="isToggled">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <router-link
                        @click="isToggled = false" 
                        to="/" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/' }"
                        >Home</router-link
                    >
                    <router-link 
                        @click="isToggled = false" 
                        to="/about-us" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/about-us' }"
                        >About Us</router-link
                    >
                    <router-link 
                        @click="isToggled = false" 
                        to="/contact-us" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/contact-us' }"
                        >Contact Us</router-link
                    >
                    <router-link 
                        @click="isToggled = false" 
                        to="/team" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/team' }"
                        >Our Team</router-link
                    >
                    <router-link
                        @click="isToggled = false"
                        to="/gallery" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/gallery' }"
                        >Gallery</router-link
                    >
                    <router-link 
                        @click="isToggled = false"
                        to="/blogs" 
                        class="nav-item nav-link"
                        :class="{ 'active': $route.path === '/blogs' }"
                        >Blogs</router-link
                    >
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
.topbar {
    position: fixed;
    width: 100%;
    border-bottom: 1px solid rgb(218, 213, 213);
    z-index: 10000;
}

.navbar-toggler{
    font-size:14px;
}

@media (max-width: 768px) {
    .logo {
        display: none;
    }
    .our-name{
        font-size:24px;
        margin-left:4px;
    }
}
</style>
