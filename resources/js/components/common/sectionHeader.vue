<template>
    <div class="container-xxl py-5">
        <div class="container">
            <div
                class="text-center mx-auto mb-5 wow fadeInUp"
                data-wow-delay="0.1s"
                style="max-width: 600px"
            >
                <p class="d-inline-block border rounded-pill py-1 px-4">
                    {{ section }}
                </p>
                <h1>{{ title }}</h1>
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
