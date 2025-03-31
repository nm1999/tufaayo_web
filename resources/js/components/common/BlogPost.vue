<template>
    <div>
        <div class="w3-card-4 w3-round w3-white">
            <div class="card-content">
                <img :src="imageSrc" class="img-fluid" alt="">
            </div>
            <div class="card-footer">
                <p class="title text-primary ">{{ title }}</p>
                <div class="">
                    <i class="fa fa-clock tufaayo-color"></i><span style="font-size:12px;margin-left:8px;">{{ date }}</span> 
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"BlogPost",
    props:{
        imageSrc:{
            type:String,
            required:true
        },
        title:{
            type:String,
            required: true
        },
        date:{
            type: String,
            required:true
        }
    }
}
</script>

<style scoped>
.title{
    font-weight: 500;
}
</style>