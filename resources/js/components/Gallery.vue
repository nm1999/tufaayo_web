<template>
    <div class="pt-5">
        <div class="container pt-5">
            <h4 class="pt-5">Our Gallery</h4>
            <div 
                v-if="imagesData.length > 0"
                class="row">
                <div
                    v-for="(image,index) in imagesData"
                    :key="index"
                    class="col-sm-12 col-md-4 col-lg-4"
                >
                    <div class="card-content" >
                        <img :src="image" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div v-else class="w3-center">
                <img src="../../../public/images/loading.gif" style="width:200px;height:200px;" alt="">
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name:"Gallery",
    data() {
        return {
            imagesData: []
        }
    },
    mounted(){
        this.myGalleryImages();
    },
    methods:{
        async myGalleryImages() {
            await axios.get('/api/our/images').then((res)=>{
                this.imagesData = res.data.images;
            });
        }
    }
}
</script>