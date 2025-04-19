import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        props: true,
        component: () => import("./components/Home.vue"),
    },
    {
        path: "/about-us",
        component: () => import("./components/Aboutus.vue"),
    },
    {
        path: "/contact-us",
        component: () => import("./components/Contactus.vue"),
    },
    {
        path: "/gallery",
        component: () => import("./components/Gallery.vue"),
    },
    {
        path: "/blogs",
        component: () => import("./components/Blogs.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});