<template>
    <div class="banner">
        <div class="container" style="margin-top: 150px;margin-bottom: auto;">
            <h1 class="text-white w3-animate-top " style="font-weight:bold">{{bannerTitle}}</h1>
            <h6 class="tufaayo-color w3-animate-zoom">{{ description }}</h6>            
        </div>
    </div>
</template>

<script>
export default {
    name:"Banner",
    props:{
        bgImageUrl:{
            type:String,
            required:true
        },
        bannerTitle:{
            type:String,
            required:true,
        },
        description:{
            type:String,
            required:true
        }
    },
    computed: {
        
    },
}
</script>

<style scoped>
.banner{
    height:450px;
    width: 100%;
    padding-top:180px;
}
</style>