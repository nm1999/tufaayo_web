import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./components/index.vue"),
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
        path: "/blogs",
        component: () => import("./components/Blogs.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});