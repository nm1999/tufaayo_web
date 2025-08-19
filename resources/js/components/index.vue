<template>
    <div class="">
        <TopBar PhoneNumber="+256 758 115 817" location="Lira City"/>
        <AnimatingElement />
        <div class="body">
           
            <router-view
                PhoneNumber="+256 758 115 817"
                location="Lira City"
                emailAddress="tufaayofoundation@gmail.com"
                :why_trust_us="''"
                :number_of_members="323"
                :communities_visited="323"
                :school_visited="42"
            />
        </div>
        <div>
            <WebFooter
                location="Lira City"
                PhoneNumber="+256 758 115 817"
                emailAddress="tufaayofoundation@gmail.com"
            />
        </div>
    </div>
</template>

<script>
import TopBar from "./TopBar.vue";
import WebFooter from "./WebFooter.vue";
import AnimatingElement from "./AnimatingElement.vue";
export default {
    name: "index",
    components: {
        TopBar,
        WebFooter,
        AnimatingElement
    },
    props: {
        settings:{
            type:Object,
            required:true
        }
    },
    mounted() {
        // This hook runs after the component has been mounted to the DOM
        this.setupIntersectionObserver();
    },
    methods: {
        setupIntersectionObserver() {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("visible");
                            observer.unobserve(entry.target);
                        }
                    });
                },
                {
                    root: null,
                    threshold: 0.1,
                }
            );

            const animatedElements = this.$el.querySelectorAll(".fade-in-up");
            animatedElements.forEach((element) => {
                observer.observe(element);
            });
        },
    },
};
</script>

<style scoped>
/* Scoped styles for this component */
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap");

.page-container {
    background-color: #f0f4f8; /* Light gray background */
    font-family: "Inter", sans-serif;
}

/* Initial state of the animated elements */
.fade-in-up {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 1s ease-out, transform 1s ease-out;
}

/* Final state of the animated elements (when visible) */
.fade-in-up.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Style for the main content sections */
.content-section {
    padding: 80px 20px;
    min-height: 50vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background-color: #ffffff;
    border-radius: 1rem;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    margin: 4rem 2rem;
}

.dark-section {
    background-color: #1a202c;
    color: #f0f4f8;
}

h2 {
    font-weight: 700;
}
p {
    font-weight: 400;
}

/* Style for the header to stick to the top */
.header-sticky {
    position: sticky;
    top: 0;
    z-index: 1000;
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
</style>
