<template>
    <div class="page-banner banner">
        <div class="page-banner-overlay"></div>
        <div class="container page-banner-content">
            <nav aria-label="breadcrumb" class="mb-2">
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item">
                        <a href="/" class="text-white-50 text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        {{ bannerTitle }}
                    </li>
                </ol>
            </nav>
            <h1 class="text-white fw-black">{{ bannerTitle }}</h1>
            <p class="tufaayo-color fs-5 fw-semibold">{{ description }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name:"Banner",
    props:{
        bannerTitle:{
            type:String,
            required:true,
        },
        description:{
            type:String,
            required:true
        }
    },
}
</script>

<style scoped>
.banner{
    background: url('../../../../public/img/aboutus1.jpeg') center center no-repeat;
    background-size: cover;
}
</style>