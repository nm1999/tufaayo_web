<template>
    <div class="container-xxl py-5">
        <div class="container">
            <div
                class="text-center mx-auto mb-5 anim-fade-up animate-on-scroll"
                style="max-width: 640px"
            >
                <span class="section-tag d-inline-block rounded-pill py-1 px-4 mb-2">
                    {{ section }}
                </span>
                <h1 class="section-title">{{ title }}</h1>
                <div class="section-header-line mx-auto"></div>
            </div>
            <div class="row g-4"></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "sectionHeader",
    props:{
        section:{
            type: String,
            required:true
        },
        title:{
            type:String,
            required:true
        }
    }
};
</script>

<style scoped>
.section-tag {
    background: var(--light);
    color: var(--primary);
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border: 1.5px solid rgba(4, 99, 250, 0.2);
}
.section-title {
    font-weight: 800;
    color: #1B2C51;
    margin-bottom: 0.4rem;
}
</style>
