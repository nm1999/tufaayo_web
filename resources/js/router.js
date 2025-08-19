import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        props: true,
        name:"Home",
        component: () => import("./components/Home.vue"),
    },
    {
        path: "/about-us",
        name:"AboutUs",
        component: () => import("./components/Aboutus.vue"),
    },
    {
        path: "/contact-us",
        name:"ContactUs",
        component: () => import("./components/Contactus.vue"),
    },
    {
        path: "/gallery",
        name:"Gallery",
        component: () => import("./components/Gallery.vue"),
    },
    {
        path: "/blogs",
        name:"Blogs",
        component: () => import("./components/Blogs.vue"),
    },
    {
        path: "/team",
        name:"Team",
        component: () => import("./components/Team.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});