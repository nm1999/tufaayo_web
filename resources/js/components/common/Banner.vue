<template>
    <div class="banner">
        <div class="container" style="margin-top: 150px;margin-bottom: auto;">
            <h2 class="text-white" style="font-weight:bold">{{bannerTitle}}</h2>
            <h6>{{ description }}</h6>            
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
    background-image: url('../../../../public/img/3.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>